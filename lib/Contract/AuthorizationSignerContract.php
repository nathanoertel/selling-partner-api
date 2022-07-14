<?php

namespace SellingPartnerApi\Contract;

use GuzzleHttp\Psr7\Request;
use SellingPartnerApi\Credentials;

interface AuthorizationSignerContract
{
    public function sign(Request $request, Credentials $credentials);

    public function setRequestTime(\DateTime $datetime = null);

    public function formattedRequestTime($withTime = true);
}