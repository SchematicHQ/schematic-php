# # FeatureEntitlement

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**allocation** | **int** | If the company has a numeric entitlement for this feature, the allocated amount | [optional]
**credit_id** | **string** | If the company has a credit-based entitlement for this feature, the ID of the credit | [optional]
**credit_remaining** | **float** | If the company has a credit-based entitlement for this feature, the remaining credit amount | [optional]
**credit_total** | **float** | If the company has a credit-based entitlement for this feature, the total credit amount | [optional]
**credit_used** | **float** | If the company has a credit-based entitlement for this feature, the amount of credit used | [optional]
**event_name** | **string** | If the feature is event-based, the name of the event tracked for usage | [optional]
**feature_id** | **string** | The ID of the feature |
**feature_key** | **string** | The key of the flag associated with the feature |
**metric_period** | **string** | For event-based feature entitlements, the period over which usage is tracked | [optional]
**metric_reset_at** | **\DateTime** | For event-based feature entitlements, when the usage period will reset | [optional]
**month_reset** | **string** | For event-based feature entitlements that have a monthly period, whether that monthly reset is based on the calendar month or a billing cycle | [optional]
**soft_limit** | **int** | For usage-based pricing, the soft limit for overage charges or the next tier boundary | [optional]
**usage** | **int** | If the company has a numeric entitlement for this feature, the current usage amount | [optional]
**value_type** | [**EntitlementValueType**](EntitlementValueType.md) |  |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
