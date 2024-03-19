# Schematic\EventsApi

All URIs are relative to https://api.schematichq.com, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**countEventTypes()**](EventsApi.md#countEventTypes) | **GET** /event-types/count | Count event types |
| [**countEvents()**](EventsApi.md#countEvents) | **GET** /events/count | Count events |
| [**createEvent()**](EventsApi.md#createEvent) | **POST** /events | Create event |
| [**getEvent()**](EventsApi.md#getEvent) | **GET** /events/{event_id} | Get event |
| [**getEventType()**](EventsApi.md#getEventType) | **GET** /event-types/{key} | Get event type |
| [**listEventTypes()**](EventsApi.md#listEventTypes) | **GET** /event-types | List event types |
| [**listEvents()**](EventsApi.md#listEvents) | **GET** /events | List events |
| [**listMetricCounts()**](EventsApi.md#listMetricCounts) | **GET** /metric-counts | List metric counts |
| [**listMetricCountsHourly()**](EventsApi.md#listMetricCountsHourly) | **GET** /metric-counts-hourly | List metric counts hourly |


## `countEventTypes()`

```php
countEventTypes($q, $limit, $offset): \Schematic\Model\CountEventTypesResponse
```

Count event types

### Example

```php
<?php
require_once 'vendor/autoload.php';

use Schematic\Schematic;

$schematic = new Schematic('YOUR_SECRET_API_KEY');

$q = 'q_example'; // string
$limit = 56; // int | Page limit (default 100)
$offset = 56; // int | Page offset (default 0)

try {
    $result = $schematic->EventsApi->countEventTypes($q, $limit, $offset);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Schematic->EventsApi->countEventTypes: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **q** | **string**|  | [optional] |
| **limit** | **int**| Page limit (default 100) | [optional] |
| **offset** | **int**| Page offset (default 0) | [optional] |

### Return type

[**\Schematic\Model\CountEventTypesResponse**](../Model/CountEventTypesResponse.md)

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
$limit = 56; // int | Page limit (default 100)
$offset = 56; // int | Page offset (default 0)

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

## `getEventType()`

```php
getEventType($key): \Schematic\Model\GetEventTypeResponse
```

Get event type

### Example

```php
<?php
require_once 'vendor/autoload.php';

use Schematic\Schematic;

$schematic = new Schematic('YOUR_SECRET_API_KEY');

$key = 'key_example'; // string | key

try {
    $result = $schematic->EventsApi->getEventType($key);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Schematic->EventsApi->getEventType: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **key** | **string**| key | |

### Return type

[**\Schematic\Model\GetEventTypeResponse**](../Model/GetEventTypeResponse.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listEventTypes()`

```php
listEventTypes($q, $limit, $offset): \Schematic\Model\ListEventTypesResponse
```

List event types

### Example

```php
<?php
require_once 'vendor/autoload.php';

use Schematic\Schematic;

$schematic = new Schematic('YOUR_SECRET_API_KEY');

$q = 'q_example'; // string
$limit = 56; // int | Page limit (default 100)
$offset = 56; // int | Page offset (default 0)

try {
    $result = $schematic->EventsApi->listEventTypes($q, $limit, $offset);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Schematic->EventsApi->listEventTypes: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **q** | **string**|  | [optional] |
| **limit** | **int**| Page limit (default 100) | [optional] |
| **offset** | **int**| Page offset (default 0) | [optional] |

### Return type

[**\Schematic\Model\ListEventTypesResponse**](../Model/ListEventTypesResponse.md)

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
$limit = 56; // int | Page limit (default 100)
$offset = 56; // int | Page offset (default 0)

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
$limit = 56; // int | Page limit (default 100)
$offset = 56; // int | Page offset (default 0)
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

## `listMetricCountsHourly()`

```php
listMetricCountsHourly($start_time, $end_time, $event_subtype, $event_subtypes, $company_id, $company_ids, $user_id, $limit, $offset): \Schematic\Model\ListMetricCountsHourlyResponse
```

List metric counts hourly

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
$limit = 56; // int | Page limit (default 100)
$offset = 56; // int | Page offset (default 0)

try {
    $result = $schematic->EventsApi->listMetricCountsHourly($start_time, $end_time, $event_subtype, $event_subtypes, $company_id, $company_ids, $user_id, $limit, $offset);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Schematic->EventsApi->listMetricCountsHourly: ', $e->getMessage(), PHP_EOL;
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

### Return type

[**\Schematic\Model\ListMetricCountsHourlyResponse**](../Model/ListMetricCountsHourlyResponse.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
