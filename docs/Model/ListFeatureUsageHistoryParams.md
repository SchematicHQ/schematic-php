# # ListFeatureUsageHistoryParams

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**company_ids** | **string[]** | Restrict to these company IDs; omit for every company in the environment | [optional]
**end_time** | **\DateTime** | Exclusive end of the window; must fall on an hour boundary | [optional]
**feature_ids** | **string[]** | Restrict to these event features; omit for every event feature in the environment. Where several features measure the same event, each is reported separately and a page may carry more rows than the requested limit | [optional]
**granularity** | [**\Schematic\Model\TimeSeriesGranularity**](TimeSeriesGranularity.md) | Bucket the window; omit for a single total per company and feature | [optional]
**limit** | **int** | Page limit (default 100) | [optional]
**offset** | **int** | Page offset (default 0) | [optional]
**start_time** | **\DateTime** | Inclusive start of the window; must fall on an hour boundary | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
