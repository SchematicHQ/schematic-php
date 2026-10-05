# # BillingPlanCreditGrantPriceTierResponseData

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**from** | **int** | Lower bound of the tier, in credits per invoice (inclusive). |
**per_unit_price** | **int** | Price per credit in this tier, in the plan currency&#39;s smallest unit. | [optional]
**per_unit_price_decimal** | **string** | Price per credit in this tier as a decimal, for rates below one cent. | [optional]
**to** | **int** | Upper bound of the tier, in credits per invoice (inclusive). Null marks the final, unbounded tier. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
