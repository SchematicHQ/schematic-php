# # CreateBillingPlanCreditGrantRequestBody

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**apply_to_existing** | **bool** |  | [optional]
**auto_topup_amount** | **int** |  | [optional]
**auto_topup_amount_type** | [**\Schematic\Model\CreditAutoTopupAmountType**](CreditAutoTopupAmountType.md) |  | [optional]
**auto_topup_availability** | [**\Schematic\Model\BillingCreditAutoTopupAvailability**](BillingCreditAutoTopupAvailability.md) |  | [optional]
**auto_topup_enabled** | **bool** |  | [optional]
**auto_topup_expiry_type** | [**\Schematic\Model\BillingCreditExpiryType**](BillingCreditExpiryType.md) |  | [optional]
**auto_topup_expiry_unit** | [**\Schematic\Model\BillingCreditExpiryUnit**](BillingCreditExpiryUnit.md) |  | [optional]
**auto_topup_expiry_unit_count** | **int** |  | [optional]
**auto_topup_self_service** | **bool** |  | [optional]
**auto_topup_threshold_credits** | **int** |  | [optional]
**auto_topup_threshold_percent** | **int** |  | [optional]
**can_buy_bundles** | **bool** |  | [optional]
**credit_amount** | **int** |  |
**credit_id** | **string** |  |
**expiry_type** | [**\Schematic\Model\BillingCreditExpiryType**](BillingCreditExpiryType.md) |  | [optional]
**expiry_unit** | [**\Schematic\Model\BillingCreditExpiryUnit**](BillingCreditExpiryUnit.md) |  | [optional]
**expiry_unit_count** | **int** |  | [optional]
**plan_id** | **string** |  |
**plan_version_id** | **string** |  | [optional]
**reset_cadence** | [**\Schematic\Model\BillingPlanCreditGrantResetCadence**](BillingPlanCreditGrantResetCadence.md) |  |
**reset_start** | [**\Schematic\Model\BillingPlanCreditGrantResetStart**](BillingPlanCreditGrantResetStart.md) |  |
**reset_type** | [**\Schematic\Model\BillingPlanCreditGrantResetType**](BillingPlanCreditGrantResetType.md) |  | [optional]
**rollover_percentage** | **int** | Percentage of unused credits that carry over when this grant resets. Only applies when reset_type is plan_period. Rolled-over credits expire at the next reset and are not rolled again. Defaults to 0. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
