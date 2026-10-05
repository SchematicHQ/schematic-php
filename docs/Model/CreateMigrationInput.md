# # CreateMigrationInput

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**company_ids** | **string[]** |  | [optional]
**excluded_company_ids** | **string[]** |  | [optional]
**plan_id** | **string** |  |
**plan_version_id_to** | **string** |  |
**plan_version_ids_from** | **string[]** |  | [optional]
**proration_behavior** | [**\Schematic\Model\MigrationProrationBehavior**](MigrationProrationBehavior.md) | How Stripe handles the price difference when companies are migrated. With strategy immediate, omitted means create_prorations. With end_of_billing_period only none is accepted and means the same as omitting it: the change lands on the renewal boundary, so there is nothing to prorate. With scheduled any value is accepted and omitted means none. | [optional]
**scheduled_at** | **\DateTime** | When every company moves, for strategy scheduled. Must be in the future; the migration runs within about a minute of this time. Not accepted with other strategies. | [optional]
**strategy** | [**\Schematic\Model\PlanVersionMigrationStrategy**](PlanVersionMigrationStrategy.md) |  |
**target_plan_type** | [**\Schematic\Model\PlanType**](PlanType.md) |  |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
