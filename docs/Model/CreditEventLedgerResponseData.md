# # CreditEventLedgerResponseData

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**amount** | **float** |  |
**auto_topup_log_id** | **string** |  | [optional]
**billing_credit_bundle_id** | **string** |  | [optional]
**billing_credit_id** | **string** |  |
**company** | [**\Schematic\Model\CompanyLedgerResponseData**](CompanyLedgerResponseData.md) |  | [optional]
**company_id** | **string** |  |
**credit** | [**\Schematic\Model\BillingCreditLedgerResponseData**](BillingCreditLedgerResponseData.md) |  | [optional]
**credit_name** | **string** |  |
**environment_id** | **string** |  |
**event_at** | **\DateTime** |  |
**event_id** | **string** |  |
**event_type** | [**\Schematic\Model\CreditEventType**](CreditEventType.md) |  |
**expiry_type** | [**\Schematic\Model\BillingCreditExpiryType**](BillingCreditExpiryType.md) |  | [optional]
**expiry_unit** | [**\Schematic\Model\BillingCreditExpiryUnit**](BillingCreditExpiryUnit.md) |  | [optional]
**expiry_unit_count** | **int** |  | [optional]
**feature** | [**\Schematic\Model\FeatureLedgerResponseData**](FeatureLedgerResponseData.md) |  | [optional]
**feature_id** | **string** |  | [optional]
**from_grant_id** | **string** |  | [optional]
**grant_expires_at** | **\DateTime** |  | [optional]
**grant_id** | **string** |  | [optional]
**grant_quantity** | **float** |  | [optional]
**grant_quantity_remaining** | **float** |  | [optional]
**grant_reason** | [**\Schematic\Model\BillingCreditGrantReason**](BillingCreditGrantReason.md) |  | [optional]
**grant_valid_from** | **\DateTime** |  | [optional]
**plan_id** | **string** |  | [optional]
**quantity_consumed** | **float** |  | [optional]
**quantity_remaining_at_zero_out** | **float** |  | [optional]
**source_id** | **int** |  |
**to_grant_id** | **string** |  | [optional]
**usage_event_id** | **string** |  | [optional]
**usage_reason** | [**\Schematic\Model\CreditUsageReason**](CreditUsageReason.md) |  | [optional]
**zeroed_out_reason** | [**\Schematic\Model\BillingCreditGrantZeroedOutReason**](BillingCreditGrantZeroedOutReason.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
