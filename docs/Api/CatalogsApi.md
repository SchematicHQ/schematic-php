# Schematic\CatalogsApi

All URIs are relative to https://api.schematichq.com, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**addCreditBundle()**](CatalogsApi.md#addCreditBundle) | **POST** /catalogs/{catalog_id}/credit-bundles/{credit_bundle_id} | Add credit bundle |
| [**addPlan()**](CatalogsApi.md#addPlan) | **POST** /catalogs/{catalog_id}/plans/{plan_id} | Add plan |
| [**createCatalog()**](CatalogsApi.md#createCatalog) | **POST** /catalogs | Create catalog |
| [**deleteCatalog()**](CatalogsApi.md#deleteCatalog) | **DELETE** /catalogs/{catalog_id} | Delete catalog |
| [**getCatalog()**](CatalogsApi.md#getCatalog) | **GET** /catalogs/{catalog_id} | Get catalog |
| [**getConfiguration()**](CatalogsApi.md#getConfiguration) | **GET** /catalogs/{catalog_id}/configuration | Get configuration |
| [**getCreditBundlesInCatalog()**](CatalogsApi.md#getCreditBundlesInCatalog) | **GET** /catalogs/{catalog_id}/credit-bundles | Get credit bundles in catalog |
| [**getDerivedFeatures()**](CatalogsApi.md#getDerivedFeatures) | **GET** /catalogs/{catalog_id}/features | Get derived features |
| [**getPlansInCatalog()**](CatalogsApi.md#getPlansInCatalog) | **GET** /catalogs/{catalog_id}/plans | Get plans in catalog |
| [**listCatalogs()**](CatalogsApi.md#listCatalogs) | **GET** /catalogs | List catalogs |
| [**removeCreditBundle()**](CatalogsApi.md#removeCreditBundle) | **DELETE** /catalogs/{catalog_id}/credit-bundles/{credit_bundle_id} | Remove credit bundle |
| [**removePlan()**](CatalogsApi.md#removePlan) | **DELETE** /catalogs/{catalog_id}/plans/{plan_id} | Remove plan |
| [**updateCatalog()**](CatalogsApi.md#updateCatalog) | **PUT** /catalogs/{catalog_id} | Update catalog |
| [**updateConfiguration()**](CatalogsApi.md#updateConfiguration) | **PUT** /catalogs/{catalog_id}/configuration | Update configuration |


## `addCreditBundle()`

```php
addCreditBundle($catalog_id, $credit_bundle_id)
```

Add credit bundle

### Example

```php
<?php
require_once 'vendor/autoload.php';

use Schematic\Schematic;

$schematic = new Schematic('YOUR_SECRET_API_KEY');

$catalog_id = 'catalog_id_example'; // string | catalog_id
$credit_bundle_id = 'credit_bundle_id_example'; // string | credit_bundle_id

try {
    $schematic->CatalogsApi->addCreditBundle($catalog_id, $credit_bundle_id);
} catch (Exception $e) {
    echo 'Exception when calling Schematic->CatalogsApi->addCreditBundle: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **catalog_id** | **string**| catalog_id | |
| **credit_bundle_id** | **string**| credit_bundle_id | |

### Return type

void (empty response body)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `addPlan()`

```php
addPlan($catalog_id, $plan_id)
```

Add plan

### Example

```php
<?php
require_once 'vendor/autoload.php';

use Schematic\Schematic;

$schematic = new Schematic('YOUR_SECRET_API_KEY');

$catalog_id = 'catalog_id_example'; // string | catalog_id
$plan_id = 'plan_id_example'; // string | plan_id

try {
    $schematic->CatalogsApi->addPlan($catalog_id, $plan_id);
} catch (Exception $e) {
    echo 'Exception when calling Schematic->CatalogsApi->addPlan: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **catalog_id** | **string**| catalog_id | |
| **plan_id** | **string**| plan_id | |

### Return type

void (empty response body)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createCatalog()`

```php
createCatalog($create_catalog_request_body): \Schematic\Model\CreateCatalogResponse
```

Create catalog

### Example

```php
<?php
require_once 'vendor/autoload.php';

use Schematic\Schematic;

$schematic = new Schematic('YOUR_SECRET_API_KEY');

$create_catalog_request_body = new \Schematic\Model\CreateCatalogRequestBody(); // \Schematic\Model\CreateCatalogRequestBody

try {
    $result = $schematic->CatalogsApi->createCatalog($create_catalog_request_body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Schematic->CatalogsApi->createCatalog: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **create_catalog_request_body** | [**\Schematic\Model\CreateCatalogRequestBody**](../Model/CreateCatalogRequestBody.md)|  | |

### Return type

[**\Schematic\Model\CreateCatalogResponse**](../Model/CreateCatalogResponse.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteCatalog()`

```php
deleteCatalog($catalog_id): \Schematic\Model\DeleteCatalogResponse
```

Delete catalog

### Example

```php
<?php
require_once 'vendor/autoload.php';

use Schematic\Schematic;

$schematic = new Schematic('YOUR_SECRET_API_KEY');

$catalog_id = 'catalog_id_example'; // string | catalog_id

try {
    $result = $schematic->CatalogsApi->deleteCatalog($catalog_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Schematic->CatalogsApi->deleteCatalog: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **catalog_id** | **string**| catalog_id | |

### Return type

[**\Schematic\Model\DeleteCatalogResponse**](../Model/DeleteCatalogResponse.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getCatalog()`

```php
getCatalog($catalog_id): \Schematic\Model\GetCatalogResponse
```

Get catalog

### Example

```php
<?php
require_once 'vendor/autoload.php';

use Schematic\Schematic;

$schematic = new Schematic('YOUR_SECRET_API_KEY');

$catalog_id = 'catalog_id_example'; // string | catalog_id

try {
    $result = $schematic->CatalogsApi->getCatalog($catalog_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Schematic->CatalogsApi->getCatalog: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **catalog_id** | **string**| catalog_id | |

### Return type

[**\Schematic\Model\GetCatalogResponse**](../Model/GetCatalogResponse.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getConfiguration()`

```php
getConfiguration($catalog_id): \Schematic\Model\GetConfigurationResponse
```

Get configuration

### Example

```php
<?php
require_once 'vendor/autoload.php';

use Schematic\Schematic;

$schematic = new Schematic('YOUR_SECRET_API_KEY');

$catalog_id = 'catalog_id_example'; // string | catalog_id

try {
    $result = $schematic->CatalogsApi->getConfiguration($catalog_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Schematic->CatalogsApi->getConfiguration: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **catalog_id** | **string**| catalog_id | |

### Return type

[**\Schematic\Model\GetConfigurationResponse**](../Model/GetConfigurationResponse.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getCreditBundlesInCatalog()`

```php
getCreditBundlesInCatalog($catalog_id): \Schematic\Model\GetCreditBundlesInCatalogResponse
```

Get credit bundles in catalog

### Example

```php
<?php
require_once 'vendor/autoload.php';

use Schematic\Schematic;

$schematic = new Schematic('YOUR_SECRET_API_KEY');

$catalog_id = 'catalog_id_example'; // string | catalog_id

try {
    $result = $schematic->CatalogsApi->getCreditBundlesInCatalog($catalog_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Schematic->CatalogsApi->getCreditBundlesInCatalog: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **catalog_id** | **string**| catalog_id | |

### Return type

[**\Schematic\Model\GetCreditBundlesInCatalogResponse**](../Model/GetCreditBundlesInCatalogResponse.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getDerivedFeatures()`

```php
getDerivedFeatures($catalog_id): \Schematic\Model\GetDerivedFeaturesResponse
```

Get derived features

### Example

```php
<?php
require_once 'vendor/autoload.php';

use Schematic\Schematic;

$schematic = new Schematic('YOUR_SECRET_API_KEY');

$catalog_id = 'catalog_id_example'; // string | catalog_id

try {
    $result = $schematic->CatalogsApi->getDerivedFeatures($catalog_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Schematic->CatalogsApi->getDerivedFeatures: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **catalog_id** | **string**| catalog_id | |

### Return type

[**\Schematic\Model\GetDerivedFeaturesResponse**](../Model/GetDerivedFeaturesResponse.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getPlansInCatalog()`

```php
getPlansInCatalog($catalog_id): \Schematic\Model\GetPlansInCatalogResponse
```

Get plans in catalog

### Example

```php
<?php
require_once 'vendor/autoload.php';

use Schematic\Schematic;

$schematic = new Schematic('YOUR_SECRET_API_KEY');

$catalog_id = 'catalog_id_example'; // string | catalog_id

try {
    $result = $schematic->CatalogsApi->getPlansInCatalog($catalog_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Schematic->CatalogsApi->getPlansInCatalog: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **catalog_id** | **string**| catalog_id | |

### Return type

[**\Schematic\Model\GetPlansInCatalogResponse**](../Model/GetPlansInCatalogResponse.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listCatalogs()`

```php
listCatalogs($is_default, $q, $limit, $offset): \Schematic\Model\ListCatalogsResponse
```

List catalogs

### Example

```php
<?php
require_once 'vendor/autoload.php';

use Schematic\Schematic;

$schematic = new Schematic('YOUR_SECRET_API_KEY');

$is_default = True; // bool
$q = 'q_example'; // string | Search by catalog name
$limit = 100; // int | Page limit (default 100)
$offset = 0; // int | Page offset (default 0)

try {
    $result = $schematic->CatalogsApi->listCatalogs($is_default, $q, $limit, $offset);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Schematic->CatalogsApi->listCatalogs: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **is_default** | **bool**|  | [optional] |
| **q** | **string**| Search by catalog name | [optional] |
| **limit** | **int**| Page limit (default 100) | [optional] |
| **offset** | **int**| Page offset (default 0) | [optional] |

### Return type

[**\Schematic\Model\ListCatalogsResponse**](../Model/ListCatalogsResponse.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `removeCreditBundle()`

```php
removeCreditBundle($catalog_id, $credit_bundle_id)
```

Remove credit bundle

### Example

```php
<?php
require_once 'vendor/autoload.php';

use Schematic\Schematic;

$schematic = new Schematic('YOUR_SECRET_API_KEY');

$catalog_id = 'catalog_id_example'; // string | catalog_id
$credit_bundle_id = 'credit_bundle_id_example'; // string | credit_bundle_id

try {
    $schematic->CatalogsApi->removeCreditBundle($catalog_id, $credit_bundle_id);
} catch (Exception $e) {
    echo 'Exception when calling Schematic->CatalogsApi->removeCreditBundle: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **catalog_id** | **string**| catalog_id | |
| **credit_bundle_id** | **string**| credit_bundle_id | |

### Return type

void (empty response body)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `removePlan()`

```php
removePlan($catalog_id, $plan_id)
```

Remove plan

### Example

```php
<?php
require_once 'vendor/autoload.php';

use Schematic\Schematic;

$schematic = new Schematic('YOUR_SECRET_API_KEY');

$catalog_id = 'catalog_id_example'; // string | catalog_id
$plan_id = 'plan_id_example'; // string | plan_id

try {
    $schematic->CatalogsApi->removePlan($catalog_id, $plan_id);
} catch (Exception $e) {
    echo 'Exception when calling Schematic->CatalogsApi->removePlan: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **catalog_id** | **string**| catalog_id | |
| **plan_id** | **string**| plan_id | |

### Return type

void (empty response body)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateCatalog()`

```php
updateCatalog($catalog_id, $update_catalog_request_body): \Schematic\Model\UpdateCatalogResponse
```

Update catalog

### Example

```php
<?php
require_once 'vendor/autoload.php';

use Schematic\Schematic;

$schematic = new Schematic('YOUR_SECRET_API_KEY');

$catalog_id = 'catalog_id_example'; // string | catalog_id
$update_catalog_request_body = new \Schematic\Model\UpdateCatalogRequestBody(); // \Schematic\Model\UpdateCatalogRequestBody

try {
    $result = $schematic->CatalogsApi->updateCatalog($catalog_id, $update_catalog_request_body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Schematic->CatalogsApi->updateCatalog: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **catalog_id** | **string**| catalog_id | |
| **update_catalog_request_body** | [**\Schematic\Model\UpdateCatalogRequestBody**](../Model/UpdateCatalogRequestBody.md)|  | |

### Return type

[**\Schematic\Model\UpdateCatalogResponse**](../Model/UpdateCatalogResponse.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateConfiguration()`

```php
updateConfiguration($catalog_id, $update_catalog_configuration_request_body): \Schematic\Model\UpdateConfigurationResponse
```

Update configuration

### Example

```php
<?php
require_once 'vendor/autoload.php';

use Schematic\Schematic;

$schematic = new Schematic('YOUR_SECRET_API_KEY');

$catalog_id = 'catalog_id_example'; // string | catalog_id
$update_catalog_configuration_request_body = new \Schematic\Model\UpdateCatalogConfigurationRequestBody(); // \Schematic\Model\UpdateCatalogConfigurationRequestBody

try {
    $result = $schematic->CatalogsApi->updateConfiguration($catalog_id, $update_catalog_configuration_request_body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Schematic->CatalogsApi->updateConfiguration: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **catalog_id** | **string**| catalog_id | |
| **update_catalog_configuration_request_body** | [**\Schematic\Model\UpdateCatalogConfigurationRequestBody**](../Model/UpdateCatalogConfigurationRequestBody.md)|  | |

### Return type

[**\Schematic\Model\UpdateConfigurationResponse**](../Model/UpdateConfigurationResponse.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
