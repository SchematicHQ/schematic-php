# # PlanChangeResponseData

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**action** | [**\Schematic\Model\PlanChangeAction**](PlanChangeAction.md) |  |
**actor_type** | [**\Schematic\Model\ActorType**](ActorType.md) |  |
**add_ons_added** | [**\Schematic\Model\PlanSnapshotView[]**](PlanSnapshotView.md) |  |
**add_ons_removed** | [**\Schematic\Model\PlanSnapshotView[]**](PlanSnapshotView.md) |  |
**api_key** | [**\Schematic\Model\ApiKeyResponseData**](ApiKeyResponseData.md) |  | [optional]
**audit_log** | [**\Schematic\Model\AuditLogListResponseData**](AuditLogListResponseData.md) |  | [optional]
**base_plan** | [**\Schematic\Model\PlanSnapshotView**](PlanSnapshotView.md) |  | [optional]
**base_plan_action** | [**\Schematic\Model\PlanChangeBasePlanAction**](PlanChangeBasePlanAction.md) | Any special behavior that affected the assignment of the base plan during this change. | [optional]
**base_plan_version** | [**\Schematic\Model\PlanVersionSnapshotView**](PlanVersionSnapshotView.md) | The plan version that was assigned during this change. | [optional]
**company** | [**\Schematic\Model\CompanyResponseData**](CompanyResponseData.md) |  | [optional]
**company_id** | **string** |  |
**created_at** | **\DateTime** |  |
**environment_id** | **string** |  |
**id** | **string** |  |
**integration** | [**\Schematic\Model\IntegrationResponseData**](IntegrationResponseData.md) | The integration that performed this change, when the actor is an integration-owned API key (e.g. a billing-provider sync). | [optional]
**is_version_upgrade** | **bool** | True when this change moved the company to a different version of the same plan (e.g. a plan version migration) rather than to a different plan. |
**previous_base_plan** | [**\Schematic\Model\PlanSnapshotView**](PlanSnapshotView.md) |  | [optional]
**previous_base_plan_version** | [**\Schematic\Model\PlanVersionSnapshotView**](PlanVersionSnapshotView.md) | The plan version of the previous base plan before this change. | [optional]
**request_id** | **string** |  | [optional]
**subscription_change_action** | [**\Schematic\Model\PlanChangeSubscriptionAction**](PlanChangeSubscriptionAction.md) | If a subscription was changed as a part of this plan change, indicates the type of change that was made. | [optional]
**traits_updated** | [**\Schematic\Model\SubscriptionTraitUpdate[]**](SubscriptionTraitUpdate.md) | Any traits were updated as part of this plan change (via pay-in-advance entitlements). |
**trial_converted_at** | **\DateTime** | When the company&#39;s trial had converted to a paid subscription as of this change. Null when the trial had not converted, or for changes recorded before trial status was tracked. | [optional]
**trial_expires_at** | **\DateTime** | When the company&#39;s trial was set to end as of this change. Null when the company had never trialed, or for changes recorded before trial status was tracked. | [optional]
**trial_status** | [**\Schematic\Model\TrialStatus**](TrialStatus.md) | The company&#39;s trial status. Null when the company had never trialed, or for changes recorded before trial status was tracked. | [optional]
**updated_at** | **\DateTime** |  |
**user_id** | **string** |  | [optional]
**user_name** | **string** |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
