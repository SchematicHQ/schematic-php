# # CheckFlagResponseData

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**company_id** | **string** | If company keys were provided and matched a company, its ID | [optional]
**error** | **string** | If an error occurred while checking the flag, the error message | [optional]
**feature_allocation** | **int** | If a numeric feature entitlement rule was matched, its allocation | [optional]
**feature_usage** | **int** | If a numeric feature entitlement rule was matched, the company&#39;s usage | [optional]
**feature_usage_period** | **string** | For event-based feature entitlement rules, the period over which usage is tracked (current_month, current_day, current_week, all_time) | [optional]
**feature_usage_reset_at** | **\DateTime** | For event-based feature entitlement rules, when the usage period will reset | [optional]
**flag** | **string** | The key used to check the flag |
**flag_id** | **string** | If a flag was found, its ID | [optional]
**reason** | **string** | A human-readable explanation of the result |
**rule_id** | **string** | If a rule was found, its ID | [optional]
**rule_type** | **string** | If a rule was found, its type | [optional]
**user_id** | **string** | If user keys were provided and matched a user, its ID | [optional]
**value** | **bool** | A boolean flag check result; for feature entitlements, this represents whether further consumption of the feature is permitted |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
