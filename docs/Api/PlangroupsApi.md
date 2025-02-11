# Schematic\PlangroupsApi

All URIs are relative to https://api.schematichq.com, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createPlanGroup()**](PlangroupsApi.md#createPlanGroup) | **POST** /plan-groups | Create plan group |
| [**getPlanGroup()**](PlangroupsApi.md#getPlanGroup) | **GET** /plan-groups | Get plan group |
| [**updatePlanGroup()**](PlangroupsApi.md#updatePlanGroup) | **PUT** /plan-groups/{plan_group_id} | Update plan group |


## `createPlanGroup()`

```php
createPlanGroup($create_plan_group_request_body): \Schematic\Model\CreatePlanGroupResponse
```

Create plan group

### Example

```php
<?php
require_once 'vendor/autoload.php';

use Schematic\Schematic;

$schematic = new Schematic('YOUR_SECRET_API_KEY');

$create_plan_group_request_body = new \Schematic\Model\CreatePlanGroupRequestBody(); // \Schematic\Model\CreatePlanGroupRequestBody

try {
    $result = $schematic->PlangroupsApi->createPlanGroup($create_plan_group_request_body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Schematic->PlangroupsApi->createPlanGroup: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **create_plan_group_request_body** | [**\Schematic\Model\CreatePlanGroupRequestBody**](../Model/CreatePlanGroupRequestBody.md)|  | |

### Return type

[**\Schematic\Model\CreatePlanGroupResponse**](../Model/CreatePlanGroupResponse.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getPlanGroup()`

```php
getPlanGroup(): \Schematic\Model\GetPlanGroupResponse
```

Get plan group

### Example

```php
<?php
require_once 'vendor/autoload.php';

use Schematic\Schematic;

$schematic = new Schematic('YOUR_SECRET_API_KEY');


try {
    $result = $schematic->PlangroupsApi->getPlanGroup();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Schematic->PlangroupsApi->getPlanGroup: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\Schematic\Model\GetPlanGroupResponse**](../Model/GetPlanGroupResponse.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updatePlanGroup()`

```php
updatePlanGroup($plan_group_id, $update_plan_group_request_body): \Schematic\Model\UpdatePlanGroupResponse
```

Update plan group

### Example

```php
<?php
require_once 'vendor/autoload.php';

use Schematic\Schematic;

$schematic = new Schematic('YOUR_SECRET_API_KEY');

$plan_group_id = 'plan_group_id_example'; // string | plan_group_id
$update_plan_group_request_body = new \Schematic\Model\UpdatePlanGroupRequestBody(); // \Schematic\Model\UpdatePlanGroupRequestBody

try {
    $result = $schematic->PlangroupsApi->updatePlanGroup($plan_group_id, $update_plan_group_request_body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Schematic->PlangroupsApi->updatePlanGroup: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **plan_group_id** | **string**| plan_group_id | |
| **update_plan_group_request_body** | [**\Schematic\Model\UpdatePlanGroupRequestBody**](../Model/UpdatePlanGroupRequestBody.md)|  | |

### Return type

[**\Schematic\Model\UpdatePlanGroupResponse**](../Model/UpdatePlanGroupResponse.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
