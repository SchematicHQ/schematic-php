<?php
/**
 * ListPlanEntitlementsParams
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
 * ListPlanEntitlementsParams Class Doc Comment
 *
 * @category Class
 * @description Input parameters
 * @package  Schematic
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class ListPlanEntitlementsParams implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'ListPlanEntitlementsParams';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'feature_id' => 'string',
        'feature_ids' => 'string[]',
        'ids' => 'string[]',
        'limit' => 'int',
        'offset' => 'int',
        'plan_id' => 'string',
        'plan_ids' => 'string[]',
        'q' => 'string',
        'with_metered_products' => 'bool'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'feature_id' => null,
        'feature_ids' => null,
        'ids' => null,
        'limit' => null,
        'offset' => null,
        'plan_id' => null,
        'plan_ids' => null,
        'q' => null,
        'with_metered_products' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'feature_id' => false,
        'feature_ids' => false,
        'ids' => false,
        'limit' => false,
        'offset' => false,
        'plan_id' => false,
        'plan_ids' => false,
        'q' => false,
        'with_metered_products' => false
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
        'feature_id' => 'feature_id',
        'feature_ids' => 'feature_ids',
        'ids' => 'ids',
        'limit' => 'limit',
        'offset' => 'offset',
        'plan_id' => 'plan_id',
        'plan_ids' => 'plan_ids',
        'q' => 'q',
        'with_metered_products' => 'with_metered_products'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'feature_id' => 'setFeatureId',
        'feature_ids' => 'setFeatureIds',
        'ids' => 'setIds',
        'limit' => 'setLimit',
        'offset' => 'setOffset',
        'plan_id' => 'setPlanId',
        'plan_ids' => 'setPlanIds',
        'q' => 'setQ',
        'with_metered_products' => 'setWithMeteredProducts'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'feature_id' => 'getFeatureId',
        'feature_ids' => 'getFeatureIds',
        'ids' => 'getIds',
        'limit' => 'getLimit',
        'offset' => 'getOffset',
        'plan_id' => 'getPlanId',
        'plan_ids' => 'getPlanIds',
        'q' => 'getQ',
        'with_metered_products' => 'getWithMeteredProducts'
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
        $this->setIfExists('feature_id', $data ?? [], null);
        $this->setIfExists('feature_ids', $data ?? [], null);
        $this->setIfExists('ids', $data ?? [], null);
        $this->setIfExists('limit', $data ?? [], null);
        $this->setIfExists('offset', $data ?? [], null);
        $this->setIfExists('plan_id', $data ?? [], null);
        $this->setIfExists('plan_ids', $data ?? [], null);
        $this->setIfExists('q', $data ?? [], null);
        $this->setIfExists('with_metered_products', $data ?? [], null);
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
     * Gets feature_id
     *
     * @return string|null
     */
    public function getFeatureId()
    {
        return $this->container['feature_id'];
    }

    /**
     * Sets feature_id
     *
     * @param string|null $feature_id Filter plan entitlements by a single feature ID (starting with feat_)
     *
     * @return self
     */
    public function setFeatureId($feature_id)
    {
        if (is_null($feature_id)) {
            throw new \InvalidArgumentException('non-nullable feature_id cannot be null');
        }
        $this->container['feature_id'] = $feature_id;

        return $this;
    }

    /**
     * Gets feature_ids
     *
     * @return string[]|null
     */
    public function getFeatureIds()
    {
        return $this->container['feature_ids'];
    }

    /**
     * Sets feature_ids
     *
     * @param string[]|null $feature_ids Filter plan entitlements by multiple feature IDs (starting with feat_)
     *
     * @return self
     */
    public function setFeatureIds($feature_ids)
    {
        if (is_null($feature_ids)) {
            throw new \InvalidArgumentException('non-nullable feature_ids cannot be null');
        }
        $this->container['feature_ids'] = $feature_ids;

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
     * @param string[]|null $ids Filter plan entitlements by multiple plan entitlement IDs (starting with pltl_)
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
     * @param string|null $plan_id Filter plan entitlements by a single plan ID (starting with plan_)
     *
     * @return self
     */
    public function setPlanId($plan_id)
    {
        if (is_null($plan_id)) {
            throw new \InvalidArgumentException('non-nullable plan_id cannot be null');
        }
        $this->container['plan_id'] = $plan_id;

        return $this;
    }

    /**
     * Gets plan_ids
     *
     * @return string[]|null
     */
    public function getPlanIds()
    {
        return $this->container['plan_ids'];
    }

    /**
     * Sets plan_ids
     *
     * @param string[]|null $plan_ids Filter plan entitlements by multiple plan IDs (starting with plan_)
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
     * @param string|null $q Search for plan entitlements by feature or company name
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
     * Gets with_metered_products
     *
     * @return bool|null
     */
    public function getWithMeteredProducts()
    {
        return $this->container['with_metered_products'];
    }

    /**
     * Sets with_metered_products
     *
     * @param bool|null $with_metered_products Filter plan entitlements only with metered products
     *
     * @return self
     */
    public function setWithMeteredProducts($with_metered_products)
    {
        if (is_null($with_metered_products)) {
            throw new \InvalidArgumentException('non-nullable with_metered_products cannot be null');
        }
        $this->container['with_metered_products'] = $with_metered_products;

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


