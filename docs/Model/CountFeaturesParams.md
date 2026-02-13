# # CountFeaturesParams

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**boolean_require_event** | **bool** | Only return boolean features if there is an associated event. Automatically includes boolean in the feature types filter. | [optional]
**feature_type** | [**\Schematic\Model\FeatureType[]**](FeatureType.md) | Filter by one or more feature types (boolean, event, trait) | [optional]
**ids** | **string[]** |  | [optional]
**limit** | **int** | Page limit (default 100) | [optional]
**offset** | **int** | Page offset (default 0) | [optional]
**q** | **string** | Search by feature name or ID | [optional]
**without_company_override_for** | **string** | Filter out features that already have a company override for the specified company ID | [optional]
**without_plan_entitlement_for** | **string** | Filter out features that already have a plan entitlement for the specified plan ID | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
