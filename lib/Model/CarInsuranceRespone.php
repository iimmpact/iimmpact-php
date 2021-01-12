<?php
/**
 * CarInsuranceRespone
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
 * CarInsuranceRespone Class Doc Comment
 *
 * @category Class
 * @package  iimmpact
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class CarInsuranceRespone implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'CarInsuranceRespone';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'message' => 'string',
        'make' => 'string',
        'model' => 'string',
        'year_make' => 'string',
        'chassis_no' => 'string',
        'engine_no' => 'string',
        'seating_capacity' => 'string',
        'variant' => '\iimmpact\Model\CarInsuranceResponeVariant[]',
        'veh_image' => 'string',
        'next_ncd_per_centage' => 'string',
        'next_ncd_exp_date' => 'string',
        'current_policy' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'message' => null,
        'make' => null,
        'model' => null,
        'year_make' => null,
        'chassis_no' => null,
        'engine_no' => null,
        'seating_capacity' => null,
        'variant' => null,
        'veh_image' => null,
        'next_ncd_per_centage' => null,
        'next_ncd_exp_date' => null,
        'current_policy' => null
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
        'message' => 'message',
        'make' => 'make',
        'model' => 'model',
        'year_make' => 'yearMake',
        'chassis_no' => 'chassisNo',
        'engine_no' => 'engineNo',
        'seating_capacity' => 'seatingCapacity',
        'variant' => 'variant',
        'veh_image' => 'vehImage',
        'next_ncd_per_centage' => 'nextNCDPerCentage',
        'next_ncd_exp_date' => 'nextNcdExpDate',
        'current_policy' => 'currentPolicy'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'message' => 'setMessage',
        'make' => 'setMake',
        'model' => 'setModel',
        'year_make' => 'setYearMake',
        'chassis_no' => 'setChassisNo',
        'engine_no' => 'setEngineNo',
        'seating_capacity' => 'setSeatingCapacity',
        'variant' => 'setVariant',
        'veh_image' => 'setVehImage',
        'next_ncd_per_centage' => 'setNextNcdPerCentage',
        'next_ncd_exp_date' => 'setNextNcdExpDate',
        'current_policy' => 'setCurrentPolicy'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'message' => 'getMessage',
        'make' => 'getMake',
        'model' => 'getModel',
        'year_make' => 'getYearMake',
        'chassis_no' => 'getChassisNo',
        'engine_no' => 'getEngineNo',
        'seating_capacity' => 'getSeatingCapacity',
        'variant' => 'getVariant',
        'veh_image' => 'getVehImage',
        'next_ncd_per_centage' => 'getNextNcdPerCentage',
        'next_ncd_exp_date' => 'getNextNcdExpDate',
        'current_policy' => 'getCurrentPolicy'
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
        $this->container['message'] = isset($data['message']) ? $data['message'] : null;
        $this->container['make'] = isset($data['make']) ? $data['make'] : null;
        $this->container['model'] = isset($data['model']) ? $data['model'] : null;
        $this->container['year_make'] = isset($data['year_make']) ? $data['year_make'] : null;
        $this->container['chassis_no'] = isset($data['chassis_no']) ? $data['chassis_no'] : null;
        $this->container['engine_no'] = isset($data['engine_no']) ? $data['engine_no'] : null;
        $this->container['seating_capacity'] = isset($data['seating_capacity']) ? $data['seating_capacity'] : null;
        $this->container['variant'] = isset($data['variant']) ? $data['variant'] : null;
        $this->container['veh_image'] = isset($data['veh_image']) ? $data['veh_image'] : null;
        $this->container['next_ncd_per_centage'] = isset($data['next_ncd_per_centage']) ? $data['next_ncd_per_centage'] : null;
        $this->container['next_ncd_exp_date'] = isset($data['next_ncd_exp_date']) ? $data['next_ncd_exp_date'] : null;
        $this->container['current_policy'] = isset($data['current_policy']) ? $data['current_policy'] : null;
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
     * Gets message
     *
     * @return string
     */
    public function getMessage()
    {
        return $this->container['message'];
    }

    /**
     * Sets message
     *
     * @param string $message message
     *
     * @return $this
     */
    public function setMessage($message)
    {
        $this->container['message'] = $message;

        return $this;
    }

    /**
     * Gets make
     *
     * @return string
     */
    public function getMake()
    {
        return $this->container['make'];
    }

    /**
     * Sets make
     *
     * @param string $make make
     *
     * @return $this
     */
    public function setMake($make)
    {
        $this->container['make'] = $make;

        return $this;
    }

    /**
     * Gets model
     *
     * @return string
     */
    public function getModel()
    {
        return $this->container['model'];
    }

    /**
     * Sets model
     *
     * @param string $model model
     *
     * @return $this
     */
    public function setModel($model)
    {
        $this->container['model'] = $model;

        return $this;
    }

    /**
     * Gets year_make
     *
     * @return string
     */
    public function getYearMake()
    {
        return $this->container['year_make'];
    }

    /**
     * Sets year_make
     *
     * @param string $year_make year_make
     *
     * @return $this
     */
    public function setYearMake($year_make)
    {
        $this->container['year_make'] = $year_make;

        return $this;
    }

    /**
     * Gets chassis_no
     *
     * @return string
     */
    public function getChassisNo()
    {
        return $this->container['chassis_no'];
    }

    /**
     * Sets chassis_no
     *
     * @param string $chassis_no chassis_no
     *
     * @return $this
     */
    public function setChassisNo($chassis_no)
    {
        $this->container['chassis_no'] = $chassis_no;

        return $this;
    }

    /**
     * Gets engine_no
     *
     * @return string
     */
    public function getEngineNo()
    {
        return $this->container['engine_no'];
    }

    /**
     * Sets engine_no
     *
     * @param string $engine_no engine_no
     *
     * @return $this
     */
    public function setEngineNo($engine_no)
    {
        $this->container['engine_no'] = $engine_no;

        return $this;
    }

    /**
     * Gets seating_capacity
     *
     * @return string
     */
    public function getSeatingCapacity()
    {
        return $this->container['seating_capacity'];
    }

    /**
     * Sets seating_capacity
     *
     * @param string $seating_capacity seating_capacity
     *
     * @return $this
     */
    public function setSeatingCapacity($seating_capacity)
    {
        $this->container['seating_capacity'] = $seating_capacity;

        return $this;
    }

    /**
     * Gets variant
     *
     * @return \iimmpact\Model\CarInsuranceResponeVariant[]
     */
    public function getVariant()
    {
        return $this->container['variant'];
    }

    /**
     * Sets variant
     *
     * @param \iimmpact\Model\CarInsuranceResponeVariant[] $variant variant
     *
     * @return $this
     */
    public function setVariant($variant)
    {
        $this->container['variant'] = $variant;

        return $this;
    }

    /**
     * Gets veh_image
     *
     * @return string
     */
    public function getVehImage()
    {
        return $this->container['veh_image'];
    }

    /**
     * Sets veh_image
     *
     * @param string $veh_image veh_image
     *
     * @return $this
     */
    public function setVehImage($veh_image)
    {
        $this->container['veh_image'] = $veh_image;

        return $this;
    }

    /**
     * Gets next_ncd_per_centage
     *
     * @return string
     */
    public function getNextNcdPerCentage()
    {
        return $this->container['next_ncd_per_centage'];
    }

    /**
     * Sets next_ncd_per_centage
     *
     * @param string $next_ncd_per_centage next_ncd_per_centage
     *
     * @return $this
     */
    public function setNextNcdPerCentage($next_ncd_per_centage)
    {
        $this->container['next_ncd_per_centage'] = $next_ncd_per_centage;

        return $this;
    }

    /**
     * Gets next_ncd_exp_date
     *
     * @return string
     */
    public function getNextNcdExpDate()
    {
        return $this->container['next_ncd_exp_date'];
    }

    /**
     * Sets next_ncd_exp_date
     *
     * @param string $next_ncd_exp_date next_ncd_exp_date
     *
     * @return $this
     */
    public function setNextNcdExpDate($next_ncd_exp_date)
    {
        $this->container['next_ncd_exp_date'] = $next_ncd_exp_date;

        return $this;
    }

    /**
     * Gets current_policy
     *
     * @return string
     */
    public function getCurrentPolicy()
    {
        return $this->container['current_policy'];
    }

    /**
     * Sets current_policy
     *
     * @param string $current_policy current_policy
     *
     * @return $this
     */
    public function setCurrentPolicy($current_policy)
    {
        $this->container['current_policy'] = $current_policy;

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


