# # PlanChangeResponseData

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**action** | [**\Schematic\Model\PlanChangeAction**](PlanChangeAction.md) |  |
**actor_type** | [**\Schematic\Model\ActorType**](ActorType.md) |  |
**add_ons_added** | [**\Schematic\Model\PlanSnapshotView[]**](PlanSnapshotView.md) |  |
**add_ons_removed** | [**\Schematic\Model\PlanSnapshotView[]**](PlanSnapshotView.md) |  |
**api_key** | [**\Schematic\Model\ApiKeyResponseData**](ApiKeyResponseData.md) |  | [optional]
**api_key_request** | [**\Schematic\Model\ApiKeyRequestListResponseData**](ApiKeyRequestListResponseData.md) |  | [optional]
**base_plan** | [**\Schematic\Model\PlanSnapshotView**](PlanSnapshotView.md) |  | [optional]
**base_plan_action** | [**PlanChangeBasePlanAction**](PlanChangeBasePlanAction.md) |  | [optional]
**company** | [**\Schematic\Model\CompanyResponseData**](CompanyResponseData.md) |  | [optional]
**company_id** | **string** |  |
**created_at** | **\DateTime** |  |
**environment_id** | **string** |  |
**id** | **string** |  |
**previous_base_plan** | [**\Schematic\Model\PlanSnapshotView**](PlanSnapshotView.md) |  | [optional]
**request_id** | **string** |  | [optional]
**subscription_change_action** | [**PlanChangeSubscriptionAction**](PlanChangeSubscriptionAction.md) |  | [optional]
**traits_updated** | [**\Schematic\Model\SubscriptionTraitUpdate[]**](SubscriptionTraitUpdate.md) | Any traits were updated as part of this plan change (via pay-in-advance entitlements). |
**updated_at** | **\DateTime** |  |
**user_id** | **string** |  | [optional]
**user_name** | **string** |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
