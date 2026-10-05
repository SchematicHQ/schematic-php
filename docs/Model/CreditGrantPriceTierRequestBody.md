# # CreditGrantPriceTierRequestBody

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**per_unit_price** | **int** | Price per credit in this tier, in the plan currency&#39;s smallest unit. | [optional]
**per_unit_price_decimal** | **string** | Price per credit in this tier as a decimal in the plan currency&#39;s smallest unit, for prices below one cent. | [optional]
**up_to** | **int** | Inclusive upper bound of this tier, counted in credits per invoice. Null marks the final, unbounded tier. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
