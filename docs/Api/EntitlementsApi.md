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
createCompanyOverride($create_company_override_request_body): \Schematic\Model\CreateCompanyOverrideResponse
```

Create company override

### Example

```php
<?php
require_once 'vendor/autoload.php';

use Schematic\Schematic;

$schematic = new Schematic('YOUR_SECRET_API_KEY');

$create_company_override_request_body = new \Schematic\Model\CreateCompanyOverrideRequestBody(); // \Schematic\Model\CreateCompanyOverrideRequestBody

try {
    $result = $schematic->EntitlementsApi->createCompanyOverride($create_company_override_request_body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Schematic->EntitlementsApi->createCompanyOverride: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **create_company_override_request_body** | [**\Schematic\Model\CreateCompanyOverrideRequestBody**](../Model/CreateCompanyOverrideRequestBody.md)|  | |

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
createPlanEntitlement($create_plan_entitlement_request_body): \Schematic\Model\CreatePlanEntitlementResponse
```

Create plan entitlement

### Example

```php
<?php
require_once 'vendor/autoload.php';

use Schematic\Schematic;

$schematic = new Schematic('YOUR_SECRET_API_KEY');

$create_plan_entitlement_request_body = new \Schematic\Model\CreatePlanEntitlementRequestBody(); // \Schematic\Model\CreatePlanEntitlementRequestBody

try {
    $result = $schematic->EntitlementsApi->createPlanEntitlement($create_plan_entitlement_request_body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Schematic->EntitlementsApi->createPlanEntitlement: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **create_plan_entitlement_request_body** | [**\Schematic\Model\CreatePlanEntitlementRequestBody**](../Model/CreatePlanEntitlementRequestBody.md)|  | |

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
deleteCompanyOverride($company_override_id): \Schematic\Model\DeleteCompanyOverrideResponse
```

Delete company override

### Example

```php
<?php
require_once 'vendor/autoload.php';

use Schematic\Schematic;

$schematic = new Schematic('YOUR_SECRET_API_KEY');

$company_override_id = 'company_override_id_example'; // string | company_override_id

try {
    $result = $schematic->EntitlementsApi->deleteCompanyOverride($company_override_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Schematic->EntitlementsApi->deleteCompanyOverride: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **company_override_id** | **string**| company_override_id | |

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
deletePlanEntitlement($plan_entitlement_id): \Schematic\Model\DeletePlanEntitlementResponse
```

Delete plan entitlement

### Example

```php
<?php
require_once 'vendor/autoload.php';

use Schematic\Schematic;

$schematic = new Schematic('YOUR_SECRET_API_KEY');

$plan_entitlement_id = 'plan_entitlement_id_example'; // string | plan_entitlement_id

try {
    $result = $schematic->EntitlementsApi->deletePlanEntitlement($plan_entitlement_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Schematic->EntitlementsApi->deletePlanEntitlement: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **plan_entitlement_id** | **string**| plan_entitlement_id | |

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
getCompanyOverride($company_override_id): \Schematic\Model\GetCompanyOverrideResponse
```

Get company override

### Example

```php
<?php
require_once 'vendor/autoload.php';

use Schematic\Schematic;

$schematic = new Schematic('YOUR_SECRET_API_KEY');

$company_override_id = 'company_override_id_example'; // string | company_override_id

try {
    $result = $schematic->EntitlementsApi->getCompanyOverride($company_override_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Schematic->EntitlementsApi->getCompanyOverride: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **company_override_id** | **string**| company_override_id | |

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
getPlanEntitlement($plan_entitlement_id): \Schematic\Model\GetPlanEntitlementResponse
```

Get plan entitlement

### Example

```php
<?php
require_once 'vendor/autoload.php';

use Schematic\Schematic;

$schematic = new Schematic('YOUR_SECRET_API_KEY');

$plan_entitlement_id = 'plan_entitlement_id_example'; // string | plan_entitlement_id

try {
    $result = $schematic->EntitlementsApi->getPlanEntitlement($plan_entitlement_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Schematic->EntitlementsApi->getPlanEntitlement: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **plan_entitlement_id** | **string**| plan_entitlement_id | |

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
listCompanyOverrides($company_id, $feature_id, $limit, $offset): \Schematic\Model\ListCompanyOverridesResponse
```

List company overrides

### Example

```php
<?php
require_once 'vendor/autoload.php';

use Schematic\Schematic;

$schematic = new Schematic('YOUR_SECRET_API_KEY');

$company_id = 'company_id_example'; // string
$feature_id = 'feature_id_example'; // string
$limit = 56; // int | Page limit (default 100)
$offset = 56; // int | Page offset (default 0)

try {
    $result = $schematic->EntitlementsApi->listCompanyOverrides($company_id, $feature_id, $limit, $offset);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Schematic->EntitlementsApi->listCompanyOverrides: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
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
listPlanEntitlements($plan_id, $feature_id, $limit, $offset): \Schematic\Model\ListPlanEntitlementsResponse
```

List plan entitlements

### Example

```php
<?php
require_once 'vendor/autoload.php';

use Schematic\Schematic;

$schematic = new Schematic('YOUR_SECRET_API_KEY');

$plan_id = 'plan_id_example'; // string
$feature_id = 'feature_id_example'; // string
$limit = 56; // int | Page limit (default 100)
$offset = 56; // int | Page offset (default 0)

try {
    $result = $schematic->EntitlementsApi->listPlanEntitlements($plan_id, $feature_id, $limit, $offset);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Schematic->EntitlementsApi->listPlanEntitlements: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
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
updateCompanyOverride($company_override_id, $update_company_override_request_body): \Schematic\Model\UpdateCompanyOverrideResponse
```

Update company override

### Example

```php
<?php
require_once 'vendor/autoload.php';

use Schematic\Schematic;

$schematic = new Schematic('YOUR_SECRET_API_KEY');

$company_override_id = 'company_override_id_example'; // string | company_override_id
$update_company_override_request_body = new \Schematic\Model\UpdateCompanyOverrideRequestBody(); // \Schematic\Model\UpdateCompanyOverrideRequestBody

try {
    $result = $schematic->EntitlementsApi->updateCompanyOverride($company_override_id, $update_company_override_request_body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Schematic->EntitlementsApi->updateCompanyOverride: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **company_override_id** | **string**| company_override_id | |
| **update_company_override_request_body** | [**\Schematic\Model\UpdateCompanyOverrideRequestBody**](../Model/UpdateCompanyOverrideRequestBody.md)|  | |

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
updatePlanEntitlement($plan_entitlement_id, $update_plan_entitlement_request_body): \Schematic\Model\UpdatePlanEntitlementResponse
```

Update plan entitlement

### Example

```php
<?php
require_once 'vendor/autoload.php';

use Schematic\Schematic;

$schematic = new Schematic('YOUR_SECRET_API_KEY');

$plan_entitlement_id = 'plan_entitlement_id_example'; // string | plan_entitlement_id
$update_plan_entitlement_request_body = new \Schematic\Model\UpdatePlanEntitlementRequestBody(); // \Schematic\Model\UpdatePlanEntitlementRequestBody

try {
    $result = $schematic->EntitlementsApi->updatePlanEntitlement($plan_entitlement_id, $update_plan_entitlement_request_body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Schematic->EntitlementsApi->updatePlanEntitlement: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **plan_entitlement_id** | **string**| plan_entitlement_id | |
| **update_plan_entitlement_request_body** | [**\Schematic\Model\UpdatePlanEntitlementRequestBody**](../Model/UpdatePlanEntitlementRequestBody.md)|  | |

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
