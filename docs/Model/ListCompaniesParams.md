# # ListCompaniesParams

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**credit_type_ids** | **string[]** | Filter companies by one or more credit type IDs (each ID starts with bcrd_) | [optional]
**has_scheduled_downgrade** | **bool** | Filter companies that have a pending scheduled downgrade | [optional]
**ids** | **string[]** | Filter companies by multiple company IDs (starts with comp_) | [optional]
**limit** | **int** | Page limit (default 100) | [optional]
**monetized_subscriptions** | **bool** | Filter companies that have monetized subscriptions | [optional]
**offset** | **int** | Page offset (default 0) | [optional]
**plan_id** | **string** | Filter companies by plan ID (starts with plan_) | [optional]
**plan_ids** | **string[]** | Filter companies by one or more plan IDs (each ID starts with plan_) | [optional]
**plan_version_id** | **string** | Filter companies by plan version ID (starts with plvr_) | [optional]
**plan_version_ids** | **string[]** | Filter companies by one or more plan version IDs (each ID starts with plvr_). Takes precedence over plan_version_id when set. | [optional]
**q** | **string** | Search for companies by name, keys or string traits | [optional]
**sort_order_column** | **string** | Column to sort by (e.g. name, created_at, last_seen_at) | [optional]
**sort_order_direction** | [**\Schematic\Model\SortDirection**](SortDirection.md) |  | [optional]
**subscription_statuses** | [**\Schematic\Model\SubscriptionStatus[]**](SubscriptionStatus.md) | Filter companies by one or more subscription statuses | [optional]
**subscription_types** | [**\Schematic\Model\SubscriptionType[]**](SubscriptionType.md) | Filter companies by one or more subscription types | [optional]
**with_entitlement_for** | **string** | Filter companies that have an entitlement (plan entitlement or company override) for the specified feature ID | [optional]
**with_subscription** | **bool** | Filter companies that have a subscription | [optional]
**without_feature_override_for** | **string** | Filter out companies that already have a company override for the specified feature ID | [optional]
**without_plan** | **bool** | Filter out companies that have a plan | [optional]
**without_subscription** | **bool** | Filter out companies that have a subscription | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
