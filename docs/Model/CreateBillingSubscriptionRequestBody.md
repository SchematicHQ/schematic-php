# # CreateBillingSubscriptionRequestBody

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**application_id** | **string** |  | [optional]
**cancel_at** | **int** |  | [optional]
**cancel_at_period_end** | **bool** |  |
**currency** | **string** |  |
**customer_external_id** | **string** |  |
**default_payment_method_external_id** | **string** |  | [optional]
**default_payment_method_id** | **string** |  | [optional]
**discounts** | [**\Schematic\Model\BillingSubscriptionDiscount[]**](BillingSubscriptionDiscount.md) |  |
**expired_at** | **\DateTime** |  |
**interval** | **string** |  | [optional]
**metadata** | **object** |  | [optional]
**period_end** | **int** |  | [optional]
**period_start** | **int** |  | [optional]
**product_external_ids** | [**\Schematic\Model\BillingProductPricing[]**](BillingProductPricing.md) |  |
**status** | **string** |  | [optional]
**subscription_external_id** | **string** |  |
**total_price** | **int** |  |
**trial_end** | **int** |  | [optional]
**trial_end_setting** | [**\Schematic\Model\BillingSubscriptionTrialEndSetting**](BillingSubscriptionTrialEndSetting.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
