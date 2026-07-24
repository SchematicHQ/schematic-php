# Schematic\PlansApi

All URIs are relative to https://api.schematichq.com, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**countBillingProductMatchCompanies()**](PlansApi.md#countBillingProductMatchCompanies) | **GET** /plans/billing-product-match-companies/count | Count billing product match companies |
| [**countPlans()**](PlansApi.md#countPlans) | **GET** /plans/count | Count plans |
| [**createCustomPlan()**](PlansApi.md#createCustomPlan) | **POST** /custom-plans | Create custom plan |
| [**createPlan()**](PlansApi.md#createPlan) | **POST** /plans | Create plan |
| [**deletePlan()**](PlansApi.md#deletePlan) | **DELETE** /plans/{plan_id} | Delete plan |
| [**deletePlanVersion()**](PlansApi.md#deletePlanVersion) | **DELETE** /plans/version/{plan_id} | Delete plan version |
| [**getPlan()**](PlansApi.md#getPlan) | **GET** /plans/{plan_id} | Get plan |
| [**listBillingProductMatchCompanies()**](PlansApi.md#listBillingProductMatchCompanies) | **GET** /plans/billing-product-match-companies | List billing product match companies |
| [**listCustomPlanBillings()**](PlansApi.md#listCustomPlanBillings) | **GET** /custom-plan-billings | List custom plan billings |
| [**listPlanIssues()**](PlansApi.md#listPlanIssues) | **GET** /plans/issues | List plan issues |
| [**listPlans()**](PlansApi.md#listPlans) | **GET** /plans | List plans |
| [**markCustomPlanBillingPaid()**](PlansApi.md#markCustomPlanBillingPaid) | **PUT** /custom-plan-billings/{custom_plan_billing_id}/mark-paid | Mark custom plan billing paid |
| [**publishPlanVersion()**](PlansApi.md#publishPlanVersion) | **PUT** /plans/version/{plan_id}/publish | Publish plan version |
| [**retryCustomPlanBilling()**](PlansApi.md#retryCustomPlanBilling) | **PUT** /custom-plan-billings/{custom_plan_billing_id}/retry | Retry custom plan billing |
| [**updateCompanyPlans()**](PlansApi.md#updateCompanyPlans) | **PUT** /company-plans/{company_plan_id} | Update company plans |
| [**updatePlan()**](PlansApi.md#updatePlan) | **PUT** /plans/{plan_id} | Update plan |
| [**upsertBillingProductPlan()**](PlansApi.md#upsertBillingProductPlan) | **PUT** /plans/{plan_id}/billing_products | Upsert billing product plan |
| [**upsertPlanForBillingProduct()**](PlansApi.md#upsertPlanForBillingProduct) | **POST** /plans/billing-linked | Upsert plan for billing product |


## `countBillingProductMatchCompanies()`

```php
countBillingProductMatchCompanies($plan_id, $q, $limit, $offset): \Schematic\Model\CountBillingProductMatchCompaniesResponse
```

Count billing product match companies

### Example

```php
<?php
require_once 'vendor/autoload.php';

use Schematic\Schematic;

$schematic = new Schematic('YOUR_SECRET_API_KEY');

$plan_id = 'plan_id_example'; // string | The plan ID to find billing product match companies for
$q = 'q_example'; // string | Search for companies by name, keys or string traits
$limit = 100; // int | Page limit (default 100)
$offset = 0; // int | Page offset (default 0)

try {
    $result = $schematic->PlansApi->countBillingProductMatchCompanies($plan_id, $q, $limit, $offset);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Schematic->PlansApi->countBillingProductMatchCompanies: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **plan_id** | **string**| The plan ID to find billing product match companies for | |
| **q** | **string**| Search for companies by name, keys or string traits | [optional] |
| **limit** | **int**| Page limit (default 100) | [optional] |
| **offset** | **int**| Page offset (default 0) | [optional] |

### Return type

[**\Schematic\Model\CountBillingProductMatchCompaniesResponse**](../Model/CountBillingProductMatchCompaniesResponse.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `countPlans()`

```php
countPlans($company_id, $company_scoped_only, $exclude_company_scoped, $for_fallback_plan, $for_initial_plan, $for_trial_expiry_plan, $has_product_id, $ids, $include_draft_versions, $plan_type, $q, $scoped_to_company_id, $with_entitlements, $without_entitlement_for, $without_paid_product_id, $limit, $offset): \Schematic\Model\CountPlansResponse
```

Count plans

### Example

```php
<?php
require_once 'vendor/autoload.php';

use Schematic\Schematic;

$schematic = new Schematic('YOUR_SECRET_API_KEY');

$company_id = 'company_id_example'; // string
$company_scoped_only = True; // bool | Only return plans that are scoped to a company (custom plans assigned to a company)
$exclude_company_scoped = True; // bool | Exclude plans that are scoped to a company (custom plans assigned to a company)
$for_fallback_plan = True; // bool | Filter for plans valid as fallback plans (not linked to billing)
$for_initial_plan = True; // bool | Filter for plans valid as initial plans (not linked to billing, free, or auto-cancelling trial)
$for_trial_expiry_plan = True; // bool | Filter for plans valid as trial expiry plans (not linked to billing or free)
$has_product_id = True; // bool | Filter out plans that do not have a billing product ID
$ids = array('ids_example'); // string[]
$include_draft_versions = True; // bool | Include billing settings from draft versions for plans which have draft version
$plan_type = new \Schematic\Model\\SchematicModelPlanType(); // \SchematicModelPlanType | Filter by plan type
$q = 'q_example'; // string
$scoped_to_company_id = 'scoped_to_company_id_example'; // string | Filter plans scoped to a specific company (custom plans)
$with_entitlements = True; // bool | Include each plan's entitlements in the response
$without_entitlement_for = 'without_entitlement_for_example'; // string | Filter out plans that already have a plan entitlement for the specified feature ID
$without_paid_product_id = True; // bool | Filter out plans that have a paid billing product ID
$limit = 100; // int | Page limit (default 100)
$offset = 0; // int | Page offset (default 0)

try {
    $result = $schematic->PlansApi->countPlans($company_id, $company_scoped_only, $exclude_company_scoped, $for_fallback_plan, $for_initial_plan, $for_trial_expiry_plan, $has_product_id, $ids, $include_draft_versions, $plan_type, $q, $scoped_to_company_id, $with_entitlements, $without_entitlement_for, $without_paid_product_id, $limit, $offset);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Schematic->PlansApi->countPlans: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **company_id** | **string**|  | [optional] |
| **company_scoped_only** | **bool**| Only return plans that are scoped to a company (custom plans assigned to a company) | [optional] |
| **exclude_company_scoped** | **bool**| Exclude plans that are scoped to a company (custom plans assigned to a company) | [optional] |
| **for_fallback_plan** | **bool**| Filter for plans valid as fallback plans (not linked to billing) | [optional] |
| **for_initial_plan** | **bool**| Filter for plans valid as initial plans (not linked to billing, free, or auto-cancelling trial) | [optional] |
| **for_trial_expiry_plan** | **bool**| Filter for plans valid as trial expiry plans (not linked to billing or free) | [optional] |
| **has_product_id** | **bool**| Filter out plans that do not have a billing product ID | [optional] |
| **ids** | [**string[]**](../Model/string.md)|  | [optional] |
| **include_draft_versions** | **bool**| Include billing settings from draft versions for plans which have draft version | [optional] |
| **plan_type** | [**\SchematicModelPlanType**](../Model/.md)| Filter by plan type | [optional] |
| **q** | **string**|  | [optional] |
| **scoped_to_company_id** | **string**| Filter plans scoped to a specific company (custom plans) | [optional] |
| **with_entitlements** | **bool**| Include each plan&#39;s entitlements in the response | [optional] |
| **without_entitlement_for** | **string**| Filter out plans that already have a plan entitlement for the specified feature ID | [optional] |
| **without_paid_product_id** | **bool**| Filter out plans that have a paid billing product ID | [optional] |
| **limit** | **int**| Page limit (default 100) | [optional] |
| **offset** | **int**| Page offset (default 0) | [optional] |

### Return type

[**\Schematic\Model\CountPlansResponse**](../Model/CountPlansResponse.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createCustomPlan()`

```php
createCustomPlan($create_custom_plan_request_body): \Schematic\Model\CreateCustomPlanResponse
```

Create custom plan

### Example

```php
<?php
require_once 'vendor/autoload.php';

use Schematic\Schematic;

$schematic = new Schematic('YOUR_SECRET_API_KEY');

$create_custom_plan_request_body = new \Schematic\Model\CreateCustomPlanRequestBody(); // \Schematic\Model\CreateCustomPlanRequestBody

try {
    $result = $schematic->PlansApi->createCustomPlan($create_custom_plan_request_body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Schematic->PlansApi->createCustomPlan: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **create_custom_plan_request_body** | [**\Schematic\Model\CreateCustomPlanRequestBody**](../Model/CreateCustomPlanRequestBody.md)|  | |

### Return type

[**\Schematic\Model\CreateCustomPlanResponse**](../Model/CreateCustomPlanResponse.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

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

## `deletePlanVersion()`

```php
deletePlanVersion($plan_id, $promote_archived_version): \Schematic\Model\DeletePlanVersionResponse
```

Delete plan version

### Example

```php
<?php
require_once 'vendor/autoload.php';

use Schematic\Schematic;

$schematic = new Schematic('YOUR_SECRET_API_KEY');

$plan_id = 'plan_id_example'; // string | plan_id
$promote_archived_version = True; // bool

try {
    $result = $schematic->PlansApi->deletePlanVersion($plan_id, $promote_archived_version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Schematic->PlansApi->deletePlanVersion: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **plan_id** | **string**| plan_id | |
| **promote_archived_version** | **bool**|  | [optional] |

### Return type

[**\Schematic\Model\DeletePlanVersionResponse**](../Model/DeletePlanVersionResponse.md)

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
getPlan($plan_id, $plan_version_id): \Schematic\Model\GetPlanResponse
```

Get plan

### Example

```php
<?php
require_once 'vendor/autoload.php';

use Schematic\Schematic;

$schematic = new Schematic('YOUR_SECRET_API_KEY');

$plan_id = 'plan_id_example'; // string | plan_id
$plan_version_id = 'plan_version_id_example'; // string | Fetch billing settings for a specific plan version

try {
    $result = $schematic->PlansApi->getPlan($plan_id, $plan_version_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Schematic->PlansApi->getPlan: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **plan_id** | **string**| plan_id | |
| **plan_version_id** | **string**| Fetch billing settings for a specific plan version | [optional] |

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

## `listBillingProductMatchCompanies()`

```php
listBillingProductMatchCompanies($plan_id, $q, $limit, $offset): \Schematic\Model\ListBillingProductMatchCompaniesResponse
```

List billing product match companies

### Example

```php
<?php
require_once 'vendor/autoload.php';

use Schematic\Schematic;

$schematic = new Schematic('YOUR_SECRET_API_KEY');

$plan_id = 'plan_id_example'; // string | The plan ID to find billing product match companies for
$q = 'q_example'; // string | Search for companies by name, keys or string traits
$limit = 100; // int | Page limit (default 100)
$offset = 0; // int | Page offset (default 0)

try {
    $result = $schematic->PlansApi->listBillingProductMatchCompanies($plan_id, $q, $limit, $offset);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Schematic->PlansApi->listBillingProductMatchCompanies: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **plan_id** | **string**| The plan ID to find billing product match companies for | |
| **q** | **string**| Search for companies by name, keys or string traits | [optional] |
| **limit** | **int**| Page limit (default 100) | [optional] |
| **offset** | **int**| Page offset (default 0) | [optional] |

### Return type

[**\Schematic\Model\ListBillingProductMatchCompaniesResponse**](../Model/ListBillingProductMatchCompaniesResponse.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listCustomPlanBillings()`

```php
listCustomPlanBillings($company_id, $plan_id, $status, $statuses, $limit, $offset): \Schematic\Model\ListCustomPlanBillingsResponse
```

List custom plan billings

### Example

```php
<?php
require_once 'vendor/autoload.php';

use Schematic\Schematic;

$schematic = new Schematic('YOUR_SECRET_API_KEY');

$company_id = 'company_id_example'; // string | Filter by company ID
$plan_id = 'plan_id_example'; // string | Filter by plan ID
$status = new \Schematic\Model\\SchematicModelCustomPlanBillingStatus(); // \SchematicModelCustomPlanBillingStatus | Filter by billing status
$statuses = array(new \Schematic\Model\\Schematic\Model\CustomPlanBillingStatus()); // \Schematic\Model\CustomPlanBillingStatus[] | Filter by multiple billing statuses
$limit = 100; // int | Page limit (default 100)
$offset = 0; // int | Page offset (default 0)

try {
    $result = $schematic->PlansApi->listCustomPlanBillings($company_id, $plan_id, $status, $statuses, $limit, $offset);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Schematic->PlansApi->listCustomPlanBillings: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **company_id** | **string**| Filter by company ID | [optional] |
| **plan_id** | **string**| Filter by plan ID | [optional] |
| **status** | [**\SchematicModelCustomPlanBillingStatus**](../Model/.md)| Filter by billing status | [optional] |
| **statuses** | [**\Schematic\Model\CustomPlanBillingStatus[]**](../Model/\Schematic\Model\CustomPlanBillingStatus.md)| Filter by multiple billing statuses | [optional] |
| **limit** | **int**| Page limit (default 100) | [optional] |
| **offset** | **int**| Page offset (default 0) | [optional] |

### Return type

[**\Schematic\Model\ListCustomPlanBillingsResponse**](../Model/ListCustomPlanBillingsResponse.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listPlanIssues()`

```php
listPlanIssues($plan_id, $plan_version_id): \Schematic\Model\ListPlanIssuesResponse
```

List plan issues

### Example

```php
<?php
require_once 'vendor/autoload.php';

use Schematic\Schematic;

$schematic = new Schematic('YOUR_SECRET_API_KEY');

$plan_id = 'plan_id_example'; // string
$plan_version_id = 'plan_version_id_example'; // string

try {
    $result = $schematic->PlansApi->listPlanIssues($plan_id, $plan_version_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Schematic->PlansApi->listPlanIssues: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **plan_id** | **string**|  | |
| **plan_version_id** | **string**|  | [optional] |

### Return type

[**\Schematic\Model\ListPlanIssuesResponse**](../Model/ListPlanIssuesResponse.md)

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
listPlans($company_id, $company_scoped_only, $exclude_company_scoped, $for_fallback_plan, $for_initial_plan, $for_trial_expiry_plan, $has_product_id, $ids, $include_draft_versions, $plan_type, $q, $scoped_to_company_id, $with_entitlements, $without_entitlement_for, $without_paid_product_id, $limit, $offset): \Schematic\Model\ListPlansResponse
```

List plans

### Example

```php
<?php
require_once 'vendor/autoload.php';

use Schematic\Schematic;

$schematic = new Schematic('YOUR_SECRET_API_KEY');

$company_id = 'company_id_example'; // string
$company_scoped_only = True; // bool | Only return plans that are scoped to a company (custom plans assigned to a company)
$exclude_company_scoped = True; // bool | Exclude plans that are scoped to a company (custom plans assigned to a company)
$for_fallback_plan = True; // bool | Filter for plans valid as fallback plans (not linked to billing)
$for_initial_plan = True; // bool | Filter for plans valid as initial plans (not linked to billing, free, or auto-cancelling trial)
$for_trial_expiry_plan = True; // bool | Filter for plans valid as trial expiry plans (not linked to billing or free)
$has_product_id = True; // bool | Filter out plans that do not have a billing product ID
$ids = array('ids_example'); // string[]
$include_draft_versions = True; // bool | Include billing settings from draft versions for plans which have draft version
$plan_type = new \Schematic\Model\\SchematicModelPlanType(); // \SchematicModelPlanType | Filter by plan type
$q = 'q_example'; // string
$scoped_to_company_id = 'scoped_to_company_id_example'; // string | Filter plans scoped to a specific company (custom plans)
$with_entitlements = True; // bool | Include each plan's entitlements in the response
$without_entitlement_for = 'without_entitlement_for_example'; // string | Filter out plans that already have a plan entitlement for the specified feature ID
$without_paid_product_id = True; // bool | Filter out plans that have a paid billing product ID
$limit = 100; // int | Page limit (default 100)
$offset = 0; // int | Page offset (default 0)

try {
    $result = $schematic->PlansApi->listPlans($company_id, $company_scoped_only, $exclude_company_scoped, $for_fallback_plan, $for_initial_plan, $for_trial_expiry_plan, $has_product_id, $ids, $include_draft_versions, $plan_type, $q, $scoped_to_company_id, $with_entitlements, $without_entitlement_for, $without_paid_product_id, $limit, $offset);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Schematic->PlansApi->listPlans: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **company_id** | **string**|  | [optional] |
| **company_scoped_only** | **bool**| Only return plans that are scoped to a company (custom plans assigned to a company) | [optional] |
| **exclude_company_scoped** | **bool**| Exclude plans that are scoped to a company (custom plans assigned to a company) | [optional] |
| **for_fallback_plan** | **bool**| Filter for plans valid as fallback plans (not linked to billing) | [optional] |
| **for_initial_plan** | **bool**| Filter for plans valid as initial plans (not linked to billing, free, or auto-cancelling trial) | [optional] |
| **for_trial_expiry_plan** | **bool**| Filter for plans valid as trial expiry plans (not linked to billing or free) | [optional] |
| **has_product_id** | **bool**| Filter out plans that do not have a billing product ID | [optional] |
| **ids** | [**string[]**](../Model/string.md)|  | [optional] |
| **include_draft_versions** | **bool**| Include billing settings from draft versions for plans which have draft version | [optional] |
| **plan_type** | [**\SchematicModelPlanType**](../Model/.md)| Filter by plan type | [optional] |
| **q** | **string**|  | [optional] |
| **scoped_to_company_id** | **string**| Filter plans scoped to a specific company (custom plans) | [optional] |
| **with_entitlements** | **bool**| Include each plan&#39;s entitlements in the response | [optional] |
| **without_entitlement_for** | **string**| Filter out plans that already have a plan entitlement for the specified feature ID | [optional] |
| **without_paid_product_id** | **bool**| Filter out plans that have a paid billing product ID | [optional] |
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

## `markCustomPlanBillingPaid()`

```php
markCustomPlanBillingPaid($custom_plan_billing_id, $body): \Schematic\Model\MarkCustomPlanBillingPaidResponse
```

Mark custom plan billing paid

### Example

```php
<?php
require_once 'vendor/autoload.php';

use Schematic\Schematic;

$schematic = new Schematic('YOUR_SECRET_API_KEY');

$custom_plan_billing_id = 'custom_plan_billing_id_example'; // string | custom_plan_billing_id
$body = array('key' => new \stdClass); // object

try {
    $result = $schematic->PlansApi->markCustomPlanBillingPaid($custom_plan_billing_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Schematic->PlansApi->markCustomPlanBillingPaid: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **custom_plan_billing_id** | **string**| custom_plan_billing_id | |
| **body** | **object**|  | |

### Return type

[**\Schematic\Model\MarkCustomPlanBillingPaidResponse**](../Model/MarkCustomPlanBillingPaidResponse.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `publishPlanVersion()`

```php
publishPlanVersion($plan_id, $publish_plan_version_request_body): \Schematic\Model\PublishPlanVersionResponse
```

Publish plan version

### Example

```php
<?php
require_once 'vendor/autoload.php';

use Schematic\Schematic;

$schematic = new Schematic('YOUR_SECRET_API_KEY');

$plan_id = 'plan_id_example'; // string | plan_id
$publish_plan_version_request_body = new \Schematic\Model\PublishPlanVersionRequestBody(); // \Schematic\Model\PublishPlanVersionRequestBody

try {
    $result = $schematic->PlansApi->publishPlanVersion($plan_id, $publish_plan_version_request_body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Schematic->PlansApi->publishPlanVersion: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **plan_id** | **string**| plan_id | |
| **publish_plan_version_request_body** | [**\Schematic\Model\PublishPlanVersionRequestBody**](../Model/PublishPlanVersionRequestBody.md)|  | |

### Return type

[**\Schematic\Model\PublishPlanVersionResponse**](../Model/PublishPlanVersionResponse.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `retryCustomPlanBilling()`

```php
retryCustomPlanBilling($custom_plan_billing_id, $retry_custom_plan_billing_request_body): \Schematic\Model\RetryCustomPlanBillingResponse
```

Retry custom plan billing

### Example

```php
<?php
require_once 'vendor/autoload.php';

use Schematic\Schematic;

$schematic = new Schematic('YOUR_SECRET_API_KEY');

$custom_plan_billing_id = 'custom_plan_billing_id_example'; // string | custom_plan_billing_id
$retry_custom_plan_billing_request_body = new \Schematic\Model\RetryCustomPlanBillingRequestBody(); // \Schematic\Model\RetryCustomPlanBillingRequestBody

try {
    $result = $schematic->PlansApi->retryCustomPlanBilling($custom_plan_billing_id, $retry_custom_plan_billing_request_body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Schematic->PlansApi->retryCustomPlanBilling: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **custom_plan_billing_id** | **string**| custom_plan_billing_id | |
| **retry_custom_plan_billing_request_body** | [**\Schematic\Model\RetryCustomPlanBillingRequestBody**](../Model/RetryCustomPlanBillingRequestBody.md)|  | |

### Return type

[**\Schematic\Model\RetryCustomPlanBillingResponse**](../Model/RetryCustomPlanBillingResponse.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateCompanyPlans()`

```php
updateCompanyPlans($company_plan_id, $update_company_plans_request_body): \Schematic\Model\UpdateCompanyPlansResponse
```

Update company plans

### Example

```php
<?php
require_once 'vendor/autoload.php';

use Schematic\Schematic;

$schematic = new Schematic('YOUR_SECRET_API_KEY');

$company_plan_id = 'company_plan_id_example'; // string | company_plan_id
$update_company_plans_request_body = new \Schematic\Model\UpdateCompanyPlansRequestBody(); // \Schematic\Model\UpdateCompanyPlansRequestBody

try {
    $result = $schematic->PlansApi->updateCompanyPlans($company_plan_id, $update_company_plans_request_body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Schematic->PlansApi->updateCompanyPlans: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **company_plan_id** | **string**| company_plan_id | |
| **update_company_plans_request_body** | [**\Schematic\Model\UpdateCompanyPlansRequestBody**](../Model/UpdateCompanyPlansRequestBody.md)|  | |

### Return type

[**\Schematic\Model\UpdateCompanyPlansResponse**](../Model/UpdateCompanyPlansResponse.md)

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

## `upsertBillingProductPlan()`

```php
upsertBillingProductPlan($plan_id, $upsert_billing_product_request_body): \Schematic\Model\UpsertBillingProductPlanResponse
```

Upsert billing product plan

### Example

```php
<?php
require_once 'vendor/autoload.php';

use Schematic\Schematic;

$schematic = new Schematic('YOUR_SECRET_API_KEY');

$plan_id = 'plan_id_example'; // string | plan_id
$upsert_billing_product_request_body = new \Schematic\Model\UpsertBillingProductRequestBody(); // \Schematic\Model\UpsertBillingProductRequestBody

try {
    $result = $schematic->PlansApi->upsertBillingProductPlan($plan_id, $upsert_billing_product_request_body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Schematic->PlansApi->upsertBillingProductPlan: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **plan_id** | **string**| plan_id | |
| **upsert_billing_product_request_body** | [**\Schematic\Model\UpsertBillingProductRequestBody**](../Model/UpsertBillingProductRequestBody.md)|  | |

### Return type

[**\Schematic\Model\UpsertBillingProductPlanResponse**](../Model/UpsertBillingProductPlanResponse.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `upsertPlanForBillingProduct()`

```php
upsertPlanForBillingProduct($create_billing_linked_plan_request_body): \Schematic\Model\UpsertPlanForBillingProductResponse
```

Upsert plan for billing product

### Example

```php
<?php
require_once 'vendor/autoload.php';

use Schematic\Schematic;

$schematic = new Schematic('YOUR_SECRET_API_KEY');

$create_billing_linked_plan_request_body = new \Schematic\Model\CreateBillingLinkedPlanRequestBody(); // \Schematic\Model\CreateBillingLinkedPlanRequestBody

try {
    $result = $schematic->PlansApi->upsertPlanForBillingProduct($create_billing_linked_plan_request_body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Schematic->PlansApi->upsertPlanForBillingProduct: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **create_billing_linked_plan_request_body** | [**\Schematic\Model\CreateBillingLinkedPlanRequestBody**](../Model/CreateBillingLinkedPlanRequestBody.md)|  | |

### Return type

[**\Schematic\Model\UpsertPlanForBillingProductResponse**](../Model/UpsertPlanForBillingProductResponse.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
