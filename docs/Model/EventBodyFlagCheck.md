# # EventBodyFlagCheck

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
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

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
