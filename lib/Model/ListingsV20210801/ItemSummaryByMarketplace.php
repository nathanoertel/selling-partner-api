<?php
/**
 * ItemSummaryByMarketplace
 *
 * PHP version 7.3
 *
 * @category Class
 * @package  SellingPartnerApi
 */

/**
 * Selling Partner API for Listings Items
 *
 * The Selling Partner API for Listings Items (Listings Items API) provides programmatic access to selling partner listings on Amazon. Use this API in collaboration with the Selling Partner API for Product Type Definitions, which you use to retrieve the information about Amazon product types needed to use the Listings Items API. For more information, see the [Listings Items API Use Case Guide](https://developer-docs.amazon.com/sp-api/docs/listings-items-api-v2021-08-01-use-case-guide).
 *
 * The version of the OpenAPI document: 2021-08-01
 * 
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 5.0.1
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace SellingPartnerApi\Model\ListingsV20210801;

use \ArrayAccess;
use \SellingPartnerApi\ObjectSerializer;
use \SellingPartnerApi\Model\ModelInterface;

/**
 * ItemSummaryByMarketplace Class Doc Comment
 *
 * @category Class
 * @description Summary details of a listings item for an Amazon marketplace.
 * @package  SellingPartnerApi
 * @group 
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null  
 */
