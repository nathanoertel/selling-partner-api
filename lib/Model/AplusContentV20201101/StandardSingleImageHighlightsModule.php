<?php
/**
 * StandardSingleImageHighlightsModule
 *
 * PHP version 7.3
 *
 * @category Class
 * @package  SellingPartnerApi
 */

/**
 * Selling Partner API for A+ Content Management
 *
 * With the A+ Content API, you can build applications that help selling partners add rich marketing content to their Amazon product detail pages. A+ content helps selling partners share their brand and product story, which helps buyers make informed purchasing decisions. Selling partners assemble content by choosing from content modules and adding images and text.
 *
 * The version of the OpenAPI document: 2020-11-01
 * 
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 5.0.1
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace SellingPartnerApi\Model\AplusContentV20201101;

use \ArrayAccess;
use \SellingPartnerApi\ObjectSerializer;
use \SellingPartnerApi\Model\ModelInterface;

/**
 * StandardSingleImageHighlightsModule Class Doc Comment
 *
 * @category Class
 * @description A standard image with several paragraphs and a bulleted list.
 * @package  SellingPartnerApi
 * @group 
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null  
 */
class StandardSingleImageHighlightsModule implements ModelInterface, ArrayAccess, \JsonSerializable
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'StandardSingleImageHighlightsModule';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'image' => '\SellingPartnerApi\Model\AplusContentV20201101\ImageComponent',
        'headline' => '\SellingPartnerApi\Model\AplusContentV20201101\TextComponent',
        'text_block1' => '\SellingPartnerApi\Model\AplusContentV20201101\StandardTextBlock',
        'text_block2' => '\SellingPartnerApi\Model\AplusContentV20201101\StandardTextBlock',
        'text_block3' => '\SellingPartnerApi\Model\AplusContentV20201101\StandardTextBlock',
        'bulleted_list_block' => '\SellingPartnerApi\Model\AplusContentV20201101\StandardHeaderTextListBlock'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'image' => null,
        'headline' => null,
        'text_block1' => null,
        'text_block2' => null,
        'text_block3' => null,
        'bulleted_list_block' => null
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
        'image' => 'image',
        'headline' => 'headline',
        'text_block1' => 'textBlock1',
        'text_block2' => 'textBlock2',
        'text_block3' => 'textBlock3',
        'bulleted_list_block' => 'bulletedListBlock'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
                'image' => 'setImage',
        'headline' => 'setHeadline',
        'text_block1' => 'setTextBlock1',
        'text_block2' => 'setTextBlock2',
        'text_block3' => 'setTextBlock3',
        'bulleted_list_block' => 'setBulletedListBlock'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'image' => 'getImage',
        'headline' => 'getHeadline',
        'text_block1' => 'getTextBlock1',
        'text_block2' => 'getTextBlock2',
        'text_block3' => 'getTextBlock3',
        'bulleted_list_block' => 'getBulletedListBlock'
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
        $this->container['image'] = $data['image'] ?? null;
        $this->container['headline'] = $data['headline'] ?? null;
        $this->container['text_block1'] = $data['text_block1'] ?? null;
        $this->container['text_block2'] = $data['text_block2'] ?? null;
        $this->container['text_block3'] = $data['text_block3'] ?? null;
        $this->container['bulleted_list_block'] = $data['bulleted_list_block'] ?? null;
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
     * Gets image
     *
     * @return \SellingPartnerApi\Model\AplusContentV20201101\ImageComponent|null
     */
    public function getImage()
    {
        return $this->container['image'];
    }

    /**
     * Sets image
     *
     * @param \SellingPartnerApi\Model\AplusContentV20201101\ImageComponent|null $image image
     *
     * @return self
     */
    public function setImage($image)
    {
        $this->container['image'] = $image;

        return $this;
    }
    /**
     * Gets headline
     *
     * @return \SellingPartnerApi\Model\AplusContentV20201101\TextComponent|null
     */
    public function getHeadline()
    {
        return $this->container['headline'];
    }

    /**
     * Sets headline
     *
     * @param \SellingPartnerApi\Model\AplusContentV20201101\TextComponent|null $headline headline
     *
     * @return self
     */
    public function setHeadline($headline)
    {
        $this->container['headline'] = $headline;

        return $this;
    }
    /**
     * Gets text_block1
     *
     * @return \SellingPartnerApi\Model\AplusContentV20201101\StandardTextBlock|null
     */
    public function getTextBlock1()
    {
        return $this->container['text_block1'];
    }

    /**
     * Sets text_block1
     *
     * @param \SellingPartnerApi\Model\AplusContentV20201101\StandardTextBlock|null $text_block1 text_block1
     *
     * @return self
     */
    public function setTextBlock1($text_block1)
    {
        $this->container['text_block1'] = $text_block1;

        return $this;
    }
    /**
     * Gets text_block2
     *
     * @return \SellingPartnerApi\Model\AplusContentV20201101\StandardTextBlock|null
     */
    public function getTextBlock2()
    {
        return $this->container['text_block2'];
    }

    /**
     * Sets text_block2
     *
     * @param \SellingPartnerApi\Model\AplusContentV20201101\StandardTextBlock|null $text_block2 text_block2
     *
     * @return self
     */
    public function setTextBlock2($text_block2)
    {
        $this->container['text_block2'] = $text_block2;

        return $this;
    }
    /**
     * Gets text_block3
     *
     * @return \SellingPartnerApi\Model\AplusContentV20201101\StandardTextBlock|null
     */
    public function getTextBlock3()
    {
        return $this->container['text_block3'];
    }

    /**
     * Sets text_block3
     *
     * @param \SellingPartnerApi\Model\AplusContentV20201101\StandardTextBlock|null $text_block3 text_block3
     *
     * @return self
     */
    public function setTextBlock3($text_block3)
    {
        $this->container['text_block3'] = $text_block3;

        return $this;
    }
    /**
     * Gets bulleted_list_block
     *
     * @return \SellingPartnerApi\Model\AplusContentV20201101\StandardHeaderTextListBlock|null
     */
    public function getBulletedListBlock()
    {
        return $this->container['bulleted_list_block'];
    }

    /**
     * Sets bulleted_list_block
     *
     * @param \SellingPartnerApi\Model\AplusContentV20201101\StandardHeaderTextListBlock|null $bulleted_list_block bulleted_list_block
     *
     * @return self
     */
    public function setBulletedListBlock($bulleted_list_block)
    {
        $this->container['bulleted_list_block'] = $bulleted_list_block;

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


