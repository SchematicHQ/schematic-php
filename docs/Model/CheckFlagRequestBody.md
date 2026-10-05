# # CheckFlagRequestBody

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**company** | **array<string,string>** |  | [optional]
**preflight** | [**\Schematic\Model\PreflightRequestBody**](PreflightRequestBody.md) | Hypothetical usage to evaluate the flag against, for answering \&quot;would this action be allowed?\&quot; before performing it. Only supported when checking a single flag. Values are caller-asserted and can widen a verdict as well as narrow it, so do not forward untrusted input here when the result gates access. Only the flag value reflects the preflight; the entitlement and usage figures in the response are the company&#39;s current, unsimulated ones | [optional]
**user** | **array<string,string>** |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
