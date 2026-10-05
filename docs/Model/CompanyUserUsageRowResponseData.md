# # CompanyUserUsageRowResponseData

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**last_seen** | **\DateTime** | When the user last used the feature within the window; null for the credits metric, which aggregates balances rather than timestamped events | [optional]
**share** | **float** | This row&#39;s fraction (0-1) of consumption within the window, including unattributed consumption |
**user** | [**\Schematic\Model\UserResponseData**](UserResponseData.md) | The user the consumption is attributed to; null for consumption from events sent without a user | [optional]
**user_id** | **string** | The user the consumption is attributed to; null for unattributed consumption | [optional]
**value** | **float** | The user&#39;s consumption of the metric within the window |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
