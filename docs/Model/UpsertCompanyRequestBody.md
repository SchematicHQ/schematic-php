# # UpsertCompanyRequestBody

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**base_plan_id** | **string** | Assign this base plan when creating the company (starts with plan_). Takes precedence over the environment&#39;s initial plan and must be provisionable without a payment method. | [optional]
**base_plan_price_id** | **string** | The Schematic price to provision for base_plan_id (starts with bilpp_). Required and must be $0 for a billing-linked plan; omit for a plan that is not billing-linked. | [optional]
**id** | **string** | If you know the Schematic ID, you can use that here instead of keys | [optional]
**keys** | **array<string,string>** | See [Key Management](https://docs.schematichq.com/developer_resources/key_management) for more information |
**last_seen_at** | **\DateTime** |  | [optional]
**name** | **string** |  | [optional]
**prevent_key_remap** | **bool** |  | [optional]
**traits** | **object** | A map of trait names to trait values | [optional]
**update_only** | **bool** |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
