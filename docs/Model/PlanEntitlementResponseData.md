# # PlanEntitlementResponseData

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**billing_threshold** | **int** |  | [optional]
**consumption_rate** | **float** |  | [optional]
**created_at** | **\DateTime** |  |
**environment_id** | **string** |  |
**feature** | [**\Schematic\Model\FeatureResponseData**](FeatureResponseData.md) |  | [optional]
**feature_id** | **string** |  |
**id** | **string** |  |
**metered_monthly_price** | [**\Schematic\Model\BillingPriceView**](BillingPriceView.md) |  | [optional]
**metered_yearly_price** | [**\Schematic\Model\BillingPriceView**](BillingPriceView.md) |  | [optional]
**metric_period** | **string** |  | [optional]
**metric_period_month_reset** | **string** |  | [optional]
**plan** | [**\Schematic\Model\PlanResponseData**](PlanResponseData.md) |  | [optional]
**plan_id** | **string** |  |
**price_behavior** | [**\Schematic\Model\EntitlementPriceBehavior**](EntitlementPriceBehavior.md) |  | [optional]
**rule_id** | **string** |  |
**rule_id_usage_exceeded** | **string** |  | [optional]
**soft_limit** | **int** |  | [optional]
**updated_at** | **\DateTime** |  |
**usage_based_product** | [**\Schematic\Model\BillingProductResponseData**](BillingProductResponseData.md) |  | [optional]
**value_bool** | **bool** |  | [optional]
**value_credit** | [**\Schematic\Model\BillingCreditResponseData**](BillingCreditResponseData.md) |  | [optional]
**value_numeric** | **int** |  | [optional]
**value_trait** | [**\Schematic\Model\EntityTraitDefinitionResponseData**](EntityTraitDefinitionResponseData.md) |  | [optional]
**value_trait_id** | **string** |  | [optional]
**value_type** | [**\Schematic\Model\EntitlementValueType**](EntitlementValueType.md) |  |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
