<?php

namespace SellingPartnerApi\Contract;

use GuzzleHttp\Psr7\Request;

interface RequestSignerContract
{
    public function signRequest(
        Request $request,
        $scope = null,
        $restrictedPath = null,
        $operation = null
    );
}