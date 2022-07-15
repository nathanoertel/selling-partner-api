<?php
/**
 * StatusUpdateDetails
 *
 * PHP version 7.3
 *
 * @category Class
 * @package  SellingPartnerApi
 */

/**
 * Selling Partner API for Direct Fulfillment Shipping
 *
 * The Selling Partner API for Direct Fulfillment Shipping provides programmatic access to a direct fulfillment vendor's shipping data.
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

namespace SellingPartnerApi\Model\VendorDirectFulfillmentShippingV1;

use \ArrayAccess;
use \SellingPartnerApi\ObjectSerializer;
use \SellingPartnerApi\Model\ModelInterface;

/**
 * StatusUpdateDetails Class Doc Comment
 *
 * @category Class
 * @description Details for the shipment status update given by the vendor for the specific package.
 * @package  SellingPartnerApi
 * @group 
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null  
 */
class StatusUpdateDetails implements ModelInterface, ArrayAccess, \JsonSerializable
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'StatusUpdateDetails';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'tracking_number' => 'string',
        'status_code' => 'string',
        'reason_code' => 'string',
        'status_date_time' => 'string',
        'status_location_address' => '\SellingPartnerApi\Model\VendorDirectFulfillmentShippingV1\Address',
        'shipment_schedule' => '\SellingPartnerApi\Model\VendorDirectFulfillmentShippingV1\StatusUpdateDetailsShipmentSchedule'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'tracking_number' => null,
        'status_code' => null,
        'reason_code' => null,
        'status_date_time' => null,
        'status_location_address' => null,
        'shipment_schedule' => null
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
        'tracking_number' => 'trackingNumber',
        'status_code' => 'statusCode',
        'reason_code' => 'reasonCode',
        'status_date_time' => 'statusDateTime',
        'status_location_address' => 'statusLocationAddress',
        'shipment_schedule' => 'shipmentSchedule'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
                'tracking_number' => 'setTrackingNumber',
        'status_code' => 'setStatusCode',
        'reason_code' => 'setReasonCode',
        'status_date_time' => 'setStatusDateTime',
        'status_location_address' => 'setStatusLocationAddress',
        'shipment_schedule' => 'setShipmentSchedule'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'tracking_number' => 'getTrackingNumber',
        'status_code' => 'getStatusCode',
        'reason_code' => 'getReasonCode',
        'status_date_time' => 'getStatusDateTime',
        'status_location_address' => 'getStatusLocationAddress',
        'shipment_schedule' => 'getShipmentSchedule'
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
        $this->container['tracking_number'] = $data['tracking_number'] ?? null;
        $this->container['status_code'] = $data['status_code'] ?? null;
        $this->container['reason_code'] = $data['reason_code'] ?? null;
        $this->container['status_date_time'] = $data['status_date_time'] ?? null;
        $this->container['status_location_address'] = $data['status_location_address'] ?? null;
        $this->container['shipment_schedule'] = $data['shipment_schedule'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['tracking_number'] === null) {
            $invalidProperties[] = "'tracking_number' can't be null";
        }
        if ($this->container['status_code'] === null) {
            $invalidProperties[] = "'status_code' can't be null";
        }
        if ($this->container['reason_code'] === null) {
            $invalidProperties[] = "'reason_code' can't be null";
        }
        if ($this->container['status_date_time'] === null) {
            $invalidProperties[] = "'status_date_time' can't be null";
        }
        if ($this->container['status_location_address'] === null) {
            $invalidProperties[] = "'status_location_address' can't be null";
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
     * Gets tracking_number
     *
     * @return string
     */
    public function getTrackingNumber()
    {
        return $this->container['tracking_number'];
    }

    /**
     * Sets tracking_number
     *
     * @param string $tracking_number This is required to be provided for every package and should match with the trackingNumber sent for the shipment confirmation.
     *
     * @return self
     */
    public function setTrackingNumber($tracking_number)
    {
        $this->container['tracking_number'] = $tracking_number;

        return $this;
    }
    /**
     * Gets status_code
     *
     * @return string
     */
    public function getStatusCode()
    {
        return $this->container['status_code'];
    }

    /**
     * Sets status_code
     *
     * @param string $status_code Indicates the shipment status code of the package that provides transportation information for Amazon tracking systems and ultimately for the final customer.
     *
     * @return self
     */
    public function setStatusCode($status_code)
    {
        $this->container['status_code'] = $status_code;

        return $this;
    }
    /**
     * Gets reason_code
     *
     * @return string
     */
    public function getReasonCode()
    {
        return $this->container['reason_code'];
    }

    /**
     * Sets reason_code
     *
     * @param string $reason_code Provides a reason code for the status of the package that will provide additional information about the transportation status.
     *
     * @return self
     */
    public function setReasonCode($reason_code)
    {
        $this->container['reason_code'] = $reason_code;

        return $this;
    }
    /**
     * Gets status_date_time
     *
     * @return string
     */
    public function getStatusDateTime()
    {
        return $this->container['status_date_time'];
    }

    /**
     * Sets status_date_time
     *
     * @param string $status_date_time The date and time when the shipment status was updated. This field is expected to be in ISO-8601 date/time format, with UTC time zone or UTC offset. For example, 2020-07-16T23:00:00Z or 2020-07-16T23:00:00+01:00.
     *
     * @return self
     */
    public function setStatusDateTime($status_date_time)
    {
        $this->container['status_date_time'] = $status_date_time;

        return $this;
    }
    /**
     * Gets status_location_address
     *
     * @return \SellingPartnerApi\Model\VendorDirectFulfillmentShippingV1\Address
     */
    public function getStatusLocationAddress()
    {
        return $this->container['status_location_address'];
    }

    /**
     * Sets status_location_address
     *
     * @param \SellingPartnerApi\Model\VendorDirectFulfillmentShippingV1\Address $status_location_address status_location_address
     *
     * @return self
     */
    public function setStatusLocationAddress($status_location_address)
    {
        $this->container['status_location_address'] = $status_location_address;

        return $this;
    }
    /**
     * Gets shipment_schedule
     *
     * @return \SellingPartnerApi\Model\VendorDirectFulfillmentShippingV1\StatusUpdateDetailsShipmentSchedule|null
     */
    public function getShipmentSchedule()
    {
        return $this->container['shipment_schedule'];
    }

    /**
     * Sets shipment_schedule
     *
     * @param \SellingPartnerApi\Model\VendorDirectFulfillmentShippingV1\StatusUpdateDetailsShipmentSchedule|null $shipment_schedule shipment_schedule
     *
     * @return self
     */
    public function setShipmentSchedule($shipment_schedule)
    {
        $this->container['shipment_schedule'] = $shipment_schedule;

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


