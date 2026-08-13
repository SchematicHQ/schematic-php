# # PublishPlanVersionRequestBody

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**activation_strategy** | [**\Schematic\Model\CustomPlanActivationStrategy**](CustomPlanActivationStrategy.md) |  | [optional]
**address** | [**\Schematic\Model\CustomerBillingAddress**](CustomerBillingAddress.md) |  | [optional]
**coupon_external_id** | **string** |  | [optional]
**custom_field_values** | [**\Schematic\Model\CheckoutFieldValue[]**](CheckoutFieldValue.md) |  | [optional]
**customer_email** | **string** |  | [optional]
**days_until_due** | **int** |  | [optional]
**excluded_company_ids** | **string[]** |  |
**migration_strategy** | [**\Schematic\Model\PlanVersionMigrationStrategy**](PlanVersionMigrationStrategy.md) |  |
**phone** | **string** |  | [optional]
**proration_behavior** | [**\Schematic\Model\MigrationProrationBehavior**](MigrationProrationBehavior.md) |  | [optional]
**send_invoice** | **bool** | Whether Stripe emails the invoice when it is finalized. Defaults to true. | [optional]
**tax_id** | [**\Schematic\Model\TaxIDInput**](TaxIDInput.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