class ItemSummaryByMarketplace implements ModelInterface, ArrayAccess, \JsonSerializable
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'ItemSummaryByMarketplace';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'marketplace_id' => 'string',
        'asin' => 'string',
        'product_type' => 'string',
        'condition_type' => 'string',
        'status' => 'string[]',
        'fn_sku' => 'string',
        'item_name' => 'string',
        'created_date' => 'string',
        'last_updated_date' => 'string',
        'main_image' => '\SellingPartnerApi\Model\ListingsV20210801\ItemImage'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'marketplace_id' => null,
        'asin' => null,
        'product_type' => null,
        'condition_type' => null,
        'status' => null,
        'fn_sku' => null,
        'item_name' => null,
        'created_date' => null,
        'last_updated_date' => null,
        'main_image' => null
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
        'marketplace_id' => 'marketplaceId',
        'asin' => 'asin',
        'product_type' => 'productType',
        'condition_type' => 'conditionType',
        'status' => 'status',
        'fn_sku' => 'fnSku',
        'item_name' => 'itemName',
        'created_date' => 'createdDate',
        'last_updated_date' => 'lastUpdatedDate',
        'main_image' => 'mainImage'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
                'marketplace_id' => 'setMarketplaceId',
        'asin' => 'setAsin',
        'product_type' => 'setProductType',
        'condition_type' => 'setConditionType',
        'status' => 'setStatus',
        'fn_sku' => 'setFnSku',
        'item_name' => 'setItemName',
        'created_date' => 'setCreatedDate',
        'last_updated_date' => 'setLastUpdatedDate',
        'main_image' => 'setMainImage'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'marketplace_id' => 'getMarketplaceId',
        'asin' => 'getAsin',
        'product_type' => 'getProductType',
        'condition_type' => 'getConditionType',
        'status' => 'getStatus',
        'fn_sku' => 'getFnSku',
        'item_name' => 'getItemName',
        'created_date' => 'getCreatedDate',
        'last_updated_date' => 'getLastUpdatedDate',
        'main_image' => 'getMainImage'
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

    const CONDITION_TYPE_NEW_NEW = 'new_new';
    const CONDITION_TYPE_NEW_OPEN_BOX = 'new_open_box';
    const CONDITION_TYPE_NEW_OEM = 'new_oem';
    const CONDITION_TYPE_REFURBISHED_REFURBISHED = 'refurbished_refurbished';
    const CONDITION_TYPE_USED_LIKE_NEW = 'used_like_new';
    const CONDITION_TYPE_USED_VERY_GOOD = 'used_very_good';
    const CONDITION_TYPE_USED_GOOD = 'used_good';
    const CONDITION_TYPE_USED_ACCEPTABLE = 'used_acceptable';
    const CONDITION_TYPE_COLLECTIBLE_LIKE_NEW = 'collectible_like_new';
    const CONDITION_TYPE_COLLECTIBLE_VERY_GOOD = 'collectible_very_good';
    const CONDITION_TYPE_COLLECTIBLE_GOOD = 'collectible_good';
    const CONDITION_TYPE_COLLECTIBLE_ACCEPTABLE = 'collectible_acceptable';
    const CONDITION_TYPE_CLUB_CLUB = 'club_club';
    

    const STATUS_BUYABLE = 'BUYABLE';
    const STATUS_DISCOVERABLE = 'DISCOVERABLE';
    
    

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getConditionTypeAllowableValues()
    {
        return [
            self::CONDITION_TYPE_NEW_NEW,
            self::CONDITION_TYPE_NEW_OPEN_BOX,
            self::CONDITION_TYPE_NEW_OEM,
            self::CONDITION_TYPE_REFURBISHED_REFURBISHED,
            self::CONDITION_TYPE_USED_LIKE_NEW,
            self::CONDITION_TYPE_USED_VERY_GOOD,
            self::CONDITION_TYPE_USED_GOOD,
            self::CONDITION_TYPE_USED_ACCEPTABLE,
            self::CONDITION_TYPE_COLLECTIBLE_LIKE_NEW,
            self::CONDITION_TYPE_COLLECTIBLE_VERY_GOOD,
            self::CONDITION_TYPE_COLLECTIBLE_GOOD,
            self::CONDITION_TYPE_COLLECTIBLE_ACCEPTABLE,
            self::CONDITION_TYPE_CLUB_CLUB,
        ];
    }
    

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getStatusAllowableValues()
    {
        return [
            self::STATUS_BUYABLE,
            self::STATUS_DISCOVERABLE,
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
        $this->container['marketplace_id'] = $data['marketplace_id'] ?? null;
        $this->container['asin'] = $data['asin'] ?? null;
        $this->container['product_type'] = $data['product_type'] ?? null;
        $this->container['condition_type'] = $data['condition_type'] ?? null;
        $this->container['status'] = $data['status'] ?? null;
        $this->container['fn_sku'] = $data['fn_sku'] ?? null;
        $this->container['item_name'] = $data['item_name'] ?? null;
        $this->container['created_date'] = $data['created_date'] ?? null;
        $this->container['last_updated_date'] = $data['last_updated_date'] ?? null;
        $this->container['main_image'] = $data['main_image'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['marketplace_id'] === null) {
            $invalidProperties[] = "'marketplace_id' can't be null";
        }
        if ($this->container['asin'] === null) {
            $invalidProperties[] = "'asin' can't be null";
        }
        if ($this->container['product_type'] === null) {
            $invalidProperties[] = "'product_type' can't be null";
        }
        $allowedValues = $this->getConditionTypeAllowableValues();
        if (!is_null($this->container['condition_type']) && !in_array($this->container['condition_type'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'condition_type', must be one of '%s'",
                $this->container['condition_type'],
                implode("', '", $allowedValues)
            );
        }

        if ($this->container['status'] === null) {
            $invalidProperties[] = "'status' can't be null";
        }
        if ($this->container['item_name'] === null) {
            $invalidProperties[] = "'item_name' can't be null";
        }
        if ($this->container['created_date'] === null) {
            $invalidProperties[] = "'created_date' can't be null";
        }
        if ($this->container['last_updated_date'] === null) {
            $invalidProperties[] = "'last_updated_date' can't be null";
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
     * Gets marketplace_id
     *
     * @return string
     */
    public function getMarketplaceId()
    {
        return $this->container['marketplace_id'];
    }

    /**
     * Sets marketplace_id
     *
     * @param string $marketplace_id A marketplace identifier. Identifies the Amazon marketplace for the listings item.
     *
     * @return self
     */
    public function setMarketplaceId($marketplace_id)
    {
        $this->container['marketplace_id'] = $marketplace_id;

        return $this;
    }
    /**
     * Gets asin
     *
     * @return string
     */
    public function getAsin()
    {
        return $this->container['asin'];
    }

    /**
     * Sets asin
     *
     * @param string $asin Amazon Standard Identification Number (ASIN) of the listings item.
     *
     * @return self
     */
    public function setAsin($asin)
    {
        $this->container['asin'] = $asin;

        return $this;
    }
    /**
     * Gets product_type
     *
     * @return string
     */
    public function getProductType()
    {
        return $this->container['product_type'];
    }

    /**
     * Sets product_type
     *
     * @param string $product_type The Amazon product type of the listings item.
     *
     * @return self
     */
    public function setProductType($product_type)
    {
        $this->container['product_type'] = $product_type;

        return $this;
    }
    /**
     * Gets condition_type
     *
     * @return string|null
     */
    public function getConditionType()
    {
        return $this->container['condition_type'];
    }

    /**
     * Sets condition_type
     *
     * @param string|null $condition_type Identifies the condition of the listings item.
     *
     * @return self
     */
    public function setConditionType($condition_type)
    {
        $allowedValues = $this->getConditionTypeAllowableValues();
        if (!is_null($condition_type) && !in_array($condition_type, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'condition_type', must be one of '%s'",
                    $condition_type,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['condition_type'] = $condition_type;

        return $this;
    }
    /**
     * Gets status
     *
     * @return string[]
     */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
     * Sets status
     *
     * @param string[] $status Statuses that apply to the listings item.
     *
     * @return self
     */
    public function setStatus($status)
    {
        $allowedValues = $this->getStatusAllowableValues();
        if (array_diff($status, $allowedValues)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'status', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['status'] = $status;

        return $this;
    }
    /**
     * Gets fn_sku
     *
     * @return string|null
     */
    public function getFnSku()
    {
        return $this->container['fn_sku'];
    }

    /**
     * Sets fn_sku
     *
     * @param string|null $fn_sku Fulfillment network stock keeping unit is an identifier used by Amazon fulfillment centers to identify each unique item.
     *
     * @return self
     */
    public function setFnSku($fn_sku)
    {
        $this->container['fn_sku'] = $fn_sku;

        return $this;
    }
    /**
     * Gets item_name
     *
     * @return string
     */
    public function getItemName()
    {
        return $this->container['item_name'];
    }

    /**
     * Sets item_name
     *
     * @param string $item_name Name, or title, associated with an Amazon catalog item.
     *
     * @return self
     */
    public function setItemName($item_name)
    {
        $this->container['item_name'] = $item_name;

        return $this;
    }
    /**
     * Gets created_date
     *
     * @return string
     */
    public function getCreatedDate()
    {
        return $this->container['created_date'];
    }

    /**
     * Sets created_date
     *
     * @param string $created_date Date the listings item was created, in ISO 8601 format.
     *
     * @return self
     */
    public function setCreatedDate($created_date)
    {
        $this->container['created_date'] = $created_date;

        return $this;
    }
    /**
     * Gets last_updated_date
     *
     * @return string
     */
    public function getLastUpdatedDate()
    {
        return $this->container['last_updated_date'];
    }

    /**
     * Sets last_updated_date
     *
     * @param string $last_updated_date Date the listings item was last updated, in ISO 8601 format.
     *
     * @return self
     */
    public function setLastUpdatedDate($last_updated_date)
    {
        $this->container['last_updated_date'] = $last_updated_date;

        return $this;
    }
    /**
     * Gets main_image
     *
     * @return \SellingPartnerApi\Model\ListingsV20210801\ItemImage|null
     */
    public function getMainImage()
    {
        return $this->container['main_image'];
    }

    /**
     * Sets main_image
     *
     * @param \SellingPartnerApi\Model\ListingsV20210801\ItemImage|null $main_image main_image
     *
     * @return self
     */
    public function setMainImage($main_image)
    {
        $this->container['main_image'] = $main_image;

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


