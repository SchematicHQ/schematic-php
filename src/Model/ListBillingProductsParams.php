<?php
/**
 * ListBillingProductsParams
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
 * ListBillingProductsParams Class Doc Comment
 *
 * @category Class
 * @description Input parameters
 * @package  Schematic
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class ListBillingProductsParams implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'ListBillingProductsParams';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'ids' => 'string[]',
        'limit' => 'int',
        'name' => 'string',
        'offset' => 'int',
        'price_usage_type' => 'string',
        'q' => 'string',
        'with_prices_only' => 'bool',
        'with_zero_price' => 'bool',
        'without_linked_to_plan' => 'bool'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'ids' => null,
        'limit' => null,
        'name' => null,
        'offset' => null,
        'price_usage_type' => null,
        'q' => null,
        'with_prices_only' => null,
        'with_zero_price' => null,
        'without_linked_to_plan' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'ids' => false,
        'limit' => false,
        'name' => false,
        'offset' => false,
        'price_usage_type' => false,
        'q' => false,
        'with_prices_only' => false,
        'with_zero_price' => false,
        'without_linked_to_plan' => false
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
        'ids' => 'ids',
        'limit' => 'limit',
        'name' => 'name',
        'offset' => 'offset',
        'price_usage_type' => 'price_usage_type',
        'q' => 'q',
        'with_prices_only' => 'with_prices_only',
        'with_zero_price' => 'with_zero_price',
        'without_linked_to_plan' => 'without_linked_to_plan'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'ids' => 'setIds',
        'limit' => 'setLimit',
        'name' => 'setName',
        'offset' => 'setOffset',
        'price_usage_type' => 'setPriceUsageType',
        'q' => 'setQ',
        'with_prices_only' => 'setWithPricesOnly',
        'with_zero_price' => 'setWithZeroPrice',
        'without_linked_to_plan' => 'setWithoutLinkedToPlan'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'ids' => 'getIds',
        'limit' => 'getLimit',
        'name' => 'getName',
        'offset' => 'getOffset',
        'price_usage_type' => 'getPriceUsageType',
        'q' => 'getQ',
        'with_prices_only' => 'getWithPricesOnly',
        'with_zero_price' => 'getWithZeroPrice',
        'without_linked_to_plan' => 'getWithoutLinkedToPlan'
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

    public const PRICE_USAGE_TYPE_LICENSED = 'licensed';
    public const PRICE_USAGE_TYPE_METERED = 'metered';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getPriceUsageTypeAllowableValues()
    {
        return [
            self::PRICE_USAGE_TYPE_LICENSED,
            self::PRICE_USAGE_TYPE_METERED,
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
        $this->setIfExists('ids', $data ?? [], null);
        $this->setIfExists('limit', $data ?? [], null);
        $this->setIfExists('name', $data ?? [], null);
        $this->setIfExists('offset', $data ?? [], null);
        $this->setIfExists('price_usage_type', $data ?? [], null);
        $this->setIfExists('q', $data ?? [], null);
        $this->setIfExists('with_prices_only', $data ?? [], null);
        $this->setIfExists('with_zero_price', $data ?? [], null);
        $this->setIfExists('without_linked_to_plan', $data ?? [], null);
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

        $allowedValues = $this->getPriceUsageTypeAllowableValues();
        if (!is_null($this->container['price_usage_type']) && !in_array($this->container['price_usage_type'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'price_usage_type', must be one of '%s'",
                $this->container['price_usage_type'],
                implode("', '", $allowedValues)
            );
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
     * Gets ids
     *
     * @return string[]|null
     */
    public function getIds()
    {
        return $this->container['ids'];
    }

    /**
     * Sets ids
     *
     * @param string[]|null $ids ids
     *
     * @return self
     */
    public function setIds($ids)
    {
        if (is_null($ids)) {
            throw new \InvalidArgumentException('non-nullable ids cannot be null');
        }
        $this->container['ids'] = $ids;

        return $this;
    }

    /**
     * Gets limit
     *
     * @return int|null
     */
    public function getLimit()
    {
        return $this->container['limit'];
    }

    /**
     * Sets limit
     *
     * @param int|null $limit Page limit (default 100)
     *
     * @return self
     */
    public function setLimit($limit)
    {
        if (is_null($limit)) {
            throw new \InvalidArgumentException('non-nullable limit cannot be null');
        }
        $this->container['limit'] = $limit;

        return $this;
    }

    /**
     * Gets name
     *
     * @return string|null
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     *
     * @param string|null $name name
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
     * Gets offset
     *
     * @return int|null
     */
    public function getOffset()
    {
        return $this->container['offset'];
    }

    /**
     * Sets offset
     *
     * @param int|null $offset Page offset (default 0)
     *
     * @return self
     */
    public function setOffset($offset)
    {
        if (is_null($offset)) {
            throw new \InvalidArgumentException('non-nullable offset cannot be null');
        }
        $this->container['offset'] = $offset;

        return $this;
    }

    /**
     * Gets price_usage_type
     *
     * @return string|null
     */
    public function getPriceUsageType()
    {
        return $this->container['price_usage_type'];
    }

    /**
     * Sets price_usage_type
     *
     * @param string|null $price_usage_type price_usage_type
     *
     * @return self
     */
    public function setPriceUsageType($price_usage_type)
    {
        if (is_null($price_usage_type)) {
            throw new \InvalidArgumentException('non-nullable price_usage_type cannot be null');
        }
        $allowedValues = $this->getPriceUsageTypeAllowableValues();
        if (!in_array($price_usage_type, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'price_usage_type', must be one of '%s'",
                    $price_usage_type,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['price_usage_type'] = $price_usage_type;

        return $this;
    }

    /**
     * Gets q
     *
     * @return string|null
     */
    public function getQ()
    {
        return $this->container['q'];
    }

    /**
     * Sets q
     *
     * @param string|null $q q
     *
     * @return self
     */
    public function setQ($q)
    {
        if (is_null($q)) {
            throw new \InvalidArgumentException('non-nullable q cannot be null');
        }
        $this->container['q'] = $q;

        return $this;
    }

    /**
     * Gets with_prices_only
     *
     * @return bool|null
     */
    public function getWithPricesOnly()
    {
        return $this->container['with_prices_only'];
    }

    /**
     * Sets with_prices_only
     *
     * @param bool|null $with_prices_only Filter products that have prices
     *
     * @return self
     */
    public function setWithPricesOnly($with_prices_only)
    {
        if (is_null($with_prices_only)) {
            throw new \InvalidArgumentException('non-nullable with_prices_only cannot be null');
        }
        $this->container['with_prices_only'] = $with_prices_only;

        return $this;
    }

    /**
     * Gets with_zero_price
     *
     * @return bool|null
     */
    public function getWithZeroPrice()
    {
        return $this->container['with_zero_price'];
    }

    /**
     * Sets with_zero_price
     *
     * @param bool|null $with_zero_price Filter products that have zero price for free subscription type
     *
     * @return self
     */
    public function setWithZeroPrice($with_zero_price)
    {
        if (is_null($with_zero_price)) {
            throw new \InvalidArgumentException('non-nullable with_zero_price cannot be null');
        }
        $this->container['with_zero_price'] = $with_zero_price;

        return $this;
    }

    /**
     * Gets without_linked_to_plan
     *
     * @return bool|null
     */
    public function getWithoutLinkedToPlan()
    {
        return $this->container['without_linked_to_plan'];
    }

    /**
     * Sets without_linked_to_plan
     *
     * @param bool|null $without_linked_to_plan Filter products that are not linked to any plan
     *
     * @return self
     */
    public function setWithoutLinkedToPlan($without_linked_to_plan)
    {
        if (is_null($without_linked_to_plan)) {
            throw new \InvalidArgumentException('non-nullable without_linked_to_plan cannot be null');
        }
        $this->container['without_linked_to_plan'] = $without_linked_to_plan;

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


