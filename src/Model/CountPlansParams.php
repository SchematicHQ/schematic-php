<?php
/**
 * CountPlansParams
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
 * CountPlansParams Class Doc Comment
 *
 * @category Class
 * @description Input parameters
 * @package  Schematic
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class CountPlansParams implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'CountPlansParams';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'company_id' => 'string',
        'has_product_id' => 'bool',
        'ids' => 'string[]',
        'limit' => 'int',
        'offset' => 'int',
        'plan_type' => 'string',
        'q' => 'string',
        'without_entitlement_for' => 'string',
        'without_paid_product_id' => 'bool',
        'without_product_id' => 'bool'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'company_id' => null,
        'has_product_id' => null,
        'ids' => null,
        'limit' => null,
        'offset' => null,
        'plan_type' => null,
        'q' => null,
        'without_entitlement_for' => null,
        'without_paid_product_id' => null,
        'without_product_id' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'company_id' => false,
        'has_product_id' => false,
        'ids' => false,
        'limit' => false,
        'offset' => false,
        'plan_type' => false,
        'q' => false,
        'without_entitlement_for' => false,
        'without_paid_product_id' => false,
        'without_product_id' => false
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
        'company_id' => 'company_id',
        'has_product_id' => 'has_product_id',
        'ids' => 'ids',
        'limit' => 'limit',
        'offset' => 'offset',
        'plan_type' => 'plan_type',
        'q' => 'q',
        'without_entitlement_for' => 'without_entitlement_for',
        'without_paid_product_id' => 'without_paid_product_id',
        'without_product_id' => 'without_product_id'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'company_id' => 'setCompanyId',
        'has_product_id' => 'setHasProductId',
        'ids' => 'setIds',
        'limit' => 'setLimit',
        'offset' => 'setOffset',
        'plan_type' => 'setPlanType',
        'q' => 'setQ',
        'without_entitlement_for' => 'setWithoutEntitlementFor',
        'without_paid_product_id' => 'setWithoutPaidProductId',
        'without_product_id' => 'setWithoutProductId'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'company_id' => 'getCompanyId',
        'has_product_id' => 'getHasProductId',
        'ids' => 'getIds',
        'limit' => 'getLimit',
        'offset' => 'getOffset',
        'plan_type' => 'getPlanType',
        'q' => 'getQ',
        'without_entitlement_for' => 'getWithoutEntitlementFor',
        'without_paid_product_id' => 'getWithoutPaidProductId',
        'without_product_id' => 'getWithoutProductId'
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

    public const PLAN_TYPE_PLAN = 'plan';
    public const PLAN_TYPE_ADD_ON = 'add_on';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getPlanTypeAllowableValues()
    {
        return [
            self::PLAN_TYPE_PLAN,
            self::PLAN_TYPE_ADD_ON,
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
        $this->setIfExists('company_id', $data ?? [], null);
        $this->setIfExists('has_product_id', $data ?? [], null);
        $this->setIfExists('ids', $data ?? [], null);
        $this->setIfExists('limit', $data ?? [], null);
        $this->setIfExists('offset', $data ?? [], null);
        $this->setIfExists('plan_type', $data ?? [], null);
        $this->setIfExists('q', $data ?? [], null);
        $this->setIfExists('without_entitlement_for', $data ?? [], null);
        $this->setIfExists('without_paid_product_id', $data ?? [], null);
        $this->setIfExists('without_product_id', $data ?? [], null);
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

        $allowedValues = $this->getPlanTypeAllowableValues();
        if (!is_null($this->container['plan_type']) && !in_array($this->container['plan_type'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'plan_type', must be one of '%s'",
                $this->container['plan_type'],
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
     * Gets company_id
     *
     * @return string|null
     */
    public function getCompanyId()
    {
        return $this->container['company_id'];
    }

    /**
     * Sets company_id
     *
     * @param string|null $company_id company_id
     *
     * @return self
     */
    public function setCompanyId($company_id)
    {
        if (is_null($company_id)) {
            throw new \InvalidArgumentException('non-nullable company_id cannot be null');
        }
        $this->container['company_id'] = $company_id;

        return $this;
    }

    /**
     * Gets has_product_id
     *
     * @return bool|null
     */
    public function getHasProductId()
    {
        return $this->container['has_product_id'];
    }

    /**
     * Sets has_product_id
     *
     * @param bool|null $has_product_id Filter out plans that do not have a billing product ID
     *
     * @return self
     */
    public function setHasProductId($has_product_id)
    {
        if (is_null($has_product_id)) {
            throw new \InvalidArgumentException('non-nullable has_product_id cannot be null');
        }
        $this->container['has_product_id'] = $has_product_id;

        return $this;
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
     * Gets plan_type
     *
     * @return string|null
     */
    public function getPlanType()
    {
        return $this->container['plan_type'];
    }

    /**
     * Sets plan_type
     *
     * @param string|null $plan_type Filter by plan type
     *
     * @return self
     */
    public function setPlanType($plan_type)
    {
        if (is_null($plan_type)) {
            throw new \InvalidArgumentException('non-nullable plan_type cannot be null');
        }
        $allowedValues = $this->getPlanTypeAllowableValues();
        if (!in_array($plan_type, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'plan_type', must be one of '%s'",
                    $plan_type,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['plan_type'] = $plan_type;

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
     * Gets without_entitlement_for
     *
     * @return string|null
     */
    public function getWithoutEntitlementFor()
    {
        return $this->container['without_entitlement_for'];
    }

    /**
     * Sets without_entitlement_for
     *
     * @param string|null $without_entitlement_for Filter out plans that already have a plan entitlement for the specified feature ID
     *
     * @return self
     */
    public function setWithoutEntitlementFor($without_entitlement_for)
    {
        if (is_null($without_entitlement_for)) {
            throw new \InvalidArgumentException('non-nullable without_entitlement_for cannot be null');
        }
        $this->container['without_entitlement_for'] = $without_entitlement_for;

        return $this;
    }

    /**
     * Gets without_paid_product_id
     *
     * @return bool|null
     */
    public function getWithoutPaidProductId()
    {
        return $this->container['without_paid_product_id'];
    }

    /**
     * Sets without_paid_product_id
     *
     * @param bool|null $without_paid_product_id Filter out plans that have a paid billing product ID
     *
     * @return self
     */
    public function setWithoutPaidProductId($without_paid_product_id)
    {
        if (is_null($without_paid_product_id)) {
            throw new \InvalidArgumentException('non-nullable without_paid_product_id cannot be null');
        }
        $this->container['without_paid_product_id'] = $without_paid_product_id;

        return $this;
    }

    /**
     * Gets without_product_id
     *
     * @return bool|null
     */
    public function getWithoutProductId()
    {
        return $this->container['without_product_id'];
    }

    /**
     * Sets without_product_id
     *
     * @param bool|null $without_product_id Filter out plans that have a billing product ID
     *
     * @return self
     */
    public function setWithoutProductId($without_product_id)
    {
        if (is_null($without_product_id)) {
            throw new \InvalidArgumentException('non-nullable without_product_id cannot be null');
        }
        $this->container['without_product_id'] = $without_product_id;

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


