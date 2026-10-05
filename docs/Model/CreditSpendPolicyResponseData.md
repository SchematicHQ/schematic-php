# # CreditSpendPolicyResponseData

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**billing_credit_id** | **string** |  |
**company_id** | **string** |  | [optional]
**consumed** | **float** | Credits spent in the current window. Set only by the usage route, and only for a window cap. | [optional]
**created_at** | **\DateTime** |  |
**headroom** | **float** | Credits left in the current window. Set only by the usage route, and only for a window cap. | [optional]
**id** | **string** |  |
**label** | **string** |  | [optional]
**max_per_draw** | **float** |  | [optional]
**resets_at** | **\DateTime** | When the current window ends. Set only by the usage route, and only for a window cap. | [optional]
**scope_type** | [**\Schematic\Model\CreditSpendPolicyScope**](CreditSpendPolicyScope.md) |  |
**updated_at** | **\DateTime** |  |
**user_id** | **string** |  | [optional]
**window_amount** | **float** |  | [optional]
**window_count** | **int** |  |
**window_unit** | [**\Schematic\Model\CreditSpendWindowUnit**](CreditSpendWindowUnit.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
