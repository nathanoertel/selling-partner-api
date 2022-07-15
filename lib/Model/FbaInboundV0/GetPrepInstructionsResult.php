<?php
/**
 * GetPrepInstructionsResult
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
 * GetPrepInstructionsResult Class Doc Comment
 *
 * @category Class
 * @package  SellingPartnerApi
 * @group 
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null  
 */
class GetPrepInstructionsResult implements ModelInterface, ArrayAccess, \JsonSerializable
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'GetPrepInstructionsResult';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'sku_prep_instructions_list' => '\SellingPartnerApi\Model\FbaInboundV0\SKUPrepInstructions[]',
        'invalid_sku_list' => '\SellingPartnerApi\Model\FbaInboundV0\InvalidSKU[]',
        'asin_prep_instructions_list' => '\SellingPartnerApi\Model\FbaInboundV0\ASINPrepInstructions[]',
        'invalid_asin_list' => '\SellingPartnerApi\Model\FbaInboundV0\InvalidASIN[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'sku_prep_instructions_list' => null,
        'invalid_sku_list' => null,
        'asin_prep_instructions_list' => null,
        'invalid_asin_list' => null
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
        'sku_prep_instructions_list' => 'SKUPrepInstructionsList',
        'invalid_sku_list' => 'InvalidSKUList',
        'asin_prep_instructions_list' => 'ASINPrepInstructionsList',
        'invalid_asin_list' => 'InvalidASINList'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
                'sku_prep_instructions_list' => 'setSkuPrepInstructionsList',
        'invalid_sku_list' => 'setInvalidSkuList',
        'asin_prep_instructions_list' => 'setAsinPrepInstructionsList',
        'invalid_asin_list' => 'setInvalidAsinList'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'sku_prep_instructions_list' => 'getSkuPrepInstructionsList',
        'invalid_sku_list' => 'getInvalidSkuList',
        'asin_prep_instructions_list' => 'getAsinPrepInstructionsList',
        'invalid_asin_list' => 'getInvalidAsinList'
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
        $this->container['sku_prep_instructions_list'] = $data['sku_prep_instructions_list'] ?? null;
        $this->container['invalid_sku_list'] = $data['invalid_sku_list'] ?? null;
        $this->container['asin_prep_instructions_list'] = $data['asin_prep_instructions_list'] ?? null;
        $this->container['invalid_asin_list'] = $data['invalid_asin_list'] ?? null;
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
     * Gets sku_prep_instructions_list
     *
     * @return \SellingPartnerApi\Model\FbaInboundV0\SKUPrepInstructions[]|null
     */
    public function getSkuPrepInstructionsList()
    {
        return $this->container['sku_prep_instructions_list'];
    }

    /**
     * Sets sku_prep_instructions_list
     *
     * @param \SellingPartnerApi\Model\FbaInboundV0\SKUPrepInstructions[]|null $sku_prep_instructions_list A list of SKU labeling requirements and item preparation instructions.
     *
     * @return self
     */
    public function setSkuPrepInstructionsList($sku_prep_instructions_list)
    {
        $this->container['sku_prep_instructions_list'] = $sku_prep_instructions_list;

        return $this;
    }
    /**
     * Gets invalid_sku_list
     *
     * @return \SellingPartnerApi\Model\FbaInboundV0\InvalidSKU[]|null
     */
    public function getInvalidSkuList()
    {
        return $this->container['invalid_sku_list'];
    }

    /**
     * Sets invalid_sku_list
     *
     * @param \SellingPartnerApi\Model\FbaInboundV0\InvalidSKU[]|null $invalid_sku_list A list of invalid SKU values and the reason they are invalid.
     *
     * @return self
     */
    public function setInvalidSkuList($invalid_sku_list)
    {
        $this->container['invalid_sku_list'] = $invalid_sku_list;

        return $this;
    }
    /**
     * Gets asin_prep_instructions_list
     *
     * @return \SellingPartnerApi\Model\FbaInboundV0\ASINPrepInstructions[]|null
     */
    public function getAsinPrepInstructionsList()
    {
        return $this->container['asin_prep_instructions_list'];
    }

    /**
     * Sets asin_prep_instructions_list
     *
     * @param \SellingPartnerApi\Model\FbaInboundV0\ASINPrepInstructions[]|null $asin_prep_instructions_list A list of item preparation instructions.
     *
     * @return self
     */
    public function setAsinPrepInstructionsList($asin_prep_instructions_list)
    {
        $this->container['asin_prep_instructions_list'] = $asin_prep_instructions_list;

        return $this;
    }
    /**
     * Gets invalid_asin_list
     *
     * @return \SellingPartnerApi\Model\FbaInboundV0\InvalidASIN[]|null
     */
    public function getInvalidAsinList()
    {
        return $this->container['invalid_asin_list'];
    }

    /**
     * Sets invalid_asin_list
     *
     * @param \SellingPartnerApi\Model\FbaInboundV0\InvalidASIN[]|null $invalid_asin_list A list of invalid ASIN values and the reasons they are invalid.
     *
     * @return self
     */
    public function setInvalidAsinList($invalid_asin_list)
    {
        $this->container['invalid_asin_list'] = $invalid_asin_list;

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


