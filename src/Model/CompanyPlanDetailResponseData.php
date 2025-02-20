<?php
/**
 * CompanyPlanDetailResponseData
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
 * CompanyPlanDetailResponseData Class Doc Comment
 *
 * @category Class
 * @package  Schematic
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class CompanyPlanDetailResponseData implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'CompanyPlanDetailResponseData';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'audience_type' => 'string',
        'billing_product' => '\Schematic\Model\BillingProductDetailResponseData',
        'company_can_trial' => 'bool',
        'company_count' => 'int',
        'created_at' => '\DateTime',
        'current' => 'bool',
        'description' => 'string',
        'entitlements' => '\Schematic\Model\PlanEntitlementResponseData[]',
        'features' => '\Schematic\Model\FeatureDetailResponseData[]',
        'icon' => 'string',
        'id' => 'string',
        'is_default' => 'bool',
        'is_free' => 'bool',
        'is_trialable' => 'bool',
        'monthly_price' => '\Schematic\Model\BillingPriceResponseData',
        'name' => 'string',
        'plan_type' => 'string',
        'trial_days' => 'int',
        'updated_at' => '\DateTime',
        'valid' => 'bool',
        'yearly_price' => '\Schematic\Model\BillingPriceResponseData'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'audience_type' => null,
        'billing_product' => null,
        'company_can_trial' => null,
        'company_count' => null,
        'created_at' => 'date-time',
        'current' => null,
        'description' => null,
        'entitlements' => null,
        'features' => null,
        'icon' => null,
        'id' => null,
        'is_default' => null,
        'is_free' => null,
        'is_trialable' => null,
        'monthly_price' => null,
        'name' => null,
        'plan_type' => null,
        'trial_days' => null,
        'updated_at' => 'date-time',
        'valid' => null,
        'yearly_price' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'audience_type' => true,
        'billing_product' => false,
        'company_can_trial' => false,
        'company_count' => false,
        'created_at' => false,
        'current' => false,
        'description' => false,
        'entitlements' => false,
        'features' => false,
        'icon' => false,
        'id' => false,
        'is_default' => false,
        'is_free' => false,
        'is_trialable' => false,
        'monthly_price' => false,
        'name' => false,
        'plan_type' => false,
        'trial_days' => true,
        'updated_at' => false,
        'valid' => false,
        'yearly_price' => false
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
        'audience_type' => 'audience_type',
        'billing_product' => 'billing_product',
        'company_can_trial' => 'company_can_trial',
        'company_count' => 'company_count',
        'created_at' => 'created_at',
        'current' => 'current',
        'description' => 'description',
        'entitlements' => 'entitlements',
        'features' => 'features',
        'icon' => 'icon',
        'id' => 'id',
        'is_default' => 'is_default',
        'is_free' => 'is_free',
        'is_trialable' => 'is_trialable',
        'monthly_price' => 'monthly_price',
        'name' => 'name',
        'plan_type' => 'plan_type',
        'trial_days' => 'trial_days',
        'updated_at' => 'updated_at',
        'valid' => 'valid',
        'yearly_price' => 'yearly_price'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'audience_type' => 'setAudienceType',
        'billing_product' => 'setBillingProduct',
        'company_can_trial' => 'setCompanyCanTrial',
        'company_count' => 'setCompanyCount',
        'created_at' => 'setCreatedAt',
        'current' => 'setCurrent',
        'description' => 'setDescription',
        'entitlements' => 'setEntitlements',
        'features' => 'setFeatures',
        'icon' => 'setIcon',
        'id' => 'setId',
        'is_default' => 'setIsDefault',
        'is_free' => 'setIsFree',
        'is_trialable' => 'setIsTrialable',
        'monthly_price' => 'setMonthlyPrice',
        'name' => 'setName',
        'plan_type' => 'setPlanType',
        'trial_days' => 'setTrialDays',
        'updated_at' => 'setUpdatedAt',
        'valid' => 'setValid',
        'yearly_price' => 'setYearlyPrice'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'audience_type' => 'getAudienceType',
        'billing_product' => 'getBillingProduct',
        'company_can_trial' => 'getCompanyCanTrial',
        'company_count' => 'getCompanyCount',
        'created_at' => 'getCreatedAt',
        'current' => 'getCurrent',
        'description' => 'getDescription',
        'entitlements' => 'getEntitlements',
        'features' => 'getFeatures',
        'icon' => 'getIcon',
        'id' => 'getId',
        'is_default' => 'getIsDefault',
        'is_free' => 'getIsFree',
        'is_trialable' => 'getIsTrialable',
        'monthly_price' => 'getMonthlyPrice',
        'name' => 'getName',
        'plan_type' => 'getPlanType',
        'trial_days' => 'getTrialDays',
        'updated_at' => 'getUpdatedAt',
        'valid' => 'getValid',
        'yearly_price' => 'getYearlyPrice'
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
        $this->setIfExists('audience_type', $data ?? [], null);
        $this->setIfExists('billing_product', $data ?? [], null);
        $this->setIfExists('company_can_trial', $data ?? [], null);
        $this->setIfExists('company_count', $data ?? [], null);
        $this->setIfExists('created_at', $data ?? [], null);
        $this->setIfExists('current', $data ?? [], null);
        $this->setIfExists('description', $data ?? [], null);
        $this->setIfExists('entitlements', $data ?? [], null);
        $this->setIfExists('features', $data ?? [], null);
        $this->setIfExists('icon', $data ?? [], null);
        $this->setIfExists('id', $data ?? [], null);
        $this->setIfExists('is_default', $data ?? [], null);
        $this->setIfExists('is_free', $data ?? [], null);
        $this->setIfExists('is_trialable', $data ?? [], null);
        $this->setIfExists('monthly_price', $data ?? [], null);
        $this->setIfExists('name', $data ?? [], null);
        $this->setIfExists('plan_type', $data ?? [], null);
        $this->setIfExists('trial_days', $data ?? [], null);
        $this->setIfExists('updated_at', $data ?? [], null);
        $this->setIfExists('valid', $data ?? [], null);
        $this->setIfExists('yearly_price', $data ?? [], null);
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

        if ($this->container['company_can_trial'] === null) {
            $invalidProperties[] = "'company_can_trial' can't be null";
        }
        if ($this->container['company_count'] === null) {
            $invalidProperties[] = "'company_count' can't be null";
        }
        if ($this->container['created_at'] === null) {
            $invalidProperties[] = "'created_at' can't be null";
        }
        if ($this->container['current'] === null) {
            $invalidProperties[] = "'current' can't be null";
        }
        if ($this->container['description'] === null) {
            $invalidProperties[] = "'description' can't be null";
        }
        if ($this->container['entitlements'] === null) {
            $invalidProperties[] = "'entitlements' can't be null";
        }
        if ($this->container['features'] === null) {
            $invalidProperties[] = "'features' can't be null";
        }
        if ($this->container['icon'] === null) {
            $invalidProperties[] = "'icon' can't be null";
        }
        if ($this->container['id'] === null) {
            $invalidProperties[] = "'id' can't be null";
        }
        if ($this->container['is_default'] === null) {
            $invalidProperties[] = "'is_default' can't be null";
        }
        if ($this->container['is_free'] === null) {
            $invalidProperties[] = "'is_free' can't be null";
        }
        if ($this->container['is_trialable'] === null) {
            $invalidProperties[] = "'is_trialable' can't be null";
        }
        if ($this->container['name'] === null) {
            $invalidProperties[] = "'name' can't be null";
        }
        if ($this->container['plan_type'] === null) {
            $invalidProperties[] = "'plan_type' can't be null";
        }
        if ($this->container['updated_at'] === null) {
            $invalidProperties[] = "'updated_at' can't be null";
        }
        if ($this->container['valid'] === null) {
            $invalidProperties[] = "'valid' can't be null";
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
     * Gets audience_type
     *
     * @return string|null
     */
    public function getAudienceType()
    {
        return $this->container['audience_type'];
    }

    /**
     * Sets audience_type
     *
     * @param string|null $audience_type audience_type
     *
     * @return self
     */
    public function setAudienceType($audience_type)
    {
        if (is_null($audience_type)) {
            array_push($this->openAPINullablesSetToNull, 'audience_type');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('audience_type', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['audience_type'] = $audience_type;

        return $this;
    }

    /**
     * Gets billing_product
     *
     * @return \Schematic\Model\BillingProductDetailResponseData|null
     */
    public function getBillingProduct()
    {
        return $this->container['billing_product'];
    }

    /**
     * Sets billing_product
     *
     * @param \Schematic\Model\BillingProductDetailResponseData|null $billing_product billing_product
     *
     * @return self
     */
    public function setBillingProduct($billing_product)
    {
        if (is_null($billing_product)) {
            throw new \InvalidArgumentException('non-nullable billing_product cannot be null');
        }
        $this->container['billing_product'] = $billing_product;

        return $this;
    }

    /**
     * Gets company_can_trial
     *
     * @return bool
     */
    public function getCompanyCanTrial()
    {
        return $this->container['company_can_trial'];
    }

    /**
     * Sets company_can_trial
     *
     * @param bool $company_can_trial company_can_trial
     *
     * @return self
     */
    public function setCompanyCanTrial($company_can_trial)
    {
        if (is_null($company_can_trial)) {
            throw new \InvalidArgumentException('non-nullable company_can_trial cannot be null');
        }
        $this->container['company_can_trial'] = $company_can_trial;

        return $this;
    }

    /**
     * Gets company_count
     *
     * @return int
     */
    public function getCompanyCount()
    {
        return $this->container['company_count'];
    }

    /**
     * Sets company_count
     *
     * @param int $company_count company_count
     *
     * @return self
     */
    public function setCompanyCount($company_count)
    {
        if (is_null($company_count)) {
            throw new \InvalidArgumentException('non-nullable company_count cannot be null');
        }
        $this->container['company_count'] = $company_count;

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
     * Gets current
     *
     * @return bool
     */
    public function getCurrent()
    {
        return $this->container['current'];
    }

    /**
     * Sets current
     *
     * @param bool $current current
     *
     * @return self
     */
    public function setCurrent($current)
    {
        if (is_null($current)) {
            throw new \InvalidArgumentException('non-nullable current cannot be null');
        }
        $this->container['current'] = $current;

        return $this;
    }

    /**
     * Gets description
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->container['description'];
    }

    /**
     * Sets description
     *
     * @param string $description description
     *
     * @return self
     */
    public function setDescription($description)
    {
        if (is_null($description)) {
            throw new \InvalidArgumentException('non-nullable description cannot be null');
        }
        $this->container['description'] = $description;

        return $this;
    }

    /**
     * Gets entitlements
     *
     * @return \Schematic\Model\PlanEntitlementResponseData[]
     */
    public function getEntitlements()
    {
        return $this->container['entitlements'];
    }

    /**
     * Sets entitlements
     *
     * @param \Schematic\Model\PlanEntitlementResponseData[] $entitlements entitlements
     *
     * @return self
     */
    public function setEntitlements($entitlements)
    {
        if (is_null($entitlements)) {
            throw new \InvalidArgumentException('non-nullable entitlements cannot be null');
        }
        $this->container['entitlements'] = $entitlements;

        return $this;
    }

    /**
     * Gets features
     *
     * @return \Schematic\Model\FeatureDetailResponseData[]
     */
    public function getFeatures()
    {
        return $this->container['features'];
    }

    /**
     * Sets features
     *
     * @param \Schematic\Model\FeatureDetailResponseData[] $features features
     *
     * @return self
     */
    public function setFeatures($features)
    {
        if (is_null($features)) {
            throw new \InvalidArgumentException('non-nullable features cannot be null');
        }
        $this->container['features'] = $features;

        return $this;
    }

    /**
     * Gets icon
     *
     * @return string
     */
    public function getIcon()
    {
        return $this->container['icon'];
    }

    /**
     * Sets icon
     *
     * @param string $icon icon
     *
     * @return self
     */
    public function setIcon($icon)
    {
        if (is_null($icon)) {
            throw new \InvalidArgumentException('non-nullable icon cannot be null');
        }
        $this->container['icon'] = $icon;

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
     * Gets is_default
     *
     * @return bool
     */
    public function getIsDefault()
    {
        return $this->container['is_default'];
    }

    /**
     * Sets is_default
     *
     * @param bool $is_default is_default
     *
     * @return self
     */
    public function setIsDefault($is_default)
    {
        if (is_null($is_default)) {
            throw new \InvalidArgumentException('non-nullable is_default cannot be null');
        }
        $this->container['is_default'] = $is_default;

        return $this;
    }

    /**
     * Gets is_free
     *
     * @return bool
     */
    public function getIsFree()
    {
        return $this->container['is_free'];
    }

    /**
     * Sets is_free
     *
     * @param bool $is_free is_free
     *
     * @return self
     */
    public function setIsFree($is_free)
    {
        if (is_null($is_free)) {
            throw new \InvalidArgumentException('non-nullable is_free cannot be null');
        }
        $this->container['is_free'] = $is_free;

        return $this;
    }

    /**
     * Gets is_trialable
     *
     * @return bool
     */
    public function getIsTrialable()
    {
        return $this->container['is_trialable'];
    }

    /**
     * Sets is_trialable
     *
     * @param bool $is_trialable is_trialable
     *
     * @return self
     */
    public function setIsTrialable($is_trialable)
    {
        if (is_null($is_trialable)) {
            throw new \InvalidArgumentException('non-nullable is_trialable cannot be null');
        }
        $this->container['is_trialable'] = $is_trialable;

        return $this;
    }

    /**
     * Gets monthly_price
     *
     * @return \Schematic\Model\BillingPriceResponseData|null
     */
    public function getMonthlyPrice()
    {
        return $this->container['monthly_price'];
    }

    /**
     * Sets monthly_price
     *
     * @param \Schematic\Model\BillingPriceResponseData|null $monthly_price monthly_price
     *
     * @return self
     */
    public function setMonthlyPrice($monthly_price)
    {
        if (is_null($monthly_price)) {
            throw new \InvalidArgumentException('non-nullable monthly_price cannot be null');
        }
        $this->container['monthly_price'] = $monthly_price;

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
     * Gets plan_type
     *
     * @return string
     */
    public function getPlanType()
    {
        return $this->container['plan_type'];
    }

    /**
     * Sets plan_type
     *
     * @param string $plan_type plan_type
     *
     * @return self
     */
    public function setPlanType($plan_type)
    {
        if (is_null($plan_type)) {
            throw new \InvalidArgumentException('non-nullable plan_type cannot be null');
        }
        $this->container['plan_type'] = $plan_type;

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
     * Gets valid
     *
     * @return bool
     */
    public function getValid()
    {
        return $this->container['valid'];
    }

    /**
     * Sets valid
     *
     * @param bool $valid valid
     *
     * @return self
     */
    public function setValid($valid)
    {
        if (is_null($valid)) {
            throw new \InvalidArgumentException('non-nullable valid cannot be null');
        }
        $this->container['valid'] = $valid;

        return $this;
    }

    /**
     * Gets yearly_price
     *
     * @return \Schematic\Model\BillingPriceResponseData|null
     */
    public function getYearlyPrice()
    {
        return $this->container['yearly_price'];
    }

    /**
     * Sets yearly_price
     *
     * @param \Schematic\Model\BillingPriceResponseData|null $yearly_price yearly_price
     *
     * @return self
     */
    public function setYearlyPrice($yearly_price)
    {
        if (is_null($yearly_price)) {
            throw new \InvalidArgumentException('non-nullable yearly_price cannot be null');
        }
        $this->container['yearly_price'] = $yearly_price;

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


