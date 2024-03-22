<?php
/**
 * RuleConditionResponseData
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
 * RuleConditionResponseData Class Doc Comment
 *
 * @category Class
 * @package  Schematic
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class RuleConditionResponseData implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'RuleConditionResponseData';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'comparison_trait_id' => 'string',
        'condition_group_id' => 'string',
        'condition_type' => 'string',
        'created_at' => '\DateTime',
        'environment_id' => 'string',
        'event_subtype' => 'string',
        'flag_id' => 'string',
        'id' => 'string',
        'metric_period' => 'string',
        'metric_value' => 'int',
        'operator' => 'string',
        'plan_id' => 'string',
        'resource_ids' => 'string[]',
        'rule_id' => 'string',
        'trait_entity_type' => 'string',
        'trait_id' => 'string',
        'trait_value' => 'string',
        'updated_at' => '\DateTime'
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
        'condition_group_id' => null,
        'condition_type' => null,
        'created_at' => 'date-time',
        'environment_id' => null,
        'event_subtype' => null,
        'flag_id' => null,
        'id' => null,
        'metric_period' => null,
        'metric_value' => null,
        'operator' => null,
        'plan_id' => null,
        'resource_ids' => null,
        'rule_id' => null,
        'trait_entity_type' => null,
        'trait_id' => null,
        'trait_value' => null,
        'updated_at' => 'date-time'
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'comparison_trait_id' => true,
        'condition_group_id' => true,
        'condition_type' => false,
        'created_at' => false,
        'environment_id' => false,
        'event_subtype' => true,
        'flag_id' => true,
        'id' => false,
        'metric_period' => true,
        'metric_value' => false,
        'operator' => false,
        'plan_id' => true,
        'resource_ids' => false,
        'rule_id' => false,
        'trait_entity_type' => true,
        'trait_id' => true,
        'trait_value' => false,
        'updated_at' => false
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
        'condition_group_id' => 'condition_group_id',
        'condition_type' => 'condition_type',
        'created_at' => 'created_at',
        'environment_id' => 'environment_id',
        'event_subtype' => 'event_subtype',
        'flag_id' => 'flag_id',
        'id' => 'id',
        'metric_period' => 'metric_period',
        'metric_value' => 'metric_value',
        'operator' => 'operator',
        'plan_id' => 'plan_id',
        'resource_ids' => 'resource_ids',
        'rule_id' => 'rule_id',
        'trait_entity_type' => 'trait_entity_type',
        'trait_id' => 'trait_id',
        'trait_value' => 'trait_value',
        'updated_at' => 'updated_at'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'comparison_trait_id' => 'setComparisonTraitId',
        'condition_group_id' => 'setConditionGroupId',
        'condition_type' => 'setConditionType',
        'created_at' => 'setCreatedAt',
        'environment_id' => 'setEnvironmentId',
        'event_subtype' => 'setEventSubtype',
        'flag_id' => 'setFlagId',
        'id' => 'setId',
        'metric_period' => 'setMetricPeriod',
        'metric_value' => 'setMetricValue',
        'operator' => 'setOperator',
        'plan_id' => 'setPlanId',
        'resource_ids' => 'setResourceIds',
        'rule_id' => 'setRuleId',
        'trait_entity_type' => 'setTraitEntityType',
        'trait_id' => 'setTraitId',
        'trait_value' => 'setTraitValue',
        'updated_at' => 'setUpdatedAt'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'comparison_trait_id' => 'getComparisonTraitId',
        'condition_group_id' => 'getConditionGroupId',
        'condition_type' => 'getConditionType',
        'created_at' => 'getCreatedAt',
        'environment_id' => 'getEnvironmentId',
        'event_subtype' => 'getEventSubtype',
        'flag_id' => 'getFlagId',
        'id' => 'getId',
        'metric_period' => 'getMetricPeriod',
        'metric_value' => 'getMetricValue',
        'operator' => 'getOperator',
        'plan_id' => 'getPlanId',
        'resource_ids' => 'getResourceIds',
        'rule_id' => 'getRuleId',
        'trait_entity_type' => 'getTraitEntityType',
        'trait_id' => 'getTraitId',
        'trait_value' => 'getTraitValue',
        'updated_at' => 'getUpdatedAt'
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
        $this->setIfExists('comparison_trait_id', $data ?? [], null);
        $this->setIfExists('condition_group_id', $data ?? [], null);
        $this->setIfExists('condition_type', $data ?? [], null);
        $this->setIfExists('created_at', $data ?? [], null);
        $this->setIfExists('environment_id', $data ?? [], null);
        $this->setIfExists('event_subtype', $data ?? [], null);
        $this->setIfExists('flag_id', $data ?? [], null);
        $this->setIfExists('id', $data ?? [], null);
        $this->setIfExists('metric_period', $data ?? [], null);
        $this->setIfExists('metric_value', $data ?? [], null);
        $this->setIfExists('operator', $data ?? [], null);
        $this->setIfExists('plan_id', $data ?? [], null);
        $this->setIfExists('resource_ids', $data ?? [], null);
        $this->setIfExists('rule_id', $data ?? [], null);
        $this->setIfExists('trait_entity_type', $data ?? [], null);
        $this->setIfExists('trait_id', $data ?? [], null);
        $this->setIfExists('trait_value', $data ?? [], null);
        $this->setIfExists('updated_at', $data ?? [], null);
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
        if ($this->container['created_at'] === null) {
            $invalidProperties[] = "'created_at' can't be null";
        }
        if ($this->container['environment_id'] === null) {
            $invalidProperties[] = "'environment_id' can't be null";
        }
        if ($this->container['id'] === null) {
            $invalidProperties[] = "'id' can't be null";
        }
        if ($this->container['metric_value'] === null) {
            $invalidProperties[] = "'metric_value' can't be null";
        }
        if ($this->container['operator'] === null) {
            $invalidProperties[] = "'operator' can't be null";
        }
        if ($this->container['resource_ids'] === null) {
            $invalidProperties[] = "'resource_ids' can't be null";
        }
        if ($this->container['rule_id'] === null) {
            $invalidProperties[] = "'rule_id' can't be null";
        }
        if ($this->container['trait_value'] === null) {
            $invalidProperties[] = "'trait_value' can't be null";
        }
        if ($this->container['updated_at'] === null) {
            $invalidProperties[] = "'updated_at' can't be null";
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
     * @param string|null $comparison_trait_id comparison_trait_id
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
     * Gets condition_group_id
     *
     * @return string|null
     */
    public function getConditionGroupId()
    {
        return $this->container['condition_group_id'];
    }

    /**
     * Sets condition_group_id
     *
     * @param string|null $condition_group_id condition_group_id
     *
     * @return self
     */
    public function setConditionGroupId($condition_group_id)
    {
        if (is_null($condition_group_id)) {
            array_push($this->openAPINullablesSetToNull, 'condition_group_id');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('condition_group_id', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['condition_group_id'] = $condition_group_id;

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
        $this->container['condition_type'] = $condition_type;

        return $this;
    }

    /**
     * Gets created_at
     *
     * @return \DateTime
     */
    public function getCreatedAt()
    {
        return $this->container['created_at'];
    }

    /**
     * Sets created_at
     *
     * @param \DateTime $created_at created_at
     *
     * @return self
     */
    public function setCreatedAt($created_at)
    {
        if (is_null($created_at)) {
            throw new \InvalidArgumentException('non-nullable created_at cannot be null');
        }
        $this->container['created_at'] = $created_at;

        return $this;
    }

    /**
     * Gets environment_id
     *
     * @return string
     */
    public function getEnvironmentId()
    {
        return $this->container['environment_id'];
    }

    /**
     * Sets environment_id
     *
     * @param string $environment_id environment_id
     *
     * @return self
     */
    public function setEnvironmentId($environment_id)
    {
        if (is_null($environment_id)) {
            throw new \InvalidArgumentException('non-nullable environment_id cannot be null');
        }
        $this->container['environment_id'] = $environment_id;

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
     * Gets flag_id
     *
     * @return string|null
     */
    public function getFlagId()
    {
        return $this->container['flag_id'];
    }

    /**
     * Sets flag_id
     *
     * @param string|null $flag_id flag_id
     *
     * @return self
     */
    public function setFlagId($flag_id)
    {
        if (is_null($flag_id)) {
            array_push($this->openAPINullablesSetToNull, 'flag_id');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('flag_id', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['flag_id'] = $flag_id;

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
     * @param string|null $metric_period metric_period
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
     * @param int $metric_value metric_value
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
        $this->container['operator'] = $operator;

        return $this;
    }

    /**
     * Gets plan_id
     *
     * @return string|null
     */
    public function getPlanId()
    {
        return $this->container['plan_id'];
    }

    /**
     * Sets plan_id
     *
     * @param string|null $plan_id plan_id
     *
     * @return self
     */
    public function setPlanId($plan_id)
    {
        if (is_null($plan_id)) {
            array_push($this->openAPINullablesSetToNull, 'plan_id');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('plan_id', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['plan_id'] = $plan_id;

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
     * @param string[] $resource_ids resource_ids
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
     * Gets rule_id
     *
     * @return string
     */
    public function getRuleId()
    {
        return $this->container['rule_id'];
    }

    /**
     * Sets rule_id
     *
     * @param string $rule_id rule_id
     *
     * @return self
     */
    public function setRuleId($rule_id)
    {
        if (is_null($rule_id)) {
            throw new \InvalidArgumentException('non-nullable rule_id cannot be null');
        }
        $this->container['rule_id'] = $rule_id;

        return $this;
    }

    /**
     * Gets trait_entity_type
     *
     * @return string|null
     */
    public function getTraitEntityType()
    {
        return $this->container['trait_entity_type'];
    }

    /**
     * Sets trait_entity_type
     *
     * @param string|null $trait_entity_type trait_entity_type
     *
     * @return self
     */
    public function setTraitEntityType($trait_entity_type)
    {
        if (is_null($trait_entity_type)) {
            array_push($this->openAPINullablesSetToNull, 'trait_entity_type');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('trait_entity_type', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['trait_entity_type'] = $trait_entity_type;

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
     * Gets trait_value
     *
     * @return string
     */
    public function getTraitValue()
    {
        return $this->container['trait_value'];
    }

    /**
     * Sets trait_value
     *
     * @param string $trait_value trait_value
     *
     * @return self
     */
    public function setTraitValue($trait_value)
    {
        if (is_null($trait_value)) {
            throw new \InvalidArgumentException('non-nullable trait_value cannot be null');
        }
        $this->container['trait_value'] = $trait_value;

        return $this;
    }

    /**
     * Gets updated_at
     *
     * @return \DateTime
     */
    public function getUpdatedAt()
    {
        return $this->container['updated_at'];
    }

    /**
     * Sets updated_at
     *
     * @param \DateTime $updated_at updated_at
     *
     * @return self
     */
    public function setUpdatedAt($updated_at)
    {
        if (is_null($updated_at)) {
            throw new \InvalidArgumentException('non-nullable updated_at cannot be null');
        }
        $this->container['updated_at'] = $updated_at;

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


