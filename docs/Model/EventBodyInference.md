# # EventBodyInference

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**cached_input_tokens** | **int** | Number of input tokens served from cache | [optional]
**company** | **array<string,string>** | Key-value pairs to identify the company associated with the inference event |
**cost** | **string** | Provided cost of the inference request as a decimal string; derived from model pricing when omitted | [optional]
**currency** | **string** | ISO 4217 currency code for the provided cost; defaults to &#39;usd&#39; | [optional]
**event** | **string** | Optional track event name to fan out for usage-based billing | [optional]
**input_tokens** | **int** | Number of input tokens for the inference request |
**operation** | **string** | The inference operation; defaults to &#39;chat&#39; | [optional]
**output_tokens** | **int** | Number of output tokens for the inference request |
**provider** | **string** | The inference provider (e.g. &#39;anthropic&#39;, &#39;openai&#39;) |
**reasoning_tokens** | **int** | Number of reasoning tokens for the inference request | [optional]
**request_model** | **string** | The model requested for the inference request | [optional]
**requests** | **int** | Number of requests represented by this event; defaults to 1 | [optional]
**response_model** | **string** | The model that served the inference response |
**user** | **array<string,string>** | Key-value pairs to identify the user associated with the inference event | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
