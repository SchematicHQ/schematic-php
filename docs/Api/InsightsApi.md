# Schematic\InsightsApi

All URIs are relative to https://api.schematichq.com, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getActivity()**](InsightsApi.md#getActivity) | **GET** /insights/activity | Get activity |
| [**getEnvironmentFeatureUsageTimeSeries()**](InsightsApi.md#getEnvironmentFeatureUsageTimeSeries) | **GET** /insights/feature-usage-timeseries | Get environment feature usage time series |
| [**getEnvironmentTraitUsageTimeSeries()**](InsightsApi.md#getEnvironmentTraitUsageTimeSeries) | **GET** /insights/trait-usage-timeseries | Get environment trait usage time series |
| [**getPlanGrowth()**](InsightsApi.md#getPlanGrowth) | **GET** /insights/plan-growth | Get plan growth |
| [**getSummary()**](InsightsApi.md#getSummary) | **GET** /insights/summary | Get summary |
| [**getTopFeaturesByUsage()**](InsightsApi.md#getTopFeaturesByUsage) | **GET** /insights/top-features | Get top features by usage |


## `getActivity()`

```php
getActivity($limit): \Schematic\Model\GetActivityResponse
```

Get activity

### Example

```php
<?php
require_once 'vendor/autoload.php';

use Schematic\Schematic;

$schematic = new Schematic('YOUR_SECRET_API_KEY');

$limit = 56; // int

try {
    $result = $schematic->InsightsApi->getActivity($limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Schematic->InsightsApi->getActivity: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **limit** | **int**|  | [optional] |

### Return type

[**\Schematic\Model\GetActivityResponse**](../Model/GetActivityResponse.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getEnvironmentFeatureUsageTimeSeries()`

```php
getEnvironmentFeatureUsageTimeSeries($end_time, $feature_id, $start_time, $granularity): \Schematic\Model\GetEnvironmentFeatureUsageTimeSeriesResponse
```

Get environment feature usage time series

### Example

```php
<?php
require_once 'vendor/autoload.php';

use Schematic\Schematic;

$schematic = new Schematic('YOUR_SECRET_API_KEY');

$end_time = new \DateTime('2013-10-20T19:20:30+01:00'); // \DateTime
$feature_id = 'feature_id_example'; // string
$start_time = new \DateTime('2013-10-20T19:20:30+01:00'); // \DateTime
$granularity = new \Schematic\Model\\Schematic\Model\TimeSeriesGranularity(); // \Schematic\Model\TimeSeriesGranularity

try {
    $result = $schematic->InsightsApi->getEnvironmentFeatureUsageTimeSeries($end_time, $feature_id, $start_time, $granularity);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Schematic->InsightsApi->getEnvironmentFeatureUsageTimeSeries: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **end_time** | **\DateTime**|  | |
| **feature_id** | **string**|  | |
| **start_time** | **\DateTime**|  | |
| **granularity** | [**\Schematic\Model\TimeSeriesGranularity**](../Model/.md)|  | [optional] |

### Return type

[**\Schematic\Model\GetEnvironmentFeatureUsageTimeSeriesResponse**](../Model/GetEnvironmentFeatureUsageTimeSeriesResponse.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getEnvironmentTraitUsageTimeSeries()`

```php
getEnvironmentTraitUsageTimeSeries($end_time, $feature_id, $start_time, $granularity): \Schematic\Model\GetEnvironmentTraitUsageTimeSeriesResponse
```

Get environment trait usage time series

### Example

```php
<?php
require_once 'vendor/autoload.php';

use Schematic\Schematic;

$schematic = new Schematic('YOUR_SECRET_API_KEY');

$end_time = new \DateTime('2013-10-20T19:20:30+01:00'); // \DateTime
$feature_id = 'feature_id_example'; // string
$start_time = new \DateTime('2013-10-20T19:20:30+01:00'); // \DateTime
$granularity = new \Schematic\Model\\Schematic\Model\TimeSeriesGranularity(); // \Schematic\Model\TimeSeriesGranularity

try {
    $result = $schematic->InsightsApi->getEnvironmentTraitUsageTimeSeries($end_time, $feature_id, $start_time, $granularity);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Schematic->InsightsApi->getEnvironmentTraitUsageTimeSeries: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **end_time** | **\DateTime**|  | |
| **feature_id** | **string**|  | |
| **start_time** | **\DateTime**|  | |
| **granularity** | [**\Schematic\Model\TimeSeriesGranularity**](../Model/.md)|  | [optional] |

### Return type

[**\Schematic\Model\GetEnvironmentTraitUsageTimeSeriesResponse**](../Model/GetEnvironmentTraitUsageTimeSeriesResponse.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getPlanGrowth()`

```php
getPlanGrowth($months): \Schematic\Model\GetPlanGrowthResponse
```

Get plan growth

### Example

```php
<?php
require_once 'vendor/autoload.php';

use Schematic\Schematic;

$schematic = new Schematic('YOUR_SECRET_API_KEY');

$months = 56; // int

try {
    $result = $schematic->InsightsApi->getPlanGrowth($months);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Schematic->InsightsApi->getPlanGrowth: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **months** | **int**|  | [optional] |

### Return type

[**\Schematic\Model\GetPlanGrowthResponse**](../Model/GetPlanGrowthResponse.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getSummary()`

```php
getSummary(): \Schematic\Model\GetSummaryResponse
```

Get summary

### Example

```php
<?php
require_once 'vendor/autoload.php';

use Schematic\Schematic;

$schematic = new Schematic('YOUR_SECRET_API_KEY');


try {
    $result = $schematic->InsightsApi->getSummary();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Schematic->InsightsApi->getSummary: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\Schematic\Model\GetSummaryResponse**](../Model/GetSummaryResponse.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getTopFeaturesByUsage()`

```php
getTopFeaturesByUsage($end_time, $start_time, $limit): \Schematic\Model\GetTopFeaturesByUsageResponse
```

Get top features by usage

### Example

```php
<?php
require_once 'vendor/autoload.php';

use Schematic\Schematic;

$schematic = new Schematic('YOUR_SECRET_API_KEY');

$end_time = new \DateTime('2013-10-20T19:20:30+01:00'); // \DateTime
$start_time = new \DateTime('2013-10-20T19:20:30+01:00'); // \DateTime
$limit = 56; // int

try {
    $result = $schematic->InsightsApi->getTopFeaturesByUsage($end_time, $start_time, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Schematic->InsightsApi->getTopFeaturesByUsage: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **end_time** | **\DateTime**|  | |
| **start_time** | **\DateTime**|  | |
| **limit** | **int**|  | [optional] |

### Return type

[**\Schematic\Model\GetTopFeaturesByUsageResponse**](../Model/GetTopFeaturesByUsageResponse.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
