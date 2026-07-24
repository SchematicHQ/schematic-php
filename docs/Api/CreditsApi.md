# Schematic\CreditsApi

All URIs are relative to https://api.schematichq.com, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**acquireCreditLease()**](CreditsApi.md#acquireCreditLease) | **POST** /billing/credits/lease | Acquire credit lease |
| [**countBillingCredits()**](CreditsApi.md#countBillingCredits) | **GET** /billing/credits/count | Count billing credits |
| [**countBillingCreditsGrants()**](CreditsApi.md#countBillingCreditsGrants) | **GET** /billing/credits/grants/count | Count billing credits grants |
| [**countBillingPlanCreditGrants()**](CreditsApi.md#countBillingPlanCreditGrants) | **GET** /billing/credits/plan-grants/count | Count billing plan credit grants |
| [**countCompanyGrants()**](CreditsApi.md#countCompanyGrants) | **GET** /billing/credits/grants/company/count | Count company grants |
| [**countCreditBundles()**](CreditsApi.md#countCreditBundles) | **GET** /billing/credits/bundles/count | Count credit bundles |
| [**countCreditEventLedger()**](CreditsApi.md#countCreditEventLedger) | **GET** /v2/billing/credits/ledger/count | Count credit event ledger |
| [**createBillingCredit()**](CreditsApi.md#createBillingCredit) | **POST** /billing/credits | Create billing credit |
| [**createBillingPlanCreditGrant()**](CreditsApi.md#createBillingPlanCreditGrant) | **POST** /billing/credits/plan-grants | Create billing plan credit grant |
| [**createCreditBundle()**](CreditsApi.md#createCreditBundle) | **POST** /billing/credits/bundles | Create credit bundle |
| [**deleteBillingPlanCreditGrant()**](CreditsApi.md#deleteBillingPlanCreditGrant) | **DELETE** /billing/credits/plan-grants/{plan_grant_id} | Delete billing plan credit grant |
| [**deleteCreditBundle()**](CreditsApi.md#deleteCreditBundle) | **DELETE** /billing/credits/bundles/{bundle_id} | Delete credit bundle |
| [**extendCreditLease()**](CreditsApi.md#extendCreditLease) | **PUT** /billing/credits/lease/{lease_id}/extend | Extend credit lease |
| [**getCreditBundle()**](CreditsApi.md#getCreditBundle) | **GET** /billing/credits/bundles/{bundle_id} | Get credit bundle |
| [**getSingleBillingCredit()**](CreditsApi.md#getSingleBillingCredit) | **GET** /billing/credits/{credit_id} | Get single billing credit |
| [**getSingleBillingPlanCreditGrant()**](CreditsApi.md#getSingleBillingPlanCreditGrant) | **GET** /billing/credits/plan-grants/{plan_grant_id} | Get single billing plan credit grant |
| [**grantBillingCreditsToCompany()**](CreditsApi.md#grantBillingCreditsToCompany) | **POST** /billing/credits/grants/company | Grant billing credits to company |
| [**listBillingCredits()**](CreditsApi.md#listBillingCredits) | **GET** /billing/credits | List billing credits |
| [**listBillingPlanCreditGrants()**](CreditsApi.md#listBillingPlanCreditGrants) | **GET** /billing/credits/plan-grants | List billing plan credit grants |
| [**listCompanyCreditBalances()**](CreditsApi.md#listCompanyCreditBalances) | **GET** /billing/credits/balance | List company credit balances |
| [**listCompanyGrants()**](CreditsApi.md#listCompanyGrants) | **GET** /billing/credits/grants/company/list | List company grants |
| [**listCreditBundles()**](CreditsApi.md#listCreditBundles) | **GET** /billing/credits/bundles | List credit bundles |
| [**listCreditEventLedger()**](CreditsApi.md#listCreditEventLedger) | **GET** /v2/billing/credits/ledger | List credit event ledger |
| [**listGrantsForCredit()**](CreditsApi.md#listGrantsForCredit) | **GET** /billing/credits/grants/list | List grants for credit |
| [**releaseCreditLease()**](CreditsApi.md#releaseCreditLease) | **PUT** /billing/credits/lease/{lease_id}/release | Release credit lease |
| [**softDeleteBillingCredit()**](CreditsApi.md#softDeleteBillingCredit) | **DELETE** /billing/credits/{credit_id} | Soft delete billing credit |
| [**updateBillingCredit()**](CreditsApi.md#updateBillingCredit) | **PUT** /billing/credits/{credit_id} | Update billing credit |
| [**updateBillingPlanCreditGrant()**](CreditsApi.md#updateBillingPlanCreditGrant) | **PUT** /billing/credits/plan-grants/{plan_grant_id} | Update billing plan credit grant |
| [**updateCreditBundleDetails()**](CreditsApi.md#updateCreditBundleDetails) | **PUT** /billing/credits/bundles/{bundle_id} | Update credit bundle details |
| [**zeroOutGrant()**](CreditsApi.md#zeroOutGrant) | **PUT** /billing/credits/grants/{grant_id}/zero-out | Zero out grant |


## `acquireCreditLease()`

```php
acquireCreditLease($acquire_credit_lease_request_body): \Schematic\Model\AcquireCreditLeaseResponse
```

Acquire credit lease

### Example

```php
<?php
require_once 'vendor/autoload.php';

use Schematic\Schematic;

$schematic = new Schematic('YOUR_SECRET_API_KEY');

$acquire_credit_lease_request_body = new \Schematic\Model\AcquireCreditLeaseRequestBody(); // \Schematic\Model\AcquireCreditLeaseRequestBody

try {
    $result = $schematic->CreditsApi->acquireCreditLease($acquire_credit_lease_request_body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Schematic->CreditsApi->acquireCreditLease: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **acquire_credit_lease_request_body** | [**\Schematic\Model\AcquireCreditLeaseRequestBody**](../Model/AcquireCreditLeaseRequestBody.md)|  | |

### Return type

[**\Schematic\Model\AcquireCreditLeaseResponse**](../Model/AcquireCreditLeaseResponse.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `countBillingCredits()`

```php
countBillingCredits($ids, $name, $limit, $offset): \Schematic\Model\CountBillingCreditsResponse
```

Count billing credits

### Example

```php
<?php
require_once 'vendor/autoload.php';

use Schematic\Schematic;

$schematic = new Schematic('YOUR_SECRET_API_KEY');

$ids = array('ids_example'); // string[]
$name = 'name_example'; // string
$limit = 100; // int | Page limit (default 100)
$offset = 0; // int | Page offset (default 0)

try {
    $result = $schematic->CreditsApi->countBillingCredits($ids, $name, $limit, $offset);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Schematic->CreditsApi->countBillingCredits: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **ids** | [**string[]**](../Model/string.md)|  | [optional] |
| **name** | **string**|  | [optional] |
| **limit** | **int**| Page limit (default 100) | [optional] |
| **offset** | **int**| Page offset (default 0) | [optional] |

### Return type

[**\Schematic\Model\CountBillingCreditsResponse**](../Model/CountBillingCreditsResponse.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `countBillingCreditsGrants()`

```php
countBillingCreditsGrants($credit_id, $ids, $limit, $offset): \Schematic\Model\CountBillingCreditsGrantsResponse
```

Count billing credits grants

### Example

```php
<?php
require_once 'vendor/autoload.php';

use Schematic\Schematic;

$schematic = new Schematic('YOUR_SECRET_API_KEY');

$credit_id = 'credit_id_example'; // string
$ids = array('ids_example'); // string[]
$limit = 100; // int | Page limit (default 100)
$offset = 0; // int | Page offset (default 0)

try {
    $result = $schematic->CreditsApi->countBillingCreditsGrants($credit_id, $ids, $limit, $offset);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Schematic->CreditsApi->countBillingCreditsGrants: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **credit_id** | **string**|  | [optional] |
| **ids** | [**string[]**](../Model/string.md)|  | [optional] |
| **limit** | **int**| Page limit (default 100) | [optional] |
| **offset** | **int**| Page offset (default 0) | [optional] |

### Return type

[**\Schematic\Model\CountBillingCreditsGrantsResponse**](../Model/CountBillingCreditsGrantsResponse.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `countBillingPlanCreditGrants()`

```php
countBillingPlanCreditGrants($credit_id, $ids, $plan_id, $plan_ids, $plan_version_id, $plan_version_ids, $limit, $offset): \Schematic\Model\CountBillingPlanCreditGrantsResponse
```

Count billing plan credit grants

### Example

```php
<?php
require_once 'vendor/autoload.php';

use Schematic\Schematic;

$schematic = new Schematic('YOUR_SECRET_API_KEY');

$credit_id = 'credit_id_example'; // string
$ids = array('ids_example'); // string[]
$plan_id = 'plan_id_example'; // string
$plan_ids = array('plan_ids_example'); // string[]
$plan_version_id = 'plan_version_id_example'; // string
$plan_version_ids = array('plan_version_ids_example'); // string[]
$limit = 100; // int | Page limit (default 100)
$offset = 0; // int | Page offset (default 0)

try {
    $result = $schematic->CreditsApi->countBillingPlanCreditGrants($credit_id, $ids, $plan_id, $plan_ids, $plan_version_id, $plan_version_ids, $limit, $offset);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Schematic->CreditsApi->countBillingPlanCreditGrants: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **credit_id** | **string**|  | [optional] |
| **ids** | [**string[]**](../Model/string.md)|  | [optional] |
| **plan_id** | **string**|  | [optional] |
| **plan_ids** | [**string[]**](../Model/string.md)|  | [optional] |
| **plan_version_id** | **string**|  | [optional] |
| **plan_version_ids** | [**string[]**](../Model/string.md)|  | [optional] |
| **limit** | **int**| Page limit (default 100) | [optional] |
| **offset** | **int**| Page offset (default 0) | [optional] |

### Return type

[**\Schematic\Model\CountBillingPlanCreditGrantsResponse**](../Model/CountBillingPlanCreditGrantsResponse.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `countCompanyGrants()`

```php
countCompanyGrants($company_id, $order, $dir, $limit, $offset): \Schematic\Model\CountCompanyGrantsResponse
```

Count company grants

### Example

```php
<?php
require_once 'vendor/autoload.php';

use Schematic\Schematic;

$schematic = new Schematic('YOUR_SECRET_API_KEY');

$company_id = 'company_id_example'; // string
$order = new \Schematic\Model\CreditGrantSortOrder(); // CreditGrantSortOrder
$dir = new \Schematic\Model\SortDirection(); // SortDirection
$limit = 100; // int | Page limit (default 100)
$offset = 0; // int | Page offset (default 0)

try {
    $result = $schematic->CreditsApi->countCompanyGrants($company_id, $order, $dir, $limit, $offset);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Schematic->CreditsApi->countCompanyGrants: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **company_id** | **string**|  | [optional] |
| **order** | [**CreditGrantSortOrder**](../Model/.md)|  | [optional] |
| **dir** | [**SortDirection**](../Model/.md)|  | [optional] |
| **limit** | **int**| Page limit (default 100) | [optional] |
| **offset** | **int**| Page offset (default 0) | [optional] |

### Return type

[**\Schematic\Model\CountCompanyGrantsResponse**](../Model/CountCompanyGrantsResponse.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `countCreditBundles()`

```php
countCreditBundles($ids, $credit_id, $status, $bundle_type, $limit, $offset): \Schematic\Model\CountCreditBundlesResponse
```

Count credit bundles

### Example

```php
<?php
require_once 'vendor/autoload.php';

use Schematic\Schematic;

$schematic = new Schematic('YOUR_SECRET_API_KEY');

$ids = array('ids_example'); // string[]
$credit_id = 'credit_id_example'; // string
$status = new \Schematic\Model\BillingCreditBundleStatus(); // BillingCreditBundleStatus
$bundle_type = new \Schematic\Model\BillingCreditBundleType(); // BillingCreditBundleType
$limit = 100; // int | Page limit (default 100)
$offset = 0; // int | Page offset (default 0)

try {
    $result = $schematic->CreditsApi->countCreditBundles($ids, $credit_id, $status, $bundle_type, $limit, $offset);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Schematic->CreditsApi->countCreditBundles: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **ids** | [**string[]**](../Model/string.md)|  | [optional] |
| **credit_id** | **string**|  | [optional] |
| **status** | [**BillingCreditBundleStatus**](../Model/.md)|  | [optional] |
| **bundle_type** | [**BillingCreditBundleType**](../Model/.md)|  | [optional] |
| **limit** | **int**| Page limit (default 100) | [optional] |
| **offset** | **int**| Page offset (default 0) | [optional] |

### Return type

[**\Schematic\Model\CountCreditBundlesResponse**](../Model/CountCreditBundlesResponse.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `countCreditEventLedger()`

```php
countCreditEventLedger($company_id, $billing_credit_id, $end_time, $event_type, $feature_id, $start_time, $limit, $offset): \Schematic\Model\CountCreditEventLedgerResponse
```

Count credit event ledger

### Example

```php
<?php
require_once 'vendor/autoload.php';

use Schematic\Schematic;

$schematic = new Schematic('YOUR_SECRET_API_KEY');

$company_id = 'company_id_example'; // string
$billing_credit_id = 'billing_credit_id_example'; // string
$end_time = 'end_time_example'; // string
$event_type = new \Schematic\Model\CreditEventType(); // CreditEventType
$feature_id = 'feature_id_example'; // string
$start_time = 'start_time_example'; // string
$limit = 100; // int | Page limit (default 100)
$offset = 0; // int | Page offset (default 0)

try {
    $result = $schematic->CreditsApi->countCreditEventLedger($company_id, $billing_credit_id, $end_time, $event_type, $feature_id, $start_time, $limit, $offset);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Schematic->CreditsApi->countCreditEventLedger: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **company_id** | **string**|  | |
| **billing_credit_id** | **string**|  | [optional] |
| **end_time** | **string**|  | [optional] |
| **event_type** | [**CreditEventType**](../Model/.md)|  | [optional] |
| **feature_id** | **string**|  | [optional] |
| **start_time** | **string**|  | [optional] |
| **limit** | **int**| Page limit (default 100) | [optional] |
| **offset** | **int**| Page offset (default 0) | [optional] |

### Return type

[**\Schematic\Model\CountCreditEventLedgerResponse**](../Model/CountCreditEventLedgerResponse.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createBillingCredit()`

```php
createBillingCredit($create_billing_credit_request_body): \Schematic\Model\CreateBillingCreditResponse
```

Create billing credit

### Example

```php
<?php
require_once 'vendor/autoload.php';

use Schematic\Schematic;

$schematic = new Schematic('YOUR_SECRET_API_KEY');

$create_billing_credit_request_body = new \Schematic\Model\CreateBillingCreditRequestBody(); // \Schematic\Model\CreateBillingCreditRequestBody

try {
    $result = $schematic->CreditsApi->createBillingCredit($create_billing_credit_request_body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Schematic->CreditsApi->createBillingCredit: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **create_billing_credit_request_body** | [**\Schematic\Model\CreateBillingCreditRequestBody**](../Model/CreateBillingCreditRequestBody.md)|  | |

### Return type

[**\Schematic\Model\CreateBillingCreditResponse**](../Model/CreateBillingCreditResponse.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createBillingPlanCreditGrant()`

```php
createBillingPlanCreditGrant($create_billing_plan_credit_grant_request_body): \Schematic\Model\CreateBillingPlanCreditGrantResponse
```

Create billing plan credit grant

### Example

```php
<?php
require_once 'vendor/autoload.php';

use Schematic\Schematic;

$schematic = new Schematic('YOUR_SECRET_API_KEY');

$create_billing_plan_credit_grant_request_body = new \Schematic\Model\CreateBillingPlanCreditGrantRequestBody(); // \Schematic\Model\CreateBillingPlanCreditGrantRequestBody

try {
    $result = $schematic->CreditsApi->createBillingPlanCreditGrant($create_billing_plan_credit_grant_request_body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Schematic->CreditsApi->createBillingPlanCreditGrant: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **create_billing_plan_credit_grant_request_body** | [**\Schematic\Model\CreateBillingPlanCreditGrantRequestBody**](../Model/CreateBillingPlanCreditGrantRequestBody.md)|  | |

### Return type

[**\Schematic\Model\CreateBillingPlanCreditGrantResponse**](../Model/CreateBillingPlanCreditGrantResponse.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createCreditBundle()`

```php
createCreditBundle($create_credit_bundle_request_body): \Schematic\Model\CreateCreditBundleResponse
```

Create credit bundle

### Example

```php
<?php
require_once 'vendor/autoload.php';

use Schematic\Schematic;

$schematic = new Schematic('YOUR_SECRET_API_KEY');

$create_credit_bundle_request_body = new \Schematic\Model\CreateCreditBundleRequestBody(); // \Schematic\Model\CreateCreditBundleRequestBody

try {
    $result = $schematic->CreditsApi->createCreditBundle($create_credit_bundle_request_body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Schematic->CreditsApi->createCreditBundle: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **create_credit_bundle_request_body** | [**\Schematic\Model\CreateCreditBundleRequestBody**](../Model/CreateCreditBundleRequestBody.md)|  | |

### Return type

[**\Schematic\Model\CreateCreditBundleResponse**](../Model/CreateCreditBundleResponse.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteBillingPlanCreditGrant()`

```php
deleteBillingPlanCreditGrant($plan_grant_id, $apply_to_existing): \Schematic\Model\DeleteBillingPlanCreditGrantResponse
```

Delete billing plan credit grant

### Example

```php
<?php
require_once 'vendor/autoload.php';

use Schematic\Schematic;

$schematic = new Schematic('YOUR_SECRET_API_KEY');

$plan_grant_id = 'plan_grant_id_example'; // string | plan_grant_id
$apply_to_existing = True; // bool

try {
    $result = $schematic->CreditsApi->deleteBillingPlanCreditGrant($plan_grant_id, $apply_to_existing);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Schematic->CreditsApi->deleteBillingPlanCreditGrant: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **plan_grant_id** | **string**| plan_grant_id | |
| **apply_to_existing** | **bool**|  | [optional] |

### Return type

[**\Schematic\Model\DeleteBillingPlanCreditGrantResponse**](../Model/DeleteBillingPlanCreditGrantResponse.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteCreditBundle()`

```php
deleteCreditBundle($bundle_id): \Schematic\Model\DeleteCreditBundleResponse
```

Delete credit bundle

### Example

```php
<?php
require_once 'vendor/autoload.php';

use Schematic\Schematic;

$schematic = new Schematic('YOUR_SECRET_API_KEY');

$bundle_id = 'bundle_id_example'; // string | bundle_id

try {
    $result = $schematic->CreditsApi->deleteCreditBundle($bundle_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Schematic->CreditsApi->deleteCreditBundle: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **bundle_id** | **string**| bundle_id | |

### Return type

[**\Schematic\Model\DeleteCreditBundleResponse**](../Model/DeleteCreditBundleResponse.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `extendCreditLease()`

```php
extendCreditLease($lease_id, $extend_credit_lease_request_body): \Schematic\Model\ExtendCreditLeaseResponse
```

Extend credit lease

### Example

```php
<?php
require_once 'vendor/autoload.php';

use Schematic\Schematic;

$schematic = new Schematic('YOUR_SECRET_API_KEY');

$lease_id = 'lease_id_example'; // string | lease_id
$extend_credit_lease_request_body = new \Schematic\Model\ExtendCreditLeaseRequestBody(); // \Schematic\Model\ExtendCreditLeaseRequestBody

try {
    $result = $schematic->CreditsApi->extendCreditLease($lease_id, $extend_credit_lease_request_body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Schematic->CreditsApi->extendCreditLease: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **lease_id** | **string**| lease_id | |
| **extend_credit_lease_request_body** | [**\Schematic\Model\ExtendCreditLeaseRequestBody**](../Model/ExtendCreditLeaseRequestBody.md)|  | |

### Return type

[**\Schematic\Model\ExtendCreditLeaseResponse**](../Model/ExtendCreditLeaseResponse.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getCreditBundle()`

```php
getCreditBundle($bundle_id): \Schematic\Model\GetCreditBundleResponse
```

Get credit bundle

### Example

```php
<?php
require_once 'vendor/autoload.php';

use Schematic\Schematic;

$schematic = new Schematic('YOUR_SECRET_API_KEY');

$bundle_id = 'bundle_id_example'; // string | bundle_id

try {
    $result = $schematic->CreditsApi->getCreditBundle($bundle_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Schematic->CreditsApi->getCreditBundle: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **bundle_id** | **string**| bundle_id | |

### Return type

[**\Schematic\Model\GetCreditBundleResponse**](../Model/GetCreditBundleResponse.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getSingleBillingCredit()`

```php
getSingleBillingCredit($credit_id): \Schematic\Model\GetSingleBillingCreditResponse
```

Get single billing credit

### Example

```php
<?php
require_once 'vendor/autoload.php';

use Schematic\Schematic;

$schematic = new Schematic('YOUR_SECRET_API_KEY');

$credit_id = 'credit_id_example'; // string | credit_id

try {
    $result = $schematic->CreditsApi->getSingleBillingCredit($credit_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Schematic->CreditsApi->getSingleBillingCredit: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **credit_id** | **string**| credit_id | |

### Return type

[**\Schematic\Model\GetSingleBillingCreditResponse**](../Model/GetSingleBillingCreditResponse.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getSingleBillingPlanCreditGrant()`

```php
getSingleBillingPlanCreditGrant($plan_grant_id): \Schematic\Model\GetSingleBillingPlanCreditGrantResponse
```

Get single billing plan credit grant

### Example

```php
<?php
require_once 'vendor/autoload.php';

use Schematic\Schematic;

$schematic = new Schematic('YOUR_SECRET_API_KEY');

$plan_grant_id = 'plan_grant_id_example'; // string | plan_grant_id

try {
    $result = $schematic->CreditsApi->getSingleBillingPlanCreditGrant($plan_grant_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Schematic->CreditsApi->getSingleBillingPlanCreditGrant: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **plan_grant_id** | **string**| plan_grant_id | |

### Return type

[**\Schematic\Model\GetSingleBillingPlanCreditGrantResponse**](../Model/GetSingleBillingPlanCreditGrantResponse.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `grantBillingCreditsToCompany()`

```php
grantBillingCreditsToCompany($create_company_credit_grant): \Schematic\Model\GrantBillingCreditsToCompanyResponse
```

Grant billing credits to company

### Example

```php
<?php
require_once 'vendor/autoload.php';

use Schematic\Schematic;

$schematic = new Schematic('YOUR_SECRET_API_KEY');

$create_company_credit_grant = new \Schematic\Model\CreateCompanyCreditGrant(); // \Schematic\Model\CreateCompanyCreditGrant

try {
    $result = $schematic->CreditsApi->grantBillingCreditsToCompany($create_company_credit_grant);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Schematic->CreditsApi->grantBillingCreditsToCompany: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **create_company_credit_grant** | [**\Schematic\Model\CreateCompanyCreditGrant**](../Model/CreateCompanyCreditGrant.md)|  | |

### Return type

[**\Schematic\Model\GrantBillingCreditsToCompanyResponse**](../Model/GrantBillingCreditsToCompanyResponse.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listBillingCredits()`

```php
listBillingCredits($ids, $name, $limit, $offset): \Schematic\Model\ListBillingCreditsResponse
```

List billing credits

### Example

```php
<?php
require_once 'vendor/autoload.php';

use Schematic\Schematic;

$schematic = new Schematic('YOUR_SECRET_API_KEY');

$ids = array('ids_example'); // string[]
$name = 'name_example'; // string
$limit = 100; // int | Page limit (default 100)
$offset = 0; // int | Page offset (default 0)

try {
    $result = $schematic->CreditsApi->listBillingCredits($ids, $name, $limit, $offset);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Schematic->CreditsApi->listBillingCredits: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **ids** | [**string[]**](../Model/string.md)|  | [optional] |
| **name** | **string**|  | [optional] |
| **limit** | **int**| Page limit (default 100) | [optional] |
| **offset** | **int**| Page offset (default 0) | [optional] |

### Return type

[**\Schematic\Model\ListBillingCreditsResponse**](../Model/ListBillingCreditsResponse.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listBillingPlanCreditGrants()`

```php
listBillingPlanCreditGrants($credit_id, $ids, $plan_id, $plan_ids, $plan_version_id, $plan_version_ids, $limit, $offset): \Schematic\Model\ListBillingPlanCreditGrantsResponse
```

List billing plan credit grants

### Example

```php
<?php
require_once 'vendor/autoload.php';

use Schematic\Schematic;

$schematic = new Schematic('YOUR_SECRET_API_KEY');

$credit_id = 'credit_id_example'; // string
$ids = array('ids_example'); // string[]
$plan_id = 'plan_id_example'; // string
$plan_ids = array('plan_ids_example'); // string[]
$plan_version_id = 'plan_version_id_example'; // string
$plan_version_ids = array('plan_version_ids_example'); // string[]
$limit = 100; // int | Page limit (default 100)
$offset = 0; // int | Page offset (default 0)

try {
    $result = $schematic->CreditsApi->listBillingPlanCreditGrants($credit_id, $ids, $plan_id, $plan_ids, $plan_version_id, $plan_version_ids, $limit, $offset);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Schematic->CreditsApi->listBillingPlanCreditGrants: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **credit_id** | **string**|  | [optional] |
| **ids** | [**string[]**](../Model/string.md)|  | [optional] |
| **plan_id** | **string**|  | [optional] |
| **plan_ids** | [**string[]**](../Model/string.md)|  | [optional] |
| **plan_version_id** | **string**|  | [optional] |
| **plan_version_ids** | [**string[]**](../Model/string.md)|  | [optional] |
| **limit** | **int**| Page limit (default 100) | [optional] |
| **offset** | **int**| Page offset (default 0) | [optional] |

### Return type

[**\Schematic\Model\ListBillingPlanCreditGrantsResponse**](../Model/ListBillingPlanCreditGrantsResponse.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listCompanyCreditBalances()`

```php
listCompanyCreditBalances($company_id): \Schematic\Model\ListCompanyCreditBalancesResponse
```

List company credit balances

### Example

```php
<?php
require_once 'vendor/autoload.php';

use Schematic\Schematic;

$schematic = new Schematic('YOUR_SECRET_API_KEY');

$company_id = 'company_id_example'; // string

try {
    $result = $schematic->CreditsApi->listCompanyCreditBalances($company_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Schematic->CreditsApi->listCompanyCreditBalances: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **company_id** | **string**|  | |

### Return type

[**\Schematic\Model\ListCompanyCreditBalancesResponse**](../Model/ListCompanyCreditBalancesResponse.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listCompanyGrants()`

```php
listCompanyGrants($company_id, $order, $dir, $limit, $offset): \Schematic\Model\ListCompanyGrantsResponse
```

List company grants

### Example

```php
<?php
require_once 'vendor/autoload.php';

use Schematic\Schematic;

$schematic = new Schematic('YOUR_SECRET_API_KEY');

$company_id = 'company_id_example'; // string
$order = new \Schematic\Model\CreditGrantSortOrder(); // CreditGrantSortOrder
$dir = new \Schematic\Model\SortDirection(); // SortDirection
$limit = 100; // int | Page limit (default 100)
$offset = 0; // int | Page offset (default 0)

try {
    $result = $schematic->CreditsApi->listCompanyGrants($company_id, $order, $dir, $limit, $offset);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Schematic->CreditsApi->listCompanyGrants: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **company_id** | **string**|  | [optional] |
| **order** | [**CreditGrantSortOrder**](../Model/.md)|  | [optional] |
| **dir** | [**SortDirection**](../Model/.md)|  | [optional] |
| **limit** | **int**| Page limit (default 100) | [optional] |
| **offset** | **int**| Page offset (default 0) | [optional] |

### Return type

[**\Schematic\Model\ListCompanyGrantsResponse**](../Model/ListCompanyGrantsResponse.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listCreditBundles()`

```php
listCreditBundles($ids, $credit_id, $status, $bundle_type, $limit, $offset): \Schematic\Model\ListCreditBundlesResponse
```

List credit bundles

### Example

```php
<?php
require_once 'vendor/autoload.php';

use Schematic\Schematic;

$schematic = new Schematic('YOUR_SECRET_API_KEY');

$ids = array('ids_example'); // string[]
$credit_id = 'credit_id_example'; // string
$status = new \Schematic\Model\BillingCreditBundleStatus(); // BillingCreditBundleStatus
$bundle_type = new \Schematic\Model\BillingCreditBundleType(); // BillingCreditBundleType
$limit = 100; // int | Page limit (default 100)
$offset = 0; // int | Page offset (default 0)

try {
    $result = $schematic->CreditsApi->listCreditBundles($ids, $credit_id, $status, $bundle_type, $limit, $offset);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Schematic->CreditsApi->listCreditBundles: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **ids** | [**string[]**](../Model/string.md)|  | [optional] |
| **credit_id** | **string**|  | [optional] |
| **status** | [**BillingCreditBundleStatus**](../Model/.md)|  | [optional] |
| **bundle_type** | [**BillingCreditBundleType**](../Model/.md)|  | [optional] |
| **limit** | **int**| Page limit (default 100) | [optional] |
| **offset** | **int**| Page offset (default 0) | [optional] |

### Return type

[**\Schematic\Model\ListCreditBundlesResponse**](../Model/ListCreditBundlesResponse.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listCreditEventLedger()`

```php
listCreditEventLedger($company_id, $billing_credit_id, $end_time, $event_type, $feature_id, $start_time, $limit, $offset): \Schematic\Model\ListCreditEventLedgerResponse
```

List credit event ledger

### Example

```php
<?php
require_once 'vendor/autoload.php';

use Schematic\Schematic;

$schematic = new Schematic('YOUR_SECRET_API_KEY');

$company_id = 'company_id_example'; // string
$billing_credit_id = 'billing_credit_id_example'; // string
$end_time = 'end_time_example'; // string
$event_type = new \Schematic\Model\CreditEventType(); // CreditEventType
$feature_id = 'feature_id_example'; // string
$start_time = 'start_time_example'; // string
$limit = 100; // int | Page limit (default 100)
$offset = 0; // int | Page offset (default 0)

try {
    $result = $schematic->CreditsApi->listCreditEventLedger($company_id, $billing_credit_id, $end_time, $event_type, $feature_id, $start_time, $limit, $offset);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Schematic->CreditsApi->listCreditEventLedger: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **company_id** | **string**|  | |
| **billing_credit_id** | **string**|  | [optional] |
| **end_time** | **string**|  | [optional] |
| **event_type** | [**CreditEventType**](../Model/.md)|  | [optional] |
| **feature_id** | **string**|  | [optional] |
| **start_time** | **string**|  | [optional] |
| **limit** | **int**| Page limit (default 100) | [optional] |
| **offset** | **int**| Page offset (default 0) | [optional] |

### Return type

[**\Schematic\Model\ListCreditEventLedgerResponse**](../Model/ListCreditEventLedgerResponse.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listGrantsForCredit()`

```php
listGrantsForCredit($credit_id, $ids, $limit, $offset): \Schematic\Model\ListGrantsForCreditResponse
```

List grants for credit

### Example

```php
<?php
require_once 'vendor/autoload.php';

use Schematic\Schematic;

$schematic = new Schematic('YOUR_SECRET_API_KEY');

$credit_id = 'credit_id_example'; // string
$ids = array('ids_example'); // string[]
$limit = 100; // int | Page limit (default 100)
$offset = 0; // int | Page offset (default 0)

try {
    $result = $schematic->CreditsApi->listGrantsForCredit($credit_id, $ids, $limit, $offset);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Schematic->CreditsApi->listGrantsForCredit: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **credit_id** | **string**|  | [optional] |
| **ids** | [**string[]**](../Model/string.md)|  | [optional] |
| **limit** | **int**| Page limit (default 100) | [optional] |
| **offset** | **int**| Page offset (default 0) | [optional] |

### Return type

[**\Schematic\Model\ListGrantsForCreditResponse**](../Model/ListGrantsForCreditResponse.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `releaseCreditLease()`

```php
releaseCreditLease($lease_id, $body): \Schematic\Model\ReleaseCreditLeaseResponse
```

Release credit lease

### Example

```php
<?php
require_once 'vendor/autoload.php';

use Schematic\Schematic;

$schematic = new Schematic('YOUR_SECRET_API_KEY');

$lease_id = 'lease_id_example'; // string | lease_id
$body = array('key' => new \stdClass); // object

try {
    $result = $schematic->CreditsApi->releaseCreditLease($lease_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Schematic->CreditsApi->releaseCreditLease: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **lease_id** | **string**| lease_id | |
| **body** | **object**|  | |

### Return type

[**\Schematic\Model\ReleaseCreditLeaseResponse**](../Model/ReleaseCreditLeaseResponse.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `softDeleteBillingCredit()`

```php
softDeleteBillingCredit($credit_id): \Schematic\Model\SoftDeleteBillingCreditResponse
```

Soft delete billing credit

### Example

```php
<?php
require_once 'vendor/autoload.php';

use Schematic\Schematic;

$schematic = new Schematic('YOUR_SECRET_API_KEY');

$credit_id = 'credit_id_example'; // string | credit_id

try {
    $result = $schematic->CreditsApi->softDeleteBillingCredit($credit_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Schematic->CreditsApi->softDeleteBillingCredit: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **credit_id** | **string**| credit_id | |

### Return type

[**\Schematic\Model\SoftDeleteBillingCreditResponse**](../Model/SoftDeleteBillingCreditResponse.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateBillingCredit()`

```php
updateBillingCredit($credit_id, $update_billing_credit_request_body): \Schematic\Model\UpdateBillingCreditResponse
```

Update billing credit

### Example

```php
<?php
require_once 'vendor/autoload.php';

use Schematic\Schematic;

$schematic = new Schematic('YOUR_SECRET_API_KEY');

$credit_id = 'credit_id_example'; // string | credit_id
$update_billing_credit_request_body = new \Schematic\Model\UpdateBillingCreditRequestBody(); // \Schematic\Model\UpdateBillingCreditRequestBody

try {
    $result = $schematic->CreditsApi->updateBillingCredit($credit_id, $update_billing_credit_request_body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Schematic->CreditsApi->updateBillingCredit: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **credit_id** | **string**| credit_id | |
| **update_billing_credit_request_body** | [**\Schematic\Model\UpdateBillingCreditRequestBody**](../Model/UpdateBillingCreditRequestBody.md)|  | |

### Return type

[**\Schematic\Model\UpdateBillingCreditResponse**](../Model/UpdateBillingCreditResponse.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateBillingPlanCreditGrant()`

```php
updateBillingPlanCreditGrant($plan_grant_id, $update_billing_plan_credit_grant_request_body): \Schematic\Model\UpdateBillingPlanCreditGrantResponse
```

Update billing plan credit grant

### Example

```php
<?php
require_once 'vendor/autoload.php';

use Schematic\Schematic;

$schematic = new Schematic('YOUR_SECRET_API_KEY');

$plan_grant_id = 'plan_grant_id_example'; // string | plan_grant_id
$update_billing_plan_credit_grant_request_body = new \Schematic\Model\UpdateBillingPlanCreditGrantRequestBody(); // \Schematic\Model\UpdateBillingPlanCreditGrantRequestBody

try {
    $result = $schematic->CreditsApi->updateBillingPlanCreditGrant($plan_grant_id, $update_billing_plan_credit_grant_request_body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Schematic->CreditsApi->updateBillingPlanCreditGrant: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **plan_grant_id** | **string**| plan_grant_id | |
| **update_billing_plan_credit_grant_request_body** | [**\Schematic\Model\UpdateBillingPlanCreditGrantRequestBody**](../Model/UpdateBillingPlanCreditGrantRequestBody.md)|  | |

### Return type

[**\Schematic\Model\UpdateBillingPlanCreditGrantResponse**](../Model/UpdateBillingPlanCreditGrantResponse.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateCreditBundleDetails()`

```php
updateCreditBundleDetails($bundle_id, $update_credit_bundle_details_request_body): \Schematic\Model\UpdateCreditBundleDetailsResponse
```

Update credit bundle details

### Example

```php
<?php
require_once 'vendor/autoload.php';

use Schematic\Schematic;

$schematic = new Schematic('YOUR_SECRET_API_KEY');

$bundle_id = 'bundle_id_example'; // string | bundle_id
$update_credit_bundle_details_request_body = new \Schematic\Model\UpdateCreditBundleDetailsRequestBody(); // \Schematic\Model\UpdateCreditBundleDetailsRequestBody

try {
    $result = $schematic->CreditsApi->updateCreditBundleDetails($bundle_id, $update_credit_bundle_details_request_body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Schematic->CreditsApi->updateCreditBundleDetails: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **bundle_id** | **string**| bundle_id | |
| **update_credit_bundle_details_request_body** | [**\Schematic\Model\UpdateCreditBundleDetailsRequestBody**](../Model/UpdateCreditBundleDetailsRequestBody.md)|  | |

### Return type

[**\Schematic\Model\UpdateCreditBundleDetailsResponse**](../Model/UpdateCreditBundleDetailsResponse.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `zeroOutGrant()`

```php
zeroOutGrant($grant_id, $zero_out_grant_request_body): \Schematic\Model\ZeroOutGrantResponse
```

Zero out grant

### Example

```php
<?php
require_once 'vendor/autoload.php';

use Schematic\Schematic;

$schematic = new Schematic('YOUR_SECRET_API_KEY');

$grant_id = 'grant_id_example'; // string | grant_id
$zero_out_grant_request_body = new \Schematic\Model\ZeroOutGrantRequestBody(); // \Schematic\Model\ZeroOutGrantRequestBody

try {
    $result = $schematic->CreditsApi->zeroOutGrant($grant_id, $zero_out_grant_request_body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Schematic->CreditsApi->zeroOutGrant: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **grant_id** | **string**| grant_id | |
| **zero_out_grant_request_body** | [**\Schematic\Model\ZeroOutGrantRequestBody**](../Model/ZeroOutGrantRequestBody.md)|  | |

### Return type

[**\Schematic\Model\ZeroOutGrantResponse**](../Model/ZeroOutGrantResponse.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
