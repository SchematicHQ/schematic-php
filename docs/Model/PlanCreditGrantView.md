# # PlanCreditGrantView

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**billing_credit_auto_topup_amount** | **int** |  | [optional]
**billing_credit_auto_topup_amount_type** | **string** |  | [optional]
**billing_credit_auto_topup_availability** | [**\Schematic\Model\BillingCreditAutoTopupAvailability**](BillingCreditAutoTopupAvailability.md) |  | [optional]
**billing_credit_auto_topup_enabled** | **bool** |  |
**billing_credit_auto_topup_expiry_type** | [**\Schematic\Model\BillingCreditExpiryType**](BillingCreditExpiryType.md) |  | [optional]
**billing_credit_auto_topup_expiry_unit** | [**\Schematic\Model\BillingCreditExpiryUnit**](BillingCreditExpiryUnit.md) |  | [optional]
**billing_credit_auto_topup_expiry_unit_count** | **int** |  | [optional]
**billing_credit_auto_topup_self_service** | **bool** |  |
**billing_credit_auto_topup_threshold_credits** | **int** |  | [optional]
**billing_credit_auto_topup_threshold_percent** | **int** |  | [optional]
**billing_credit_can_buy_bundles** | **bool** |  |
**company_credit_amount** | **int** |  |
**created_at** | **\DateTime** |  |
**credit** | [**\Schematic\Model\BillingCreditView**](BillingCreditView.md) |  | [optional]
**credit_amount** | **int** |  |
**credit_description** | **string** | Deprecated field, will be removed in the future. Use Credit.Description instead. |
**credit_icon** | **string** | Deprecated field, will be removed in the future. Use Credit.Icon instead. | [optional]
**credit_id** | **string** |  |
**credit_name** | **string** | Deprecated field, will be removed in the future. Use Credit.Name instead. |
**expiry_type** | [**\Schematic\Model\BillingCreditExpiryType**](BillingCreditExpiryType.md) |  | [optional]
**expiry_unit** | [**\Schematic\Model\BillingCreditExpiryUnit**](BillingCreditExpiryUnit.md) |  | [optional]
**expiry_unit_count** | **int** |  | [optional]
**id** | **string** |  |
**license_id** | **string** |  | [optional]
**plan** | [**\Schematic\Model\GenericPreviewObject**](GenericPreviewObject.md) |  | [optional]
**plan_id** | **string** |  |
**plan_version_id** | **string** |  | [optional]
**plural_name** | **string** | Deprecated field, will be removed in the future. Use Credit.PluralName instead. | [optional]
**reset_cadence** | [**\Schematic\Model\BillingPlanCreditGrantResetCadence**](BillingPlanCreditGrantResetCadence.md) |  | [optional]
**reset_start** | [**\Schematic\Model\BillingPlanCreditGrantResetStart**](BillingPlanCreditGrantResetStart.md) |  | [optional]
**reset_type** | [**\Schematic\Model\BillingPlanCreditGrantResetType**](BillingPlanCreditGrantResetType.md) |  |
**rollover_percentage** | **int** |  |
**scaling** | [**\Schematic\Model\PlanCreditGrantScaling**](PlanCreditGrantScaling.md) |  |
**singular_name** | **string** | Deprecated field, will be removed in the future. Use Credit.SingularName instead. | [optional]
**updated_at** | **\DateTime** |  |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
