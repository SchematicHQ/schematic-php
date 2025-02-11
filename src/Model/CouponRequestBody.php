<?php
/**
 * CouponRequestBody
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
 * CouponRequestBody Class Doc Comment
 *
 * @category Class
 * @package  Schematic
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class CouponRequestBody implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'CouponRequestBody';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'amount_off' => 'int',
        'currency' => 'string',
        'duration' => 'string',
        'duration_in_months' => 'int',
        'max_redemptions' => 'int',
        'name' => 'string',
        'percent_off' => 'float',
        'times_redeemed' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'amount_off' => null,
        'currency' => null,
        'duration' => null,
        'duration_in_months' => null,
        'max_redemptions' => null,
        'name' => null,
        'percent_off' => null,
        'times_redeemed' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'amount_off' => false,
        'currency' => true,
        'duration' => false,
        'duration_in_months' => false,
        'max_redemptions' => false,
        'name' => false,
        'percent_off' => false,
        'times_redeemed' => false
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
        'amount_off' => 'amount_off',
        'currency' => 'currency',
        'duration' => 'duration',
        'duration_in_months' => 'duration_in_months',
        'max_redemptions' => 'max_redemptions',
        'name' => 'name',
        'percent_off' => 'percent_off',
        'times_redeemed' => 'times_redeemed'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'amount_off' => 'setAmountOff',
        'currency' => 'setCurrency',
        'duration' => 'setDuration',
        'duration_in_months' => 'setDurationInMonths',
        'max_redemptions' => 'setMaxRedemptions',
        'name' => 'setName',
        'percent_off' => 'setPercentOff',
        'times_redeemed' => 'setTimesRedeemed'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'amount_off' => 'getAmountOff',
        'currency' => 'getCurrency',
        'duration' => 'getDuration',
        'duration_in_months' => 'getDurationInMonths',
        'max_redemptions' => 'getMaxRedemptions',
        'name' => 'getName',
        'percent_off' => 'getPercentOff',
        'times_redeemed' => 'getTimesRedeemed'
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
        $this->setIfExists('amount_off', $data ?? [], null);
        $this->setIfExists('currency', $data ?? [], null);
        $this->setIfExists('duration', $data ?? [], null);
        $this->setIfExists('duration_in_months', $data ?? [], null);
        $this->setIfExists('max_redemptions', $data ?? [], null);
        $this->setIfExists('name', $data ?? [], null);
        $this->setIfExists('percent_off', $data ?? [], null);
        $this->setIfExists('times_redeemed', $data ?? [], null);
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

        if ($this->container['amount_off'] === null) {
            $invalidProperties[] = "'amount_off' can't be null";
        }
        if ($this->container['duration'] === null) {
            $invalidProperties[] = "'duration' can't be null";
        }
        if ($this->container['duration_in_months'] === null) {
            $invalidProperties[] = "'duration_in_months' can't be null";
        }
        if ($this->container['max_redemptions'] === null) {
            $invalidProperties[] = "'max_redemptions' can't be null";
        }
        if ($this->container['name'] === null) {
            $invalidProperties[] = "'name' can't be null";
        }
        if ($this->container['percent_off'] === null) {
            $invalidProperties[] = "'percent_off' can't be null";
        }
        if ($this->container['times_redeemed'] === null) {
            $invalidProperties[] = "'times_redeemed' can't be null";
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
     * Gets amount_off
     *
     * @return int
     */
    public function getAmountOff()
    {
        return $this->container['amount_off'];
    }

    /**
     * Sets amount_off
     *
     * @param int $amount_off amount_off
     *
     * @return self
     */
    public function setAmountOff($amount_off)
    {
        if (is_null($amount_off)) {
            throw new \InvalidArgumentException('non-nullable amount_off cannot be null');
        }
        $this->container['amount_off'] = $amount_off;

        return $this;
    }

    /**
     * Gets currency
     *
     * @return string|null
     */
    public function getCurrency()
    {
        return $this->container['currency'];
    }

    /**
     * Sets currency
     *
     * @param string|null $currency currency
     *
     * @return self
     */
    public function setCurrency($currency)
    {
        if (is_null($currency)) {
            array_push($this->openAPINullablesSetToNull, 'currency');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('currency', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['currency'] = $currency;

        return $this;
    }

    /**
     * Gets duration
     *
     * @return string
     */
    public function getDuration()
    {
        return $this->container['duration'];
    }

    /**
     * Sets duration
     *
     * @param string $duration duration
     *
     * @return self
     */
    public function setDuration($duration)
    {
        if (is_null($duration)) {
            throw new \InvalidArgumentException('non-nullable duration cannot be null');
        }
        $this->container['duration'] = $duration;

        return $this;
    }

    /**
     * Gets duration_in_months
     *
     * @return int
     */
    public function getDurationInMonths()
    {
        return $this->container['duration_in_months'];
    }

    /**
     * Sets duration_in_months
     *
     * @param int $duration_in_months duration_in_months
     *
     * @return self
     */
    public function setDurationInMonths($duration_in_months)
    {
        if (is_null($duration_in_months)) {
            throw new \InvalidArgumentException('non-nullable duration_in_months cannot be null');
        }
        $this->container['duration_in_months'] = $duration_in_months;

        return $this;
    }

    /**
     * Gets max_redemptions
     *
     * @return int
     */
    public function getMaxRedemptions()
    {
        return $this->container['max_redemptions'];
    }

    /**
     * Sets max_redemptions
     *
     * @param int $max_redemptions max_redemptions
     *
     * @return self
     */
    public function setMaxRedemptions($max_redemptions)
    {
        if (is_null($max_redemptions)) {
            throw new \InvalidArgumentException('non-nullable max_redemptions cannot be null');
        }
        $this->container['max_redemptions'] = $max_redemptions;

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
     * Gets percent_off
     *
     * @return float
     */
    public function getPercentOff()
    {
        return $this->container['percent_off'];
    }

    /**
     * Sets percent_off
     *
     * @param float $percent_off percent_off
     *
     * @return self
     */
    public function setPercentOff($percent_off)
    {
        if (is_null($percent_off)) {
            throw new \InvalidArgumentException('non-nullable percent_off cannot be null');
        }
        $this->container['percent_off'] = $percent_off;

        return $this;
    }

    /**
     * Gets times_redeemed
     *
     * @return int
     */
    public function getTimesRedeemed()
    {
        return $this->container['times_redeemed'];
    }

    /**
     * Sets times_redeemed
     *
     * @param int $times_redeemed times_redeemed
     *
     * @return self
     */
    public function setTimesRedeemed($times_redeemed)
    {
        if (is_null($times_redeemed)) {
            throw new \InvalidArgumentException('non-nullable times_redeemed cannot be null');
        }
        $this->container['times_redeemed'] = $times_redeemed;

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


