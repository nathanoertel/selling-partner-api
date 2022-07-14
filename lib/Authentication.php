<?php

namespace SellingPartnerApi;

use Aws\Sts\StsClient;
use GuzzleHttp\Client;
use GuzzleHttp\Psr7;
use SellingPartnerApi\Api\TokensV20210301Api as TokensApi;
use SellingPartnerApi\Model\TokensV20210301 as Tokens;
use RuntimeException;
use SellingPartnerApi\Contract\AuthorizationSignerContract;
use SellingPartnerApi\Contract\RequestSignerContract;

class Authentication implements RequestSignerContract
{
    private $lwaClientId;
    private $lwaClientSecret;
    private $lwaRefreshToken = null;
    private $lwaAuthUrl      = null;
    private $endpoint;

    private $onUpdateCreds;
    private $roleArn;

    private $signingScope = null;

    /** @var \GuzzleHttp\ClientInterface */
    private $client = null;
    private $awsCredentials = null;
    private $grantlessAwsCredentials = null;
    private $grantlessCredentialsScope = null;
    private $roleCredentials = null;
    private $restrictedDataTokens = [];

    /**
     * @var string
     */
    private $awsAccessKeyId;
    /**
     * @var string
     */
    private $awsSecretAccessKey;
    
    /** @var \SellingPartnerApi\Api\TokensV20210301Api */
    private $tokensApi = null;

    /** @var AuthorizationSignerContract */
    private $authorizationSigner;

    /**
     * Authentication constructor.
     * @param array $configurationOptions
     * @throws RuntimeException
     */
    public function __construct(array $configurationOptions)
    {
        $this->client = $configurationOptions['authenticationClient'] ?? new Client();

        $this->lwaAuthUrl = $configurationOptions['lwaAuthUrl'] ?? "https://api.amazon.com/auth/o2/token";
        $this->lwaRefreshToken = $configurationOptions['lwaRefreshToken'] ?? null;
        $this->onUpdateCreds = $configurationOptions['onUpdateCredentials'] ?? null;
        $this->lwaClientId = $configurationOptions['lwaClientId'];
        $this->lwaClientSecret = $configurationOptions['lwaClientSecret'];
        $this->endpoint = $configurationOptions['endpoint'];

        $accessToken = $configurationOptions['accessToken'] ?? null;
        $accessTokenExpiration = $configurationOptions['accessTokenExpiration'] ?? null;

        $this->awsAccessKeyId = $configurationOptions['awsAccessKeyId'];
        $this->awsSecretAccessKey = $configurationOptions['awsSecretAccessKey'];

        $this->roleArn = $configurationOptions['roleArn'] ?? null;

        if ($accessToken !== null && $accessTokenExpiration !== null) {
            $this->populateCredentials($this->awsAccessKeyId, $this->awsSecretAccessKey, $accessToken, $accessTokenExpiration);
        }
        
        $this->tokensApi = $configurationOptions['tokensApi'] ?? null;

        $this->authorizationSigner = $configurationOptions['authorizationSigner'] ?? new AuthorizationSigner($this->endpoint);
    }

    public function getAuthorizationSigner()
    {
        return $this->authorizationSigner;
    }

    /**
     * @return array
     * @throws \GuzzleHttp\Exception\GuzzleException|\RuntimeException
     */
    public function requestLWAToken()
    {
        $jsonData = [
            "grant_type" => $this->signingScope ? "client_credentials" : "refresh_token",
            "client_id" => $this->lwaClientId,
            "client_secret" => $this->lwaClientSecret,
        ];

        // Only pass one of `scope` and `refresh_token`
        // https://github.com/amzn/selling-partner-api-docs/blob/main/guides/developer-guide/SellingPartnerApiDeveloperGuide.md#step-1-request-a-login-with-amazon-access-token
        if ($this->signingScope) {
            $jsonData["scope"] = $this->signingScope;
        } else {
            if ($this->lwaRefreshToken === null) {
                throw new RuntimeException('lwaRefreshToken must be specified when calling non-grantless API operations');
            }
            $jsonData["refresh_token"] = $this->lwaRefreshToken;
        }
        
        $lwaTokenRequestHeaders = [
            'Content-Type' => 'application/json',
        ];
        $lwaTokenRequestBody = \GuzzleHttp\json_encode($jsonData);
        $lwaTokenRequest = new Psr7\Request('POST', $this->lwaAuthUrl, $lwaTokenRequestHeaders, $lwaTokenRequestBody);
        $res = $this->client->send($lwaTokenRequest);

        $body = json_decode($res->getBody(), true);
        $accessToken = $body["access_token"];
        $expirationDate = new \DateTime("now", new \DateTimeZone("UTC"));
        $expirationDate->add(new \DateInterval("PT" . strval($body["expires_in"]) . "S"));
        return [$accessToken, $expirationDate->getTimestamp()];
    }

