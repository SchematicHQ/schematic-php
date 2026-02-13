# # CreateOrUpdateConditionRequestBody

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**comparison_trait_id** | **string** | Optionally provide a trait ID to compare a metric or trait value against instead of a value | [optional]
**condition_type** | **string** |  |
**credit_cost** | **float** | Cost of credit to use to measure this condition | [optional]
**credit_id** | **string** | ID of credit to use to measure this condition | [optional]
**event_subtype** | **string** | Name of track event type used to measure this condition | [optional]
**id** | **string** |  | [optional]
**metric_period** | **string** | Period of time over which to measure the track event metric | [optional]
**metric_period_month_reset** | **string** | When metric_period&#x3D;current_month, specify whether the month restarts based on the calendar month or the billing period | [optional]
**metric_value** | **int** | Value to compare the track event metric against | [optional]
**operator** | **string** |  |
**resource_ids** | **string[]** | List of resource IDs (companies, users, or plans) targeted by this condition |
**trait_id** | **string** | ID of trait to use to measure this condition | [optional]
**trait_value** | **string** | Value to compare the trait value against | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
