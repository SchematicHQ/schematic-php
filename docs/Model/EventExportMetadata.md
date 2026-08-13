# # EventExportMetadata

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**company_id** | **string** | Restrict the export to events for this company ID (starting with &#39;comp_&#39;) | [optional]
**end_time** | **\DateTime** | Restrict the export to events captured at or before this time | [optional]
**event_subtype** | **string** | Restrict the export to track events with this subtype | [optional]
**event_types** | **string[]** | Restrict the export to these event types (e.g. \&quot;track\&quot;, \&quot;identify\&quot;); defaults to track, identify and inference events. Flag check events are only exported when requested here explicitly, and require a flag_id. | [optional]
**export_type** | **string** | Discriminator: always \&quot;event\&quot; for this variant |
**flag_id** | **string** | Restrict the export to flag-check events for this flag ID (starting with &#39;flag_&#39;) | [optional]
**notification_email_recipient_email_addresses** | **string[]** | Account member emails to notify when the export completes; empty means the artifact is only retrievable via the API | [optional]
**start_time** | **\DateTime** | Restrict the export to events captured at or after this time | [optional]
**user_id** | **string** | Restrict the export to events for this user ID (starting with &#39;user_&#39;) | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
