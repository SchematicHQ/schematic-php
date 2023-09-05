# OpenAPI\Client\FeaturesApi

All URIs are relative to https://api.schematichq.com, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**checkFlag()**](FeaturesApi.md#checkFlag) | **POST** /flags/{key}/check | Check flag |
| [**countFlagValues()**](FeaturesApi.md#countFlagValues) | **GET** /flag-values/count | Count flag values |
| [**createFeature()**](FeaturesApi.md#createFeature) | **POST** /features | Create feature |
| [**deleteFeature()**](FeaturesApi.md#deleteFeature) | **DELETE** /features/{feature_id} | Delete feature |
| [**getFeature()**](FeaturesApi.md#getFeature) | **GET** /features/{feature_id} | Get feature |
| [**listFeatures()**](FeaturesApi.md#listFeatures) | **GET** /features | List features |
| [**listFlagValues()**](FeaturesApi.md#listFlagValues) | **GET** /flag-values | List flag values |
| [**updateFeature()**](FeaturesApi.md#updateFeature) | **PUT** /features/{feature_id} | Update feature |


## `checkFlag()`

```php
checkFlag($key, $check_flag_request, $x_schematic_environment_id): \OpenAPI\Client\Model\CheckFlag200Response
```

Check flag

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKeyAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('X-Schematic-Api-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Schematic-Api-Key', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\FeaturesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$key = 'key_example'; // string | key
$check_flag_request = new \OpenAPI\Client\Model\CheckFlagRequest(); // \OpenAPI\Client\Model\CheckFlagRequest
$x_schematic_environment_id = 'x_schematic_environment_id_example'; // string | If the request is made using an API key that is not environment-scoped, specify the environment using this header

try {
    $result = $apiInstance->checkFlag($key, $check_flag_request, $x_schematic_environment_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FeaturesApi->checkFlag: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **key** | **string**| key | |
| **check_flag_request** | [**\OpenAPI\Client\Model\CheckFlagRequest**](../Model/CheckFlagRequest.md)|  | |
| **x_schematic_environment_id** | **string**| If the request is made using an API key that is not environment-scoped, specify the environment using this header | [optional] |

### Return type

[**\OpenAPI\Client\Model\CheckFlag200Response**](../Model/CheckFlag200Response.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `countFlagValues()`

```php
countFlagValues($x_schematic_environment_id, $entity_type, $entity_id, $flag_id, $limit, $offset, $order, $dir): \OpenAPI\Client\Model\CountFlagValues200Response
```

Count flag values

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKeyAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('X-Schematic-Api-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Schematic-Api-Key', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\FeaturesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$x_schematic_environment_id = 'x_schematic_environment_id_example'; // string | If the request is made using an API key that is not environment-scoped, specify the environment using this header
$entity_type = 56; // int
$entity_id = 'entity_id_example'; // string
$flag_id = 'flag_id_example'; // string
$limit = 56; // int | Page limit (default 100)
$offset = 56; // int | Page offset (default 0)
$order = 'order_example'; // string | Order by column
$dir = 'dir_example'; // string | Order direction

try {
    $result = $apiInstance->countFlagValues($x_schematic_environment_id, $entity_type, $entity_id, $flag_id, $limit, $offset, $order, $dir);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FeaturesApi->countFlagValues: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **x_schematic_environment_id** | **string**| If the request is made using an API key that is not environment-scoped, specify the environment using this header | [optional] |
| **entity_type** | **int**|  | [optional] |
| **entity_id** | **string**|  | [optional] |
| **flag_id** | **string**|  | [optional] |
| **limit** | **int**| Page limit (default 100) | [optional] |
| **offset** | **int**| Page offset (default 0) | [optional] |
| **order** | **string**| Order by column | [optional] |
| **dir** | **string**| Order direction | [optional] |

### Return type

[**\OpenAPI\Client\Model\CountFlagValues200Response**](../Model/CountFlagValues200Response.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createFeature()`

```php
createFeature($create_feature_request, $x_schematic_environment_id): \OpenAPI\Client\Model\CreateFeature200Response
```

Create feature

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKeyAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('X-Schematic-Api-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Schematic-Api-Key', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\FeaturesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$create_feature_request = new \OpenAPI\Client\Model\CreateFeatureRequest(); // \OpenAPI\Client\Model\CreateFeatureRequest
$x_schematic_environment_id = 'x_schematic_environment_id_example'; // string | If the request is made using an API key that is not environment-scoped, specify the environment using this header

try {
    $result = $apiInstance->createFeature($create_feature_request, $x_schematic_environment_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FeaturesApi->createFeature: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **create_feature_request** | [**\OpenAPI\Client\Model\CreateFeatureRequest**](../Model/CreateFeatureRequest.md)|  | |
| **x_schematic_environment_id** | **string**| If the request is made using an API key that is not environment-scoped, specify the environment using this header | [optional] |

### Return type

[**\OpenAPI\Client\Model\CreateFeature200Response**](../Model/CreateFeature200Response.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteFeature()`

```php
deleteFeature($feature_id, $x_schematic_environment_id): \OpenAPI\Client\Model\DeleteApiKey200Response
```

Delete feature

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKeyAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('X-Schematic-Api-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Schematic-Api-Key', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\FeaturesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$feature_id = 'feature_id_example'; // string | feature_id
$x_schematic_environment_id = 'x_schematic_environment_id_example'; // string | If the request is made using an API key that is not environment-scoped, specify the environment using this header

try {
    $result = $apiInstance->deleteFeature($feature_id, $x_schematic_environment_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FeaturesApi->deleteFeature: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **feature_id** | **string**| feature_id | |
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

## `getFeature()`

```php
getFeature($feature_id, $x_schematic_environment_id): \OpenAPI\Client\Model\GetFeature200Response
```

Get feature

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKeyAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('X-Schematic-Api-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Schematic-Api-Key', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\FeaturesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$feature_id = 'feature_id_example'; // string | feature_id
$x_schematic_environment_id = 'x_schematic_environment_id_example'; // string | If the request is made using an API key that is not environment-scoped, specify the environment using this header

try {
    $result = $apiInstance->getFeature($feature_id, $x_schematic_environment_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FeaturesApi->getFeature: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **feature_id** | **string**| feature_id | |
| **x_schematic_environment_id** | **string**| If the request is made using an API key that is not environment-scoped, specify the environment using this header | [optional] |

### Return type

[**\OpenAPI\Client\Model\GetFeature200Response**](../Model/GetFeature200Response.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listFeatures()`

```php
listFeatures($x_schematic_environment_id, $limit, $offset, $order, $dir): \OpenAPI\Client\Model\ListFeatures200Response
```

List features

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKeyAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('X-Schematic-Api-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Schematic-Api-Key', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\FeaturesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$x_schematic_environment_id = 'x_schematic_environment_id_example'; // string | If the request is made using an API key that is not environment-scoped, specify the environment using this header
$limit = 56; // int | Page limit (default 100)
$offset = 56; // int | Page offset (default 0)
$order = 'order_example'; // string | Order by column
$dir = 'dir_example'; // string | Order direction

try {
    $result = $apiInstance->listFeatures($x_schematic_environment_id, $limit, $offset, $order, $dir);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FeaturesApi->listFeatures: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **x_schematic_environment_id** | **string**| If the request is made using an API key that is not environment-scoped, specify the environment using this header | [optional] |
| **limit** | **int**| Page limit (default 100) | [optional] |
| **offset** | **int**| Page offset (default 0) | [optional] |
| **order** | **string**| Order by column | [optional] |
| **dir** | **string**| Order direction | [optional] |

### Return type

[**\OpenAPI\Client\Model\ListFeatures200Response**](../Model/ListFeatures200Response.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listFlagValues()`

```php
listFlagValues($x_schematic_environment_id, $entity_type, $entity_id, $flag_id, $limit, $offset, $order, $dir): \OpenAPI\Client\Model\ListFlagValues200Response
```

List flag values

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKeyAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('X-Schematic-Api-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Schematic-Api-Key', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\FeaturesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$x_schematic_environment_id = 'x_schematic_environment_id_example'; // string | If the request is made using an API key that is not environment-scoped, specify the environment using this header
$entity_type = 56; // int
$entity_id = 'entity_id_example'; // string
$flag_id = 'flag_id_example'; // string
$limit = 56; // int | Page limit (default 100)
$offset = 56; // int | Page offset (default 0)
$order = 'order_example'; // string | Order by column
$dir = 'dir_example'; // string | Order direction

try {
    $result = $apiInstance->listFlagValues($x_schematic_environment_id, $entity_type, $entity_id, $flag_id, $limit, $offset, $order, $dir);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FeaturesApi->listFlagValues: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **x_schematic_environment_id** | **string**| If the request is made using an API key that is not environment-scoped, specify the environment using this header | [optional] |
| **entity_type** | **int**|  | [optional] |
| **entity_id** | **string**|  | [optional] |
| **flag_id** | **string**|  | [optional] |
| **limit** | **int**| Page limit (default 100) | [optional] |
| **offset** | **int**| Page offset (default 0) | [optional] |
| **order** | **string**| Order by column | [optional] |
| **dir** | **string**| Order direction | [optional] |

### Return type

[**\OpenAPI\Client\Model\ListFlagValues200Response**](../Model/ListFlagValues200Response.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateFeature()`

```php
updateFeature($feature_id, $create_feature_request, $x_schematic_environment_id): \OpenAPI\Client\Model\GetFeature200Response
```

Update feature

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKeyAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('X-Schematic-Api-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Schematic-Api-Key', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\FeaturesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$feature_id = 'feature_id_example'; // string | feature_id
$create_feature_request = new \OpenAPI\Client\Model\CreateFeatureRequest(); // \OpenAPI\Client\Model\CreateFeatureRequest
$x_schematic_environment_id = 'x_schematic_environment_id_example'; // string | If the request is made using an API key that is not environment-scoped, specify the environment using this header

try {
    $result = $apiInstance->updateFeature($feature_id, $create_feature_request, $x_schematic_environment_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FeaturesApi->updateFeature: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **feature_id** | **string**| feature_id | |
| **create_feature_request** | [**\OpenAPI\Client\Model\CreateFeatureRequest**](../Model/CreateFeatureRequest.md)|  | |
| **x_schematic_environment_id** | **string**| If the request is made using an API key that is not environment-scoped, specify the environment using this header | [optional] |

### Return type

[**\OpenAPI\Client\Model\GetFeature200Response**](../Model/GetFeature200Response.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
