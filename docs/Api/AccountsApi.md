# OpenAPI\Client\AccountsApi

All URIs are relative to https://api.schematichq.com, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createApiKey()**](AccountsApi.md#createApiKey) | **POST** /api-keys | Create api key |
| [**createEnvironment()**](AccountsApi.md#createEnvironment) | **POST** /environments | Create environment |
| [**deleteApiKey()**](AccountsApi.md#deleteApiKey) | **DELETE** /api-keys/{api_key_id} | Delete api key |
| [**deleteEnvironment()**](AccountsApi.md#deleteEnvironment) | **DELETE** /environments/{environment_id} | Delete environment |
| [**updateEnvironment()**](AccountsApi.md#updateEnvironment) | **PUT** /environments/{environment_id} | Update environment |


## `createApiKey()`

```php
createApiKey($create_api_key_request, $x_schematic_environment_id): \OpenAPI\Client\Model\CreateApiKey200Response
```

Create api key

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKeyAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('X-Schematic-Api-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Schematic-Api-Key', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\AccountsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$create_api_key_request = new \OpenAPI\Client\Model\CreateApiKeyRequest(); // \OpenAPI\Client\Model\CreateApiKeyRequest
$x_schematic_environment_id = 'x_schematic_environment_id_example'; // string | If the request is made using an API key that is not environment-scoped, specify the environment using this header

try {
    $result = $apiInstance->createApiKey($create_api_key_request, $x_schematic_environment_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountsApi->createApiKey: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **create_api_key_request** | [**\OpenAPI\Client\Model\CreateApiKeyRequest**](../Model/CreateApiKeyRequest.md)|  | |
| **x_schematic_environment_id** | **string**| If the request is made using an API key that is not environment-scoped, specify the environment using this header | [optional] |

### Return type

[**\OpenAPI\Client\Model\CreateApiKey200Response**](../Model/CreateApiKey200Response.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createEnvironment()`

```php
createEnvironment($create_environment_request, $x_schematic_environment_id): \OpenAPI\Client\Model\CreateEnvironment200Response
```

Create environment

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKeyAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('X-Schematic-Api-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Schematic-Api-Key', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\AccountsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$create_environment_request = new \OpenAPI\Client\Model\CreateEnvironmentRequest(); // \OpenAPI\Client\Model\CreateEnvironmentRequest
$x_schematic_environment_id = 'x_schematic_environment_id_example'; // string | If the request is made using an API key that is not environment-scoped, specify the environment using this header

try {
    $result = $apiInstance->createEnvironment($create_environment_request, $x_schematic_environment_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountsApi->createEnvironment: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **create_environment_request** | [**\OpenAPI\Client\Model\CreateEnvironmentRequest**](../Model/CreateEnvironmentRequest.md)|  | |
| **x_schematic_environment_id** | **string**| If the request is made using an API key that is not environment-scoped, specify the environment using this header | [optional] |

### Return type

[**\OpenAPI\Client\Model\CreateEnvironment200Response**](../Model/CreateEnvironment200Response.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteApiKey()`

```php
deleteApiKey($api_key_id, $x_schematic_environment_id): \OpenAPI\Client\Model\DeleteApiKey200Response
```

Delete api key

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKeyAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('X-Schematic-Api-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Schematic-Api-Key', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\AccountsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$api_key_id = 'api_key_id_example'; // string | api_key_id
$x_schematic_environment_id = 'x_schematic_environment_id_example'; // string | If the request is made using an API key that is not environment-scoped, specify the environment using this header

try {
    $result = $apiInstance->deleteApiKey($api_key_id, $x_schematic_environment_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountsApi->deleteApiKey: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **api_key_id** | **string**| api_key_id | |
| **x_schematic_environment_id** | **string**| If the request is made using an API key that is not environment-scoped, specify the environment using this header | [optional] |

### Return type

[**\OpenAPI\Client\Model\DeleteApiKey200Response**](../Model/DeleteApiKey200Response.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteEnvironment()`

```php
deleteEnvironment($environment_id, $x_schematic_environment_id): \OpenAPI\Client\Model\DeleteApiKey200Response
```

Delete environment

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKeyAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('X-Schematic-Api-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Schematic-Api-Key', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\AccountsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$environment_id = 'environment_id_example'; // string | environment_id
$x_schematic_environment_id = 'x_schematic_environment_id_example'; // string | If the request is made using an API key that is not environment-scoped, specify the environment using this header

try {
    $result = $apiInstance->deleteEnvironment($environment_id, $x_schematic_environment_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountsApi->deleteEnvironment: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **environment_id** | **string**| environment_id | |
| **x_schematic_environment_id** | **string**| If the request is made using an API key that is not environment-scoped, specify the environment using this header | [optional] |

### Return type

[**\OpenAPI\Client\Model\DeleteApiKey200Response**](../Model/DeleteApiKey200Response.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateEnvironment()`

```php
updateEnvironment($environment_id, $create_environment_request, $x_schematic_environment_id): \OpenAPI\Client\Model\UpdateEnvironment200Response
```

Update environment

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKeyAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('X-Schematic-Api-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Schematic-Api-Key', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\AccountsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$environment_id = 'environment_id_example'; // string | environment_id
$create_environment_request = new \OpenAPI\Client\Model\CreateEnvironmentRequest(); // \OpenAPI\Client\Model\CreateEnvironmentRequest
$x_schematic_environment_id = 'x_schematic_environment_id_example'; // string | If the request is made using an API key that is not environment-scoped, specify the environment using this header

try {
    $result = $apiInstance->updateEnvironment($environment_id, $create_environment_request, $x_schematic_environment_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountsApi->updateEnvironment: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **environment_id** | **string**| environment_id | |
| **create_environment_request** | [**\OpenAPI\Client\Model\CreateEnvironmentRequest**](../Model/CreateEnvironmentRequest.md)|  | |
| **x_schematic_environment_id** | **string**| If the request is made using an API key that is not environment-scoped, specify the environment using this header | [optional] |

### Return type

[**\OpenAPI\Client\Model\UpdateEnvironment200Response**](../Model/UpdateEnvironment200Response.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
