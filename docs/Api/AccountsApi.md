# Schematic\AccountsApi

All URIs are relative to https://api.schematichq.com, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**countApiKeys()**](AccountsApi.md#countApiKeys) | **GET** /api-keys/count | Count api keys |
| [**countApiRequests()**](AccountsApi.md#countApiRequests) | **GET** /api-requests/count | Count api requests |
| [**createApiKey()**](AccountsApi.md#createApiKey) | **POST** /api-keys | Create api key |
| [**createEnvironment()**](AccountsApi.md#createEnvironment) | **POST** /environments | Create environment |
| [**deleteApiKey()**](AccountsApi.md#deleteApiKey) | **DELETE** /api-keys/{api_key_id} | Delete api key |
| [**deleteEnvironment()**](AccountsApi.md#deleteEnvironment) | **DELETE** /environments/{environment_id} | Delete environment |
| [**getApiKey()**](AccountsApi.md#getApiKey) | **GET** /api-keys/{api_key_id} | Get api key |
| [**getApiRequest()**](AccountsApi.md#getApiRequest) | **GET** /api-requests/{api_request_id} | Get api request |
| [**getEnvironment()**](AccountsApi.md#getEnvironment) | **GET** /environments/{environment_id} | Get environment |
| [**listApiKeys()**](AccountsApi.md#listApiKeys) | **GET** /api-keys | List api keys |
| [**listApiRequests()**](AccountsApi.md#listApiRequests) | **GET** /api-requests | List api requests |
| [**updateApiKey()**](AccountsApi.md#updateApiKey) | **PUT** /api-keys/{api_key_id} | Update api key |
| [**updateEnvironment()**](AccountsApi.md#updateEnvironment) | **PUT** /environments/{environment_id} | Update environment |


## `countApiKeys()`

```php
countApiKeys($require_environment, $environment_id, $limit, $offset): \Schematic\Model\CountApiKeysResponse
```

Count api keys

### Example

```php
<?php
require_once 'vendor/autoload.php';

use Schematic\Schematic;

$schematic = new Schematic('YOUR_SECRET_API_KEY');

$require_environment = True; // bool
$environment_id = 'environment_id_example'; // string
$limit = 100; // int | Page limit (default 100)
$offset = 0; // int | Page offset (default 0)

try {
    $result = $schematic->AccountsApi->countApiKeys($require_environment, $environment_id, $limit, $offset);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Schematic->AccountsApi->countApiKeys: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **require_environment** | **bool**|  | |
| **environment_id** | **string**|  | [optional] |
| **limit** | **int**| Page limit (default 100) | [optional] |
| **offset** | **int**| Page offset (default 0) | [optional] |

### Return type

[**\Schematic\Model\CountApiKeysResponse**](../Model/CountApiKeysResponse.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `countApiRequests()`

```php
countApiRequests($q, $request_type, $limit, $offset): \Schematic\Model\CountApiRequestsResponse
```

Count api requests

### Example

```php
<?php
require_once 'vendor/autoload.php';

use Schematic\Schematic;

$schematic = new Schematic('YOUR_SECRET_API_KEY');

$q = 'q_example'; // string
$request_type = 'request_type_example'; // string
$limit = 100; // int | Page limit (default 100)
$offset = 0; // int | Page offset (default 0)

try {
    $result = $schematic->AccountsApi->countApiRequests($q, $request_type, $limit, $offset);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Schematic->AccountsApi->countApiRequests: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **q** | **string**|  | [optional] |
| **request_type** | **string**|  | [optional] |
| **limit** | **int**| Page limit (default 100) | [optional] |
| **offset** | **int**| Page offset (default 0) | [optional] |

### Return type

[**\Schematic\Model\CountApiRequestsResponse**](../Model/CountApiRequestsResponse.md)

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
createApiKey($create_api_key_request_body): \Schematic\Model\CreateApiKeyResponse
```

Create api key

### Example

```php
<?php
require_once 'vendor/autoload.php';

use Schematic\Schematic;

$schematic = new Schematic('YOUR_SECRET_API_KEY');

$create_api_key_request_body = new \Schematic\Model\CreateApiKeyRequestBody(); // \Schematic\Model\CreateApiKeyRequestBody

try {
    $result = $schematic->AccountsApi->createApiKey($create_api_key_request_body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Schematic->AccountsApi->createApiKey: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **create_api_key_request_body** | [**\Schematic\Model\CreateApiKeyRequestBody**](../Model/CreateApiKeyRequestBody.md)|  | |

### Return type

[**\Schematic\Model\CreateApiKeyResponse**](../Model/CreateApiKeyResponse.md)

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
createEnvironment($create_environment_request_body): \Schematic\Model\CreateEnvironmentResponse
```

Create environment

### Example

```php
<?php
require_once 'vendor/autoload.php';

use Schematic\Schematic;

$schematic = new Schematic('YOUR_SECRET_API_KEY');

$create_environment_request_body = new \Schematic\Model\CreateEnvironmentRequestBody(); // \Schematic\Model\CreateEnvironmentRequestBody

try {
    $result = $schematic->AccountsApi->createEnvironment($create_environment_request_body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Schematic->AccountsApi->createEnvironment: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **create_environment_request_body** | [**\Schematic\Model\CreateEnvironmentRequestBody**](../Model/CreateEnvironmentRequestBody.md)|  | |

### Return type

[**\Schematic\Model\CreateEnvironmentResponse**](../Model/CreateEnvironmentResponse.md)

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
deleteApiKey($api_key_id): \Schematic\Model\DeleteApiKeyResponse
```

Delete api key

### Example

```php
<?php
require_once 'vendor/autoload.php';

use Schematic\Schematic;

$schematic = new Schematic('YOUR_SECRET_API_KEY');

$api_key_id = 'api_key_id_example'; // string | api_key_id

try {
    $result = $schematic->AccountsApi->deleteApiKey($api_key_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Schematic->AccountsApi->deleteApiKey: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **api_key_id** | **string**| api_key_id | |

### Return type

[**\Schematic\Model\DeleteApiKeyResponse**](../Model/DeleteApiKeyResponse.md)

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
deleteEnvironment($environment_id): \Schematic\Model\DeleteEnvironmentResponse
```

Delete environment

### Example

```php
<?php
require_once 'vendor/autoload.php';

use Schematic\Schematic;

$schematic = new Schematic('YOUR_SECRET_API_KEY');

$environment_id = 'environment_id_example'; // string | environment_id

try {
    $result = $schematic->AccountsApi->deleteEnvironment($environment_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Schematic->AccountsApi->deleteEnvironment: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **environment_id** | **string**| environment_id | |

### Return type

[**\Schematic\Model\DeleteEnvironmentResponse**](../Model/DeleteEnvironmentResponse.md)

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
getApiKey($api_key_id): \Schematic\Model\GetApiKeyResponse
```

Get api key

### Example

```php
<?php
require_once 'vendor/autoload.php';

use Schematic\Schematic;

$schematic = new Schematic('YOUR_SECRET_API_KEY');

$api_key_id = 'api_key_id_example'; // string | api_key_id

try {
    $result = $schematic->AccountsApi->getApiKey($api_key_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Schematic->AccountsApi->getApiKey: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **api_key_id** | **string**| api_key_id | |

### Return type

[**\Schematic\Model\GetApiKeyResponse**](../Model/GetApiKeyResponse.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getApiRequest()`

```php
getApiRequest($api_request_id): \Schematic\Model\GetApiRequestResponse
```

Get api request

### Example

```php
<?php
require_once 'vendor/autoload.php';

use Schematic\Schematic;

$schematic = new Schematic('YOUR_SECRET_API_KEY');

$api_request_id = 'api_request_id_example'; // string | api_request_id

try {
    $result = $schematic->AccountsApi->getApiRequest($api_request_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Schematic->AccountsApi->getApiRequest: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **api_request_id** | **string**| api_request_id | |

### Return type

[**\Schematic\Model\GetApiRequestResponse**](../Model/GetApiRequestResponse.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getEnvironment()`

```php
getEnvironment($environment_id): \Schematic\Model\GetEnvironmentResponse
```

Get environment

### Example

```php
<?php
require_once 'vendor/autoload.php';

use Schematic\Schematic;

$schematic = new Schematic('YOUR_SECRET_API_KEY');

$environment_id = 'environment_id_example'; // string | environment_id

try {
    $result = $schematic->AccountsApi->getEnvironment($environment_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Schematic->AccountsApi->getEnvironment: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **environment_id** | **string**| environment_id | |

### Return type

[**\Schematic\Model\GetEnvironmentResponse**](../Model/GetEnvironmentResponse.md)

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
listApiKeys($require_environment, $environment_id, $limit, $offset): \Schematic\Model\ListApiKeysResponse
```

List api keys

### Example

```php
<?php
require_once 'vendor/autoload.php';

use Schematic\Schematic;

$schematic = new Schematic('YOUR_SECRET_API_KEY');

$require_environment = True; // bool
$environment_id = 'environment_id_example'; // string
$limit = 100; // int | Page limit (default 100)
$offset = 0; // int | Page offset (default 0)

try {
    $result = $schematic->AccountsApi->listApiKeys($require_environment, $environment_id, $limit, $offset);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Schematic->AccountsApi->listApiKeys: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **require_environment** | **bool**|  | |
| **environment_id** | **string**|  | [optional] |
| **limit** | **int**| Page limit (default 100) | [optional] |
| **offset** | **int**| Page offset (default 0) | [optional] |

### Return type

[**\Schematic\Model\ListApiKeysResponse**](../Model/ListApiKeysResponse.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listApiRequests()`

```php
listApiRequests($q, $request_type, $limit, $offset): \Schematic\Model\ListApiRequestsResponse
```

List api requests

### Example

```php
<?php
require_once 'vendor/autoload.php';

use Schematic\Schematic;

$schematic = new Schematic('YOUR_SECRET_API_KEY');

$q = 'q_example'; // string
$request_type = 'request_type_example'; // string
$limit = 100; // int | Page limit (default 100)
$offset = 0; // int | Page offset (default 0)

try {
    $result = $schematic->AccountsApi->listApiRequests($q, $request_type, $limit, $offset);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Schematic->AccountsApi->listApiRequests: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **q** | **string**|  | [optional] |
| **request_type** | **string**|  | [optional] |
| **limit** | **int**| Page limit (default 100) | [optional] |
| **offset** | **int**| Page offset (default 0) | [optional] |

### Return type

[**\Schematic\Model\ListApiRequestsResponse**](../Model/ListApiRequestsResponse.md)

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
updateApiKey($api_key_id, $update_api_key_request_body): \Schematic\Model\UpdateApiKeyResponse
```

Update api key

### Example

```php
<?php
require_once 'vendor/autoload.php';

use Schematic\Schematic;

$schematic = new Schematic('YOUR_SECRET_API_KEY');

$api_key_id = 'api_key_id_example'; // string | api_key_id
$update_api_key_request_body = new \Schematic\Model\UpdateApiKeyRequestBody(); // \Schematic\Model\UpdateApiKeyRequestBody

try {
    $result = $schematic->AccountsApi->updateApiKey($api_key_id, $update_api_key_request_body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Schematic->AccountsApi->updateApiKey: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **api_key_id** | **string**| api_key_id | |
| **update_api_key_request_body** | [**\Schematic\Model\UpdateApiKeyRequestBody**](../Model/UpdateApiKeyRequestBody.md)|  | |

### Return type

[**\Schematic\Model\UpdateApiKeyResponse**](../Model/UpdateApiKeyResponse.md)

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
updateEnvironment($environment_id, $update_environment_request_body): \Schematic\Model\UpdateEnvironmentResponse
```

Update environment

### Example

```php
<?php
require_once 'vendor/autoload.php';

use Schematic\Schematic;

$schematic = new Schematic('YOUR_SECRET_API_KEY');

$environment_id = 'environment_id_example'; // string | environment_id
$update_environment_request_body = new \Schematic\Model\UpdateEnvironmentRequestBody(); // \Schematic\Model\UpdateEnvironmentRequestBody

try {
    $result = $schematic->AccountsApi->updateEnvironment($environment_id, $update_environment_request_body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Schematic->AccountsApi->updateEnvironment: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **environment_id** | **string**| environment_id | |
| **update_environment_request_body** | [**\Schematic\Model\UpdateEnvironmentRequestBody**](../Model/UpdateEnvironmentRequestBody.md)|  | |

### Return type

[**\Schematic\Model\UpdateEnvironmentResponse**](../Model/UpdateEnvironmentResponse.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
