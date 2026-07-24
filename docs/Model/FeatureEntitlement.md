# # FeatureEntitlement

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**allocation** | **int** | If the company has a numeric entitlement for this feature, the allocated amount | [optional]
**consumption_rate** | **float** | If the company has a credit-based entitlement for this feature, the credit cost per unit of usage | [optional]
**credit_id** | **string** | If the company has a credit-based entitlement for this feature, the ID of the credit | [optional]
**credit_remaining** | **float** | If the company has a credit-based entitlement for this feature, the credit available to fund new consumption or a new lease hold — open lease holds are excluded. Clients that hold a lease should gate on this plus their own unspent hold; clients with no lease awareness should use credit_settled instead | [optional]
**credit_reserved** | **float** | If the company has a credit-based entitlement for this feature, the unspent amount held by an open credit lease. Returns to credit_remaining when the lease is released | [optional]
**credit_settled** | **float** | If the company has a credit-based entitlement for this feature, the balance net of actual consumption, unaffected by open lease holds (credit_remaining plus credit_reserved). The number to display to end users | [optional]
**credit_total** | **float** | If the company has a credit-based entitlement for this feature, the total credit amount | [optional]
**credit_used** | **float** | If the company has a credit-based entitlement for this feature, the amount of credit used | [optional]
**event_name** | **string** | If the feature is event-based, the name of the event tracked for usage | [optional]
**event_subtype** | **string** | For event-based or credit-metered feature entitlements, the event subtype whose usage is tracked | [optional]
**feature_id** | **string** | The ID of the feature |
**feature_key** | **string** | The key of the flag associated with the feature |
**metric_period** | [**\Schematic\Model\MetricPeriod**](MetricPeriod.md) |  | [optional]
**metric_reset_at** | **\DateTime** | For event-based feature entitlements, when the usage period will reset | [optional]
**month_reset** | [**\Schematic\Model\MetricPeriodMonthReset**](MetricPeriodMonthReset.md) |  | [optional]
**soft_limit** | **int** | For usage-based pricing, the soft limit for overage charges or the next tier boundary | [optional]
**usage** | **int** | If the company has a numeric entitlement for this feature, the current usage amount | [optional]
**value_type** | [**\Schematic\Model\EntitlementValueType**](EntitlementValueType.md) |  |
**warning_tiers** | [**\Schematic\Model\WarningTier[]**](WarningTier.md) | Customer-defined usage warning thresholds configured on this entitlement | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
