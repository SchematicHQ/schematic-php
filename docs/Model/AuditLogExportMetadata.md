# # AuditLogExportMetadata

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**actor_type** | **string** | Restrict the export to audit log entries from this actor type | [optional]
**end_time** | **\DateTime** | Restrict the export to audit log entries that started before this time | [optional]
**export_type** | **string** | Discriminator: always \&quot;audit-log\&quot; for this variant |
**notification_email_recipient_email_addresses** | **string[]** | Account member emails to notify when the export completes; empty means the artifact is only retrievable via the API | [optional]
**q** | **string** | Free-text search over audit log entries | [optional]
**start_time** | **\DateTime** | Restrict the export to audit log entries that started at or after this time | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
