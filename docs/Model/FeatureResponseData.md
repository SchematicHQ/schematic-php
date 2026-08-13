# # FeatureResponseData

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**created_at** | **\DateTime** |  |
**description** | **string** |  |
**event_subtype** | **string** |  | [optional]
**feature_type** | [**\Schematic\Model\FeatureType**](FeatureType.md) |  |
**icon** | **string** |  |
**id** | **string** |  |
**license_id** | **string** | The license sold through this feature. Set only on features of type license, and created automatically with them. | [optional]
**lifecycle_phase** | [**\Schematic\Model\FeatureLifecyclePhase**](FeatureLifecyclePhase.md) |  | [optional]
**maintainer_account_member_id** | **string** |  | [optional]
**name** | **string** |  |
**plural_name** | **string** |  | [optional]
**singular_name** | **string** |  | [optional]
**trait_id** | **string** |  | [optional]
**updated_at** | **\DateTime** |  |
**usage_limit_trait_id** | **string** | Set when the feature carries a pay-in-advance quantity. Provisioned lazily for other feature types, and at creation for license features. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
