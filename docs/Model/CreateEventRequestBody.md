# # CreateEventRequestBody

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**backfill** | **bool** | Requires a secret API key, and trusted_client_clock. Import historical data without affecting billing. | [optional]
**body** | [**\Schematic\Model\EventBody**](EventBody.md) |  | [optional]
**event_type** | [**\Schematic\Model\EventType**](EventType.md) | Either &#39;identify&#39; or &#39;track&#39; |
**idempotency_key** | **string** | Optional client-supplied key. Duplicate events with the same key (scoped to the environment) are dropped for 24h. | [optional]
**sent_at** | **\DateTime** | Optionally provide a timestamp at which the event was sent to Schematic | [optional]
**trusted_client_clock** | **bool** | Requires a secret API key and sent_at. Use sent_at as the effective timestamp. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
