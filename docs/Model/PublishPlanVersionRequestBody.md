# # PublishPlanVersionRequestBody

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**activation_strategy** | [**\Schematic\Model\CustomPlanActivationStrategy**](CustomPlanActivationStrategy.md) |  | [optional]
**address** | [**\Schematic\Model\CustomerBillingAddress**](CustomerBillingAddress.md) |  | [optional]
**billing_cycle_anchor** | **\DateTime** | The date the subscription&#39;s billing period renews on. Only honored on a first publish that starts a subscription. | [optional]
**billing_start_date** | **\DateTime** | The date the contract term starts. A past date backdates the subscription so the first invoice covers the term from this date to the renewal date. Requires billing_cycle_anchor. Only honored on a first publish that starts a subscription. | [optional]
**coupon_external_id** | **string** |  | [optional]
**custom_field_values** | [**\Schematic\Model\CheckoutFieldValue[]**](CheckoutFieldValue.md) |  | [optional]
**customer_email** | **string** |  | [optional]
**days_until_due** | **int** |  | [optional]
**excluded_company_ids** | **string[]** |  |
**migration_strategy** | [**\Schematic\Model\PlanVersionMigrationStrategy**](PlanVersionMigrationStrategy.md) |  |
**phone** | **string** |  | [optional]
**prorate_first_period** | **bool** | When true, the partial period between the subscription starting and its renewal date is billed pro rata straight away. When false that period is free and no invoice is raised until the renewal date. Only applies alongside billing_cycle_anchor. Defaults to true. | [optional]
**proration_behavior** | [**\Schematic\Model\MigrationProrationBehavior**](MigrationProrationBehavior.md) | How Stripe handles the price difference when companies are migrated. With migration_strategy immediate, omitted means create_prorations. With end_of_billing_period only none is accepted and means the same as omitting it: the change lands on the renewal boundary, so there is nothing to prorate. With scheduled any value is accepted and omitted means none. Not accepted with leave. | [optional]
**require_no_migration** | **bool** | Refuse the publish if any company would be migrated onto the new version | [optional]
**scheduled_at** | **\DateTime** | When every company moves, for migration_strategy scheduled. Must be in the future; the migration runs within about a minute of this time. Not accepted with other strategies. | [optional]
**send_invoice** | **bool** | Whether Stripe emails the invoice when it is finalized. Defaults to true. | [optional]
**tax_id** | [**\Schematic\Model\TaxIDInput**](TaxIDInput.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
