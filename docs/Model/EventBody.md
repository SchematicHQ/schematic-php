# # EventBody

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**company** | **array<string,string>** | Key-value pairs to identify the company associated with the inference event |
**event** | **string** | Optional track event name to fan out for usage-based billing |
**lease_id** | **string** | Credit lease ID this track event is redeeming against | [optional]
**quantity** | **int** | Optionally specify the quantity of the event | [optional]
**reservation_id** | **string** | Credit reservation ID this track event settles. lease_id takes precedence when both are set | [optional]
**traits** | **object** | A map of trait names to trait values | [optional]
**user** | **array<string,string>** | Key-value pairs to identify the user associated with the inference event | [optional]
**company_id** | **string** | Schematic company ID (starting with &#39;comp_&#39;) of the company evaluated, if any | [optional]
**error** | **string** | Report an error that occurred during the flag check | [optional]
**flag_id** | **string** | Schematic flag ID (starting with &#39;flag_&#39;) for the flag matching the key, if any | [optional]
**flag_key** | **string** | The key of the flag being checked |
**preflight** | **bool** | Whether the check was a preflight, asking whether an action would be allowed rather than reporting one that happened. Absent on ordinary checks | [optional]
**reason** | **string** | The reason why the value was returned |
**req_company** | **array<string,string>** | Key-value pairs used to to identify company for which the flag was checked | [optional]
**req_user** | **array<string,string>** | Key-value pairs used to to identify user for which the flag was checked | [optional]
**rule_id** | **string** | Schematic rule ID (starting with &#39;rule_&#39;) of the rule that matched for the flag, if any | [optional]
**user_id** | **string** | Schematic user ID (starting with &#39;user_&#39;) of the user evaluated, if any | [optional]
**value** | **bool** | The value of the flag for the given company and/or user |
**keys** | **array<string,string>** | Key-value pairs to identify the user |
**name** | **string** | The display name of the user being identified; required only if it is a new user | [optional]
**cache_creation_input_tokens** | **int** | Number of input tokens written to a prompt cache; a subset of input_tokens | [optional]
**cached_input_tokens** | **int** | Number of input tokens served from cache; a subset of input_tokens | [optional]
**cost** | **string** | Provided cost of the inference request as a decimal string; derived from model pricing when omitted | [optional]
**currency** | **string** | ISO 4217 currency code for the provided cost; defaults to &#39;usd&#39; | [optional]
**input_tokens** | **int** | Total number of input tokens for the inference request, including those served from and written to a prompt cache |
**operation** | **string** | The inference operation; defaults to &#39;chat&#39; | [optional]
**output_tokens** | **int** | Number of output tokens for the inference request |
**provider** | **string** | The inference provider (e.g. &#39;anthropic&#39;, &#39;openai&#39;) |
**reasoning_tokens** | **int** | Number of reasoning tokens for the inference request | [optional]
**request_model** | **string** | The model requested for the inference request | [optional]
**requests** | **int** | Number of requests represented by this event; defaults to 1 | [optional]
**response_model** | **string** | The model that served the inference response |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
