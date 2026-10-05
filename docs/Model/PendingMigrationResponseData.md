# # PendingMigrationResponseData

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**effective_at** | **\DateTime** | When the company moves to the new version: the migration&#39;s date for a scheduled migration, or the end of the company&#39;s current billing period. Null when no date can be named yet, for example when the company&#39;s only subscription is past due or set to cancel; the company then moves at the next opportunity. | [optional]
**migration_id** | **string** |  |
**proration_behavior** | [**\Schematic\Model\MigrationProrationBehavior**](MigrationProrationBehavior.md) | How the price difference is billed when the company moves. Always none for an end-of-billing-period migration. | [optional]
**scheduled_for** | **\DateTime** | Deprecated; use effective_at, which carries the same value. | [optional]
**strategy** | [**\Schematic\Model\PlanVersionMigrationStrategy**](PlanVersionMigrationStrategy.md) | Whether the company moves at the end of its billing period (end_of_billing_period) or on a specific date (scheduled). The type is shared with plan version migrations, but only those two values appear here: an immediate migration never pends. |
**to_plan_id** | **string** |  |
**to_plan_name** | **string** |  |
**to_plan_version_id** | **string** |  |
**to_plan_version_number** | **int** |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
