# # ListPlansParams

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**company_id** | **string** |  | [optional]
**company_scoped_only** | **bool** | Only return plans that are scoped to a company (custom plans assigned to a company) | [optional]
**exclude_company_scoped** | **bool** | Exclude plans that are scoped to a company (custom plans assigned to a company) | [optional]
**exclude_unused** | **bool** | Exclude plans that nothing is using: no company is on the plan and it has no draft version | [optional]
**for_fallback_plan** | **bool** | Filter for plans valid as fallback plans (not linked to billing) | [optional]
**for_initial_plan** | **bool** | Filter for plans valid as initial plans (not linked to billing, free, or auto-cancelling trial) | [optional]
**for_trial_expiry_plan** | **bool** | Filter for plans valid as trial expiry plans (not linked to billing or free) | [optional]
**has_product_id** | **bool** | Filter out plans that do not have a billing product ID | [optional]
**ids** | **string[]** |  | [optional]
**include_draft_versions** | **bool** | Include billing settings from draft versions for plans which have draft version | [optional]
**limit** | **int** | Page limit (default 100) | [optional]
**offset** | **int** | Page offset (default 0) | [optional]
**plan_type** | [**\Schematic\Model\PlanType**](PlanType.md) | Filter by plan type | [optional]
**q** | **string** |  | [optional]
**scoped_to_company_id** | **string** | Filter plans scoped to a specific company (custom plans) | [optional]
**with_entitlements** | **bool** | Include each plan&#39;s entitlements in the response | [optional]
**with_published_version** | **bool** | Only return plans that have a published version | [optional]
**without_entitlement_for** | **string** | Filter out plans that already have a plan entitlement for the specified feature ID | [optional]
**without_entitlement_for_include_drafts** | **bool** | With without_entitlement_for, also treat an entitlement on a plan&#39;s draft version as existing | [optional]
**without_paid_product_id** | **bool** | Filter out plans that have a paid billing product ID | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
