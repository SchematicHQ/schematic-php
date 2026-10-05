# # CompanyDetailResponseData

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**add_ons** | [**\Schematic\Model\CompanyPlanWithBillingSubView[]**](CompanyPlanWithBillingSubView.md) |  |
**billing_credit_balances** | **array<string,float>** |  | [optional]
**billing_email** | **string** |  | [optional]
**billing_profile** | [**\Schematic\Model\CompanyBillingProfileResponseData**](CompanyBillingProfileResponseData.md) |  | [optional]
**billing_profiles** | [**\Schematic\Model\CompanyBillingProfileResponseData[]**](CompanyBillingProfileResponseData.md) |  | [optional]
**billing_subscription** | [**\Schematic\Model\BillingSubscriptionView**](BillingSubscriptionView.md) |  | [optional]
**billing_subscriptions** | [**\Schematic\Model\BillingSubscriptionView[]**](BillingSubscriptionView.md) |  |
**created_at** | **\DateTime** |  |
**custom_plan_billings** | [**\Schematic\Model\CustomPlanBillingResponseData[]**](CustomPlanBillingResponseData.md) |  |
**default_payment_method** | [**\Schematic\Model\PaymentMethodResponseData**](PaymentMethodResponseData.md) |  | [optional]
**entitlements** | [**\Schematic\Model\FeatureEntitlement[]**](FeatureEntitlement.md) |  |
**entity_traits** | [**\Schematic\Model\EntityTraitDetailResponseData[]**](EntityTraitDetailResponseData.md) |  |
**environment_id** | **string** |  |
**id** | **string** |  |
**keys** | [**\Schematic\Model\EntityKeyDetailResponseData[]**](EntityKeyDetailResponseData.md) |  |
**last_seen_at** | **\DateTime** |  | [optional]
**logo_url** | **string** |  | [optional]
**metrics** | [**\Schematic\Model\CompanyEventPeriodMetricsResponseData[]**](CompanyEventPeriodMetricsResponseData.md) |  |
**name** | **string** |  |
**payment_methods** | [**\Schematic\Model\PaymentMethodResponseData[]**](PaymentMethodResponseData.md) |  |
**pending_migration** | [**\Schematic\Model\PendingMigrationResponseData**](PendingMigrationResponseData.md) |  | [optional]
**plan** | [**\Schematic\Model\CompanyPlanWithBillingSubView**](CompanyPlanWithBillingSubView.md) |  | [optional]
**plans** | [**\Schematic\Model\GenericPreviewObject[]**](GenericPreviewObject.md) |  |
**rules** | [**\Schematic\Model\Rule[]**](Rule.md) |  |
**scheduled_downgrade** | [**\Schematic\Model\ScheduledDowngradeResponseData**](ScheduledDowngradeResponseData.md) |  | [optional]
**traits** | **object** | A map of trait names to trait values | [optional]
**updated_at** | **\DateTime** |  |
**user_count** | **int** |  |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
