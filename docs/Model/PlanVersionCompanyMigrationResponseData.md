# # PlanVersionCompanyMigrationResponseData

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**company_id** | **string** |  |
**company_name** | **string** |  |
**completed_at** | **\DateTime** |  | [optional]
**created_at** | **\DateTime** |  |
**error** | **string** |  | [optional]
**error_code** | [**\Schematic\Model\MigrationErrorCode**](MigrationErrorCode.md) |  | [optional]
**id** | **string** |  |
**migration_id** | **string** |  |
**plan_version_id_from** | **string** |  | [optional]
**scheduled_for** | **\DateTime** | When this company is expected to migrate, for a migration scheduled at the end of the billing period: the end of the company&#39;s current billing period. Only set while both the company and the migration are still pending. A value at or before the time of the request means the company has no active subscription and migrates as soon as processing runs. Null means no upcoming renewal could be determined from the company&#39;s current billing status (for example, a past-due subscription or one set to cancel); it does not mean the company will never migrate. | [optional]
**started_at** | **\DateTime** |  | [optional]
**status** | [**\Schematic\Model\PlanVersionCompanyMigrationStatus**](PlanVersionCompanyMigrationStatus.md) |  |
**updated_at** | **\DateTime** |  |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
