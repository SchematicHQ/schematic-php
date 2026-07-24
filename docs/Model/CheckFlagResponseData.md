# # CheckFlagResponseData

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**company_id** | **string** | If company keys were provided and matched a company, its ID | [optional]
**entitlement** | [**\Schematic\Model\FeatureEntitlement**](FeatureEntitlement.md) | If a feature entitlement rule was matched, its entitlement details | [optional]
**error** | **string** | If an error occurred while checking the flag, the error message | [optional]
**feature_allocation** | **int** | Deprecated: Use Entitlement.Allocation instead. | [optional]
**feature_usage** | **int** | Deprecated: Use Entitlement.Usage instead. | [optional]
**feature_usage_event** | **string** | Deprecated: Use Entitlement.EventName instead. | [optional]
**feature_usage_period** | [**\Schematic\Model\MetricPeriod**](MetricPeriod.md) | Deprecated: Use Entitlement.MetricPeriod instead. | [optional]
**feature_usage_reset_at** | **\DateTime** | Deprecated: Use Entitlement.MetricResetAt instead. | [optional]
**flag** | **string** | The key used to check the flag |
**flag_id** | **string** | If a flag was found, its ID | [optional]
**reason** | **string** | A human-readable explanation of the result |
**rule_id** | **string** | If a rule was found, its ID | [optional]
**rule_type** | [**\Schematic\Model\RuleType**](RuleType.md) | If a rule was found, its type | [optional]
**user_id** | **string** | If user keys were provided and matched a user, its ID | [optional]
**value** | **bool** | A boolean flag check result; for feature entitlements, this represents whether further consumption of the feature is permitted |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
