# # ExtendCreditLeaseRequestBody

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**additional_amount** | **float** |  |
**expires_at** | **\DateTime** | Pushes the lease&#39;s expiry out; may be at most one hour from now. Leave unset to keep the expiry the lease already has | [optional]
**idempotency_key** | **string** | A caller-chosen key for safe retries: a second request with the same key returns the lease as it stands instead of growing it again. Keys are unique per environment across every extend | [optional]
**user_id** | **string** | The user drawing the top-up, so a user-scope spend policy applies to it | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
