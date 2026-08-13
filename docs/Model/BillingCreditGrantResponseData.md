# # BillingCreditGrantResponseData

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**company_id** | **string** |  |
**company_license_id** | **string** | The license instance this grant was issued for. Set only when a per-license plan grant issued it; null on a plan&#39;s own grant. | [optional]
**company_name** | **string** |  |
**created_at** | **\DateTime** |  |
**credit_icon** | **string** |  | [optional]
**credit_id** | **string** |  |
**credit_name** | **string** |  |
**currency** | **string** |  | [optional]
**expires_at** | **\DateTime** |  | [optional]
**grant_reason** | [**\Schematic\Model\BillingCreditGrantReason**](BillingCreditGrantReason.md) |  |
**id** | **string** |  |
**license_name** | **string** | Name of the license this grant was issued for, when it came from a per-license plan grant. | [optional]
**plan_id** | **string** |  | [optional]
**plan_name** | **string** |  | [optional]
**price** | [**\Schematic\Model\BillingPriceResponseData**](BillingPriceResponseData.md) |  | [optional]
**quantity** | **float** |  |
**quantity_remaining** | **float** |  |
**quantity_used** | **float** |  |
**renewal_enabled** | **bool** |  |
**renewal_period** | [**\Schematic\Model\BillingPlanCreditGrantResetCadence**](BillingPlanCreditGrantResetCadence.md) |  | [optional]
**reserved** | **float** |  | [optional]
**settled** | **float** |  | [optional]
**source_grant_id** | **string** | For rollover grants, the ID of the source grant that this grant rolled from. | [optional]
**source_label** | **string** |  |
**transfers** | [**\Schematic\Model\CreditTransferResponseData[]**](CreditTransferResponseData.md) |  | [optional]
**updated_at** | **\DateTime** |  |
**valid_from** | **\DateTime** |  | [optional]
**zeroed_out_date** | **\DateTime** |  | [optional]
**zeroed_out_reason** | [**\Schematic\Model\BillingCreditGrantZeroedOutReason**](BillingCreditGrantZeroedOutReason.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
