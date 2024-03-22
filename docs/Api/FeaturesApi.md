# Schematic\FeaturesApi

All URIs are relative to https://api.schematichq.com, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**checkFlag()**](FeaturesApi.md#checkFlag) | **POST** /flags/{key}/check | Check flag |
| [**checkFlags()**](FeaturesApi.md#checkFlags) | **POST** /flags/check | Check flags |
| [**countCompaniesAudience()**](FeaturesApi.md#countCompaniesAudience) | **POST** /audience/count-companies | Count Companies audience |
| [**countFlagChecks()**](FeaturesApi.md#countFlagChecks) | **GET** /flag-checks/count | Count flag checks |
| [**countUsersAudience()**](FeaturesApi.md#countUsersAudience) | **POST** /audience/count-users | Count Users audience |
| [**createFeature()**](FeaturesApi.md#createFeature) | **POST** /features | Create feature |
| [**createFlag()**](FeaturesApi.md#createFlag) | **POST** /flags | Create flag |
| [**deleteFeature()**](FeaturesApi.md#deleteFeature) | **DELETE** /features/{feature_id} | Delete feature |
| [**deleteFlag()**](FeaturesApi.md#deleteFlag) | **DELETE** /flags/{flag_id} | Delete flag |
| [**getCompaniesAudience()**](FeaturesApi.md#getCompaniesAudience) | **POST** /audience/get-companies | Get Companies audience |
| [**getFeature()**](FeaturesApi.md#getFeature) | **GET** /features/{feature_id} | Get feature |
| [**getFlag()**](FeaturesApi.md#getFlag) | **GET** /flags/{flag_id} | Get flag |
| [**getFlagCheck()**](FeaturesApi.md#getFlagCheck) | **GET** /flag-checks/{flag_check_id} | Get flag check |
| [**getUsersAudience()**](FeaturesApi.md#getUsersAudience) | **POST** /audience/get-users | Get Users audience |
| [**latestFlagChecks()**](FeaturesApi.md#latestFlagChecks) | **GET** /flag-checks/latest | Latest flag checks |
| [**listFeatures()**](FeaturesApi.md#listFeatures) | **GET** /features | List features |
| [**listFlagChecks()**](FeaturesApi.md#listFlagChecks) | **GET** /flag-checks | List flag checks |
| [**listFlags()**](FeaturesApi.md#listFlags) | **GET** /flags | List flags |
| [**rulesFlag()**](FeaturesApi.md#rulesFlag) | **PUT** /flags/{flag_id}/rules | Rules flag |
| [**updateFeature()**](FeaturesApi.md#updateFeature) | **PUT** /features/{feature_id} | Update feature |
| [**updateFlag()**](FeaturesApi.md#updateFlag) | **PUT** /flags/{flag_id} | Update flag |


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

## `countCompaniesAudience()`

```php
countCompaniesAudience($audience_request_body): \Schematic\Model\CountCompaniesAudienceResponse
```

Count Companies audience

### Example

```php
<?php
require_once 'vendor/autoload.php';

use Schematic\Schematic;

$schematic = new Schematic('YOUR_SECRET_API_KEY');

$audience_request_body = new \Schematic\Model\AudienceRequestBody(); // \Schematic\Model\AudienceRequestBody

try {
    $result = $schematic->FeaturesApi->countCompaniesAudience($audience_request_body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Schematic->FeaturesApi->countCompaniesAudience: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **audience_request_body** | [**\Schematic\Model\AudienceRequestBody**](../Model/AudienceRequestBody.md)|  | |

### Return type

[**\Schematic\Model\CountCompaniesAudienceResponse**](../Model/CountCompaniesAudienceResponse.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `countFlagChecks()`

```php
countFlagChecks($flag_id, $flag_ids, $id, $limit, $offset): \Schematic\Model\CountFlagChecksResponse
```

Count flag checks

### Example

```php
<?php
require_once 'vendor/autoload.php';

use Schematic\Schematic;

$schematic = new Schematic('YOUR_SECRET_API_KEY');

$flag_id = 'flag_id_example'; // string
$flag_ids = array('flag_ids_example'); // string[]
$id = 'id_example'; // string
$limit = 100; // int | Page limit (default 100)
$offset = 0; // int | Page offset (default 0)

try {
    $result = $schematic->FeaturesApi->countFlagChecks($flag_id, $flag_ids, $id, $limit, $offset);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Schematic->FeaturesApi->countFlagChecks: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **flag_id** | **string**|  | [optional] |
| **flag_ids** | [**string[]**](../Model/string.md)|  | [optional] |
| **id** | **string**|  | [optional] |
| **limit** | **int**| Page limit (default 100) | [optional] |
| **offset** | **int**| Page offset (default 0) | [optional] |

### Return type

[**\Schematic\Model\CountFlagChecksResponse**](../Model/CountFlagChecksResponse.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `countUsersAudience()`

```php
countUsersAudience($audience_request_body): \Schematic\Model\CountUsersAudienceResponse
```

Count Users audience

### Example

```php
<?php
require_once 'vendor/autoload.php';

use Schematic\Schematic;

$schematic = new Schematic('YOUR_SECRET_API_KEY');

$audience_request_body = new \Schematic\Model\AudienceRequestBody(); // \Schematic\Model\AudienceRequestBody

try {
    $result = $schematic->FeaturesApi->countUsersAudience($audience_request_body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Schematic->FeaturesApi->countUsersAudience: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **audience_request_body** | [**\Schematic\Model\AudienceRequestBody**](../Model/AudienceRequestBody.md)|  | |

### Return type

[**\Schematic\Model\CountUsersAudienceResponse**](../Model/CountUsersAudienceResponse.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: `application/json`
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

## `getCompaniesAudience()`

```php
getCompaniesAudience($audience_request_body): \Schematic\Model\GetCompaniesAudienceResponse
```

Get Companies audience

### Example

```php
<?php
require_once 'vendor/autoload.php';

use Schematic\Schematic;

$schematic = new Schematic('YOUR_SECRET_API_KEY');

$audience_request_body = new \Schematic\Model\AudienceRequestBody(); // \Schematic\Model\AudienceRequestBody

try {
    $result = $schematic->FeaturesApi->getCompaniesAudience($audience_request_body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Schematic->FeaturesApi->getCompaniesAudience: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **audience_request_body** | [**\Schematic\Model\AudienceRequestBody**](../Model/AudienceRequestBody.md)|  | |

### Return type

[**\Schematic\Model\GetCompaniesAudienceResponse**](../Model/GetCompaniesAudienceResponse.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: `application/json`
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

## `getFlagCheck()`

```php
getFlagCheck($flag_check_id): \Schematic\Model\GetFlagCheckResponse
```

Get flag check

### Example

```php
<?php
require_once 'vendor/autoload.php';

use Schematic\Schematic;

$schematic = new Schematic('YOUR_SECRET_API_KEY');

$flag_check_id = 'flag_check_id_example'; // string | flag_check_id

try {
    $result = $schematic->FeaturesApi->getFlagCheck($flag_check_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Schematic->FeaturesApi->getFlagCheck: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **flag_check_id** | **string**| flag_check_id | |

### Return type

[**\Schematic\Model\GetFlagCheckResponse**](../Model/GetFlagCheckResponse.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getUsersAudience()`

```php
getUsersAudience($audience_request_body): \Schematic\Model\GetUsersAudienceResponse
```

Get Users audience

### Example

```php
<?php
require_once 'vendor/autoload.php';

use Schematic\Schematic;

$schematic = new Schematic('YOUR_SECRET_API_KEY');

$audience_request_body = new \Schematic\Model\AudienceRequestBody(); // \Schematic\Model\AudienceRequestBody

try {
    $result = $schematic->FeaturesApi->getUsersAudience($audience_request_body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Schematic->FeaturesApi->getUsersAudience: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **audience_request_body** | [**\Schematic\Model\AudienceRequestBody**](../Model/AudienceRequestBody.md)|  | |

### Return type

[**\Schematic\Model\GetUsersAudienceResponse**](../Model/GetUsersAudienceResponse.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `latestFlagChecks()`

```php
latestFlagChecks($flag_id, $flag_ids, $id, $limit, $offset): \Schematic\Model\LatestFlagChecksResponse
```

Latest flag checks

### Example

```php
<?php
require_once 'vendor/autoload.php';

use Schematic\Schematic;

$schematic = new Schematic('YOUR_SECRET_API_KEY');

$flag_id = 'flag_id_example'; // string
$flag_ids = array('flag_ids_example'); // string[]
$id = 'id_example'; // string
$limit = 100; // int | Page limit (default 100)
$offset = 0; // int | Page offset (default 0)

try {
    $result = $schematic->FeaturesApi->latestFlagChecks($flag_id, $flag_ids, $id, $limit, $offset);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Schematic->FeaturesApi->latestFlagChecks: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **flag_id** | **string**|  | [optional] |
| **flag_ids** | [**string[]**](../Model/string.md)|  | [optional] |
| **id** | **string**|  | [optional] |
| **limit** | **int**| Page limit (default 100) | [optional] |
| **offset** | **int**| Page offset (default 0) | [optional] |

### Return type

[**\Schematic\Model\LatestFlagChecksResponse**](../Model/LatestFlagChecksResponse.md)

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
listFeatures($limit, $offset): \Schematic\Model\ListFeaturesResponse
```

List features

### Example

```php
<?php
require_once 'vendor/autoload.php';

use Schematic\Schematic;

$schematic = new Schematic('YOUR_SECRET_API_KEY');

$limit = 100; // int | Page limit (default 100)
$offset = 0; // int | Page offset (default 0)

try {
    $result = $schematic->FeaturesApi->listFeatures($limit, $offset);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Schematic->FeaturesApi->listFeatures: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
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

## `listFlagChecks()`

```php
listFlagChecks($flag_id, $flag_ids, $id, $limit, $offset): \Schematic\Model\ListFlagChecksResponse
```

List flag checks

### Example

```php
<?php
require_once 'vendor/autoload.php';

use Schematic\Schematic;

$schematic = new Schematic('YOUR_SECRET_API_KEY');

$flag_id = 'flag_id_example'; // string
$flag_ids = array('flag_ids_example'); // string[]
$id = 'id_example'; // string
$limit = 100; // int | Page limit (default 100)
$offset = 0; // int | Page offset (default 0)

try {
    $result = $schematic->FeaturesApi->listFlagChecks($flag_id, $flag_ids, $id, $limit, $offset);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Schematic->FeaturesApi->listFlagChecks: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **flag_id** | **string**|  | [optional] |
| **flag_ids** | [**string[]**](../Model/string.md)|  | [optional] |
| **id** | **string**|  | [optional] |
| **limit** | **int**| Page limit (default 100) | [optional] |
| **offset** | **int**| Page offset (default 0) | [optional] |

### Return type

[**\Schematic\Model\ListFlagChecksResponse**](../Model/ListFlagChecksResponse.md)

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
listFlags($feature_id, $flag_ids, $limit, $offset): \Schematic\Model\ListFlagsResponse
```

List flags

### Example

```php
<?php
require_once 'vendor/autoload.php';

use Schematic\Schematic;

$schematic = new Schematic('YOUR_SECRET_API_KEY');

$feature_id = 'feature_id_example'; // string
$flag_ids = array('flag_ids_example'); // string[]
$limit = 100; // int | Page limit (default 100)
$offset = 0; // int | Page offset (default 0)

try {
    $result = $schematic->FeaturesApi->listFlags($feature_id, $flag_ids, $limit, $offset);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Schematic->FeaturesApi->listFlags: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **feature_id** | **string**|  | [optional] |
| **flag_ids** | [**string[]**](../Model/string.md)|  | [optional] |
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

## `rulesFlag()`

```php
rulesFlag($flag_id, $update_flag_rules_request_body): \Schematic\Model\RulesFlagResponse
```

Rules flag

### Example

```php
<?php
require_once 'vendor/autoload.php';

use Schematic\Schematic;

$schematic = new Schematic('YOUR_SECRET_API_KEY');

$flag_id = 'flag_id_example'; // string | flag_id
$update_flag_rules_request_body = new \Schematic\Model\UpdateFlagRulesRequestBody(); // \Schematic\Model\UpdateFlagRulesRequestBody

try {
    $result = $schematic->FeaturesApi->rulesFlag($flag_id, $update_flag_rules_request_body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Schematic->FeaturesApi->rulesFlag: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **flag_id** | **string**| flag_id | |
| **update_flag_rules_request_body** | [**\Schematic\Model\UpdateFlagRulesRequestBody**](../Model/UpdateFlagRulesRequestBody.md)|  | |

### Return type

[**\Schematic\Model\RulesFlagResponse**](../Model/RulesFlagResponse.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: `application/json`
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
