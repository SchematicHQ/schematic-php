# # CreateEntitlementInBundleRequestBody

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**billing_product_id** | **string** |  | [optional]
**billing_threshold** | **int** |  | [optional]
**credit_consumption_rate** | **float** |  | [optional]
**currency** | **string** |  | [optional]
**feature_id** | **string** |  |
**metric_period** | **string** |  | [optional]
**metric_period_month_reset** | **string** |  | [optional]
**monthly_metered_price_id** | **string** |  | [optional]
**monthly_price_tiers** | [**\Schematic\Model\CreatePriceTierRequestBody[]**](CreatePriceTierRequestBody.md) |  | [optional]
**monthly_unit_price** | **int** |  | [optional]
**monthly_unit_price_decimal** | **string** |  | [optional]
**overage_billing_product_id** | **string** |  | [optional]
**price_behavior** | [**\Schematic\Model\EntitlementPriceBehavior**](EntitlementPriceBehavior.md) |  | [optional]
**price_tiers** | [**\Schematic\Model\CreatePriceTierRequestBody[]**](CreatePriceTierRequestBody.md) | Use MonthlyPriceTiers or YearlyPriceTiers instead | [optional]
**soft_limit** | **int** |  | [optional]
**tier_mode** | [**\Schematic\Model\BillingTiersMode**](BillingTiersMode.md) |  | [optional]
**value_bool** | **bool** |  | [optional]
**value_credit_id** | **string** |  | [optional]
**value_numeric** | **int** |  | [optional]
**value_trait_id** | **string** |  | [optional]
**value_type** | [**\Schematic\Model\EntitlementValueType**](EntitlementValueType.md) |  |
**yearly_metered_price_id** | **string** |  | [optional]
**yearly_price_tiers** | [**\Schematic\Model\CreatePriceTierRequestBody[]**](CreatePriceTierRequestBody.md) |  | [optional]
**yearly_unit_price** | **int** |  | [optional]
**yearly_unit_price_decimal** | **string** |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
