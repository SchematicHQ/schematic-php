# Schematic\CrmApi

All URIs are relative to https://api.schematichq.com, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**listCrmProducts()**](CrmApi.md#listCrmProducts) | **GET** /crm/products | List crm products |
| [**upsertCrmDeal()**](CrmApi.md#upsertCrmDeal) | **POST** /crm/deals/upsert | Upsert crm deal |
| [**upsertCrmProduct()**](CrmApi.md#upsertCrmProduct) | **POST** /crm/products/upsert | Upsert crm product |
| [**upsertDealLineItemAssociation()**](CrmApi.md#upsertDealLineItemAssociation) | **POST** /crm/associations/deal-line-item | Upsert deal line item association |
| [**upsertLineItem()**](CrmApi.md#upsertLineItem) | **POST** /crm/deal-line-item/upsert | Upsert line item |


## `listCrmProducts()`

```php
listCrmProducts($ids, $name, $limit, $offset): \Schematic\Model\ListCrmProductsResponse
```

List crm products

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
    $result = $schematic->CrmApi->listCrmProducts($ids, $name, $limit, $offset);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Schematic->CrmApi->listCrmProducts: ', $e->getMessage(), PHP_EOL;
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

[**\Schematic\Model\ListCrmProductsResponse**](../Model/ListCrmProductsResponse.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `upsertCrmDeal()`

```php
upsertCrmDeal($create_crm_deal_request_body): \Schematic\Model\UpsertCrmDealResponse
```

Upsert crm deal

### Example

```php
<?php
require_once 'vendor/autoload.php';

use Schematic\Schematic;

$schematic = new Schematic('YOUR_SECRET_API_KEY');

$create_crm_deal_request_body = new \Schematic\Model\CreateCrmDealRequestBody(); // \Schematic\Model\CreateCrmDealRequestBody

try {
    $result = $schematic->CrmApi->upsertCrmDeal($create_crm_deal_request_body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Schematic->CrmApi->upsertCrmDeal: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **create_crm_deal_request_body** | [**\Schematic\Model\CreateCrmDealRequestBody**](../Model/CreateCrmDealRequestBody.md)|  | |

### Return type

[**\Schematic\Model\UpsertCrmDealResponse**](../Model/UpsertCrmDealResponse.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `upsertCrmProduct()`

```php
upsertCrmProduct($create_crm_product_request_body): \Schematic\Model\UpsertCrmProductResponse
```

Upsert crm product

### Example

```php
<?php
require_once 'vendor/autoload.php';

use Schematic\Schematic;

$schematic = new Schematic('YOUR_SECRET_API_KEY');

$create_crm_product_request_body = new \Schematic\Model\CreateCrmProductRequestBody(); // \Schematic\Model\CreateCrmProductRequestBody

try {
    $result = $schematic->CrmApi->upsertCrmProduct($create_crm_product_request_body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Schematic->CrmApi->upsertCrmProduct: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **create_crm_product_request_body** | [**\Schematic\Model\CreateCrmProductRequestBody**](../Model/CreateCrmProductRequestBody.md)|  | |

### Return type

[**\Schematic\Model\UpsertCrmProductResponse**](../Model/UpsertCrmProductResponse.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `upsertDealLineItemAssociation()`

```php
upsertDealLineItemAssociation($create_crm_deal_line_item_association_request_body): \Schematic\Model\UpsertDealLineItemAssociationResponse
```

Upsert deal line item association

### Example

```php
<?php
require_once 'vendor/autoload.php';

use Schematic\Schematic;

$schematic = new Schematic('YOUR_SECRET_API_KEY');

$create_crm_deal_line_item_association_request_body = new \Schematic\Model\CreateCrmDealLineItemAssociationRequestBody(); // \Schematic\Model\CreateCrmDealLineItemAssociationRequestBody

try {
    $result = $schematic->CrmApi->upsertDealLineItemAssociation($create_crm_deal_line_item_association_request_body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Schematic->CrmApi->upsertDealLineItemAssociation: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **create_crm_deal_line_item_association_request_body** | [**\Schematic\Model\CreateCrmDealLineItemAssociationRequestBody**](../Model/CreateCrmDealLineItemAssociationRequestBody.md)|  | |

### Return type

[**\Schematic\Model\UpsertDealLineItemAssociationResponse**](../Model/UpsertDealLineItemAssociationResponse.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `upsertLineItem()`

```php
upsertLineItem($create_crm_line_item_request_body): \Schematic\Model\UpsertLineItemResponse
```

Upsert line item

### Example

```php
<?php
require_once 'vendor/autoload.php';

use Schematic\Schematic;

$schematic = new Schematic('YOUR_SECRET_API_KEY');

$create_crm_line_item_request_body = new \Schematic\Model\CreateCrmLineItemRequestBody(); // \Schematic\Model\CreateCrmLineItemRequestBody

try {
    $result = $schematic->CrmApi->upsertLineItem($create_crm_line_item_request_body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Schematic->CrmApi->upsertLineItem: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **create_crm_line_item_request_body** | [**\Schematic\Model\CreateCrmLineItemRequestBody**](../Model/CreateCrmLineItemRequestBody.md)|  | |

### Return type

[**\Schematic\Model\UpsertLineItemResponse**](../Model/UpsertLineItemResponse.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