    public function populateCredentials($key, $secret, $token = null, $expires = null)
    {
        $creds = null;
        if ($token !== null && $expires !== null) {
            $creds = new Credentials($key, $secret, $token, $expires);
        } else {
            $creds = new Credentials($key, $secret);
        }

        if ($this->signingScope) {
            $this->grantlessAwsCredentials = $creds;
        } else {
            $this->awsCredentials = $creds;
        }
    }

    /**
     * Signs the given request using Amazon Signature V4.
     *
     * @param \Guzzle\Psr7\Request $request The request to sign
     * @param ?string $scope If the request is to a grantless operation endpoint, the scope for the grantless token
     * @param ?string $restrictedPath The absolute (generic) path for the endpoint that the request is using if it's an endpoint that requires
     *      a restricted data token
     * @return \Guzzle\Psr7\Request The signed request
     */
    public function signRequest(Psr7\Request $request, $scope = null, $restrictedPath = null, $operation = null)
    {
        // This allows us to know if we're signing a grantless operation without passing $scope all over the place
        $this->signingScope = $scope;

        // Check if the relevant AWS creds haven't been fetched or are expiring soon
        $relevantCreds = null;
        $params = [];

        parse_str($request->getUri()->getQuery(), $params);
        $dataElements = [];
        if (isset($params['dataElements'])) {
            $dataElements = explode(',', $params['dataElements']);
        }

        if (!$this->signingScope && ($restrictedPath === null || $dataElements === [])) {
            $relevantCreds = $this->getAwsCredentials();
        } else if ($this->signingScope) {  // There is no overlap between grantless and restricted operations
            $relevantCreds = $this->getGrantlessAwsCredentials($scope);
        } else if ($restrictedPath !== null) {
            $needRdt = true;

            // Not all getReportDocument calls need an RDT
            if ($operation === 'getReportDocument') {
                // We added a reportType query parameter that isn't in the official models, so that we can
                // determine if the getReportDocument call requires an RDT
                $constantPath = isset($params['reportType']) ? 'SellingPartnerApi\ReportType::' . $params['reportType'] : null;

                if ($constantPath === null || !defined($constantPath) || !constant($constantPath)['restricted']) {
                    $needRdt = false;
                    $relevantCreds = $this->getAwsCredentials();
                }

                // Remove the extra 'reportType' query parameter
                $newUri = Psr7\Uri::withoutQueryValue($request->getUri(), 'reportType');
                $request = $request->withUri($newUri);
            } else if (isset($params['dataElements'])) {
                // Remove the extra 'dataElements' query parameter
                $newUri = Psr7\Uri::withoutQueryValue($request->getUri(), 'dataElements');
                $request = $request->withUri($newUri);
            }

            if ($needRdt) {
                $relevantCreds = $this->getRestrictedDataToken($restrictedPath, $request->getMethod(), true, $dataElements);
            }
        }

        $accessToken = $relevantCreds->getSecurityToken();

        if ($this->roleArn !== null) {
            $relevantCreds = $this->getRoleCredentials();
        }

        $this->authorizationSigner->setRequestTime();
        $signedRequest = $this->authorizationSigner->sign($request, $relevantCreds)
            ->withHeader('x-amz-access-token', $accessToken);

        if ($this->roleArn) {
            $signedRequest = $signedRequest->withHeader("x-amz-security-token", $relevantCreds->getSecurityToken());
        }

        $this->signingScope = null;

        return $signedRequest;
    }

    /**
     * Get credentials for standard API operations.
     *
     * @return \SellingPartnerApi\Credentials A set of access credentials for making calls to the SP API
     */
    public function getAwsCredentials()
    {
        if ($this->needNewCredentials($this->awsCredentials)) {
            $this->newToken();
        }
        return $this->awsCredentials;
    }

