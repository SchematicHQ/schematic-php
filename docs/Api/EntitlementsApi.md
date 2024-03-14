# Schematic\EntitlementsApi

All URIs are relative to https://api.schematichq.com, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createCompanyOverride()**](EntitlementsApi.md#createCompanyOverride) | **POST** /company-overrides | Create company override |
| [**createPlanEntitlement()**](EntitlementsApi.md#createPlanEntitlement) | **POST** /plan-entitlements | Create plan entitlement |
| [**deleteCompanyOverride()**](EntitlementsApi.md#deleteCompanyOverride) | **DELETE** /company-overrides/{company_override_id} | Delete company override |
| [**deletePlanEntitlement()**](EntitlementsApi.md#deletePlanEntitlement) | **DELETE** /plan-entitlements/{plan_entitlement_id} | Delete plan entitlement |
| [**getCompanyOverride()**](EntitlementsApi.md#getCompanyOverride) | **GET** /company-overrides/{company_override_id} | Get company override |
| [**getPlanEntitlement()**](EntitlementsApi.md#getPlanEntitlement) | **GET** /plan-entitlements/{plan_entitlement_id} | Get plan entitlement |
| [**listCompanyOverrides()**](EntitlementsApi.md#listCompanyOverrides) | **GET** /company-overrides | List company overrides |
| [**listPlanEntitlements()**](EntitlementsApi.md#listPlanEntitlements) | **GET** /plan-entitlements | List plan entitlements |
| [**updateCompanyOverride()**](EntitlementsApi.md#updateCompanyOverride) | **PUT** /company-overrides/{company_override_id} | Update company override |
| [**updatePlanEntitlement()**](EntitlementsApi.md#updatePlanEntitlement) | **PUT** /plan-entitlements/{plan_entitlement_id} | Update plan entitlement |


## `createCompanyOverride()`

```php
createCompanyOverride($create_company_override_request_body, $x_schematic_environment_id): \Schematic\Model\CreateCompanyOverrideResponse
```

Create company override

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKeyAuth
$config = Schematic\Configuration::getDefaultConfiguration()->setApiKey('X-Schematic-Api-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Schematic\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Schematic-Api-Key', 'Bearer');


$apiInstance = new Schematic\Api\EntitlementsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$create_company_override_request_body = new \Schematic\Model\CreateCompanyOverrideRequestBody(); // \Schematic\Model\CreateCompanyOverrideRequestBody
$x_schematic_environment_id = 'x_schematic_environment_id_example'; // string | If the request is made using an API key that is not environment-scoped, specify the environment using this header

try {
    $result = $apiInstance->createCompanyOverride($create_company_override_request_body, $x_schematic_environment_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EntitlementsApi->createCompanyOverride: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **create_company_override_request_body** | [**\Schematic\Model\CreateCompanyOverrideRequestBody**](../Model/CreateCompanyOverrideRequestBody.md)|  | |
| **x_schematic_environment_id** | **string**| If the request is made using an API key that is not environment-scoped, specify the environment using this header | [optional] |

### Return type

[**\Schematic\Model\CreateCompanyOverrideResponse**](../Model/CreateCompanyOverrideResponse.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createPlanEntitlement()`

```php
createPlanEntitlement($create_plan_entitlement_request_body, $x_schematic_environment_id): \Schematic\Model\CreatePlanEntitlementResponse
```

Create plan entitlement

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKeyAuth
$config = Schematic\Configuration::getDefaultConfiguration()->setApiKey('X-Schematic-Api-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Schematic\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Schematic-Api-Key', 'Bearer');


$apiInstance = new Schematic\Api\EntitlementsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$create_plan_entitlement_request_body = new \Schematic\Model\CreatePlanEntitlementRequestBody(); // \Schematic\Model\CreatePlanEntitlementRequestBody
$x_schematic_environment_id = 'x_schematic_environment_id_example'; // string | If the request is made using an API key that is not environment-scoped, specify the environment using this header

try {
    $result = $apiInstance->createPlanEntitlement($create_plan_entitlement_request_body, $x_schematic_environment_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EntitlementsApi->createPlanEntitlement: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **create_plan_entitlement_request_body** | [**\Schematic\Model\CreatePlanEntitlementRequestBody**](../Model/CreatePlanEntitlementRequestBody.md)|  | |
| **x_schematic_environment_id** | **string**| If the request is made using an API key that is not environment-scoped, specify the environment using this header | [optional] |

### Return type

[**\Schematic\Model\CreatePlanEntitlementResponse**](../Model/CreatePlanEntitlementResponse.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteCompanyOverride()`

```php
deleteCompanyOverride($company_override_id, $x_schematic_environment_id): \Schematic\Model\DeleteCompanyOverrideResponse
```

Delete company override

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKeyAuth
$config = Schematic\Configuration::getDefaultConfiguration()->setApiKey('X-Schematic-Api-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Schematic\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Schematic-Api-Key', 'Bearer');


$apiInstance = new Schematic\Api\EntitlementsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$company_override_id = 'company_override_id_example'; // string | company_override_id
$x_schematic_environment_id = 'x_schematic_environment_id_example'; // string | If the request is made using an API key that is not environment-scoped, specify the environment using this header

try {
    $result = $apiInstance->deleteCompanyOverride($company_override_id, $x_schematic_environment_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EntitlementsApi->deleteCompanyOverride: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **company_override_id** | **string**| company_override_id | |
| **x_schematic_environment_id** | **string**| If the request is made using an API key that is not environment-scoped, specify the environment using this header | [optional] |

### Return type

[**\Schematic\Model\DeleteCompanyOverrideResponse**](../Model/DeleteCompanyOverrideResponse.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deletePlanEntitlement()`

```php
deletePlanEntitlement($plan_entitlement_id, $x_schematic_environment_id): \Schematic\Model\DeletePlanEntitlementResponse
```

Delete plan entitlement

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKeyAuth
$config = Schematic\Configuration::getDefaultConfiguration()->setApiKey('X-Schematic-Api-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Schematic\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Schematic-Api-Key', 'Bearer');


$apiInstance = new Schematic\Api\EntitlementsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$plan_entitlement_id = 'plan_entitlement_id_example'; // string | plan_entitlement_id
$x_schematic_environment_id = 'x_schematic_environment_id_example'; // string | If the request is made using an API key that is not environment-scoped, specify the environment using this header

try {
    $result = $apiInstance->deletePlanEntitlement($plan_entitlement_id, $x_schematic_environment_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EntitlementsApi->deletePlanEntitlement: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **plan_entitlement_id** | **string**| plan_entitlement_id | |
| **x_schematic_environment_id** | **string**| If the request is made using an API key that is not environment-scoped, specify the environment using this header | [optional] |

### Return type

[**\Schematic\Model\DeletePlanEntitlementResponse**](../Model/DeletePlanEntitlementResponse.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getCompanyOverride()`

```php
getCompanyOverride($company_override_id, $x_schematic_environment_id): \Schematic\Model\GetCompanyOverrideResponse
```

Get company override

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKeyAuth
$config = Schematic\Configuration::getDefaultConfiguration()->setApiKey('X-Schematic-Api-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Schematic\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Schematic-Api-Key', 'Bearer');


$apiInstance = new Schematic\Api\EntitlementsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$company_override_id = 'company_override_id_example'; // string | company_override_id
$x_schematic_environment_id = 'x_schematic_environment_id_example'; // string | If the request is made using an API key that is not environment-scoped, specify the environment using this header

try {
    $result = $apiInstance->getCompanyOverride($company_override_id, $x_schematic_environment_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EntitlementsApi->getCompanyOverride: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **company_override_id** | **string**| company_override_id | |
| **x_schematic_environment_id** | **string**| If the request is made using an API key that is not environment-scoped, specify the environment using this header | [optional] |

### Return type

[**\Schematic\Model\GetCompanyOverrideResponse**](../Model/GetCompanyOverrideResponse.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getPlanEntitlement()`

```php
getPlanEntitlement($plan_entitlement_id, $x_schematic_environment_id): \Schematic\Model\GetPlanEntitlementResponse
```

Get plan entitlement

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKeyAuth
$config = Schematic\Configuration::getDefaultConfiguration()->setApiKey('X-Schematic-Api-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Schematic\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Schematic-Api-Key', 'Bearer');


$apiInstance = new Schematic\Api\EntitlementsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$plan_entitlement_id = 'plan_entitlement_id_example'; // string | plan_entitlement_id
$x_schematic_environment_id = 'x_schematic_environment_id_example'; // string | If the request is made using an API key that is not environment-scoped, specify the environment using this header

try {
    $result = $apiInstance->getPlanEntitlement($plan_entitlement_id, $x_schematic_environment_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EntitlementsApi->getPlanEntitlement: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **plan_entitlement_id** | **string**| plan_entitlement_id | |
| **x_schematic_environment_id** | **string**| If the request is made using an API key that is not environment-scoped, specify the environment using this header | [optional] |

### Return type

[**\Schematic\Model\GetPlanEntitlementResponse**](../Model/GetPlanEntitlementResponse.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listCompanyOverrides()`

```php
listCompanyOverrides($x_schematic_environment_id, $company_id, $feature_id, $limit, $offset): \Schematic\Model\ListCompanyOverridesResponse
```

List company overrides

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKeyAuth
$config = Schematic\Configuration::getDefaultConfiguration()->setApiKey('X-Schematic-Api-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Schematic\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Schematic-Api-Key', 'Bearer');


$apiInstance = new Schematic\Api\EntitlementsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$x_schematic_environment_id = 'x_schematic_environment_id_example'; // string | If the request is made using an API key that is not environment-scoped, specify the environment using this header
$company_id = 'company_id_example'; // string
$feature_id = 'feature_id_example'; // string
$limit = 56; // int | Page limit (default 100)
$offset = 56; // int | Page offset (default 0)

try {
    $result = $apiInstance->listCompanyOverrides($x_schematic_environment_id, $company_id, $feature_id, $limit, $offset);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EntitlementsApi->listCompanyOverrides: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **x_schematic_environment_id** | **string**| If the request is made using an API key that is not environment-scoped, specify the environment using this header | [optional] |
| **company_id** | **string**|  | [optional] |
| **feature_id** | **string**|  | [optional] |
| **limit** | **int**| Page limit (default 100) | [optional] |
| **offset** | **int**| Page offset (default 0) | [optional] |

### Return type

[**\Schematic\Model\ListCompanyOverridesResponse**](../Model/ListCompanyOverridesResponse.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listPlanEntitlements()`

```php
listPlanEntitlements($x_schematic_environment_id, $plan_id, $feature_id, $limit, $offset): \Schematic\Model\ListPlanEntitlementsResponse
```

List plan entitlements

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKeyAuth
$config = Schematic\Configuration::getDefaultConfiguration()->setApiKey('X-Schematic-Api-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Schematic\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Schematic-Api-Key', 'Bearer');


$apiInstance = new Schematic\Api\EntitlementsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$x_schematic_environment_id = 'x_schematic_environment_id_example'; // string | If the request is made using an API key that is not environment-scoped, specify the environment using this header
$plan_id = 'plan_id_example'; // string
$feature_id = 'feature_id_example'; // string
$limit = 56; // int | Page limit (default 100)
$offset = 56; // int | Page offset (default 0)

try {
    $result = $apiInstance->listPlanEntitlements($x_schematic_environment_id, $plan_id, $feature_id, $limit, $offset);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EntitlementsApi->listPlanEntitlements: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **x_schematic_environment_id** | **string**| If the request is made using an API key that is not environment-scoped, specify the environment using this header | [optional] |
| **plan_id** | **string**|  | [optional] |
| **feature_id** | **string**|  | [optional] |
| **limit** | **int**| Page limit (default 100) | [optional] |
| **offset** | **int**| Page offset (default 0) | [optional] |

### Return type

[**\Schematic\Model\ListPlanEntitlementsResponse**](../Model/ListPlanEntitlementsResponse.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateCompanyOverride()`

```php
updateCompanyOverride($company_override_id, $update_company_override_request_body, $x_schematic_environment_id): \Schematic\Model\UpdateCompanyOverrideResponse
```

Update company override

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKeyAuth
$config = Schematic\Configuration::getDefaultConfiguration()->setApiKey('X-Schematic-Api-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Schematic\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Schematic-Api-Key', 'Bearer');


$apiInstance = new Schematic\Api\EntitlementsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$company_override_id = 'company_override_id_example'; // string | company_override_id
$update_company_override_request_body = new \Schematic\Model\UpdateCompanyOverrideRequestBody(); // \Schematic\Model\UpdateCompanyOverrideRequestBody
$x_schematic_environment_id = 'x_schematic_environment_id_example'; // string | If the request is made using an API key that is not environment-scoped, specify the environment using this header

try {
    $result = $apiInstance->updateCompanyOverride($company_override_id, $update_company_override_request_body, $x_schematic_environment_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EntitlementsApi->updateCompanyOverride: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **company_override_id** | **string**| company_override_id | |
| **update_company_override_request_body** | [**\Schematic\Model\UpdateCompanyOverrideRequestBody**](../Model/UpdateCompanyOverrideRequestBody.md)|  | |
| **x_schematic_environment_id** | **string**| If the request is made using an API key that is not environment-scoped, specify the environment using this header | [optional] |

### Return type

[**\Schematic\Model\UpdateCompanyOverrideResponse**](../Model/UpdateCompanyOverrideResponse.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updatePlanEntitlement()`

```php
updatePlanEntitlement($plan_entitlement_id, $update_plan_entitlement_request_body, $x_schematic_environment_id): \Schematic\Model\UpdatePlanEntitlementResponse
```

Update plan entitlement

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKeyAuth
$config = Schematic\Configuration::getDefaultConfiguration()->setApiKey('X-Schematic-Api-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Schematic\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Schematic-Api-Key', 'Bearer');


$apiInstance = new Schematic\Api\EntitlementsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$plan_entitlement_id = 'plan_entitlement_id_example'; // string | plan_entitlement_id
$update_plan_entitlement_request_body = new \Schematic\Model\UpdatePlanEntitlementRequestBody(); // \Schematic\Model\UpdatePlanEntitlementRequestBody
$x_schematic_environment_id = 'x_schematic_environment_id_example'; // string | If the request is made using an API key that is not environment-scoped, specify the environment using this header

try {
    $result = $apiInstance->updatePlanEntitlement($plan_entitlement_id, $update_plan_entitlement_request_body, $x_schematic_environment_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EntitlementsApi->updatePlanEntitlement: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **plan_entitlement_id** | **string**| plan_entitlement_id | |
| **update_plan_entitlement_request_body** | [**\Schematic\Model\UpdatePlanEntitlementRequestBody**](../Model/UpdatePlanEntitlementRequestBody.md)|  | |
| **x_schematic_environment_id** | **string**| If the request is made using an API key that is not environment-scoped, specify the environment using this header | [optional] |

### Return type

[**\Schematic\Model\UpdatePlanEntitlementResponse**](../Model/UpdatePlanEntitlementResponse.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
