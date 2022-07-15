<?php
/**
 * ContainerIdentification
 *
 * PHP version 7.3
 *
 * @category Class
 * @package  SellingPartnerApi
 */

/**
 * Selling Partner API for Retail Procurement Shipments
 *
 * The Selling Partner API for Retail Procurement Shipments provides programmatic access to retail shipping data for vendors.
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

namespace SellingPartnerApi\Model\VendorShippingV1;

use \ArrayAccess;
use \SellingPartnerApi\ObjectSerializer;
use \SellingPartnerApi\Model\ModelInterface;

/**
 * ContainerIdentification Class Doc Comment
 *
 * @category Class
 * @package  SellingPartnerApi
 * @group 
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null  
 */
class ContainerIdentification implements ModelInterface, ArrayAccess, \JsonSerializable
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'ContainerIdentification';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'container_identification_type' => 'string',
        'container_identification_number' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'container_identification_type' => null,
        'container_identification_number' => null
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
        'container_identification_type' => 'containerIdentificationType',
        'container_identification_number' => 'containerIdentificationNumber'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
                'container_identification_type' => 'setContainerIdentificationType',
        'container_identification_number' => 'setContainerIdentificationNumber'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'container_identification_type' => 'getContainerIdentificationType',
        'container_identification_number' => 'getContainerIdentificationNumber'
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

    const CONTAINER_IDENTIFICATION_TYPE_SSCC = 'SSCC';
    const CONTAINER_IDENTIFICATION_TYPE_AMZNCC = 'AMZNCC';
    const CONTAINER_IDENTIFICATION_TYPE_GTIN = 'GTIN';
    const CONTAINER_IDENTIFICATION_TYPE_BPS = 'BPS';
    const CONTAINER_IDENTIFICATION_TYPE_CID = 'CID';
    
    

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getContainerIdentificationTypeAllowableValues()
    {
        return [
            self::CONTAINER_IDENTIFICATION_TYPE_SSCC,
            self::CONTAINER_IDENTIFICATION_TYPE_AMZNCC,
            self::CONTAINER_IDENTIFICATION_TYPE_GTIN,
            self::CONTAINER_IDENTIFICATION_TYPE_BPS,
            self::CONTAINER_IDENTIFICATION_TYPE_CID,
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
        $this->container['container_identification_type'] = $data['container_identification_type'] ?? null;
        $this->container['container_identification_number'] = $data['container_identification_number'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['container_identification_type'] === null) {
            $invalidProperties[] = "'container_identification_type' can't be null";
        }
        $allowedValues = $this->getContainerIdentificationTypeAllowableValues();
        if (!is_null($this->container['container_identification_type']) && !in_array($this->container['container_identification_type'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'container_identification_type', must be one of '%s'",
                $this->container['container_identification_type'],
                implode("', '", $allowedValues)
            );
        }

        if ($this->container['container_identification_number'] === null) {
            $invalidProperties[] = "'container_identification_number' can't be null";
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
     * Gets container_identification_type
     *
     * @return string
     */
    public function getContainerIdentificationType()
    {
        return $this->container['container_identification_type'];
    }

    /**
     * Sets container_identification_type
     *
     * @param string $container_identification_type The container identification type.
     *
     * @return self
     */
    public function setContainerIdentificationType($container_identification_type)
    {
        $allowedValues = $this->getContainerIdentificationTypeAllowableValues();
        if (!in_array($container_identification_type, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'container_identification_type', must be one of '%s'",
                    $container_identification_type,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['container_identification_type'] = $container_identification_type;

        return $this;
    }
    /**
     * Gets container_identification_number
     *
     * @return string
     */
    public function getContainerIdentificationNumber()
    {
        return $this->container['container_identification_number'];
    }

    /**
     * Sets container_identification_number
     *
     * @param string $container_identification_number Container identification number that adheres to the definition of the container identification type.
     *
     * @return self
     */
    public function setContainerIdentificationNumber($container_identification_number)
    {
        $this->container['container_identification_number'] = $container_identification_number;

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


