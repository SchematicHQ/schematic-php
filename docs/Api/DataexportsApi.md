# Schematic\DataexportsApi

All URIs are relative to https://api.schematichq.com, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createDataExport()**](DataexportsApi.md#createDataExport) | **POST** /data-exports | Create data export |
| [**getDataExport()**](DataexportsApi.md#getDataExport) | **GET** /data-exports/{data_export_id} | Get data export |
| [**getDataExportArtifact()**](DataexportsApi.md#getDataExportArtifact) | **GET** /data-exports/{data_export_id}/artifact | Get data export artifact |
| [**listDataExports()**](DataexportsApi.md#listDataExports) | **GET** /data-exports | List data exports |


## `createDataExport()`

```php
createDataExport($create_data_export_request_body): \Schematic\Model\CreateDataExportResponse
```

Create data export

### Example

```php
<?php
require_once 'vendor/autoload.php';

use Schematic\Schematic;

$schematic = new Schematic('YOUR_SECRET_API_KEY');

$create_data_export_request_body = new \Schematic\Model\CreateDataExportRequestBody(); // \Schematic\Model\CreateDataExportRequestBody

try {
    $result = $schematic->DataexportsApi->createDataExport($create_data_export_request_body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Schematic->DataexportsApi->createDataExport: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **create_data_export_request_body** | [**\Schematic\Model\CreateDataExportRequestBody**](../Model/CreateDataExportRequestBody.md)|  | |

### Return type

[**\Schematic\Model\CreateDataExportResponse**](../Model/CreateDataExportResponse.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getDataExport()`

```php
getDataExport($data_export_id): \Schematic\Model\GetDataExportResponse
```

Get data export

### Example

```php
<?php
require_once 'vendor/autoload.php';

use Schematic\Schematic;

$schematic = new Schematic('YOUR_SECRET_API_KEY');

$data_export_id = 'data_export_id_example'; // string | data_export_id

try {
    $result = $schematic->DataexportsApi->getDataExport($data_export_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Schematic->DataexportsApi->getDataExport: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **data_export_id** | **string**| data_export_id | |

### Return type

[**\Schematic\Model\GetDataExportResponse**](../Model/GetDataExportResponse.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getDataExportArtifact()`

```php
getDataExportArtifact($data_export_id): \SplFileObject
```

Get data export artifact

### Example

```php
<?php
require_once 'vendor/autoload.php';

use Schematic\Schematic;

$schematic = new Schematic('YOUR_SECRET_API_KEY');

$data_export_id = 'data_export_id_example'; // string | data_export_id

try {
    $result = $schematic->DataexportsApi->getDataExportArtifact($data_export_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Schematic->DataexportsApi->getDataExportArtifact: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **data_export_id** | **string**| data_export_id | |

### Return type

**\SplFileObject**

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `text/csv`, `application/octet-stream`, `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listDataExports()`

```php
listDataExports($export_type, $status, $limit, $offset): \Schematic\Model\ListDataExportsResponse
```

List data exports

### Example

```php
<?php
require_once 'vendor/autoload.php';

use Schematic\Schematic;

$schematic = new Schematic('YOUR_SECRET_API_KEY');

$export_type = new \Schematic\Model\DataExportType(); // DataExportType
$status = new \Schematic\Model\DataExportStatus(); // DataExportStatus
$limit = 100; // int | Page limit (default 100)
$offset = 0; // int | Page offset (default 0)

try {
    $result = $schematic->DataexportsApi->listDataExports($export_type, $status, $limit, $offset);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Schematic->DataexportsApi->listDataExports: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **export_type** | [**DataExportType**](../Model/.md)|  | [optional] |
| **status** | [**DataExportStatus**](../Model/.md)|  | [optional] |
| **limit** | **int**| Page limit (default 100) | [optional] |
| **offset** | **int**| Page offset (default 0) | [optional] |

### Return type

[**\Schematic\Model\ListDataExportsResponse**](../Model/ListDataExportsResponse.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
