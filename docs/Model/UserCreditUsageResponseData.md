# # UserCreditUsageResponseData

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**billing_credit_id** | **string** |  |
**credit_name** | **string** | The display name of the credit type |
**credits_used** | **float** | The user&#39;s net track-driven consumption of the credit within the window (draws minus refunds) |
**share** | **float** | This row&#39;s fraction (0-1) of the company&#39;s total track-driven consumption of the credit within the window, including unattributed consumption |
**user** | [**\Schematic\Model\UserResponseData**](UserResponseData.md) | The user the consumption is attributed to; null for consumption from events sent without a user | [optional]
**user_id** | **string** | The user the consumption is attributed to; null for unattributed consumption | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
