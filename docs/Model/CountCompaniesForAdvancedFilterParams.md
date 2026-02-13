# # CountCompaniesForAdvancedFilterParams

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**credit_type_ids** | **string[]** | Filter companies by one or more credit type IDs (each ID starts with bcrd_) | [optional]
**display_properties** | **string[]** | Select the display columns to return (e.g. plan, subscription, users, last_seen_at) | [optional]
**feature_ids** | **string[]** | Filter companies by one or more feature IDs (each ID starts with feat_) | [optional]
**ids** | **string[]** | Filter companies by multiple company IDs (starts with comp_) | [optional]
**limit** | **int** | Page limit (default 100) | [optional]
**monetized_subscriptions** | **bool** | Filter companies that have monetized subscriptions | [optional]
**offset** | **int** | Page offset (default 0) | [optional]
**plan_ids** | **string[]** | Filter companies by one or more plan IDs (each ID starts with plan_) | [optional]
**q** | **string** | Search for companies by name, keys or string traits | [optional]
**sort_order_column** | **string** | Column to sort by (e.g. name, created_at, last_seen_at) | [optional]
**sort_order_direction** | [**SortDirection**](SortDirection.md) |  | [optional]
**subscription_statuses** | [**\Schematic\Model\SubscriptionStatus[]**](SubscriptionStatus.md) | Filter companies by one or more subscription statuses (active, canceled, expired, incomplete, incomplete_expired, past_due, paused, trialing, unpaid) | [optional]
**subscription_types** | [**\Schematic\Model\SubscriptionType[]**](SubscriptionType.md) | Filter companies by one or more subscription types (paid, free, trial) | [optional]
**without_plan** | **bool** | Filter out companies that have a plan | [optional]
**without_subscription** | **bool** | Filter out companies that have a subscription | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
