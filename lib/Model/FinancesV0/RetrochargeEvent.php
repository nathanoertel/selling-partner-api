<?php
/**
 * RetrochargeEvent
 *
 * PHP version 7.3
 *
 * @category Class
 * @package  SellingPartnerApi
 */

/**
 * Selling Partner API for Finances
 *
 * The Selling Partner API for Finances helps you obtain financial information relevant to a seller's business. You can obtain financial events for a given order, financial event group, or date range without having to wait until a statement period closes. You can also obtain financial event groups for a given date range.
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

namespace SellingPartnerApi\Model\FinancesV0;

use \ArrayAccess;
use \SellingPartnerApi\ObjectSerializer;
use \SellingPartnerApi\Model\ModelInterface;

/**
 * RetrochargeEvent Class Doc Comment
 *
 * @category Class
 * @description A retrocharge or retrocharge reversal.
 * @package  SellingPartnerApi
 * @group 
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null  
 */
class RetrochargeEvent implements ModelInterface, ArrayAccess, \JsonSerializable
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'RetrochargeEvent';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'retrocharge_event_type' => 'string',
        'amazon_order_id' => 'string',
        'posted_date' => 'string',
        'base_tax' => '\SellingPartnerApi\Model\FinancesV0\Currency',
        'shipping_tax' => '\SellingPartnerApi\Model\FinancesV0\Currency',
        'marketplace_name' => 'string',
        'retrocharge_tax_withheld_list' => '\SellingPartnerApi\Model\FinancesV0\TaxWithheldComponent[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'retrocharge_event_type' => null,
        'amazon_order_id' => null,
        'posted_date' => null,
        'base_tax' => null,
        'shipping_tax' => null,
        'marketplace_name' => null,
        'retrocharge_tax_withheld_list' => null
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
        'retrocharge_event_type' => 'RetrochargeEventType',
        'amazon_order_id' => 'AmazonOrderId',
        'posted_date' => 'PostedDate',
        'base_tax' => 'BaseTax',
        'shipping_tax' => 'ShippingTax',
        'marketplace_name' => 'MarketplaceName',
        'retrocharge_tax_withheld_list' => 'RetrochargeTaxWithheldList'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
                'retrocharge_event_type' => 'setRetrochargeEventType',
        'amazon_order_id' => 'setAmazonOrderId',
        'posted_date' => 'setPostedDate',
        'base_tax' => 'setBaseTax',
        'shipping_tax' => 'setShippingTax',
        'marketplace_name' => 'setMarketplaceName',
        'retrocharge_tax_withheld_list' => 'setRetrochargeTaxWithheldList'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'retrocharge_event_type' => 'getRetrochargeEventType',
        'amazon_order_id' => 'getAmazonOrderId',
        'posted_date' => 'getPostedDate',
        'base_tax' => 'getBaseTax',
        'shipping_tax' => 'getShippingTax',
        'marketplace_name' => 'getMarketplaceName',
        'retrocharge_tax_withheld_list' => 'getRetrochargeTaxWithheldList'
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
        $this->container['retrocharge_event_type'] = isset($data['retrocharge_event_type']) ? $data['retrocharge_event_type'] : null;
        $this->container['amazon_order_id'] = isset($data['amazon_order_id']) ? $data['amazon_order_id'] : null;
        $this->container['posted_date'] = isset($data['posted_date']) ? $data['posted_date'] : null;
        $this->container['base_tax'] = isset($data['base_tax']) ? $data['base_tax'] : null;
        $this->container['shipping_tax'] = isset($data['shipping_tax']) ? $data['shipping_tax'] : null;
        $this->container['marketplace_name'] = isset($data['marketplace_name']) ? $data['marketplace_name'] : null;
        $this->container['retrocharge_tax_withheld_list'] = isset($data['retrocharge_tax_withheld_list']) ? $data['retrocharge_tax_withheld_list'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

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
     * Gets retrocharge_event_type
     *
     * @return string|null
     */
    public function getRetrochargeEventType()
    {
        return $this->container['retrocharge_event_type'];
    }

    /**
     * Sets retrocharge_event_type
     *
     * @param string|null $retrocharge_event_type The type of event. Possible values: * Retrocharge * RetrochargeReversal
     *
     * @return self
     */
    public function setRetrochargeEventType($retrocharge_event_type)
    {
        $this->container['retrocharge_event_type'] = $retrocharge_event_type;

        return $this;
    }
    /**
     * Gets amazon_order_id
     *
     * @return string|null
     */
    public function getAmazonOrderId()
    {
        return $this->container['amazon_order_id'];
    }

    /**
     * Sets amazon_order_id
     *
     * @param string|null $amazon_order_id An Amazon-defined identifier for an order.
     *
     * @return self
     */
    public function setAmazonOrderId($amazon_order_id)
    {
        $this->container['amazon_order_id'] = $amazon_order_id;

        return $this;
    }
    /**
     * Gets posted_date
     *
     * @return string|null
     */
    public function getPostedDate()
    {
        return $this->container['posted_date'];
    }

    /**
     * Sets posted_date
     *
     * @param string|null $posted_date A date string in ISO 8601 format.
     *
     * @return self
     */
    public function setPostedDate($posted_date)
    {
        $this->container['posted_date'] = $posted_date;

        return $this;
    }
    /**
     * Gets base_tax
     *
     * @return \SellingPartnerApi\Model\FinancesV0\Currency|null
     */
    public function getBaseTax()
    {
        return $this->container['base_tax'];
    }

    /**
     * Sets base_tax
     *
     * @param \SellingPartnerApi\Model\FinancesV0\Currency|null $base_tax base_tax
     *
     * @return self
     */
    public function setBaseTax($base_tax)
    {
        $this->container['base_tax'] = $base_tax;

        return $this;
    }
    /**
     * Gets shipping_tax
     *
     * @return \SellingPartnerApi\Model\FinancesV0\Currency|null
     */
    public function getShippingTax()
    {
        return $this->container['shipping_tax'];
    }

    /**
     * Sets shipping_tax
     *
     * @param \SellingPartnerApi\Model\FinancesV0\Currency|null $shipping_tax shipping_tax
     *
     * @return self
     */
    public function setShippingTax($shipping_tax)
    {
        $this->container['shipping_tax'] = $shipping_tax;

        return $this;
    }
    /**
     * Gets marketplace_name
     *
     * @return string|null
     */
    public function getMarketplaceName()
    {
        return $this->container['marketplace_name'];
    }

    /**
     * Sets marketplace_name
     *
     * @param string|null $marketplace_name The name of the marketplace where the retrocharge event occurred.
     *
     * @return self
     */
    public function setMarketplaceName($marketplace_name)
    {
        $this->container['marketplace_name'] = $marketplace_name;

        return $this;
    }
    /**
     * Gets retrocharge_tax_withheld_list
     *
     * @return \SellingPartnerApi\Model\FinancesV0\TaxWithheldComponent[]|null
     */
    public function getRetrochargeTaxWithheldList()
    {
        return $this->container['retrocharge_tax_withheld_list'];
    }

    /**
     * Sets retrocharge_tax_withheld_list
     *
     * @param \SellingPartnerApi\Model\FinancesV0\TaxWithheldComponent[]|null $retrocharge_tax_withheld_list A list of information about taxes withheld.
     *
     * @return self
     */
    public function setRetrochargeTaxWithheldList($retrocharge_tax_withheld_list)
    {
        $this->container['retrocharge_tax_withheld_list'] = $retrocharge_tax_withheld_list;

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


