<?php
/**
 * FileType
 *
 * PHP version 7.3
 *
 * @category Class
 * @package  SellingPartnerApi
 */

/**
 * Selling Partner API for Merchant Fulfillment
 *
 * The Selling Partner API for Merchant Fulfillment helps you build applications that let sellers purchase shipping for non-Prime and Prime orders using Amazon's Buy Shipping Services.
 *
 * The version of the OpenAPI document: v0
 * 
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 5.0.1
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace SellingPartnerApi\Model\MerchantFulfillmentV0;
use \SellingPartnerApi\ObjectSerializer;
use \SellingPartnerApi\Model\ModelInterface;

/**
 * FileType Class Doc Comment
 *
 * @category Class
 * @description The file type for a label.
 * @package  SellingPartnerApi
 * @group 
 */
class FileType
{
    /**
     * Possible values of this enum
     */
    const APPLICATION_PDF = 'application/pdf';
    const APPLICATION_ZPL = 'application/zpl';
    const IMAGE_PNG = 'image/png';
    const TYPE_EMPTY = '';
    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::APPLICATION_PDF,
            self::APPLICATION_ZPL,
            self::IMAGE_PNG,
            self::TYPE_EMPTY,
        ];
    }
}


