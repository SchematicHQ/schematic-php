# # FeatureUsageResponseData

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**access** | **bool** | Whether further usage is permitted. |
**allocation** | **int** | The maximum amount of usage that is permitted; a null value indicates that unlimited usage is permitted. | [optional]
**allocation_type** | **string** | The type of allocation that is being used. |
**entitlement_expiration_date** | **\DateTime** |  | [optional]
**entitlement_id** | **string** |  |
**entitlement_type** | **string** |  |
**feature** | [**\Schematic\Model\FeatureDetailResponseData**](FeatureDetailResponseData.md) |  | [optional]
**metric_reset_at** | **\DateTime** | The time at which the metric will reset. | [optional]
**month_reset** | **string** | If the period is current_month, when the month resets. | [optional]
**monthly_usage_based_price** | [**\Schematic\Model\BillingPriceView**](BillingPriceView.md) |  | [optional]
**period** | **string** | The period over which usage is measured. | [optional]
**plan** | [**\Schematic\Model\PlanResponseData**](PlanResponseData.md) |  | [optional]
**price_behavior** | **string** |  | [optional]
**usage** | **int** | The amount of usage that has been consumed; a null value indicates that usage is not being measured. | [optional]
**yearly_usage_based_price** | [**\Schematic\Model\BillingPriceView**](BillingPriceView.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
