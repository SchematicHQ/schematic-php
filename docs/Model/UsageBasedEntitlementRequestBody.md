# # UsageBasedEntitlementRequestBody

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**billing_product_id** | **string** |  | [optional]
**billing_threshold** | **int** |  | [optional]
**currency** | **string** |  | [optional]
**currency_prices** | [**\Schematic\Model\CurrencyPriceRequestBody[]**](CurrencyPriceRequestBody.md) |  | [optional]
**monthly_metered_price_id** | **string** |  | [optional]
**monthly_price_tiers** | [**\Schematic\Model\CreatePriceTierRequestBody[]**](CreatePriceTierRequestBody.md) |  | [optional]
**monthly_unit_price** | **int** |  | [optional]
**monthly_unit_price_decimal** | **string** |  | [optional]
**overage_billing_cadence** | [**\Schematic\Model\BillingArrearsCadence**](BillingArrearsCadence.md) | How often overage charges are assessed and invoiced. Defaults to end_of_billing_period, where the billing provider aggregates usage over the subscription&#39;s own period and bills it at period end. Set to monthly or quarterly to have overage assessed each month or quarter and billed on its own invoice, which is the point of the setting on annual plans. A quarter charges each month&#39;s usage against that month&#39;s allowance. Only applies to overage price behavior. | [optional]
**overage_billing_product_id** | **string** |  | [optional]
**overage_invoice_anchor** | [**\Schematic\Model\BillingArrearsAnchor**](BillingArrearsAnchor.md) | Which boundary closes a monthly or quarterly overage window: the subscription&#39;s own recurrence (billing_period_start) or the calendar month (month_end). Quarterly windows run in three-month blocks from the billing period start, held to the subscription&#39;s own period, or in calendar quarters at month_end. Only applies when overage_billing_cadence is monthly or quarterly, and must match metric_period_month_reset so each window closes when the allowance resets: billing_period_start for billing_cycle, month_end for first_of_month. Defaults to the anchor that matches the reset. | [optional]
**price_behavior** | [**\Schematic\Model\EntitlementPriceBehavior**](EntitlementPriceBehavior.md) |  | [optional]
**price_tiers** | [**\Schematic\Model\CreatePriceTierRequestBody[]**](CreatePriceTierRequestBody.md) | Use MonthlyPriceTiers or YearlyPriceTiers instead | [optional]
**quarterly_metered_price_id** | **string** |  | [optional]
**quarterly_price_tiers** | [**\Schematic\Model\CreatePriceTierRequestBody[]**](CreatePriceTierRequestBody.md) |  | [optional]
**quarterly_unit_price** | **int** |  | [optional]
**quarterly_unit_price_decimal** | **string** |  | [optional]
**soft_limit** | **int** |  | [optional]
**tier_mode** | [**\Schematic\Model\BillingTiersMode**](BillingTiersMode.md) |  | [optional]
**usage_quantity** | **int** | The committed unit quantity for this entitlement. For custom plans this is the minimum the company is contractually committed to: the company can buy more, and finalizing a new plan version sets the subscription quantity to the larger of this value and what the subscription already holds. For standard plans it is the quantity pre-filled when subscribing. Only applies to pay-in-advance entitlements. | [optional]
**yearly_metered_price_id** | **string** |  | [optional]
**yearly_price_tiers** | [**\Schematic\Model\CreatePriceTierRequestBody[]**](CreatePriceTierRequestBody.md) |  | [optional]
**yearly_unit_price** | **int** |  | [optional]
**yearly_unit_price_decimal** | **string** |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
