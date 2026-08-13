# # UpsertUserSubRequestBody

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**company_id** | **string** | Add user to this company. Takes priority over company_ids. For exhaustive list of companies, use company_ids | [optional]
**company_ids** | **string[]** | Optionally specify companies using Schematic company ID | [optional]
**id** | **string** | If you know the Schematic ID, you can use that here instead of keys | [optional]
**keys** | **array<string,string>** | See [Key Management](https://docs.schematichq.com/developer_resources/key_management) for more information |
**last_seen_at** | **\DateTime** |  | [optional]
**name** | **string** |  | [optional]
**remove_keys** | **string[]** | Names of keys to remove from the user. Removing a key the user does not have does nothing, and a user must keep at least one key. | [optional]
**traits** | **object** | A map of trait names to trait values | [optional]
**update_only** | **bool** |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
