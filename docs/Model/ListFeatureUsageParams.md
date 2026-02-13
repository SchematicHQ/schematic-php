# # ListFeatureUsageParams

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**company_id** | **string** |  | [optional]
**company_keys** | **array<string,string>** |  | [optional]
**feature_ids** | **string[]** |  | [optional]
**include_usage_aggregation** | **bool** | Include time-bucketed usage aggregation (today, this week, this month, billing period) for credit-based entitlements. Defaults to false for performance. | [optional]
**limit** | **int** | Page limit (default 100) | [optional]
**offset** | **int** | Page offset (default 0) | [optional]
**q** | **string** |  | [optional]
**without_negative_entitlements** | **bool** |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
