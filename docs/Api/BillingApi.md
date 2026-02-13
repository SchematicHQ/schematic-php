# Schematic\BillingApi

All URIs are relative to https://api.schematichq.com, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**countBillingProducts()**](BillingApi.md#countBillingProducts) | **GET** /billing/products/count | Count billing products |
| [**countCustomers()**](BillingApi.md#countCustomers) | **GET** /billing/customers/count | Count customers |
| [**deleteBillingProduct()**](BillingApi.md#deleteBillingProduct) | **DELETE** /billing/product/{billing_id} | Delete billing product |
| [**deleteProductPrice()**](BillingApi.md#deleteProductPrice) | **DELETE** /billing/product/prices/{billing_id} | Delete product price |
| [**listBillingPrices()**](BillingApi.md#listBillingPrices) | **GET** /billing/price | List billing prices |
| [**listBillingProductPrices()**](BillingApi.md#listBillingProductPrices) | **GET** /billing/product/prices | List billing product prices |
| [**listBillingProducts()**](BillingApi.md#listBillingProducts) | **GET** /billing/products | List billing products |
| [**listCoupons()**](BillingApi.md#listCoupons) | **GET** /billing/coupons | List coupons |
| [**listCustomersWithSubscriptions()**](BillingApi.md#listCustomersWithSubscriptions) | **GET** /billing/customers | List customers with subscriptions |
| [**listInvoices()**](BillingApi.md#listInvoices) | **GET** /billing/invoices | List invoices |
| [**listMeters()**](BillingApi.md#listMeters) | **GET** /billing/meter | List meters |
| [**listPaymentMethods()**](BillingApi.md#listPaymentMethods) | **GET** /billing/payment-methods | List payment methods |
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
countBillingProducts($ids, $is_active, $name, $price_usage_type, $provider_type, $q, $with_one_time_charges, $with_prices_only, $with_zero_price, $without_linked_to_plan, $limit, $offset): \Schematic\Model\CountBillingProductsResponse
```

Count billing products

### Example

```php
<?php
require_once 'vendor/autoload.php';

use Schematic\Schematic;

$schematic = new Schematic('YOUR_SECRET_API_KEY');

$ids = array('ids_example'); // string[]
$is_active = True; // bool | Filter products that are active. Defaults to true if not specified
$name = 'name_example'; // string
$price_usage_type = new \Schematic\Model\BillingPriceUsageType(); // BillingPriceUsageType
$provider_type = new \Schematic\Model\BillingProviderType(); // BillingProviderType
$q = 'q_example'; // string
$with_one_time_charges = True; // bool | Filter products that are one time charges
$with_prices_only = True; // bool | Filter products that have prices
$with_zero_price = True; // bool | Filter products that have zero price for free subscription type
$without_linked_to_plan = True; // bool | Filter products that are not linked to any plan
$limit = 100; // int | Page limit (default 100)
$offset = 0; // int | Page offset (default 0)

try {
    $result = $schematic->BillingApi->countBillingProducts($ids, $is_active, $name, $price_usage_type, $provider_type, $q, $with_one_time_charges, $with_prices_only, $with_zero_price, $without_linked_to_plan, $limit, $offset);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Schematic->BillingApi->countBillingProducts: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **ids** | [**string[]**](../Model/string.md)|  | [optional] |
| **is_active** | **bool**| Filter products that are active. Defaults to true if not specified | [optional] |
| **name** | **string**|  | [optional] |
| **price_usage_type** | [**BillingPriceUsageType**](../Model/.md)|  | [optional] |
| **provider_type** | [**BillingProviderType**](../Model/.md)|  | [optional] |
| **q** | **string**|  | [optional] |
| **with_one_time_charges** | **bool**| Filter products that are one time charges | [optional] |
| **with_prices_only** | **bool**| Filter products that have prices | [optional] |
| **with_zero_price** | **bool**| Filter products that have zero price for free subscription type | [optional] |
| **without_linked_to_plan** | **bool**| Filter products that are not linked to any plan | [optional] |
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
countCustomers($company_ids, $name, $provider_type, $q, $limit, $offset): \Schematic\Model\CountCustomersResponse
```

Count customers

### Example

```php
<?php
require_once 'vendor/autoload.php';

use Schematic\Schematic;

$schematic = new Schematic('YOUR_SECRET_API_KEY');

$company_ids = array('company_ids_example'); // string[]
$name = 'name_example'; // string
$provider_type = new \Schematic\Model\BillingProviderType(); // BillingProviderType
$q = 'q_example'; // string
$limit = 100; // int | Page limit (default 100)
$offset = 0; // int | Page offset (default 0)

try {
    $result = $schematic->BillingApi->countCustomers($company_ids, $name, $provider_type, $q, $limit, $offset);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Schematic->BillingApi->countCustomers: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **company_ids** | [**string[]**](../Model/string.md)|  | [optional] |
| **name** | **string**|  | [optional] |
| **provider_type** | [**BillingProviderType**](../Model/.md)|  | [optional] |
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

## `deleteBillingProduct()`

```php
deleteBillingProduct($billing_id): \Schematic\Model\DeleteBillingProductResponse
```

Delete billing product

### Example

```php
<?php
require_once 'vendor/autoload.php';

use Schematic\Schematic;

$schematic = new Schematic('YOUR_SECRET_API_KEY');

$billing_id = 'billing_id_example'; // string | billing_id

try {
    $result = $schematic->BillingApi->deleteBillingProduct($billing_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Schematic->BillingApi->deleteBillingProduct: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **billing_id** | **string**| billing_id | |

### Return type

[**\Schematic\Model\DeleteBillingProductResponse**](../Model/DeleteBillingProductResponse.md)

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

## `listBillingPrices()`

```php
listBillingPrices($for_initial_plan, $for_trial_expiry_plan, $ids, $interval, $is_active, $price, $product_id, $product_ids, $provider_type, $q, $tiers_mode, $usage_type, $with_meter, $limit, $offset): \Schematic\Model\ListBillingPricesResponse
```

List billing prices

### Example

```php
<?php
require_once 'vendor/autoload.php';

use Schematic\Schematic;

$schematic = new Schematic('YOUR_SECRET_API_KEY');

$for_initial_plan = True; // bool | Filter for prices valid for initial plans (free prices only)
$for_trial_expiry_plan = True; // bool | Filter for prices valid for trial expiry plans (free prices only)
$ids = array('ids_example'); // string[]
$interval = 'interval_example'; // string
$is_active = True; // bool | Filter for active prices on active products (defaults to true if not specified)
$price = 56; // int
$product_id = 'product_id_example'; // string
$product_ids = array('product_ids_example'); // string[]
$provider_type = new \Schematic\Model\BillingProviderType(); // BillingProviderType
$q = 'q_example'; // string
$tiers_mode = new \Schematic\Model\BillingTiersMode(); // BillingTiersMode
$usage_type = new \Schematic\Model\BillingPriceUsageType(); // BillingPriceUsageType
$with_meter = True; // bool | Filter for prices with a meter
$limit = 100; // int | Page limit (default 100)
$offset = 0; // int | Page offset (default 0)

try {
    $result = $schematic->BillingApi->listBillingPrices($for_initial_plan, $for_trial_expiry_plan, $ids, $interval, $is_active, $price, $product_id, $product_ids, $provider_type, $q, $tiers_mode, $usage_type, $with_meter, $limit, $offset);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Schematic->BillingApi->listBillingPrices: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **for_initial_plan** | **bool**| Filter for prices valid for initial plans (free prices only) | [optional] |
| **for_trial_expiry_plan** | **bool**| Filter for prices valid for trial expiry plans (free prices only) | [optional] |
| **ids** | [**string[]**](../Model/string.md)|  | [optional] |
| **interval** | **string**|  | [optional] |
| **is_active** | **bool**| Filter for active prices on active products (defaults to true if not specified) | [optional] |
| **price** | **int**|  | [optional] |
| **product_id** | **string**|  | [optional] |
| **product_ids** | [**string[]**](../Model/string.md)|  | [optional] |
| **provider_type** | [**BillingProviderType**](../Model/.md)|  | [optional] |
| **q** | **string**|  | [optional] |
| **tiers_mode** | [**BillingTiersMode**](../Model/.md)|  | [optional] |
| **usage_type** | [**BillingPriceUsageType**](../Model/.md)|  | [optional] |
| **with_meter** | **bool**| Filter for prices with a meter | [optional] |
| **limit** | **int**| Page limit (default 100) | [optional] |
| **offset** | **int**| Page offset (default 0) | [optional] |

### Return type

[**\Schematic\Model\ListBillingPricesResponse**](../Model/ListBillingPricesResponse.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listBillingProductPrices()`

```php
listBillingProductPrices($for_initial_plan, $for_trial_expiry_plan, $ids, $interval, $is_active, $price, $product_id, $product_ids, $provider_type, $q, $tiers_mode, $usage_type, $with_meter, $limit, $offset): \Schematic\Model\ListBillingProductPricesResponse
```

List billing product prices

### Example

```php
<?php
require_once 'vendor/autoload.php';

use Schematic\Schematic;

$schematic = new Schematic('YOUR_SECRET_API_KEY');

$for_initial_plan = True; // bool | Filter for prices valid for initial plans (free prices only)
$for_trial_expiry_plan = True; // bool | Filter for prices valid for trial expiry plans (free prices only)
$ids = array('ids_example'); // string[]
$interval = 'interval_example'; // string
$is_active = True; // bool | Filter for active prices on active products (defaults to true if not specified)
$price = 56; // int
$product_id = 'product_id_example'; // string
$product_ids = array('product_ids_example'); // string[]
$provider_type = new \Schematic\Model\BillingProviderType(); // BillingProviderType
$q = 'q_example'; // string
$tiers_mode = new \Schematic\Model\BillingTiersMode(); // BillingTiersMode
$usage_type = new \Schematic\Model\BillingPriceUsageType(); // BillingPriceUsageType
$with_meter = True; // bool | Filter for prices with a meter
$limit = 100; // int | Page limit (default 100)
$offset = 0; // int | Page offset (default 0)

try {
    $result = $schematic->BillingApi->listBillingProductPrices($for_initial_plan, $for_trial_expiry_plan, $ids, $interval, $is_active, $price, $product_id, $product_ids, $provider_type, $q, $tiers_mode, $usage_type, $with_meter, $limit, $offset);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Schematic->BillingApi->listBillingProductPrices: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **for_initial_plan** | **bool**| Filter for prices valid for initial plans (free prices only) | [optional] |
| **for_trial_expiry_plan** | **bool**| Filter for prices valid for trial expiry plans (free prices only) | [optional] |
| **ids** | [**string[]**](../Model/string.md)|  | [optional] |
| **interval** | **string**|  | [optional] |
| **is_active** | **bool**| Filter for active prices on active products (defaults to true if not specified) | [optional] |
| **price** | **int**|  | [optional] |
| **product_id** | **string**|  | [optional] |
| **product_ids** | [**string[]**](../Model/string.md)|  | [optional] |
| **provider_type** | [**BillingProviderType**](../Model/.md)|  | [optional] |
| **q** | **string**|  | [optional] |
| **tiers_mode** | [**BillingTiersMode**](../Model/.md)|  | [optional] |
| **usage_type** | [**BillingPriceUsageType**](../Model/.md)|  | [optional] |
| **with_meter** | **bool**| Filter for prices with a meter | [optional] |
| **limit** | **int**| Page limit (default 100) | [optional] |
| **offset** | **int**| Page offset (default 0) | [optional] |

### Return type

[**\Schematic\Model\ListBillingProductPricesResponse**](../Model/ListBillingProductPricesResponse.md)

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
listBillingProducts($ids, $is_active, $name, $price_usage_type, $provider_type, $q, $with_one_time_charges, $with_prices_only, $with_zero_price, $without_linked_to_plan, $limit, $offset): \Schematic\Model\ListBillingProductsResponse
```

List billing products

### Example

```php
<?php
require_once 'vendor/autoload.php';

use Schematic\Schematic;

$schematic = new Schematic('YOUR_SECRET_API_KEY');

$ids = array('ids_example'); // string[]
$is_active = True; // bool | Filter products that are active. Defaults to true if not specified
$name = 'name_example'; // string
$price_usage_type = new \Schematic\Model\BillingPriceUsageType(); // BillingPriceUsageType
$provider_type = new \Schematic\Model\BillingProviderType(); // BillingProviderType
$q = 'q_example'; // string
$with_one_time_charges = True; // bool | Filter products that are one time charges
$with_prices_only = True; // bool | Filter products that have prices
$with_zero_price = True; // bool | Filter products that have zero price for free subscription type
$without_linked_to_plan = True; // bool | Filter products that are not linked to any plan
$limit = 100; // int | Page limit (default 100)
$offset = 0; // int | Page offset (default 0)

try {
    $result = $schematic->BillingApi->listBillingProducts($ids, $is_active, $name, $price_usage_type, $provider_type, $q, $with_one_time_charges, $with_prices_only, $with_zero_price, $without_linked_to_plan, $limit, $offset);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Schematic->BillingApi->listBillingProducts: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **ids** | [**string[]**](../Model/string.md)|  | [optional] |
| **is_active** | **bool**| Filter products that are active. Defaults to true if not specified | [optional] |
| **name** | **string**|  | [optional] |
| **price_usage_type** | [**BillingPriceUsageType**](../Model/.md)|  | [optional] |
| **provider_type** | [**BillingProviderType**](../Model/.md)|  | [optional] |
| **q** | **string**|  | [optional] |
| **with_one_time_charges** | **bool**| Filter products that are one time charges | [optional] |
| **with_prices_only** | **bool**| Filter products that have prices | [optional] |
| **with_zero_price** | **bool**| Filter products that have zero price for free subscription type | [optional] |
| **without_linked_to_plan** | **bool**| Filter products that are not linked to any plan | [optional] |
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

## `listCoupons()`

```php
listCoupons($is_active, $q, $limit, $offset): \Schematic\Model\ListCouponsResponse
```

List coupons

### Example

```php
<?php
require_once 'vendor/autoload.php';

use Schematic\Schematic;

$schematic = new Schematic('YOUR_SECRET_API_KEY');

$is_active = True; // bool
$q = 'q_example'; // string
$limit = 100; // int | Page limit (default 100)
$offset = 0; // int | Page offset (default 0)

try {
    $result = $schematic->BillingApi->listCoupons($is_active, $q, $limit, $offset);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Schematic->BillingApi->listCoupons: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **is_active** | **bool**|  | [optional] |
| **q** | **string**|  | [optional] |
| **limit** | **int**| Page limit (default 100) | [optional] |
| **offset** | **int**| Page offset (default 0) | [optional] |

### Return type

[**\Schematic\Model\ListCouponsResponse**](../Model/ListCouponsResponse.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listCustomersWithSubscriptions()`

```php
listCustomersWithSubscriptions($company_ids, $name, $provider_type, $q, $limit, $offset): \Schematic\Model\ListCustomersWithSubscriptionsResponse
```

List customers with subscriptions

### Example

```php
<?php
require_once 'vendor/autoload.php';

use Schematic\Schematic;

$schematic = new Schematic('YOUR_SECRET_API_KEY');

$company_ids = array('company_ids_example'); // string[]
$name = 'name_example'; // string
$provider_type = new \Schematic\Model\BillingProviderType(); // BillingProviderType
$q = 'q_example'; // string
$limit = 100; // int | Page limit (default 100)
$offset = 0; // int | Page offset (default 0)

try {
    $result = $schematic->BillingApi->listCustomersWithSubscriptions($company_ids, $name, $provider_type, $q, $limit, $offset);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Schematic->BillingApi->listCustomersWithSubscriptions: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **company_ids** | [**string[]**](../Model/string.md)|  | [optional] |
| **name** | **string**|  | [optional] |
| **provider_type** | [**BillingProviderType**](../Model/.md)|  | [optional] |
| **q** | **string**|  | [optional] |
| **limit** | **int**| Page limit (default 100) | [optional] |
| **offset** | **int**| Page offset (default 0) | [optional] |

### Return type

[**\Schematic\Model\ListCustomersWithSubscriptionsResponse**](../Model/ListCustomersWithSubscriptionsResponse.md)

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
listInvoices($customer_external_id, $subscription_external_id, $company_id, $limit, $offset): \Schematic\Model\ListInvoicesResponse
```

List invoices

### Example

```php
<?php
require_once 'vendor/autoload.php';

use Schematic\Schematic;

$schematic = new Schematic('YOUR_SECRET_API_KEY');

$customer_external_id = 'customer_external_id_example'; // string
$subscription_external_id = 'subscription_external_id_example'; // string
$company_id = 'company_id_example'; // string
$limit = 100; // int | Page limit (default 100)
$offset = 0; // int | Page offset (default 0)

try {
    $result = $schematic->BillingApi->listInvoices($customer_external_id, $subscription_external_id, $company_id, $limit, $offset);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Schematic->BillingApi->listInvoices: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **customer_external_id** | **string**|  | |
| **subscription_external_id** | **string**|  | |
| **company_id** | **string**|  | [optional] |
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
listPaymentMethods($customer_external_id, $company_id, $limit, $offset): \Schematic\Model\ListPaymentMethodsResponse
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
$limit = 100; // int | Page limit (default 100)
$offset = 0; // int | Page offset (default 0)

try {
    $result = $schematic->BillingApi->listPaymentMethods($customer_external_id, $company_id, $limit, $offset);
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
upsertBillingSubscription($create_billing_subscription_request_body): \Schematic\Model\UpsertBillingSubscriptionResponse
```

Upsert billing subscription

### Example

```php
<?php
require_once 'vendor/autoload.php';

use Schematic\Schematic;

$schematic = new Schematic('YOUR_SECRET_API_KEY');

$create_billing_subscription_request_body = new \Schematic\Model\CreateBillingSubscriptionRequestBody(); // \Schematic\Model\CreateBillingSubscriptionRequestBody

try {
    $result = $schematic->BillingApi->upsertBillingSubscription($create_billing_subscription_request_body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Schematic->BillingApi->upsertBillingSubscription: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **create_billing_subscription_request_body** | [**\Schematic\Model\CreateBillingSubscriptionRequestBody**](../Model/CreateBillingSubscriptionRequestBody.md)|  | |

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
