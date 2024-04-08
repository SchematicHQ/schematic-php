# Schematic\EventsApi

All URIs are relative to https://api.schematichq.com, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**countEventSummaries()**](EventsApi.md#countEventSummaries) | **GET** /event-types/count | Count event summaries |
| [**countEvents()**](EventsApi.md#countEvents) | **GET** /events/count | Count events |
| [**createEvent()**](EventsApi.md#createEvent) | **POST** /events | Create event |
| [**createEventBatch()**](EventsApi.md#createEventBatch) | **POST** /event-batch | Create event batch |
| [**getEvent()**](EventsApi.md#getEvent) | **GET** /events/{event_id} | Get event |
| [**getEventSummaries()**](EventsApi.md#getEventSummaries) | **GET** /event-types | Get event summaries |
| [**getEventSummaryBySubtype()**](EventsApi.md#getEventSummaryBySubtype) | **GET** /event-types/{key} | Get event summary by subtype |
| [**listEvents()**](EventsApi.md#listEvents) | **GET** /events | List events |
| [**listMetricCounts()**](EventsApi.md#listMetricCounts) | **GET** /metric-counts | List metric counts |


## `countEventSummaries()`

```php
countEventSummaries($q, $limit, $offset): \Schematic\Model\CountEventSummariesResponse
```

Count event summaries

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
    $result = $schematic->EventsApi->countEventSummaries($q, $limit, $offset);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Schematic->EventsApi->countEventSummaries: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **q** | **string**|  | [optional] |
| **limit** | **int**| Page limit (default 100) | [optional] |
| **offset** | **int**| Page offset (default 0) | [optional] |

### Return type

[**\Schematic\Model\CountEventSummariesResponse**](../Model/CountEventSummariesResponse.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `countEvents()`

```php
countEvents($company_id, $user_id, $event_subtype, $limit, $offset): \Schematic\Model\CountEventsResponse
```

Count events

### Example

```php
<?php
require_once 'vendor/autoload.php';

use Schematic\Schematic;

$schematic = new Schematic('YOUR_SECRET_API_KEY');

$company_id = 'company_id_example'; // string
$user_id = 'user_id_example'; // string
$event_subtype = 'event_subtype_example'; // string
$limit = 100; // int | Page limit (default 100)
$offset = 0; // int | Page offset (default 0)

try {
    $result = $schematic->EventsApi->countEvents($company_id, $user_id, $event_subtype, $limit, $offset);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Schematic->EventsApi->countEvents: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **company_id** | **string**|  | [optional] |
| **user_id** | **string**|  | [optional] |
| **event_subtype** | **string**|  | [optional] |
| **limit** | **int**| Page limit (default 100) | [optional] |
| **offset** | **int**| Page offset (default 0) | [optional] |

### Return type

[**\Schematic\Model\CountEventsResponse**](../Model/CountEventsResponse.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

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
getEventSummaries($q, $limit, $offset): \Schematic\Model\GetEventSummariesResponse
```

Get event summaries

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
    $result = $schematic->EventsApi->getEventSummaries($q, $limit, $offset);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Schematic->EventsApi->getEventSummaries: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **q** | **string**|  | [optional] |
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

## `getEventSummaryBySubtype()`

```php
getEventSummaryBySubtype($key): \Schematic\Model\GetEventSummaryBySubtypeResponse
```

Get event summary by subtype

### Example

```php
<?php
require_once 'vendor/autoload.php';

use Schematic\Schematic;

$schematic = new Schematic('YOUR_SECRET_API_KEY');

$key = 'key_example'; // string | key

try {
    $result = $schematic->EventsApi->getEventSummaryBySubtype($key);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Schematic->EventsApi->getEventSummaryBySubtype: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **key** | **string**| key | |

### Return type

[**\Schematic\Model\GetEventSummaryBySubtypeResponse**](../Model/GetEventSummaryBySubtypeResponse.md)

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
listEvents($company_id, $user_id, $event_subtype, $limit, $offset): \Schematic\Model\ListEventsResponse
```

List events

### Example

```php
<?php
require_once 'vendor/autoload.php';

use Schematic\Schematic;

$schematic = new Schematic('YOUR_SECRET_API_KEY');

$company_id = 'company_id_example'; // string
$user_id = 'user_id_example'; // string
$event_subtype = 'event_subtype_example'; // string
$limit = 100; // int | Page limit (default 100)
$offset = 0; // int | Page offset (default 0)

try {
    $result = $schematic->EventsApi->listEvents($company_id, $user_id, $event_subtype, $limit, $offset);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Schematic->EventsApi->listEvents: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **company_id** | **string**|  | [optional] |
| **user_id** | **string**|  | [optional] |
| **event_subtype** | **string**|  | [optional] |
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

## `listMetricCounts()`

```php
listMetricCounts($start_time, $end_time, $event_subtype, $event_subtypes, $company_id, $company_ids, $user_id, $limit, $offset, $grouping): \Schematic\Model\ListMetricCountsResponse
```

List metric counts

### Example

```php
<?php
require_once 'vendor/autoload.php';

use Schematic\Schematic;

$schematic = new Schematic('YOUR_SECRET_API_KEY');

$start_time = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime
$end_time = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime
$event_subtype = 'event_subtype_example'; // string
$event_subtypes = array('event_subtypes_example'); // string[]
$company_id = 'company_id_example'; // string
$company_ids = array('company_ids_example'); // string[]
$user_id = 'user_id_example'; // string
$limit = 100; // int | Page limit (default 100)
$offset = 0; // int | Page offset (default 0)
$grouping = 'grouping_example'; // string

try {
    $result = $schematic->EventsApi->listMetricCounts($start_time, $end_time, $event_subtype, $event_subtypes, $company_id, $company_ids, $user_id, $limit, $offset, $grouping);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Schematic->EventsApi->listMetricCounts: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **start_time** | **\DateTime**|  | [optional] |
| **end_time** | **\DateTime**|  | [optional] |
| **event_subtype** | **string**|  | [optional] |
| **event_subtypes** | [**string[]**](../Model/string.md)|  | [optional] |
| **company_id** | **string**|  | [optional] |
| **company_ids** | [**string[]**](../Model/string.md)|  | [optional] |
| **user_id** | **string**|  | [optional] |
| **limit** | **int**| Page limit (default 100) | [optional] |
| **offset** | **int**| Page offset (default 0) | [optional] |
| **grouping** | **string**|  | [optional] |

### Return type

[**\Schematic\Model\ListMetricCountsResponse**](../Model/ListMetricCountsResponse.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
