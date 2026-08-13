# # UserFeatureUsageResponseData

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**feature** | [**\Schematic\Model\FeatureResponseData**](FeatureResponseData.md) |  | [optional]
**last_seen** | **\DateTime** | When the user last used the feature within the window |
**share** | **float** | This row&#39;s fraction (0-1) of the company&#39;s total usage of the feature within the window, including unattributed usage |
**user** | [**\Schematic\Model\UserResponseData**](UserResponseData.md) | The user the usage is attributed to; null for usage from events sent without a user | [optional]
**user_id** | **string** | The user the usage is attributed to; null for unattributed usage | [optional]
**value** | **int** | The user&#39;s usage of the feature within the window |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
