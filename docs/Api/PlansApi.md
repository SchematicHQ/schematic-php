# Schematic\PlansApi

All URIs are relative to https://api.schematichq.com, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**countPlans()**](PlansApi.md#countPlans) | **GET** /plans/count | Count plans |
| [**createPlan()**](PlansApi.md#createPlan) | **POST** /plans | Create plan |
| [**deleteAudience()**](PlansApi.md#deleteAudience) | **DELETE** /plan-audiences/{plan_audience_id} | Delete audience |
| [**deletePlan()**](PlansApi.md#deletePlan) | **DELETE** /plans/{plan_id} | Delete plan |
| [**getAudience()**](PlansApi.md#getAudience) | **GET** /plan-audiences/{plan_audience_id} | Get audience |
| [**getPlan()**](PlansApi.md#getPlan) | **GET** /plans/{plan_id} | Get plan |
| [**listPlans()**](PlansApi.md#listPlans) | **GET** /plans | List plans |
| [**updateAudience()**](PlansApi.md#updateAudience) | **PUT** /plan-audiences/{plan_audience_id} | Update audience |
| [**updateCompanyPlans()**](PlansApi.md#updateCompanyPlans) | **PUT** /company-plans/{company_plan_id} | Update company plans |
| [**updatePlan()**](PlansApi.md#updatePlan) | **PUT** /plans/{plan_id} | Update plan |
| [**upsertBillingProductPlan()**](PlansApi.md#upsertBillingProductPlan) | **PUT** /plans/{plan_id}/billing_products | Upsert billing product plan |


## `countPlans()`

```php
countPlans($company_id, $has_product_id, $ids, $plan_type, $q, $without_entitlement_for, $without_product_id, $without_paid_product_id, $limit, $offset): \Schematic\Model\CountPlansResponse
```

Count plans

### Example

```php
<?php
require_once 'vendor/autoload.php';

use Schematic\Schematic;

$schematic = new Schematic('YOUR_SECRET_API_KEY');

$company_id = 'company_id_example'; // string
$has_product_id = True; // bool | Filter out plans that do not have a billing product ID
$ids = array('ids_example'); // string[]
$plan_type = 'plan_type_example'; // string | Filter by plan type
$q = 'q_example'; // string
$without_entitlement_for = 'without_entitlement_for_example'; // string | Filter out plans that already have a plan entitlement for the specified feature ID
$without_product_id = True; // bool | Filter out plans that have a billing product ID
$without_paid_product_id = True; // bool | Filter out plans that have a paid billing product ID
$limit = 100; // int | Page limit (default 100)
$offset = 0; // int | Page offset (default 0)

try {
    $result = $schematic->PlansApi->countPlans($company_id, $has_product_id, $ids, $plan_type, $q, $without_entitlement_for, $without_product_id, $without_paid_product_id, $limit, $offset);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Schematic->PlansApi->countPlans: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **company_id** | **string**|  | [optional] |
| **has_product_id** | **bool**| Filter out plans that do not have a billing product ID | [optional] |
| **ids** | [**string[]**](../Model/string.md)|  | [optional] |
| **plan_type** | **string**| Filter by plan type | [optional] |
| **q** | **string**|  | [optional] |
| **without_entitlement_for** | **string**| Filter out plans that already have a plan entitlement for the specified feature ID | [optional] |
| **without_product_id** | **bool**| Filter out plans that have a billing product ID | [optional] |
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

## `deleteAudience()`

```php
deleteAudience($plan_audience_id): \Schematic\Model\DeleteAudienceResponse
```

Delete audience

### Example

```php
<?php
require_once 'vendor/autoload.php';

use Schematic\Schematic;

$schematic = new Schematic('YOUR_SECRET_API_KEY');

$plan_audience_id = 'plan_audience_id_example'; // string | plan_audience_id

try {
    $result = $schematic->PlansApi->deleteAudience($plan_audience_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Schematic->PlansApi->deleteAudience: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **plan_audience_id** | **string**| plan_audience_id | |

### Return type

[**\Schematic\Model\DeleteAudienceResponse**](../Model/DeleteAudienceResponse.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: Not defined
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

## `getAudience()`

```php
getAudience($plan_audience_id): \Schematic\Model\GetAudienceResponse
```

Get audience

### Example

```php
<?php
require_once 'vendor/autoload.php';

use Schematic\Schematic;

$schematic = new Schematic('YOUR_SECRET_API_KEY');

$plan_audience_id = 'plan_audience_id_example'; // string | plan_audience_id

try {
    $result = $schematic->PlansApi->getAudience($plan_audience_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Schematic->PlansApi->getAudience: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **plan_audience_id** | **string**| plan_audience_id | |

### Return type

[**\Schematic\Model\GetAudienceResponse**](../Model/GetAudienceResponse.md)

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
listPlans($company_id, $has_product_id, $ids, $plan_type, $q, $without_entitlement_for, $without_product_id, $without_paid_product_id, $limit, $offset): \Schematic\Model\ListPlansResponse
```

List plans

### Example

```php
<?php
require_once 'vendor/autoload.php';

use Schematic\Schematic;

$schematic = new Schematic('YOUR_SECRET_API_KEY');

$company_id = 'company_id_example'; // string
$has_product_id = True; // bool | Filter out plans that do not have a billing product ID
$ids = array('ids_example'); // string[]
$plan_type = 'plan_type_example'; // string | Filter by plan type
$q = 'q_example'; // string
$without_entitlement_for = 'without_entitlement_for_example'; // string | Filter out plans that already have a plan entitlement for the specified feature ID
$without_product_id = True; // bool | Filter out plans that have a billing product ID
$without_paid_product_id = True; // bool | Filter out plans that have a paid billing product ID
$limit = 100; // int | Page limit (default 100)
$offset = 0; // int | Page offset (default 0)

try {
    $result = $schematic->PlansApi->listPlans($company_id, $has_product_id, $ids, $plan_type, $q, $without_entitlement_for, $without_product_id, $without_paid_product_id, $limit, $offset);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Schematic->PlansApi->listPlans: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **company_id** | **string**|  | [optional] |
| **has_product_id** | **bool**| Filter out plans that do not have a billing product ID | [optional] |
| **ids** | [**string[]**](../Model/string.md)|  | [optional] |
| **plan_type** | **string**| Filter by plan type | [optional] |
| **q** | **string**|  | [optional] |
| **without_entitlement_for** | **string**| Filter out plans that already have a plan entitlement for the specified feature ID | [optional] |
| **without_product_id** | **bool**| Filter out plans that have a billing product ID | [optional] |
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

## `updateAudience()`

```php
updateAudience($plan_audience_id, $update_audience_request_body): \Schematic\Model\UpdateAudienceResponse
```

Update audience

### Example

```php
<?php
require_once 'vendor/autoload.php';

use Schematic\Schematic;

$schematic = new Schematic('YOUR_SECRET_API_KEY');

$plan_audience_id = 'plan_audience_id_example'; // string | plan_audience_id
$update_audience_request_body = new \Schematic\Model\UpdateAudienceRequestBody(); // \Schematic\Model\UpdateAudienceRequestBody

try {
    $result = $schematic->PlansApi->updateAudience($plan_audience_id, $update_audience_request_body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Schematic->PlansApi->updateAudience: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **plan_audience_id** | **string**| plan_audience_id | |
| **update_audience_request_body** | [**\Schematic\Model\UpdateAudienceRequestBody**](../Model/UpdateAudienceRequestBody.md)|  | |

### Return type

[**\Schematic\Model\UpdateAudienceResponse**](../Model/UpdateAudienceResponse.md)

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
