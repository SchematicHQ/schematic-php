<?php
/**
 * CreateOrUpdateConditionRequestBody
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
 * Generator version: 7.4.0
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
 * CreateOrUpdateConditionRequestBody Class Doc Comment
 *
 * @category Class
 * @package  Schematic
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class CreateOrUpdateConditionRequestBody implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'CreateOrUpdateConditionRequestBody';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'comparison_trait_id' => 'string',
        'condition_type' => 'string',
        'event_subtype' => 'string',
        'id' => 'string',
        'metric_period' => 'string',
        'metric_value' => 'int',
        'operator' => 'string',
        'resource_ids' => 'string[]',
        'trait_id' => 'string',
        'trait_value' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'comparison_trait_id' => null,
        'condition_type' => null,
        'event_subtype' => null,
        'id' => null,
        'metric_period' => null,
        'metric_value' => null,
        'operator' => null,
        'resource_ids' => null,
        'trait_id' => null,
        'trait_value' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'comparison_trait_id' => true,
        'condition_type' => false,
        'event_subtype' => true,
        'id' => true,
        'metric_period' => true,
        'metric_value' => false,
        'operator' => false,
        'resource_ids' => false,
        'trait_id' => true,
        'trait_value' => true
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
        'comparison_trait_id' => 'comparison_trait_id',
        'condition_type' => 'condition_type',
        'event_subtype' => 'event_subtype',
        'id' => 'id',
        'metric_period' => 'metric_period',
        'metric_value' => 'metric_value',
        'operator' => 'operator',
        'resource_ids' => 'resource_ids',
        'trait_id' => 'trait_id',
        'trait_value' => 'trait_value'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'comparison_trait_id' => 'setComparisonTraitId',
        'condition_type' => 'setConditionType',
        'event_subtype' => 'setEventSubtype',
        'id' => 'setId',
        'metric_period' => 'setMetricPeriod',
        'metric_value' => 'setMetricValue',
        'operator' => 'setOperator',
        'resource_ids' => 'setResourceIds',
        'trait_id' => 'setTraitId',
        'trait_value' => 'setTraitValue'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'comparison_trait_id' => 'getComparisonTraitId',
        'condition_type' => 'getConditionType',
        'event_subtype' => 'getEventSubtype',
        'id' => 'getId',
        'metric_period' => 'getMetricPeriod',
        'metric_value' => 'getMetricValue',
        'operator' => 'getOperator',
        'resource_ids' => 'getResourceIds',
        'trait_id' => 'getTraitId',
        'trait_value' => 'getTraitValue'
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

    public const CONDITION_TYPE_COMPANY = 'company';
    public const CONDITION_TYPE_METRIC = 'metric';
    public const CONDITION_TYPE__TRAIT = 'trait';
    public const CONDITION_TYPE_USER = 'user';
    public const CONDITION_TYPE_PLAN = 'plan';
    public const METRIC_PERIOD_MONTH = 'current_month';
    public const METRIC_PERIOD_WEEK = 'current_week';
    public const METRIC_PERIOD_DAY = 'current_day';
    public const OPERATOR_EQ = 'eq';
    public const OPERATOR_NE = 'ne';
    public const OPERATOR_GT = 'gt';
    public const OPERATOR_GTE = 'gte';
    public const OPERATOR_LT = 'lt';
    public const OPERATOR_LTE = 'lte';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getConditionTypeAllowableValues()
    {
        return [
            self::CONDITION_TYPE_COMPANY,
            self::CONDITION_TYPE_METRIC,
            self::CONDITION_TYPE__TRAIT,
            self::CONDITION_TYPE_USER,
            self::CONDITION_TYPE_PLAN,
        ];
    }

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getMetricPeriodAllowableValues()
    {
        return [
            self::METRIC_PERIOD_MONTH,
            self::METRIC_PERIOD_WEEK,
            self::METRIC_PERIOD_DAY,
        ];
    }

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getOperatorAllowableValues()
    {
        return [
            self::OPERATOR_EQ,
            self::OPERATOR_NE,
            self::OPERATOR_GT,
            self::OPERATOR_GTE,
            self::OPERATOR_LT,
            self::OPERATOR_LTE,
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
        $this->setIfExists('comparison_trait_id', $data ?? [], null);
        $this->setIfExists('condition_type', $data ?? [], null);
        $this->setIfExists('event_subtype', $data ?? [], null);
        $this->setIfExists('id', $data ?? [], null);
        $this->setIfExists('metric_period', $data ?? [], null);
        $this->setIfExists('metric_value', $data ?? [], null);
        $this->setIfExists('operator', $data ?? [], null);
        $this->setIfExists('resource_ids', $data ?? [], null);
        $this->setIfExists('trait_id', $data ?? [], null);
        $this->setIfExists('trait_value', $data ?? [], null);
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

        if ($this->container['condition_type'] === null) {
            $invalidProperties[] = "'condition_type' can't be null";
        }
        $allowedValues = $this->getConditionTypeAllowableValues();
        if (!is_null($this->container['condition_type']) && !in_array($this->container['condition_type'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'condition_type', must be one of '%s'",
                $this->container['condition_type'],
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getMetricPeriodAllowableValues();
        if (!is_null($this->container['metric_period']) && !in_array($this->container['metric_period'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'metric_period', must be one of '%s'",
                $this->container['metric_period'],
                implode("', '", $allowedValues)
            );
        }

        if ($this->container['metric_value'] === null) {
            $invalidProperties[] = "'metric_value' can't be null";
        }
        if ($this->container['operator'] === null) {
            $invalidProperties[] = "'operator' can't be null";
        }
        $allowedValues = $this->getOperatorAllowableValues();
        if (!is_null($this->container['operator']) && !in_array($this->container['operator'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'operator', must be one of '%s'",
                $this->container['operator'],
                implode("', '", $allowedValues)
            );
        }

        if ($this->container['resource_ids'] === null) {
            $invalidProperties[] = "'resource_ids' can't be null";
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
     * Gets comparison_trait_id
     *
     * @return string|null
     */
    public function getComparisonTraitId()
    {
        return $this->container['comparison_trait_id'];
    }

    /**
     * Sets comparison_trait_id
     *
     * @param string|null $comparison_trait_id Optionally provide a trait ID to compare a metric or trait value against instead of a value
     *
     * @return self
     */
    public function setComparisonTraitId($comparison_trait_id)
    {
        if (is_null($comparison_trait_id)) {
            array_push($this->openAPINullablesSetToNull, 'comparison_trait_id');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('comparison_trait_id', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['comparison_trait_id'] = $comparison_trait_id;

        return $this;
    }

    /**
     * Gets condition_type
     *
     * @return string
     */
    public function getConditionType()
    {
        return $this->container['condition_type'];
    }

    /**
     * Sets condition_type
     *
     * @param string $condition_type condition_type
     *
     * @return self
     */
    public function setConditionType($condition_type)
    {
        if (is_null($condition_type)) {
            throw new \InvalidArgumentException('non-nullable condition_type cannot be null');
        }
        $allowedValues = $this->getConditionTypeAllowableValues();
        if (!in_array($condition_type, $allowedValues, true)) {
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
     * @param string|null $event_subtype Name of track event type used to measure this condition
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
     * Gets id
     *
     * @return string|null
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     *
     * @param string|null $id id
     *
     * @return self
     */
    public function setId($id)
    {
        if (is_null($id)) {
            array_push($this->openAPINullablesSetToNull, 'id');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('id', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets metric_period
     *
     * @return string|null
     */
    public function getMetricPeriod()
    {
        return $this->container['metric_period'];
    }

    /**
     * Sets metric_period
     *
     * @param string|null $metric_period Period of time over which to measure the track event metric
     *
     * @return self
     */
    public function setMetricPeriod($metric_period)
    {
        if (is_null($metric_period)) {
            array_push($this->openAPINullablesSetToNull, 'metric_period');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('metric_period', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $allowedValues = $this->getMetricPeriodAllowableValues();
        if (!is_null($metric_period) && !in_array($metric_period, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'metric_period', must be one of '%s'",
                    $metric_period,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['metric_period'] = $metric_period;

        return $this;
    }

    /**
     * Gets metric_value
     *
     * @return int
     */
    public function getMetricValue()
    {
        return $this->container['metric_value'];
    }

    /**
     * Sets metric_value
     *
     * @param int $metric_value Value to compare the track event metric against
     *
     * @return self
     */
    public function setMetricValue($metric_value)
    {
        if (is_null($metric_value)) {
            throw new \InvalidArgumentException('non-nullable metric_value cannot be null');
        }
        $this->container['metric_value'] = $metric_value;

        return $this;
    }

    /**
     * Gets operator
     *
     * @return string
     */
    public function getOperator()
    {
        return $this->container['operator'];
    }

    /**
     * Sets operator
     *
     * @param string $operator operator
     *
     * @return self
     */
    public function setOperator($operator)
    {
        if (is_null($operator)) {
            throw new \InvalidArgumentException('non-nullable operator cannot be null');
        }
        $allowedValues = $this->getOperatorAllowableValues();
        if (!in_array($operator, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'operator', must be one of '%s'",
                    $operator,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['operator'] = $operator;

        return $this;
    }

    /**
     * Gets resource_ids
     *
     * @return string[]
     */
    public function getResourceIds()
    {
        return $this->container['resource_ids'];
    }

    /**
     * Sets resource_ids
     *
     * @param string[] $resource_ids List of resource IDs (companies, users, or plans) targeted by this condition
     *
     * @return self
     */
    public function setResourceIds($resource_ids)
    {
        if (is_null($resource_ids)) {
            throw new \InvalidArgumentException('non-nullable resource_ids cannot be null');
        }
        $this->container['resource_ids'] = $resource_ids;

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
     * @param string|null $trait_id ID of trait to use to measure this condition
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
     * Gets trait_value
     *
     * @return string|null
     */
    public function getTraitValue()
    {
        return $this->container['trait_value'];
    }

    /**
     * Sets trait_value
     *
     * @param string|null $trait_value Value to compare the trait value against
     *
     * @return self
     */
    public function setTraitValue($trait_value)
    {
        if (is_null($trait_value)) {
            array_push($this->openAPINullablesSetToNull, 'trait_value');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('trait_value', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['trait_value'] = $trait_value;

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


