# # CreditSpendPolicy

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**consumed** | **float** | How much of the limit is already spent in the current period | [optional]
**credit_id** | **string** | The credit the policy limits |
**id** | **string** | The ID of the policy |
**kind** | **string** | How the limit is applied |
**label** | **string** | The name the account gave the policy | [optional]
**limit** | **float** | The ceiling, in credits |
**resets_at** | **\DateTime** | For a windowed limit, when the current period ends and consumed no longer applies | [optional]
**scope** | [**\Schematic\Model\CreditSpendPolicyScope**](CreditSpendPolicyScope.md) | Whether the policy limits the company or one user |
**window** | [**\Schematic\Model\CreditSpendWindow**](CreditSpendWindow.md) | For a windowed limit, the period it accumulates over | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
