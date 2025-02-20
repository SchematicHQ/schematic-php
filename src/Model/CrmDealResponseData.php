<?php
/**
 * CrmDealResponseData
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
 * CrmDealResponseData Class Doc Comment
 *
 * @category Class
 * @description The created resource
 * @package  Schematic
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class CrmDealResponseData implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'CrmDealResponseData';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'account_id' => 'string',
        'arr' => 'string',
        'company_external_id' => 'string',
        'created_at' => '\DateTime',
        'deal_external_id' => 'string',
        'deal_id' => 'string',
        'environment_id' => 'string',
        'mrr' => 'string',
        'name' => 'string',
        'product_external_id' => 'string',
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
        'account_id' => null,
        'arr' => null,
        'company_external_id' => null,
        'created_at' => 'date-time',
        'deal_external_id' => null,
        'deal_id' => null,
        'environment_id' => null,
        'mrr' => null,
        'name' => null,
        'product_external_id' => null,
        'updated_at' => 'date-time'
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'account_id' => false,
        'arr' => false,
        'company_external_id' => true,
        'created_at' => false,
        'deal_external_id' => false,
        'deal_id' => false,
        'environment_id' => false,
        'mrr' => false,
        'name' => true,
        'product_external_id' => true,
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
        'account_id' => 'account_id',
        'arr' => 'arr',
        'company_external_id' => 'company_external_id',
        'created_at' => 'created_at',
        'deal_external_id' => 'deal_external_id',
        'deal_id' => 'deal_id',
        'environment_id' => 'environment_id',
        'mrr' => 'mrr',
        'name' => 'name',
        'product_external_id' => 'product_external_id',
        'updated_at' => 'updated_at'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'account_id' => 'setAccountId',
        'arr' => 'setArr',
        'company_external_id' => 'setCompanyExternalId',
        'created_at' => 'setCreatedAt',
        'deal_external_id' => 'setDealExternalId',
        'deal_id' => 'setDealId',
        'environment_id' => 'setEnvironmentId',
        'mrr' => 'setMrr',
        'name' => 'setName',
        'product_external_id' => 'setProductExternalId',
        'updated_at' => 'setUpdatedAt'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'account_id' => 'getAccountId',
        'arr' => 'getArr',
        'company_external_id' => 'getCompanyExternalId',
        'created_at' => 'getCreatedAt',
        'deal_external_id' => 'getDealExternalId',
        'deal_id' => 'getDealId',
        'environment_id' => 'getEnvironmentId',
        'mrr' => 'getMrr',
        'name' => 'getName',
        'product_external_id' => 'getProductExternalId',
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
        $this->setIfExists('account_id', $data ?? [], null);
        $this->setIfExists('arr', $data ?? [], null);
        $this->setIfExists('company_external_id', $data ?? [], null);
        $this->setIfExists('created_at', $data ?? [], null);
        $this->setIfExists('deal_external_id', $data ?? [], null);
        $this->setIfExists('deal_id', $data ?? [], null);
        $this->setIfExists('environment_id', $data ?? [], null);
        $this->setIfExists('mrr', $data ?? [], null);
        $this->setIfExists('name', $data ?? [], null);
        $this->setIfExists('product_external_id', $data ?? [], null);
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

        if ($this->container['account_id'] === null) {
            $invalidProperties[] = "'account_id' can't be null";
        }
        if ($this->container['arr'] === null) {
            $invalidProperties[] = "'arr' can't be null";
        }
        if ($this->container['created_at'] === null) {
            $invalidProperties[] = "'created_at' can't be null";
        }
        if ($this->container['deal_external_id'] === null) {
            $invalidProperties[] = "'deal_external_id' can't be null";
        }
        if ($this->container['deal_id'] === null) {
            $invalidProperties[] = "'deal_id' can't be null";
        }
        if ($this->container['environment_id'] === null) {
            $invalidProperties[] = "'environment_id' can't be null";
        }
        if ($this->container['mrr'] === null) {
            $invalidProperties[] = "'mrr' can't be null";
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
     * Gets account_id
     *
     * @return string
     */
    public function getAccountId()
    {
        return $this->container['account_id'];
    }

    /**
     * Sets account_id
     *
     * @param string $account_id account_id
     *
     * @return self
     */
    public function setAccountId($account_id)
    {
        if (is_null($account_id)) {
            throw new \InvalidArgumentException('non-nullable account_id cannot be null');
        }
        $this->container['account_id'] = $account_id;

        return $this;
    }

    /**
     * Gets arr
     *
     * @return string
     */
    public function getArr()
    {
        return $this->container['arr'];
    }

    /**
     * Sets arr
     *
     * @param string $arr arr
     *
     * @return self
     */
    public function setArr($arr)
    {
        if (is_null($arr)) {
            throw new \InvalidArgumentException('non-nullable arr cannot be null');
        }
        $this->container['arr'] = $arr;

        return $this;
    }

    /**
     * Gets company_external_id
     *
     * @return string|null
     */
    public function getCompanyExternalId()
    {
        return $this->container['company_external_id'];
    }

    /**
     * Sets company_external_id
     *
     * @param string|null $company_external_id company_external_id
     *
     * @return self
     */
    public function setCompanyExternalId($company_external_id)
    {
        if (is_null($company_external_id)) {
            array_push($this->openAPINullablesSetToNull, 'company_external_id');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('company_external_id', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['company_external_id'] = $company_external_id;

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
     * Gets deal_id
     *
     * @return string
     */
    public function getDealId()
    {
        return $this->container['deal_id'];
    }

    /**
     * Sets deal_id
     *
     * @param string $deal_id deal_id
     *
     * @return self
     */
    public function setDealId($deal_id)
    {
        if (is_null($deal_id)) {
            throw new \InvalidArgumentException('non-nullable deal_id cannot be null');
        }
        $this->container['deal_id'] = $deal_id;

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
     * Gets mrr
     *
     * @return string
     */
    public function getMrr()
    {
        return $this->container['mrr'];
    }

    /**
     * Sets mrr
     *
     * @param string $mrr mrr
     *
     * @return self
     */
    public function setMrr($mrr)
    {
        if (is_null($mrr)) {
            throw new \InvalidArgumentException('non-nullable mrr cannot be null');
        }
        $this->container['mrr'] = $mrr;

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
            array_push($this->openAPINullablesSetToNull, 'name');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('name', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets product_external_id
     *
     * @return string|null
     */
    public function getProductExternalId()
    {
        return $this->container['product_external_id'];
    }

    /**
     * Sets product_external_id
     *
     * @param string|null $product_external_id product_external_id
     *
     * @return self
     */
    public function setProductExternalId($product_external_id)
    {
        if (is_null($product_external_id)) {
            array_push($this->openAPINullablesSetToNull, 'product_external_id');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('product_external_id', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['product_external_id'] = $product_external_id;

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


