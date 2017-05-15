<?php
/**
 * MePbx
 *
 * PHP version 5
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swaagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * v0
 *
 * No description provided (generated by Swagger Codegen https://github.com/swagger-api/swagger-codegen)
 *
 * OpenAPI spec version: 2017-03-27T11:07:47Z
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 *
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Swagger\Client\Model;

use \ArrayAccess;

/**
 * MePbx Class Doc Comment
 *
 * @category    Class
 * @package     Swagger\Client
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class MePbx implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'Me_pbx';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'state' => 'string',
        'system_status' => 'string',
        'instance_status' => 'string'
    ];

    public static function swaggerTypes()
    {
        return self::$swaggerTypes;
    }

    /**
     * Array of attributes where the key is the local name, and the value is the original name
     * @var string[]
     */
    protected static $attributeMap = [
        'state' => 'state',
        'system_status' => 'systemStatus',
        'instance_status' => 'instanceStatus'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'state' => 'setState',
        'system_status' => 'setSystemStatus',
        'instance_status' => 'setInstanceStatus'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'state' => 'getState',
        'system_status' => 'getSystemStatus',
        'instance_status' => 'getInstanceStatus'
    ];

    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    public static function setters()
    {
        return self::$setters;
    }

    public static function getters()
    {
        return self::$getters;
    }

    const STATE_GREEN = 'green';
    const STATE_FAILED = 'failed';
    const STATE_RED = 'red';
    const SYSTEM_STATUS_GREEN = 'green';
    const SYSTEM_STATUS_FAILED = 'failed';
    const SYSTEM_STATUS_RED = 'red';
    const INSTANCE_STATUS_GREEN = 'green';
    const INSTANCE_STATUS_FAILED = 'failed';
    const INSTANCE_STATUS_RED = 'red';
    

    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public function getStateAllowableValues()
    {
        return [
            self::STATE_GREEN,
            self::STATE_FAILED,
            self::STATE_RED,
        ];
    }
    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public function getSystemStatusAllowableValues()
    {
        return [
            self::SYSTEM_STATUS_GREEN,
            self::SYSTEM_STATUS_FAILED,
            self::SYSTEM_STATUS_RED,
        ];
    }
    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public function getInstanceStatusAllowableValues()
    {
        return [
            self::INSTANCE_STATUS_GREEN,
            self::INSTANCE_STATUS_FAILED,
            self::INSTANCE_STATUS_RED,
        ];
    }
    

    /**
     * Associative array for storing property values
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     * @param mixed[] $data Associated array of property values initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['state'] = isset($data['state']) ? $data['state'] : null;
        $this->container['system_status'] = isset($data['system_status']) ? $data['system_status'] : null;
        $this->container['instance_status'] = isset($data['instance_status']) ? $data['instance_status'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = [];

        $allowed_values = $this->getStateAllowableValues();
        if (!in_array($this->container['state'], $allowed_values)) {
            $invalid_properties[] = sprintf(
                "invalid value for 'state', must be one of '%s'",
                implode("', '", $allowed_values)
            );
        }

        $allowed_values = $this->getSystemStatusAllowableValues();
        if (!in_array($this->container['system_status'], $allowed_values)) {
            $invalid_properties[] = sprintf(
                "invalid value for 'system_status', must be one of '%s'",
                implode("', '", $allowed_values)
            );
        }

        $allowed_values = $this->getInstanceStatusAllowableValues();
        if (!in_array($this->container['instance_status'], $allowed_values)) {
            $invalid_properties[] = sprintf(
                "invalid value for 'instance_status', must be one of '%s'",
                implode("', '", $allowed_values)
            );
        }

        return $invalid_properties;
    }

    /**
     * validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {

        $allowed_values = $this->getStateAllowableValues();
        if (!in_array($this->container['state'], $allowed_values)) {
            return false;
        }
        $allowed_values = $this->getSystemStatusAllowableValues();
        if (!in_array($this->container['system_status'], $allowed_values)) {
            return false;
        }
        $allowed_values = $this->getInstanceStatusAllowableValues();
        if (!in_array($this->container['instance_status'], $allowed_values)) {
            return false;
        }
        return true;
    }


    /**
     * Gets state
     * @return string
     */
    public function getState()
    {
        return $this->container['state'];
    }

    /**
     * Sets state
     * @param string $state
     * @return $this
     */
    public function setState($state)
    {
        $allowed_values = $this->getStateAllowableValues();
        if (!is_null($state) && !in_array($state, $allowed_values)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'state', must be one of '%s'",
                    implode("', '", $allowed_values)
                )
            );
        }
        $this->container['state'] = $state;

        return $this;
    }

    /**
     * Gets system_status
     * @return string
     */
    public function getSystemStatus()
    {
        return $this->container['system_status'];
    }

    /**
     * Sets system_status
     * @param string $system_status
     * @return $this
     */
    public function setSystemStatus($system_status)
    {
        $allowed_values = $this->getSystemStatusAllowableValues();
        if (!is_null($system_status) && !in_array($system_status, $allowed_values)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'system_status', must be one of '%s'",
                    implode("', '", $allowed_values)
                )
            );
        }
        $this->container['system_status'] = $system_status;

        return $this;
    }

    /**
     * Gets instance_status
     * @return string
     */
    public function getInstanceStatus()
    {
        return $this->container['instance_status'];
    }

    /**
     * Sets instance_status
     * @param string $instance_status
     * @return $this
     */
    public function setInstanceStatus($instance_status)
    {
        $allowed_values = $this->getInstanceStatusAllowableValues();
        if (!is_null($instance_status) && !in_array($instance_status, $allowed_values)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'instance_status', must be one of '%s'",
                    implode("', '", $allowed_values)
                )
            );
        }
        $this->container['instance_status'] = $instance_status;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     * @param  integer $offset Offset
     * @return boolean
     */
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     * @param  integer $offset Offset
     * @return mixed
     */
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
     * Sets value based on offset.
     * @param  integer $offset Offset
     * @param  mixed   $value  Value to be set
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
     * @param  integer $offset Offset
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
     * Gets the string presentation of the object
     * @return string
     */
    public function __toString()
    {
        if (defined('JSON_PRETTY_PRINT')) { // use JSON pretty print
            return json_encode(\Swagger\Client\ObjectSerializer::sanitizeForSerialization($this), JSON_PRETTY_PRINT);
        }

        return json_encode(\Swagger\Client\ObjectSerializer::sanitizeForSerialization($this));
    }
}

