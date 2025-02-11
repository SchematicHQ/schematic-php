<?php
/**
 * PlanGroupResponseData
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
 * PlanGroupResponseData Class Doc Comment
 *
 * @category Class
 * @description The updated resource
 * @package  Schematic
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class PlanGroupResponseData implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'PlanGroupResponseData';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'add_on_ids' => 'string[]',
        'default_plan_id' => 'string',
        'id' => 'string',
        'plan_ids' => 'string[]',
        'trial_days' => 'int',
        'trial_payment_method_required' => 'bool'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'add_on_ids' => null,
        'default_plan_id' => null,
        'id' => null,
        'plan_ids' => null,
        'trial_days' => null,
        'trial_payment_method_required' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'add_on_ids' => false,
        'default_plan_id' => true,
        'id' => false,
        'plan_ids' => false,
        'trial_days' => true,
        'trial_payment_method_required' => true
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
        'add_on_ids' => 'add_on_ids',
        'default_plan_id' => 'default_plan_id',
        'id' => 'id',
        'plan_ids' => 'plan_ids',
        'trial_days' => 'trial_days',
        'trial_payment_method_required' => 'trial_payment_method_required'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'add_on_ids' => 'setAddOnIds',
        'default_plan_id' => 'setDefaultPlanId',
        'id' => 'setId',
        'plan_ids' => 'setPlanIds',
        'trial_days' => 'setTrialDays',
        'trial_payment_method_required' => 'setTrialPaymentMethodRequired'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'add_on_ids' => 'getAddOnIds',
        'default_plan_id' => 'getDefaultPlanId',
        'id' => 'getId',
        'plan_ids' => 'getPlanIds',
        'trial_days' => 'getTrialDays',
        'trial_payment_method_required' => 'getTrialPaymentMethodRequired'
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
        $this->setIfExists('add_on_ids', $data ?? [], null);
        $this->setIfExists('default_plan_id', $data ?? [], null);
        $this->setIfExists('id', $data ?? [], null);
        $this->setIfExists('plan_ids', $data ?? [], null);
        $this->setIfExists('trial_days', $data ?? [], null);
        $this->setIfExists('trial_payment_method_required', $data ?? [], null);
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

        if ($this->container['add_on_ids'] === null) {
            $invalidProperties[] = "'add_on_ids' can't be null";
        }
        if ($this->container['id'] === null) {
            $invalidProperties[] = "'id' can't be null";
        }
        if ($this->container['plan_ids'] === null) {
            $invalidProperties[] = "'plan_ids' can't be null";
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
     * Gets add_on_ids
     *
     * @return string[]
     */
    public function getAddOnIds()
    {
        return $this->container['add_on_ids'];
    }

    /**
     * Sets add_on_ids
     *
     * @param string[] $add_on_ids add_on_ids
     *
     * @return self
     */
    public function setAddOnIds($add_on_ids)
    {
        if (is_null($add_on_ids)) {
            throw new \InvalidArgumentException('non-nullable add_on_ids cannot be null');
        }
        $this->container['add_on_ids'] = $add_on_ids;

        return $this;
    }

    /**
     * Gets default_plan_id
     *
     * @return string|null
     */
    public function getDefaultPlanId()
    {
        return $this->container['default_plan_id'];
    }

    /**
     * Sets default_plan_id
     *
     * @param string|null $default_plan_id default_plan_id
     *
     * @return self
     */
    public function setDefaultPlanId($default_plan_id)
    {
        if (is_null($default_plan_id)) {
            array_push($this->openAPINullablesSetToNull, 'default_plan_id');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('default_plan_id', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['default_plan_id'] = $default_plan_id;

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
     * Gets plan_ids
     *
     * @return string[]
     */
    public function getPlanIds()
    {
        return $this->container['plan_ids'];
    }

    /**
     * Sets plan_ids
     *
     * @param string[] $plan_ids plan_ids
     *
     * @return self
     */
    public function setPlanIds($plan_ids)
    {
        if (is_null($plan_ids)) {
            throw new \InvalidArgumentException('non-nullable plan_ids cannot be null');
        }
        $this->container['plan_ids'] = $plan_ids;

        return $this;
    }

    /**
     * Gets trial_days
     *
     * @return int|null
     */
    public function getTrialDays()
    {
        return $this->container['trial_days'];
    }

    /**
     * Sets trial_days
     *
     * @param int|null $trial_days trial_days
     *
     * @return self
     */
    public function setTrialDays($trial_days)
    {
        if (is_null($trial_days)) {
            array_push($this->openAPINullablesSetToNull, 'trial_days');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('trial_days', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['trial_days'] = $trial_days;

        return $this;
    }

    /**
     * Gets trial_payment_method_required
     *
     * @return bool|null
     */
    public function getTrialPaymentMethodRequired()
    {
        return $this->container['trial_payment_method_required'];
    }

    /**
     * Sets trial_payment_method_required
     *
     * @param bool|null $trial_payment_method_required trial_payment_method_required
     *
     * @return self
     */
    public function setTrialPaymentMethodRequired($trial_payment_method_required)
    {
        if (is_null($trial_payment_method_required)) {
            array_push($this->openAPINullablesSetToNull, 'trial_payment_method_required');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('trial_payment_method_required', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['trial_payment_method_required'] = $trial_payment_method_required;

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


