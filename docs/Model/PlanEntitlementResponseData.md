# # PlanEntitlementResponseData

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**billing_linked_resource** | [**\Schematic\Model\BillingLinkedResourceResponseData**](BillingLinkedResourceResponseData.md) |  | [optional]
**billing_threshold** | **int** |  | [optional]
**consumption_rate** | **float** |  | [optional]
**created_at** | **\DateTime** |  |
**currency_prices** | [**\Schematic\Model\EntitlementCurrencyPricesResponseData[]**](EntitlementCurrencyPricesResponseData.md) |  |
**environment_id** | **string** |  |
**feature** | [**\Schematic\Model\FeatureResponseData**](FeatureResponseData.md) |  | [optional]
**feature_id** | **string** |  |
**id** | **string** |  |
**metered_monthly_price** | [**\Schematic\Model\BillingPriceView**](BillingPriceView.md) |  | [optional]
**metered_quarterly_price** | [**\Schematic\Model\BillingPriceView**](BillingPriceView.md) |  | [optional]
**metered_yearly_price** | [**\Schematic\Model\BillingPriceView**](BillingPriceView.md) |  | [optional]
**metric_period** | [**\Schematic\Model\MetricPeriod**](MetricPeriod.md) |  | [optional]
**metric_period_month_reset** | [**\Schematic\Model\MetricPeriodMonthReset**](MetricPeriodMonthReset.md) |  | [optional]
**plan** | [**\Schematic\Model\PlanResponseData**](PlanResponseData.md) |  | [optional]
**plan_id** | **string** |  |
**price_behavior** | [**\Schematic\Model\EntitlementPriceBehavior**](EntitlementPriceBehavior.md) |  | [optional]
**rule_id** | **string** |  |
**rule_id_usage_exceeded** | **string** |  | [optional]
**soft_limit** | **int** |  | [optional]
**updated_at** | **\DateTime** |  |
**usage_based_product** | [**\Schematic\Model\BillingProductResponseData**](BillingProductResponseData.md) |  | [optional]
**usage_quantity** | **int** | The committed unit quantity for this entitlement. For custom plans this is the quantity the company is contractually committed to; for standard plans it is the quantity pre-filled when subscribing. Only applies to pay-in-advance entitlements. Note: this is not yet enforced/auto-provisioned as a true default — it is currently stored for downstream billing use. | [optional]
**value_bool** | **bool** |  | [optional]
**value_credit** | [**\Schematic\Model\BillingCreditResponseData**](BillingCreditResponseData.md) |  | [optional]
**value_numeric** | **int** |  | [optional]
**value_trait** | [**\Schematic\Model\EntityTraitDefinitionResponseData**](EntityTraitDefinitionResponseData.md) |  | [optional]
**value_trait_id** | **string** |  | [optional]
**value_type** | [**\Schematic\Model\EntitlementValueType**](EntitlementValueType.md) |  |
**warning_tiers** | [**\Schematic\Model\WarningTierResponseData[]**](WarningTierResponseData.md) |  |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