    /**
     * Get credentials for grantless operations with the given scope.
     *
     * @return \SellingPartnerApi\Credentials The grantless credentials
     */
    public function getGrantlessAwsCredentials()
    {
        if ($this->needNewCredentials($this->grantlessAwsCredentials) || $this->signingScope !== $this->grantlessCredentialsScope) {
            $this->newToken();
            $this->grantlessCredentialsScope = $this->signingScope;
        }
        return $this->grantlessAwsCredentials;
    }

    /**
     * Get a security token using a role ARN.
     *
     * @return \SellingPartnerApi\Credentials A set of STS credentials
     */
    public function getRoleCredentials()
    {
        $originalCreds = $this->signingScope ? $this->getGrantlessAwsCredentials() : $this->getAwsCredentials();
        if ($this->needNewCredentials($this->roleCredentials)) {
            $client = new StsClient([
                'sts_regional_endpoints' => 'regional',
                'region' => $this->endpoint['region'],
                'version' => '2011-06-15',
                'credentials' => [
                    'key' => $originalCreds->getAccessKeyId(),
                    'secret' => $originalCreds->getSecretKey(),
                ],
            ]);
            $assumeTime = time();
            $assumed = $client->AssumeRole([
                'RoleArn' => $this->roleArn,
                'RoleSessionName' => "spapi-assumerole-{$assumeTime}",
            ]);
            $credentials = $assumed['Credentials'];
            $this->roleCredentials = new Credentials(
                $credentials['AccessKeyId'],
                $credentials['SecretAccessKey'],
                $credentials['SessionToken'],
                $credentials['Expiration']->getTimestamp(),
            );
        }

        return $this->roleCredentials;
    }

    /**
     * Get a restricted data token for the operation corresponding to $path and $method.
     *
     * @param string $path The generic or specific path for the restricted operation
     * @param string $method The HTTP method of the restricted operation
     * @param ?bool $generic Whether or not $path is a generic URL or a specific one. Default true
     * @param ?array $dataElements The restricted data elements to request access to, if any.
     *      Only applies to getOrder, getOrders, and getOrderItems. Default empty array.
     * @return \SellingPartnerApi\Credentials A Credentials object holding the RDT
     */
    public function getRestrictedDataToken($path, $method, $generic = true, $dataElements = [])
    {
        // Grab any pre-existing RDT for this operation
        $existingCreds = null;
        if (
            $generic &&  // Don't try to find a pre-existing token for a non-generic restricted path
            isset($this->restrictedDataTokens[$path]) &&
            strtoupper($this->restrictedDataTokens[$path]['method']) === strtoupper($method)
        ) {
            $existingCreds = $this->restrictedDataTokens[$path]['credentials'];
        }

        $rdtCreds = $existingCreds;
        // Create a new RDT if no matching one exists or if the matching one is expired
        if ($this->needNewCredentials($existingCreds)) {
            $standardCredentials = $this->getAwsCredentials();
            $tokensApi = $this->tokensApi;
            if (is_null($tokensApi)) {
                $config = new Configuration([
                    "lwaClientId" => $this->lwaClientId,
                    "lwaClientSecret" => $this->lwaClientSecret,
                    "lwaRefreshToken" => $this->lwaRefreshToken,
                    "lwaAuthUrl" => $this->lwaAuthUrl,
                    "awsAccessKeyId" => $this->awsAccessKeyId,
                    "awsSecretAccessKey" => $this->awsSecretAccessKey,
                    "accessToken" => $standardCredentials->getSecurityToken(),
                    "accessTokenExpiration" => $standardCredentials->getExpiration(),
                    "roleArn" => $this->roleArn,
                    "endpoint" => $this->endpoint,
                ]);
                $tokensApi = new TokensApi($config);
            }

            $restrictedResource = new Tokens\RestrictedResource([
                "method" => $method,
                "path" => $path,
            ]);
            if ($dataElements !== []) {
                $restrictedResource->setDataElements($dataElements);
            }

            $body = new Tokens\CreateRestrictedDataTokenRequest([
                "restricted_resources" => [$restrictedResource],
            ]);
            $rdtData = $tokensApi->createRestrictedDataToken($body);

            $rdtCreds = new Credentials(
                $this->awsAccessKeyId,
                $this->awsSecretAccessKey,
                $rdtData->getRestrictedDataToken(),
                time() + intval($rdtData->getExpiresIn())
            );

            // Save new RDT, if it's generic
            if ($generic) {
                $this->restrictedDataTokens[$path] = [
                    "method" => $method,
                    "credentials" => $rdtCreds,
                ];
            }
        }

        return $rdtCreds;
    }

