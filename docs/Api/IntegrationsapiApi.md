# Schematic\IntegrationsapiApi

All URIs are relative to https://api.schematichq.com, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**assumeStripeInstalled()**](IntegrationsapiApi.md#assumeStripeInstalled) | **POST** /integrations/stripe/v2/assume-installed | Assume stripe installed |
| [**claimStripeSandboxKeys()**](IntegrationsapiApi.md#claimStripeSandboxKeys) | **POST** /integrations/stripe/sandbox/keys/claim | Claim stripe sandbox keys |
| [**getIntegrationWebhookUrl()**](IntegrationsapiApi.md#getIntegrationWebhookUrl) | **GET** /integrations/{type}/webhook-url | Get integration webhook url |
| [**getStripeSandboxClaimLink()**](IntegrationsapiApi.md#getStripeSandboxClaimLink) | **GET** /integrations/stripe/sandbox/claim-link | Get stripe sandbox claim link |
| [**getStripeSandboxKeys()**](IntegrationsapiApi.md#getStripeSandboxKeys) | **GET** /integrations/stripe/sandbox/keys | Get stripe sandbox keys |
| [**installIntegration()**](IntegrationsapiApi.md#installIntegration) | **POST** /integrations/install | Install integration |
| [**installStripe()**](IntegrationsapiApi.md#installStripe) | **POST** /integrations/stripe/v2/install | Install stripe |
| [**installStripeClaimableSandbox()**](IntegrationsapiApi.md#installStripeClaimableSandbox) | **POST** /integrations/stripe/v2/sandbox | Install stripe claimable sandbox |
| [**listIntegrations()**](IntegrationsapiApi.md#listIntegrations) | **GET** /integrations | List integrations |
| [**listStripeSandboxCountries()**](IntegrationsapiApi.md#listStripeSandboxCountries) | **GET** /integrations/stripe/v2/sandbox-countries | List stripe sandbox countries |
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

## `claimStripeSandboxKeys()`

```php
claimStripeSandboxKeys($claim_stripe_sandbox_keys_request_body): \Schematic\Model\ClaimStripeSandboxKeysResponse
```

Claim stripe sandbox keys

### Example

```php
<?php
require_once 'vendor/autoload.php';

use Schematic\Schematic;

$schematic = new Schematic('YOUR_SECRET_API_KEY');

$claim_stripe_sandbox_keys_request_body = new \Schematic\Model\ClaimStripeSandboxKeysRequestBody(); // \Schematic\Model\ClaimStripeSandboxKeysRequestBody

try {
    $result = $schematic->IntegrationsapiApi->claimStripeSandboxKeys($claim_stripe_sandbox_keys_request_body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Schematic->IntegrationsapiApi->claimStripeSandboxKeys: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **claim_stripe_sandbox_keys_request_body** | [**\Schematic\Model\ClaimStripeSandboxKeysRequestBody**](../Model/ClaimStripeSandboxKeysRequestBody.md)|  | |

### Return type

[**\Schematic\Model\ClaimStripeSandboxKeysResponse**](../Model/ClaimStripeSandboxKeysResponse.md)

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

## `getStripeSandboxClaimLink()`

```php
getStripeSandboxClaimLink(): \Schematic\Model\GetStripeSandboxClaimLinkResponse
```

Get stripe sandbox claim link

### Example

```php
<?php
require_once 'vendor/autoload.php';

use Schematic\Schematic;

$schematic = new Schematic('YOUR_SECRET_API_KEY');


try {
    $result = $schematic->IntegrationsapiApi->getStripeSandboxClaimLink();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Schematic->IntegrationsapiApi->getStripeSandboxClaimLink: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\Schematic\Model\GetStripeSandboxClaimLinkResponse**](../Model/GetStripeSandboxClaimLinkResponse.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getStripeSandboxKeys()`

```php
getStripeSandboxKeys(): \Schematic\Model\GetStripeSandboxKeysResponse
```

Get stripe sandbox keys

### Example

```php
<?php
require_once 'vendor/autoload.php';

use Schematic\Schematic;

$schematic = new Schematic('YOUR_SECRET_API_KEY');


try {
    $result = $schematic->IntegrationsapiApi->getStripeSandboxKeys();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Schematic->IntegrationsapiApi->getStripeSandboxKeys: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\Schematic\Model\GetStripeSandboxKeysResponse**](../Model/GetStripeSandboxKeysResponse.md)

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

## `installStripeClaimableSandbox()`

```php
installStripeClaimableSandbox($install_stripe_sandbox_request_body): \Schematic\Model\InstallStripeClaimableSandboxResponse
```

Install stripe claimable sandbox

### Example

```php
<?php
require_once 'vendor/autoload.php';

use Schematic\Schematic;

$schematic = new Schematic('YOUR_SECRET_API_KEY');

$install_stripe_sandbox_request_body = new \Schematic\Model\InstallStripeSandboxRequestBody(); // \Schematic\Model\InstallStripeSandboxRequestBody

try {
    $result = $schematic->IntegrationsapiApi->installStripeClaimableSandbox($install_stripe_sandbox_request_body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Schematic->IntegrationsapiApi->installStripeClaimableSandbox: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **install_stripe_sandbox_request_body** | [**\Schematic\Model\InstallStripeSandboxRequestBody**](../Model/InstallStripeSandboxRequestBody.md)|  | |

### Return type

[**\Schematic\Model\InstallStripeClaimableSandboxResponse**](../Model/InstallStripeClaimableSandboxResponse.md)

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
$state = new \Schematic\Model\\Schematic\Model\IntegrationState(); // \Schematic\Model\IntegrationState
$type = new \Schematic\Model\\Schematic\Model\IntegrationType(); // \Schematic\Model\IntegrationType
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
| **state** | [**\Schematic\Model\IntegrationState**](../Model/.md)|  | [optional] |
| **type** | [**\Schematic\Model\IntegrationType**](../Model/.md)|  | [optional] |
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

## `listStripeSandboxCountries()`

```php
listStripeSandboxCountries(): \Schematic\Model\ListStripeSandboxCountriesResponse
```

List stripe sandbox countries

### Example

```php
<?php
require_once 'vendor/autoload.php';

use Schematic\Schematic;

$schematic = new Schematic('YOUR_SECRET_API_KEY');


try {
    $result = $schematic->IntegrationsapiApi->listStripeSandboxCountries();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Schematic->IntegrationsapiApi->listStripeSandboxCountries: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\Schematic\Model\ListStripeSandboxCountriesResponse**](../Model/ListStripeSandboxCountriesResponse.md)

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
