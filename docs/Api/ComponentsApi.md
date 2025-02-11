# Schematic\ComponentsApi

All URIs are relative to https://api.schematichq.com, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**countComponents()**](ComponentsApi.md#countComponents) | **GET** /components/count | Count components |
| [**createComponent()**](ComponentsApi.md#createComponent) | **POST** /components | Create component |
| [**deleteComponent()**](ComponentsApi.md#deleteComponent) | **DELETE** /components/{component_id} | Delete component |
| [**getComponent()**](ComponentsApi.md#getComponent) | **GET** /components/{component_id} | Get component |
| [**listComponents()**](ComponentsApi.md#listComponents) | **GET** /components | List components |
| [**previewComponentData()**](ComponentsApi.md#previewComponentData) | **GET** /components/preview-data | Preview component data |
| [**updateComponent()**](ComponentsApi.md#updateComponent) | **PUT** /components/{component_id} | Update component |


## `countComponents()`

```php
countComponents($q, $limit, $offset): \Schematic\Model\CountComponentsResponse
```

Count components

### Example

```php
<?php
require_once 'vendor/autoload.php';

use Schematic\Schematic;

$schematic = new Schematic('YOUR_SECRET_API_KEY');

$q = 'q_example'; // string
$limit = 100; // int | Page limit (default 100)
$offset = 0; // int | Page offset (default 0)

try {
    $result = $schematic->ComponentsApi->countComponents($q, $limit, $offset);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Schematic->ComponentsApi->countComponents: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **q** | **string**|  | [optional] |
| **limit** | **int**| Page limit (default 100) | [optional] |
| **offset** | **int**| Page offset (default 0) | [optional] |

### Return type

[**\Schematic\Model\CountComponentsResponse**](../Model/CountComponentsResponse.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createComponent()`

```php
createComponent($create_component_request_body): \Schematic\Model\CreateComponentResponse
```

Create component

### Example

```php
<?php
require_once 'vendor/autoload.php';

use Schematic\Schematic;

$schematic = new Schematic('YOUR_SECRET_API_KEY');

$create_component_request_body = new \Schematic\Model\CreateComponentRequestBody(); // \Schematic\Model\CreateComponentRequestBody

try {
    $result = $schematic->ComponentsApi->createComponent($create_component_request_body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Schematic->ComponentsApi->createComponent: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **create_component_request_body** | [**\Schematic\Model\CreateComponentRequestBody**](../Model/CreateComponentRequestBody.md)|  | |

### Return type

[**\Schematic\Model\CreateComponentResponse**](../Model/CreateComponentResponse.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteComponent()`

```php
deleteComponent($component_id): \Schematic\Model\DeleteComponentResponse
```

Delete component

### Example

```php
<?php
require_once 'vendor/autoload.php';

use Schematic\Schematic;

$schematic = new Schematic('YOUR_SECRET_API_KEY');

$component_id = 'component_id_example'; // string | component_id

try {
    $result = $schematic->ComponentsApi->deleteComponent($component_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Schematic->ComponentsApi->deleteComponent: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **component_id** | **string**| component_id | |

### Return type

[**\Schematic\Model\DeleteComponentResponse**](../Model/DeleteComponentResponse.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getComponent()`

```php
getComponent($component_id): \Schematic\Model\GetComponentResponse
```

Get component

### Example

```php
<?php
require_once 'vendor/autoload.php';

use Schematic\Schematic;

$schematic = new Schematic('YOUR_SECRET_API_KEY');

$component_id = 'component_id_example'; // string | component_id

try {
    $result = $schematic->ComponentsApi->getComponent($component_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Schematic->ComponentsApi->getComponent: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **component_id** | **string**| component_id | |

### Return type

[**\Schematic\Model\GetComponentResponse**](../Model/GetComponentResponse.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listComponents()`

```php
listComponents($q, $limit, $offset): \Schematic\Model\ListComponentsResponse
```

List components

### Example

```php
<?php
require_once 'vendor/autoload.php';

use Schematic\Schematic;

$schematic = new Schematic('YOUR_SECRET_API_KEY');

$q = 'q_example'; // string
$limit = 100; // int | Page limit (default 100)
$offset = 0; // int | Page offset (default 0)

try {
    $result = $schematic->ComponentsApi->listComponents($q, $limit, $offset);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Schematic->ComponentsApi->listComponents: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **q** | **string**|  | [optional] |
| **limit** | **int**| Page limit (default 100) | [optional] |
| **offset** | **int**| Page offset (default 0) | [optional] |

### Return type

[**\Schematic\Model\ListComponentsResponse**](../Model/ListComponentsResponse.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `previewComponentData()`

```php
previewComponentData($company_id, $component_id): \Schematic\Model\PreviewComponentDataResponse
```

Preview component data

### Example

```php
<?php
require_once 'vendor/autoload.php';

use Schematic\Schematic;

$schematic = new Schematic('YOUR_SECRET_API_KEY');

$company_id = 'company_id_example'; // string
$component_id = 'component_id_example'; // string

try {
    $result = $schematic->ComponentsApi->previewComponentData($company_id, $component_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Schematic->ComponentsApi->previewComponentData: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **company_id** | **string**|  | [optional] |
| **component_id** | **string**|  | [optional] |

### Return type

[**\Schematic\Model\PreviewComponentDataResponse**](../Model/PreviewComponentDataResponse.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateComponent()`

```php
updateComponent($component_id, $update_component_request_body): \Schematic\Model\UpdateComponentResponse
```

Update component

### Example

```php
<?php
require_once 'vendor/autoload.php';

use Schematic\Schematic;

$schematic = new Schematic('YOUR_SECRET_API_KEY');

$component_id = 'component_id_example'; // string | component_id
$update_component_request_body = new \Schematic\Model\UpdateComponentRequestBody(); // \Schematic\Model\UpdateComponentRequestBody

try {
    $result = $schematic->ComponentsApi->updateComponent($component_id, $update_component_request_body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Schematic->ComponentsApi->updateComponent: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **component_id** | **string**| component_id | |
| **update_component_request_body** | [**\Schematic\Model\UpdateComponentRequestBody**](../Model/UpdateComponentRequestBody.md)|  | |

### Return type

[**\Schematic\Model\UpdateComponentResponse**](../Model/UpdateComponentResponse.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
