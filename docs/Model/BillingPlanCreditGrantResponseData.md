# # BillingPlanCreditGrantResponseData

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**auto_topup_amount** | **int** |  | [optional]
**auto_topup_amount_type** | **string** |  | [optional]
**auto_topup_enabled** | **bool** |  |
**auto_topup_expiry_type** | [**\Schematic\Model\BillingCreditExpiryType**](BillingCreditExpiryType.md) |  | [optional]
**auto_topup_expiry_unit** | [**\Schematic\Model\BillingCreditExpiryUnit**](BillingCreditExpiryUnit.md) |  | [optional]
**auto_topup_expiry_unit_count** | **int** |  | [optional]
**auto_topup_threshold_percent** | **int** |  | [optional]
**created_at** | **\DateTime** |  |
**credit_amount** | **int** |  |
**credit_id** | **string** |  |
**credit_name** | **string** |  |
**credit_plural_name** | **string** |  | [optional]
**credit_singular_name** | **string** |  | [optional]
**expiry_type** | [**\Schematic\Model\BillingCreditExpiryType**](BillingCreditExpiryType.md) |  | [optional]
**expiry_unit** | [**\Schematic\Model\BillingCreditExpiryUnit**](BillingCreditExpiryUnit.md) |  | [optional]
**expiry_unit_count** | **int** |  | [optional]
**id** | **string** |  |
**plan** | [**\Schematic\Model\PreviewObjectResponseData**](PreviewObjectResponseData.md) |  | [optional]
**plan_id** | **string** |  |
**plan_name** | **string** | Use plan.name from the nested plan object instead |
**reset_cadence** | [**\Schematic\Model\BillingPlanCreditGrantResetCadence**](BillingPlanCreditGrantResetCadence.md) |  |
**reset_start** | [**\Schematic\Model\BillingPlanCreditGrantResetStart**](BillingPlanCreditGrantResetStart.md) |  |
**reset_type** | [**\Schematic\Model\BillingPlanCreditGrantResetType**](BillingPlanCreditGrantResetType.md) |  | [optional]
**updated_at** | **\DateTime** |  |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
