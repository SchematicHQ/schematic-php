# # BillingSubscriptionView

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**company_id** | **string** |  | [optional]
**created_at** | **\DateTime** |  |
**currency** | **string** |  |
**customer_external_id** | **string** |  |
**discounts** | [**\Schematic\Model\BillingSubscriptionDiscountView[]**](BillingSubscriptionDiscountView.md) |  |
**expired_at** | **\DateTime** |  | [optional]
**id** | **string** |  |
**interval** | **string** |  |
**latest_invoice** | [**\Schematic\Model\InvoiceResponseData**](InvoiceResponseData.md) |  | [optional]
**metadata** | **object** |  | [optional]
**payment_method** | [**\Schematic\Model\PaymentMethodResponseData**](PaymentMethodResponseData.md) |  | [optional]
**period_end** | **int** |  |
**period_start** | **int** |  |
**products** | [**\Schematic\Model\BillingProductForSubscriptionResponseData[]**](BillingProductForSubscriptionResponseData.md) |  |
**status** | **string** |  |
**subscription_external_id** | **string** |  |
**total_price** | **int** |  |
**trial_end** | **int** |  | [optional]
**trial_end_setting** | **string** |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
