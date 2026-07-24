# Schematic\ScheduledcheckoutApi

All URIs are relative to https://api.schematichq.com, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createScheduledCheckout()**](ScheduledcheckoutApi.md#createScheduledCheckout) | **POST** /scheduled-checkout | Create scheduled checkout |
| [**getScheduledCheckout()**](ScheduledcheckoutApi.md#getScheduledCheckout) | **GET** /scheduled-checkout/{scheduled_checkout_id} | Get scheduled checkout |
| [**listScheduledCheckouts()**](ScheduledcheckoutApi.md#listScheduledCheckouts) | **GET** /scheduled-checkout | List scheduled checkouts |
| [**updateScheduledCheckout()**](ScheduledcheckoutApi.md#updateScheduledCheckout) | **PUT** /scheduled-checkout/{scheduled_checkout_id} | Update scheduled checkout |


## `createScheduledCheckout()`

```php
createScheduledCheckout($create_scheduled_checkout_request): \Schematic\Model\CreateScheduledCheckoutResponse
```

Create scheduled checkout

### Example

```php
<?php
require_once 'vendor/autoload.php';

use Schematic\Schematic;

$schematic = new Schematic('YOUR_SECRET_API_KEY');

$create_scheduled_checkout_request = new \Schematic\Model\CreateScheduledCheckoutRequest(); // \Schematic\Model\CreateScheduledCheckoutRequest

try {
    $result = $schematic->ScheduledcheckoutApi->createScheduledCheckout($create_scheduled_checkout_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Schematic->ScheduledcheckoutApi->createScheduledCheckout: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **create_scheduled_checkout_request** | [**\Schematic\Model\CreateScheduledCheckoutRequest**](../Model/CreateScheduledCheckoutRequest.md)|  | |

### Return type

[**\Schematic\Model\CreateScheduledCheckoutResponse**](../Model/CreateScheduledCheckoutResponse.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getScheduledCheckout()`

```php
getScheduledCheckout($scheduled_checkout_id): \Schematic\Model\GetScheduledCheckoutResponse
```

Get scheduled checkout

### Example

```php
<?php
require_once 'vendor/autoload.php';

use Schematic\Schematic;

$schematic = new Schematic('YOUR_SECRET_API_KEY');

$scheduled_checkout_id = 'scheduled_checkout_id_example'; // string | scheduled_checkout_id

try {
    $result = $schematic->ScheduledcheckoutApi->getScheduledCheckout($scheduled_checkout_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Schematic->ScheduledcheckoutApi->getScheduledCheckout: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **scheduled_checkout_id** | **string**| scheduled_checkout_id | |

### Return type

[**\Schematic\Model\GetScheduledCheckoutResponse**](../Model/GetScheduledCheckoutResponse.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listScheduledCheckouts()`

```php
listScheduledCheckouts($company_id, $status, $limit, $offset): \Schematic\Model\ListScheduledCheckoutsResponse
```

List scheduled checkouts

### Example

```php
<?php
require_once 'vendor/autoload.php';

use Schematic\Schematic;

$schematic = new Schematic('YOUR_SECRET_API_KEY');

$company_id = 'company_id_example'; // string
$status = new \Schematic\Model\ScheduledCheckoutStatus(); // ScheduledCheckoutStatus
$limit = 100; // int | Page limit (default 100)
$offset = 0; // int | Page offset (default 0)

try {
    $result = $schematic->ScheduledcheckoutApi->listScheduledCheckouts($company_id, $status, $limit, $offset);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Schematic->ScheduledcheckoutApi->listScheduledCheckouts: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **company_id** | **string**|  | [optional] |
| **status** | [**ScheduledCheckoutStatus**](../Model/.md)|  | [optional] |
| **limit** | **int**| Page limit (default 100) | [optional] |
| **offset** | **int**| Page offset (default 0) | [optional] |

### Return type

[**\Schematic\Model\ListScheduledCheckoutsResponse**](../Model/ListScheduledCheckoutsResponse.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateScheduledCheckout()`

```php
updateScheduledCheckout($scheduled_checkout_id, $update_scheduled_checkout_request): \Schematic\Model\UpdateScheduledCheckoutResponse
```

Update scheduled checkout

### Example

```php
<?php
require_once 'vendor/autoload.php';

use Schematic\Schematic;

$schematic = new Schematic('YOUR_SECRET_API_KEY');

$scheduled_checkout_id = 'scheduled_checkout_id_example'; // string | scheduled_checkout_id
$update_scheduled_checkout_request = new \Schematic\Model\UpdateScheduledCheckoutRequest(); // \Schematic\Model\UpdateScheduledCheckoutRequest

try {
    $result = $schematic->ScheduledcheckoutApi->updateScheduledCheckout($scheduled_checkout_id, $update_scheduled_checkout_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Schematic->ScheduledcheckoutApi->updateScheduledCheckout: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **scheduled_checkout_id** | **string**| scheduled_checkout_id | |
| **update_scheduled_checkout_request** | [**\Schematic\Model\UpdateScheduledCheckoutRequest**](../Model/UpdateScheduledCheckoutRequest.md)|  | |

### Return type

[**\Schematic\Model\UpdateScheduledCheckoutResponse**](../Model/UpdateScheduledCheckoutResponse.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
