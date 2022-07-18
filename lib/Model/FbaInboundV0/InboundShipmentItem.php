<?php
/**
 * InboundShipmentItem
 *
 * PHP version 7.3
 *
 * @category Class
 * @package  SellingPartnerApi
 */

/**
 * Selling Partner API for Fulfillment Inbound
 *
 * The Selling Partner API for Fulfillment Inbound lets you create applications that create and update inbound shipments of inventory to Amazon's fulfillment network.
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

namespace SellingPartnerApi\Model\FbaInboundV0;

use \ArrayAccess;
use \SellingPartnerApi\ObjectSerializer;
use \SellingPartnerApi\Model\ModelInterface;

/**
 * InboundShipmentItem Class Doc Comment
 *
 * @category Class
 * @description Item information for an inbound shipment. Submitted with a call to the createInboundShipment or updateInboundShipment operation.
 * @package  SellingPartnerApi
 * @group 
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null  
 */
class InboundShipmentItem implements ModelInterface, ArrayAccess, \JsonSerializable
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'InboundShipmentItem';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'shipment_id' => 'string',
        'seller_sku' => 'string',
        'fulfillment_network_sku' => 'string',
        'quantity_shipped' => 'int',
        'quantity_received' => 'int',
        'quantity_in_case' => 'int',
        'release_date' => 'string',
        'prep_details_list' => '\SellingPartnerApi\Model\FbaInboundV0\PrepDetails[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'shipment_id' => null,
        'seller_sku' => null,
        'fulfillment_network_sku' => null,
        'quantity_shipped' => 'int32',
        'quantity_received' => 'int32',
        'quantity_in_case' => 'int32',
        'release_date' => null,
        'prep_details_list' => null
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
        'shipment_id' => 'ShipmentId',
        'seller_sku' => 'SellerSKU',
        'fulfillment_network_sku' => 'FulfillmentNetworkSKU',
        'quantity_shipped' => 'QuantityShipped',
        'quantity_received' => 'QuantityReceived',
        'quantity_in_case' => 'QuantityInCase',
        'release_date' => 'ReleaseDate',
        'prep_details_list' => 'PrepDetailsList'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
                'shipment_id' => 'setShipmentId',
        'seller_sku' => 'setSellerSku',
        'fulfillment_network_sku' => 'setFulfillmentNetworkSku',
        'quantity_shipped' => 'setQuantityShipped',
        'quantity_received' => 'setQuantityReceived',
        'quantity_in_case' => 'setQuantityInCase',
        'release_date' => 'setReleaseDate',
        'prep_details_list' => 'setPrepDetailsList'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'shipment_id' => 'getShipmentId',
        'seller_sku' => 'getSellerSku',
        'fulfillment_network_sku' => 'getFulfillmentNetworkSku',
        'quantity_shipped' => 'getQuantityShipped',
        'quantity_received' => 'getQuantityReceived',
        'quantity_in_case' => 'getQuantityInCase',
        'release_date' => 'getReleaseDate',
        'prep_details_list' => 'getPrepDetailsList'
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
        $this->container['shipment_id'] = isset($data['shipment_id']) ? $data['shipment_id'] : null;
        $this->container['seller_sku'] = isset($data['seller_sku']) ? $data['seller_sku'] : null;
        $this->container['fulfillment_network_sku'] = isset($data['fulfillment_network_sku']) ? $data['fulfillment_network_sku'] : null;
        $this->container['quantity_shipped'] = isset($data['quantity_shipped']) ? $data['quantity_shipped'] : null;
        $this->container['quantity_received'] = isset($data['quantity_received']) ? $data['quantity_received'] : null;
        $this->container['quantity_in_case'] = isset($data['quantity_in_case']) ? $data['quantity_in_case'] : null;
        $this->container['release_date'] = isset($data['release_date']) ? $data['release_date'] : null;
        $this->container['prep_details_list'] = isset($data['prep_details_list']) ? $data['prep_details_list'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['seller_sku'] === null) {
            $invalidProperties[] = "'seller_sku' can't be null";
        }
        if ($this->container['quantity_shipped'] === null) {
            $invalidProperties[] = "'quantity_shipped' can't be null";
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
     * Gets shipment_id
     *
     * @return string|null
     */
    public function getShipmentId()
    {
        return $this->container['shipment_id'];
    }

    /**
     * Sets shipment_id
     *
     * @param string|null $shipment_id A shipment identifier originally returned by the createInboundShipmentPlan operation.
     *
     * @return self
     */
    public function setShipmentId($shipment_id)
    {
        $this->container['shipment_id'] = $shipment_id;

        return $this;
    }
    /**
     * Gets seller_sku
     *
     * @return string
     */
    public function getSellerSku()
    {
        return $this->container['seller_sku'];
    }

    /**
     * Sets seller_sku
     *
     * @param string $seller_sku The seller SKU of the item.
     *
     * @return self
     */
    public function setSellerSku($seller_sku)
    {
        $this->container['seller_sku'] = $seller_sku;

        return $this;
    }
    /**
     * Gets fulfillment_network_sku
     *
     * @return string|null
     */
    public function getFulfillmentNetworkSku()
    {
        return $this->container['fulfillment_network_sku'];
    }

    /**
     * Sets fulfillment_network_sku
     *
     * @param string|null $fulfillment_network_sku Amazon's fulfillment network SKU of the item.
     *
     * @return self
     */
    public function setFulfillmentNetworkSku($fulfillment_network_sku)
    {
        $this->container['fulfillment_network_sku'] = $fulfillment_network_sku;

        return $this;
    }
    /**
     * Gets quantity_shipped
     *
     * @return int
     */
    public function getQuantityShipped()
    {
        return $this->container['quantity_shipped'];
    }

    /**
     * Sets quantity_shipped
     *
     * @param int $quantity_shipped The item quantity.
     *
     * @return self
     */
    public function setQuantityShipped($quantity_shipped)
    {
        $this->container['quantity_shipped'] = $quantity_shipped;

        return $this;
    }
    /**
     * Gets quantity_received
     *
     * @return int|null
     */
    public function getQuantityReceived()
    {
        return $this->container['quantity_received'];
    }

    /**
     * Sets quantity_received
     *
     * @param int|null $quantity_received The item quantity.
     *
     * @return self
     */
    public function setQuantityReceived($quantity_received)
    {
        $this->container['quantity_received'] = $quantity_received;

        return $this;
    }
    /**
     * Gets quantity_in_case
     *
     * @return int|null
     */
    public function getQuantityInCase()
    {
        return $this->container['quantity_in_case'];
    }

    /**
     * Sets quantity_in_case
     *
     * @param int|null $quantity_in_case The item quantity.
     *
     * @return self
     */
    public function setQuantityInCase($quantity_in_case)
    {
        $this->container['quantity_in_case'] = $quantity_in_case;

        return $this;
    }
    /**
     * Gets release_date
     *
     * @return string|null
     */
    public function getReleaseDate()
    {
        return $this->container['release_date'];
    }

    /**
     * Sets release_date
     *
     * @param string|null $release_date A date string in ISO 8601 format.
     *
     * @return self
     */
    public function setReleaseDate($release_date)
    {
        $this->container['release_date'] = $release_date;

        return $this;
    }
    /**
     * Gets prep_details_list
     *
     * @return \SellingPartnerApi\Model\FbaInboundV0\PrepDetails[]|null
     */
    public function getPrepDetailsList()
    {
        return $this->container['prep_details_list'];
    }

    /**
     * Sets prep_details_list
     *
     * @param \SellingPartnerApi\Model\FbaInboundV0\PrepDetails[]|null $prep_details_list A list of preparation instructions and who is responsible for that preparation.
     *
     * @return self
     */
    public function setPrepDetailsList($prep_details_list)
    {
        $this->container['prep_details_list'] = $prep_details_list;

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


