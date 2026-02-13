# # UpdatePlanGroupRequestBody

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**add_on_compatibilities** | [**\Schematic\Model\CompatiblePlans[]**](CompatiblePlans.md) |  | [optional]
**add_on_ids** | **string[]** | Use OrderedAddOns instead |
**checkout_collect_address** | **bool** |  |
**checkout_collect_email** | **bool** |  |
**checkout_collect_phone** | **bool** |  |
**custom_plan_config** | [**\Schematic\Model\CustomPlanConfig**](CustomPlanConfig.md) |  | [optional]
**custom_plan_id** | **string** |  | [optional]
**enable_tax_collection** | **bool** |  |
**fallback_plan_id** | **string** |  | [optional]
**initial_plan_id** | **string** |  | [optional]
**initial_plan_price_id** | **string** |  | [optional]
**ordered_add_ons** | [**\Schematic\Model\OrderedPlansInGroup[]**](OrderedPlansInGroup.md) |  |
**ordered_bundle_list** | [**\Schematic\Model\PlanGroupBundleOrder[]**](PlanGroupBundleOrder.md) |  |
**ordered_plans** | [**\Schematic\Model\OrderedPlansInGroup[]**](OrderedPlansInGroup.md) |  |
**prevent_downgrades_when_over_limit** | **bool** |  |
**prevent_self_service_downgrade** | **bool** |  |
**prevent_self_service_downgrade_button_text** | **string** |  | [optional]
**prevent_self_service_downgrade_url** | **string** |  | [optional]
**proration_behavior** | [**\Schematic\Model\ProrationBehavior**](ProrationBehavior.md) |  |
**scheduled_downgrade_behavior** | [**\Schematic\Model\ScheduledDowngradeConfigBehavior**](ScheduledDowngradeConfigBehavior.md) |  | [optional]
**scheduled_downgrade_prevent_when_over_limit** | **bool** |  | [optional]
**show_as_monthly_prices** | **bool** |  |
**show_credits** | **bool** |  |
**show_feature_description** | **bool** |  |
**show_period_toggle** | **bool** |  |
**show_zero_price_as_free** | **bool** |  |
**sync_customer_billing_details** | **bool** |  |
**trial_days** | **int** |  | [optional]
**trial_expiry_plan_id** | **string** |  | [optional]
**trial_expiry_plan_price_id** | **string** |  | [optional]
**trial_payment_method_required** | **bool** |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
