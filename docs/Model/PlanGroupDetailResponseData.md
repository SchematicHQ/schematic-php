# # PlanGroupDetailResponseData

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**add_ons** | [**\Schematic\Model\PlanGroupPlanDetailResponseData[]**](PlanGroupPlanDetailResponseData.md) |  |
**checkout_settings** | [**\Schematic\Model\CheckoutSettingsResponseData**](CheckoutSettingsResponseData.md) |  |
**component_settings** | [**\Schematic\Model\ComponentSettingsResponseData**](ComponentSettingsResponseData.md) |  |
**custom_plan_config** | [**\Schematic\Model\CustomPlanViewConfigResponseData**](CustomPlanViewConfigResponseData.md) |  | [optional]
**custom_plan_id** | **string** |  | [optional]
**default_plan** | [**\Schematic\Model\PlanGroupPlanDetailResponseData**](PlanGroupPlanDetailResponseData.md) |  | [optional]
**default_plan_id** | **string** |  | [optional]
**fallback_plan** | [**\Schematic\Model\PlanGroupPlanDetailResponseData**](PlanGroupPlanDetailResponseData.md) |  | [optional]
**fallback_plan_id** | **string** |  | [optional]
**id** | **string** |  |
**initial_plan** | [**\Schematic\Model\PlanGroupPlanDetailResponseData**](PlanGroupPlanDetailResponseData.md) |  | [optional]
**initial_plan_id** | **string** |  | [optional]
**initial_plan_price** | [**\Schematic\Model\BillingPriceView**](BillingPriceView.md) |  | [optional]
**initial_plan_price_id** | **string** |  | [optional]
**ordered_add_on_list** | [**\Schematic\Model\PlanGroupPlanEntitlementsOrder[]**](PlanGroupPlanEntitlementsOrder.md) |  |
**ordered_bundle_list** | [**\Schematic\Model\PlanGroupBundleOrder[]**](PlanGroupBundleOrder.md) |  |
**ordered_plan_list** | [**\Schematic\Model\PlanGroupPlanEntitlementsOrder[]**](PlanGroupPlanEntitlementsOrder.md) |  |
**plans** | [**\Schematic\Model\PlanGroupPlanDetailResponseData[]**](PlanGroupPlanDetailResponseData.md) |  |
**prevent_downgrades_when_over_limit** | **bool** |  |
**prevent_self_service_downgrade** | **bool** |  |
**prevent_self_service_downgrade_button_text** | **string** |  | [optional]
**prevent_self_service_downgrade_url** | **string** |  | [optional]
**proration_behavior** | **string** |  |
**scheduled_downgrade_behavior** | **string** |  | [optional]
**scheduled_downgrade_prevent_when_over_limit** | **bool** |  | [optional]
**show_as_monthly_prices** | **bool** |  |
**show_credits** | **bool** |  |
**show_period_toggle** | **bool** |  |
**show_zero_price_as_free** | **bool** |  |
**sync_customer_billing_details** | **bool** |  |
**tax_collection_enabled** | **bool** |  |
**trial_days** | **int** |  | [optional]
**trial_expiry_plan** | [**\Schematic\Model\PlanGroupPlanDetailResponseData**](PlanGroupPlanDetailResponseData.md) |  | [optional]
**trial_expiry_plan_id** | **string** |  | [optional]
**trial_expiry_plan_price** | [**\Schematic\Model\BillingPriceView**](BillingPriceView.md) |  | [optional]
**trial_expiry_plan_price_id** | **string** |  | [optional]
**trial_payment_method_required** | **bool** |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
