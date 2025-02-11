<?php
/**
 * FeatureUsageResponseData
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
 * FeatureUsageResponseData Class Doc Comment
 *
 * @category Class
 * @package  Schematic
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class FeatureUsageResponseData implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'FeatureUsageResponseData';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'access' => 'bool',
        'allocation' => 'int',
        'allocation_type' => 'string',
        'entitlement_expiration_date' => '\DateTime',
        'entitlement_id' => 'string',
        'entitlement_type' => 'string',
        'feature' => '\Schematic\Model\FeatureDetailResponseData',
        'metric_reset_at' => '\DateTime',
        'month_reset' => 'string',
        'monthly_usage_based_price' => '\Schematic\Model\BillingPriceView',
        'period' => 'string',
        'plan' => '\Schematic\Model\PlanResponseData',
        'price_behavior' => 'string',
        'usage' => 'int',
        'yearly_usage_based_price' => '\Schematic\Model\BillingPriceView'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'access' => null,
        'allocation' => null,
        'allocation_type' => null,
        'entitlement_expiration_date' => 'date-time',
        'entitlement_id' => null,
        'entitlement_type' => null,
        'feature' => null,
        'metric_reset_at' => 'date-time',
        'month_reset' => null,
        'monthly_usage_based_price' => null,
        'period' => null,
        'plan' => null,
        'price_behavior' => null,
        'usage' => null,
        'yearly_usage_based_price' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'access' => false,
        'allocation' => true,
        'allocation_type' => false,
        'entitlement_expiration_date' => true,
        'entitlement_id' => false,
        'entitlement_type' => false,
        'feature' => false,
        'metric_reset_at' => true,
        'month_reset' => true,
        'monthly_usage_based_price' => false,
        'period' => true,
        'plan' => false,
        'price_behavior' => true,
        'usage' => true,
        'yearly_usage_based_price' => false
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
        'access' => 'access',
        'allocation' => 'allocation',
        'allocation_type' => 'allocation_type',
        'entitlement_expiration_date' => 'entitlement_expiration_date',
        'entitlement_id' => 'entitlement_id',
        'entitlement_type' => 'entitlement_type',
        'feature' => 'feature',
        'metric_reset_at' => 'metric_reset_at',
        'month_reset' => 'month_reset',
        'monthly_usage_based_price' => 'monthly_usage_based_price',
        'period' => 'period',
        'plan' => 'plan',
        'price_behavior' => 'price_behavior',
        'usage' => 'usage',
        'yearly_usage_based_price' => 'yearly_usage_based_price'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'access' => 'setAccess',
        'allocation' => 'setAllocation',
        'allocation_type' => 'setAllocationType',
        'entitlement_expiration_date' => 'setEntitlementExpirationDate',
        'entitlement_id' => 'setEntitlementId',
        'entitlement_type' => 'setEntitlementType',
        'feature' => 'setFeature',
        'metric_reset_at' => 'setMetricResetAt',
        'month_reset' => 'setMonthReset',
        'monthly_usage_based_price' => 'setMonthlyUsageBasedPrice',
        'period' => 'setPeriod',
        'plan' => 'setPlan',
        'price_behavior' => 'setPriceBehavior',
        'usage' => 'setUsage',
        'yearly_usage_based_price' => 'setYearlyUsageBasedPrice'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'access' => 'getAccess',
        'allocation' => 'getAllocation',
        'allocation_type' => 'getAllocationType',
        'entitlement_expiration_date' => 'getEntitlementExpirationDate',
        'entitlement_id' => 'getEntitlementId',
        'entitlement_type' => 'getEntitlementType',
        'feature' => 'getFeature',
        'metric_reset_at' => 'getMetricResetAt',
        'month_reset' => 'getMonthReset',
        'monthly_usage_based_price' => 'getMonthlyUsageBasedPrice',
        'period' => 'getPeriod',
        'plan' => 'getPlan',
        'price_behavior' => 'getPriceBehavior',
        'usage' => 'getUsage',
        'yearly_usage_based_price' => 'getYearlyUsageBasedPrice'
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

    public const ALLOCATION_TYPE_BOOLEAN = 'boolean';
    public const ALLOCATION_TYPE_NUMERIC = 'numeric';
    public const ALLOCATION_TYPE__TRAIT = 'trait';
    public const ALLOCATION_TYPE_UNLIMITED = 'unlimited';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getAllocationTypeAllowableValues()
    {
        return [
            self::ALLOCATION_TYPE_BOOLEAN,
            self::ALLOCATION_TYPE_NUMERIC,
            self::ALLOCATION_TYPE__TRAIT,
            self::ALLOCATION_TYPE_UNLIMITED,
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
        $this->setIfExists('access', $data ?? [], null);
        $this->setIfExists('allocation', $data ?? [], null);
        $this->setIfExists('allocation_type', $data ?? [], null);
        $this->setIfExists('entitlement_expiration_date', $data ?? [], null);
        $this->setIfExists('entitlement_id', $data ?? [], null);
        $this->setIfExists('entitlement_type', $data ?? [], null);
        $this->setIfExists('feature', $data ?? [], null);
        $this->setIfExists('metric_reset_at', $data ?? [], null);
        $this->setIfExists('month_reset', $data ?? [], null);
        $this->setIfExists('monthly_usage_based_price', $data ?? [], null);
        $this->setIfExists('period', $data ?? [], null);
        $this->setIfExists('plan', $data ?? [], null);
        $this->setIfExists('price_behavior', $data ?? [], null);
        $this->setIfExists('usage', $data ?? [], null);
        $this->setIfExists('yearly_usage_based_price', $data ?? [], null);
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

        if ($this->container['access'] === null) {
            $invalidProperties[] = "'access' can't be null";
        }
        if ($this->container['allocation_type'] === null) {
            $invalidProperties[] = "'allocation_type' can't be null";
        }
        $allowedValues = $this->getAllocationTypeAllowableValues();
        if (!is_null($this->container['allocation_type']) && !in_array($this->container['allocation_type'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'allocation_type', must be one of '%s'",
                $this->container['allocation_type'],
                implode("', '", $allowedValues)
            );
        }

        if ($this->container['entitlement_id'] === null) {
            $invalidProperties[] = "'entitlement_id' can't be null";
        }
        if ($this->container['entitlement_type'] === null) {
            $invalidProperties[] = "'entitlement_type' can't be null";
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
     * Gets access
     *
     * @return bool
     */
    public function getAccess()
    {
        return $this->container['access'];
    }

    /**
     * Sets access
     *
     * @param bool $access Whether further usage is permitted.
     *
     * @return self
     */
    public function setAccess($access)
    {
        if (is_null($access)) {
            throw new \InvalidArgumentException('non-nullable access cannot be null');
        }
        $this->container['access'] = $access;

        return $this;
    }

    /**
     * Gets allocation
     *
     * @return int|null
     */
    public function getAllocation()
    {
        return $this->container['allocation'];
    }

    /**
     * Sets allocation
     *
     * @param int|null $allocation The maximum amount of usage that is permitted; a null value indicates that unlimited usage is permitted.
     *
     * @return self
     */
    public function setAllocation($allocation)
    {
        if (is_null($allocation)) {
            array_push($this->openAPINullablesSetToNull, 'allocation');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('allocation', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['allocation'] = $allocation;

        return $this;
    }

    /**
     * Gets allocation_type
     *
     * @return string
     */
    public function getAllocationType()
    {
        return $this->container['allocation_type'];
    }

    /**
     * Sets allocation_type
     *
     * @param string $allocation_type The type of allocation that is being used.
     *
     * @return self
     */
    public function setAllocationType($allocation_type)
    {
        if (is_null($allocation_type)) {
            throw new \InvalidArgumentException('non-nullable allocation_type cannot be null');
        }
        $allowedValues = $this->getAllocationTypeAllowableValues();
        if (!in_array($allocation_type, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'allocation_type', must be one of '%s'",
                    $allocation_type,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['allocation_type'] = $allocation_type;

        return $this;
    }

    /**
     * Gets entitlement_expiration_date
     *
     * @return \DateTime|null
     */
    public function getEntitlementExpirationDate()
    {
        return $this->container['entitlement_expiration_date'];
    }

    /**
     * Sets entitlement_expiration_date
     *
     * @param \DateTime|null $entitlement_expiration_date entitlement_expiration_date
     *
     * @return self
     */
    public function setEntitlementExpirationDate($entitlement_expiration_date)
    {
        if (is_null($entitlement_expiration_date)) {
            array_push($this->openAPINullablesSetToNull, 'entitlement_expiration_date');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('entitlement_expiration_date', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['entitlement_expiration_date'] = $entitlement_expiration_date;

        return $this;
    }

    /**
     * Gets entitlement_id
     *
     * @return string
     */
    public function getEntitlementId()
    {
        return $this->container['entitlement_id'];
    }

    /**
     * Sets entitlement_id
     *
     * @param string $entitlement_id entitlement_id
     *
     * @return self
     */
    public function setEntitlementId($entitlement_id)
    {
        if (is_null($entitlement_id)) {
            throw new \InvalidArgumentException('non-nullable entitlement_id cannot be null');
        }
        $this->container['entitlement_id'] = $entitlement_id;

        return $this;
    }

    /**
     * Gets entitlement_type
     *
     * @return string
     */
    public function getEntitlementType()
    {
        return $this->container['entitlement_type'];
    }

    /**
     * Sets entitlement_type
     *
     * @param string $entitlement_type entitlement_type
     *
     * @return self
     */
    public function setEntitlementType($entitlement_type)
    {
        if (is_null($entitlement_type)) {
            throw new \InvalidArgumentException('non-nullable entitlement_type cannot be null');
        }
        $this->container['entitlement_type'] = $entitlement_type;

        return $this;
    }

    /**
     * Gets feature
     *
     * @return \Schematic\Model\FeatureDetailResponseData|null
     */
    public function getFeature()
    {
        return $this->container['feature'];
    }

    /**
     * Sets feature
     *
     * @param \Schematic\Model\FeatureDetailResponseData|null $feature feature
     *
     * @return self
     */
    public function setFeature($feature)
    {
        if (is_null($feature)) {
            throw new \InvalidArgumentException('non-nullable feature cannot be null');
        }
        $this->container['feature'] = $feature;

        return $this;
    }

    /**
     * Gets metric_reset_at
     *
     * @return \DateTime|null
     */
    public function getMetricResetAt()
    {
        return $this->container['metric_reset_at'];
    }

    /**
     * Sets metric_reset_at
     *
     * @param \DateTime|null $metric_reset_at The time at which the metric will reset.
     *
     * @return self
     */
    public function setMetricResetAt($metric_reset_at)
    {
        if (is_null($metric_reset_at)) {
            array_push($this->openAPINullablesSetToNull, 'metric_reset_at');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('metric_reset_at', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['metric_reset_at'] = $metric_reset_at;

        return $this;
    }

    /**
     * Gets month_reset
     *
     * @return string|null
     */
    public function getMonthReset()
    {
        return $this->container['month_reset'];
    }

    /**
     * Sets month_reset
     *
     * @param string|null $month_reset If the period is current_month, when the month resets.
     *
     * @return self
     */
    public function setMonthReset($month_reset)
    {
        if (is_null($month_reset)) {
            array_push($this->openAPINullablesSetToNull, 'month_reset');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('month_reset', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['month_reset'] = $month_reset;

        return $this;
    }

    /**
     * Gets monthly_usage_based_price
     *
     * @return \Schematic\Model\BillingPriceView|null
     */
    public function getMonthlyUsageBasedPrice()
    {
        return $this->container['monthly_usage_based_price'];
    }

    /**
     * Sets monthly_usage_based_price
     *
     * @param \Schematic\Model\BillingPriceView|null $monthly_usage_based_price monthly_usage_based_price
     *
     * @return self
     */
    public function setMonthlyUsageBasedPrice($monthly_usage_based_price)
    {
        if (is_null($monthly_usage_based_price)) {
            throw new \InvalidArgumentException('non-nullable monthly_usage_based_price cannot be null');
        }
        $this->container['monthly_usage_based_price'] = $monthly_usage_based_price;

        return $this;
    }

    /**
     * Gets period
     *
     * @return string|null
     */
    public function getPeriod()
    {
        return $this->container['period'];
    }

    /**
     * Sets period
     *
     * @param string|null $period The period over which usage is measured.
     *
     * @return self
     */
    public function setPeriod($period)
    {
        if (is_null($period)) {
            array_push($this->openAPINullablesSetToNull, 'period');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('period', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['period'] = $period;

        return $this;
    }

    /**
     * Gets plan
     *
     * @return \Schematic\Model\PlanResponseData|null
     */
    public function getPlan()
    {
        return $this->container['plan'];
    }

    /**
     * Sets plan
     *
     * @param \Schematic\Model\PlanResponseData|null $plan plan
     *
     * @return self
     */
    public function setPlan($plan)
    {
        if (is_null($plan)) {
            throw new \InvalidArgumentException('non-nullable plan cannot be null');
        }
        $this->container['plan'] = $plan;

        return $this;
    }

    /**
     * Gets price_behavior
     *
     * @return string|null
     */
    public function getPriceBehavior()
    {
        return $this->container['price_behavior'];
    }

    /**
     * Sets price_behavior
     *
     * @param string|null $price_behavior price_behavior
     *
     * @return self
     */
    public function setPriceBehavior($price_behavior)
    {
        if (is_null($price_behavior)) {
            array_push($this->openAPINullablesSetToNull, 'price_behavior');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('price_behavior', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['price_behavior'] = $price_behavior;

        return $this;
    }

    /**
     * Gets usage
     *
     * @return int|null
     */
    public function getUsage()
    {
        return $this->container['usage'];
    }

    /**
     * Sets usage
     *
     * @param int|null $usage The amount of usage that has been consumed; a null value indicates that usage is not being measured.
     *
     * @return self
     */
    public function setUsage($usage)
    {
        if (is_null($usage)) {
            array_push($this->openAPINullablesSetToNull, 'usage');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('usage', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['usage'] = $usage;

        return $this;
    }

    /**
     * Gets yearly_usage_based_price
     *
     * @return \Schematic\Model\BillingPriceView|null
     */
    public function getYearlyUsageBasedPrice()
    {
        return $this->container['yearly_usage_based_price'];
    }

    /**
     * Sets yearly_usage_based_price
     *
     * @param \Schematic\Model\BillingPriceView|null $yearly_usage_based_price yearly_usage_based_price
     *
     * @return self
     */
    public function setYearlyUsageBasedPrice($yearly_usage_based_price)
    {
        if (is_null($yearly_usage_based_price)) {
            throw new \InvalidArgumentException('non-nullable yearly_usage_based_price cannot be null');
        }
        $this->container['yearly_usage_based_price'] = $yearly_usage_based_price;

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


