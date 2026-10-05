# # EventBodyTrack

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**company** | **array<string,string>** | Key-value pairs to identify company associated with track event | [optional]
**event** | **string** | The name of the type of track event |
**lease_id** | **string** | Credit lease ID this track event is redeeming against | [optional]
**quantity** | **int** | Optionally specify the quantity of the event | [optional]
**reservation_id** | **string** | Credit reservation ID this track event settles. lease_id takes precedence when both are set | [optional]
**traits** | **object** | A map of trait names to trait values | [optional]
**user** | **array<string,string>** | Key-value pairs to identify user associated with track event | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
