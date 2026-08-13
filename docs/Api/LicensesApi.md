# Schematic\LicensesApi

All URIs are relative to https://api.schematichq.com, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**countLicenses()**](LicensesApi.md#countLicenses) | **GET** /licenses/count | Count licenses |
| [**getSingleLicense()**](LicensesApi.md#getSingleLicense) | **GET** /licenses/{license_id} | Get single license |
| [**listLicenses()**](LicensesApi.md#listLicenses) | **GET** /licenses | List licenses |


## `countLicenses()`

```php
countLicenses($feature_ids, $ids, $name, $limit, $offset): \Schematic\Model\CountLicensesResponse
```

Count licenses

### Example

```php
<?php
require_once 'vendor/autoload.php';

use Schematic\Schematic;

$schematic = new Schematic('YOUR_SECRET_API_KEY');

$feature_ids = array('feature_ids_example'); // string[]
$ids = array('ids_example'); // string[]
$name = 'name_example'; // string
$limit = 100; // int | Page limit (default 100)
$offset = 0; // int | Page offset (default 0)

try {
    $result = $schematic->LicensesApi->countLicenses($feature_ids, $ids, $name, $limit, $offset);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Schematic->LicensesApi->countLicenses: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **feature_ids** | [**string[]**](../Model/string.md)|  | [optional] |
| **ids** | [**string[]**](../Model/string.md)|  | [optional] |
| **name** | **string**|  | [optional] |
| **limit** | **int**| Page limit (default 100) | [optional] |
| **offset** | **int**| Page offset (default 0) | [optional] |

### Return type

[**\Schematic\Model\CountLicensesResponse**](../Model/CountLicensesResponse.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getSingleLicense()`

```php
getSingleLicense($license_id): \Schematic\Model\GetSingleLicenseResponse
```

Get single license

### Example

```php
<?php
require_once 'vendor/autoload.php';

use Schematic\Schematic;

$schematic = new Schematic('YOUR_SECRET_API_KEY');

$license_id = 'license_id_example'; // string | license_id

try {
    $result = $schematic->LicensesApi->getSingleLicense($license_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Schematic->LicensesApi->getSingleLicense: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **license_id** | **string**| license_id | |

### Return type

[**\Schematic\Model\GetSingleLicenseResponse**](../Model/GetSingleLicenseResponse.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listLicenses()`

```php
listLicenses($feature_ids, $ids, $name, $limit, $offset): \Schematic\Model\ListLicensesResponse
```

List licenses

### Example

```php
<?php
require_once 'vendor/autoload.php';

use Schematic\Schematic;

$schematic = new Schematic('YOUR_SECRET_API_KEY');

$feature_ids = array('feature_ids_example'); // string[]
$ids = array('ids_example'); // string[]
$name = 'name_example'; // string
$limit = 100; // int | Page limit (default 100)
$offset = 0; // int | Page offset (default 0)

try {
    $result = $schematic->LicensesApi->listLicenses($feature_ids, $ids, $name, $limit, $offset);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Schematic->LicensesApi->listLicenses: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **feature_ids** | [**string[]**](../Model/string.md)|  | [optional] |
| **ids** | [**string[]**](../Model/string.md)|  | [optional] |
| **name** | **string**|  | [optional] |
| **limit** | **int**| Page limit (default 100) | [optional] |
| **offset** | **int**| Page offset (default 0) | [optional] |

### Return type

[**\Schematic\Model\ListLicensesResponse**](../Model/ListLicensesResponse.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
