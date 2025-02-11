# Schematic\AccesstokensApi

All URIs are relative to https://api.schematichq.com, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**issueTemporaryAccessToken()**](AccesstokensApi.md#issueTemporaryAccessToken) | **POST** /temporary-access-tokens | Issue temporary access token |


## `issueTemporaryAccessToken()`

```php
issueTemporaryAccessToken($issue_temporary_access_token_request_body): \Schematic\Model\IssueTemporaryAccessTokenResponse
```

Issue temporary access token

### Example

```php
<?php
require_once 'vendor/autoload.php';

use Schematic\Schematic;

$schematic = new Schematic('YOUR_SECRET_API_KEY');

$issue_temporary_access_token_request_body = new \Schematic\Model\IssueTemporaryAccessTokenRequestBody(); // \Schematic\Model\IssueTemporaryAccessTokenRequestBody

try {
    $result = $schematic->AccesstokensApi->issueTemporaryAccessToken($issue_temporary_access_token_request_body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Schematic->AccesstokensApi->issueTemporaryAccessToken: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **issue_temporary_access_token_request_body** | [**\Schematic\Model\IssueTemporaryAccessTokenRequestBody**](../Model/IssueTemporaryAccessTokenRequestBody.md)|  | |

### Return type

[**\Schematic\Model\IssueTemporaryAccessTokenResponse**](../Model/IssueTemporaryAccessTokenResponse.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
