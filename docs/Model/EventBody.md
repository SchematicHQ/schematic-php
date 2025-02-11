# # EventBody

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**company** | [**\Schematic\Model\EventBodyIdentifyCompany**](EventBodyIdentifyCompany.md) |  | [optional]
**event** | **string** | The name of the type of track event |
**quantity** | **int** | Optionally specify the quantity of the event | [optional]
**traits** | **object** | A map of trait names to trait values | [optional]
**user** | **array<string,string>** | Key-value pairs to identify user associated with track event | [optional]
**company_id** | **string** | Schematic company ID (starting with &#39;comp_&#39;) of the company evaluated, if any | [optional]
**error** | **string** | Report an error that occurred during the flag check | [optional]
**flag_id** | **string** | Schematic flag ID (starting with &#39;flag_&#39;) for the flag matching the key, if any | [optional]
**flag_key** | **string** | The key of the flag being checked |
**reason** | **string** | The reason why the value was returned |
**req_company** | **array<string,string>** | Key-value pairs used to to identify company for which the flag was checked | [optional]
**req_user** | **array<string,string>** | Key-value pairs used to to identify user for which the flag was checked | [optional]
**rule_id** | **string** | Schematic rule ID (starting with &#39;rule_&#39;) of the rule that matched for the flag, if any | [optional]
**user_id** | **string** | Schematic user ID (starting with &#39;user_&#39;) of the user evaluated, if any | [optional]
**value** | **bool** | The value of the flag for the given company and/or user |
**keys** | **array<string,string>** | Key-value pairs to identify the user |
**name** | **string** | The display name of the user being identified; required only if it is a new user | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
