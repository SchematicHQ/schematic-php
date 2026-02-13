# Schematic\FeaturesApi

All URIs are relative to https://api.schematichq.com, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**checkFlag()**](FeaturesApi.md#checkFlag) | **POST** /flags/{key}/check | Check flag |
| [**checkFlags()**](FeaturesApi.md#checkFlags) | **POST** /flags/check | Check flags |
| [**checkFlagsBulk()**](FeaturesApi.md#checkFlagsBulk) | **POST** /flags/check-bulk | Check flags bulk |
| [**countFeatures()**](FeaturesApi.md#countFeatures) | **GET** /features/count | Count features |
| [**countFlags()**](FeaturesApi.md#countFlags) | **GET** /flags/count | Count flags |
| [**createFeature()**](FeaturesApi.md#createFeature) | **POST** /features | Create feature |
| [**createFlag()**](FeaturesApi.md#createFlag) | **POST** /flags | Create flag |
| [**deleteFeature()**](FeaturesApi.md#deleteFeature) | **DELETE** /features/{feature_id} | Delete feature |
| [**deleteFlag()**](FeaturesApi.md#deleteFlag) | **DELETE** /flags/{flag_id} | Delete flag |
| [**getFeature()**](FeaturesApi.md#getFeature) | **GET** /features/{feature_id} | Get feature |
| [**getFlag()**](FeaturesApi.md#getFlag) | **GET** /flags/{flag_id} | Get flag |
| [**listFeatures()**](FeaturesApi.md#listFeatures) | **GET** /features | List features |
| [**listFlags()**](FeaturesApi.md#listFlags) | **GET** /flags | List flags |
| [**updateFeature()**](FeaturesApi.md#updateFeature) | **PUT** /features/{feature_id} | Update feature |
| [**updateFlag()**](FeaturesApi.md#updateFlag) | **PUT** /flags/{flag_id} | Update flag |
| [**updateFlagRules()**](FeaturesApi.md#updateFlagRules) | **PUT** /flags/{flag_id}/rules | Update flag rules |


## `checkFlag()`

```php
checkFlag($key, $check_flag_request_body): \Schematic\Model\CheckFlagResponse
```

Check flag

### Example

```php
<?php
require_once 'vendor/autoload.php';

use Schematic\Schematic;

$schematic = new Schematic('YOUR_SECRET_API_KEY');

$key = 'key_example'; // string | key
$check_flag_request_body = new \Schematic\Model\CheckFlagRequestBody(); // \Schematic\Model\CheckFlagRequestBody

try {
    $result = $schematic->FeaturesApi->checkFlag($key, $check_flag_request_body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Schematic->FeaturesApi->checkFlag: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **key** | **string**| key | |
| **check_flag_request_body** | [**\Schematic\Model\CheckFlagRequestBody**](../Model/CheckFlagRequestBody.md)|  | |

### Return type

[**\Schematic\Model\CheckFlagResponse**](../Model/CheckFlagResponse.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `checkFlags()`

```php
checkFlags($check_flag_request_body): \Schematic\Model\CheckFlagsResponse
```

Check flags

### Example

```php
<?php
require_once 'vendor/autoload.php';

use Schematic\Schematic;

$schematic = new Schematic('YOUR_SECRET_API_KEY');

$check_flag_request_body = new \Schematic\Model\CheckFlagRequestBody(); // \Schematic\Model\CheckFlagRequestBody

try {
    $result = $schematic->FeaturesApi->checkFlags($check_flag_request_body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Schematic->FeaturesApi->checkFlags: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **check_flag_request_body** | [**\Schematic\Model\CheckFlagRequestBody**](../Model/CheckFlagRequestBody.md)|  | |

### Return type

[**\Schematic\Model\CheckFlagsResponse**](../Model/CheckFlagsResponse.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `checkFlagsBulk()`

```php
checkFlagsBulk($check_flags_bulk_request_body): \Schematic\Model\CheckFlagsBulkResponse
```

Check flags bulk

### Example

```php
<?php
require_once 'vendor/autoload.php';

use Schematic\Schematic;

$schematic = new Schematic('YOUR_SECRET_API_KEY');

$check_flags_bulk_request_body = new \Schematic\Model\CheckFlagsBulkRequestBody(); // \Schematic\Model\CheckFlagsBulkRequestBody

try {
    $result = $schematic->FeaturesApi->checkFlagsBulk($check_flags_bulk_request_body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Schematic->FeaturesApi->checkFlagsBulk: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **check_flags_bulk_request_body** | [**\Schematic\Model\CheckFlagsBulkRequestBody**](../Model/CheckFlagsBulkRequestBody.md)|  | |

### Return type

[**\Schematic\Model\CheckFlagsBulkResponse**](../Model/CheckFlagsBulkResponse.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `countFeatures()`

```php
countFeatures($ids, $q, $without_company_override_for, $without_plan_entitlement_for, $feature_type, $boolean_require_event, $limit, $offset): \Schematic\Model\CountFeaturesResponse
```

Count features

### Example

```php
<?php
require_once 'vendor/autoload.php';

use Schematic\Schematic;

$schematic = new Schematic('YOUR_SECRET_API_KEY');

$ids = array('ids_example'); // string[]
$q = 'q_example'; // string | Search by feature name or ID
$without_company_override_for = 'without_company_override_for_example'; // string | Filter out features that already have a company override for the specified company ID
$without_plan_entitlement_for = 'without_plan_entitlement_for_example'; // string | Filter out features that already have a plan entitlement for the specified plan ID
$feature_type = array(new \Schematic\Model\\Schematic\Model\FeatureType()); // \Schematic\Model\FeatureType[] | Filter by one or more feature types (boolean, event, trait)
$boolean_require_event = True; // bool | Only return boolean features if there is an associated event. Automatically includes boolean in the feature types filter.
$limit = 100; // int | Page limit (default 100)
$offset = 0; // int | Page offset (default 0)

try {
    $result = $schematic->FeaturesApi->countFeatures($ids, $q, $without_company_override_for, $without_plan_entitlement_for, $feature_type, $boolean_require_event, $limit, $offset);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Schematic->FeaturesApi->countFeatures: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **ids** | [**string[]**](../Model/string.md)|  | [optional] |
| **q** | **string**| Search by feature name or ID | [optional] |
| **without_company_override_for** | **string**| Filter out features that already have a company override for the specified company ID | [optional] |
| **without_plan_entitlement_for** | **string**| Filter out features that already have a plan entitlement for the specified plan ID | [optional] |
| **feature_type** | [**\Schematic\Model\FeatureType[]**](../Model/\Schematic\Model\FeatureType.md)| Filter by one or more feature types (boolean, event, trait) | [optional] |
| **boolean_require_event** | **bool**| Only return boolean features if there is an associated event. Automatically includes boolean in the feature types filter. | [optional] |
| **limit** | **int**| Page limit (default 100) | [optional] |
| **offset** | **int**| Page offset (default 0) | [optional] |

### Return type

[**\Schematic\Model\CountFeaturesResponse**](../Model/CountFeaturesResponse.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `countFlags()`

```php
countFlags($feature_id, $ids, $q, $limit, $offset): \Schematic\Model\CountFlagsResponse
```

Count flags

### Example

```php
<?php
require_once 'vendor/autoload.php';

use Schematic\Schematic;

$schematic = new Schematic('YOUR_SECRET_API_KEY');

$feature_id = 'feature_id_example'; // string
$ids = array('ids_example'); // string[]
$q = 'q_example'; // string | Search by flag name, key, or ID
$limit = 100; // int | Page limit (default 100)
$offset = 0; // int | Page offset (default 0)

try {
    $result = $schematic->FeaturesApi->countFlags($feature_id, $ids, $q, $limit, $offset);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Schematic->FeaturesApi->countFlags: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **feature_id** | **string**|  | [optional] |
| **ids** | [**string[]**](../Model/string.md)|  | [optional] |
| **q** | **string**| Search by flag name, key, or ID | [optional] |
| **limit** | **int**| Page limit (default 100) | [optional] |
| **offset** | **int**| Page offset (default 0) | [optional] |

### Return type

[**\Schematic\Model\CountFlagsResponse**](../Model/CountFlagsResponse.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createFeature()`

```php
createFeature($create_feature_request_body): \Schematic\Model\CreateFeatureResponse
```

Create feature

### Example

```php
<?php
require_once 'vendor/autoload.php';

use Schematic\Schematic;

$schematic = new Schematic('YOUR_SECRET_API_KEY');

$create_feature_request_body = new \Schematic\Model\CreateFeatureRequestBody(); // \Schematic\Model\CreateFeatureRequestBody

try {
    $result = $schematic->FeaturesApi->createFeature($create_feature_request_body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Schematic->FeaturesApi->createFeature: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **create_feature_request_body** | [**\Schematic\Model\CreateFeatureRequestBody**](../Model/CreateFeatureRequestBody.md)|  | |

### Return type

[**\Schematic\Model\CreateFeatureResponse**](../Model/CreateFeatureResponse.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createFlag()`

```php
createFlag($create_flag_request_body): \Schematic\Model\CreateFlagResponse
```

Create flag

### Example

```php
<?php
require_once 'vendor/autoload.php';

use Schematic\Schematic;

$schematic = new Schematic('YOUR_SECRET_API_KEY');

$create_flag_request_body = new \Schematic\Model\CreateFlagRequestBody(); // \Schematic\Model\CreateFlagRequestBody

try {
    $result = $schematic->FeaturesApi->createFlag($create_flag_request_body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Schematic->FeaturesApi->createFlag: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **create_flag_request_body** | [**\Schematic\Model\CreateFlagRequestBody**](../Model/CreateFlagRequestBody.md)|  | |

### Return type

[**\Schematic\Model\CreateFlagResponse**](../Model/CreateFlagResponse.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteFeature()`

```php
deleteFeature($feature_id): \Schematic\Model\DeleteFeatureResponse
```

Delete feature

### Example

```php
<?php
require_once 'vendor/autoload.php';

use Schematic\Schematic;

$schematic = new Schematic('YOUR_SECRET_API_KEY');

$feature_id = 'feature_id_example'; // string | feature_id

try {
    $result = $schematic->FeaturesApi->deleteFeature($feature_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Schematic->FeaturesApi->deleteFeature: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **feature_id** | **string**| feature_id | |

### Return type

[**\Schematic\Model\DeleteFeatureResponse**](../Model/DeleteFeatureResponse.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteFlag()`

```php
deleteFlag($flag_id): \Schematic\Model\DeleteFlagResponse
```

Delete flag

### Example

```php
<?php
require_once 'vendor/autoload.php';

use Schematic\Schematic;

$schematic = new Schematic('YOUR_SECRET_API_KEY');

$flag_id = 'flag_id_example'; // string | flag_id

try {
    $result = $schematic->FeaturesApi->deleteFlag($flag_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Schematic->FeaturesApi->deleteFlag: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **flag_id** | **string**| flag_id | |

### Return type

[**\Schematic\Model\DeleteFlagResponse**](../Model/DeleteFlagResponse.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getFeature()`

```php
getFeature($feature_id): \Schematic\Model\GetFeatureResponse
```

Get feature

### Example

```php
<?php
require_once 'vendor/autoload.php';

use Schematic\Schematic;

$schematic = new Schematic('YOUR_SECRET_API_KEY');

$feature_id = 'feature_id_example'; // string | feature_id

try {
    $result = $schematic->FeaturesApi->getFeature($feature_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Schematic->FeaturesApi->getFeature: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **feature_id** | **string**| feature_id | |

### Return type

[**\Schematic\Model\GetFeatureResponse**](../Model/GetFeatureResponse.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getFlag()`

```php
getFlag($flag_id): \Schematic\Model\GetFlagResponse
```

Get flag

### Example

```php
<?php
require_once 'vendor/autoload.php';

use Schematic\Schematic;

$schematic = new Schematic('YOUR_SECRET_API_KEY');

$flag_id = 'flag_id_example'; // string | flag_id

try {
    $result = $schematic->FeaturesApi->getFlag($flag_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Schematic->FeaturesApi->getFlag: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **flag_id** | **string**| flag_id | |

### Return type

[**\Schematic\Model\GetFlagResponse**](../Model/GetFlagResponse.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listFeatures()`

```php
listFeatures($ids, $q, $without_company_override_for, $without_plan_entitlement_for, $feature_type, $boolean_require_event, $limit, $offset): \Schematic\Model\ListFeaturesResponse
```

List features

### Example

```php
<?php
require_once 'vendor/autoload.php';

use Schematic\Schematic;

$schematic = new Schematic('YOUR_SECRET_API_KEY');

$ids = array('ids_example'); // string[]
$q = 'q_example'; // string | Search by feature name or ID
$without_company_override_for = 'without_company_override_for_example'; // string | Filter out features that already have a company override for the specified company ID
$without_plan_entitlement_for = 'without_plan_entitlement_for_example'; // string | Filter out features that already have a plan entitlement for the specified plan ID
$feature_type = array(new \Schematic\Model\\Schematic\Model\FeatureType()); // \Schematic\Model\FeatureType[] | Filter by one or more feature types (boolean, event, trait)
$boolean_require_event = True; // bool | Only return boolean features if there is an associated event. Automatically includes boolean in the feature types filter.
$limit = 100; // int | Page limit (default 100)
$offset = 0; // int | Page offset (default 0)

try {
    $result = $schematic->FeaturesApi->listFeatures($ids, $q, $without_company_override_for, $without_plan_entitlement_for, $feature_type, $boolean_require_event, $limit, $offset);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Schematic->FeaturesApi->listFeatures: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **ids** | [**string[]**](../Model/string.md)|  | [optional] |
| **q** | **string**| Search by feature name or ID | [optional] |
| **without_company_override_for** | **string**| Filter out features that already have a company override for the specified company ID | [optional] |
| **without_plan_entitlement_for** | **string**| Filter out features that already have a plan entitlement for the specified plan ID | [optional] |
| **feature_type** | [**\Schematic\Model\FeatureType[]**](../Model/\Schematic\Model\FeatureType.md)| Filter by one or more feature types (boolean, event, trait) | [optional] |
| **boolean_require_event** | **bool**| Only return boolean features if there is an associated event. Automatically includes boolean in the feature types filter. | [optional] |
| **limit** | **int**| Page limit (default 100) | [optional] |
| **offset** | **int**| Page offset (default 0) | [optional] |

### Return type

[**\Schematic\Model\ListFeaturesResponse**](../Model/ListFeaturesResponse.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listFlags()`

```php
listFlags($feature_id, $ids, $q, $limit, $offset): \Schematic\Model\ListFlagsResponse
```

List flags

### Example

```php
<?php
require_once 'vendor/autoload.php';

use Schematic\Schematic;

$schematic = new Schematic('YOUR_SECRET_API_KEY');

$feature_id = 'feature_id_example'; // string
$ids = array('ids_example'); // string[]
$q = 'q_example'; // string | Search by flag name, key, or ID
$limit = 100; // int | Page limit (default 100)
$offset = 0; // int | Page offset (default 0)

try {
    $result = $schematic->FeaturesApi->listFlags($feature_id, $ids, $q, $limit, $offset);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Schematic->FeaturesApi->listFlags: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **feature_id** | **string**|  | [optional] |
| **ids** | [**string[]**](../Model/string.md)|  | [optional] |
| **q** | **string**| Search by flag name, key, or ID | [optional] |
| **limit** | **int**| Page limit (default 100) | [optional] |
| **offset** | **int**| Page offset (default 0) | [optional] |

### Return type

[**\Schematic\Model\ListFlagsResponse**](../Model/ListFlagsResponse.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateFeature()`

```php
updateFeature($feature_id, $update_feature_request_body): \Schematic\Model\UpdateFeatureResponse
```

Update feature

### Example

```php
<?php
require_once 'vendor/autoload.php';

use Schematic\Schematic;

$schematic = new Schematic('YOUR_SECRET_API_KEY');

$feature_id = 'feature_id_example'; // string | feature_id
$update_feature_request_body = new \Schematic\Model\UpdateFeatureRequestBody(); // \Schematic\Model\UpdateFeatureRequestBody

try {
    $result = $schematic->FeaturesApi->updateFeature($feature_id, $update_feature_request_body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Schematic->FeaturesApi->updateFeature: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **feature_id** | **string**| feature_id | |
| **update_feature_request_body** | [**\Schematic\Model\UpdateFeatureRequestBody**](../Model/UpdateFeatureRequestBody.md)|  | |

### Return type

[**\Schematic\Model\UpdateFeatureResponse**](../Model/UpdateFeatureResponse.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateFlag()`

```php
updateFlag($flag_id, $create_flag_request_body): \Schematic\Model\UpdateFlagResponse
```

Update flag

### Example

```php
<?php
require_once 'vendor/autoload.php';

use Schematic\Schematic;

$schematic = new Schematic('YOUR_SECRET_API_KEY');

$flag_id = 'flag_id_example'; // string | flag_id
$create_flag_request_body = new \Schematic\Model\CreateFlagRequestBody(); // \Schematic\Model\CreateFlagRequestBody

try {
    $result = $schematic->FeaturesApi->updateFlag($flag_id, $create_flag_request_body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Schematic->FeaturesApi->updateFlag: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **flag_id** | **string**| flag_id | |
| **create_flag_request_body** | [**\Schematic\Model\CreateFlagRequestBody**](../Model/CreateFlagRequestBody.md)|  | |

### Return type

[**\Schematic\Model\UpdateFlagResponse**](../Model/UpdateFlagResponse.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateFlagRules()`

```php
updateFlagRules($flag_id, $update_flag_rules_request_body): \Schematic\Model\UpdateFlagRulesResponse
```

Update flag rules

### Example

```php
<?php
require_once 'vendor/autoload.php';

use Schematic\Schematic;

$schematic = new Schematic('YOUR_SECRET_API_KEY');

$flag_id = 'flag_id_example'; // string | flag_id
$update_flag_rules_request_body = new \Schematic\Model\UpdateFlagRulesRequestBody(); // \Schematic\Model\UpdateFlagRulesRequestBody

try {
    $result = $schematic->FeaturesApi->updateFlagRules($flag_id, $update_flag_rules_request_body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Schematic->FeaturesApi->updateFlagRules: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **flag_id** | **string**| flag_id | |
| **update_flag_rules_request_body** | [**\Schematic\Model\UpdateFlagRulesRequestBody**](../Model/UpdateFlagRulesRequestBody.md)|  | |

### Return type

[**\Schematic\Model\UpdateFlagRulesResponse**](../Model/UpdateFlagRulesResponse.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
