# Schematic\AccountsApi

All URIs are relative to https://api.schematichq.com, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**countAccountMembers()**](AccountsApi.md#countAccountMembers) | **GET** /account-members/count | Count account members |
| [**countApiKeys()**](AccountsApi.md#countApiKeys) | **GET** /api-keys/count | Count api keys |
| [**countAuditLogs()**](AccountsApi.md#countAuditLogs) | **GET** /audit-log/count | Count audit logs |
| [**createApiKey()**](AccountsApi.md#createApiKey) | **POST** /api-keys | Create api key |
| [**createEnvironment()**](AccountsApi.md#createEnvironment) | **POST** /environments | Create environment |
| [**deleteApiKey()**](AccountsApi.md#deleteApiKey) | **DELETE** /api-keys/{api_key_id} | Delete api key |
| [**deleteEnvironment()**](AccountsApi.md#deleteEnvironment) | **DELETE** /environments/{environment_id} | Delete environment |
| [**getAccountMember()**](AccountsApi.md#getAccountMember) | **GET** /account-members/{account_member_id} | Get account member |
| [**getApiKey()**](AccountsApi.md#getApiKey) | **GET** /api-keys/{api_key_id} | Get api key |
| [**getAuditLog()**](AccountsApi.md#getAuditLog) | **GET** /audit-log/{audit_log_id} | Get audit log |
| [**getEnvironment()**](AccountsApi.md#getEnvironment) | **GET** /environments/{environment_id} | Get environment |
| [**getWhoAmI()**](AccountsApi.md#getWhoAmI) | **GET** /whoami | Get who am I |
| [**listAccountMembers()**](AccountsApi.md#listAccountMembers) | **GET** /account-members | List account members |
| [**listApiKeys()**](AccountsApi.md#listApiKeys) | **GET** /api-keys | List api keys |
| [**listAuditLogs()**](AccountsApi.md#listAuditLogs) | **GET** /audit-log | List audit logs |
| [**listEnvironments()**](AccountsApi.md#listEnvironments) | **GET** /environments | List environments |
| [**quickstart()**](AccountsApi.md#quickstart) | **POST** /quickstart | Quickstart |
| [**updateApiKey()**](AccountsApi.md#updateApiKey) | **PUT** /api-keys/{api_key_id} | Update api key |
| [**updateEnvironment()**](AccountsApi.md#updateEnvironment) | **PUT** /environments/{environment_id} | Update environment |


## `countAccountMembers()`

```php
countAccountMembers($ids, $q, $role, $limit, $offset): \Schematic\Model\CountAccountMembersResponse
```

Count account members

### Example

```php
<?php
require_once 'vendor/autoload.php';

use Schematic\Schematic;

$schematic = new Schematic('YOUR_SECRET_API_KEY');

$ids = array('ids_example'); // string[]
$q = 'q_example'; // string | Search filter
$role = new \Schematic\Model\\Schematic\Model\AccountMemberRole(); // \Schematic\Model\AccountMemberRole | Filter by member role
$limit = 100; // int | Page limit (default 100)
$offset = 0; // int | Page offset (default 0)

try {
    $result = $schematic->AccountsApi->countAccountMembers($ids, $q, $role, $limit, $offset);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Schematic->AccountsApi->countAccountMembers: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **ids** | [**string[]**](../Model/string.md)|  | [optional] |
| **q** | **string**| Search filter | [optional] |
| **role** | [**\Schematic\Model\AccountMemberRole**](../Model/.md)| Filter by member role | [optional] |
| **limit** | **int**| Page limit (default 100) | [optional] |
| **offset** | **int**| Page offset (default 0) | [optional] |

### Return type

[**\Schematic\Model\CountAccountMembersResponse**](../Model/CountAccountMembersResponse.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `countApiKeys()`

```php
countApiKeys($require_environment, $environment_id, $limit, $offset): \Schematic\Model\CountApiKeysResponse
```

Count api keys

### Example

```php
<?php
require_once 'vendor/autoload.php';

use Schematic\Schematic;

$schematic = new Schematic('YOUR_SECRET_API_KEY');

$require_environment = True; // bool
$environment_id = 'environment_id_example'; // string
$limit = 100; // int | Page limit (default 100)
$offset = 0; // int | Page offset (default 0)

try {
    $result = $schematic->AccountsApi->countApiKeys($require_environment, $environment_id, $limit, $offset);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Schematic->AccountsApi->countApiKeys: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **require_environment** | **bool**|  | |
| **environment_id** | **string**|  | [optional] |
| **limit** | **int**| Page limit (default 100) | [optional] |
| **offset** | **int**| Page offset (default 0) | [optional] |

### Return type

[**\Schematic\Model\CountApiKeysResponse**](../Model/CountApiKeysResponse.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `countAuditLogs()`

```php
countAuditLogs($actor_type, $end_time, $environment_id, $q, $start_time, $limit, $offset): \Schematic\Model\CountAuditLogsResponse
```

Count audit logs

### Example

```php
<?php
require_once 'vendor/autoload.php';

use Schematic\Schematic;

$schematic = new Schematic('YOUR_SECRET_API_KEY');

$actor_type = new \Schematic\Model\ActorType(); // ActorType
$end_time = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime
$environment_id = 'environment_id_example'; // string
$q = 'q_example'; // string
$start_time = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime
$limit = 100; // int | Page limit (default 100)
$offset = 0; // int | Page offset (default 0)

try {
    $result = $schematic->AccountsApi->countAuditLogs($actor_type, $end_time, $environment_id, $q, $start_time, $limit, $offset);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Schematic->AccountsApi->countAuditLogs: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **actor_type** | [**ActorType**](../Model/.md)|  | [optional] |
| **end_time** | **\DateTime**|  | [optional] |
| **environment_id** | **string**|  | [optional] |
| **q** | **string**|  | [optional] |
| **start_time** | **\DateTime**|  | [optional] |
| **limit** | **int**| Page limit (default 100) | [optional] |
| **offset** | **int**| Page offset (default 0) | [optional] |

### Return type

[**\Schematic\Model\CountAuditLogsResponse**](../Model/CountAuditLogsResponse.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createApiKey()`

```php
createApiKey($create_api_key_request_body): \Schematic\Model\CreateApiKeyResponse
```

Create api key

### Example

```php
<?php
require_once 'vendor/autoload.php';

use Schematic\Schematic;

$schematic = new Schematic('YOUR_SECRET_API_KEY');

$create_api_key_request_body = new \Schematic\Model\CreateApiKeyRequestBody(); // \Schematic\Model\CreateApiKeyRequestBody

try {
    $result = $schematic->AccountsApi->createApiKey($create_api_key_request_body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Schematic->AccountsApi->createApiKey: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **create_api_key_request_body** | [**\Schematic\Model\CreateApiKeyRequestBody**](../Model/CreateApiKeyRequestBody.md)|  | |

### Return type

[**\Schematic\Model\CreateApiKeyResponse**](../Model/CreateApiKeyResponse.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createEnvironment()`

```php
createEnvironment($create_environment_request_body): \Schematic\Model\CreateEnvironmentResponse
```

Create environment

### Example

```php
<?php
require_once 'vendor/autoload.php';

use Schematic\Schematic;

$schematic = new Schematic('YOUR_SECRET_API_KEY');

$create_environment_request_body = new \Schematic\Model\CreateEnvironmentRequestBody(); // \Schematic\Model\CreateEnvironmentRequestBody

try {
    $result = $schematic->AccountsApi->createEnvironment($create_environment_request_body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Schematic->AccountsApi->createEnvironment: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **create_environment_request_body** | [**\Schematic\Model\CreateEnvironmentRequestBody**](../Model/CreateEnvironmentRequestBody.md)|  | |

### Return type

[**\Schematic\Model\CreateEnvironmentResponse**](../Model/CreateEnvironmentResponse.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteApiKey()`

```php
deleteApiKey($api_key_id): \Schematic\Model\DeleteApiKeyResponse
```

Delete api key

### Example

```php
<?php
require_once 'vendor/autoload.php';

use Schematic\Schematic;

$schematic = new Schematic('YOUR_SECRET_API_KEY');

$api_key_id = 'api_key_id_example'; // string | api_key_id

try {
    $result = $schematic->AccountsApi->deleteApiKey($api_key_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Schematic->AccountsApi->deleteApiKey: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **api_key_id** | **string**| api_key_id | |

### Return type

[**\Schematic\Model\DeleteApiKeyResponse**](../Model/DeleteApiKeyResponse.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteEnvironment()`

```php
deleteEnvironment($environment_id): \Schematic\Model\DeleteEnvironmentResponse
```

Delete environment

### Example

```php
<?php
require_once 'vendor/autoload.php';

use Schematic\Schematic;

$schematic = new Schematic('YOUR_SECRET_API_KEY');

$environment_id = 'environment_id_example'; // string | environment_id

try {
    $result = $schematic->AccountsApi->deleteEnvironment($environment_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Schematic->AccountsApi->deleteEnvironment: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **environment_id** | **string**| environment_id | |

### Return type

[**\Schematic\Model\DeleteEnvironmentResponse**](../Model/DeleteEnvironmentResponse.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getAccountMember()`

```php
getAccountMember($account_member_id): \Schematic\Model\GetAccountMemberResponse
```

Get account member

### Example

```php
<?php
require_once 'vendor/autoload.php';

use Schematic\Schematic;

$schematic = new Schematic('YOUR_SECRET_API_KEY');

$account_member_id = 'account_member_id_example'; // string | account_member_id

try {
    $result = $schematic->AccountsApi->getAccountMember($account_member_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Schematic->AccountsApi->getAccountMember: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **account_member_id** | **string**| account_member_id | |

### Return type

[**\Schematic\Model\GetAccountMemberResponse**](../Model/GetAccountMemberResponse.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getApiKey()`

```php
getApiKey($api_key_id): \Schematic\Model\GetApiKeyResponse
```

Get api key

### Example

```php
<?php
require_once 'vendor/autoload.php';

use Schematic\Schematic;

$schematic = new Schematic('YOUR_SECRET_API_KEY');

$api_key_id = 'api_key_id_example'; // string | api_key_id

try {
    $result = $schematic->AccountsApi->getApiKey($api_key_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Schematic->AccountsApi->getApiKey: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **api_key_id** | **string**| api_key_id | |

### Return type

[**\Schematic\Model\GetApiKeyResponse**](../Model/GetApiKeyResponse.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getAuditLog()`

```php
getAuditLog($audit_log_id): \Schematic\Model\GetAuditLogResponse
```

Get audit log

### Example

```php
<?php
require_once 'vendor/autoload.php';

use Schematic\Schematic;

$schematic = new Schematic('YOUR_SECRET_API_KEY');

$audit_log_id = 'audit_log_id_example'; // string | audit_log_id

try {
    $result = $schematic->AccountsApi->getAuditLog($audit_log_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Schematic->AccountsApi->getAuditLog: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **audit_log_id** | **string**| audit_log_id | |

### Return type

[**\Schematic\Model\GetAuditLogResponse**](../Model/GetAuditLogResponse.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getEnvironment()`

```php
getEnvironment($environment_id): \Schematic\Model\GetEnvironmentResponse
```

Get environment

### Example

```php
<?php
require_once 'vendor/autoload.php';

use Schematic\Schematic;

$schematic = new Schematic('YOUR_SECRET_API_KEY');

$environment_id = 'environment_id_example'; // string | environment_id

try {
    $result = $schematic->AccountsApi->getEnvironment($environment_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Schematic->AccountsApi->getEnvironment: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **environment_id** | **string**| environment_id | |

### Return type

[**\Schematic\Model\GetEnvironmentResponse**](../Model/GetEnvironmentResponse.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getWhoAmI()`

```php
getWhoAmI(): \Schematic\Model\GetWhoAmIResponse
```

Get who am I

### Example

```php
<?php
require_once 'vendor/autoload.php';

use Schematic\Schematic;

$schematic = new Schematic('YOUR_SECRET_API_KEY');


try {
    $result = $schematic->AccountsApi->getWhoAmI();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Schematic->AccountsApi->getWhoAmI: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\Schematic\Model\GetWhoAmIResponse**](../Model/GetWhoAmIResponse.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listAccountMembers()`

```php
listAccountMembers($ids, $q, $role, $limit, $offset): \Schematic\Model\ListAccountMembersResponse
```

List account members

### Example

```php
<?php
require_once 'vendor/autoload.php';

use Schematic\Schematic;

$schematic = new Schematic('YOUR_SECRET_API_KEY');

$ids = array('ids_example'); // string[]
$q = 'q_example'; // string | Search filter
$role = new \Schematic\Model\\Schematic\Model\AccountMemberRole(); // \Schematic\Model\AccountMemberRole | Filter by member role
$limit = 100; // int | Page limit (default 100)
$offset = 0; // int | Page offset (default 0)

try {
    $result = $schematic->AccountsApi->listAccountMembers($ids, $q, $role, $limit, $offset);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Schematic->AccountsApi->listAccountMembers: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **ids** | [**string[]**](../Model/string.md)|  | [optional] |
| **q** | **string**| Search filter | [optional] |
| **role** | [**\Schematic\Model\AccountMemberRole**](../Model/.md)| Filter by member role | [optional] |
| **limit** | **int**| Page limit (default 100) | [optional] |
| **offset** | **int**| Page offset (default 0) | [optional] |

### Return type

[**\Schematic\Model\ListAccountMembersResponse**](../Model/ListAccountMembersResponse.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listApiKeys()`

```php
listApiKeys($require_environment, $environment_id, $limit, $offset): \Schematic\Model\ListApiKeysResponse
```

List api keys

### Example

```php
<?php
require_once 'vendor/autoload.php';

use Schematic\Schematic;

$schematic = new Schematic('YOUR_SECRET_API_KEY');

$require_environment = True; // bool
$environment_id = 'environment_id_example'; // string
$limit = 100; // int | Page limit (default 100)
$offset = 0; // int | Page offset (default 0)

try {
    $result = $schematic->AccountsApi->listApiKeys($require_environment, $environment_id, $limit, $offset);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Schematic->AccountsApi->listApiKeys: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **require_environment** | **bool**|  | |
| **environment_id** | **string**|  | [optional] |
| **limit** | **int**| Page limit (default 100) | [optional] |
| **offset** | **int**| Page offset (default 0) | [optional] |

### Return type

[**\Schematic\Model\ListApiKeysResponse**](../Model/ListApiKeysResponse.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listAuditLogs()`

```php
listAuditLogs($actor_type, $end_time, $environment_id, $q, $start_time, $limit, $offset): \Schematic\Model\ListAuditLogsResponse
```

List audit logs

### Example

```php
<?php
require_once 'vendor/autoload.php';

use Schematic\Schematic;

$schematic = new Schematic('YOUR_SECRET_API_KEY');

$actor_type = new \Schematic\Model\ActorType(); // ActorType
$end_time = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime
$environment_id = 'environment_id_example'; // string
$q = 'q_example'; // string
$start_time = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime
$limit = 100; // int | Page limit (default 100)
$offset = 0; // int | Page offset (default 0)

try {
    $result = $schematic->AccountsApi->listAuditLogs($actor_type, $end_time, $environment_id, $q, $start_time, $limit, $offset);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Schematic->AccountsApi->listAuditLogs: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **actor_type** | [**ActorType**](../Model/.md)|  | [optional] |
| **end_time** | **\DateTime**|  | [optional] |
| **environment_id** | **string**|  | [optional] |
| **q** | **string**|  | [optional] |
| **start_time** | **\DateTime**|  | [optional] |
| **limit** | **int**| Page limit (default 100) | [optional] |
| **offset** | **int**| Page offset (default 0) | [optional] |

### Return type

[**\Schematic\Model\ListAuditLogsResponse**](../Model/ListAuditLogsResponse.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listEnvironments()`

```php
listEnvironments($ids, $limit, $offset): \Schematic\Model\ListEnvironmentsResponse
```

List environments

### Example

```php
<?php
require_once 'vendor/autoload.php';

use Schematic\Schematic;

$schematic = new Schematic('YOUR_SECRET_API_KEY');

$ids = array('ids_example'); // string[]
$limit = 100; // int | Page limit (default 100)
$offset = 0; // int | Page offset (default 0)

try {
    $result = $schematic->AccountsApi->listEnvironments($ids, $limit, $offset);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Schematic->AccountsApi->listEnvironments: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **ids** | [**string[]**](../Model/string.md)|  | [optional] |
| **limit** | **int**| Page limit (default 100) | [optional] |
| **offset** | **int**| Page offset (default 0) | [optional] |

### Return type

[**\Schematic\Model\ListEnvironmentsResponse**](../Model/ListEnvironmentsResponse.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `quickstart()`

```php
quickstart(): \Schematic\Model\QuickstartResponse
```

Quickstart

### Example

```php
<?php
require_once 'vendor/autoload.php';

use Schematic\Schematic;

$schematic = new Schematic('YOUR_SECRET_API_KEY');


try {
    $result = $schematic->AccountsApi->quickstart();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Schematic->AccountsApi->quickstart: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\Schematic\Model\QuickstartResponse**](../Model/QuickstartResponse.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateApiKey()`

```php
updateApiKey($api_key_id, $update_api_key_request_body): \Schematic\Model\UpdateApiKeyResponse
```

Update api key

### Example

```php
<?php
require_once 'vendor/autoload.php';

use Schematic\Schematic;

$schematic = new Schematic('YOUR_SECRET_API_KEY');

$api_key_id = 'api_key_id_example'; // string | api_key_id
$update_api_key_request_body = new \Schematic\Model\UpdateApiKeyRequestBody(); // \Schematic\Model\UpdateApiKeyRequestBody

try {
    $result = $schematic->AccountsApi->updateApiKey($api_key_id, $update_api_key_request_body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Schematic->AccountsApi->updateApiKey: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **api_key_id** | **string**| api_key_id | |
| **update_api_key_request_body** | [**\Schematic\Model\UpdateApiKeyRequestBody**](../Model/UpdateApiKeyRequestBody.md)|  | |

### Return type

[**\Schematic\Model\UpdateApiKeyResponse**](../Model/UpdateApiKeyResponse.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateEnvironment()`

```php
updateEnvironment($environment_id, $update_environment_request_body): \Schematic\Model\UpdateEnvironmentResponse
```

Update environment

### Example

```php
<?php
require_once 'vendor/autoload.php';

use Schematic\Schematic;

$schematic = new Schematic('YOUR_SECRET_API_KEY');

$environment_id = 'environment_id_example'; // string | environment_id
$update_environment_request_body = new \Schematic\Model\UpdateEnvironmentRequestBody(); // \Schematic\Model\UpdateEnvironmentRequestBody

try {
    $result = $schematic->AccountsApi->updateEnvironment($environment_id, $update_environment_request_body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Schematic->AccountsApi->updateEnvironment: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **environment_id** | **string**| environment_id | |
| **update_environment_request_body** | [**\Schematic\Model\UpdateEnvironmentRequestBody**](../Model/UpdateEnvironmentRequestBody.md)|  | |

### Return type

[**\Schematic\Model\UpdateEnvironmentResponse**](../Model/UpdateEnvironmentResponse.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
