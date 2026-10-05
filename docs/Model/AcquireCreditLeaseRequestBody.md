# # AcquireCreditLeaseRequestBody

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**company_id** | **string** |  |
**credit_type_id** | **string** |  |
**expires_at** | **\DateTime** | When the hold lapses if the lease is never released; defaults to five minutes from now and may be at most one hour out. The unspent hold is refunded on expiry | [optional]
**requested_amount** | **float** |  |
**user_id** | **string** | The user drawing the hold, so a user-scope spend policy applies to it | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
