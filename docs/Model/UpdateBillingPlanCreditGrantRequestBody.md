# # UpdateBillingPlanCreditGrantRequestBody

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
**company_credit_amount** | **int** | Credits granted once per company on top of the per-license amount. Only valid when the grant scales per license. | [optional]
**credit_amount** | **int** |  | [optional]
**expiry_type** | [**\Schematic\Model\BillingCreditExpiryType**](BillingCreditExpiryType.md) |  | [optional]
**expiry_unit** | [**\Schematic\Model\BillingCreditExpiryUnit**](BillingCreditExpiryUnit.md) |  | [optional]
**expiry_unit_count** | **int** |  | [optional]
**license_id** | **string** | The license whose quantity scales this grant. Cleared when the grant moves off per-license scaling. | [optional]
**reset_cadence** | [**\Schematic\Model\BillingPlanCreditGrantResetCadence**](BillingPlanCreditGrantResetCadence.md) |  |
**reset_start** | [**\Schematic\Model\BillingPlanCreditGrantResetStart**](BillingPlanCreditGrantResetStart.md) |  |
**reset_type** | [**\Schematic\Model\BillingPlanCreditGrantResetType**](BillingPlanCreditGrantResetType.md) |  | [optional]
**rollover_percentage** | **int** | Percentage of unused credits that carry over when this grant resets. Only applies when reset_type is plan_period. Rolled-over credits expire at the next reset and are not rolled again. | [optional]
**scaling** | [**\Schematic\Model\PlanCreditGrantScaling**](PlanCreditGrantScaling.md) | Whether the grant is a fixed amount per company, or issued once per license the company holds. Changing this re-issues the credits companies already hold for this grant. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
