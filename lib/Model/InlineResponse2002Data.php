<?php
/**
 * InlineResponse2002Data
 *
 * PHP version 5
 *
 * @category Class
 * @package  iimmpact
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * IIMMPACT API
 *
 * No description provided (generated by Swagger Codegen https://github.com/swagger-api/swagger-codegen)
 *
 * OpenAPI spec version: 2020-09-14T13:01:14Z
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 2.4.17
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace iimmpact\Model;

use \ArrayAccess;
use \iimmpact\ObjectSerializer;

/**
 * InlineResponse2002Data Class Doc Comment
 *
 * @category Class
 * @package  iimmpact
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class InlineResponse2002Data implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'inline_response_200_2_data';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'status' => 'string',
        'category' => 'string',
        'product_code' => 'string',
        'product_name' => 'string',
        'denomination' => 'string',
        'unit_price' => 'string',
        'discount' => 'string',
        'api_parameter' => 'string',
        'update_time' => 'string',
        'note' => 'string',
        'product_img' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'status' => null,
        'category' => null,
        'product_code' => null,
        'product_name' => null,
        'denomination' => null,
        'unit_price' => null,
        'discount' => null,
        'api_parameter' => null,
        'update_time' => null,
        'note' => null,
        'product_img' => null
    ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerTypes()
    {
        return self::$swaggerTypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerFormats()
    {
        return self::$swaggerFormats;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'status' => 'status',
        'category' => 'category',
        'product_code' => 'product_code',
        'product_name' => 'product_name',
        'denomination' => 'denomination',
        'unit_price' => 'unit_price',
        'discount' => 'discount',
        'api_parameter' => 'api_parameter',
        'update_time' => 'update_time',
        'note' => 'note',
        'product_img' => 'product_img'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'status' => 'setStatus',
        'category' => 'setCategory',
        'product_code' => 'setProductCode',
        'product_name' => 'setProductName',
        'denomination' => 'setDenomination',
        'unit_price' => 'setUnitPrice',
        'discount' => 'setDiscount',
        'api_parameter' => 'setApiParameter',
        'update_time' => 'setUpdateTime',
        'note' => 'setNote',
        'product_img' => 'setProductImg'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'status' => 'getStatus',
        'category' => 'getCategory',
        'product_code' => 'getProductCode',
        'product_name' => 'getProductName',
        'denomination' => 'getDenomination',
        'unit_price' => 'getUnitPrice',
        'discount' => 'getDiscount',
        'api_parameter' => 'getApiParameter',
        'update_time' => 'getUpdateTime',
        'note' => 'getNote',
        'product_img' => 'getProductImg'
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
        return self::$swaggerModelName;
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
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['category'] = isset($data['category']) ? $data['category'] : null;
        $this->container['product_code'] = isset($data['product_code']) ? $data['product_code'] : null;
        $this->container['product_name'] = isset($data['product_name']) ? $data['product_name'] : null;
        $this->container['denomination'] = isset($data['denomination']) ? $data['denomination'] : null;
        $this->container['unit_price'] = isset($data['unit_price']) ? $data['unit_price'] : null;
        $this->container['discount'] = isset($data['discount']) ? $data['discount'] : null;
        $this->container['api_parameter'] = isset($data['api_parameter']) ? $data['api_parameter'] : null;
        $this->container['update_time'] = isset($data['update_time']) ? $data['update_time'] : null;
        $this->container['note'] = isset($data['note']) ? $data['note'] : null;
        $this->container['product_img'] = isset($data['product_img']) ? $data['product_img'] : null;
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
     * Gets status
     *
     * @return string
     */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
     * Sets status
     *
     * @param string $status status
     *
     * @return $this
     */
    public function setStatus($status)
    {
        $this->container['status'] = $status;

        return $this;
    }

    /**
     * Gets category
     *
     * @return string
     */
    public function getCategory()
    {
        return $this->container['category'];
    }

    /**
     * Sets category
     *
     * @param string $category category
     *
     * @return $this
     */
    public function setCategory($category)
    {
        $this->container['category'] = $category;

        return $this;
    }

    /**
     * Gets product_code
     *
     * @return string
     */
    public function getProductCode()
    {
        return $this->container['product_code'];
    }

    /**
     * Sets product_code
     *
     * @param string $product_code product_code
     *
     * @return $this
     */
    public function setProductCode($product_code)
    {
        $this->container['product_code'] = $product_code;

        return $this;
    }

    /**
     * Gets product_name
     *
     * @return string
     */
    public function getProductName()
    {
        return $this->container['product_name'];
    }

    /**
     * Sets product_name
     *
     * @param string $product_name product_name
     *
     * @return $this
     */
    public function setProductName($product_name)
    {
        $this->container['product_name'] = $product_name;

        return $this;
    }

    /**
     * Gets denomination
     *
     * @return string
     */
    public function getDenomination()
    {
        return $this->container['denomination'];
    }

    /**
     * Sets denomination
     *
     * @param string $denomination denomination
     *
     * @return $this
     */
    public function setDenomination($denomination)
    {
        $this->container['denomination'] = $denomination;

        return $this;
    }

    /**
     * Gets unit_price
     *
     * @return string
     */
    public function getUnitPrice()
    {
        return $this->container['unit_price'];
    }

    /**
     * Sets unit_price
     *
     * @param string $unit_price unit_price
     *
     * @return $this
     */
    public function setUnitPrice($unit_price)
    {
        $this->container['unit_price'] = $unit_price;

        return $this;
    }

    /**
     * Gets discount
     *
     * @return string
     */
    public function getDiscount()
    {
        return $this->container['discount'];
    }

    /**
     * Sets discount
     *
     * @param string $discount discount
     *
     * @return $this
     */
    public function setDiscount($discount)
    {
        $this->container['discount'] = $discount;

        return $this;
    }

    /**
     * Gets api_parameter
     *
     * @return string
     */
    public function getApiParameter()
    {
        return $this->container['api_parameter'];
    }

    /**
     * Sets api_parameter
     *
     * @param string $api_parameter api_parameter
     *
     * @return $this
     */
    public function setApiParameter($api_parameter)
    {
        $this->container['api_parameter'] = $api_parameter;

        return $this;
    }

    /**
     * Gets update_time
     *
     * @return string
     */
    public function getUpdateTime()
    {
        return $this->container['update_time'];
    }

    /**
     * Sets update_time
     *
     * @param string $update_time update_time
     *
     * @return $this
     */
    public function setUpdateTime($update_time)
    {
        $this->container['update_time'] = $update_time;

        return $this;
    }

    /**
     * Gets note
     *
     * @return string
     */
    public function getNote()
    {
        return $this->container['note'];
    }

    /**
     * Sets note
     *
     * @param string $note note
     *
     * @return $this
     */
    public function setNote($note)
    {
        $this->container['note'] = $note;

        return $this;
    }

    /**
     * Gets product_img
     *
     * @return string
     */
    public function getProductImg()
    {
        return $this->container['product_img'];
    }

    /**
     * Sets product_img
     *
     * @param string $product_img product_img
     *
     * @return $this
     */
    public function setProductImg($product_img)
    {
        $this->container['product_img'] = $product_img;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param integer $offset Offset
     *
     * @return mixed
     */
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
     * Sets value based on offset.
     *
     * @param integer $offset Offset
     * @param mixed   $value  Value to be set
     *
     * @return void
     */
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
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
    {
        if (defined('JSON_PRETTY_PRINT')) { // use JSON pretty print
            return json_encode(
                ObjectSerializer::sanitizeForSerialization($this),
                JSON_PRETTY_PRINT
            );
        }

        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}


