<?php
/**
 * EvalContext
 *
 * PHP version 5
 *
 * @category Class
 * @package  Flagr\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Flagr
 *
 * Flagr is a feature flagging, A/B testing and dynamic configuration microservice. The base path for all the APIs is \"/api/v1\".
 *
 * OpenAPI spec version: 1.1.12
 *
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 3.0.25
 */
/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Flagr\Client\Model;

use \ArrayAccess;
use \Flagr\Client\ObjectSerializer;

/**
 * EvalContext Class Doc Comment
 *
 * @category Class
 * @package  Flagr\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class EvalContext implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'evalContext';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'enable_debug' => 'bool',
'entity_context' => 'object',
'entity_id' => 'string',
'entity_type' => 'string',
'flag_id' => 'int',
'flag_key' => 'string',
'flag_tags' => 'string[]'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'enable_debug' => null,
'entity_context' => null,
'entity_id' => null,
'entity_type' => null,
'flag_id' => 'int64',
'flag_key' => null,
'flag_tags' => null    ];

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
        'enable_debug' => 'enableDebug',
'entity_context' => 'entityContext',
'entity_id' => 'entityID',
'entity_type' => 'entityType',
'flag_id' => 'flagID',
'flag_key' => 'flagKey',
'flag_tags' => 'flagTags'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'enable_debug' => 'setEnableDebug',
'entity_context' => 'setEntityContext',
'entity_id' => 'setEntityId',
'entity_type' => 'setEntityType',
'flag_id' => 'setFlagId',
'flag_key' => 'setFlagKey',
'flag_tags' => 'setFlagTags'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'enable_debug' => 'getEnableDebug',
'entity_context' => 'getEntityContext',
'entity_id' => 'getEntityId',
'entity_type' => 'getEntityType',
'flag_id' => 'getFlagId',
'flag_key' => 'getFlagKey',
'flag_tags' => 'getFlagTags'    ];

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
        $this->container['enable_debug'] = isset($data['enable_debug']) ? $data['enable_debug'] : null;
        $this->container['entity_context'] = isset($data['entity_context']) ? $data['entity_context'] : null;
        $this->container['entity_id'] = isset($data['entity_id']) ? $data['entity_id'] : null;
        $this->container['entity_type'] = isset($data['entity_type']) ? $data['entity_type'] : null;
        $this->container['flag_id'] = isset($data['flag_id']) ? $data['flag_id'] : null;
        $this->container['flag_key'] = isset($data['flag_key']) ? $data['flag_key'] : null;
        $this->container['flag_tags'] = isset($data['flag_tags']) ? $data['flag_tags'] : null;
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
     * Gets enable_debug
     *
     * @return bool
     */
    public function getEnableDebug()
    {
        return $this->container['enable_debug'];
    }

    /**
     * Sets enable_debug
     *
     * @param bool $enable_debug enable_debug
     *
     * @return $this
     */
    public function setEnableDebug($enable_debug)
    {
        $this->container['enable_debug'] = $enable_debug;

        return $this;
    }

    /**
     * Gets entity_context
     *
     * @return object
     */
    public function getEntityContext()
    {
        return $this->container['entity_context'];
    }

    /**
     * Sets entity_context
     *
     * @param object $entity_context entity_context
     *
     * @return $this
     */
    public function setEntityContext($entity_context)
    {
        $this->container['entity_context'] = $entity_context;

        return $this;
    }

    /**
     * Gets entity_id
     *
     * @return string
     */
    public function getEntityId()
    {
        return $this->container['entity_id'];
    }

    /**
     * Sets entity_id
     *
     * @param string $entity_id entityID is used to deterministically at random to evaluate the flag result. If it's empty, flagr will randomly generate one.
     *
     * @return $this
     */
    public function setEntityId($entity_id)
    {
        $this->container['entity_id'] = $entity_id;

        return $this;
    }

    /**
     * Gets entity_type
     *
     * @return string
     */
    public function getEntityType()
    {
        return $this->container['entity_type'];
    }

    /**
     * Sets entity_type
     *
     * @param string $entity_type entity_type
     *
     * @return $this
     */
    public function setEntityType($entity_type)
    {
        $this->container['entity_type'] = $entity_type;

        return $this;
    }

    /**
     * Gets flag_id
     *
     * @return int
     */
    public function getFlagId()
    {
        return $this->container['flag_id'];
    }

    /**
     * Sets flag_id
     *
     * @param int $flag_id flagID
     *
     * @return $this
     */
    public function setFlagId($flag_id)
    {
        $this->container['flag_id'] = $flag_id;

        return $this;
    }

    /**
     * Gets flag_key
     *
     * @return string
     */
    public function getFlagKey()
    {
        return $this->container['flag_key'];
    }

    /**
     * Sets flag_key
     *
     * @param string $flag_key flagKey. flagID or flagKey will resolve to the same flag. Either works.
     *
     * @return $this
     */
    public function setFlagKey($flag_key)
    {
        $this->container['flag_key'] = $flag_key;

        return $this;
    }

    /**
     * Gets flag_tags
     *
     * @return string[]
     */
    public function getFlagTags()
    {
        return $this->container['flag_tags'];
    }

    /**
     * Sets flag_tags
     *
     * @param string[] $flag_tags flagTags. flagTags looks up flags by tag. Either works.
     *
     * @return $this
     */
    public function setFlagTags($flag_tags)
    {
        $this->container['flag_tags'] = $flag_tags;

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
