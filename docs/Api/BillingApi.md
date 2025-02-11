# Schematic\BillingApi

All URIs are relative to https://api.schematichq.com, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**countBillingProducts()**](BillingApi.md#countBillingProducts) | **GET** /billing/products/count | Count billing products |
| [**countCustomers()**](BillingApi.md#countCustomers) | **GET** /billing/customers/count | Count customers |
| [**deleteProductPrice()**](BillingApi.md#deleteProductPrice) | **DELETE** /billing/product/prices/{billing_id} | Delete product price |
| [**listBillingProducts()**](BillingApi.md#listBillingProducts) | **GET** /billing/products | List billing products |
| [**listCustomers()**](BillingApi.md#listCustomers) | **GET** /billing/customers | List customers |
| [**listInvoices()**](BillingApi.md#listInvoices) | **GET** /billing/invoices | List invoices |
| [**listMeters()**](BillingApi.md#listMeters) | **GET** /billing/meter | List meters |
| [**listPaymentMethods()**](BillingApi.md#listPaymentMethods) | **GET** /billing/payment-methods | List payment methods |
| [**listProductPrices()**](BillingApi.md#listProductPrices) | **GET** /billing/product/prices | List product prices |
| [**searchBillingPrices()**](BillingApi.md#searchBillingPrices) | **GET** /billing/price | Search billing prices |
| [**upsertBillingCoupon()**](BillingApi.md#upsertBillingCoupon) | **POST** /billing/coupons | Upsert billing coupon |
| [**upsertBillingCustomer()**](BillingApi.md#upsertBillingCustomer) | **POST** /billing/customer/upsert | Upsert billing customer |
| [**upsertBillingMeter()**](BillingApi.md#upsertBillingMeter) | **POST** /billing/meter/upsert | Upsert billing meter |
| [**upsertBillingPrice()**](BillingApi.md#upsertBillingPrice) | **POST** /billing/price/upsert | Upsert billing price |
| [**upsertBillingProduct()**](BillingApi.md#upsertBillingProduct) | **POST** /billing/product/upsert | Upsert billing product |
| [**upsertBillingSubscription()**](BillingApi.md#upsertBillingSubscription) | **POST** /billing/subscription/upsert | Upsert billing subscription |
| [**upsertInvoice()**](BillingApi.md#upsertInvoice) | **POST** /billing/invoices | Upsert invoice |
| [**upsertPaymentMethod()**](BillingApi.md#upsertPaymentMethod) | **POST** /billing/payment-methods | Upsert payment method |


## `countBillingProducts()`

```php
countBillingProducts($ids, $name, $q, $price_usage_type, $without_linked_to_plan, $with_zero_price, $with_prices_only, $limit, $offset): \Schematic\Model\CountBillingProductsResponse
```

Count billing products

### Example

```php
<?php
require_once 'vendor/autoload.php';

use Schematic\Schematic;

$schematic = new Schematic('YOUR_SECRET_API_KEY');

$ids = array('ids_example'); // string[]
$name = 'name_example'; // string
$q = 'q_example'; // string
$price_usage_type = 'price_usage_type_example'; // string
$without_linked_to_plan = True; // bool | Filter products that are not linked to any plan
$with_zero_price = True; // bool | Filter products that have zero price for free subscription type
$with_prices_only = True; // bool | Filter products that have prices
$limit = 100; // int | Page limit (default 100)
$offset = 0; // int | Page offset (default 0)

try {
    $result = $schematic->BillingApi->countBillingProducts($ids, $name, $q, $price_usage_type, $without_linked_to_plan, $with_zero_price, $with_prices_only, $limit, $offset);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Schematic->BillingApi->countBillingProducts: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **ids** | [**string[]**](../Model/string.md)|  | [optional] |
| **name** | **string**|  | [optional] |
| **q** | **string**|  | [optional] |
| **price_usage_type** | **string**|  | [optional] |
| **without_linked_to_plan** | **bool**| Filter products that are not linked to any plan | [optional] |
| **with_zero_price** | **bool**| Filter products that have zero price for free subscription type | [optional] |
| **with_prices_only** | **bool**| Filter products that have prices | [optional] |
| **limit** | **int**| Page limit (default 100) | [optional] |
| **offset** | **int**| Page offset (default 0) | [optional] |

### Return type

[**\Schematic\Model\CountBillingProductsResponse**](../Model/CountBillingProductsResponse.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `countCustomers()`

```php
countCustomers($name, $failed_to_import, $q, $limit, $offset): \Schematic\Model\CountCustomersResponse
```

Count customers

### Example

```php
<?php
require_once 'vendor/autoload.php';

use Schematic\Schematic;

$schematic = new Schematic('YOUR_SECRET_API_KEY');

$name = 'name_example'; // string
$failed_to_import = True; // bool
$q = 'q_example'; // string
$limit = 100; // int | Page limit (default 100)
$offset = 0; // int | Page offset (default 0)

try {
    $result = $schematic->BillingApi->countCustomers($name, $failed_to_import, $q, $limit, $offset);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Schematic->BillingApi->countCustomers: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **name** | **string**|  | [optional] |
| **failed_to_import** | **bool**|  | [optional] |
| **q** | **string**|  | [optional] |
| **limit** | **int**| Page limit (default 100) | [optional] |
| **offset** | **int**| Page offset (default 0) | [optional] |

### Return type

[**\Schematic\Model\CountCustomersResponse**](../Model/CountCustomersResponse.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteProductPrice()`

```php
deleteProductPrice($billing_id): \Schematic\Model\DeleteProductPriceResponse
```

Delete product price

### Example

```php
<?php
require_once 'vendor/autoload.php';

use Schematic\Schematic;

$schematic = new Schematic('YOUR_SECRET_API_KEY');

$billing_id = 'billing_id_example'; // string | billing_id

try {
    $result = $schematic->BillingApi->deleteProductPrice($billing_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Schematic->BillingApi->deleteProductPrice: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **billing_id** | **string**| billing_id | |

### Return type

[**\Schematic\Model\DeleteProductPriceResponse**](../Model/DeleteProductPriceResponse.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listBillingProducts()`

```php
listBillingProducts($ids, $name, $q, $price_usage_type, $without_linked_to_plan, $with_zero_price, $with_prices_only, $limit, $offset): \Schematic\Model\ListBillingProductsResponse
```

List billing products

### Example

```php
<?php
require_once 'vendor/autoload.php';

use Schematic\Schematic;

$schematic = new Schematic('YOUR_SECRET_API_KEY');

$ids = array('ids_example'); // string[]
$name = 'name_example'; // string
$q = 'q_example'; // string
$price_usage_type = 'price_usage_type_example'; // string
$without_linked_to_plan = True; // bool | Filter products that are not linked to any plan
$with_zero_price = True; // bool | Filter products that have zero price for free subscription type
$with_prices_only = True; // bool | Filter products that have prices
$limit = 100; // int | Page limit (default 100)
$offset = 0; // int | Page offset (default 0)

try {
    $result = $schematic->BillingApi->listBillingProducts($ids, $name, $q, $price_usage_type, $without_linked_to_plan, $with_zero_price, $with_prices_only, $limit, $offset);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Schematic->BillingApi->listBillingProducts: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **ids** | [**string[]**](../Model/string.md)|  | [optional] |
| **name** | **string**|  | [optional] |
| **q** | **string**|  | [optional] |
| **price_usage_type** | **string**|  | [optional] |
| **without_linked_to_plan** | **bool**| Filter products that are not linked to any plan | [optional] |
| **with_zero_price** | **bool**| Filter products that have zero price for free subscription type | [optional] |
| **with_prices_only** | **bool**| Filter products that have prices | [optional] |
| **limit** | **int**| Page limit (default 100) | [optional] |
| **offset** | **int**| Page offset (default 0) | [optional] |

### Return type

[**\Schematic\Model\ListBillingProductsResponse**](../Model/ListBillingProductsResponse.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listCustomers()`

```php
listCustomers($name, $failed_to_import, $q, $limit, $offset): \Schematic\Model\ListCustomersResponse
```

List customers

### Example

```php
<?php
require_once 'vendor/autoload.php';

use Schematic\Schematic;

$schematic = new Schematic('YOUR_SECRET_API_KEY');

$name = 'name_example'; // string
$failed_to_import = True; // bool
$q = 'q_example'; // string
$limit = 100; // int | Page limit (default 100)
$offset = 0; // int | Page offset (default 0)

try {
    $result = $schematic->BillingApi->listCustomers($name, $failed_to_import, $q, $limit, $offset);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Schematic->BillingApi->listCustomers: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **name** | **string**|  | [optional] |
| **failed_to_import** | **bool**|  | [optional] |
| **q** | **string**|  | [optional] |
| **limit** | **int**| Page limit (default 100) | [optional] |
| **offset** | **int**| Page offset (default 0) | [optional] |

### Return type

[**\Schematic\Model\ListCustomersResponse**](../Model/ListCustomersResponse.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listInvoices()`

```php
listInvoices($customer_external_id, $company_id, $subscription_external_id, $limit, $offset): \Schematic\Model\ListInvoicesResponse
```

List invoices

### Example

```php
<?php
require_once 'vendor/autoload.php';

use Schematic\Schematic;

$schematic = new Schematic('YOUR_SECRET_API_KEY');

$customer_external_id = 'customer_external_id_example'; // string
$company_id = 'company_id_example'; // string
$subscription_external_id = 'subscription_external_id_example'; // string
$limit = 100; // int | Page limit (default 100)
$offset = 0; // int | Page offset (default 0)

try {
    $result = $schematic->BillingApi->listInvoices($customer_external_id, $company_id, $subscription_external_id, $limit, $offset);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Schematic->BillingApi->listInvoices: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **customer_external_id** | **string**|  | |
| **company_id** | **string**|  | [optional] |
| **subscription_external_id** | **string**|  | [optional] |
| **limit** | **int**| Page limit (default 100) | [optional] |
| **offset** | **int**| Page offset (default 0) | [optional] |

### Return type

[**\Schematic\Model\ListInvoicesResponse**](../Model/ListInvoicesResponse.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listMeters()`

```php
listMeters($display_name, $limit, $offset): \Schematic\Model\ListMetersResponse
```

List meters

### Example

```php
<?php
require_once 'vendor/autoload.php';

use Schematic\Schematic;

$schematic = new Schematic('YOUR_SECRET_API_KEY');

$display_name = 'display_name_example'; // string
$limit = 100; // int | Page limit (default 100)
$offset = 0; // int | Page offset (default 0)

try {
    $result = $schematic->BillingApi->listMeters($display_name, $limit, $offset);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Schematic->BillingApi->listMeters: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **display_name** | **string**|  | [optional] |
| **limit** | **int**| Page limit (default 100) | [optional] |
| **offset** | **int**| Page offset (default 0) | [optional] |

### Return type

[**\Schematic\Model\ListMetersResponse**](../Model/ListMetersResponse.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listPaymentMethods()`

```php
listPaymentMethods($customer_external_id, $company_id, $subscription_external_id, $limit, $offset): \Schematic\Model\ListPaymentMethodsResponse
```

List payment methods

### Example

```php
<?php
require_once 'vendor/autoload.php';

use Schematic\Schematic;

$schematic = new Schematic('YOUR_SECRET_API_KEY');

$customer_external_id = 'customer_external_id_example'; // string
$company_id = 'company_id_example'; // string
$subscription_external_id = 'subscription_external_id_example'; // string
$limit = 100; // int | Page limit (default 100)
$offset = 0; // int | Page offset (default 0)

try {
    $result = $schematic->BillingApi->listPaymentMethods($customer_external_id, $company_id, $subscription_external_id, $limit, $offset);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Schematic->BillingApi->listPaymentMethods: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **customer_external_id** | **string**|  | |
| **company_id** | **string**|  | [optional] |
| **subscription_external_id** | **string**|  | [optional] |
| **limit** | **int**| Page limit (default 100) | [optional] |
| **offset** | **int**| Page offset (default 0) | [optional] |

### Return type

[**\Schematic\Model\ListPaymentMethodsResponse**](../Model/ListPaymentMethodsResponse.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listProductPrices()`

```php
listProductPrices($ids, $name, $q, $price_usage_type, $without_linked_to_plan, $with_zero_price, $with_prices_only, $limit, $offset): \Schematic\Model\ListProductPricesResponse
```

List product prices

### Example

```php
<?php
require_once 'vendor/autoload.php';

use Schematic\Schematic;

$schematic = new Schematic('YOUR_SECRET_API_KEY');

$ids = array('ids_example'); // string[]
$name = 'name_example'; // string
$q = 'q_example'; // string
$price_usage_type = 'price_usage_type_example'; // string
$without_linked_to_plan = True; // bool | Filter products that are not linked to any plan
$with_zero_price = True; // bool | Filter products that have zero price for free subscription type
$with_prices_only = True; // bool | Filter products that have prices
$limit = 100; // int | Page limit (default 100)
$offset = 0; // int | Page offset (default 0)

try {
    $result = $schematic->BillingApi->listProductPrices($ids, $name, $q, $price_usage_type, $without_linked_to_plan, $with_zero_price, $with_prices_only, $limit, $offset);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Schematic->BillingApi->listProductPrices: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **ids** | [**string[]**](../Model/string.md)|  | [optional] |
| **name** | **string**|  | [optional] |
| **q** | **string**|  | [optional] |
| **price_usage_type** | **string**|  | [optional] |
| **without_linked_to_plan** | **bool**| Filter products that are not linked to any plan | [optional] |
| **with_zero_price** | **bool**| Filter products that have zero price for free subscription type | [optional] |
| **with_prices_only** | **bool**| Filter products that have prices | [optional] |
| **limit** | **int**| Page limit (default 100) | [optional] |
| **offset** | **int**| Page offset (default 0) | [optional] |

### Return type

[**\Schematic\Model\ListProductPricesResponse**](../Model/ListProductPricesResponse.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `searchBillingPrices()`

```php
searchBillingPrices($ids, $interval, $usage_type, $price, $limit, $offset): \Schematic\Model\SearchBillingPricesResponse
```

Search billing prices

### Example

```php
<?php
require_once 'vendor/autoload.php';

use Schematic\Schematic;

$schematic = new Schematic('YOUR_SECRET_API_KEY');

$ids = array('ids_example'); // string[]
$interval = 'interval_example'; // string
$usage_type = 'usage_type_example'; // string
$price = 56; // int
$limit = 100; // int | Page limit (default 100)
$offset = 0; // int | Page offset (default 0)

try {
    $result = $schematic->BillingApi->searchBillingPrices($ids, $interval, $usage_type, $price, $limit, $offset);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Schematic->BillingApi->searchBillingPrices: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **ids** | [**string[]**](../Model/string.md)|  | [optional] |
| **interval** | **string**|  | [optional] |
| **usage_type** | **string**|  | [optional] |
| **price** | **int**|  | [optional] |
| **limit** | **int**| Page limit (default 100) | [optional] |
| **offset** | **int**| Page offset (default 0) | [optional] |

### Return type

[**\Schematic\Model\SearchBillingPricesResponse**](../Model/SearchBillingPricesResponse.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `upsertBillingCoupon()`

```php
upsertBillingCoupon($create_coupon_request_body): \Schematic\Model\UpsertBillingCouponResponse
```

Upsert billing coupon

### Example

```php
<?php
require_once 'vendor/autoload.php';

use Schematic\Schematic;

$schematic = new Schematic('YOUR_SECRET_API_KEY');

$create_coupon_request_body = new \Schematic\Model\CreateCouponRequestBody(); // \Schematic\Model\CreateCouponRequestBody

try {
    $result = $schematic->BillingApi->upsertBillingCoupon($create_coupon_request_body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Schematic->BillingApi->upsertBillingCoupon: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **create_coupon_request_body** | [**\Schematic\Model\CreateCouponRequestBody**](../Model/CreateCouponRequestBody.md)|  | |

### Return type

[**\Schematic\Model\UpsertBillingCouponResponse**](../Model/UpsertBillingCouponResponse.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `upsertBillingCustomer()`

```php
upsertBillingCustomer($create_billing_customer_request_body): \Schematic\Model\UpsertBillingCustomerResponse
```

Upsert billing customer

### Example

```php
<?php
require_once 'vendor/autoload.php';

use Schematic\Schematic;

$schematic = new Schematic('YOUR_SECRET_API_KEY');

$create_billing_customer_request_body = new \Schematic\Model\CreateBillingCustomerRequestBody(); // \Schematic\Model\CreateBillingCustomerRequestBody

try {
    $result = $schematic->BillingApi->upsertBillingCustomer($create_billing_customer_request_body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Schematic->BillingApi->upsertBillingCustomer: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **create_billing_customer_request_body** | [**\Schematic\Model\CreateBillingCustomerRequestBody**](../Model/CreateBillingCustomerRequestBody.md)|  | |

### Return type

[**\Schematic\Model\UpsertBillingCustomerResponse**](../Model/UpsertBillingCustomerResponse.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `upsertBillingMeter()`

```php
upsertBillingMeter($create_meter_request_body): \Schematic\Model\UpsertBillingMeterResponse
```

Upsert billing meter

### Example

```php
<?php
require_once 'vendor/autoload.php';

use Schematic\Schematic;

$schematic = new Schematic('YOUR_SECRET_API_KEY');

$create_meter_request_body = new \Schematic\Model\CreateMeterRequestBody(); // \Schematic\Model\CreateMeterRequestBody

try {
    $result = $schematic->BillingApi->upsertBillingMeter($create_meter_request_body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Schematic->BillingApi->upsertBillingMeter: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **create_meter_request_body** | [**\Schematic\Model\CreateMeterRequestBody**](../Model/CreateMeterRequestBody.md)|  | |

### Return type

[**\Schematic\Model\UpsertBillingMeterResponse**](../Model/UpsertBillingMeterResponse.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `upsertBillingPrice()`

```php
upsertBillingPrice($create_billing_price_request_body): \Schematic\Model\UpsertBillingPriceResponse
```

Upsert billing price

### Example

```php
<?php
require_once 'vendor/autoload.php';

use Schematic\Schematic;

$schematic = new Schematic('YOUR_SECRET_API_KEY');

$create_billing_price_request_body = new \Schematic\Model\CreateBillingPriceRequestBody(); // \Schematic\Model\CreateBillingPriceRequestBody

try {
    $result = $schematic->BillingApi->upsertBillingPrice($create_billing_price_request_body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Schematic->BillingApi->upsertBillingPrice: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **create_billing_price_request_body** | [**\Schematic\Model\CreateBillingPriceRequestBody**](../Model/CreateBillingPriceRequestBody.md)|  | |

### Return type

[**\Schematic\Model\UpsertBillingPriceResponse**](../Model/UpsertBillingPriceResponse.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `upsertBillingProduct()`

```php
upsertBillingProduct($create_billing_product_request_body): \Schematic\Model\UpsertBillingProductResponse
```

Upsert billing product

### Example

```php
<?php
require_once 'vendor/autoload.php';

use Schematic\Schematic;

$schematic = new Schematic('YOUR_SECRET_API_KEY');

$create_billing_product_request_body = new \Schematic\Model\CreateBillingProductRequestBody(); // \Schematic\Model\CreateBillingProductRequestBody

try {
    $result = $schematic->BillingApi->upsertBillingProduct($create_billing_product_request_body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Schematic->BillingApi->upsertBillingProduct: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **create_billing_product_request_body** | [**\Schematic\Model\CreateBillingProductRequestBody**](../Model/CreateBillingProductRequestBody.md)|  | |

### Return type

[**\Schematic\Model\UpsertBillingProductResponse**](../Model/UpsertBillingProductResponse.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `upsertBillingSubscription()`

```php
upsertBillingSubscription($create_billing_subscriptions_request_body): \Schematic\Model\UpsertBillingSubscriptionResponse
```

Upsert billing subscription

### Example

```php
<?php
require_once 'vendor/autoload.php';

use Schematic\Schematic;

$schematic = new Schematic('YOUR_SECRET_API_KEY');

$create_billing_subscriptions_request_body = new \Schematic\Model\CreateBillingSubscriptionsRequestBody(); // \Schematic\Model\CreateBillingSubscriptionsRequestBody

try {
    $result = $schematic->BillingApi->upsertBillingSubscription($create_billing_subscriptions_request_body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Schematic->BillingApi->upsertBillingSubscription: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **create_billing_subscriptions_request_body** | [**\Schematic\Model\CreateBillingSubscriptionsRequestBody**](../Model/CreateBillingSubscriptionsRequestBody.md)|  | |

### Return type

[**\Schematic\Model\UpsertBillingSubscriptionResponse**](../Model/UpsertBillingSubscriptionResponse.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `upsertInvoice()`

```php
upsertInvoice($create_invoice_request_body): \Schematic\Model\UpsertInvoiceResponse
```

Upsert invoice

### Example

```php
<?php
require_once 'vendor/autoload.php';

use Schematic\Schematic;

$schematic = new Schematic('YOUR_SECRET_API_KEY');

$create_invoice_request_body = new \Schematic\Model\CreateInvoiceRequestBody(); // \Schematic\Model\CreateInvoiceRequestBody

try {
    $result = $schematic->BillingApi->upsertInvoice($create_invoice_request_body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Schematic->BillingApi->upsertInvoice: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **create_invoice_request_body** | [**\Schematic\Model\CreateInvoiceRequestBody**](../Model/CreateInvoiceRequestBody.md)|  | |

### Return type

[**\Schematic\Model\UpsertInvoiceResponse**](../Model/UpsertInvoiceResponse.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `upsertPaymentMethod()`

```php
upsertPaymentMethod($create_payment_method_request_body): \Schematic\Model\UpsertPaymentMethodResponse
```

Upsert payment method

### Example

```php
<?php
require_once 'vendor/autoload.php';

use Schematic\Schematic;

$schematic = new Schematic('YOUR_SECRET_API_KEY');

$create_payment_method_request_body = new \Schematic\Model\CreatePaymentMethodRequestBody(); // \Schematic\Model\CreatePaymentMethodRequestBody

try {
    $result = $schematic->BillingApi->upsertPaymentMethod($create_payment_method_request_body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Schematic->BillingApi->upsertPaymentMethod: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **create_payment_method_request_body** | [**\Schematic\Model\CreatePaymentMethodRequestBody**](../Model/CreatePaymentMethodRequestBody.md)|  | |

### Return type

[**\Schematic\Model\UpsertPaymentMethodResponse**](../Model/UpsertPaymentMethodResponse.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
