<?php

namespace SellingPartnerApi;

use ReflectionClass;

/*******************************/
/** Report/Feed content types **/
/*******************************/

class ContentType
{
    const CSV = 'text/csv';
    const JSON = 'application/json';
    const PDF = 'application/pdf';
    const PLAIN = 'text/plain';
    const TAB = 'text/tab-separated-values';
    const XLSX = 'application/vnd.openxmlformats-officedocument.spreadsheetml.sheet';
    const XML = 'text/xml';

    public static function getContentTypes()
    {
        $reflectionClass = new ReflectionClass(__CLASS__);
        return $reflectionClass->getConstants();
    }
}
