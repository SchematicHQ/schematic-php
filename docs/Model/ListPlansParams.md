# # ListPlansParams

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**company_id** | **string** |  | [optional]
**for_fallback_plan** | **bool** | Filter for plans valid as fallback plans (not linked to billing) | [optional]
**for_initial_plan** | **bool** | Filter for plans valid as initial plans (not linked to billing, free, or auto-cancelling trial) | [optional]
**for_trial_expiry_plan** | **bool** | Filter for plans valid as trial expiry plans (not linked to billing or free) | [optional]
**has_product_id** | **bool** | Filter out plans that do not have a billing product ID | [optional]
**ids** | **string[]** |  | [optional]
**limit** | **int** | Page limit (default 100) | [optional]
**offset** | **int** | Page offset (default 0) | [optional]
**plan_type** | [**PlanType**](PlanType.md) |  | [optional]
**q** | **string** |  | [optional]
**without_entitlement_for** | **string** | Filter out plans that already have a plan entitlement for the specified feature ID | [optional]
**without_paid_product_id** | **bool** | Filter out plans that have a paid billing product ID | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
