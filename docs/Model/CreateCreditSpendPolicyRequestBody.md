# # CreateCreditSpendPolicyRequestBody

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**billing_credit_id** | **string** |  |
**company_id** | **string** | The company the cap applies to. Set exactly one of company_id and user_id. | [optional]
**label** | **string** |  | [optional]
**max_per_draw** | **float** | The largest number of credits a single draw may spend. Set either this or window_amount. | [optional]
**user_id** | **string** | The user the cap applies to. Set exactly one of company_id and user_id. | [optional]
**window_amount** | **float** | The number of credits the company or user may spend in one window. Set either this or max_per_draw. | [optional]
**window_unit** | [**\Schematic\Model\CreditSpendWindowUnit**](CreditSpendWindowUnit.md) | The window that window_amount applies to: one UTC hour or one UTC day. Required with window_amount. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
