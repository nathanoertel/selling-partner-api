<?php
/**
 * ReservedQuantity
 *
 * PHP version 7.3
 *
 * @category Class
 * @package  SellingPartnerApi
 */

/**
 * Selling Partner API for FBA Inventory
 *
 * The Selling Partner API for FBA Inventory lets you programmatically retrieve information about inventory in Amazon's fulfillment network.
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

namespace SellingPartnerApi\Model\FbaInventoryV1;

use \ArrayAccess;
use \SellingPartnerApi\ObjectSerializer;
use \SellingPartnerApi\Model\ModelInterface;

/**
 * ReservedQuantity Class Doc Comment
 *
 * @category Class
 * @description The quantity of reserved inventory.
 * @package  SellingPartnerApi
 * @group 
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null  
 */
class ReservedQuantity implements ModelInterface, ArrayAccess, \JsonSerializable
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'ReservedQuantity';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'total_reserved_quantity' => 'int',
        'pending_customer_order_quantity' => 'int',
        'pending_transshipment_quantity' => 'int',
        'fc_processing_quantity' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'total_reserved_quantity' => null,
        'pending_customer_order_quantity' => null,
        'pending_transshipment_quantity' => null,
        'fc_processing_quantity' => null
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
        'total_reserved_quantity' => 'totalReservedQuantity',
        'pending_customer_order_quantity' => 'pendingCustomerOrderQuantity',
        'pending_transshipment_quantity' => 'pendingTransshipmentQuantity',
        'fc_processing_quantity' => 'fcProcessingQuantity'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
                'total_reserved_quantity' => 'setTotalReservedQuantity',
        'pending_customer_order_quantity' => 'setPendingCustomerOrderQuantity',
        'pending_transshipment_quantity' => 'setPendingTransshipmentQuantity',
        'fc_processing_quantity' => 'setFcProcessingQuantity'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'total_reserved_quantity' => 'getTotalReservedQuantity',
        'pending_customer_order_quantity' => 'getPendingCustomerOrderQuantity',
        'pending_transshipment_quantity' => 'getPendingTransshipmentQuantity',
        'fc_processing_quantity' => 'getFcProcessingQuantity'
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
        $this->container['total_reserved_quantity'] = $data['total_reserved_quantity'] ?? null;
        $this->container['pending_customer_order_quantity'] = $data['pending_customer_order_quantity'] ?? null;
        $this->container['pending_transshipment_quantity'] = $data['pending_transshipment_quantity'] ?? null;
        $this->container['fc_processing_quantity'] = $data['fc_processing_quantity'] ?? null;
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
     * Gets total_reserved_quantity
     *
     * @return int|null
     */
    public function getTotalReservedQuantity()
    {
        return $this->container['total_reserved_quantity'];
    }

    /**
     * Sets total_reserved_quantity
     *
     * @param int|null $total_reserved_quantity The total number of units in Amazon's fulfillment network that are currently being picked, packed, and shipped; or are sidelined for measurement, sampling, or other internal processes.
     *
     * @return self
     */
    public function setTotalReservedQuantity($total_reserved_quantity)
    {
        $this->container['total_reserved_quantity'] = $total_reserved_quantity;

        return $this;
    }
    /**
     * Gets pending_customer_order_quantity
     *
     * @return int|null
     */
    public function getPendingCustomerOrderQuantity()
    {
        return $this->container['pending_customer_order_quantity'];
    }

    /**
     * Sets pending_customer_order_quantity
     *
     * @param int|null $pending_customer_order_quantity The number of units reserved for customer orders.
     *
     * @return self
     */
    public function setPendingCustomerOrderQuantity($pending_customer_order_quantity)
    {
        $this->container['pending_customer_order_quantity'] = $pending_customer_order_quantity;

        return $this;
    }
    /**
     * Gets pending_transshipment_quantity
     *
     * @return int|null
     */
    public function getPendingTransshipmentQuantity()
    {
        return $this->container['pending_transshipment_quantity'];
    }

    /**
     * Sets pending_transshipment_quantity
     *
     * @param int|null $pending_transshipment_quantity The number of units being transferred from one fulfillment center to another.
     *
     * @return self
     */
    public function setPendingTransshipmentQuantity($pending_transshipment_quantity)
    {
        $this->container['pending_transshipment_quantity'] = $pending_transshipment_quantity;

        return $this;
    }
    /**
     * Gets fc_processing_quantity
     *
     * @return int|null
     */
    public function getFcProcessingQuantity()
    {
        return $this->container['fc_processing_quantity'];
    }

    /**
     * Sets fc_processing_quantity
     *
     * @param int|null $fc_processing_quantity The number of units that have been sidelined at the fulfillment center for additional processing.
     *
     * @return self
     */
    public function setFcProcessingQuantity($fc_processing_quantity)
    {
        $this->container['fc_processing_quantity'] = $fc_processing_quantity;

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
        return $this->container[$offset] ?? null;
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


