# # UserUsageDetailResponseData

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**credits** | [**\Schematic\Model\UserCreditUsageResponseData[]**](UserCreditUsageResponseData.md) | The user&#39;s net credit consumption within the window |
**daily_credit_points** | [**\Schematic\Model\UserDailyCreditPointResponseData[]**](UserDailyCreditPointResponseData.md) | The user&#39;s net credit consumption by UTC day |
**daily_points** | [**\Schematic\Model\UserDailyUsagePointResponseData[]**](UserDailyUsagePointResponseData.md) | The user&#39;s per-feature usage by UTC day |
**end_time** | **\DateTime** | End of the usage window (exclusive) |
**feature_totals** | [**\Schematic\Model\UserFeatureUsageResponseData[]**](UserFeatureUsageResponseData.md) | The user&#39;s per-feature usage totals within the window |
**start_time** | **\DateTime** | Start of the usage window |
**user** | [**\Schematic\Model\UserResponseData**](UserResponseData.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
