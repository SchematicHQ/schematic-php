# Schematic\PlanbundleApi

All URIs are relative to https://api.schematichq.com, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createPlanBundle()**](PlanbundleApi.md#createPlanBundle) | **POST** /plan-bundles | Create plan bundle |
| [**updatePlanBundle()**](PlanbundleApi.md#updatePlanBundle) | **PUT** /plan-bundles/{plan_bundle_id} | Update plan bundle |


## `createPlanBundle()`

```php
createPlanBundle($create_plan_bundle_request_body): \Schematic\Model\CreatePlanBundleResponse
```

Create plan bundle

### Example

```php
<?php
require_once 'vendor/autoload.php';

use Schematic\Schematic;

$schematic = new Schematic('YOUR_SECRET_API_KEY');

$create_plan_bundle_request_body = new \Schematic\Model\CreatePlanBundleRequestBody(); // \Schematic\Model\CreatePlanBundleRequestBody

try {
    $result = $schematic->PlanbundleApi->createPlanBundle($create_plan_bundle_request_body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Schematic->PlanbundleApi->createPlanBundle: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **create_plan_bundle_request_body** | [**\Schematic\Model\CreatePlanBundleRequestBody**](../Model/CreatePlanBundleRequestBody.md)|  | |

### Return type

[**\Schematic\Model\CreatePlanBundleResponse**](../Model/CreatePlanBundleResponse.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updatePlanBundle()`

```php
updatePlanBundle($plan_bundle_id, $update_plan_bundle_request_body): \Schematic\Model\UpdatePlanBundleResponse
```

Update plan bundle

### Example

```php
<?php
require_once 'vendor/autoload.php';

use Schematic\Schematic;

$schematic = new Schematic('YOUR_SECRET_API_KEY');

$plan_bundle_id = 'plan_bundle_id_example'; // string | plan_bundle_id
$update_plan_bundle_request_body = new \Schematic\Model\UpdatePlanBundleRequestBody(); // \Schematic\Model\UpdatePlanBundleRequestBody

try {
    $result = $schematic->PlanbundleApi->updatePlanBundle($plan_bundle_id, $update_plan_bundle_request_body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Schematic->PlanbundleApi->updatePlanBundle: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **plan_bundle_id** | **string**| plan_bundle_id | |
| **update_plan_bundle_request_body** | [**\Schematic\Model\UpdatePlanBundleRequestBody**](../Model/UpdatePlanBundleRequestBody.md)|  | |

### Return type

[**\Schematic\Model\UpdatePlanBundleResponse**](../Model/UpdatePlanBundleResponse.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
