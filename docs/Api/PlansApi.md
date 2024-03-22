# Schematic\PlansApi

All URIs are relative to https://api.schematichq.com, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createPlan()**](PlansApi.md#createPlan) | **POST** /plans | Create plan |
| [**deletePlan()**](PlansApi.md#deletePlan) | **DELETE** /plans/{plan_id} | Delete plan |
| [**deletePlanAudience()**](PlansApi.md#deletePlanAudience) | **DELETE** /plan-audiences/{plan_audience_id} | Delete plan audience |
| [**getPlan()**](PlansApi.md#getPlan) | **GET** /plans/{plan_id} | Get plan |
| [**listPlans()**](PlansApi.md#listPlans) | **GET** /plans | List plans |
| [**updatePlan()**](PlansApi.md#updatePlan) | **PUT** /plans/{plan_id} | Update plan |
| [**updatePlanAudience()**](PlansApi.md#updatePlanAudience) | **PUT** /plan-audiences/{plan_audience_id} | Update plan audience |


## `createPlan()`

```php
createPlan($create_plan_request_body): \Schematic\Model\CreatePlanResponse
```

Create plan

### Example

```php
<?php
require_once 'vendor/autoload.php';

use Schematic\Schematic;

$schematic = new Schematic('YOUR_SECRET_API_KEY');

$create_plan_request_body = new \Schematic\Model\CreatePlanRequestBody(); // \Schematic\Model\CreatePlanRequestBody

try {
    $result = $schematic->PlansApi->createPlan($create_plan_request_body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Schematic->PlansApi->createPlan: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **create_plan_request_body** | [**\Schematic\Model\CreatePlanRequestBody**](../Model/CreatePlanRequestBody.md)|  | |

### Return type

[**\Schematic\Model\CreatePlanResponse**](../Model/CreatePlanResponse.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deletePlan()`

```php
deletePlan($plan_id): \Schematic\Model\DeletePlanResponse
```

Delete plan

### Example

```php
<?php
require_once 'vendor/autoload.php';

use Schematic\Schematic;

$schematic = new Schematic('YOUR_SECRET_API_KEY');

$plan_id = 'plan_id_example'; // string | plan_id

try {
    $result = $schematic->PlansApi->deletePlan($plan_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Schematic->PlansApi->deletePlan: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **plan_id** | **string**| plan_id | |

### Return type

[**\Schematic\Model\DeletePlanResponse**](../Model/DeletePlanResponse.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deletePlanAudience()`

```php
deletePlanAudience($plan_audience_id): \Schematic\Model\DeletePlanAudienceResponse
```

Delete plan audience

### Example

```php
<?php
require_once 'vendor/autoload.php';

use Schematic\Schematic;

$schematic = new Schematic('YOUR_SECRET_API_KEY');

$plan_audience_id = 'plan_audience_id_example'; // string | plan_audience_id

try {
    $result = $schematic->PlansApi->deletePlanAudience($plan_audience_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Schematic->PlansApi->deletePlanAudience: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **plan_audience_id** | **string**| plan_audience_id | |

### Return type

[**\Schematic\Model\DeletePlanAudienceResponse**](../Model/DeletePlanAudienceResponse.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getPlan()`

```php
getPlan($plan_id): \Schematic\Model\GetPlanResponse
```

Get plan

### Example

```php
<?php
require_once 'vendor/autoload.php';

use Schematic\Schematic;

$schematic = new Schematic('YOUR_SECRET_API_KEY');

$plan_id = 'plan_id_example'; // string | plan_id

try {
    $result = $schematic->PlansApi->getPlan($plan_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Schematic->PlansApi->getPlan: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **plan_id** | **string**| plan_id | |

### Return type

[**\Schematic\Model\GetPlanResponse**](../Model/GetPlanResponse.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listPlans()`

```php
listPlans($limit, $offset): \Schematic\Model\ListPlansResponse
```

List plans

### Example

```php
<?php
require_once 'vendor/autoload.php';

use Schematic\Schematic;

$schematic = new Schematic('YOUR_SECRET_API_KEY');

$limit = 100; // int | Page limit (default 100)
$offset = 0; // int | Page offset (default 0)

try {
    $result = $schematic->PlansApi->listPlans($limit, $offset);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Schematic->PlansApi->listPlans: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **limit** | **int**| Page limit (default 100) | [optional] |
| **offset** | **int**| Page offset (default 0) | [optional] |

### Return type

[**\Schematic\Model\ListPlansResponse**](../Model/ListPlansResponse.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updatePlan()`

```php
updatePlan($plan_id, $update_plan_request_body): \Schematic\Model\UpdatePlanResponse
```

Update plan

### Example

```php
<?php
require_once 'vendor/autoload.php';

use Schematic\Schematic;

$schematic = new Schematic('YOUR_SECRET_API_KEY');

$plan_id = 'plan_id_example'; // string | plan_id
$update_plan_request_body = new \Schematic\Model\UpdatePlanRequestBody(); // \Schematic\Model\UpdatePlanRequestBody

try {
    $result = $schematic->PlansApi->updatePlan($plan_id, $update_plan_request_body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Schematic->PlansApi->updatePlan: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **plan_id** | **string**| plan_id | |
| **update_plan_request_body** | [**\Schematic\Model\UpdatePlanRequestBody**](../Model/UpdatePlanRequestBody.md)|  | |

### Return type

[**\Schematic\Model\UpdatePlanResponse**](../Model/UpdatePlanResponse.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updatePlanAudience()`

```php
updatePlanAudience($plan_audience_id, $update_audience_request_body): \Schematic\Model\UpdatePlanAudienceResponse
```

Update plan audience

### Example

```php
<?php
require_once 'vendor/autoload.php';

use Schematic\Schematic;

$schematic = new Schematic('YOUR_SECRET_API_KEY');

$plan_audience_id = 'plan_audience_id_example'; // string | plan_audience_id
$update_audience_request_body = new \Schematic\Model\UpdateAudienceRequestBody(); // \Schematic\Model\UpdateAudienceRequestBody

try {
    $result = $schematic->PlansApi->updatePlanAudience($plan_audience_id, $update_audience_request_body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Schematic->PlansApi->updatePlanAudience: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **plan_audience_id** | **string**| plan_audience_id | |
| **update_audience_request_body** | [**\Schematic\Model\UpdateAudienceRequestBody**](../Model/UpdateAudienceRequestBody.md)|  | |

### Return type

[**\Schematic\Model\UpdatePlanAudienceResponse**](../Model/UpdatePlanAudienceResponse.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
