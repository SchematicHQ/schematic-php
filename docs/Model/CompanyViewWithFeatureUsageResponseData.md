# # CompanyViewWithFeatureUsageResponseData

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**add_ons** | [**\Schematic\Model\CompanyPlanWithBillingSubView[]**](CompanyPlanWithBillingSubView.md) |  |
**billing_credit_balances** | **array<string,float>** |  | [optional]
**billing_subscription** | [**\Schematic\Model\BillingSubscriptionView**](BillingSubscriptionView.md) |  | [optional]
**billing_subscriptions** | [**\Schematic\Model\BillingSubscriptionView[]**](BillingSubscriptionView.md) |  |
**created_at** | **\DateTime** |  |
**default_payment_method** | [**\Schematic\Model\PaymentMethodResponseData**](PaymentMethodResponseData.md) |  | [optional]
**entitlements** | [**\Schematic\Model\FeatureEntitlement[]**](FeatureEntitlement.md) |  |
**entity_traits** | [**\Schematic\Model\EntityTraitDetailResponseData[]**](EntityTraitDetailResponseData.md) |  |
**environment_id** | **string** |  |
**feature_usage** | [**\Schematic\Model\FeatureUsageDataResponseData[]**](FeatureUsageDataResponseData.md) |  |
**id** | **string** |  |
**keys** | [**\Schematic\Model\EntityKeyDetailResponseData[]**](EntityKeyDetailResponseData.md) |  |
**last_seen_at** | **\DateTime** |  | [optional]
**logo_url** | **string** |  | [optional]
**metrics** | [**\Schematic\Model\CompanyEventPeriodMetricsResponseData[]**](CompanyEventPeriodMetricsResponseData.md) |  |
**name** | **string** |  |
**payment_methods** | [**\Schematic\Model\PaymentMethodResponseData[]**](PaymentMethodResponseData.md) |  |
**plan** | [**\Schematic\Model\CompanyPlanWithBillingSubView**](CompanyPlanWithBillingSubView.md) |  | [optional]
**plans** | [**\Schematic\Model\GenericPreviewObject[]**](GenericPreviewObject.md) |  |
**rules** | [**\Schematic\Model\Rule[]**](Rule.md) |  |
**traits** | **object** | A map of trait names to trait values | [optional]
**updated_at** | **\DateTime** |  |
**user_count** | **int** |  |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
