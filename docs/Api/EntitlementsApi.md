# Schematic\EntitlementsApi

All URIs are relative to https://api.schematichq.com, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**countCompanyOverrides()**](EntitlementsApi.md#countCompanyOverrides) | **GET** /company-overrides/count | Count company overrides |
| [**countFeatureCompanies()**](EntitlementsApi.md#countFeatureCompanies) | **GET** /feature-companies/count | Count feature companies |
| [**countFeatureUsage()**](EntitlementsApi.md#countFeatureUsage) | **GET** /feature-usage/count | Count feature usage |
| [**countFeatureUsers()**](EntitlementsApi.md#countFeatureUsers) | **GET** /feature-users/count | Count feature users |
| [**countPlanEntitlements()**](EntitlementsApi.md#countPlanEntitlements) | **GET** /plan-entitlements/count | Count plan entitlements |
| [**createCompanyOverride()**](EntitlementsApi.md#createCompanyOverride) | **POST** /company-overrides | Create company override |
| [**createPlanEntitlement()**](EntitlementsApi.md#createPlanEntitlement) | **POST** /plan-entitlements | Create plan entitlement |
| [**deleteCompanyOverride()**](EntitlementsApi.md#deleteCompanyOverride) | **DELETE** /company-overrides/{company_override_id} | Delete company override |
| [**deletePlanEntitlement()**](EntitlementsApi.md#deletePlanEntitlement) | **DELETE** /plan-entitlements/{plan_entitlement_id} | Delete plan entitlement |
| [**duplicatePlanEntitlements()**](EntitlementsApi.md#duplicatePlanEntitlements) | **POST** /plan-entitlements/duplicate | Duplicate plan entitlements |
| [**getCompanyOverride()**](EntitlementsApi.md#getCompanyOverride) | **GET** /company-overrides/{company_override_id} | Get company override |
| [**getFeatureUsageByCompany()**](EntitlementsApi.md#getFeatureUsageByCompany) | **GET** /usage-by-company | Get feature usage by company |
| [**getFeatureUsageTimeSeries()**](EntitlementsApi.md#getFeatureUsageTimeSeries) | **GET** /feature-usage-timeseries | Get feature usage time series |
| [**getPlanEntitlement()**](EntitlementsApi.md#getPlanEntitlement) | **GET** /plan-entitlements/{plan_entitlement_id} | Get plan entitlement |
| [**listCompanyOverrides()**](EntitlementsApi.md#listCompanyOverrides) | **GET** /company-overrides | List company overrides |
| [**listFeatureCompanies()**](EntitlementsApi.md#listFeatureCompanies) | **GET** /feature-companies | List feature companies |
| [**listFeatureUsage()**](EntitlementsApi.md#listFeatureUsage) | **GET** /feature-usage | List feature usage |
| [**listFeatureUsers()**](EntitlementsApi.md#listFeatureUsers) | **GET** /feature-users | List feature users |
| [**listPlanEntitlements()**](EntitlementsApi.md#listPlanEntitlements) | **GET** /plan-entitlements | List plan entitlements |
| [**updateCompanyOverride()**](EntitlementsApi.md#updateCompanyOverride) | **PUT** /company-overrides/{company_override_id} | Update company override |
| [**updatePlanEntitlement()**](EntitlementsApi.md#updatePlanEntitlement) | **PUT** /plan-entitlements/{plan_entitlement_id} | Update plan entitlement |


## `countCompanyOverrides()`

```php
countCompanyOverrides($company_id, $company_ids, $feature_id, $feature_ids, $ids, $without_expired, $q, $limit, $offset): \Schematic\Model\CountCompanyOverridesResponse
```

Count company overrides

### Example

```php
<?php
require_once 'vendor/autoload.php';

use Schematic\Schematic;

$schematic = new Schematic('YOUR_SECRET_API_KEY');

$company_id = 'company_id_example'; // string | Filter company overrides by a single company ID (starting with comp_)
$company_ids = array('company_ids_example'); // string[] | Filter company overrides by multiple company IDs (starting with comp_)
$feature_id = 'feature_id_example'; // string | Filter company overrides by a single feature ID (starting with feat_)
$feature_ids = array('feature_ids_example'); // string[] | Filter company overrides by multiple feature IDs (starting with feat_)
$ids = array('ids_example'); // string[] | Filter company overrides by multiple company override IDs (starting with cmov_)
$without_expired = True; // bool | Filter company overrides by whether they have not expired
$q = 'q_example'; // string | Search for company overrides by feature or company name
$limit = 100; // int | Page limit (default 100)
$offset = 0; // int | Page offset (default 0)

try {
    $result = $schematic->EntitlementsApi->countCompanyOverrides($company_id, $company_ids, $feature_id, $feature_ids, $ids, $without_expired, $q, $limit, $offset);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Schematic->EntitlementsApi->countCompanyOverrides: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **company_id** | **string**| Filter company overrides by a single company ID (starting with comp_) | [optional] |
| **company_ids** | [**string[]**](../Model/string.md)| Filter company overrides by multiple company IDs (starting with comp_) | [optional] |
| **feature_id** | **string**| Filter company overrides by a single feature ID (starting with feat_) | [optional] |
| **feature_ids** | [**string[]**](../Model/string.md)| Filter company overrides by multiple feature IDs (starting with feat_) | [optional] |
| **ids** | [**string[]**](../Model/string.md)| Filter company overrides by multiple company override IDs (starting with cmov_) | [optional] |
| **without_expired** | **bool**| Filter company overrides by whether they have not expired | [optional] |
| **q** | **string**| Search for company overrides by feature or company name | [optional] |
| **limit** | **int**| Page limit (default 100) | [optional] |
| **offset** | **int**| Page offset (default 0) | [optional] |

### Return type

[**\Schematic\Model\CountCompanyOverridesResponse**](../Model/CountCompanyOverridesResponse.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `countFeatureCompanies()`

```php
countFeatureCompanies($feature_id, $q, $limit, $offset): \Schematic\Model\CountFeatureCompaniesResponse
```

Count feature companies

### Example

```php
<?php
require_once 'vendor/autoload.php';

use Schematic\Schematic;

$schematic = new Schematic('YOUR_SECRET_API_KEY');

$feature_id = 'feature_id_example'; // string
$q = 'q_example'; // string
$limit = 100; // int | Page limit (default 100)
$offset = 0; // int | Page offset (default 0)

try {
    $result = $schematic->EntitlementsApi->countFeatureCompanies($feature_id, $q, $limit, $offset);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Schematic->EntitlementsApi->countFeatureCompanies: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **feature_id** | **string**|  | |
| **q** | **string**|  | [optional] |
| **limit** | **int**| Page limit (default 100) | [optional] |
| **offset** | **int**| Page offset (default 0) | [optional] |

### Return type

[**\Schematic\Model\CountFeatureCompaniesResponse**](../Model/CountFeatureCompaniesResponse.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `countFeatureUsage()`

```php
countFeatureUsage($company_id, $company_keys, $feature_ids, $include_usage_aggregation, $q, $without_negative_entitlements, $limit, $offset): \Schematic\Model\CountFeatureUsageResponse
```

Count feature usage

### Example

```php
<?php
require_once 'vendor/autoload.php';

use Schematic\Schematic;

$schematic = new Schematic('YOUR_SECRET_API_KEY');

$company_id = 'company_id_example'; // string
$company_keys = array('key' => 'company_keys_example'); // array<string,string>
$feature_ids = array('feature_ids_example'); // string[]
$include_usage_aggregation = True; // bool | Include time-bucketed usage aggregation (today, this week, this month, billing period) for credit-based entitlements. Defaults to false for performance.
$q = 'q_example'; // string
$without_negative_entitlements = True; // bool
$limit = 100; // int | Page limit (default 100)
$offset = 0; // int | Page offset (default 0)

try {
    $result = $schematic->EntitlementsApi->countFeatureUsage($company_id, $company_keys, $feature_ids, $include_usage_aggregation, $q, $without_negative_entitlements, $limit, $offset);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Schematic->EntitlementsApi->countFeatureUsage: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **company_id** | **string**|  | [optional] |
| **company_keys** | [**array<string,string>**](../Model/string.md)|  | [optional] |
| **feature_ids** | [**string[]**](../Model/string.md)|  | [optional] |
| **include_usage_aggregation** | **bool**| Include time-bucketed usage aggregation (today, this week, this month, billing period) for credit-based entitlements. Defaults to false for performance. | [optional] |
| **q** | **string**|  | [optional] |
| **without_negative_entitlements** | **bool**|  | [optional] |
| **limit** | **int**| Page limit (default 100) | [optional] |
| **offset** | **int**| Page offset (default 0) | [optional] |

### Return type

[**\Schematic\Model\CountFeatureUsageResponse**](../Model/CountFeatureUsageResponse.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `countFeatureUsers()`

```php
countFeatureUsers($feature_id, $q, $limit, $offset): \Schematic\Model\CountFeatureUsersResponse
```

Count feature users

### Example

```php
<?php
require_once 'vendor/autoload.php';

use Schematic\Schematic;

$schematic = new Schematic('YOUR_SECRET_API_KEY');

$feature_id = 'feature_id_example'; // string
$q = 'q_example'; // string
$limit = 100; // int | Page limit (default 100)
$offset = 0; // int | Page offset (default 0)

try {
    $result = $schematic->EntitlementsApi->countFeatureUsers($feature_id, $q, $limit, $offset);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Schematic->EntitlementsApi->countFeatureUsers: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **feature_id** | **string**|  | |
| **q** | **string**|  | [optional] |
| **limit** | **int**| Page limit (default 100) | [optional] |
| **offset** | **int**| Page offset (default 0) | [optional] |

### Return type

[**\Schematic\Model\CountFeatureUsersResponse**](../Model/CountFeatureUsersResponse.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `countPlanEntitlements()`

```php
countPlanEntitlements($feature_id, $feature_ids, $ids, $plan_id, $plan_ids, $plan_version_id, $plan_version_ids, $q, $with_metered_products, $limit, $offset): \Schematic\Model\CountPlanEntitlementsResponse
```

Count plan entitlements

### Example

```php
<?php
require_once 'vendor/autoload.php';

use Schematic\Schematic;

$schematic = new Schematic('YOUR_SECRET_API_KEY');

$feature_id = 'feature_id_example'; // string | Filter plan entitlements by a single feature ID (starting with feat_)
$feature_ids = array('feature_ids_example'); // string[] | Filter plan entitlements by multiple feature IDs (starting with feat_)
$ids = array('ids_example'); // string[] | Filter plan entitlements by multiple plan entitlement IDs (starting with pltl_)
$plan_id = 'plan_id_example'; // string | Filter plan entitlements by a single plan ID (starting with plan_)
$plan_ids = array('plan_ids_example'); // string[] | Filter plan entitlements by multiple plan IDs (starting with plan_)
$plan_version_id = 'plan_version_id_example'; // string | Filter plan entitlements by a single plan version ID (starting with plvr_)
$plan_version_ids = array('plan_version_ids_example'); // string[] | Filter plan entitlements by multiple plan version IDs (starting with plvr_)
$q = 'q_example'; // string | Search for plan entitlements by feature or company name
$with_metered_products = True; // bool | Filter plan entitlements only with metered products
$limit = 100; // int | Page limit (default 100)
$offset = 0; // int | Page offset (default 0)

try {
    $result = $schematic->EntitlementsApi->countPlanEntitlements($feature_id, $feature_ids, $ids, $plan_id, $plan_ids, $plan_version_id, $plan_version_ids, $q, $with_metered_products, $limit, $offset);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Schematic->EntitlementsApi->countPlanEntitlements: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **feature_id** | **string**| Filter plan entitlements by a single feature ID (starting with feat_) | [optional] |
| **feature_ids** | [**string[]**](../Model/string.md)| Filter plan entitlements by multiple feature IDs (starting with feat_) | [optional] |
| **ids** | [**string[]**](../Model/string.md)| Filter plan entitlements by multiple plan entitlement IDs (starting with pltl_) | [optional] |
| **plan_id** | **string**| Filter plan entitlements by a single plan ID (starting with plan_) | [optional] |
| **plan_ids** | [**string[]**](../Model/string.md)| Filter plan entitlements by multiple plan IDs (starting with plan_) | [optional] |
| **plan_version_id** | **string**| Filter plan entitlements by a single plan version ID (starting with plvr_) | [optional] |
| **plan_version_ids** | [**string[]**](../Model/string.md)| Filter plan entitlements by multiple plan version IDs (starting with plvr_) | [optional] |
| **q** | **string**| Search for plan entitlements by feature or company name | [optional] |
| **with_metered_products** | **bool**| Filter plan entitlements only with metered products | [optional] |
| **limit** | **int**| Page limit (default 100) | [optional] |
| **offset** | **int**| Page offset (default 0) | [optional] |

### Return type

[**\Schematic\Model\CountPlanEntitlementsResponse**](../Model/CountPlanEntitlementsResponse.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

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

## `duplicatePlanEntitlements()`

```php
duplicatePlanEntitlements($duplicate_plan_entitlements_request_body): \Schematic\Model\DuplicatePlanEntitlementsResponse
```

Duplicate plan entitlements

### Example

```php
<?php
require_once 'vendor/autoload.php';

use Schematic\Schematic;

$schematic = new Schematic('YOUR_SECRET_API_KEY');

$duplicate_plan_entitlements_request_body = new \Schematic\Model\DuplicatePlanEntitlementsRequestBody(); // \Schematic\Model\DuplicatePlanEntitlementsRequestBody

try {
    $result = $schematic->EntitlementsApi->duplicatePlanEntitlements($duplicate_plan_entitlements_request_body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Schematic->EntitlementsApi->duplicatePlanEntitlements: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **duplicate_plan_entitlements_request_body** | [**\Schematic\Model\DuplicatePlanEntitlementsRequestBody**](../Model/DuplicatePlanEntitlementsRequestBody.md)|  | |

### Return type

[**\Schematic\Model\DuplicatePlanEntitlementsResponse**](../Model/DuplicatePlanEntitlementsResponse.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: `application/json`
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

## `getFeatureUsageByCompany()`

```php
getFeatureUsageByCompany($keys): \Schematic\Model\GetFeatureUsageByCompanyResponse
```

Get feature usage by company

### Example

```php
<?php
require_once 'vendor/autoload.php';

use Schematic\Schematic;

$schematic = new Schematic('YOUR_SECRET_API_KEY');

$keys = array('key' => 'keys_example'); // array<string,string> | Key/value pairs

try {
    $result = $schematic->EntitlementsApi->getFeatureUsageByCompany($keys);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Schematic->EntitlementsApi->getFeatureUsageByCompany: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **keys** | [**array<string,string>**](../Model/string.md)| Key/value pairs | |

### Return type

[**\Schematic\Model\GetFeatureUsageByCompanyResponse**](../Model/GetFeatureUsageByCompanyResponse.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getFeatureUsageTimeSeries()`

```php
getFeatureUsageTimeSeries($company_id, $end_time, $feature_id, $start_time, $granularity): \Schematic\Model\GetFeatureUsageTimeSeriesResponse
```

Get feature usage time series

### Example

```php
<?php
require_once 'vendor/autoload.php';

use Schematic\Schematic;

$schematic = new Schematic('YOUR_SECRET_API_KEY');

$company_id = 'company_id_example'; // string
$end_time = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime
$feature_id = 'feature_id_example'; // string
$start_time = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime
$granularity = new \Schematic\Model\TimeSeriesGranularity(); // TimeSeriesGranularity

try {
    $result = $schematic->EntitlementsApi->getFeatureUsageTimeSeries($company_id, $end_time, $feature_id, $start_time, $granularity);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Schematic->EntitlementsApi->getFeatureUsageTimeSeries: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **company_id** | **string**|  | |
| **end_time** | **\DateTime**|  | |
| **feature_id** | **string**|  | |
| **start_time** | **\DateTime**|  | |
| **granularity** | [**TimeSeriesGranularity**](../Model/.md)|  | [optional] |

### Return type

[**\Schematic\Model\GetFeatureUsageTimeSeriesResponse**](../Model/GetFeatureUsageTimeSeriesResponse.md)

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
listCompanyOverrides($company_id, $company_ids, $feature_id, $feature_ids, $ids, $without_expired, $q, $limit, $offset): \Schematic\Model\ListCompanyOverridesResponse
```

List company overrides

### Example

```php
<?php
require_once 'vendor/autoload.php';

use Schematic\Schematic;

$schematic = new Schematic('YOUR_SECRET_API_KEY');

$company_id = 'company_id_example'; // string | Filter company overrides by a single company ID (starting with comp_)
$company_ids = array('company_ids_example'); // string[] | Filter company overrides by multiple company IDs (starting with comp_)
$feature_id = 'feature_id_example'; // string | Filter company overrides by a single feature ID (starting with feat_)
$feature_ids = array('feature_ids_example'); // string[] | Filter company overrides by multiple feature IDs (starting with feat_)
$ids = array('ids_example'); // string[] | Filter company overrides by multiple company override IDs (starting with cmov_)
$without_expired = True; // bool | Filter company overrides by whether they have not expired
$q = 'q_example'; // string | Search for company overrides by feature or company name
$limit = 100; // int | Page limit (default 100)
$offset = 0; // int | Page offset (default 0)

try {
    $result = $schematic->EntitlementsApi->listCompanyOverrides($company_id, $company_ids, $feature_id, $feature_ids, $ids, $without_expired, $q, $limit, $offset);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Schematic->EntitlementsApi->listCompanyOverrides: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **company_id** | **string**| Filter company overrides by a single company ID (starting with comp_) | [optional] |
| **company_ids** | [**string[]**](../Model/string.md)| Filter company overrides by multiple company IDs (starting with comp_) | [optional] |
| **feature_id** | **string**| Filter company overrides by a single feature ID (starting with feat_) | [optional] |
| **feature_ids** | [**string[]**](../Model/string.md)| Filter company overrides by multiple feature IDs (starting with feat_) | [optional] |
| **ids** | [**string[]**](../Model/string.md)| Filter company overrides by multiple company override IDs (starting with cmov_) | [optional] |
| **without_expired** | **bool**| Filter company overrides by whether they have not expired | [optional] |
| **q** | **string**| Search for company overrides by feature or company name | [optional] |
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

## `listFeatureCompanies()`

```php
listFeatureCompanies($feature_id, $q, $limit, $offset): \Schematic\Model\ListFeatureCompaniesResponse
```

List feature companies

### Example

```php
<?php
require_once 'vendor/autoload.php';

use Schematic\Schematic;

$schematic = new Schematic('YOUR_SECRET_API_KEY');

$feature_id = 'feature_id_example'; // string
$q = 'q_example'; // string
$limit = 100; // int | Page limit (default 100)
$offset = 0; // int | Page offset (default 0)

try {
    $result = $schematic->EntitlementsApi->listFeatureCompanies($feature_id, $q, $limit, $offset);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Schematic->EntitlementsApi->listFeatureCompanies: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **feature_id** | **string**|  | |
| **q** | **string**|  | [optional] |
| **limit** | **int**| Page limit (default 100) | [optional] |
| **offset** | **int**| Page offset (default 0) | [optional] |

### Return type

[**\Schematic\Model\ListFeatureCompaniesResponse**](../Model/ListFeatureCompaniesResponse.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listFeatureUsage()`

```php
listFeatureUsage($company_id, $company_keys, $feature_ids, $include_usage_aggregation, $q, $without_negative_entitlements, $limit, $offset): \Schematic\Model\ListFeatureUsageResponse
```

List feature usage

### Example

```php
<?php
require_once 'vendor/autoload.php';

use Schematic\Schematic;

$schematic = new Schematic('YOUR_SECRET_API_KEY');

$company_id = 'company_id_example'; // string
$company_keys = array('key' => 'company_keys_example'); // array<string,string>
$feature_ids = array('feature_ids_example'); // string[]
$include_usage_aggregation = True; // bool | Include time-bucketed usage aggregation (today, this week, this month, billing period) for credit-based entitlements. Defaults to false for performance.
$q = 'q_example'; // string
$without_negative_entitlements = True; // bool
$limit = 100; // int | Page limit (default 100)
$offset = 0; // int | Page offset (default 0)

try {
    $result = $schematic->EntitlementsApi->listFeatureUsage($company_id, $company_keys, $feature_ids, $include_usage_aggregation, $q, $without_negative_entitlements, $limit, $offset);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Schematic->EntitlementsApi->listFeatureUsage: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **company_id** | **string**|  | [optional] |
| **company_keys** | [**array<string,string>**](../Model/string.md)|  | [optional] |
| **feature_ids** | [**string[]**](../Model/string.md)|  | [optional] |
| **include_usage_aggregation** | **bool**| Include time-bucketed usage aggregation (today, this week, this month, billing period) for credit-based entitlements. Defaults to false for performance. | [optional] |
| **q** | **string**|  | [optional] |
| **without_negative_entitlements** | **bool**|  | [optional] |
| **limit** | **int**| Page limit (default 100) | [optional] |
| **offset** | **int**| Page offset (default 0) | [optional] |

### Return type

[**\Schematic\Model\ListFeatureUsageResponse**](../Model/ListFeatureUsageResponse.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listFeatureUsers()`

```php
listFeatureUsers($feature_id, $q, $limit, $offset): \Schematic\Model\ListFeatureUsersResponse
```

List feature users

### Example

```php
<?php
require_once 'vendor/autoload.php';

use Schematic\Schematic;

$schematic = new Schematic('YOUR_SECRET_API_KEY');

$feature_id = 'feature_id_example'; // string
$q = 'q_example'; // string
$limit = 100; // int | Page limit (default 100)
$offset = 0; // int | Page offset (default 0)

try {
    $result = $schematic->EntitlementsApi->listFeatureUsers($feature_id, $q, $limit, $offset);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Schematic->EntitlementsApi->listFeatureUsers: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **feature_id** | **string**|  | |
| **q** | **string**|  | [optional] |
| **limit** | **int**| Page limit (default 100) | [optional] |
| **offset** | **int**| Page offset (default 0) | [optional] |

### Return type

[**\Schematic\Model\ListFeatureUsersResponse**](../Model/ListFeatureUsersResponse.md)

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
listPlanEntitlements($feature_id, $feature_ids, $ids, $plan_id, $plan_ids, $plan_version_id, $plan_version_ids, $q, $with_metered_products, $limit, $offset): \Schematic\Model\ListPlanEntitlementsResponse
```

List plan entitlements

### Example

```php
<?php
require_once 'vendor/autoload.php';

use Schematic\Schematic;

$schematic = new Schematic('YOUR_SECRET_API_KEY');

$feature_id = 'feature_id_example'; // string | Filter plan entitlements by a single feature ID (starting with feat_)
$feature_ids = array('feature_ids_example'); // string[] | Filter plan entitlements by multiple feature IDs (starting with feat_)
$ids = array('ids_example'); // string[] | Filter plan entitlements by multiple plan entitlement IDs (starting with pltl_)
$plan_id = 'plan_id_example'; // string | Filter plan entitlements by a single plan ID (starting with plan_)
$plan_ids = array('plan_ids_example'); // string[] | Filter plan entitlements by multiple plan IDs (starting with plan_)
$plan_version_id = 'plan_version_id_example'; // string | Filter plan entitlements by a single plan version ID (starting with plvr_)
$plan_version_ids = array('plan_version_ids_example'); // string[] | Filter plan entitlements by multiple plan version IDs (starting with plvr_)
$q = 'q_example'; // string | Search for plan entitlements by feature or company name
$with_metered_products = True; // bool | Filter plan entitlements only with metered products
$limit = 100; // int | Page limit (default 100)
$offset = 0; // int | Page offset (default 0)

try {
    $result = $schematic->EntitlementsApi->listPlanEntitlements($feature_id, $feature_ids, $ids, $plan_id, $plan_ids, $plan_version_id, $plan_version_ids, $q, $with_metered_products, $limit, $offset);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Schematic->EntitlementsApi->listPlanEntitlements: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **feature_id** | **string**| Filter plan entitlements by a single feature ID (starting with feat_) | [optional] |
| **feature_ids** | [**string[]**](../Model/string.md)| Filter plan entitlements by multiple feature IDs (starting with feat_) | [optional] |
| **ids** | [**string[]**](../Model/string.md)| Filter plan entitlements by multiple plan entitlement IDs (starting with pltl_) | [optional] |
| **plan_id** | **string**| Filter plan entitlements by a single plan ID (starting with plan_) | [optional] |
| **plan_ids** | [**string[]**](../Model/string.md)| Filter plan entitlements by multiple plan IDs (starting with plan_) | [optional] |
| **plan_version_id** | **string**| Filter plan entitlements by a single plan version ID (starting with plvr_) | [optional] |
| **plan_version_ids** | [**string[]**](../Model/string.md)| Filter plan entitlements by multiple plan version IDs (starting with plvr_) | [optional] |
| **q** | **string**| Search for plan entitlements by feature or company name | [optional] |
| **with_metered_products** | **bool**| Filter plan entitlements only with metered products | [optional] |
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
