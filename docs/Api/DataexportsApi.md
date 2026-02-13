# Schematic\DataexportsApi

All URIs are relative to https://api.schematichq.com, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createDataExport()**](DataexportsApi.md#createDataExport) | **POST** /data-exports | Create data export |
| [**getDataExportArtifact()**](DataexportsApi.md#getDataExportArtifact) | **GET** /data-exports/{data_export_id}/artifact | Get data export artifact |


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
