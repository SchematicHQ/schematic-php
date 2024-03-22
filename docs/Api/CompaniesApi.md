# Schematic\CompaniesApi

All URIs are relative to https://api.schematichq.com, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createCompany()**](CompaniesApi.md#createCompany) | **POST** /companies | Create company |
| [**createCompanyMembership()**](CompaniesApi.md#createCompanyMembership) | **POST** /company-memberships | Create company membership |
| [**createCompanyTrait()**](CompaniesApi.md#createCompanyTrait) | **POST** /company-traits | Create company trait |
| [**createEntityTraitDefinition()**](CompaniesApi.md#createEntityTraitDefinition) | **POST** /entity-trait-definitions | Create entity trait definition |
| [**createUser()**](CompaniesApi.md#createUser) | **POST** /users | Create user |
| [**createUserTrait()**](CompaniesApi.md#createUserTrait) | **POST** /user-traits | Create user trait |
| [**deleteCompany()**](CompaniesApi.md#deleteCompany) | **DELETE** /companies/{company_id} | Delete company |
| [**deleteCompanyMembership()**](CompaniesApi.md#deleteCompanyMembership) | **DELETE** /company-memberships/{company_membership_id} | Delete company membership |
| [**deleteUser()**](CompaniesApi.md#deleteUser) | **DELETE** /users/{user_id} | Delete user |
| [**getCompany()**](CompaniesApi.md#getCompany) | **GET** /companies/{company_id} | Get company |
| [**getUser()**](CompaniesApi.md#getUser) | **GET** /users/{user_id} | Get user |
| [**listCompanies()**](CompaniesApi.md#listCompanies) | **GET** /companies | List companies |
| [**listCompanyMemberships()**](CompaniesApi.md#listCompanyMemberships) | **GET** /company-memberships | List company memberships |
| [**listCompanyPlans()**](CompaniesApi.md#listCompanyPlans) | **GET** /company-plans | List company plans |
| [**listUsers()**](CompaniesApi.md#listUsers) | **GET** /users | List users |
| [**lookupCompany()**](CompaniesApi.md#lookupCompany) | **GET** /companies/lookup | Lookup company |
| [**lookupUser()**](CompaniesApi.md#lookupUser) | **GET** /users/lookup | Lookup user |
| [**updateEntityTraitDefinition()**](CompaniesApi.md#updateEntityTraitDefinition) | **PUT** /entity-trait-definitions/{entity_trait_definition_id} | Update entity trait definition |


## `createCompany()`

```php
createCompany($upsert_company_request_body): \Schematic\Model\CreateCompanyResponse
```

Create company

### Example

```php
<?php
require_once 'vendor/autoload.php';

use Schematic\Schematic;

$schematic = new Schematic('YOUR_SECRET_API_KEY');

$upsert_company_request_body = new \Schematic\Model\UpsertCompanyRequestBody(); // \Schematic\Model\UpsertCompanyRequestBody

try {
    $result = $schematic->CompaniesApi->createCompany($upsert_company_request_body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Schematic->CompaniesApi->createCompany: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **upsert_company_request_body** | [**\Schematic\Model\UpsertCompanyRequestBody**](../Model/UpsertCompanyRequestBody.md)|  | |

### Return type

[**\Schematic\Model\CreateCompanyResponse**](../Model/CreateCompanyResponse.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createCompanyMembership()`

```php
createCompanyMembership($get_or_create_company_membership_request_body): \Schematic\Model\CreateCompanyMembershipResponse
```

Create company membership

### Example

```php
<?php
require_once 'vendor/autoload.php';

use Schematic\Schematic;

$schematic = new Schematic('YOUR_SECRET_API_KEY');

$get_or_create_company_membership_request_body = new \Schematic\Model\GetOrCreateCompanyMembershipRequestBody(); // \Schematic\Model\GetOrCreateCompanyMembershipRequestBody

try {
    $result = $schematic->CompaniesApi->createCompanyMembership($get_or_create_company_membership_request_body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Schematic->CompaniesApi->createCompanyMembership: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **get_or_create_company_membership_request_body** | [**\Schematic\Model\GetOrCreateCompanyMembershipRequestBody**](../Model/GetOrCreateCompanyMembershipRequestBody.md)|  | |

### Return type

[**\Schematic\Model\CreateCompanyMembershipResponse**](../Model/CreateCompanyMembershipResponse.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createCompanyTrait()`

```php
createCompanyTrait($upsert_trait_request_body): \Schematic\Model\CreateCompanyTraitResponse
```

Create company trait

### Example

```php
<?php
require_once 'vendor/autoload.php';

use Schematic\Schematic;

$schematic = new Schematic('YOUR_SECRET_API_KEY');

$upsert_trait_request_body = new \Schematic\Model\UpsertTraitRequestBody(); // \Schematic\Model\UpsertTraitRequestBody

try {
    $result = $schematic->CompaniesApi->createCompanyTrait($upsert_trait_request_body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Schematic->CompaniesApi->createCompanyTrait: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **upsert_trait_request_body** | [**\Schematic\Model\UpsertTraitRequestBody**](../Model/UpsertTraitRequestBody.md)|  | |

### Return type

[**\Schematic\Model\CreateCompanyTraitResponse**](../Model/CreateCompanyTraitResponse.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createEntityTraitDefinition()`

```php
createEntityTraitDefinition($create_entity_trait_definition_request_body): \Schematic\Model\CreateEntityTraitDefinitionResponse
```

Create entity trait definition

### Example

```php
<?php
require_once 'vendor/autoload.php';

use Schematic\Schematic;

$schematic = new Schematic('YOUR_SECRET_API_KEY');

$create_entity_trait_definition_request_body = new \Schematic\Model\CreateEntityTraitDefinitionRequestBody(); // \Schematic\Model\CreateEntityTraitDefinitionRequestBody

try {
    $result = $schematic->CompaniesApi->createEntityTraitDefinition($create_entity_trait_definition_request_body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Schematic->CompaniesApi->createEntityTraitDefinition: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **create_entity_trait_definition_request_body** | [**\Schematic\Model\CreateEntityTraitDefinitionRequestBody**](../Model/CreateEntityTraitDefinitionRequestBody.md)|  | |

### Return type

[**\Schematic\Model\CreateEntityTraitDefinitionResponse**](../Model/CreateEntityTraitDefinitionResponse.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createUser()`

```php
createUser($upsert_user_request_body): \Schematic\Model\CreateUserResponse
```

Create user

### Example

```php
<?php
require_once 'vendor/autoload.php';

use Schematic\Schematic;

$schematic = new Schematic('YOUR_SECRET_API_KEY');

$upsert_user_request_body = new \Schematic\Model\UpsertUserRequestBody(); // \Schematic\Model\UpsertUserRequestBody

try {
    $result = $schematic->CompaniesApi->createUser($upsert_user_request_body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Schematic->CompaniesApi->createUser: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **upsert_user_request_body** | [**\Schematic\Model\UpsertUserRequestBody**](../Model/UpsertUserRequestBody.md)|  | |

### Return type

[**\Schematic\Model\CreateUserResponse**](../Model/CreateUserResponse.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createUserTrait()`

```php
createUserTrait($upsert_trait_request_body): \Schematic\Model\CreateUserTraitResponse
```

Create user trait

### Example

```php
<?php
require_once 'vendor/autoload.php';

use Schematic\Schematic;

$schematic = new Schematic('YOUR_SECRET_API_KEY');

$upsert_trait_request_body = new \Schematic\Model\UpsertTraitRequestBody(); // \Schematic\Model\UpsertTraitRequestBody

try {
    $result = $schematic->CompaniesApi->createUserTrait($upsert_trait_request_body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Schematic->CompaniesApi->createUserTrait: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **upsert_trait_request_body** | [**\Schematic\Model\UpsertTraitRequestBody**](../Model/UpsertTraitRequestBody.md)|  | |

### Return type

[**\Schematic\Model\CreateUserTraitResponse**](../Model/CreateUserTraitResponse.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteCompany()`

```php
deleteCompany($company_id): \Schematic\Model\DeleteCompanyResponse
```

Delete company

### Example

```php
<?php
require_once 'vendor/autoload.php';

use Schematic\Schematic;

$schematic = new Schematic('YOUR_SECRET_API_KEY');

$company_id = 'company_id_example'; // string | company_id

try {
    $result = $schematic->CompaniesApi->deleteCompany($company_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Schematic->CompaniesApi->deleteCompany: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **company_id** | **string**| company_id | |

### Return type

[**\Schematic\Model\DeleteCompanyResponse**](../Model/DeleteCompanyResponse.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteCompanyMembership()`

```php
deleteCompanyMembership($company_membership_id): \Schematic\Model\DeleteCompanyMembershipResponse
```

Delete company membership

### Example

```php
<?php
require_once 'vendor/autoload.php';

use Schematic\Schematic;

$schematic = new Schematic('YOUR_SECRET_API_KEY');

$company_membership_id = 'company_membership_id_example'; // string | company_membership_id

try {
    $result = $schematic->CompaniesApi->deleteCompanyMembership($company_membership_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Schematic->CompaniesApi->deleteCompanyMembership: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **company_membership_id** | **string**| company_membership_id | |

### Return type

[**\Schematic\Model\DeleteCompanyMembershipResponse**](../Model/DeleteCompanyMembershipResponse.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteUser()`

```php
deleteUser($user_id): \Schematic\Model\DeleteUserResponse
```

Delete user

### Example

```php
<?php
require_once 'vendor/autoload.php';

use Schematic\Schematic;

$schematic = new Schematic('YOUR_SECRET_API_KEY');

$user_id = 'user_id_example'; // string | user_id

try {
    $result = $schematic->CompaniesApi->deleteUser($user_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Schematic->CompaniesApi->deleteUser: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **user_id** | **string**| user_id | |

### Return type

[**\Schematic\Model\DeleteUserResponse**](../Model/DeleteUserResponse.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getCompany()`

```php
getCompany($company_id): \Schematic\Model\GetCompanyResponse
```

Get company

### Example

```php
<?php
require_once 'vendor/autoload.php';

use Schematic\Schematic;

$schematic = new Schematic('YOUR_SECRET_API_KEY');

$company_id = 'company_id_example'; // string | company_id

try {
    $result = $schematic->CompaniesApi->getCompany($company_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Schematic->CompaniesApi->getCompany: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **company_id** | **string**| company_id | |

### Return type

[**\Schematic\Model\GetCompanyResponse**](../Model/GetCompanyResponse.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getUser()`

```php
getUser($user_id): \Schematic\Model\GetUserResponse
```

Get user

### Example

```php
<?php
require_once 'vendor/autoload.php';

use Schematic\Schematic;

$schematic = new Schematic('YOUR_SECRET_API_KEY');

$user_id = 'user_id_example'; // string | user_id

try {
    $result = $schematic->CompaniesApi->getUser($user_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Schematic->CompaniesApi->getUser: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **user_id** | **string**| user_id | |

### Return type

[**\Schematic\Model\GetUserResponse**](../Model/GetUserResponse.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listCompanies()`

```php
listCompanies($ids, $limit, $offset): \Schematic\Model\ListCompaniesResponse
```

List companies

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
    $result = $schematic->CompaniesApi->listCompanies($ids, $limit, $offset);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Schematic->CompaniesApi->listCompanies: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **ids** | [**string[]**](../Model/string.md)|  | [optional] |
| **limit** | **int**| Page limit (default 100) | [optional] |
| **offset** | **int**| Page offset (default 0) | [optional] |

### Return type

[**\Schematic\Model\ListCompaniesResponse**](../Model/ListCompaniesResponse.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listCompanyMemberships()`

```php
listCompanyMemberships($company_id, $user_id, $limit, $offset): \Schematic\Model\ListCompanyMembershipsResponse
```

List company memberships

### Example

```php
<?php
require_once 'vendor/autoload.php';

use Schematic\Schematic;

$schematic = new Schematic('YOUR_SECRET_API_KEY');

$company_id = 'company_id_example'; // string
$user_id = 'user_id_example'; // string
$limit = 100; // int | Page limit (default 100)
$offset = 0; // int | Page offset (default 0)

try {
    $result = $schematic->CompaniesApi->listCompanyMemberships($company_id, $user_id, $limit, $offset);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Schematic->CompaniesApi->listCompanyMemberships: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **company_id** | **string**|  | [optional] |
| **user_id** | **string**|  | [optional] |
| **limit** | **int**| Page limit (default 100) | [optional] |
| **offset** | **int**| Page offset (default 0) | [optional] |

### Return type

[**\Schematic\Model\ListCompanyMembershipsResponse**](../Model/ListCompanyMembershipsResponse.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listCompanyPlans()`

```php
listCompanyPlans($company_id, $plan_id, $limit, $offset): \Schematic\Model\ListCompanyPlansResponse
```

List company plans

### Example

```php
<?php
require_once 'vendor/autoload.php';

use Schematic\Schematic;

$schematic = new Schematic('YOUR_SECRET_API_KEY');

$company_id = 'company_id_example'; // string
$plan_id = 'plan_id_example'; // string
$limit = 100; // int | Page limit (default 100)
$offset = 0; // int | Page offset (default 0)

try {
    $result = $schematic->CompaniesApi->listCompanyPlans($company_id, $plan_id, $limit, $offset);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Schematic->CompaniesApi->listCompanyPlans: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **company_id** | **string**|  | [optional] |
| **plan_id** | **string**|  | [optional] |
| **limit** | **int**| Page limit (default 100) | [optional] |
| **offset** | **int**| Page offset (default 0) | [optional] |

### Return type

[**\Schematic\Model\ListCompanyPlansResponse**](../Model/ListCompanyPlansResponse.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listUsers()`

```php
listUsers($ids, $limit, $offset): \Schematic\Model\ListUsersResponse
```

List users

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
    $result = $schematic->CompaniesApi->listUsers($ids, $limit, $offset);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Schematic->CompaniesApi->listUsers: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **ids** | [**string[]**](../Model/string.md)|  | [optional] |
| **limit** | **int**| Page limit (default 100) | [optional] |
| **offset** | **int**| Page offset (default 0) | [optional] |

### Return type

[**\Schematic\Model\ListUsersResponse**](../Model/ListUsersResponse.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `lookupCompany()`

```php
lookupCompany($keys): \Schematic\Model\LookupCompanyResponse
```

Lookup company

### Example

```php
<?php
require_once 'vendor/autoload.php';

use Schematic\Schematic;

$schematic = new Schematic('YOUR_SECRET_API_KEY');

$keys = array('key' => new \stdClass); // object | Key/value pairs

try {
    $result = $schematic->CompaniesApi->lookupCompany($keys);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Schematic->CompaniesApi->lookupCompany: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **keys** | [**object**](../Model/.md)| Key/value pairs | |

### Return type

[**\Schematic\Model\LookupCompanyResponse**](../Model/LookupCompanyResponse.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `lookupUser()`

```php
lookupUser($keys): \Schematic\Model\LookupUserResponse
```

Lookup user

### Example

```php
<?php
require_once 'vendor/autoload.php';

use Schematic\Schematic;

$schematic = new Schematic('YOUR_SECRET_API_KEY');

$keys = array('key' => new \stdClass); // object | Key/value pairs

try {
    $result = $schematic->CompaniesApi->lookupUser($keys);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Schematic->CompaniesApi->lookupUser: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **keys** | [**object**](../Model/.md)| Key/value pairs | |

### Return type

[**\Schematic\Model\LookupUserResponse**](../Model/LookupUserResponse.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateEntityTraitDefinition()`

```php
updateEntityTraitDefinition($entity_trait_definition_id, $update_entity_trait_definition_request_body): \Schematic\Model\UpdateEntityTraitDefinitionResponse
```

Update entity trait definition

### Example

```php
<?php
require_once 'vendor/autoload.php';

use Schematic\Schematic;

$schematic = new Schematic('YOUR_SECRET_API_KEY');

$entity_trait_definition_id = 'entity_trait_definition_id_example'; // string | entity_trait_definition_id
$update_entity_trait_definition_request_body = new \Schematic\Model\UpdateEntityTraitDefinitionRequestBody(); // \Schematic\Model\UpdateEntityTraitDefinitionRequestBody

try {
    $result = $schematic->CompaniesApi->updateEntityTraitDefinition($entity_trait_definition_id, $update_entity_trait_definition_request_body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Schematic->CompaniesApi->updateEntityTraitDefinition: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **entity_trait_definition_id** | **string**| entity_trait_definition_id | |
| **update_entity_trait_definition_request_body** | [**\Schematic\Model\UpdateEntityTraitDefinitionRequestBody**](../Model/UpdateEntityTraitDefinitionRequestBody.md)|  | |

### Return type

[**\Schematic\Model\UpdateEntityTraitDefinitionResponse**](../Model/UpdateEntityTraitDefinitionResponse.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
