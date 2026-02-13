# Schematic\ComponentspublicApi

All URIs are relative to https://api.schematichq.com, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getPublicPlans()**](ComponentspublicApi.md#getPublicPlans) | **GET** /public/plans | Get public plans |


## `getPublicPlans()`

```php
getPublicPlans(): \Schematic\Model\GetPublicPlansResponse
```

Get public plans

### Example

```php
<?php
require_once 'vendor/autoload.php';

use Schematic\Schematic;

$schematic = new Schematic('YOUR_SECRET_API_KEY');


try {
    $result = $schematic->ComponentspublicApi->getPublicPlans();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Schematic->ComponentspublicApi->getPublicPlans: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\Schematic\Model\GetPublicPlansResponse**](../Model/GetPublicPlansResponse.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
