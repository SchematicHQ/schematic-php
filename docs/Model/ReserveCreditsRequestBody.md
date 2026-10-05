# # ReserveCreditsRequestBody

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**amount** | **float** | Credits to hold for the operation. The full amount must be available; a partial hold is never taken |
**company_id** | **string** |  |
**credit_type_id** | **string** |  |
**expires_at** | **\DateTime** | When the hold lapses if no track event settles it; defaults to one minute from now and may be at most one hour out. The unspent hold is refunded on expiry | [optional]
**idempotency_key** | **string** | A caller-chosen key for safe retries: a second request with the same key returns the original reservation instead of taking another hold | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
