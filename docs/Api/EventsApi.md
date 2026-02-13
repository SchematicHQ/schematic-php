# Schematic\EventsApi

All URIs are relative to https://api.schematichq.com, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createEvent()**](EventsApi.md#createEvent) | **POST** /events | Create event |
| [**createEventBatch()**](EventsApi.md#createEventBatch) | **POST** /event-batch | Create event batch |
| [**getEvent()**](EventsApi.md#getEvent) | **GET** /events/{event_id} | Get event |
| [**getEventSummaries()**](EventsApi.md#getEventSummaries) | **GET** /event-types | Get event summaries |
| [**getSegmentIntegrationStatus()**](EventsApi.md#getSegmentIntegrationStatus) | **GET** /segment-integration | Get segment integration status |
| [**listEvents()**](EventsApi.md#listEvents) | **GET** /events | List events |


## `createEvent()`

```php
createEvent($create_event_request_body): \Schematic\Model\CreateEventResponse
```

Create event

### Example

```php
<?php
require_once 'vendor/autoload.php';

use Schematic\Schematic;

$schematic = new Schematic('YOUR_SECRET_API_KEY');

$create_event_request_body = new \Schematic\Model\CreateEventRequestBody(); // \Schematic\Model\CreateEventRequestBody

try {
    $result = $schematic->EventsApi->createEvent($create_event_request_body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Schematic->EventsApi->createEvent: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **create_event_request_body** | [**\Schematic\Model\CreateEventRequestBody**](../Model/CreateEventRequestBody.md)|  | |

### Return type

[**\Schematic\Model\CreateEventResponse**](../Model/CreateEventResponse.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createEventBatch()`

```php
createEventBatch($create_event_batch_request_body): \Schematic\Model\CreateEventBatchResponse
```

Create event batch

### Example

```php
<?php
require_once 'vendor/autoload.php';

use Schematic\Schematic;

$schematic = new Schematic('YOUR_SECRET_API_KEY');

$create_event_batch_request_body = new \Schematic\Model\CreateEventBatchRequestBody(); // \Schematic\Model\CreateEventBatchRequestBody

try {
    $result = $schematic->EventsApi->createEventBatch($create_event_batch_request_body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Schematic->EventsApi->createEventBatch: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **create_event_batch_request_body** | [**\Schematic\Model\CreateEventBatchRequestBody**](../Model/CreateEventBatchRequestBody.md)|  | |

### Return type

[**\Schematic\Model\CreateEventBatchResponse**](../Model/CreateEventBatchResponse.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getEvent()`

```php
getEvent($event_id): \Schematic\Model\GetEventResponse
```

Get event

### Example

```php
<?php
require_once 'vendor/autoload.php';

use Schematic\Schematic;

$schematic = new Schematic('YOUR_SECRET_API_KEY');

$event_id = 'event_id_example'; // string | event_id

try {
    $result = $schematic->EventsApi->getEvent($event_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Schematic->EventsApi->getEvent: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **event_id** | **string**| event_id | |

### Return type

[**\Schematic\Model\GetEventResponse**](../Model/GetEventResponse.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getEventSummaries()`

```php
getEventSummaries($q, $event_subtypes, $limit, $offset): \Schematic\Model\GetEventSummariesResponse
```

Get event summaries

### Example

```php
<?php
require_once 'vendor/autoload.php';

use Schematic\Schematic;

$schematic = new Schematic('YOUR_SECRET_API_KEY');

$q = 'q_example'; // string
$event_subtypes = array('event_subtypes_example'); // string[]
$limit = 100; // int | Page limit (default 100)
$offset = 0; // int | Page offset (default 0)

try {
    $result = $schematic->EventsApi->getEventSummaries($q, $event_subtypes, $limit, $offset);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Schematic->EventsApi->getEventSummaries: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **q** | **string**|  | [optional] |
| **event_subtypes** | [**string[]**](../Model/string.md)|  | [optional] |
| **limit** | **int**| Page limit (default 100) | [optional] |
| **offset** | **int**| Page offset (default 0) | [optional] |

### Return type

[**\Schematic\Model\GetEventSummariesResponse**](../Model/GetEventSummariesResponse.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getSegmentIntegrationStatus()`

```php
getSegmentIntegrationStatus(): \Schematic\Model\GetSegmentIntegrationStatusResponse
```

Get segment integration status

### Example

```php
<?php
require_once 'vendor/autoload.php';

use Schematic\Schematic;

$schematic = new Schematic('YOUR_SECRET_API_KEY');


try {
    $result = $schematic->EventsApi->getSegmentIntegrationStatus();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Schematic->EventsApi->getSegmentIntegrationStatus: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\Schematic\Model\GetSegmentIntegrationStatusResponse**](../Model/GetSegmentIntegrationStatusResponse.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listEvents()`

```php
listEvents($company_id, $event_subtype, $event_types, $flag_id, $user_id, $limit, $offset): \Schematic\Model\ListEventsResponse
```

List events

### Example

```php
<?php
require_once 'vendor/autoload.php';

use Schematic\Schematic;

$schematic = new Schematic('YOUR_SECRET_API_KEY');

$company_id = 'company_id_example'; // string
$event_subtype = 'event_subtype_example'; // string
$event_types = array(new \Schematic\Model\\Schematic\Model\EventType()); // \Schematic\Model\EventType[]
$flag_id = 'flag_id_example'; // string
$user_id = 'user_id_example'; // string
$limit = 100; // int | Page limit (default 100)
$offset = 0; // int | Page offset (default 0)

try {
    $result = $schematic->EventsApi->listEvents($company_id, $event_subtype, $event_types, $flag_id, $user_id, $limit, $offset);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Schematic->EventsApi->listEvents: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **company_id** | **string**|  | [optional] |
| **event_subtype** | **string**|  | [optional] |
| **event_types** | [**\Schematic\Model\EventType[]**](../Model/\Schematic\Model\EventType.md)|  | [optional] |
| **flag_id** | **string**|  | [optional] |
| **user_id** | **string**|  | [optional] |
| **limit** | **int**| Page limit (default 100) | [optional] |
| **offset** | **int**| Page offset (default 0) | [optional] |

### Return type

[**\Schematic\Model\ListEventsResponse**](../Model/ListEventsResponse.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
