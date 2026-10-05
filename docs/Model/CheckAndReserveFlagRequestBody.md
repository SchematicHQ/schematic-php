# # CheckAndReserveFlagRequestBody

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**company** | **array<string,string>** |  | [optional]
**expires_at** | **\DateTime** | When the hold lapses if no track event settles it; defaults to one minute from now and may be at most one hour out. The unspent hold is refunded on expiry | [optional]
**idempotency_key** | **string** | A caller-chosen key for safe retries: a second request with the same key returns the original reservation instead of taking another hold | [optional]
**preflight** | [**\Schematic\Model\PreflightRequestBody**](PreflightRequestBody.md) | Hypothetical usage to evaluate the flag against. When credit_cost names the entitlement&#39;s credit, that cost is what gets held; otherwise the hold is the entitlement&#39;s consumption rate times quantity, or, when quantity is omitted, times the usage stated here | [optional]
**quantity** | **float** | Units of the feature the operation will consume. Sets the hold size together with the entitlement&#39;s consumption rate, and is echoed back on the reservation for the settling track event. When it is omitted the units come from preflight.event_usage.quantity, if that event subtype is the entitlement&#39;s, else from preflight.usage, else 1 | [optional]
**user** | **array<string,string>** |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
