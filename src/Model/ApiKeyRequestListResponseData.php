<?php
/**
 * ApiKeyRequestListResponseData
 *
 * PHP version 7.4
 *
 * @category Class
 * @package  Schematic
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Schematic API
 *
 * Schematic API
 *
 * The version of the OpenAPI document: 0.1
 * Contact: engineering@schematichq.com
 * Generated by: https://openapi-generator.tech
 * Generator version: 7.10.0
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace Schematic\Model;

use \ArrayAccess;
use \Schematic\ObjectSerializer;

/**
 * ApiKeyRequestListResponseData Class Doc Comment
 *
 * @category Class
 * @package  Schematic
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class ApiKeyRequestListResponseData implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'ApiKeyRequestListResponseData';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'api_key_id' => 'string',
        'ended_at' => '\DateTime',
        'environment_id' => 'string',
        'id' => 'string',
        'method' => 'string',
        'req_body' => 'string',
        'request_type' => 'string',
        'resource_id' => 'int',
        'resource_id_string' => 'string',
        'resource_name' => 'string',
        'resource_type' => 'string',
        'resp_code' => 'int',
        'secondary_resource' => 'string',
        'started_at' => '\DateTime',
        'url' => 'string',
        'user_name' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'api_key_id' => null,
        'ended_at' => 'date-time',
        'environment_id' => null,
        'id' => null,
        'method' => null,
        'req_body' => null,
        'request_type' => null,
        'resource_id' => null,
        'resource_id_string' => null,
        'resource_name' => null,
        'resource_type' => null,
        'resp_code' => null,
        'secondary_resource' => null,
        'started_at' => 'date-time',
        'url' => null,
        'user_name' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'api_key_id' => false,
        'ended_at' => true,
        'environment_id' => true,
        'id' => false,
        'method' => false,
        'req_body' => true,
        'request_type' => true,
        'resource_id' => true,
        'resource_id_string' => true,
        'resource_name' => true,
        'resource_type' => true,
        'resp_code' => true,
        'secondary_resource' => true,
        'started_at' => false,
        'url' => false,
        'user_name' => true
    ];

    /**
      * If a nullable field gets set to null, insert it here
      *
      * @var boolean[]
      */
    protected array $openAPINullablesSetToNull = [];

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
     * Array of nullable properties
     *
     * @return array
     */
    protected static function openAPINullables(): array
    {
        return self::$openAPINullables;
    }

    /**
     * Array of nullable field names deliberately set to null
     *
     * @return boolean[]
     */
    private function getOpenAPINullablesSetToNull(): array
    {
        return $this->openAPINullablesSetToNull;
    }

    /**
     * Setter - Array of nullable field names deliberately set to null
     *
     * @param boolean[] $openAPINullablesSetToNull
     */
    private function setOpenAPINullablesSetToNull(array $openAPINullablesSetToNull): void
    {
        $this->openAPINullablesSetToNull = $openAPINullablesSetToNull;
    }

    /**
     * Checks if a property is nullable
     *
     * @param string $property
     * @return bool
     */
    public static function isNullable(string $property): bool
    {
        return self::openAPINullables()[$property] ?? false;
    }

    /**
     * Checks if a nullable property is set to null.
     *
     * @param string $property
     * @return bool
     */
    public function isNullableSetToNull(string $property): bool
    {
        return in_array($property, $this->getOpenAPINullablesSetToNull(), true);
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'api_key_id' => 'api_key_id',
        'ended_at' => 'ended_at',
        'environment_id' => 'environment_id',
        'id' => 'id',
        'method' => 'method',
        'req_body' => 'req_body',
        'request_type' => 'request_type',
        'resource_id' => 'resource_id',
        'resource_id_string' => 'resource_id_string',
        'resource_name' => 'resource_name',
        'resource_type' => 'resource_type',
        'resp_code' => 'resp_code',
        'secondary_resource' => 'secondary_resource',
        'started_at' => 'started_at',
        'url' => 'url',
        'user_name' => 'user_name'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'api_key_id' => 'setApiKeyId',
        'ended_at' => 'setEndedAt',
        'environment_id' => 'setEnvironmentId',
        'id' => 'setId',
        'method' => 'setMethod',
        'req_body' => 'setReqBody',
        'request_type' => 'setRequestType',
        'resource_id' => 'setResourceId',
        'resource_id_string' => 'setResourceIdString',
        'resource_name' => 'setResourceName',
        'resource_type' => 'setResourceType',
        'resp_code' => 'setRespCode',
        'secondary_resource' => 'setSecondaryResource',
        'started_at' => 'setStartedAt',
        'url' => 'setUrl',
        'user_name' => 'setUserName'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'api_key_id' => 'getApiKeyId',
        'ended_at' => 'getEndedAt',
        'environment_id' => 'getEnvironmentId',
        'id' => 'getId',
        'method' => 'getMethod',
        'req_body' => 'getReqBody',
        'request_type' => 'getRequestType',
        'resource_id' => 'getResourceId',
        'resource_id_string' => 'getResourceIdString',
        'resource_name' => 'getResourceName',
        'resource_type' => 'getResourceType',
        'resp_code' => 'getRespCode',
        'secondary_resource' => 'getSecondaryResource',
        'started_at' => 'getStartedAt',
        'url' => 'getUrl',
        'user_name' => 'getUserName'
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
        $this->setIfExists('api_key_id', $data ?? [], null);
        $this->setIfExists('ended_at', $data ?? [], null);
        $this->setIfExists('environment_id', $data ?? [], null);
        $this->setIfExists('id', $data ?? [], null);
        $this->setIfExists('method', $data ?? [], null);
        $this->setIfExists('req_body', $data ?? [], null);
        $this->setIfExists('request_type', $data ?? [], null);
        $this->setIfExists('resource_id', $data ?? [], null);
        $this->setIfExists('resource_id_string', $data ?? [], null);
        $this->setIfExists('resource_name', $data ?? [], null);
        $this->setIfExists('resource_type', $data ?? [], null);
        $this->setIfExists('resp_code', $data ?? [], null);
        $this->setIfExists('secondary_resource', $data ?? [], null);
        $this->setIfExists('started_at', $data ?? [], null);
        $this->setIfExists('url', $data ?? [], null);
        $this->setIfExists('user_name', $data ?? [], null);
    }

    /**
    * Sets $this->container[$variableName] to the given data or to the given default Value; if $variableName
    * is nullable and its value is set to null in the $fields array, then mark it as "set to null" in the
    * $this->openAPINullablesSetToNull array
    *
    * @param string $variableName
    * @param array  $fields
    * @param mixed  $defaultValue
    */
    private function setIfExists(string $variableName, array $fields, $defaultValue): void
    {
        if (self::isNullable($variableName) && array_key_exists($variableName, $fields) && is_null($fields[$variableName])) {
            $this->openAPINullablesSetToNull[] = $variableName;
        }

        $this->container[$variableName] = $fields[$variableName] ?? $defaultValue;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['api_key_id'] === null) {
            $invalidProperties[] = "'api_key_id' can't be null";
        }
        if ($this->container['id'] === null) {
            $invalidProperties[] = "'id' can't be null";
        }
        if ($this->container['method'] === null) {
            $invalidProperties[] = "'method' can't be null";
        }
        if ($this->container['started_at'] === null) {
            $invalidProperties[] = "'started_at' can't be null";
        }
        if ($this->container['url'] === null) {
            $invalidProperties[] = "'url' can't be null";
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
     * Gets api_key_id
     *
     * @return string
     */
    public function getApiKeyId()
    {
        return $this->container['api_key_id'];
    }

    /**
     * Sets api_key_id
     *
     * @param string $api_key_id api_key_id
     *
     * @return self
     */
    public function setApiKeyId($api_key_id)
    {
        if (is_null($api_key_id)) {
            throw new \InvalidArgumentException('non-nullable api_key_id cannot be null');
        }
        $this->container['api_key_id'] = $api_key_id;

        return $this;
    }

    /**
     * Gets ended_at
     *
     * @return \DateTime|null
     */
    public function getEndedAt()
    {
        return $this->container['ended_at'];
    }

    /**
     * Sets ended_at
     *
     * @param \DateTime|null $ended_at ended_at
     *
     * @return self
     */
    public function setEndedAt($ended_at)
    {
        if (is_null($ended_at)) {
            array_push($this->openAPINullablesSetToNull, 'ended_at');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('ended_at', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['ended_at'] = $ended_at;

        return $this;
    }

    /**
     * Gets environment_id
     *
     * @return string|null
     */
    public function getEnvironmentId()
    {
        return $this->container['environment_id'];
    }

    /**
     * Sets environment_id
     *
     * @param string|null $environment_id environment_id
     *
     * @return self
     */
    public function setEnvironmentId($environment_id)
    {
        if (is_null($environment_id)) {
            array_push($this->openAPINullablesSetToNull, 'environment_id');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('environment_id', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['environment_id'] = $environment_id;

        return $this;
    }

    /**
     * Gets id
     *
     * @return string
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     *
     * @param string $id id
     *
     * @return self
     */
    public function setId($id)
    {
        if (is_null($id)) {
            throw new \InvalidArgumentException('non-nullable id cannot be null');
        }
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets method
     *
     * @return string
     */
    public function getMethod()
    {
        return $this->container['method'];
    }

    /**
     * Sets method
     *
     * @param string $method method
     *
     * @return self
     */
    public function setMethod($method)
    {
        if (is_null($method)) {
            throw new \InvalidArgumentException('non-nullable method cannot be null');
        }
        $this->container['method'] = $method;

        return $this;
    }

    /**
     * Gets req_body
     *
     * @return string|null
     */
    public function getReqBody()
    {
        return $this->container['req_body'];
    }

    /**
     * Sets req_body
     *
     * @param string|null $req_body req_body
     *
     * @return self
     */
    public function setReqBody($req_body)
    {
        if (is_null($req_body)) {
            array_push($this->openAPINullablesSetToNull, 'req_body');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('req_body', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['req_body'] = $req_body;

        return $this;
    }

    /**
     * Gets request_type
     *
     * @return string|null
     */
    public function getRequestType()
    {
        return $this->container['request_type'];
    }

    /**
     * Sets request_type
     *
     * @param string|null $request_type request_type
     *
     * @return self
     */
    public function setRequestType($request_type)
    {
        if (is_null($request_type)) {
            array_push($this->openAPINullablesSetToNull, 'request_type');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('request_type', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['request_type'] = $request_type;

        return $this;
    }

    /**
     * Gets resource_id
     *
     * @return int|null
     */
    public function getResourceId()
    {
        return $this->container['resource_id'];
    }

    /**
     * Sets resource_id
     *
     * @param int|null $resource_id resource_id
     *
     * @return self
     */
    public function setResourceId($resource_id)
    {
        if (is_null($resource_id)) {
            array_push($this->openAPINullablesSetToNull, 'resource_id');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('resource_id', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['resource_id'] = $resource_id;

        return $this;
    }

    /**
     * Gets resource_id_string
     *
     * @return string|null
     */
    public function getResourceIdString()
    {
        return $this->container['resource_id_string'];
    }

    /**
     * Sets resource_id_string
     *
     * @param string|null $resource_id_string resource_id_string
     *
     * @return self
     */
    public function setResourceIdString($resource_id_string)
    {
        if (is_null($resource_id_string)) {
            array_push($this->openAPINullablesSetToNull, 'resource_id_string');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('resource_id_string', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['resource_id_string'] = $resource_id_string;

        return $this;
    }

    /**
     * Gets resource_name
     *
     * @return string|null
     */
    public function getResourceName()
    {
        return $this->container['resource_name'];
    }

    /**
     * Sets resource_name
     *
     * @param string|null $resource_name resource_name
     *
     * @return self
     */
    public function setResourceName($resource_name)
    {
        if (is_null($resource_name)) {
            array_push($this->openAPINullablesSetToNull, 'resource_name');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('resource_name', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['resource_name'] = $resource_name;

        return $this;
    }

    /**
     * Gets resource_type
     *
     * @return string|null
     */
    public function getResourceType()
    {
        return $this->container['resource_type'];
    }

    /**
     * Sets resource_type
     *
     * @param string|null $resource_type resource_type
     *
     * @return self
     */
    public function setResourceType($resource_type)
    {
        if (is_null($resource_type)) {
            array_push($this->openAPINullablesSetToNull, 'resource_type');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('resource_type', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['resource_type'] = $resource_type;

        return $this;
    }

    /**
     * Gets resp_code
     *
     * @return int|null
     */
    public function getRespCode()
    {
        return $this->container['resp_code'];
    }

    /**
     * Sets resp_code
     *
     * @param int|null $resp_code resp_code
     *
     * @return self
     */
    public function setRespCode($resp_code)
    {
        if (is_null($resp_code)) {
            array_push($this->openAPINullablesSetToNull, 'resp_code');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('resp_code', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['resp_code'] = $resp_code;

        return $this;
    }

    /**
     * Gets secondary_resource
     *
     * @return string|null
     */
    public function getSecondaryResource()
    {
        return $this->container['secondary_resource'];
    }

    /**
     * Sets secondary_resource
     *
     * @param string|null $secondary_resource secondary_resource
     *
     * @return self
     */
    public function setSecondaryResource($secondary_resource)
    {
        if (is_null($secondary_resource)) {
            array_push($this->openAPINullablesSetToNull, 'secondary_resource');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('secondary_resource', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['secondary_resource'] = $secondary_resource;

        return $this;
    }

    /**
     * Gets started_at
     *
     * @return \DateTime
     */
    public function getStartedAt()
    {
        return $this->container['started_at'];
    }

    /**
     * Sets started_at
     *
     * @param \DateTime $started_at started_at
     *
     * @return self
     */
    public function setStartedAt($started_at)
    {
        if (is_null($started_at)) {
            throw new \InvalidArgumentException('non-nullable started_at cannot be null');
        }
        $this->container['started_at'] = $started_at;

        return $this;
    }

    /**
     * Gets url
     *
     * @return string
     */
    public function getUrl()
    {
        return $this->container['url'];
    }

    /**
     * Sets url
     *
     * @param string $url url
     *
     * @return self
     */
    public function setUrl($url)
    {
        if (is_null($url)) {
            throw new \InvalidArgumentException('non-nullable url cannot be null');
        }
        $this->container['url'] = $url;

        return $this;
    }

    /**
     * Gets user_name
     *
     * @return string|null
     */
    public function getUserName()
    {
        return $this->container['user_name'];
    }

    /**
     * Sets user_name
     *
     * @param string|null $user_name user_name
     *
     * @return self
     */
    public function setUserName($user_name)
    {
        if (is_null($user_name)) {
            array_push($this->openAPINullablesSetToNull, 'user_name');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('user_name', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['user_name'] = $user_name;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists($offset): bool
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
    public function offsetSet($offset, $value): void
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
    public function offsetUnset($offset): void
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


