# # FeatureUsageHistoryResponseData

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**company_id** | **string** | Companies are identified by ID only. To report against your own identifiers, resolve them once via the companies API and cache the mapping; keys are not repeated on every row. |
**event_subtype** | **string** |  |
**feature_id** | **string** |  |
**period_end** | **\DateTime** | Exclusive end of the period this usage covers |
**period_start** | **\DateTime** | Inclusive start of the period this usage covers |
**usage** | **int** | Usage recorded within this period; an incremental total, not a running one |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
