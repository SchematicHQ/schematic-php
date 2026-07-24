# # BillingPlanCreditGrantResponseData

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**auto_topup_amount** | **int** |  | [optional]
**auto_topup_amount_type** | **string** |  | [optional]
**auto_topup_availability** | [**\Schematic\Model\BillingCreditAutoTopupAvailability**](BillingCreditAutoTopupAvailability.md) |  |
**auto_topup_enabled** | **bool** | Derived from auto_topup_availability; use that instead. |
**auto_topup_expiry_type** | [**\Schematic\Model\BillingCreditExpiryType**](BillingCreditExpiryType.md) |  | [optional]
**auto_topup_expiry_unit** | [**\Schematic\Model\BillingCreditExpiryUnit**](BillingCreditExpiryUnit.md) |  | [optional]
**auto_topup_expiry_unit_count** | **int** |  | [optional]
**auto_topup_self_service** | **bool** | Derived from auto_topup_availability; use that instead. |
**auto_topup_threshold_credits** | **int** |  | [optional]
**auto_topup_threshold_percent** | **int** |  | [optional]
**can_buy_bundles** | **bool** | Whether buyers can purchase one-time credit bundles on this grant, independent of auto top-up availability. |
**created_at** | **\DateTime** |  |
**credit** | [**\Schematic\Model\BillingCreditResponseData**](BillingCreditResponseData.md) |  | [optional]
**credit_amount** | **int** |  |
**credit_id** | **string** |  |
**credit_name** | **string** | Use credit.name from the nested credit object instead |
**credit_plural_name** | **string** | Use plural_name from the nested credit object instead | [optional]
**credit_singular_name** | **string** | Use singular_name from the nested credit object instead | [optional]
**expiry_type** | [**\Schematic\Model\BillingCreditExpiryType**](BillingCreditExpiryType.md) |  | [optional]
**expiry_unit** | [**\Schematic\Model\BillingCreditExpiryUnit**](BillingCreditExpiryUnit.md) |  | [optional]
**expiry_unit_count** | **int** |  | [optional]
**id** | **string** |  |
**plan** | [**\Schematic\Model\PreviewObjectResponseData**](PreviewObjectResponseData.md) |  | [optional]
**plan_id** | **string** |  |
**plan_name** | **string** | Use plan.name from the nested plan object instead |
**plan_version_id** | **string** |  | [optional]
**reset_cadence** | [**\Schematic\Model\BillingPlanCreditGrantResetCadence**](BillingPlanCreditGrantResetCadence.md) |  | [optional]
**reset_start** | [**\Schematic\Model\BillingPlanCreditGrantResetStart**](BillingPlanCreditGrantResetStart.md) |  | [optional]
**reset_type** | [**\Schematic\Model\BillingPlanCreditGrantResetType**](BillingPlanCreditGrantResetType.md) |  | [optional]
**rollover_percentage** | **int** | Percentage of unused credits that carry over when this grant resets. Only meaningful when reset_type is plan_period. |
**updated_at** | **\DateTime** |  |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
