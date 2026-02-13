# # ComponentHydrateResponseData

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**active_add_ons** | [**\Schematic\Model\CompanyPlanDetailResponseData[]**](CompanyPlanDetailResponseData.md) |  |
**active_plans** | [**\Schematic\Model\CompanyPlanDetailResponseData[]**](CompanyPlanDetailResponseData.md) |  |
**active_usage_based_entitlements** | [**\Schematic\Model\UsageBasedEntitlementResponseData[]**](UsageBasedEntitlementResponseData.md) |  |
**add_on_compatibilities** | [**\Schematic\Model\CompatiblePlans[]**](CompatiblePlans.md) |  |
**capabilities** | [**\Schematic\Model\ComponentCapabilities**](ComponentCapabilities.md) |  | [optional]
**checkout_settings** | [**\Schematic\Model\ComponentCheckoutSettings**](ComponentCheckoutSettings.md) |  |
**company** | [**\Schematic\Model\CompanyDetailResponseData**](CompanyDetailResponseData.md) |  | [optional]
**component** | [**\Schematic\Model\ComponentResponseData**](ComponentResponseData.md) |  | [optional]
**credit_bundles** | [**\Schematic\Model\BillingCreditBundleView[]**](BillingCreditBundleView.md) |  |
**credit_grants** | [**\Schematic\Model\CreditCompanyGrantView[]**](CreditCompanyGrantView.md) |  |
**default_plan** | [**\Schematic\Model\PlanDetailResponseData**](PlanDetailResponseData.md) |  | [optional]
**display_settings** | [**\Schematic\Model\ComponentDisplaySettings**](ComponentDisplaySettings.md) |  |
**feature_usage** | [**\Schematic\Model\FeatureUsageDetailResponseData**](FeatureUsageDetailResponseData.md) |  | [optional]
**post_trial_plan** | [**\Schematic\Model\PlanDetailResponseData**](PlanDetailResponseData.md) |  | [optional]
**prevent_self_service_downgrade** | **bool** |  |
**prevent_self_service_downgrade_button_text** | **string** |  | [optional]
**prevent_self_service_downgrade_url** | **string** |  | [optional]
**show_as_monthly_prices** | **bool** |  |
**show_credits** | **bool** |  |
**show_period_toggle** | **bool** |  |
**show_zero_price_as_free** | **bool** |  |
**stripe_embed** | [**\Schematic\Model\StripeEmbedInfo**](StripeEmbedInfo.md) |  | [optional]
**subscription** | [**\Schematic\Model\CompanySubscriptionResponseData**](CompanySubscriptionResponseData.md) |  | [optional]
**trial_payment_method_required** | **bool** |  | [optional]
**upcoming_invoice** | [**\Schematic\Model\InvoiceResponseData**](InvoiceResponseData.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
