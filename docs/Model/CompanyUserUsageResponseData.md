# # CompanyUserUsageResponseData

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**end_time** | **\DateTime** | End of the usage window (exclusive) |
**rows** | [**\Schematic\Model\CompanyUserUsageRowResponseData[]**](CompanyUserUsageRowResponseData.md) | This page of per-user consumption within the window, heaviest first |
**start_time** | **\DateTime** | Start of the usage window |
**top_user_share** | **float** | The heaviest user&#39;s fraction (0-1) of consumption, measured across every user in the window and not just this page |
**total** | **float** | Consumption across every user in the window including unattributed, not just this page |
**unattributed** | [**\Schematic\Model\CompanyUserUsageRowResponseData**](CompanyUserUsageRowResponseData.md) | Consumption from events sent without a user; not a user, so it is excluded from rows and from the count, and returned on every page. Null when the window has none | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
