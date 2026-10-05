# # UsageBasedEntitlementResponseData

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**billing_threshold** | **int** |  | [optional]
**consumption_rate** | **float** |  | [optional]
**feature_id** | **string** |  |
**metered_price** | [**\Schematic\Model\BillingPriceView**](BillingPriceView.md) |  | [optional]
**metric_period** | [**\Schematic\Model\MetricPeriod**](MetricPeriod.md) |  | [optional]
**metric_period_month_reset** | [**\Schematic\Model\MetricPeriodMonthReset**](MetricPeriodMonthReset.md) |  | [optional]
**monthly_usage_based_price** | [**\Schematic\Model\BillingPriceView**](BillingPriceView.md) |  | [optional]
**price_behavior** | [**\Schematic\Model\EntitlementPriceBehavior**](EntitlementPriceBehavior.md) |  | [optional]
**quarterly_usage_based_price** | [**\Schematic\Model\BillingPriceView**](BillingPriceView.md) |  | [optional]
**usage_quantity** | **int** | The committed unit quantity for this entitlement. For custom plans this is the minimum the company is contractually committed to: the company can buy more, and finalizing a new plan version sets the subscription quantity to the larger of this value and what the subscription already holds. For standard plans it is the quantity pre-filled when subscribing. Only applies to pay-in-advance entitlements. | [optional]
**value_bool** | **bool** |  | [optional]
**value_numeric** | **int** |  | [optional]
**value_type** | [**\Schematic\Model\EntitlementValueType**](EntitlementValueType.md) |  |
**yearly_usage_based_price** | [**\Schematic\Model\BillingPriceView**](BillingPriceView.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
