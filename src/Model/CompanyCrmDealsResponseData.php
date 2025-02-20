<?php
/**
 * CompanyCrmDealsResponseData
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
 * CompanyCrmDealsResponseData Class Doc Comment
 *
 * @category Class
 * @package  Schematic
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class CompanyCrmDealsResponseData implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'CompanyCrmDealsResponseData';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'deal_arr' => 'string',
        'deal_external_id' => 'string',
        'deal_mrr' => 'string',
        'deal_name' => 'string',
        'line_items' => '\Schematic\Model\CrmDealLineItem[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'deal_arr' => null,
        'deal_external_id' => null,
        'deal_mrr' => null,
        'deal_name' => null,
        'line_items' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'deal_arr' => false,
        'deal_external_id' => false,
        'deal_mrr' => false,
        'deal_name' => true,
        'line_items' => false
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
        'deal_arr' => 'deal_arr',
        'deal_external_id' => 'deal_external_id',
        'deal_mrr' => 'deal_mrr',
        'deal_name' => 'deal_name',
        'line_items' => 'line_items'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'deal_arr' => 'setDealArr',
        'deal_external_id' => 'setDealExternalId',
        'deal_mrr' => 'setDealMrr',
        'deal_name' => 'setDealName',
        'line_items' => 'setLineItems'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'deal_arr' => 'getDealArr',
        'deal_external_id' => 'getDealExternalId',
        'deal_mrr' => 'getDealMrr',
        'deal_name' => 'getDealName',
        'line_items' => 'getLineItems'
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
        $this->setIfExists('deal_arr', $data ?? [], null);
        $this->setIfExists('deal_external_id', $data ?? [], null);
        $this->setIfExists('deal_mrr', $data ?? [], null);
        $this->setIfExists('deal_name', $data ?? [], null);
        $this->setIfExists('line_items', $data ?? [], null);
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

        if ($this->container['deal_arr'] === null) {
            $invalidProperties[] = "'deal_arr' can't be null";
        }
        if ($this->container['deal_external_id'] === null) {
            $invalidProperties[] = "'deal_external_id' can't be null";
        }
        if ($this->container['deal_mrr'] === null) {
            $invalidProperties[] = "'deal_mrr' can't be null";
        }
        if ($this->container['line_items'] === null) {
            $invalidProperties[] = "'line_items' can't be null";
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
     * Gets deal_arr
     *
     * @return string
     */
    public function getDealArr()
    {
        return $this->container['deal_arr'];
    }

    /**
     * Sets deal_arr
     *
     * @param string $deal_arr deal_arr
     *
     * @return self
     */
    public function setDealArr($deal_arr)
    {
        if (is_null($deal_arr)) {
            throw new \InvalidArgumentException('non-nullable deal_arr cannot be null');
        }
        $this->container['deal_arr'] = $deal_arr;

        return $this;
    }

    /**
     * Gets deal_external_id
     *
     * @return string
     */
    public function getDealExternalId()
    {
        return $this->container['deal_external_id'];
    }

    /**
     * Sets deal_external_id
     *
     * @param string $deal_external_id deal_external_id
     *
     * @return self
     */
    public function setDealExternalId($deal_external_id)
    {
        if (is_null($deal_external_id)) {
            throw new \InvalidArgumentException('non-nullable deal_external_id cannot be null');
        }
        $this->container['deal_external_id'] = $deal_external_id;

        return $this;
    }

    /**
     * Gets deal_mrr
     *
     * @return string
     */
    public function getDealMrr()
    {
        return $this->container['deal_mrr'];
    }

    /**
     * Sets deal_mrr
     *
     * @param string $deal_mrr deal_mrr
     *
     * @return self
     */
    public function setDealMrr($deal_mrr)
    {
        if (is_null($deal_mrr)) {
            throw new \InvalidArgumentException('non-nullable deal_mrr cannot be null');
        }
        $this->container['deal_mrr'] = $deal_mrr;

        return $this;
    }

    /**
     * Gets deal_name
     *
     * @return string|null
     */
    public function getDealName()
    {
        return $this->container['deal_name'];
    }

    /**
     * Sets deal_name
     *
     * @param string|null $deal_name deal_name
     *
     * @return self
     */
    public function setDealName($deal_name)
    {
        if (is_null($deal_name)) {
            array_push($this->openAPINullablesSetToNull, 'deal_name');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('deal_name', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['deal_name'] = $deal_name;

        return $this;
    }

    /**
     * Gets line_items
     *
     * @return \Schematic\Model\CrmDealLineItem[]
     */
    public function getLineItems()
    {
        return $this->container['line_items'];
    }

    /**
     * Sets line_items
     *
     * @param \Schematic\Model\CrmDealLineItem[] $line_items line_items
     *
     * @return self
     */
    public function setLineItems($line_items)
    {
        if (is_null($line_items)) {
            throw new \InvalidArgumentException('non-nullable line_items cannot be null');
        }
        $this->container['line_items'] = $line_items;

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


