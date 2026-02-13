# # CountBillingProductsParams

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**ids** | **string[]** |  | [optional]
**is_active** | **bool** | Filter products that are active. Defaults to true if not specified | [optional]
**limit** | **int** | Page limit (default 100) | [optional]
**name** | **string** |  | [optional]
**offset** | **int** | Page offset (default 0) | [optional]
**price_usage_type** | [**\Schematic\Model\BillingPriceUsageType**](BillingPriceUsageType.md) |  | [optional]
**provider_type** | [**\Schematic\Model\BillingProviderType**](BillingProviderType.md) |  | [optional]
**q** | **string** |  | [optional]
**with_one_time_charges** | **bool** | Filter products that are one time charges | [optional]
**with_prices_only** | **bool** | Filter products that have prices | [optional]
**with_zero_price** | **bool** | Filter products that have zero price for free subscription type | [optional]
**without_linked_to_plan** | **bool** | Filter products that are not linked to any plan | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
