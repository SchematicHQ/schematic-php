# # CompanyUserUsageMetricsResponseData

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**end_time** | **\DateTime** | End of the usage window (exclusive) |
**features** | [**\Schematic\Model\FeatureResponseData[]**](FeatureResponseData.md) | Event-based features the company has user-attributed usage for in the window; a feature with usage but no entitlement is still listed |
**has_credits** | **bool** | Whether the company consumed any credits in the window |
**start_time** | **\DateTime** | Start of the usage window |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
