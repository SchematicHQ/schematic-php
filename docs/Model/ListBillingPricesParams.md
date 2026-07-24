# # ListBillingPricesParams

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**currency** | **string** | Filter for prices in a specific currency (e.g. usd, eur) | [optional]
**for_initial_plan** | **bool** | Filter for prices valid for initial plans (free prices only) | [optional]
**for_trial_expiry_plan** | **bool** | Filter for prices valid for trial expiry plans (free prices only) | [optional]
**ids** | **string[]** |  | [optional]
**interval** | **string** |  | [optional]
**is_active** | **bool** | Filter for active prices on active products (defaults to true if not specified) | [optional]
**limit** | **int** | Page limit (default 100) | [optional]
**offset** | **int** | Page offset (default 0) | [optional]
**plan_version_id** | **string** | Filter for prices belonging to a specific plan version (e.g. the latest published version) | [optional]
**price** | **int** |  | [optional]
**product_id** | **string** |  | [optional]
**product_ids** | **string[]** |  | [optional]
**provider_type** | [**\Schematic\Model\BillingProviderType**](BillingProviderType.md) |  | [optional]
**q** | **string** |  | [optional]
**tiers_mode** | [**\Schematic\Model\BillingTiersMode**](BillingTiersMode.md) |  | [optional]
**usage_type** | [**\Schematic\Model\BillingPriceUsageType**](BillingPriceUsageType.md) |  | [optional]
**with_meter** | **bool** | Filter for prices with a meter | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
