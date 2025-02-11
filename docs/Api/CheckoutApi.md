# Schematic\CheckoutApi

All URIs are relative to https://api.schematichq.com, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**checkoutInternal()**](CheckoutApi.md#checkoutInternal) | **POST** /checkout-internal | Checkout internal |
| [**getCheckoutData()**](CheckoutApi.md#getCheckoutData) | **GET** /checkout-internal/{checkout_internal_id}/data | Get checkout data |
| [**previewCheckoutInternal()**](CheckoutApi.md#previewCheckoutInternal) | **POST** /checkout-internal/preview | Preview checkout internal |
| [**updateCustomerSubscriptionTrialEnd()**](CheckoutApi.md#updateCustomerSubscriptionTrialEnd) | **PUT** /subscription/{subscription_id}/edit-trial-end | Update customer subscription trial end |


## `checkoutInternal()`

```php
checkoutInternal($change_subscription_internal_request_body): \Schematic\Model\CheckoutInternalResponse
```

Checkout internal

### Example

```php
<?php
require_once 'vendor/autoload.php';

use Schematic\Schematic;

$schematic = new Schematic('YOUR_SECRET_API_KEY');

$change_subscription_internal_request_body = new \Schematic\Model\ChangeSubscriptionInternalRequestBody(); // \Schematic\Model\ChangeSubscriptionInternalRequestBody

try {
    $result = $schematic->CheckoutApi->checkoutInternal($change_subscription_internal_request_body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Schematic->CheckoutApi->checkoutInternal: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **change_subscription_internal_request_body** | [**\Schematic\Model\ChangeSubscriptionInternalRequestBody**](../Model/ChangeSubscriptionInternalRequestBody.md)|  | |

### Return type

[**\Schematic\Model\CheckoutInternalResponse**](../Model/CheckoutInternalResponse.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getCheckoutData()`

```php
getCheckoutData($checkout_internal_id): \Schematic\Model\GetCheckoutDataResponse
```

Get checkout data

### Example

```php
<?php
require_once 'vendor/autoload.php';

use Schematic\Schematic;

$schematic = new Schematic('YOUR_SECRET_API_KEY');

$checkout_internal_id = 'checkout_internal_id_example'; // string | checkout_internal_id

try {
    $result = $schematic->CheckoutApi->getCheckoutData($checkout_internal_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Schematic->CheckoutApi->getCheckoutData: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **checkout_internal_id** | **string**| checkout_internal_id | |

### Return type

[**\Schematic\Model\GetCheckoutDataResponse**](../Model/GetCheckoutDataResponse.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `previewCheckoutInternal()`

```php
previewCheckoutInternal($change_subscription_internal_request_body): \Schematic\Model\PreviewCheckoutInternalResponse
```

Preview checkout internal

### Example

```php
<?php
require_once 'vendor/autoload.php';

use Schematic\Schematic;

$schematic = new Schematic('YOUR_SECRET_API_KEY');

$change_subscription_internal_request_body = new \Schematic\Model\ChangeSubscriptionInternalRequestBody(); // \Schematic\Model\ChangeSubscriptionInternalRequestBody

try {
    $result = $schematic->CheckoutApi->previewCheckoutInternal($change_subscription_internal_request_body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Schematic->CheckoutApi->previewCheckoutInternal: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **change_subscription_internal_request_body** | [**\Schematic\Model\ChangeSubscriptionInternalRequestBody**](../Model/ChangeSubscriptionInternalRequestBody.md)|  | |

### Return type

[**\Schematic\Model\PreviewCheckoutInternalResponse**](../Model/PreviewCheckoutInternalResponse.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateCustomerSubscriptionTrialEnd()`

```php
updateCustomerSubscriptionTrialEnd($subscription_id, $update_trial_end_request_body): \Schematic\Model\UpdateCustomerSubscriptionTrialEndResponse
```

Update customer subscription trial end

### Example

```php
<?php
require_once 'vendor/autoload.php';

use Schematic\Schematic;

$schematic = new Schematic('YOUR_SECRET_API_KEY');

$subscription_id = 'subscription_id_example'; // string | subscription_id
$update_trial_end_request_body = new \Schematic\Model\UpdateTrialEndRequestBody(); // \Schematic\Model\UpdateTrialEndRequestBody

try {
    $result = $schematic->CheckoutApi->updateCustomerSubscriptionTrialEnd($subscription_id, $update_trial_end_request_body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Schematic->CheckoutApi->updateCustomerSubscriptionTrialEnd: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **subscription_id** | **string**| subscription_id | |
| **update_trial_end_request_body** | [**\Schematic\Model\UpdateTrialEndRequestBody**](../Model/UpdateTrialEndRequestBody.md)|  | |

### Return type

[**\Schematic\Model\UpdateCustomerSubscriptionTrialEndResponse**](../Model/UpdateCustomerSubscriptionTrialEndResponse.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
