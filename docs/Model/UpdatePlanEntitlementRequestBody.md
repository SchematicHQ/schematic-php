# # UpdatePlanEntitlementRequestBody

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**billing_product_id** | **string** |  | [optional]
**billing_threshold** | **int** |  | [optional]
**credit_consumption_rate** | **float** |  | [optional]
**currency** | **string** |  | [optional]
**currency_prices** | [**\Schematic\Model\CurrencyPriceRequestBody[]**](CurrencyPriceRequestBody.md) |  | [optional]
**metric_period** | [**\Schematic\Model\MetricPeriod**](MetricPeriod.md) |  | [optional]
**metric_period_month_reset** | [**\Schematic\Model\MetricPeriodMonthReset**](MetricPeriodMonthReset.md) |  | [optional]
**monthly_metered_price_id** | **string** |  | [optional]
**monthly_price_tiers** | [**\Schematic\Model\CreatePriceTierRequestBody[]**](CreatePriceTierRequestBody.md) |  | [optional]
**monthly_unit_price** | **int** |  | [optional]
**monthly_unit_price_decimal** | **string** |  | [optional]
**overage_billing_product_id** | **string** |  | [optional]
**price_behavior** | [**\Schematic\Model\EntitlementPriceBehavior**](EntitlementPriceBehavior.md) |  | [optional]
**price_tiers** | [**\Schematic\Model\CreatePriceTierRequestBody[]**](CreatePriceTierRequestBody.md) | Use MonthlyPriceTiers or YearlyPriceTiers instead | [optional]
**quarterly_metered_price_id** | **string** |  | [optional]
**quarterly_price_tiers** | [**\Schematic\Model\CreatePriceTierRequestBody[]**](CreatePriceTierRequestBody.md) |  | [optional]
**quarterly_unit_price** | **int** |  | [optional]
**quarterly_unit_price_decimal** | **string** |  | [optional]
**soft_limit** | **int** |  | [optional]
**tier_mode** | [**\Schematic\Model\BillingTiersMode**](BillingTiersMode.md) |  | [optional]
**usage_quantity** | **int** | The committed unit quantity for this entitlement. For custom plans this is the quantity the company is contractually committed to; for standard plans it is the quantity pre-filled when subscribing. Only applies to pay-in-advance entitlements. Note: this is not yet enforced/auto-provisioned as a true default — it is currently stored for downstream billing use. | [optional]
**value_bool** | **bool** |  | [optional]
**value_credit_id** | **string** |  | [optional]
**value_numeric** | **int** |  | [optional]
**value_trait_id** | **string** |  | [optional]
**value_type** | [**\Schematic\Model\EntitlementValueType**](EntitlementValueType.md) |  |
**warning_tiers** | [**\Schematic\Model\WarningTierRequestBody[]**](WarningTierRequestBody.md) |  | [optional]
**yearly_metered_price_id** | **string** |  | [optional]
**yearly_price_tiers** | [**\Schematic\Model\CreatePriceTierRequestBody[]**](CreatePriceTierRequestBody.md) |  | [optional]
**yearly_unit_price** | **int** |  | [optional]
**yearly_unit_price_decimal** | **string** |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
