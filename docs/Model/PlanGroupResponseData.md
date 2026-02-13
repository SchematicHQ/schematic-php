# # PlanGroupResponseData

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**add_on_compatibilities** | [**\Schematic\Model\CompatiblePlansResponseData[]**](CompatiblePlansResponseData.md) |  |
**add_on_ids** | **string[]** |  |
**checkout_settings** | [**\Schematic\Model\CheckoutSettingsResponseData**](CheckoutSettingsResponseData.md) |  |
**component_settings** | [**\Schematic\Model\ComponentSettingsResponseData**](ComponentSettingsResponseData.md) |  |
**default_plan_id** | **string** |  | [optional]
**fallback_plan_id** | **string** |  | [optional]
**id** | **string** |  |
**initial_plan_id** | **string** |  | [optional]
**initial_plan_price_id** | **string** |  | [optional]
**ordered_add_on_ids** | [**\Schematic\Model\OrderedPlansInGroup[]**](OrderedPlansInGroup.md) |  |
**plan_ids** | [**\Schematic\Model\OrderedPlansInGroup[]**](OrderedPlansInGroup.md) |  |
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
**trial_expiry_plan_id** | **string** |  | [optional]
**trial_expiry_plan_price_id** | **string** |  | [optional]
**trial_payment_method_required** | **bool** |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
