# # FeatureDetailResponseData

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**billing_linked_resource** | [**\Schematic\Model\BillingLinkedResourceResponseData**](BillingLinkedResourceResponseData.md) |  | [optional]
**billing_product** | [**\Schematic\Model\BillingProductResponseData**](BillingProductResponseData.md) | The billing provider product that sells this feature in the current environment. Set for license features once they have been priced in a plan; a feature priced in several environments has a different product in each. | [optional]
**created_at** | **\DateTime** |  |
**description** | **string** |  |
**event_subtype** | **string** |  | [optional]
**event_summary** | [**\Schematic\Model\EventSummaryResponseData**](EventSummaryResponseData.md) |  | [optional]
**feature_type** | [**\Schematic\Model\FeatureType**](FeatureType.md) |  |
**flags** | [**\Schematic\Model\FlagDetailResponseData[]**](FlagDetailResponseData.md) |  |
**icon** | **string** |  |
**id** | **string** |  |
**license_id** | **string** | The license sold through this feature. Set only on features of type license, and created automatically with them. | [optional]
**lifecycle_phase** | [**\Schematic\Model\FeatureLifecyclePhase**](FeatureLifecyclePhase.md) |  | [optional]
**maintainer** | [**\Schematic\Model\AccountMemberResponseData**](AccountMemberResponseData.md) |  | [optional]
**maintainer_account_member_id** | **string** |  | [optional]
**name** | **string** |  |
**plans** | [**\Schematic\Model\PreviewObject[]**](PreviewObject.md) |  |
**plural_name** | **string** |  | [optional]
**singular_name** | **string** |  | [optional]
**trait** | [**\Schematic\Model\EntityTraitDefinitionResponseData**](EntityTraitDefinitionResponseData.md) |  | [optional]
**trait_id** | **string** |  | [optional]
**updated_at** | **\DateTime** |  |
**usage_limit_trait_id** | **string** | Set when the feature carries a pay-in-advance quantity. Provisioned lazily for other feature types, and at creation for license features. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
