<?php
/**
 * FeeDetail
 *
 * PHP version 7.3
 *
 * @category Class
 * @package  SellingPartnerApi
 */

/**
 * Selling Partner API for Product Fees
 *
 * The Selling Partner API for Product Fees lets you programmatically retrieve estimated fees for a product. You can then account for those fees in your pricing.
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

namespace SellingPartnerApi\Model\FeesV0;

use \ArrayAccess;
use \SellingPartnerApi\ObjectSerializer;
use \SellingPartnerApi\Model\ModelInterface;

/**
 * FeeDetail Class Doc Comment
 *
 * @category Class
 * @description The type of fee, fee amount, and other details.
 * @package  SellingPartnerApi
 * @group 
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null  
 */
class FeeDetail implements ModelInterface, ArrayAccess, \JsonSerializable
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'FeeDetail';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'fee_type' => 'string',
        'fee_amount' => '\SellingPartnerApi\Model\FeesV0\MoneyType',
        'fee_promotion' => '\SellingPartnerApi\Model\FeesV0\MoneyType',
        'tax_amount' => '\SellingPartnerApi\Model\FeesV0\MoneyType',
        'final_fee' => '\SellingPartnerApi\Model\FeesV0\MoneyType',
        'included_fee_detail_list' => '\SellingPartnerApi\Model\FeesV0\IncludedFeeDetail[]'
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
        'fee_amount' => null,
        'fee_promotion' => null,
        'tax_amount' => null,
        'final_fee' => null,
        'included_fee_detail_list' => null
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
        'fee_type' => 'FeeType',
        'fee_amount' => 'FeeAmount',
        'fee_promotion' => 'FeePromotion',
        'tax_amount' => 'TaxAmount',
        'final_fee' => 'FinalFee',
        'included_fee_detail_list' => 'IncludedFeeDetailList'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
                'fee_type' => 'setFeeType',
        'fee_amount' => 'setFeeAmount',
        'fee_promotion' => 'setFeePromotion',
        'tax_amount' => 'setTaxAmount',
        'final_fee' => 'setFinalFee',
        'included_fee_detail_list' => 'setIncludedFeeDetailList'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'fee_type' => 'getFeeType',
        'fee_amount' => 'getFeeAmount',
        'fee_promotion' => 'getFeePromotion',
        'tax_amount' => 'getTaxAmount',
        'final_fee' => 'getFinalFee',
        'included_fee_detail_list' => 'getIncludedFeeDetailList'
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
        $this->container['fee_amount'] = isset($data['fee_amount']) ? $data['fee_amount'] : null;
        $this->container['fee_promotion'] = isset($data['fee_promotion']) ? $data['fee_promotion'] : null;
        $this->container['tax_amount'] = isset($data['tax_amount']) ? $data['tax_amount'] : null;
        $this->container['final_fee'] = isset($data['final_fee']) ? $data['final_fee'] : null;
        $this->container['included_fee_detail_list'] = isset($data['included_fee_detail_list']) ? $data['included_fee_detail_list'] : null;
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
        if ($this->container['fee_amount'] === null) {
            $invalidProperties[] = "'fee_amount' can't be null";
        }
        if ($this->container['final_fee'] === null) {
            $invalidProperties[] = "'final_fee' can't be null";
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
     * @param string $fee_type The type of fee charged to a seller.
     *
     * @return self
     */
    public function setFeeType($fee_type)
    {
        $this->container['fee_type'] = $fee_type;

        return $this;
    }
    /**
     * Gets fee_amount
     *
     * @return \SellingPartnerApi\Model\FeesV0\MoneyType
     */
    public function getFeeAmount()
    {
        return $this->container['fee_amount'];
    }

    /**
     * Sets fee_amount
     *
     * @param \SellingPartnerApi\Model\FeesV0\MoneyType $fee_amount fee_amount
     *
     * @return self
     */
    public function setFeeAmount($fee_amount)
    {
        $this->container['fee_amount'] = $fee_amount;

        return $this;
    }
    /**
     * Gets fee_promotion
     *
     * @return \SellingPartnerApi\Model\FeesV0\MoneyType|null
     */
    public function getFeePromotion()
    {
        return $this->container['fee_promotion'];
    }

    /**
     * Sets fee_promotion
     *
     * @param \SellingPartnerApi\Model\FeesV0\MoneyType|null $fee_promotion fee_promotion
     *
     * @return self
     */
    public function setFeePromotion($fee_promotion)
    {
        $this->container['fee_promotion'] = $fee_promotion;

        return $this;
    }
    /**
     * Gets tax_amount
     *
     * @return \SellingPartnerApi\Model\FeesV0\MoneyType|null
     */
    public function getTaxAmount()
    {
        return $this->container['tax_amount'];
    }

    /**
     * Sets tax_amount
     *
     * @param \SellingPartnerApi\Model\FeesV0\MoneyType|null $tax_amount tax_amount
     *
     * @return self
     */
    public function setTaxAmount($tax_amount)
    {
        $this->container['tax_amount'] = $tax_amount;

        return $this;
    }
    /**
     * Gets final_fee
     *
     * @return \SellingPartnerApi\Model\FeesV0\MoneyType
     */
    public function getFinalFee()
    {
        return $this->container['final_fee'];
    }

    /**
     * Sets final_fee
     *
     * @param \SellingPartnerApi\Model\FeesV0\MoneyType $final_fee final_fee
     *
     * @return self
     */
    public function setFinalFee($final_fee)
    {
        $this->container['final_fee'] = $final_fee;

        return $this;
    }
    /**
     * Gets included_fee_detail_list
     *
     * @return \SellingPartnerApi\Model\FeesV0\IncludedFeeDetail[]|null
     */
    public function getIncludedFeeDetailList()
    {
        return $this->container['included_fee_detail_list'];
    }

    /**
     * Sets included_fee_detail_list
     *
     * @param \SellingPartnerApi\Model\FeesV0\IncludedFeeDetail[]|null $included_fee_detail_list A list of other fees that contribute to a given fee.
     *
     * @return self
     */
    public function setIncludedFeeDetailList($included_fee_detail_list)
    {
        $this->container['included_fee_detail_list'] = $included_fee_detail_list;

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


