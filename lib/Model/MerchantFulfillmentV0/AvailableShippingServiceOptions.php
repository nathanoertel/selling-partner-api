<?php
/**
 * AvailableShippingServiceOptions
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

use \ArrayAccess;
use \SellingPartnerApi\ObjectSerializer;
use \SellingPartnerApi\Model\ModelInterface;

/**
 * AvailableShippingServiceOptions Class Doc Comment
 *
 * @category Class
 * @description The available shipping service options.
 * @package  SellingPartnerApi
 * @group 
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null  
 */
class AvailableShippingServiceOptions implements ModelInterface, ArrayAccess, \JsonSerializable
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'AvailableShippingServiceOptions';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'available_carrier_will_pick_up_options' => '\SellingPartnerApi\Model\MerchantFulfillmentV0\AvailableCarrierWillPickUpOption[]',
        'available_delivery_experience_options' => '\SellingPartnerApi\Model\MerchantFulfillmentV0\AvailableDeliveryExperienceOption[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'available_carrier_will_pick_up_options' => null,
        'available_delivery_experience_options' => null
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
        'available_carrier_will_pick_up_options' => 'AvailableCarrierWillPickUpOptions',
        'available_delivery_experience_options' => 'AvailableDeliveryExperienceOptions'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
                'available_carrier_will_pick_up_options' => 'setAvailableCarrierWillPickUpOptions',
        'available_delivery_experience_options' => 'setAvailableDeliveryExperienceOptions'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'available_carrier_will_pick_up_options' => 'getAvailableCarrierWillPickUpOptions',
        'available_delivery_experience_options' => 'getAvailableDeliveryExperienceOptions'
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
        $this->container['available_carrier_will_pick_up_options'] = isset($data['available_carrier_will_pick_up_options']) ? $data['available_carrier_will_pick_up_options'] : null;
        $this->container['available_delivery_experience_options'] = isset($data['available_delivery_experience_options']) ? $data['available_delivery_experience_options'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['available_carrier_will_pick_up_options'] === null) {
            $invalidProperties[] = "'available_carrier_will_pick_up_options' can't be null";
        }
        if ($this->container['available_delivery_experience_options'] === null) {
            $invalidProperties[] = "'available_delivery_experience_options' can't be null";
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
     * Gets available_carrier_will_pick_up_options
     *
     * @return \SellingPartnerApi\Model\MerchantFulfillmentV0\AvailableCarrierWillPickUpOption[]
     */
    public function getAvailableCarrierWillPickUpOptions()
    {
        return $this->container['available_carrier_will_pick_up_options'];
    }

    /**
     * Sets available_carrier_will_pick_up_options
     *
     * @param \SellingPartnerApi\Model\MerchantFulfillmentV0\AvailableCarrierWillPickUpOption[] $available_carrier_will_pick_up_options List of available carrier pickup options.
     *
     * @return self
     */
    public function setAvailableCarrierWillPickUpOptions($available_carrier_will_pick_up_options)
    {
        $this->container['available_carrier_will_pick_up_options'] = $available_carrier_will_pick_up_options;

        return $this;
    }
    /**
     * Gets available_delivery_experience_options
     *
     * @return \SellingPartnerApi\Model\MerchantFulfillmentV0\AvailableDeliveryExperienceOption[]
     */
    public function getAvailableDeliveryExperienceOptions()
    {
        return $this->container['available_delivery_experience_options'];
    }

    /**
     * Sets available_delivery_experience_options
     *
     * @param \SellingPartnerApi\Model\MerchantFulfillmentV0\AvailableDeliveryExperienceOption[] $available_delivery_experience_options List of available delivery experience options.
     *
     * @return self
     */
    public function setAvailableDeliveryExperienceOptions($available_delivery_experience_options)
    {
        $this->container['available_delivery_experience_options'] = $available_delivery_experience_options;

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


