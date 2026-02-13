# # CreditCompanyGrantView

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**billing_credit_bundle_id** | **string** |  | [optional]
**billing_credit_id** | **string** |  |
**company_id** | **string** |  |
**company_name** | **string** |  |
**created_at** | **\DateTime** |  |
**credit_description** | **string** |  |
**credit_icon** | **string** |  | [optional]
**credit_name** | **string** |  |
**exhausted_at** | **\DateTime** |  | [optional]
**expires_at** | **\DateTime** |  | [optional]
**expiry_type** | [**\Schematic\Model\BillingCreditExpiryType**](BillingCreditExpiryType.md) |  | [optional]
**expiry_unit** | [**\Schematic\Model\BillingCreditExpiryUnit**](BillingCreditExpiryUnit.md) |  | [optional]
**expiry_unit_count** | **int** |  | [optional]
**grant_reason** | [**\Schematic\Model\BillingCreditGrantReason**](BillingCreditGrantReason.md) |  |
**id** | **string** |  |
**plan_id** | **string** |  | [optional]
**plan_name** | **string** |  | [optional]
**plural_name** | **string** |  | [optional]
**price** | [**\Schematic\Model\BillingProductPriceResponseData**](BillingProductPriceResponseData.md) |  | [optional]
**quantity** | **int** |  |
**quantity_remaining** | **float** |  |
**quantity_used** | **float** |  |
**renewal_enabled** | **bool** |  |
**renewal_period** | [**\Schematic\Model\BillingPlanCreditGrantResetCadence**](BillingPlanCreditGrantResetCadence.md) |  | [optional]
**singular_name** | **string** |  | [optional]
**source_label** | **string** |  |
**transfers** | [**\Schematic\Model\CreditTransferView[]**](CreditTransferView.md) |  | [optional]
**updated_at** | **\DateTime** |  |
**valid_from** | **\DateTime** |  | [optional]
**zeroed_out_date** | **\DateTime** |  | [optional]
**zeroed_out_reason** | [**\Schematic\Model\BillingCreditGrantZeroedOutReason**](BillingCreditGrantZeroedOutReason.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
