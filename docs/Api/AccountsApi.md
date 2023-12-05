# OpenAPI\Client\AccountsApi

All URIs are relative to https://api.schematichq.com, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**countApiKeys()**](AccountsApi.md#countApiKeys) | **GET** /api-keys/count | Count api keys |
| [**createApiKey()**](AccountsApi.md#createApiKey) | **POST** /api-keys | Create api key |
| [**createEnvironment()**](AccountsApi.md#createEnvironment) | **POST** /environments | Create environment |
| [**deleteApiKey()**](AccountsApi.md#deleteApiKey) | **DELETE** /api-keys/{api_key_id} | Delete api key |
| [**deleteEnvironment()**](AccountsApi.md#deleteEnvironment) | **DELETE** /environments/{environment_id} | Delete environment |
| [**getApiKey()**](AccountsApi.md#getApiKey) | **GET** /api-keys/{api_key_id} | Get api key |
| [**listApiKeys()**](AccountsApi.md#listApiKeys) | **GET** /api-keys | List api keys |
| [**updateApiKey()**](AccountsApi.md#updateApiKey) | **PUT** /api-keys/{api_key_id} | Update api key |
| [**updateEnvironment()**](AccountsApi.md#updateEnvironment) | **PUT** /environments/{environment_id} | Update environment |


## `countApiKeys()`

```php
countApiKeys($require_environment, $x_schematic_environment_id, $environment_id, $limit, $offset, $order, $dir): \OpenAPI\Client\Model\CountApiKeysResponse
```

Count api keys

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
$require_environment = True; // bool
$x_schematic_environment_id = 'x_schematic_environment_id_example'; // string | If the request is made using an API key that is not environment-scoped, specify the environment using this header
$environment_id = 'environment_id_example'; // string
$limit = 56; // int | Page limit (default 100)
$offset = 56; // int | Page offset (default 0)
$order = 'order_example'; // string | Order by column
$dir = 'dir_example'; // string | Order direction

try {
    $result = $apiInstance->countApiKeys($require_environment, $x_schematic_environment_id, $environment_id, $limit, $offset, $order, $dir);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountsApi->countApiKeys: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **require_environment** | **bool**|  | |
| **x_schematic_environment_id** | **string**| If the request is made using an API key that is not environment-scoped, specify the environment using this header | [optional] |
| **environment_id** | **string**|  | [optional] |
| **limit** | **int**| Page limit (default 100) | [optional] |
| **offset** | **int**| Page offset (default 0) | [optional] |
| **order** | **string**| Order by column | [optional] |
| **dir** | **string**| Order direction | [optional] |

### Return type

[**\OpenAPI\Client\Model\CountApiKeysResponse**](../Model/CountApiKeysResponse.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createApiKey()`

```php
createApiKey($create_api_key_request_body, $x_schematic_environment_id): \OpenAPI\Client\Model\CreateApiKeyResponse
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
$create_api_key_request_body = new \OpenAPI\Client\Model\CreateApiKeyRequestBody(); // \OpenAPI\Client\Model\CreateApiKeyRequestBody
$x_schematic_environment_id = 'x_schematic_environment_id_example'; // string | If the request is made using an API key that is not environment-scoped, specify the environment using this header

try {
    $result = $apiInstance->createApiKey($create_api_key_request_body, $x_schematic_environment_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountsApi->createApiKey: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **create_api_key_request_body** | [**\OpenAPI\Client\Model\CreateApiKeyRequestBody**](../Model/CreateApiKeyRequestBody.md)|  | |
| **x_schematic_environment_id** | **string**| If the request is made using an API key that is not environment-scoped, specify the environment using this header | [optional] |

### Return type

[**\OpenAPI\Client\Model\CreateApiKeyResponse**](../Model/CreateApiKeyResponse.md)

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
createEnvironment($create_environment_request_body, $x_schematic_environment_id): \OpenAPI\Client\Model\CreateEnvironmentResponse
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
$create_environment_request_body = new \OpenAPI\Client\Model\CreateEnvironmentRequestBody(); // \OpenAPI\Client\Model\CreateEnvironmentRequestBody
$x_schematic_environment_id = 'x_schematic_environment_id_example'; // string | If the request is made using an API key that is not environment-scoped, specify the environment using this header

try {
    $result = $apiInstance->createEnvironment($create_environment_request_body, $x_schematic_environment_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountsApi->createEnvironment: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **create_environment_request_body** | [**\OpenAPI\Client\Model\CreateEnvironmentRequestBody**](../Model/CreateEnvironmentRequestBody.md)|  | |
| **x_schematic_environment_id** | **string**| If the request is made using an API key that is not environment-scoped, specify the environment using this header | [optional] |

### Return type

[**\OpenAPI\Client\Model\CreateEnvironmentResponse**](../Model/CreateEnvironmentResponse.md)

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
deleteApiKey($api_key_id, $x_schematic_environment_id): \OpenAPI\Client\Model\DeleteApiKeyResponse
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

[**\OpenAPI\Client\Model\DeleteApiKeyResponse**](../Model/DeleteApiKeyResponse.md)

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
deleteEnvironment($environment_id, $x_schematic_environment_id): \OpenAPI\Client\Model\DeleteEnvironmentResponse
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

[**\OpenAPI\Client\Model\DeleteEnvironmentResponse**](../Model/DeleteEnvironmentResponse.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getApiKey()`

```php
getApiKey($api_key_id, $x_schematic_environment_id): \OpenAPI\Client\Model\GetApiKeyResponse
```

Get api key

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
    $result = $apiInstance->getApiKey($api_key_id, $x_schematic_environment_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountsApi->getApiKey: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **api_key_id** | **string**| api_key_id | |
| **x_schematic_environment_id** | **string**| If the request is made using an API key that is not environment-scoped, specify the environment using this header | [optional] |

### Return type

[**\OpenAPI\Client\Model\GetApiKeyResponse**](../Model/GetApiKeyResponse.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listApiKeys()`

```php
listApiKeys($require_environment, $x_schematic_environment_id, $environment_id, $limit, $offset, $order, $dir): \OpenAPI\Client\Model\ListApiKeysResponse
```

List api keys

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
$require_environment = True; // bool
$x_schematic_environment_id = 'x_schematic_environment_id_example'; // string | If the request is made using an API key that is not environment-scoped, specify the environment using this header
$environment_id = 'environment_id_example'; // string
$limit = 56; // int | Page limit (default 100)
$offset = 56; // int | Page offset (default 0)
$order = 'order_example'; // string | Order by column
$dir = 'dir_example'; // string | Order direction

try {
    $result = $apiInstance->listApiKeys($require_environment, $x_schematic_environment_id, $environment_id, $limit, $offset, $order, $dir);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountsApi->listApiKeys: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **require_environment** | **bool**|  | |
| **x_schematic_environment_id** | **string**| If the request is made using an API key that is not environment-scoped, specify the environment using this header | [optional] |
| **environment_id** | **string**|  | [optional] |
| **limit** | **int**| Page limit (default 100) | [optional] |
| **offset** | **int**| Page offset (default 0) | [optional] |
| **order** | **string**| Order by column | [optional] |
| **dir** | **string**| Order direction | [optional] |

### Return type

[**\OpenAPI\Client\Model\ListApiKeysResponse**](../Model/ListApiKeysResponse.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateApiKey()`

```php
updateApiKey($api_key_id, $update_api_key_request_body, $x_schematic_environment_id): \OpenAPI\Client\Model\UpdateApiKeyResponse
```

Update api key

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
$update_api_key_request_body = new \OpenAPI\Client\Model\UpdateApiKeyRequestBody(); // \OpenAPI\Client\Model\UpdateApiKeyRequestBody
$x_schematic_environment_id = 'x_schematic_environment_id_example'; // string | If the request is made using an API key that is not environment-scoped, specify the environment using this header

try {
    $result = $apiInstance->updateApiKey($api_key_id, $update_api_key_request_body, $x_schematic_environment_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountsApi->updateApiKey: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **api_key_id** | **string**| api_key_id | |
| **update_api_key_request_body** | [**\OpenAPI\Client\Model\UpdateApiKeyRequestBody**](../Model/UpdateApiKeyRequestBody.md)|  | |
| **x_schematic_environment_id** | **string**| If the request is made using an API key that is not environment-scoped, specify the environment using this header | [optional] |

### Return type

[**\OpenAPI\Client\Model\UpdateApiKeyResponse**](../Model/UpdateApiKeyResponse.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateEnvironment()`

```php
updateEnvironment($environment_id, $update_environment_request_body, $x_schematic_environment_id): \OpenAPI\Client\Model\UpdateEnvironmentResponse
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
$update_environment_request_body = new \OpenAPI\Client\Model\UpdateEnvironmentRequestBody(); // \OpenAPI\Client\Model\UpdateEnvironmentRequestBody
$x_schematic_environment_id = 'x_schematic_environment_id_example'; // string | If the request is made using an API key that is not environment-scoped, specify the environment using this header

try {
    $result = $apiInstance->updateEnvironment($environment_id, $update_environment_request_body, $x_schematic_environment_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountsApi->updateEnvironment: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **environment_id** | **string**| environment_id | |
| **update_environment_request_body** | [**\OpenAPI\Client\Model\UpdateEnvironmentRequestBody**](../Model/UpdateEnvironmentRequestBody.md)|  | |
| **x_schematic_environment_id** | **string**| If the request is made using an API key that is not environment-scoped, specify the environment using this header | [optional] |

### Return type

[**\OpenAPI\Client\Model\UpdateEnvironmentResponse**](../Model/UpdateEnvironmentResponse.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
