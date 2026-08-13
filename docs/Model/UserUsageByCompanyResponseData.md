# # UserUsageByCompanyResponseData

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**credits** | [**\Schematic\Model\UserCreditUsageResponseData[]**](UserCreditUsageResponseData.md) | Per-user net credit consumption within the window |
**end_time** | **\DateTime** | End of the usage window (exclusive) |
**rows** | [**\Schematic\Model\UserFeatureUsageResponseData[]**](UserFeatureUsageResponseData.md) | Per-user, per-feature usage within the window; rows for a feature sum to the company total |
**start_time** | **\DateTime** | Start of the usage window |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
