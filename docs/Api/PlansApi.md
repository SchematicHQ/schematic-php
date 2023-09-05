# OpenAPI\Client\PlansApi

All URIs are relative to https://api.schematichq.com, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createPlan()**](PlansApi.md#createPlan) | **POST** /plans | Create plan |
| [**deletePlan()**](PlansApi.md#deletePlan) | **DELETE** /plans/{plan_id} | Delete plan |
| [**getPlan()**](PlansApi.md#getPlan) | **GET** /plans/{plan_id} | Get plan |
| [**listPlans()**](PlansApi.md#listPlans) | **GET** /plans | List plans |
| [**syncCompanyPlans()**](PlansApi.md#syncCompanyPlans) | **POST** /company-plans/sync | Sync company plans |
| [**updatePlan()**](PlansApi.md#updatePlan) | **PUT** /plans/{plan_id} | Update plan |
| [**upsertBillingPeriod()**](PlansApi.md#upsertBillingPeriod) | **POST** /billing-periods/{key}/upsert | Upsert billing period |


## `createPlan()`

```php
createPlan($create_plan_request, $x_schematic_environment_id): \OpenAPI\Client\Model\CreatePlan200Response
```

Create plan

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKeyAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('X-Schematic-Api-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Schematic-Api-Key', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\PlansApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$create_plan_request = new \OpenAPI\Client\Model\CreatePlanRequest(); // \OpenAPI\Client\Model\CreatePlanRequest
$x_schematic_environment_id = 'x_schematic_environment_id_example'; // string | If the request is made using an API key that is not environment-scoped, specify the environment using this header

try {
    $result = $apiInstance->createPlan($create_plan_request, $x_schematic_environment_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PlansApi->createPlan: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **create_plan_request** | [**\OpenAPI\Client\Model\CreatePlanRequest**](../Model/CreatePlanRequest.md)|  | |
| **x_schematic_environment_id** | **string**| If the request is made using an API key that is not environment-scoped, specify the environment using this header | [optional] |

### Return type

[**\OpenAPI\Client\Model\CreatePlan200Response**](../Model/CreatePlan200Response.md)

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
deletePlan($plan_id, $x_schematic_environment_id): \OpenAPI\Client\Model\DeleteApiKey200Response
```

Delete plan

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKeyAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('X-Schematic-Api-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Schematic-Api-Key', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\PlansApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$plan_id = 'plan_id_example'; // string | plan_id
$x_schematic_environment_id = 'x_schematic_environment_id_example'; // string | If the request is made using an API key that is not environment-scoped, specify the environment using this header

try {
    $result = $apiInstance->deletePlan($plan_id, $x_schematic_environment_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PlansApi->deletePlan: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **plan_id** | **string**| plan_id | |
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

## `getPlan()`

```php
getPlan($plan_id, $x_schematic_environment_id): \OpenAPI\Client\Model\GetPlan200Response
```

Get plan

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKeyAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('X-Schematic-Api-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Schematic-Api-Key', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\PlansApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$plan_id = 'plan_id_example'; // string | plan_id
$x_schematic_environment_id = 'x_schematic_environment_id_example'; // string | If the request is made using an API key that is not environment-scoped, specify the environment using this header

try {
    $result = $apiInstance->getPlan($plan_id, $x_schematic_environment_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PlansApi->getPlan: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **plan_id** | **string**| plan_id | |
| **x_schematic_environment_id** | **string**| If the request is made using an API key that is not environment-scoped, specify the environment using this header | [optional] |

### Return type

[**\OpenAPI\Client\Model\GetPlan200Response**](../Model/GetPlan200Response.md)

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
listPlans($x_schematic_environment_id, $limit, $offset, $order, $dir): \OpenAPI\Client\Model\ListPlans200Response
```

List plans

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKeyAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('X-Schematic-Api-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Schematic-Api-Key', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\PlansApi(
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
    $result = $apiInstance->listPlans($x_schematic_environment_id, $limit, $offset, $order, $dir);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PlansApi->listPlans: ', $e->getMessage(), PHP_EOL;
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

[**\OpenAPI\Client\Model\ListPlans200Response**](../Model/ListPlans200Response.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `syncCompanyPlans()`

```php
syncCompanyPlans($sync_company_plans_request, $x_schematic_environment_id): \OpenAPI\Client\Model\SyncCompanyPlans200Response
```

Sync company plans

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKeyAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('X-Schematic-Api-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Schematic-Api-Key', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\PlansApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$sync_company_plans_request = new \OpenAPI\Client\Model\SyncCompanyPlansRequest(); // \OpenAPI\Client\Model\SyncCompanyPlansRequest
$x_schematic_environment_id = 'x_schematic_environment_id_example'; // string | If the request is made using an API key that is not environment-scoped, specify the environment using this header

try {
    $result = $apiInstance->syncCompanyPlans($sync_company_plans_request, $x_schematic_environment_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PlansApi->syncCompanyPlans: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **sync_company_plans_request** | [**\OpenAPI\Client\Model\SyncCompanyPlansRequest**](../Model/SyncCompanyPlansRequest.md)|  | |
| **x_schematic_environment_id** | **string**| If the request is made using an API key that is not environment-scoped, specify the environment using this header | [optional] |

### Return type

[**\OpenAPI\Client\Model\SyncCompanyPlans200Response**](../Model/SyncCompanyPlans200Response.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updatePlan()`

```php
updatePlan($plan_id, $create_plan_request, $x_schematic_environment_id): \OpenAPI\Client\Model\GetPlan200Response
```

Update plan

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKeyAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('X-Schematic-Api-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Schematic-Api-Key', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\PlansApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$plan_id = 'plan_id_example'; // string | plan_id
$create_plan_request = new \OpenAPI\Client\Model\CreatePlanRequest(); // \OpenAPI\Client\Model\CreatePlanRequest
$x_schematic_environment_id = 'x_schematic_environment_id_example'; // string | If the request is made using an API key that is not environment-scoped, specify the environment using this header

try {
    $result = $apiInstance->updatePlan($plan_id, $create_plan_request, $x_schematic_environment_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PlansApi->updatePlan: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **plan_id** | **string**| plan_id | |
| **create_plan_request** | [**\OpenAPI\Client\Model\CreatePlanRequest**](../Model/CreatePlanRequest.md)|  | |
| **x_schematic_environment_id** | **string**| If the request is made using an API key that is not environment-scoped, specify the environment using this header | [optional] |

### Return type

[**\OpenAPI\Client\Model\GetPlan200Response**](../Model/GetPlan200Response.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `upsertBillingPeriod()`

```php
upsertBillingPeriod($key, $upsert_billing_period_request, $x_schematic_environment_id): \OpenAPI\Client\Model\UpsertBillingPeriod200Response
```

Upsert billing period

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKeyAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('X-Schematic-Api-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Schematic-Api-Key', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\PlansApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$key = 'key_example'; // string | key
$upsert_billing_period_request = new \OpenAPI\Client\Model\UpsertBillingPeriodRequest(); // \OpenAPI\Client\Model\UpsertBillingPeriodRequest
$x_schematic_environment_id = 'x_schematic_environment_id_example'; // string | If the request is made using an API key that is not environment-scoped, specify the environment using this header

try {
    $result = $apiInstance->upsertBillingPeriod($key, $upsert_billing_period_request, $x_schematic_environment_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PlansApi->upsertBillingPeriod: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **key** | **string**| key | |
| **upsert_billing_period_request** | [**\OpenAPI\Client\Model\UpsertBillingPeriodRequest**](../Model/UpsertBillingPeriodRequest.md)|  | |
| **x_schematic_environment_id** | **string**| If the request is made using an API key that is not environment-scoped, specify the environment using this header | [optional] |

### Return type

[**\OpenAPI\Client\Model\UpsertBillingPeriod200Response**](../Model/UpsertBillingPeriod200Response.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
