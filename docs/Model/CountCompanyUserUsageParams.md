# # CountCompanyUserUsageParams

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**company_id** | **string** | Company to break usage down for | [optional]
**end_time** | **\DateTime** | End of the usage window (exclusive); defaults to now | [optional]
**feature_id** | **string** | The event-based feature to break down; required when metric is feature | [optional]
**limit** | **int** | Page limit (default 100) | [optional]
**metric** | [**\Schematic\Model\UserUsageMetric**](UserUsageMetric.md) | Which metric to break usage down by | [optional]
**offset** | **int** | Page offset (default 0) | [optional]
**start_time** | **\DateTime** | Start of the usage window; defaults to 30 days before the end | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
