# Schematic\IntegrationsapiApi

All URIs are relative to https://api.schematichq.com, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**assumeStripeInstalled()**](IntegrationsapiApi.md#assumeStripeInstalled) | **POST** /integrations/stripe/v2/assume-installed | Assume stripe installed |
| [**getIntegrationWebhookUrl()**](IntegrationsapiApi.md#getIntegrationWebhookUrl) | **GET** /integrations/{type}/webhook-url | Get integration webhook url |
| [**installIntegration()**](IntegrationsapiApi.md#installIntegration) | **POST** /integrations/install | Install integration |
| [**installStripe()**](IntegrationsapiApi.md#installStripe) | **POST** /integrations/stripe/v2/install | Install stripe |
| [**listIntegrations()**](IntegrationsapiApi.md#listIntegrations) | **GET** /integrations | List integrations |
| [**loadSampleDataSet()**](IntegrationsapiApi.md#loadSampleDataSet) | **GET** /integrations/stripe/dataset-sample-v2 | Load sample data set |
| [**runIntegration()**](IntegrationsapiApi.md#runIntegration) | **GET** /integration/start/{integration_id} | Run integration |
| [**startDataImport()**](IntegrationsapiApi.md#startDataImport) | **POST** /integrations/start-data-import | Start data import |
| [**uninstallIntegration()**](IntegrationsapiApi.md#uninstallIntegration) | **DELETE** /integrations/uninstall/{integration_id} | Uninstall integration |


## `assumeStripeInstalled()`

```php
assumeStripeInstalled($install_integration_request_body): \Schematic\Model\AssumeStripeInstalledResponse
```

Assume stripe installed

### Example

```php
<?php
require_once 'vendor/autoload.php';

use Schematic\Schematic;

$schematic = new Schematic('YOUR_SECRET_API_KEY');

$install_integration_request_body = new \Schematic\Model\InstallIntegrationRequestBody(); // \Schematic\Model\InstallIntegrationRequestBody

try {
    $result = $schematic->IntegrationsapiApi->assumeStripeInstalled($install_integration_request_body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Schematic->IntegrationsapiApi->assumeStripeInstalled: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **install_integration_request_body** | [**\Schematic\Model\InstallIntegrationRequestBody**](../Model/InstallIntegrationRequestBody.md)|  | |

### Return type

[**\Schematic\Model\AssumeStripeInstalledResponse**](../Model/AssumeStripeInstalledResponse.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getIntegrationWebhookUrl()`

```php
getIntegrationWebhookUrl($type): \Schematic\Model\GetIntegrationWebhookUrlResponse
```

Get integration webhook url

### Example

```php
<?php
require_once 'vendor/autoload.php';

use Schematic\Schematic;

$schematic = new Schematic('YOUR_SECRET_API_KEY');

$type = 'type_example'; // string | type

try {
    $result = $schematic->IntegrationsapiApi->getIntegrationWebhookUrl($type);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Schematic->IntegrationsapiApi->getIntegrationWebhookUrl: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **type** | **string**| type | |

### Return type

[**\Schematic\Model\GetIntegrationWebhookUrlResponse**](../Model/GetIntegrationWebhookUrlResponse.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `installIntegration()`

```php
installIntegration($install_integration_request_body): \Schematic\Model\InstallIntegrationResponse
```

Install integration

### Example

```php
<?php
require_once 'vendor/autoload.php';

use Schematic\Schematic;

$schematic = new Schematic('YOUR_SECRET_API_KEY');

$install_integration_request_body = new \Schematic\Model\InstallIntegrationRequestBody(); // \Schematic\Model\InstallIntegrationRequestBody

try {
    $result = $schematic->IntegrationsapiApi->installIntegration($install_integration_request_body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Schematic->IntegrationsapiApi->installIntegration: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **install_integration_request_body** | [**\Schematic\Model\InstallIntegrationRequestBody**](../Model/InstallIntegrationRequestBody.md)|  | |

### Return type

[**\Schematic\Model\InstallIntegrationResponse**](../Model/InstallIntegrationResponse.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `installStripe()`

```php
installStripe($install_integration_request_body): \Schematic\Model\InstallStripeResponse
```

Install stripe

### Example

```php
<?php
require_once 'vendor/autoload.php';

use Schematic\Schematic;

$schematic = new Schematic('YOUR_SECRET_API_KEY');

$install_integration_request_body = new \Schematic\Model\InstallIntegrationRequestBody(); // \Schematic\Model\InstallIntegrationRequestBody

try {
    $result = $schematic->IntegrationsapiApi->installStripe($install_integration_request_body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Schematic->IntegrationsapiApi->installStripe: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **install_integration_request_body** | [**\Schematic\Model\InstallIntegrationRequestBody**](../Model/InstallIntegrationRequestBody.md)|  | |

### Return type

[**\Schematic\Model\InstallStripeResponse**](../Model/InstallStripeResponse.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listIntegrations()`

```php
listIntegrations($billing_only, $exclude_ids, $id, $state, $type, $limit, $offset): \Schematic\Model\ListIntegrationsResponse
```

List integrations

### Example

```php
<?php
require_once 'vendor/autoload.php';

use Schematic\Schematic;

$schematic = new Schematic('YOUR_SECRET_API_KEY');

$billing_only = True; // bool
$exclude_ids = array('exclude_ids_example'); // string[]
$id = 'id_example'; // string
$state = new \Schematic\Model\IntegrationState(); // IntegrationState
$type = new \Schematic\Model\IntegrationType(); // IntegrationType
$limit = 100; // int | Page limit (default 100)
$offset = 0; // int | Page offset (default 0)

try {
    $result = $schematic->IntegrationsapiApi->listIntegrations($billing_only, $exclude_ids, $id, $state, $type, $limit, $offset);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Schematic->IntegrationsapiApi->listIntegrations: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **billing_only** | **bool**|  | [optional] |
| **exclude_ids** | [**string[]**](../Model/string.md)|  | [optional] |
| **id** | **string**|  | [optional] |
| **state** | [**IntegrationState**](../Model/.md)|  | [optional] |
| **type** | [**IntegrationType**](../Model/.md)|  | [optional] |
| **limit** | **int**| Page limit (default 100) | [optional] |
| **offset** | **int**| Page offset (default 0) | [optional] |

### Return type

[**\Schematic\Model\ListIntegrationsResponse**](../Model/ListIntegrationsResponse.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `loadSampleDataSet()`

```php
loadSampleDataSet(): \Schematic\Model\LoadSampleDataSetResponse
```

Load sample data set

### Example

```php
<?php
require_once 'vendor/autoload.php';

use Schematic\Schematic;

$schematic = new Schematic('YOUR_SECRET_API_KEY');


try {
    $result = $schematic->IntegrationsapiApi->loadSampleDataSet();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Schematic->IntegrationsapiApi->loadSampleDataSet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\Schematic\Model\LoadSampleDataSetResponse**](../Model/LoadSampleDataSetResponse.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `runIntegration()`

```php
runIntegration($integration_id): \Schematic\Model\RunIntegrationResponse
```

Run integration

### Example

```php
<?php
require_once 'vendor/autoload.php';

use Schematic\Schematic;

$schematic = new Schematic('YOUR_SECRET_API_KEY');

$integration_id = 'integration_id_example'; // string | integration_id

try {
    $result = $schematic->IntegrationsapiApi->runIntegration($integration_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Schematic->IntegrationsapiApi->runIntegration: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **integration_id** | **string**| integration_id | |

### Return type

[**\Schematic\Model\RunIntegrationResponse**](../Model/RunIntegrationResponse.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `startDataImport()`

```php
startDataImport($start_data_import_request_body): \Schematic\Model\StartDataImportResponse
```

Start data import

### Example

```php
<?php
require_once 'vendor/autoload.php';

use Schematic\Schematic;

$schematic = new Schematic('YOUR_SECRET_API_KEY');

$start_data_import_request_body = new \Schematic\Model\StartDataImportRequestBody(); // \Schematic\Model\StartDataImportRequestBody

try {
    $result = $schematic->IntegrationsapiApi->startDataImport($start_data_import_request_body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Schematic->IntegrationsapiApi->startDataImport: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **start_data_import_request_body** | [**\Schematic\Model\StartDataImportRequestBody**](../Model/StartDataImportRequestBody.md)|  | |

### Return type

[**\Schematic\Model\StartDataImportResponse**](../Model/StartDataImportResponse.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `uninstallIntegration()`

```php
uninstallIntegration($integration_id): \Schematic\Model\UninstallIntegrationResponse
```

Uninstall integration

### Example

```php
<?php
require_once 'vendor/autoload.php';

use Schematic\Schematic;

$schematic = new Schematic('YOUR_SECRET_API_KEY');

$integration_id = 'integration_id_example'; // string | integration_id

try {
    $result = $schematic->IntegrationsapiApi->uninstallIntegration($integration_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Schematic->IntegrationsapiApi->uninstallIntegration: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **integration_id** | **string**| integration_id | |

### Return type

[**\Schematic\Model\UninstallIntegrationResponse**](../Model/UninstallIntegrationResponse.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
