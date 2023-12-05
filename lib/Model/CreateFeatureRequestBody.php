<?php
/**
 * CreateFeatureRequestBody
 *
 * PHP version 7.4
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Schematic API
 *
 * Schematic API
 *
 * The version of the OpenAPI document: 0.1
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 6.6.0
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace OpenAPI\Client\Model;

use \ArrayAccess;
use \OpenAPI\Client\ObjectSerializer;

/**
 * CreateFeatureRequestBody Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class CreateFeatureRequestBody implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'CreateFeatureRequestBody';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'description' => 'string',
        'event_subtype' => 'string',
        'feature_type' => 'string',
        'flag' => '\OpenAPI\Client\Model\CreateOrUpdateFlagRequestBody',
        'lifecycle_phase' => 'string',
        'name' => 'string',
        'skip_webhooks' => 'bool',
        'trait_id' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'description' => null,
        'event_subtype' => null,
        'feature_type' => null,
        'flag' => null,
        'lifecycle_phase' => null,
        'name' => null,
        'skip_webhooks' => null,
        'trait_id' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'description' => false,
		'event_subtype' => true,
		'feature_type' => false,
		'flag' => false,
		'lifecycle_phase' => true,
		'name' => false,
		'skip_webhooks' => true,
		'trait_id' => true
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
        'description' => 'description',
        'event_subtype' => 'event_subtype',
        'feature_type' => 'feature_type',
        'flag' => 'flag',
        'lifecycle_phase' => 'lifecycle_phase',
        'name' => 'name',
        'skip_webhooks' => 'skip_webhooks',
        'trait_id' => 'trait_id'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'description' => 'setDescription',
        'event_subtype' => 'setEventSubtype',
        'feature_type' => 'setFeatureType',
        'flag' => 'setFlag',
        'lifecycle_phase' => 'setLifecyclePhase',
        'name' => 'setName',
        'skip_webhooks' => 'setSkipWebhooks',
        'trait_id' => 'setTraitId'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'description' => 'getDescription',
        'event_subtype' => 'getEventSubtype',
        'feature_type' => 'getFeatureType',
        'flag' => 'getFlag',
        'lifecycle_phase' => 'getLifecyclePhase',
        'name' => 'getName',
        'skip_webhooks' => 'getSkipWebhooks',
        'trait_id' => 'getTraitId'
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
        $this->setIfExists('description', $data ?? [], null);
        $this->setIfExists('event_subtype', $data ?? [], null);
        $this->setIfExists('feature_type', $data ?? [], null);
        $this->setIfExists('flag', $data ?? [], null);
        $this->setIfExists('lifecycle_phase', $data ?? [], null);
        $this->setIfExists('name', $data ?? [], null);
        $this->setIfExists('skip_webhooks', $data ?? [], null);
        $this->setIfExists('trait_id', $data ?? [], null);
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

        if ($this->container['description'] === null) {
            $invalidProperties[] = "'description' can't be null";
        }
        if ($this->container['feature_type'] === null) {
            $invalidProperties[] = "'feature_type' can't be null";
        }
        if ($this->container['name'] === null) {
            $invalidProperties[] = "'name' can't be null";
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
     * Gets description
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->container['description'];
    }

    /**
     * Sets description
     *
     * @param string $description description
     *
     * @return self
     */
    public function setDescription($description)
    {
        if (is_null($description)) {
            throw new \InvalidArgumentException('non-nullable description cannot be null');
        }
        $this->container['description'] = $description;

        return $this;
    }

    /**
     * Gets event_subtype
     *
     * @return string|null
     */
    public function getEventSubtype()
    {
        return $this->container['event_subtype'];
    }

    /**
     * Sets event_subtype
     *
     * @param string|null $event_subtype event_subtype
     *
     * @return self
     */
    public function setEventSubtype($event_subtype)
    {
        if (is_null($event_subtype)) {
            array_push($this->openAPINullablesSetToNull, 'event_subtype');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('event_subtype', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['event_subtype'] = $event_subtype;

        return $this;
    }

    /**
     * Gets feature_type
     *
     * @return string
     */
    public function getFeatureType()
    {
        return $this->container['feature_type'];
    }

    /**
     * Sets feature_type
     *
     * @param string $feature_type feature_type
     *
     * @return self
     */
    public function setFeatureType($feature_type)
    {
        if (is_null($feature_type)) {
            throw new \InvalidArgumentException('non-nullable feature_type cannot be null');
        }
        $this->container['feature_type'] = $feature_type;

        return $this;
    }

    /**
     * Gets flag
     *
     * @return \OpenAPI\Client\Model\CreateOrUpdateFlagRequestBody|null
     */
    public function getFlag()
    {
        return $this->container['flag'];
    }

    /**
     * Sets flag
     *
     * @param \OpenAPI\Client\Model\CreateOrUpdateFlagRequestBody|null $flag flag
     *
     * @return self
     */
    public function setFlag($flag)
    {
        if (is_null($flag)) {
            throw new \InvalidArgumentException('non-nullable flag cannot be null');
        }
        $this->container['flag'] = $flag;

        return $this;
    }

    /**
     * Gets lifecycle_phase
     *
     * @return string|null
     */
    public function getLifecyclePhase()
    {
        return $this->container['lifecycle_phase'];
    }

    /**
     * Sets lifecycle_phase
     *
     * @param string|null $lifecycle_phase lifecycle_phase
     *
     * @return self
     */
    public function setLifecyclePhase($lifecycle_phase)
    {
        if (is_null($lifecycle_phase)) {
            array_push($this->openAPINullablesSetToNull, 'lifecycle_phase');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('lifecycle_phase', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['lifecycle_phase'] = $lifecycle_phase;

        return $this;
    }

    /**
     * Gets name
     *
     * @return string
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     *
     * @param string $name name
     *
     * @return self
     */
    public function setName($name)
    {
        if (is_null($name)) {
            throw new \InvalidArgumentException('non-nullable name cannot be null');
        }
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets skip_webhooks
     *
     * @return bool|null
     */
    public function getSkipWebhooks()
    {
        return $this->container['skip_webhooks'];
    }

    /**
     * Sets skip_webhooks
     *
     * @param bool|null $skip_webhooks skip_webhooks
     *
     * @return self
     */
    public function setSkipWebhooks($skip_webhooks)
    {
        if (is_null($skip_webhooks)) {
            array_push($this->openAPINullablesSetToNull, 'skip_webhooks');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('skip_webhooks', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['skip_webhooks'] = $skip_webhooks;

        return $this;
    }

    /**
     * Gets trait_id
     *
     * @return string|null
     */
    public function getTraitId()
    {
        return $this->container['trait_id'];
    }

    /**
     * Sets trait_id
     *
     * @param string|null $trait_id trait_id
     *
     * @return self
     */
    public function setTraitId($trait_id)
    {
        if (is_null($trait_id)) {
            array_push($this->openAPINullablesSetToNull, 'trait_id');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('trait_id', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['trait_id'] = $trait_id;

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


