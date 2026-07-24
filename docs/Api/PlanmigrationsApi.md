# Schematic\PlanmigrationsApi

All URIs are relative to https://api.schematichq.com, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**countCompanyMigrations()**](PlanmigrationsApi.md#countCompanyMigrations) | **GET** /plan-version-company-migrations/count | Count company migrations |
| [**countMigrations()**](PlanmigrationsApi.md#countMigrations) | **GET** /plan-version-migrations/count | Count migrations |
| [**createMigration()**](PlanmigrationsApi.md#createMigration) | **POST** /plan-version-migrations | Create migration |
| [**getMigration()**](PlanmigrationsApi.md#getMigration) | **GET** /plan-version-migrations/{plan_version_migration_id} | Get migration |
| [**listCompanyMigrations()**](PlanmigrationsApi.md#listCompanyMigrations) | **GET** /plan-version-company-migrations | List company migrations |
| [**listMigrations()**](PlanmigrationsApi.md#listMigrations) | **GET** /plan-version-migrations | List migrations |
| [**previewMigration()**](PlanmigrationsApi.md#previewMigration) | **POST** /plan-version-migrations/preview | Preview migration |
| [**retryCompanyMigration()**](PlanmigrationsApi.md#retryCompanyMigration) | **POST** /plan-version-company-migrations/{plan_version_company_migration_id}/retry | Retry company migration |
| [**retryMigration()**](PlanmigrationsApi.md#retryMigration) | **POST** /plan-version-migrations/{plan_version_migration_id}/retry | Retry migration |


## `countCompanyMigrations()`

```php
countCompanyMigrations($migration_id, $q, $status, $limit, $offset): \Schematic\Model\CountCompanyMigrationsResponse
```

Count company migrations

### Example

```php
<?php
require_once 'vendor/autoload.php';

use Schematic\Schematic;

$schematic = new Schematic('YOUR_SECRET_API_KEY');

$migration_id = 'migration_id_example'; // string
$q = 'q_example'; // string
$status = new \Schematic\Model\PlanVersionCompanyMigrationStatus(); // PlanVersionCompanyMigrationStatus
$limit = 100; // int | Page limit (default 100)
$offset = 0; // int | Page offset (default 0)

try {
    $result = $schematic->PlanmigrationsApi->countCompanyMigrations($migration_id, $q, $status, $limit, $offset);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Schematic->PlanmigrationsApi->countCompanyMigrations: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **migration_id** | **string**|  | [optional] |
| **q** | **string**|  | [optional] |
| **status** | [**PlanVersionCompanyMigrationStatus**](../Model/.md)|  | [optional] |
| **limit** | **int**| Page limit (default 100) | [optional] |
| **offset** | **int**| Page offset (default 0) | [optional] |

### Return type

[**\Schematic\Model\CountCompanyMigrationsResponse**](../Model/CountCompanyMigrationsResponse.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `countMigrations()`

```php
countMigrations($plan_version_id, $status, $limit, $offset): \Schematic\Model\CountMigrationsResponse
```

Count migrations

### Example

```php
<?php
require_once 'vendor/autoload.php';

use Schematic\Schematic;

$schematic = new Schematic('YOUR_SECRET_API_KEY');

$plan_version_id = 'plan_version_id_example'; // string
$status = new \Schematic\Model\PlanVersionMigrationStatus(); // PlanVersionMigrationStatus
$limit = 100; // int | Page limit (default 100)
$offset = 0; // int | Page offset (default 0)

try {
    $result = $schematic->PlanmigrationsApi->countMigrations($plan_version_id, $status, $limit, $offset);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Schematic->PlanmigrationsApi->countMigrations: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **plan_version_id** | **string**|  | [optional] |
| **status** | [**PlanVersionMigrationStatus**](../Model/.md)|  | [optional] |
| **limit** | **int**| Page limit (default 100) | [optional] |
| **offset** | **int**| Page offset (default 0) | [optional] |

### Return type

[**\Schematic\Model\CountMigrationsResponse**](../Model/CountMigrationsResponse.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createMigration()`

```php
createMigration($create_migration_input): \Schematic\Model\CreateMigrationResponse
```

Create migration

### Example

```php
<?php
require_once 'vendor/autoload.php';

use Schematic\Schematic;

$schematic = new Schematic('YOUR_SECRET_API_KEY');

$create_migration_input = new \Schematic\Model\CreateMigrationInput(); // \Schematic\Model\CreateMigrationInput

try {
    $result = $schematic->PlanmigrationsApi->createMigration($create_migration_input);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Schematic->PlanmigrationsApi->createMigration: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **create_migration_input** | [**\Schematic\Model\CreateMigrationInput**](../Model/CreateMigrationInput.md)|  | |

### Return type

[**\Schematic\Model\CreateMigrationResponse**](../Model/CreateMigrationResponse.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getMigration()`

```php
getMigration($plan_version_migration_id): \Schematic\Model\GetMigrationResponse
```

Get migration

### Example

```php
<?php
require_once 'vendor/autoload.php';

use Schematic\Schematic;

$schematic = new Schematic('YOUR_SECRET_API_KEY');

$plan_version_migration_id = 'plan_version_migration_id_example'; // string | plan_version_migration_id

try {
    $result = $schematic->PlanmigrationsApi->getMigration($plan_version_migration_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Schematic->PlanmigrationsApi->getMigration: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **plan_version_migration_id** | **string**| plan_version_migration_id | |

### Return type

[**\Schematic\Model\GetMigrationResponse**](../Model/GetMigrationResponse.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listCompanyMigrations()`

```php
listCompanyMigrations($migration_id, $q, $status, $limit, $offset): \Schematic\Model\ListCompanyMigrationsResponse
```

List company migrations

### Example

```php
<?php
require_once 'vendor/autoload.php';

use Schematic\Schematic;

$schematic = new Schematic('YOUR_SECRET_API_KEY');

$migration_id = 'migration_id_example'; // string
$q = 'q_example'; // string
$status = new \Schematic\Model\PlanVersionCompanyMigrationStatus(); // PlanVersionCompanyMigrationStatus
$limit = 100; // int | Page limit (default 100)
$offset = 0; // int | Page offset (default 0)

try {
    $result = $schematic->PlanmigrationsApi->listCompanyMigrations($migration_id, $q, $status, $limit, $offset);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Schematic->PlanmigrationsApi->listCompanyMigrations: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **migration_id** | **string**|  | [optional] |
| **q** | **string**|  | [optional] |
| **status** | [**PlanVersionCompanyMigrationStatus**](../Model/.md)|  | [optional] |
| **limit** | **int**| Page limit (default 100) | [optional] |
| **offset** | **int**| Page offset (default 0) | [optional] |

### Return type

[**\Schematic\Model\ListCompanyMigrationsResponse**](../Model/ListCompanyMigrationsResponse.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listMigrations()`

```php
listMigrations($plan_version_id, $status, $limit, $offset): \Schematic\Model\ListMigrationsResponse
```

List migrations

### Example

```php
<?php
require_once 'vendor/autoload.php';

use Schematic\Schematic;

$schematic = new Schematic('YOUR_SECRET_API_KEY');

$plan_version_id = 'plan_version_id_example'; // string
$status = new \Schematic\Model\PlanVersionMigrationStatus(); // PlanVersionMigrationStatus
$limit = 100; // int | Page limit (default 100)
$offset = 0; // int | Page offset (default 0)

try {
    $result = $schematic->PlanmigrationsApi->listMigrations($plan_version_id, $status, $limit, $offset);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Schematic->PlanmigrationsApi->listMigrations: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **plan_version_id** | **string**|  | [optional] |
| **status** | [**PlanVersionMigrationStatus**](../Model/.md)|  | [optional] |
| **limit** | **int**| Page limit (default 100) | [optional] |
| **offset** | **int**| Page offset (default 0) | [optional] |

### Return type

[**\Schematic\Model\ListMigrationsResponse**](../Model/ListMigrationsResponse.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `previewMigration()`

```php
previewMigration($preview_migration_request_body): \Schematic\Model\PreviewMigrationResponse
```

Preview migration

### Example

```php
<?php
require_once 'vendor/autoload.php';

use Schematic\Schematic;

$schematic = new Schematic('YOUR_SECRET_API_KEY');

$preview_migration_request_body = new \Schematic\Model\PreviewMigrationRequestBody(); // \Schematic\Model\PreviewMigrationRequestBody

try {
    $result = $schematic->PlanmigrationsApi->previewMigration($preview_migration_request_body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Schematic->PlanmigrationsApi->previewMigration: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **preview_migration_request_body** | [**\Schematic\Model\PreviewMigrationRequestBody**](../Model/PreviewMigrationRequestBody.md)|  | |

### Return type

[**\Schematic\Model\PreviewMigrationResponse**](../Model/PreviewMigrationResponse.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `retryCompanyMigration()`

```php
retryCompanyMigration($plan_version_company_migration_id): \Schematic\Model\RetryCompanyMigrationResponse
```

Retry company migration

### Example

```php
<?php
require_once 'vendor/autoload.php';

use Schematic\Schematic;

$schematic = new Schematic('YOUR_SECRET_API_KEY');

$plan_version_company_migration_id = 'plan_version_company_migration_id_example'; // string | plan_version_company_migration_id

try {
    $result = $schematic->PlanmigrationsApi->retryCompanyMigration($plan_version_company_migration_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Schematic->PlanmigrationsApi->retryCompanyMigration: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **plan_version_company_migration_id** | **string**| plan_version_company_migration_id | |

### Return type

[**\Schematic\Model\RetryCompanyMigrationResponse**](../Model/RetryCompanyMigrationResponse.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `retryMigration()`

```php
retryMigration($plan_version_migration_id, $retry_migration_request_body): \Schematic\Model\RetryMigrationResponse
```

Retry migration

### Example

```php
<?php
require_once 'vendor/autoload.php';

use Schematic\Schematic;

$schematic = new Schematic('YOUR_SECRET_API_KEY');

$plan_version_migration_id = 'plan_version_migration_id_example'; // string | plan_version_migration_id
$retry_migration_request_body = new \Schematic\Model\RetryMigrationRequestBody(); // \Schematic\Model\RetryMigrationRequestBody

try {
    $result = $schematic->PlanmigrationsApi->retryMigration($plan_version_migration_id, $retry_migration_request_body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Schematic->PlanmigrationsApi->retryMigration: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **plan_version_migration_id** | **string**| plan_version_migration_id | |
| **retry_migration_request_body** | [**\Schematic\Model\RetryMigrationRequestBody**](../Model/RetryMigrationRequestBody.md)|  | |

### Return type

[**\Schematic\Model\RetryMigrationResponse**](../Model/RetryMigrationResponse.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
