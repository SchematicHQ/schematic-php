# # BillingSubscriptionView

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**application_id** | **string** |  | [optional]
**cancel_at** | **int** |  | [optional]
**cancel_at_period_end** | **bool** |  |
**company_id** | **string** |  | [optional]
**created_at** | **\DateTime** |  |
**currency** | **string** |  |
**customer_external_id** | **string** |  |
**default_payment_method_id** | **string** |  | [optional]
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
**provider_type** | [**\Schematic\Model\BillingProviderType**](BillingProviderType.md) |  |
**status** | **string** |  |
**subscription_external_id** | **string** |  |
**total_price** | **int** |  |
**trial_end** | **int** |  | [optional]
**trial_end_setting** | [**\Schematic\Model\BillingSubscriptionTrialEndSetting**](BillingSubscriptionTrialEndSetting.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