    /**
     * Get LWA client ID.
     * 
     * @return string
     */
    public function getLwaClientId()
    {
        return $this->lwaClientId;
    }

    /**
     * Set LWA client ID.
     * 
     * @param string $lwaClientId
     * @return void
     */
    public function setLwaClientId($lwaClientId)
    {
        $this->lwaClientId = $lwaClientId;
    }

    /**
     * Get LWA client secret.
     * 
     * @return string
     */
    public function getLwaClientSecret()
    {
        return $this->lwaClientSecret;
    }

    /**
     * Set LWA client secret.
     * 
     * @param string $lwaClientSecret
     * @return void
     */
    public function setLwaClientSecret($lwaClientSecret)
    {
        $this->lwaClientSecret = $lwaClientSecret;
    }

    /**
     * Get LWA refresh token.
     * 
     * @return string|null
     */
    public function getLwaRefreshToken()
    {
        return $this->lwaRefreshToken;
    }

    /**
     * Set LWA refresh token.
     * 
     * @param string|null $lwaRefreshToken
     * @return void
     */
    public function setLwaRefreshToken($lwaRefreshToken = null)
    {
        $this->lwaRefreshToken = $lwaRefreshToken;
    }

    /**
     * Get AWS access key ID.
     * 
     * @return string
     */
    public function getAwsAccessKeyId()
    {
        return $this->awsAccessKeyId;
    }

    /**
     * Set AWS access key ID.
     * 
     * @param string $awsAccessKeyId
     * @return void
     */
    public function setAwsAccessKeyId($awsAccessKeyId)
    {
        $this->awsAccessKeyId = $awsAccessKeyId;
    }

    /**
     * Get AWS secret access key.
     * 
     * @return string|null
     */
    public function getAwsSecretAccessKey()
    {
        return $this->awsSecretAccessKey;
    }

    /**
     * Set AWS secret access key.
     * 
     * @param string $awsSecretAccessKey
     * @return void
     */
    public function setAwsSecretAccessKey($awsSecretAccessKey)
    {
        $this->awsSecretAccessKey = $awsSecretAccessKey;
    }

    /**
     * Get current SP API endpoint.
     *
     * @return array
     */
    public function getEndpoint()
    {
        return $this->endpoint;
    }

    /**
     * Set SP API endpoint. $endpoint should be one of the constants from Endpoint.php.
     * 
     * @param array $endpoint
     * @return void
     * @throws RuntimeException
     */
    public function setEndpoint($endpoint)
    {
        if (!array_key_exists('url', $endpoint) || !array_key_exists('region', $endpoint)) {
            throw new RuntimeException('$endpoint must contain `url` and `region` keys');
        }

        $this->endpoint = $endpoint;
    }

    /**
     * Check if the given credentials need to be created/renewed.
     *
     * @param ?\SellingPartnerApi\Credentials $creds The credentials to check
     * @return bool True if the credentials need to be updated, false otherwise
     */
    private function needNewCredentials(Credentials $creds = null)
    {
        return $creds === null || $creds->getSecurityToken() === null || $creds->expiresSoon();
    }

    private function newToken()
    {
        [$accessToken, $expirationTimestamp] = $this->requestLWAToken();
        $this->populateCredentials($this->awsAccessKeyId, $this->awsSecretAccessKey, $accessToken, $expirationTimestamp);
        if (!$this->signingScope && $this->onUpdateCreds !== null) {
            call_user_func($this->onUpdateCreds, $this->awsCredentials);
        }
    }

    /**
     * @param bool|null $withTime
     * @return string|null
     */
    public function formattedRequestTime($withTime = true)
    {
        return $this->requestSigner->formattedRequestTime($withTime);
    }
}
