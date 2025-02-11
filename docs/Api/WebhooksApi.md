# Schematic\WebhooksApi

All URIs are relative to https://api.schematichq.com, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**countWebhookEvents()**](WebhooksApi.md#countWebhookEvents) | **GET** /webhook-events/count | Count webhook events |
| [**countWebhooks()**](WebhooksApi.md#countWebhooks) | **GET** /webhooks/count | Count webhooks |
| [**createWebhook()**](WebhooksApi.md#createWebhook) | **POST** /webhooks | Create webhook |
| [**deleteWebhook()**](WebhooksApi.md#deleteWebhook) | **DELETE** /webhooks/{webhook_id} | Delete webhook |
| [**getWebhook()**](WebhooksApi.md#getWebhook) | **GET** /webhooks/{webhook_id} | Get webhook |
| [**getWebhookEvent()**](WebhooksApi.md#getWebhookEvent) | **GET** /webhook-events/{webhook_event_id} | Get webhook event |
| [**listWebhookEvents()**](WebhooksApi.md#listWebhookEvents) | **GET** /webhook-events | List webhook events |
| [**listWebhooks()**](WebhooksApi.md#listWebhooks) | **GET** /webhooks | List webhooks |
| [**updateWebhook()**](WebhooksApi.md#updateWebhook) | **PUT** /webhooks/{webhook_id} | Update webhook |


## `countWebhookEvents()`

```php
countWebhookEvents($ids, $q, $webhook_id, $limit, $offset): \Schematic\Model\CountWebhookEventsResponse
```

Count webhook events

### Example

```php
<?php
require_once 'vendor/autoload.php';

use Schematic\Schematic;

$schematic = new Schematic('YOUR_SECRET_API_KEY');

$ids = array('ids_example'); // string[]
$q = 'q_example'; // string
$webhook_id = 'webhook_id_example'; // string
$limit = 100; // int | Page limit (default 100)
$offset = 0; // int | Page offset (default 0)

try {
    $result = $schematic->WebhooksApi->countWebhookEvents($ids, $q, $webhook_id, $limit, $offset);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Schematic->WebhooksApi->countWebhookEvents: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **ids** | [**string[]**](../Model/string.md)|  | [optional] |
| **q** | **string**|  | [optional] |
| **webhook_id** | **string**|  | [optional] |
| **limit** | **int**| Page limit (default 100) | [optional] |
| **offset** | **int**| Page offset (default 0) | [optional] |

### Return type

[**\Schematic\Model\CountWebhookEventsResponse**](../Model/CountWebhookEventsResponse.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `countWebhooks()`

```php
countWebhooks($q, $limit, $offset): \Schematic\Model\CountWebhooksResponse
```

Count webhooks

### Example

```php
<?php
require_once 'vendor/autoload.php';

use Schematic\Schematic;

$schematic = new Schematic('YOUR_SECRET_API_KEY');

$q = 'q_example'; // string
$limit = 100; // int | Page limit (default 100)
$offset = 0; // int | Page offset (default 0)

try {
    $result = $schematic->WebhooksApi->countWebhooks($q, $limit, $offset);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Schematic->WebhooksApi->countWebhooks: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **q** | **string**|  | [optional] |
| **limit** | **int**| Page limit (default 100) | [optional] |
| **offset** | **int**| Page offset (default 0) | [optional] |

### Return type

[**\Schematic\Model\CountWebhooksResponse**](../Model/CountWebhooksResponse.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createWebhook()`

```php
createWebhook($create_webhook_request_body): \Schematic\Model\CreateWebhookResponse
```

Create webhook

### Example

```php
<?php
require_once 'vendor/autoload.php';

use Schematic\Schematic;

$schematic = new Schematic('YOUR_SECRET_API_KEY');

$create_webhook_request_body = new \Schematic\Model\CreateWebhookRequestBody(); // \Schematic\Model\CreateWebhookRequestBody

try {
    $result = $schematic->WebhooksApi->createWebhook($create_webhook_request_body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Schematic->WebhooksApi->createWebhook: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **create_webhook_request_body** | [**\Schematic\Model\CreateWebhookRequestBody**](../Model/CreateWebhookRequestBody.md)|  | |

### Return type

[**\Schematic\Model\CreateWebhookResponse**](../Model/CreateWebhookResponse.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteWebhook()`

```php
deleteWebhook($webhook_id): \Schematic\Model\DeleteWebhookResponse
```

Delete webhook

### Example

```php
<?php
require_once 'vendor/autoload.php';

use Schematic\Schematic;

$schematic = new Schematic('YOUR_SECRET_API_KEY');

$webhook_id = 'webhook_id_example'; // string | webhook_id

try {
    $result = $schematic->WebhooksApi->deleteWebhook($webhook_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Schematic->WebhooksApi->deleteWebhook: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **webhook_id** | **string**| webhook_id | |

### Return type

[**\Schematic\Model\DeleteWebhookResponse**](../Model/DeleteWebhookResponse.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getWebhook()`

```php
getWebhook($webhook_id): \Schematic\Model\GetWebhookResponse
```

Get webhook

### Example

```php
<?php
require_once 'vendor/autoload.php';

use Schematic\Schematic;

$schematic = new Schematic('YOUR_SECRET_API_KEY');

$webhook_id = 'webhook_id_example'; // string | webhook_id

try {
    $result = $schematic->WebhooksApi->getWebhook($webhook_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Schematic->WebhooksApi->getWebhook: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **webhook_id** | **string**| webhook_id | |

### Return type

[**\Schematic\Model\GetWebhookResponse**](../Model/GetWebhookResponse.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getWebhookEvent()`

```php
getWebhookEvent($webhook_event_id): \Schematic\Model\GetWebhookEventResponse
```

Get webhook event

### Example

```php
<?php
require_once 'vendor/autoload.php';

use Schematic\Schematic;

$schematic = new Schematic('YOUR_SECRET_API_KEY');

$webhook_event_id = 'webhook_event_id_example'; // string | webhook_event_id

try {
    $result = $schematic->WebhooksApi->getWebhookEvent($webhook_event_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Schematic->WebhooksApi->getWebhookEvent: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **webhook_event_id** | **string**| webhook_event_id | |

### Return type

[**\Schematic\Model\GetWebhookEventResponse**](../Model/GetWebhookEventResponse.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listWebhookEvents()`

```php
listWebhookEvents($ids, $q, $webhook_id, $limit, $offset): \Schematic\Model\ListWebhookEventsResponse
```

List webhook events

### Example

```php
<?php
require_once 'vendor/autoload.php';

use Schematic\Schematic;

$schematic = new Schematic('YOUR_SECRET_API_KEY');

$ids = array('ids_example'); // string[]
$q = 'q_example'; // string
$webhook_id = 'webhook_id_example'; // string
$limit = 100; // int | Page limit (default 100)
$offset = 0; // int | Page offset (default 0)

try {
    $result = $schematic->WebhooksApi->listWebhookEvents($ids, $q, $webhook_id, $limit, $offset);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Schematic->WebhooksApi->listWebhookEvents: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **ids** | [**string[]**](../Model/string.md)|  | [optional] |
| **q** | **string**|  | [optional] |
| **webhook_id** | **string**|  | [optional] |
| **limit** | **int**| Page limit (default 100) | [optional] |
| **offset** | **int**| Page offset (default 0) | [optional] |

### Return type

[**\Schematic\Model\ListWebhookEventsResponse**](../Model/ListWebhookEventsResponse.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listWebhooks()`

```php
listWebhooks($q, $limit, $offset): \Schematic\Model\ListWebhooksResponse
```

List webhooks

### Example

```php
<?php
require_once 'vendor/autoload.php';

use Schematic\Schematic;

$schematic = new Schematic('YOUR_SECRET_API_KEY');

$q = 'q_example'; // string
$limit = 100; // int | Page limit (default 100)
$offset = 0; // int | Page offset (default 0)

try {
    $result = $schematic->WebhooksApi->listWebhooks($q, $limit, $offset);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Schematic->WebhooksApi->listWebhooks: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **q** | **string**|  | [optional] |
| **limit** | **int**| Page limit (default 100) | [optional] |
| **offset** | **int**| Page offset (default 0) | [optional] |

### Return type

[**\Schematic\Model\ListWebhooksResponse**](../Model/ListWebhooksResponse.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateWebhook()`

```php
updateWebhook($webhook_id, $update_webhook_request_body): \Schematic\Model\UpdateWebhookResponse
```

Update webhook

### Example

```php
<?php
require_once 'vendor/autoload.php';

use Schematic\Schematic;

$schematic = new Schematic('YOUR_SECRET_API_KEY');

$webhook_id = 'webhook_id_example'; // string | webhook_id
$update_webhook_request_body = new \Schematic\Model\UpdateWebhookRequestBody(); // \Schematic\Model\UpdateWebhookRequestBody

try {
    $result = $schematic->WebhooksApi->updateWebhook($webhook_id, $update_webhook_request_body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Schematic->WebhooksApi->updateWebhook: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **webhook_id** | **string**| webhook_id | |
| **update_webhook_request_body** | [**\Schematic\Model\UpdateWebhookRequestBody**](../Model/UpdateWebhookRequestBody.md)|  | |

### Return type

[**\Schematic\Model\UpdateWebhookResponse**](../Model/UpdateWebhookResponse.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
