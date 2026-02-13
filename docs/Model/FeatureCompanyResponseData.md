# # FeatureCompanyResponseData

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**access** | **bool** | Whether further usage is permitted. |
**allocation** | **int** | The maximum amount of usage that is permitted; a null value indicates that unlimited usage is permitted or that this is a credit-based entitlement (use credit_remaining instead). | [optional]
**allocation_type** | [**EntitlementValueType**](EntitlementValueType.md) |  |
**company** | [**\Schematic\Model\CompanyDetailResponseData**](CompanyDetailResponseData.md) |  | [optional]
**company_override** | [**\Schematic\Model\CompanyOverrideResponseData**](CompanyOverrideResponseData.md) |  | [optional]
**credit_consumption_rate** | **float** | The rate at which credits are consumed per unit of usage | [optional]
**credit_grant_counts** | **array<string,float>** |  | [optional]
**credit_grant_details** | [**\Schematic\Model\CreditGrantDetail[]**](CreditGrantDetail.md) |  | [optional]
**credit_grant_reason** | [**BillingCreditGrantReason**](BillingCreditGrantReason.md) |  | [optional]
**credit_remaining** | **float** |  | [optional]
**credit_total** | **float** | Deprecated: Use credit_remaining instead. | [optional]
**credit_type_icon** | **string** | Icon identifier for the credit type | [optional]
**credit_usage** | [**\Schematic\Model\CreditUsage**](CreditUsage.md) |  | [optional]
**credit_usage_aggregation** | [**\Schematic\Model\FeatureCompanyResponseDataCreditUsageAggregation**](FeatureCompanyResponseDataCreditUsageAggregation.md) |  | [optional]
**credit_used** | **float** |  | [optional]
**effective_limit** | **int** | Effective limit for usage calculations. For overage pricing, this is the soft limit where overage charges begin. For tiered pricing, this is the first tier boundary. For other pricing models, this is the base allocation. Used to calculate usage percentages and determine access thresholds. | [optional]
**effective_price** | **float** | Per-unit price for current usage scenario | [optional]
**entitlement_expiration_date** | **\DateTime** |  | [optional]
**entitlement_id** | **string** |  |
**entitlement_source** | **string** | Source of the entitlement (plan or company_override) | [optional]
**entitlement_type** | [**\Schematic\Model\EntitlementType**](EntitlementType.md) |  |
**feature** | [**\Schematic\Model\FeatureDetailResponseData**](FeatureDetailResponseData.md) |  | [optional]
**has_valid_allocation** | **bool** | Whether a valid allocation exists | [optional]
**is_unlimited** | **bool** | Whether this is an unlimited allocation | [optional]
**metric_reset_at** | **\DateTime** | The time at which the metric will reset. | [optional]
**month_reset** | **string** | If the period is current_month, when the month resets. | [optional]
**monthly_usage_based_price** | [**\Schematic\Model\BillingPriceView**](BillingPriceView.md) |  | [optional]
**overuse** | **int** | Amount of usage exceeding soft limit (overage pricing only) | [optional]
**percent_used** | **float** | Percentage of allocation consumed (0-100+) | [optional]
**period** | **string** | The period over which usage is measured. | [optional]
**plan** | [**\Schematic\Model\PlanResponseData**](PlanResponseData.md) |  | [optional]
**plan_entitlement** | [**\Schematic\Model\PlanEntitlementResponseData**](PlanEntitlementResponseData.md) |  | [optional]
**price_behavior** | [**\Schematic\Model\EntitlementPriceBehavior**](EntitlementPriceBehavior.md) |  | [optional]
**soft_limit** | **int** | The soft limit for the feature usage. Available only for overage price behavior | [optional]
**usage** | **int** | The amount of usage that has been consumed; a null value indicates that usage is not being measured or that this is a credit-based entitlement (use credit_used instead). | [optional]
**yearly_usage_based_price** | [**\Schematic\Model\BillingPriceView**](BillingPriceView.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
