# Schematic\CheckoutApi

All URIs are relative to https://api.schematichq.com, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**cancelSubscription()**](CheckoutApi.md#cancelSubscription) | **POST** /manage-plan/subscription/cancel | Cancel subscription |
| [**checkoutInternal()**](CheckoutApi.md#checkoutInternal) | **POST** /checkout-internal | Checkout internal |
| [**getCheckoutData()**](CheckoutApi.md#getCheckoutData) | **POST** /checkout-internal/data | Get checkout data |
| [**getCompanyBillingDetails()**](CheckoutApi.md#getCompanyBillingDetails) | **GET** /companies/{company_id}/billing-details | Get company billing details |
| [**managePlan()**](CheckoutApi.md#managePlan) | **POST** /manage-plan | Manage plan |
| [**previewCheckoutInternal()**](CheckoutApi.md#previewCheckoutInternal) | **POST** /checkout-internal/preview | Preview checkout internal |
| [**previewManagePlan()**](CheckoutApi.md#previewManagePlan) | **POST** /manage-plan/preview | Preview manage plan |
| [**updateCompanyBillingDetails()**](CheckoutApi.md#updateCompanyBillingDetails) | **PUT** /companies/{company_id}/billing-details | Update company billing details |
| [**updateCustomerSubscriptionTrialEnd()**](CheckoutApi.md#updateCustomerSubscriptionTrialEnd) | **PUT** /subscription/{subscription_id}/edit-trial-end | Update customer subscription trial end |


## `cancelSubscription()`

```php
cancelSubscription($cancel_subscription_request): \Schematic\Model\CancelSubscriptionResponse
```

Cancel subscription

### Example

```php
<?php
require_once 'vendor/autoload.php';

use Schematic\Schematic;

$schematic = new Schematic('YOUR_SECRET_API_KEY');

$cancel_subscription_request = new \Schematic\Model\CancelSubscriptionRequest(); // \Schematic\Model\CancelSubscriptionRequest

try {
    $result = $schematic->CheckoutApi->cancelSubscription($cancel_subscription_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Schematic->CheckoutApi->cancelSubscription: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **cancel_subscription_request** | [**\Schematic\Model\CancelSubscriptionRequest**](../Model/CancelSubscriptionRequest.md)|  | |

### Return type

[**\Schematic\Model\CancelSubscriptionResponse**](../Model/CancelSubscriptionResponse.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

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
getCheckoutData($checkout_data_request_body): \Schematic\Model\GetCheckoutDataResponse
```

Get checkout data

### Example

```php
<?php
require_once 'vendor/autoload.php';

use Schematic\Schematic;

$schematic = new Schematic('YOUR_SECRET_API_KEY');

$checkout_data_request_body = new \Schematic\Model\CheckoutDataRequestBody(); // \Schematic\Model\CheckoutDataRequestBody

try {
    $result = $schematic->CheckoutApi->getCheckoutData($checkout_data_request_body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Schematic->CheckoutApi->getCheckoutData: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **checkout_data_request_body** | [**\Schematic\Model\CheckoutDataRequestBody**](../Model/CheckoutDataRequestBody.md)|  | |

### Return type

[**\Schematic\Model\GetCheckoutDataResponse**](../Model/GetCheckoutDataResponse.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getCompanyBillingDetails()`

```php
getCompanyBillingDetails($company_id): \Schematic\Model\GetCompanyBillingDetailsResponse
```

Get company billing details

### Example

```php
<?php
require_once 'vendor/autoload.php';

use Schematic\Schematic;

$schematic = new Schematic('YOUR_SECRET_API_KEY');

$company_id = 'company_id_example'; // string | company_id

try {
    $result = $schematic->CheckoutApi->getCompanyBillingDetails($company_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Schematic->CheckoutApi->getCompanyBillingDetails: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **company_id** | **string**| company_id | |

### Return type

[**\Schematic\Model\GetCompanyBillingDetailsResponse**](../Model/GetCompanyBillingDetailsResponse.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `managePlan()`

```php
managePlan($manage_plan_request): \Schematic\Model\ManagePlanResponse
```

Manage plan

### Example

```php
<?php
require_once 'vendor/autoload.php';

use Schematic\Schematic;

$schematic = new Schematic('YOUR_SECRET_API_KEY');

$manage_plan_request = new \Schematic\Model\ManagePlanRequest(); // \Schematic\Model\ManagePlanRequest

try {
    $result = $schematic->CheckoutApi->managePlan($manage_plan_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Schematic->CheckoutApi->managePlan: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **manage_plan_request** | [**\Schematic\Model\ManagePlanRequest**](../Model/ManagePlanRequest.md)|  | |

### Return type

[**\Schematic\Model\ManagePlanResponse**](../Model/ManagePlanResponse.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: `application/json`
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

## `previewManagePlan()`

```php
previewManagePlan($manage_plan_request): \Schematic\Model\PreviewManagePlanResponse
```

Preview manage plan

### Example

```php
<?php
require_once 'vendor/autoload.php';

use Schematic\Schematic;

$schematic = new Schematic('YOUR_SECRET_API_KEY');

$manage_plan_request = new \Schematic\Model\ManagePlanRequest(); // \Schematic\Model\ManagePlanRequest

try {
    $result = $schematic->CheckoutApi->previewManagePlan($manage_plan_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Schematic->CheckoutApi->previewManagePlan: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **manage_plan_request** | [**\Schematic\Model\ManagePlanRequest**](../Model/ManagePlanRequest.md)|  | |

### Return type

[**\Schematic\Model\PreviewManagePlanResponse**](../Model/PreviewManagePlanResponse.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateCompanyBillingDetails()`

```php
updateCompanyBillingDetails($company_id, $update_company_billing_details_request_body): \Schematic\Model\UpdateCompanyBillingDetailsResponse
```

Update company billing details

### Example

```php
<?php
require_once 'vendor/autoload.php';

use Schematic\Schematic;

$schematic = new Schematic('YOUR_SECRET_API_KEY');

$company_id = 'company_id_example'; // string | company_id
$update_company_billing_details_request_body = new \Schematic\Model\UpdateCompanyBillingDetailsRequestBody(); // \Schematic\Model\UpdateCompanyBillingDetailsRequestBody

try {
    $result = $schematic->CheckoutApi->updateCompanyBillingDetails($company_id, $update_company_billing_details_request_body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Schematic->CheckoutApi->updateCompanyBillingDetails: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **company_id** | **string**| company_id | |
| **update_company_billing_details_request_body** | [**\Schematic\Model\UpdateCompanyBillingDetailsRequestBody**](../Model/UpdateCompanyBillingDetailsRequestBody.md)|  | |

### Return type

[**\Schematic\Model\UpdateCompanyBillingDetailsResponse**](../Model/UpdateCompanyBillingDetailsResponse.md)

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
