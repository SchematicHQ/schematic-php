# # UpdateCreditBundleDetailsRequestBody

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**bundle_name** | **string** |  |
**compatible_plan_ids** | **string[]** | Plans whose companies may purchase this bundle. Omitted leaves compatibility unchanged; empty resets the bundle to purchasable on every plan. | [optional]
**currency_prices** | [**\Schematic\Model\CreditBundleCurrencyPriceRequestBody[]**](CreditBundleCurrencyPriceRequestBody.md) |  | [optional]
**expiry_type** | [**\Schematic\Model\BillingCreditExpiryType**](BillingCreditExpiryType.md) |  | [optional]
**expiry_unit** | [**\Schematic\Model\BillingCreditExpiryUnit**](BillingCreditExpiryUnit.md) |  | [optional]
**expiry_unit_count** | **int** |  | [optional]
**price_per_unit** | **int** |  |
**price_per_unit_decimal** | **string** |  | [optional]
**quantity** | **int** |  | [optional]
**status** | [**\Schematic\Model\BillingCreditBundleStatus**](BillingCreditBundleStatus.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
