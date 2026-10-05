# # CompanyFeatureUsageExportMetadata

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**company_ids** | **string[]** | Restrict the export to these Schematic company IDs (starting with &#39;comp_&#39;) | [optional]
**credit_type_ids** | **string[]** | Restrict the export to companies with these billing credit type IDs | [optional]
**entity_key_definition_ids** | **string[]** | Company key definition IDs to include as columns, one column per definition, mirroring the companies list | [optional]
**entity_trait_definition_ids** | **string[]** | Company trait definition IDs to include as columns, one column per definition, mirroring the companies list | [optional]
**export_type** | **string** | Discriminator: always \&quot;company-feature-usage\&quot; for this variant |
**feature_ids** | **string[]** | Schematic feature IDs (starting with &#39;feat_&#39;) to include as usage columns; empty means no usage columns | [optional]
**has_scheduled_downgrade** | **bool** | Restrict the export to companies that do (or do not) have a scheduled downgrade | [optional]
**monetized_subscriptions** | **bool** | Restrict the export to companies with (or without) a monetized subscription | [optional]
**notification_email_recipient_email_addresses** | **string[]** | Account member emails to notify when the export completes; empty means the artifact is only retrievable via the API | [optional]
**plan_id** | **string** | Restrict the export to companies on this plan ID (starting with &#39;plan_&#39;) | [optional]
**plan_ids** | **string[]** | Restrict the export to companies on any of these plan IDs | [optional]
**plan_version_id** | **string** | Restrict the export to companies on this plan version ID | [optional]
**plan_version_unpublished** | **bool** | Restrict the export to companies on a plan version that is no longer published | [optional]
**q** | **string** | Free-text search over company name and keys | [optional]
**sort_order_column** | **string** | Column to sort the exported rows by (e.g. name, created_at, plan); defaults to name | [optional]
**sort_order_direction** | **string** | Direction to sort the exported rows by; defaults to asc | [optional]
**subscription_statuses** | **string[]** | Restrict the export to companies whose subscription has one of these statuses | [optional]
**subscription_types** | **string[]** | Restrict the export to companies whose subscription has one of these types | [optional]
**visible_columns** | **string[]** | Company columns to include, mirroring the companies list; omit to include the plan column only | [optional]
**with_entitlement_for** | **string** | Restrict the export to companies that have an entitlement for this feature ID | [optional]
**with_subscription** | **bool** | Restrict the export to companies with a subscription | [optional]
**without_feature_override_for** | **string** | Restrict the export to companies without a company-level override for this feature ID | [optional]
**without_plan** | **bool** | Restrict the export to companies without a plan | [optional]
**without_subscription** | **bool** | Restrict the export to companies without a subscription | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
