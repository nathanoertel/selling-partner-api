<?php
/**
 * FeeLineItem
 *
 * PHP version 7.3
 *
 * @category Class
 * @package  SellingPartnerApi
 */

/**
 * Selling Partner API for FBA Small And Light
 *
 * The Selling Partner API for FBA Small and Light lets you help sellers manage their listings in the Small and Light program. The program reduces the cost of fulfilling orders for small and lightweight FBA inventory. You can enroll or remove items from the program and check item eligibility and enrollment status. You can also preview the estimated program fees charged to a seller for items sold while enrolled in the program.
 *
 * The version of the OpenAPI document: v1
 * 
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 5.0.1
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace SellingPartnerApi\Model\SmallAndLightV1;

use \ArrayAccess;
use \SellingPartnerApi\ObjectSerializer;
use \SellingPartnerApi\Model\ModelInterface;

/**
 * FeeLineItem Class Doc Comment
 *
 * @category Class
 * @description Fee details for a specific fee.
 * @package  SellingPartnerApi
 * @group 
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null  
 */
class FeeLineItem implements ModelInterface, ArrayAccess, \JsonSerializable
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'FeeLineItem';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'fee_type' => 'string',
        'fee_charge' => '\SellingPartnerApi\Model\SmallAndLightV1\MoneyType'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'fee_type' => null,
        'fee_charge' => null
    ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPITypes()
    {
        return self::$openAPITypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPIFormats()
    {
        return self::$openAPIFormats;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'fee_type' => 'feeType',
        'fee_charge' => 'feeCharge'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
                'fee_type' => 'setFeeType',
        'fee_charge' => 'setFeeCharge'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'fee_type' => 'getFeeType',
        'fee_charge' => 'getFeeCharge'
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @return array
     */
    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @return array
     */
    public static function setters()
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @return array
     */
    public static function getters()
    {
        return self::$getters;
    }

    /**
     * The original name of the model.
     *
     * @return string
     */
    public function getModelName()
    {
        return self::$openAPIModelName;
    }

    const FEE_TYPE_FBA_WEIGHT_BASED_FEE = 'FBAWeightBasedFee';
    const FEE_TYPE_FBA_PER_ORDER_FULFILLMENT_FEE = 'FBAPerOrderFulfillmentFee';
    const FEE_TYPE_FBA_PER_UNIT_FULFILLMENT_FEE = 'FBAPerUnitFulfillmentFee';
    const FEE_TYPE_COMMISSION = 'Commission';
    
    

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getFeeTypeAllowableValues()
    {
        return [
            self::FEE_TYPE_FBA_WEIGHT_BASED_FEE,
            self::FEE_TYPE_FBA_PER_ORDER_FULFILLMENT_FEE,
            self::FEE_TYPE_FBA_PER_UNIT_FULFILLMENT_FEE,
            self::FEE_TYPE_COMMISSION,
        ];
    }
    
    /**
     * Associative array for storing property values
     *
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['fee_type'] = isset($data['fee_type']) ? $data['fee_type'] : null;
        $this->container['fee_charge'] = isset($data['fee_charge']) ? $data['fee_charge'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['fee_type'] === null) {
            $invalidProperties[] = "'fee_type' can't be null";
        }
        $allowedValues = $this->getFeeTypeAllowableValues();
        if (!is_null($this->container['fee_type']) && !in_array($this->container['fee_type'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'fee_type', must be one of '%s'",
                $this->container['fee_type'],
                implode("', '", $allowedValues)
            );
        }

        if ($this->container['fee_charge'] === null) {
            $invalidProperties[] = "'fee_charge' can't be null";
        }
        return $invalidProperties;
    }

    /**
     * Validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {
        return count($this->listInvalidProperties()) === 0;
    }


    /**
     * Gets fee_type
     *
     * @return string
     */
    public function getFeeType()
    {
        return $this->container['fee_type'];
    }

    /**
     * Sets fee_type
     *
     * @param string $fee_type The type of fee charged to the seller.
     *
     * @return self
     */
    public function setFeeType($fee_type)
    {
        $allowedValues = $this->getFeeTypeAllowableValues();
        if (!in_array($fee_type, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'fee_type', must be one of '%s'",
                    $fee_type,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['fee_type'] = $fee_type;

        return $this;
    }
    /**
     * Gets fee_charge
     *
     * @return \SellingPartnerApi\Model\SmallAndLightV1\MoneyType
     */
    public function getFeeCharge()
    {
        return $this->container['fee_charge'];
    }

    /**
     * Sets fee_charge
     *
     * @param \SellingPartnerApi\Model\SmallAndLightV1\MoneyType $fee_charge fee_charge
     *
     * @return self
     */
    public function setFeeCharge($fee_charge)
    {
        $this->container['fee_charge'] = $fee_charge;

        return $this;
    }

    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    #[\ReturnTypeWillChange]
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param integer $offset Offset
     *
     * @return mixed|null
     */
    #[\ReturnTypeWillChange]
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
     * Sets value based on offset.
     *
     * @param int|null $offset Offset
     * @param mixed    $value  Value to be set
     *
     * @return void
     */
    #[\ReturnTypeWillChange]
    public function offsetSet($offset, $value)
    {
        if (is_null($offset)) {
            $this->container[] = $value;
        } else {
            $this->container[$offset] = $value;
        }
    }

    /**
     * Unsets offset.
     *
     * @param integer $offset Offset
     *
     * @return void
     */
    #[\ReturnTypeWillChange]
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
     * Serializes the object to a value that can be serialized natively by json_encode().
     * @link https://www.php.net/manual/en/jsonserializable.jsonserialize.php
     *
     * @return mixed Returns data which can be serialized by json_encode(), which is a value
     * of any type other than a resource.
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize()
    {
       return ObjectSerializer::sanitizeForSerialization($this);
    }

    /**
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
    {
        return json_encode(
            ObjectSerializer::sanitizeForSerialization($this),
            JSON_PRETTY_PRINT
        );
    }

    /**
     * Gets a header-safe presentation of the object
     *
     * @return string
     */
    public function toHeaderValue()
    {
        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}


