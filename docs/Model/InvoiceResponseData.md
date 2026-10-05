# # InvoiceResponseData

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**amount_due** | **int** |  |
**amount_paid** | **int** |  |
**amount_remaining** | **int** |  |
**collection_method** | **string** |  |
**company_id** | **string** |  | [optional]
**created_at** | **\DateTime** |  |
**currency** | **string** |  |
**customer_external_id** | **string** |  |
**due_date** | **\DateTime** |  | [optional]
**ending_balance** | **int** |  |
**environment_id** | **string** |  |
**external_id** | **string** |  | [optional]
**id** | **string** |  |
**payment_method_external_id** | **string** |  | [optional]
**provider_type** | [**\Schematic\Model\BillingProviderType**](BillingProviderType.md) |  |
**starting_balance** | **int** |  |
**status** | [**\Schematic\Model\InvoiceStatus**](InvoiceStatus.md) |  | [optional]
**subscription_external_id** | **string** |  | [optional]
**subtotal** | **int** |  |
**total** | **int** | Amount after discounts and tax, before applying the customer balance. Null when the provider has not reported it: rows synced before the column existed, or pushed without one. | [optional]
**updated_at** | **\DateTime** |  |
**url** | **string** |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
