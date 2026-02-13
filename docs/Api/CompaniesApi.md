# Schematic\CompaniesApi

All URIs are relative to https://api.schematichq.com, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**countCompanies()**](CompaniesApi.md#countCompanies) | **GET** /companies/count | Count companies |
| [**countCompaniesForAdvancedFilter()**](CompaniesApi.md#countCompaniesForAdvancedFilter) | **GET** /companies/count2 | Count companies for advanced filter |
| [**countEntityKeyDefinitions()**](CompaniesApi.md#countEntityKeyDefinitions) | **GET** /entity-key-definitions/count | Count entity key definitions |
| [**countEntityTraitDefinitions()**](CompaniesApi.md#countEntityTraitDefinitions) | **GET** /entity-trait-definitions/count | Count entity trait definitions |
| [**countPlanTraits()**](CompaniesApi.md#countPlanTraits) | **GET** /plan-traits/count | Count plan traits |
| [**countUsers()**](CompaniesApi.md#countUsers) | **GET** /users/count | Count users |
| [**createCompany()**](CompaniesApi.md#createCompany) | **POST** /companies/create | Create company |
| [**createPlanTrait()**](CompaniesApi.md#createPlanTrait) | **POST** /plan-traits | Create plan trait |
| [**createUser()**](CompaniesApi.md#createUser) | **POST** /users/create | Create user |
| [**deleteCompany()**](CompaniesApi.md#deleteCompany) | **DELETE** /companies/{company_id} | Delete company |
| [**deleteCompanyByKeys()**](CompaniesApi.md#deleteCompanyByKeys) | **POST** /companies/delete | Delete company by keys |
| [**deleteCompanyMembership()**](CompaniesApi.md#deleteCompanyMembership) | **DELETE** /company-memberships/{company_membership_id} | Delete company membership |
| [**deletePlanTrait()**](CompaniesApi.md#deletePlanTrait) | **DELETE** /plan-traits/{plan_trait_id} | Delete plan trait |
| [**deleteUser()**](CompaniesApi.md#deleteUser) | **DELETE** /users/{user_id} | Delete user |
| [**deleteUserByKeys()**](CompaniesApi.md#deleteUserByKeys) | **POST** /users/delete | Delete user by keys |
| [**getActiveCompanySubscription()**](CompaniesApi.md#getActiveCompanySubscription) | **GET** /company-subscriptions | Get active company subscription |
| [**getCompany()**](CompaniesApi.md#getCompany) | **GET** /companies/{company_id} | Get company |
| [**getEntityTraitDefinition()**](CompaniesApi.md#getEntityTraitDefinition) | **GET** /entity-trait-definitions/{entity_trait_definition_id} | Get entity trait definition |
| [**getEntityTraitValues()**](CompaniesApi.md#getEntityTraitValues) | **GET** /entity-trait-values | Get entity trait values |
| [**getOrCreateCompanyMembership()**](CompaniesApi.md#getOrCreateCompanyMembership) | **POST** /company-memberships | Get or create company membership |
| [**getOrCreateEntityTraitDefinition()**](CompaniesApi.md#getOrCreateEntityTraitDefinition) | **POST** /entity-trait-definitions | Get or create entity trait definition |
| [**getPlanChange()**](CompaniesApi.md#getPlanChange) | **GET** /plan-changes/{plan_change_id} | Get plan change |
| [**getPlanTrait()**](CompaniesApi.md#getPlanTrait) | **GET** /plan-traits/{plan_trait_id} | Get plan trait |
| [**getUser()**](CompaniesApi.md#getUser) | **GET** /users/{user_id} | Get user |
| [**listCompanies()**](CompaniesApi.md#listCompanies) | **GET** /companies | List companies |
| [**listCompaniesForAdvancedFilter()**](CompaniesApi.md#listCompaniesForAdvancedFilter) | **GET** /companies/list2 | List companies for advanced filter |
| [**listCompanyMemberships()**](CompaniesApi.md#listCompanyMemberships) | **GET** /company-memberships | List company memberships |
| [**listEntityKeyDefinitions()**](CompaniesApi.md#listEntityKeyDefinitions) | **GET** /entity-key-definitions | List entity key definitions |
| [**listEntityTraitDefinitions()**](CompaniesApi.md#listEntityTraitDefinitions) | **GET** /entity-trait-definitions | List entity trait definitions |
| [**listPlanChanges()**](CompaniesApi.md#listPlanChanges) | **GET** /plan-changes | List plan changes |
| [**listPlanTraits()**](CompaniesApi.md#listPlanTraits) | **GET** /plan-traits | List plan traits |
| [**listUsers()**](CompaniesApi.md#listUsers) | **GET** /users | List users |
| [**lookupCompany()**](CompaniesApi.md#lookupCompany) | **GET** /companies/lookup | Lookup company |
| [**lookupUser()**](CompaniesApi.md#lookupUser) | **GET** /users/lookup | Lookup user |
| [**updateEntityTraitDefinition()**](CompaniesApi.md#updateEntityTraitDefinition) | **PUT** /entity-trait-definitions/{entity_trait_definition_id} | Update entity trait definition |
| [**updatePlanTrait()**](CompaniesApi.md#updatePlanTrait) | **PUT** /plan-traits/{plan_trait_id} | Update plan trait |
| [**updatePlanTraitsBulk()**](CompaniesApi.md#updatePlanTraitsBulk) | **POST** /plan-traits/bulk | Update plan traits bulk |
| [**upsertCompany()**](CompaniesApi.md#upsertCompany) | **POST** /companies | Upsert company |
| [**upsertCompanyTrait()**](CompaniesApi.md#upsertCompanyTrait) | **POST** /company-traits | Upsert company trait |
| [**upsertUser()**](CompaniesApi.md#upsertUser) | **POST** /users | Upsert user |
| [**upsertUserTrait()**](CompaniesApi.md#upsertUserTrait) | **POST** /user-traits | Upsert user trait |


## `countCompanies()`

```php
countCompanies($credit_type_ids, $ids, $monetized_subscriptions, $plan_id, $plan_ids, $q, $sort_order_column, $sort_order_direction, $subscription_statuses, $subscription_types, $without_feature_override_for, $without_plan, $without_subscription, $with_subscription, $limit, $offset): \Schematic\Model\CountCompaniesResponse
```

Count companies

### Example

```php
<?php
require_once 'vendor/autoload.php';

use Schematic\Schematic;

$schematic = new Schematic('YOUR_SECRET_API_KEY');

$credit_type_ids = array('credit_type_ids_example'); // string[] | Filter companies by one or more credit type IDs (each ID starts with bcrd_)
$ids = array('ids_example'); // string[] | Filter companies by multiple company IDs (starts with comp_)
$monetized_subscriptions = True; // bool | Filter companies that have monetized subscriptions
$plan_id = 'plan_id_example'; // string | Filter companies by plan ID (starts with plan_)
$plan_ids = array('plan_ids_example'); // string[] | Filter companies by one or more plan IDs (each ID starts with plan_)
$q = 'q_example'; // string | Search for companies by name, keys or string traits
$sort_order_column = 'sort_order_column_example'; // string | Column to sort by (e.g. name, created_at, last_seen_at)
$sort_order_direction = new \Schematic\Model\SortDirection(); // SortDirection | Direction to sort by (asc or desc)
$subscription_statuses = array(new \Schematic\Model\\Schematic\Model\SubscriptionStatus()); // \Schematic\Model\SubscriptionStatus[] | Filter companies by one or more subscription statuses
$subscription_types = array(new \Schematic\Model\\Schematic\Model\SubscriptionType()); // \Schematic\Model\SubscriptionType[] | Filter companies by one or more subscription types
$without_feature_override_for = 'without_feature_override_for_example'; // string | Filter out companies that already have a company override for the specified feature ID
$without_plan = True; // bool | Filter out companies that have a plan
$without_subscription = True; // bool | Filter out companies that have a subscription
$with_subscription = True; // bool | Filter companies that have a subscription
$limit = 100; // int | Page limit (default 100)
$offset = 0; // int | Page offset (default 0)

try {
    $result = $schematic->CompaniesApi->countCompanies($credit_type_ids, $ids, $monetized_subscriptions, $plan_id, $plan_ids, $q, $sort_order_column, $sort_order_direction, $subscription_statuses, $subscription_types, $without_feature_override_for, $without_plan, $without_subscription, $with_subscription, $limit, $offset);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Schematic->CompaniesApi->countCompanies: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **credit_type_ids** | [**string[]**](../Model/string.md)| Filter companies by one or more credit type IDs (each ID starts with bcrd_) | [optional] |
| **ids** | [**string[]**](../Model/string.md)| Filter companies by multiple company IDs (starts with comp_) | [optional] |
| **monetized_subscriptions** | **bool**| Filter companies that have monetized subscriptions | [optional] |
| **plan_id** | **string**| Filter companies by plan ID (starts with plan_) | [optional] |
| **plan_ids** | [**string[]**](../Model/string.md)| Filter companies by one or more plan IDs (each ID starts with plan_) | [optional] |
| **q** | **string**| Search for companies by name, keys or string traits | [optional] |
| **sort_order_column** | **string**| Column to sort by (e.g. name, created_at, last_seen_at) | [optional] |
| **sort_order_direction** | [**SortDirection**](../Model/.md)| Direction to sort by (asc or desc) | [optional] |
| **subscription_statuses** | [**\Schematic\Model\SubscriptionStatus[]**](../Model/\Schematic\Model\SubscriptionStatus.md)| Filter companies by one or more subscription statuses | [optional] |
| **subscription_types** | [**\Schematic\Model\SubscriptionType[]**](../Model/\Schematic\Model\SubscriptionType.md)| Filter companies by one or more subscription types | [optional] |
| **without_feature_override_for** | **string**| Filter out companies that already have a company override for the specified feature ID | [optional] |
| **without_plan** | **bool**| Filter out companies that have a plan | [optional] |
| **without_subscription** | **bool**| Filter out companies that have a subscription | [optional] |
| **with_subscription** | **bool**| Filter companies that have a subscription | [optional] |
| **limit** | **int**| Page limit (default 100) | [optional] |
| **offset** | **int**| Page offset (default 0) | [optional] |

### Return type

[**\Schematic\Model\CountCompaniesResponse**](../Model/CountCompaniesResponse.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `countCompaniesForAdvancedFilter()`

```php
countCompaniesForAdvancedFilter($ids, $plan_ids, $feature_ids, $credit_type_ids, $subscription_statuses, $subscription_types, $monetized_subscriptions, $q, $without_plan, $without_subscription, $sort_order_column, $sort_order_direction, $display_properties, $limit, $offset): \Schematic\Model\CountCompaniesForAdvancedFilterResponse
```

Count companies for advanced filter

### Example

```php
<?php
require_once 'vendor/autoload.php';

use Schematic\Schematic;

$schematic = new Schematic('YOUR_SECRET_API_KEY');

$ids = array('ids_example'); // string[] | Filter companies by multiple company IDs (starts with comp_)
$plan_ids = array('plan_ids_example'); // string[] | Filter companies by one or more plan IDs (each ID starts with plan_)
$feature_ids = array('feature_ids_example'); // string[] | Filter companies by one or more feature IDs (each ID starts with feat_)
$credit_type_ids = array('credit_type_ids_example'); // string[] | Filter companies by one or more credit type IDs (each ID starts with bcrd_)
$subscription_statuses = array(new \Schematic\Model\\Schematic\Model\SubscriptionStatus()); // \Schematic\Model\SubscriptionStatus[] | Filter companies by one or more subscription statuses (active, canceled, expired, incomplete, incomplete_expired, past_due, paused, trialing, unpaid)
$subscription_types = array(new \Schematic\Model\\Schematic\Model\SubscriptionType()); // \Schematic\Model\SubscriptionType[] | Filter companies by one or more subscription types (paid, free, trial)
$monetized_subscriptions = True; // bool | Filter companies that have monetized subscriptions
$q = 'q_example'; // string | Search for companies by name, keys or string traits
$without_plan = True; // bool | Filter out companies that have a plan
$without_subscription = True; // bool | Filter out companies that have a subscription
$sort_order_column = 'sort_order_column_example'; // string | Column to sort by (e.g. name, created_at, last_seen_at)
$sort_order_direction = new \Schematic\Model\SortDirection(); // SortDirection | Direction to sort by (asc or desc)
$display_properties = array('display_properties_example'); // string[] | Select the display columns to return (e.g. plan, subscription, users, last_seen_at)
$limit = 100; // int | Page limit (default 100)
$offset = 0; // int | Page offset (default 0)

try {
    $result = $schematic->CompaniesApi->countCompaniesForAdvancedFilter($ids, $plan_ids, $feature_ids, $credit_type_ids, $subscription_statuses, $subscription_types, $monetized_subscriptions, $q, $without_plan, $without_subscription, $sort_order_column, $sort_order_direction, $display_properties, $limit, $offset);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Schematic->CompaniesApi->countCompaniesForAdvancedFilter: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **ids** | [**string[]**](../Model/string.md)| Filter companies by multiple company IDs (starts with comp_) | [optional] |
| **plan_ids** | [**string[]**](../Model/string.md)| Filter companies by one or more plan IDs (each ID starts with plan_) | [optional] |
| **feature_ids** | [**string[]**](../Model/string.md)| Filter companies by one or more feature IDs (each ID starts with feat_) | [optional] |
| **credit_type_ids** | [**string[]**](../Model/string.md)| Filter companies by one or more credit type IDs (each ID starts with bcrd_) | [optional] |
| **subscription_statuses** | [**\Schematic\Model\SubscriptionStatus[]**](../Model/\Schematic\Model\SubscriptionStatus.md)| Filter companies by one or more subscription statuses (active, canceled, expired, incomplete, incomplete_expired, past_due, paused, trialing, unpaid) | [optional] |
| **subscription_types** | [**\Schematic\Model\SubscriptionType[]**](../Model/\Schematic\Model\SubscriptionType.md)| Filter companies by one or more subscription types (paid, free, trial) | [optional] |
| **monetized_subscriptions** | **bool**| Filter companies that have monetized subscriptions | [optional] |
| **q** | **string**| Search for companies by name, keys or string traits | [optional] |
| **without_plan** | **bool**| Filter out companies that have a plan | [optional] |
| **without_subscription** | **bool**| Filter out companies that have a subscription | [optional] |
| **sort_order_column** | **string**| Column to sort by (e.g. name, created_at, last_seen_at) | [optional] |
| **sort_order_direction** | [**SortDirection**](../Model/.md)| Direction to sort by (asc or desc) | [optional] |
| **display_properties** | [**string[]**](../Model/string.md)| Select the display columns to return (e.g. plan, subscription, users, last_seen_at) | [optional] |
| **limit** | **int**| Page limit (default 100) | [optional] |
| **offset** | **int**| Page offset (default 0) | [optional] |

### Return type

[**\Schematic\Model\CountCompaniesForAdvancedFilterResponse**](../Model/CountCompaniesForAdvancedFilterResponse.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `countEntityKeyDefinitions()`

```php
countEntityKeyDefinitions($entity_type, $ids, $q, $limit, $offset): \Schematic\Model\CountEntityKeyDefinitionsResponse
```

Count entity key definitions

### Example

```php
<?php
require_once 'vendor/autoload.php';

use Schematic\Schematic;

$schematic = new Schematic('YOUR_SECRET_API_KEY');

$entity_type = new \Schematic\Model\EntityType(); // EntityType
$ids = array('ids_example'); // string[]
$q = 'q_example'; // string
$limit = 100; // int | Page limit (default 100)
$offset = 0; // int | Page offset (default 0)

try {
    $result = $schematic->CompaniesApi->countEntityKeyDefinitions($entity_type, $ids, $q, $limit, $offset);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Schematic->CompaniesApi->countEntityKeyDefinitions: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **entity_type** | [**EntityType**](../Model/.md)|  | [optional] |
| **ids** | [**string[]**](../Model/string.md)|  | [optional] |
| **q** | **string**|  | [optional] |
| **limit** | **int**| Page limit (default 100) | [optional] |
| **offset** | **int**| Page offset (default 0) | [optional] |

### Return type

[**\Schematic\Model\CountEntityKeyDefinitionsResponse**](../Model/CountEntityKeyDefinitionsResponse.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `countEntityTraitDefinitions()`

```php
countEntityTraitDefinitions($entity_type, $ids, $q, $trait_type, $trait_types, $limit, $offset): \Schematic\Model\CountEntityTraitDefinitionsResponse
```

Count entity trait definitions

### Example

```php
<?php
require_once 'vendor/autoload.php';

use Schematic\Schematic;

$schematic = new Schematic('YOUR_SECRET_API_KEY');

$entity_type = new \Schematic\Model\EntityType(); // EntityType
$ids = array('ids_example'); // string[]
$q = 'q_example'; // string
$trait_type = new \Schematic\Model\TraitType(); // TraitType
$trait_types = array(new \Schematic\Model\\Schematic\Model\TraitType()); // \Schematic\Model\TraitType[]
$limit = 100; // int | Page limit (default 100)
$offset = 0; // int | Page offset (default 0)

try {
    $result = $schematic->CompaniesApi->countEntityTraitDefinitions($entity_type, $ids, $q, $trait_type, $trait_types, $limit, $offset);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Schematic->CompaniesApi->countEntityTraitDefinitions: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **entity_type** | [**EntityType**](../Model/.md)|  | [optional] |
| **ids** | [**string[]**](../Model/string.md)|  | [optional] |
| **q** | **string**|  | [optional] |
| **trait_type** | [**TraitType**](../Model/.md)|  | [optional] |
| **trait_types** | [**\Schematic\Model\TraitType[]**](../Model/\Schematic\Model\TraitType.md)|  | [optional] |
| **limit** | **int**| Page limit (default 100) | [optional] |
| **offset** | **int**| Page offset (default 0) | [optional] |

### Return type

[**\Schematic\Model\CountEntityTraitDefinitionsResponse**](../Model/CountEntityTraitDefinitionsResponse.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `countPlanTraits()`

```php
countPlanTraits($ids, $plan_id, $trait_id, $trait_ids, $limit, $offset): \Schematic\Model\CountPlanTraitsResponse
```

Count plan traits

### Example

```php
<?php
require_once 'vendor/autoload.php';

use Schematic\Schematic;

$schematic = new Schematic('YOUR_SECRET_API_KEY');

$ids = array('ids_example'); // string[]
$plan_id = 'plan_id_example'; // string
$trait_id = 'trait_id_example'; // string
$trait_ids = array('trait_ids_example'); // string[]
$limit = 100; // int | Page limit (default 100)
$offset = 0; // int | Page offset (default 0)

try {
    $result = $schematic->CompaniesApi->countPlanTraits($ids, $plan_id, $trait_id, $trait_ids, $limit, $offset);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Schematic->CompaniesApi->countPlanTraits: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **ids** | [**string[]**](../Model/string.md)|  | [optional] |
| **plan_id** | **string**|  | [optional] |
| **trait_id** | **string**|  | [optional] |
| **trait_ids** | [**string[]**](../Model/string.md)|  | [optional] |
| **limit** | **int**| Page limit (default 100) | [optional] |
| **offset** | **int**| Page offset (default 0) | [optional] |

### Return type

[**\Schematic\Model\CountPlanTraitsResponse**](../Model/CountPlanTraitsResponse.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `countUsers()`

```php
countUsers($company_id, $ids, $plan_id, $q, $limit, $offset): \Schematic\Model\CountUsersResponse
```

Count users

### Example

```php
<?php
require_once 'vendor/autoload.php';

use Schematic\Schematic;

$schematic = new Schematic('YOUR_SECRET_API_KEY');

$company_id = 'company_id_example'; // string | Filter users by company ID (starts with comp_)
$ids = array('ids_example'); // string[] | Filter users by multiple user IDs (starts with user_)
$plan_id = 'plan_id_example'; // string | Filter users by plan ID (starts with plan_)
$q = 'q_example'; // string | Search for users by name, keys or string traits
$limit = 100; // int | Page limit (default 100)
$offset = 0; // int | Page offset (default 0)

try {
    $result = $schematic->CompaniesApi->countUsers($company_id, $ids, $plan_id, $q, $limit, $offset);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Schematic->CompaniesApi->countUsers: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **company_id** | **string**| Filter users by company ID (starts with comp_) | [optional] |
| **ids** | [**string[]**](../Model/string.md)| Filter users by multiple user IDs (starts with user_) | [optional] |
| **plan_id** | **string**| Filter users by plan ID (starts with plan_) | [optional] |
| **q** | **string**| Search for users by name, keys or string traits | [optional] |
| **limit** | **int**| Page limit (default 100) | [optional] |
| **offset** | **int**| Page offset (default 0) | [optional] |

### Return type

[**\Schematic\Model\CountUsersResponse**](../Model/CountUsersResponse.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

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

## `createPlanTrait()`

```php
createPlanTrait($create_plan_trait_request_body): \Schematic\Model\CreatePlanTraitResponse
```

Create plan trait

### Example

```php
<?php
require_once 'vendor/autoload.php';

use Schematic\Schematic;

$schematic = new Schematic('YOUR_SECRET_API_KEY');

$create_plan_trait_request_body = new \Schematic\Model\CreatePlanTraitRequestBody(); // \Schematic\Model\CreatePlanTraitRequestBody

try {
    $result = $schematic->CompaniesApi->createPlanTrait($create_plan_trait_request_body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Schematic->CompaniesApi->createPlanTrait: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **create_plan_trait_request_body** | [**\Schematic\Model\CreatePlanTraitRequestBody**](../Model/CreatePlanTraitRequestBody.md)|  | |

### Return type

[**\Schematic\Model\CreatePlanTraitResponse**](../Model/CreatePlanTraitResponse.md)

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

## `deleteCompany()`

```php
deleteCompany($company_id, $cancel_subscription, $prorate): \Schematic\Model\DeleteCompanyResponse
```

Delete company

### Example

```php
<?php
require_once 'vendor/autoload.php';

use Schematic\Schematic;

$schematic = new Schematic('YOUR_SECRET_API_KEY');

$company_id = 'company_id_example'; // string | company_id
$cancel_subscription = True; // bool
$prorate = True; // bool

try {
    $result = $schematic->CompaniesApi->deleteCompany($company_id, $cancel_subscription, $prorate);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Schematic->CompaniesApi->deleteCompany: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **company_id** | **string**| company_id | |
| **cancel_subscription** | **bool**|  | [optional] |
| **prorate** | **bool**|  | [optional] |

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

## `deleteCompanyByKeys()`

```php
deleteCompanyByKeys($keys_request_body): \Schematic\Model\DeleteCompanyByKeysResponse
```

Delete company by keys

### Example

```php
<?php
require_once 'vendor/autoload.php';

use Schematic\Schematic;

$schematic = new Schematic('YOUR_SECRET_API_KEY');

$keys_request_body = new \Schematic\Model\KeysRequestBody(); // \Schematic\Model\KeysRequestBody

try {
    $result = $schematic->CompaniesApi->deleteCompanyByKeys($keys_request_body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Schematic->CompaniesApi->deleteCompanyByKeys: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **keys_request_body** | [**\Schematic\Model\KeysRequestBody**](../Model/KeysRequestBody.md)|  | |

### Return type

[**\Schematic\Model\DeleteCompanyByKeysResponse**](../Model/DeleteCompanyByKeysResponse.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: `application/json`
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

## `deletePlanTrait()`

```php
deletePlanTrait($plan_trait_id): \Schematic\Model\DeletePlanTraitResponse
```

Delete plan trait

### Example

```php
<?php
require_once 'vendor/autoload.php';

use Schematic\Schematic;

$schematic = new Schematic('YOUR_SECRET_API_KEY');

$plan_trait_id = 'plan_trait_id_example'; // string | plan_trait_id

try {
    $result = $schematic->CompaniesApi->deletePlanTrait($plan_trait_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Schematic->CompaniesApi->deletePlanTrait: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **plan_trait_id** | **string**| plan_trait_id | |

### Return type

[**\Schematic\Model\DeletePlanTraitResponse**](../Model/DeletePlanTraitResponse.md)

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

## `deleteUserByKeys()`

```php
deleteUserByKeys($keys_request_body): \Schematic\Model\DeleteUserByKeysResponse
```

Delete user by keys

### Example

```php
<?php
require_once 'vendor/autoload.php';

use Schematic\Schematic;

$schematic = new Schematic('YOUR_SECRET_API_KEY');

$keys_request_body = new \Schematic\Model\KeysRequestBody(); // \Schematic\Model\KeysRequestBody

try {
    $result = $schematic->CompaniesApi->deleteUserByKeys($keys_request_body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Schematic->CompaniesApi->deleteUserByKeys: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **keys_request_body** | [**\Schematic\Model\KeysRequestBody**](../Model/KeysRequestBody.md)|  | |

### Return type

[**\Schematic\Model\DeleteUserByKeysResponse**](../Model/DeleteUserByKeysResponse.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getActiveCompanySubscription()`

```php
getActiveCompanySubscription($company_id, $company_ids, $limit, $offset): \Schematic\Model\GetActiveCompanySubscriptionResponse
```

Get active company subscription

### Example

```php
<?php
require_once 'vendor/autoload.php';

use Schematic\Schematic;

$schematic = new Schematic('YOUR_SECRET_API_KEY');

$company_id = 'company_id_example'; // string
$company_ids = array('company_ids_example'); // string[]
$limit = 100; // int | Page limit (default 100)
$offset = 0; // int | Page offset (default 0)

try {
    $result = $schematic->CompaniesApi->getActiveCompanySubscription($company_id, $company_ids, $limit, $offset);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Schematic->CompaniesApi->getActiveCompanySubscription: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **company_id** | **string**|  | [optional] |
| **company_ids** | [**string[]**](../Model/string.md)|  | [optional] |
| **limit** | **int**| Page limit (default 100) | [optional] |
| **offset** | **int**| Page offset (default 0) | [optional] |

### Return type

[**\Schematic\Model\GetActiveCompanySubscriptionResponse**](../Model/GetActiveCompanySubscriptionResponse.md)

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

## `getEntityTraitDefinition()`

```php
getEntityTraitDefinition($entity_trait_definition_id): \Schematic\Model\GetEntityTraitDefinitionResponse
```

Get entity trait definition

### Example

```php
<?php
require_once 'vendor/autoload.php';

use Schematic\Schematic;

$schematic = new Schematic('YOUR_SECRET_API_KEY');

$entity_trait_definition_id = 'entity_trait_definition_id_example'; // string | entity_trait_definition_id

try {
    $result = $schematic->CompaniesApi->getEntityTraitDefinition($entity_trait_definition_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Schematic->CompaniesApi->getEntityTraitDefinition: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **entity_trait_definition_id** | **string**| entity_trait_definition_id | |

### Return type

[**\Schematic\Model\GetEntityTraitDefinitionResponse**](../Model/GetEntityTraitDefinitionResponse.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getEntityTraitValues()`

```php
getEntityTraitValues($definition_id, $q, $limit, $offset): \Schematic\Model\GetEntityTraitValuesResponse
```

Get entity trait values

### Example

```php
<?php
require_once 'vendor/autoload.php';

use Schematic\Schematic;

$schematic = new Schematic('YOUR_SECRET_API_KEY');

$definition_id = 'definition_id_example'; // string
$q = 'q_example'; // string
$limit = 100; // int | Page limit (default 100)
$offset = 0; // int | Page offset (default 0)

try {
    $result = $schematic->CompaniesApi->getEntityTraitValues($definition_id, $q, $limit, $offset);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Schematic->CompaniesApi->getEntityTraitValues: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **definition_id** | **string**|  | |
| **q** | **string**|  | [optional] |
| **limit** | **int**| Page limit (default 100) | [optional] |
| **offset** | **int**| Page offset (default 0) | [optional] |

### Return type

[**\Schematic\Model\GetEntityTraitValuesResponse**](../Model/GetEntityTraitValuesResponse.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getOrCreateCompanyMembership()`

```php
getOrCreateCompanyMembership($get_or_create_company_membership_request_body): \Schematic\Model\GetOrCreateCompanyMembershipResponse
```

Get or create company membership

### Example

```php
<?php
require_once 'vendor/autoload.php';

use Schematic\Schematic;

$schematic = new Schematic('YOUR_SECRET_API_KEY');

$get_or_create_company_membership_request_body = new \Schematic\Model\GetOrCreateCompanyMembershipRequestBody(); // \Schematic\Model\GetOrCreateCompanyMembershipRequestBody

try {
    $result = $schematic->CompaniesApi->getOrCreateCompanyMembership($get_or_create_company_membership_request_body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Schematic->CompaniesApi->getOrCreateCompanyMembership: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **get_or_create_company_membership_request_body** | [**\Schematic\Model\GetOrCreateCompanyMembershipRequestBody**](../Model/GetOrCreateCompanyMembershipRequestBody.md)|  | |

### Return type

[**\Schematic\Model\GetOrCreateCompanyMembershipResponse**](../Model/GetOrCreateCompanyMembershipResponse.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getOrCreateEntityTraitDefinition()`

```php
getOrCreateEntityTraitDefinition($create_entity_trait_definition_request_body): \Schematic\Model\GetOrCreateEntityTraitDefinitionResponse
```

Get or create entity trait definition

### Example

```php
<?php
require_once 'vendor/autoload.php';

use Schematic\Schematic;

$schematic = new Schematic('YOUR_SECRET_API_KEY');

$create_entity_trait_definition_request_body = new \Schematic\Model\CreateEntityTraitDefinitionRequestBody(); // \Schematic\Model\CreateEntityTraitDefinitionRequestBody

try {
    $result = $schematic->CompaniesApi->getOrCreateEntityTraitDefinition($create_entity_trait_definition_request_body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Schematic->CompaniesApi->getOrCreateEntityTraitDefinition: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **create_entity_trait_definition_request_body** | [**\Schematic\Model\CreateEntityTraitDefinitionRequestBody**](../Model/CreateEntityTraitDefinitionRequestBody.md)|  | |

### Return type

[**\Schematic\Model\GetOrCreateEntityTraitDefinitionResponse**](../Model/GetOrCreateEntityTraitDefinitionResponse.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getPlanChange()`

```php
getPlanChange($plan_change_id): \Schematic\Model\GetPlanChangeResponse
```

Get plan change

### Example

```php
<?php
require_once 'vendor/autoload.php';

use Schematic\Schematic;

$schematic = new Schematic('YOUR_SECRET_API_KEY');

$plan_change_id = 'plan_change_id_example'; // string | plan_change_id

try {
    $result = $schematic->CompaniesApi->getPlanChange($plan_change_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Schematic->CompaniesApi->getPlanChange: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **plan_change_id** | **string**| plan_change_id | |

### Return type

[**\Schematic\Model\GetPlanChangeResponse**](../Model/GetPlanChangeResponse.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getPlanTrait()`

```php
getPlanTrait($plan_trait_id): \Schematic\Model\GetPlanTraitResponse
```

Get plan trait

### Example

```php
<?php
require_once 'vendor/autoload.php';

use Schematic\Schematic;

$schematic = new Schematic('YOUR_SECRET_API_KEY');

$plan_trait_id = 'plan_trait_id_example'; // string | plan_trait_id

try {
    $result = $schematic->CompaniesApi->getPlanTrait($plan_trait_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Schematic->CompaniesApi->getPlanTrait: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **plan_trait_id** | **string**| plan_trait_id | |

### Return type

[**\Schematic\Model\GetPlanTraitResponse**](../Model/GetPlanTraitResponse.md)

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
listCompanies($credit_type_ids, $ids, $monetized_subscriptions, $plan_id, $plan_ids, $q, $sort_order_column, $sort_order_direction, $subscription_statuses, $subscription_types, $without_feature_override_for, $without_plan, $without_subscription, $with_subscription, $limit, $offset): \Schematic\Model\ListCompaniesResponse
```

List companies

### Example

```php
<?php
require_once 'vendor/autoload.php';

use Schematic\Schematic;

$schematic = new Schematic('YOUR_SECRET_API_KEY');

$credit_type_ids = array('credit_type_ids_example'); // string[] | Filter companies by one or more credit type IDs (each ID starts with bcrd_)
$ids = array('ids_example'); // string[] | Filter companies by multiple company IDs (starts with comp_)
$monetized_subscriptions = True; // bool | Filter companies that have monetized subscriptions
$plan_id = 'plan_id_example'; // string | Filter companies by plan ID (starts with plan_)
$plan_ids = array('plan_ids_example'); // string[] | Filter companies by one or more plan IDs (each ID starts with plan_)
$q = 'q_example'; // string | Search for companies by name, keys or string traits
$sort_order_column = 'sort_order_column_example'; // string | Column to sort by (e.g. name, created_at, last_seen_at)
$sort_order_direction = new \Schematic\Model\SortDirection(); // SortDirection | Direction to sort by (asc or desc)
$subscription_statuses = array(new \Schematic\Model\\Schematic\Model\SubscriptionStatus()); // \Schematic\Model\SubscriptionStatus[] | Filter companies by one or more subscription statuses
$subscription_types = array(new \Schematic\Model\\Schematic\Model\SubscriptionType()); // \Schematic\Model\SubscriptionType[] | Filter companies by one or more subscription types
$without_feature_override_for = 'without_feature_override_for_example'; // string | Filter out companies that already have a company override for the specified feature ID
$without_plan = True; // bool | Filter out companies that have a plan
$without_subscription = True; // bool | Filter out companies that have a subscription
$with_subscription = True; // bool | Filter companies that have a subscription
$limit = 100; // int | Page limit (default 100)
$offset = 0; // int | Page offset (default 0)

try {
    $result = $schematic->CompaniesApi->listCompanies($credit_type_ids, $ids, $monetized_subscriptions, $plan_id, $plan_ids, $q, $sort_order_column, $sort_order_direction, $subscription_statuses, $subscription_types, $without_feature_override_for, $without_plan, $without_subscription, $with_subscription, $limit, $offset);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Schematic->CompaniesApi->listCompanies: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **credit_type_ids** | [**string[]**](../Model/string.md)| Filter companies by one or more credit type IDs (each ID starts with bcrd_) | [optional] |
| **ids** | [**string[]**](../Model/string.md)| Filter companies by multiple company IDs (starts with comp_) | [optional] |
| **monetized_subscriptions** | **bool**| Filter companies that have monetized subscriptions | [optional] |
| **plan_id** | **string**| Filter companies by plan ID (starts with plan_) | [optional] |
| **plan_ids** | [**string[]**](../Model/string.md)| Filter companies by one or more plan IDs (each ID starts with plan_) | [optional] |
| **q** | **string**| Search for companies by name, keys or string traits | [optional] |
| **sort_order_column** | **string**| Column to sort by (e.g. name, created_at, last_seen_at) | [optional] |
| **sort_order_direction** | [**SortDirection**](../Model/.md)| Direction to sort by (asc or desc) | [optional] |
| **subscription_statuses** | [**\Schematic\Model\SubscriptionStatus[]**](../Model/\Schematic\Model\SubscriptionStatus.md)| Filter companies by one or more subscription statuses | [optional] |
| **subscription_types** | [**\Schematic\Model\SubscriptionType[]**](../Model/\Schematic\Model\SubscriptionType.md)| Filter companies by one or more subscription types | [optional] |
| **without_feature_override_for** | **string**| Filter out companies that already have a company override for the specified feature ID | [optional] |
| **without_plan** | **bool**| Filter out companies that have a plan | [optional] |
| **without_subscription** | **bool**| Filter out companies that have a subscription | [optional] |
| **with_subscription** | **bool**| Filter companies that have a subscription | [optional] |
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

## `listCompaniesForAdvancedFilter()`

```php
listCompaniesForAdvancedFilter($ids, $plan_ids, $feature_ids, $credit_type_ids, $subscription_statuses, $subscription_types, $monetized_subscriptions, $q, $without_plan, $without_subscription, $sort_order_column, $sort_order_direction, $display_properties, $limit, $offset): \Schematic\Model\ListCompaniesForAdvancedFilterResponse
```

List companies for advanced filter

### Example

```php
<?php
require_once 'vendor/autoload.php';

use Schematic\Schematic;

$schematic = new Schematic('YOUR_SECRET_API_KEY');

$ids = array('ids_example'); // string[] | Filter companies by multiple company IDs (starts with comp_)
$plan_ids = array('plan_ids_example'); // string[] | Filter companies by one or more plan IDs (each ID starts with plan_)
$feature_ids = array('feature_ids_example'); // string[] | Filter companies by one or more feature IDs (each ID starts with feat_)
$credit_type_ids = array('credit_type_ids_example'); // string[] | Filter companies by one or more credit type IDs (each ID starts with bcrd_)
$subscription_statuses = array(new \Schematic\Model\\Schematic\Model\SubscriptionStatus()); // \Schematic\Model\SubscriptionStatus[] | Filter companies by one or more subscription statuses (active, canceled, expired, incomplete, incomplete_expired, past_due, paused, trialing, unpaid)
$subscription_types = array(new \Schematic\Model\\Schematic\Model\SubscriptionType()); // \Schematic\Model\SubscriptionType[] | Filter companies by one or more subscription types (paid, free, trial)
$monetized_subscriptions = True; // bool | Filter companies that have monetized subscriptions
$q = 'q_example'; // string | Search for companies by name, keys or string traits
$without_plan = True; // bool | Filter out companies that have a plan
$without_subscription = True; // bool | Filter out companies that have a subscription
$sort_order_column = 'sort_order_column_example'; // string | Column to sort by (e.g. name, created_at, last_seen_at)
$sort_order_direction = new \Schematic\Model\SortDirection(); // SortDirection | Direction to sort by (asc or desc)
$display_properties = array('display_properties_example'); // string[] | Select the display columns to return (e.g. plan, subscription, users, last_seen_at)
$limit = 100; // int | Page limit (default 100)
$offset = 0; // int | Page offset (default 0)

try {
    $result = $schematic->CompaniesApi->listCompaniesForAdvancedFilter($ids, $plan_ids, $feature_ids, $credit_type_ids, $subscription_statuses, $subscription_types, $monetized_subscriptions, $q, $without_plan, $without_subscription, $sort_order_column, $sort_order_direction, $display_properties, $limit, $offset);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Schematic->CompaniesApi->listCompaniesForAdvancedFilter: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **ids** | [**string[]**](../Model/string.md)| Filter companies by multiple company IDs (starts with comp_) | [optional] |
| **plan_ids** | [**string[]**](../Model/string.md)| Filter companies by one or more plan IDs (each ID starts with plan_) | [optional] |
| **feature_ids** | [**string[]**](../Model/string.md)| Filter companies by one or more feature IDs (each ID starts with feat_) | [optional] |
| **credit_type_ids** | [**string[]**](../Model/string.md)| Filter companies by one or more credit type IDs (each ID starts with bcrd_) | [optional] |
| **subscription_statuses** | [**\Schematic\Model\SubscriptionStatus[]**](../Model/\Schematic\Model\SubscriptionStatus.md)| Filter companies by one or more subscription statuses (active, canceled, expired, incomplete, incomplete_expired, past_due, paused, trialing, unpaid) | [optional] |
| **subscription_types** | [**\Schematic\Model\SubscriptionType[]**](../Model/\Schematic\Model\SubscriptionType.md)| Filter companies by one or more subscription types (paid, free, trial) | [optional] |
| **monetized_subscriptions** | **bool**| Filter companies that have monetized subscriptions | [optional] |
| **q** | **string**| Search for companies by name, keys or string traits | [optional] |
| **without_plan** | **bool**| Filter out companies that have a plan | [optional] |
| **without_subscription** | **bool**| Filter out companies that have a subscription | [optional] |
| **sort_order_column** | **string**| Column to sort by (e.g. name, created_at, last_seen_at) | [optional] |
| **sort_order_direction** | [**SortDirection**](../Model/.md)| Direction to sort by (asc or desc) | [optional] |
| **display_properties** | [**string[]**](../Model/string.md)| Select the display columns to return (e.g. plan, subscription, users, last_seen_at) | [optional] |
| **limit** | **int**| Page limit (default 100) | [optional] |
| **offset** | **int**| Page offset (default 0) | [optional] |

### Return type

[**\Schematic\Model\ListCompaniesForAdvancedFilterResponse**](../Model/ListCompaniesForAdvancedFilterResponse.md)

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

## `listEntityKeyDefinitions()`

```php
listEntityKeyDefinitions($entity_type, $ids, $q, $limit, $offset): \Schematic\Model\ListEntityKeyDefinitionsResponse
```

List entity key definitions

### Example

```php
<?php
require_once 'vendor/autoload.php';

use Schematic\Schematic;

$schematic = new Schematic('YOUR_SECRET_API_KEY');

$entity_type = new \Schematic\Model\EntityType(); // EntityType
$ids = array('ids_example'); // string[]
$q = 'q_example'; // string
$limit = 100; // int | Page limit (default 100)
$offset = 0; // int | Page offset (default 0)

try {
    $result = $schematic->CompaniesApi->listEntityKeyDefinitions($entity_type, $ids, $q, $limit, $offset);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Schematic->CompaniesApi->listEntityKeyDefinitions: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **entity_type** | [**EntityType**](../Model/.md)|  | [optional] |
| **ids** | [**string[]**](../Model/string.md)|  | [optional] |
| **q** | **string**|  | [optional] |
| **limit** | **int**| Page limit (default 100) | [optional] |
| **offset** | **int**| Page offset (default 0) | [optional] |

### Return type

[**\Schematic\Model\ListEntityKeyDefinitionsResponse**](../Model/ListEntityKeyDefinitionsResponse.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listEntityTraitDefinitions()`

```php
listEntityTraitDefinitions($entity_type, $ids, $q, $trait_type, $trait_types, $limit, $offset): \Schematic\Model\ListEntityTraitDefinitionsResponse
```

List entity trait definitions

### Example

```php
<?php
require_once 'vendor/autoload.php';

use Schematic\Schematic;

$schematic = new Schematic('YOUR_SECRET_API_KEY');

$entity_type = new \Schematic\Model\EntityType(); // EntityType
$ids = array('ids_example'); // string[]
$q = 'q_example'; // string
$trait_type = new \Schematic\Model\TraitType(); // TraitType
$trait_types = array(new \Schematic\Model\\Schematic\Model\TraitType()); // \Schematic\Model\TraitType[]
$limit = 100; // int | Page limit (default 100)
$offset = 0; // int | Page offset (default 0)

try {
    $result = $schematic->CompaniesApi->listEntityTraitDefinitions($entity_type, $ids, $q, $trait_type, $trait_types, $limit, $offset);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Schematic->CompaniesApi->listEntityTraitDefinitions: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **entity_type** | [**EntityType**](../Model/.md)|  | [optional] |
| **ids** | [**string[]**](../Model/string.md)|  | [optional] |
| **q** | **string**|  | [optional] |
| **trait_type** | [**TraitType**](../Model/.md)|  | [optional] |
| **trait_types** | [**\Schematic\Model\TraitType[]**](../Model/\Schematic\Model\TraitType.md)|  | [optional] |
| **limit** | **int**| Page limit (default 100) | [optional] |
| **offset** | **int**| Page offset (default 0) | [optional] |

### Return type

[**\Schematic\Model\ListEntityTraitDefinitionsResponse**](../Model/ListEntityTraitDefinitionsResponse.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listPlanChanges()`

```php
listPlanChanges($action, $base_plan_action, $company_id, $company_ids, $plan_ids, $limit, $offset): \Schematic\Model\ListPlanChangesResponse
```

List plan changes

### Example

```php
<?php
require_once 'vendor/autoload.php';

use Schematic\Schematic;

$schematic = new Schematic('YOUR_SECRET_API_KEY');

$action = 'action_example'; // string
$base_plan_action = 'base_plan_action_example'; // string
$company_id = 'company_id_example'; // string
$company_ids = array('company_ids_example'); // string[]
$plan_ids = array('plan_ids_example'); // string[]
$limit = 100; // int | Page limit (default 100)
$offset = 0; // int | Page offset (default 0)

try {
    $result = $schematic->CompaniesApi->listPlanChanges($action, $base_plan_action, $company_id, $company_ids, $plan_ids, $limit, $offset);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Schematic->CompaniesApi->listPlanChanges: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **action** | **string**|  | [optional] |
| **base_plan_action** | **string**|  | [optional] |
| **company_id** | **string**|  | [optional] |
| **company_ids** | [**string[]**](../Model/string.md)|  | [optional] |
| **plan_ids** | [**string[]**](../Model/string.md)|  | [optional] |
| **limit** | **int**| Page limit (default 100) | [optional] |
| **offset** | **int**| Page offset (default 0) | [optional] |

### Return type

[**\Schematic\Model\ListPlanChangesResponse**](../Model/ListPlanChangesResponse.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listPlanTraits()`

```php
listPlanTraits($ids, $plan_id, $trait_id, $trait_ids, $limit, $offset): \Schematic\Model\ListPlanTraitsResponse
```

List plan traits

### Example

```php
<?php
require_once 'vendor/autoload.php';

use Schematic\Schematic;

$schematic = new Schematic('YOUR_SECRET_API_KEY');

$ids = array('ids_example'); // string[]
$plan_id = 'plan_id_example'; // string
$trait_id = 'trait_id_example'; // string
$trait_ids = array('trait_ids_example'); // string[]
$limit = 100; // int | Page limit (default 100)
$offset = 0; // int | Page offset (default 0)

try {
    $result = $schematic->CompaniesApi->listPlanTraits($ids, $plan_id, $trait_id, $trait_ids, $limit, $offset);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Schematic->CompaniesApi->listPlanTraits: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **ids** | [**string[]**](../Model/string.md)|  | [optional] |
| **plan_id** | **string**|  | [optional] |
| **trait_id** | **string**|  | [optional] |
| **trait_ids** | [**string[]**](../Model/string.md)|  | [optional] |
| **limit** | **int**| Page limit (default 100) | [optional] |
| **offset** | **int**| Page offset (default 0) | [optional] |

### Return type

[**\Schematic\Model\ListPlanTraitsResponse**](../Model/ListPlanTraitsResponse.md)

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
listUsers($company_id, $ids, $plan_id, $q, $limit, $offset): \Schematic\Model\ListUsersResponse
```

List users

### Example

```php
<?php
require_once 'vendor/autoload.php';

use Schematic\Schematic;

$schematic = new Schematic('YOUR_SECRET_API_KEY');

$company_id = 'company_id_example'; // string | Filter users by company ID (starts with comp_)
$ids = array('ids_example'); // string[] | Filter users by multiple user IDs (starts with user_)
$plan_id = 'plan_id_example'; // string | Filter users by plan ID (starts with plan_)
$q = 'q_example'; // string | Search for users by name, keys or string traits
$limit = 100; // int | Page limit (default 100)
$offset = 0; // int | Page offset (default 0)

try {
    $result = $schematic->CompaniesApi->listUsers($company_id, $ids, $plan_id, $q, $limit, $offset);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Schematic->CompaniesApi->listUsers: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **company_id** | **string**| Filter users by company ID (starts with comp_) | [optional] |
| **ids** | [**string[]**](../Model/string.md)| Filter users by multiple user IDs (starts with user_) | [optional] |
| **plan_id** | **string**| Filter users by plan ID (starts with plan_) | [optional] |
| **q** | **string**| Search for users by name, keys or string traits | [optional] |
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

$keys = array('key' => 'keys_example'); // array<string,string> | Key/value pairs

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
| **keys** | [**array<string,string>**](../Model/string.md)| Key/value pairs | |

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

$keys = array('key' => 'keys_example'); // array<string,string> | Key/value pairs

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
| **keys** | [**array<string,string>**](../Model/string.md)| Key/value pairs | |

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

## `updatePlanTrait()`

```php
updatePlanTrait($plan_trait_id, $update_plan_trait_request_body): \Schematic\Model\UpdatePlanTraitResponse
```

Update plan trait

### Example

```php
<?php
require_once 'vendor/autoload.php';

use Schematic\Schematic;

$schematic = new Schematic('YOUR_SECRET_API_KEY');

$plan_trait_id = 'plan_trait_id_example'; // string | plan_trait_id
$update_plan_trait_request_body = new \Schematic\Model\UpdatePlanTraitRequestBody(); // \Schematic\Model\UpdatePlanTraitRequestBody

try {
    $result = $schematic->CompaniesApi->updatePlanTrait($plan_trait_id, $update_plan_trait_request_body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Schematic->CompaniesApi->updatePlanTrait: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **plan_trait_id** | **string**| plan_trait_id | |
| **update_plan_trait_request_body** | [**\Schematic\Model\UpdatePlanTraitRequestBody**](../Model/UpdatePlanTraitRequestBody.md)|  | |

### Return type

[**\Schematic\Model\UpdatePlanTraitResponse**](../Model/UpdatePlanTraitResponse.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updatePlanTraitsBulk()`

```php
updatePlanTraitsBulk($update_plan_trait_bulk_request_body): \Schematic\Model\UpdatePlanTraitsBulkResponse
```

Update plan traits bulk

### Example

```php
<?php
require_once 'vendor/autoload.php';

use Schematic\Schematic;

$schematic = new Schematic('YOUR_SECRET_API_KEY');

$update_plan_trait_bulk_request_body = new \Schematic\Model\UpdatePlanTraitBulkRequestBody(); // \Schematic\Model\UpdatePlanTraitBulkRequestBody

try {
    $result = $schematic->CompaniesApi->updatePlanTraitsBulk($update_plan_trait_bulk_request_body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Schematic->CompaniesApi->updatePlanTraitsBulk: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **update_plan_trait_bulk_request_body** | [**\Schematic\Model\UpdatePlanTraitBulkRequestBody**](../Model/UpdatePlanTraitBulkRequestBody.md)|  | |

### Return type

[**\Schematic\Model\UpdatePlanTraitsBulkResponse**](../Model/UpdatePlanTraitsBulkResponse.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `upsertCompany()`

```php
upsertCompany($upsert_company_request_body): \Schematic\Model\UpsertCompanyResponse
```

Upsert company

### Example

```php
<?php
require_once 'vendor/autoload.php';

use Schematic\Schematic;

$schematic = new Schematic('YOUR_SECRET_API_KEY');

$upsert_company_request_body = new \Schematic\Model\UpsertCompanyRequestBody(); // \Schematic\Model\UpsertCompanyRequestBody

try {
    $result = $schematic->CompaniesApi->upsertCompany($upsert_company_request_body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Schematic->CompaniesApi->upsertCompany: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **upsert_company_request_body** | [**\Schematic\Model\UpsertCompanyRequestBody**](../Model/UpsertCompanyRequestBody.md)|  | |

### Return type

[**\Schematic\Model\UpsertCompanyResponse**](../Model/UpsertCompanyResponse.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `upsertCompanyTrait()`

```php
upsertCompanyTrait($upsert_trait_request_body): \Schematic\Model\UpsertCompanyTraitResponse
```

Upsert company trait

### Example

```php
<?php
require_once 'vendor/autoload.php';

use Schematic\Schematic;

$schematic = new Schematic('YOUR_SECRET_API_KEY');

$upsert_trait_request_body = new \Schematic\Model\UpsertTraitRequestBody(); // \Schematic\Model\UpsertTraitRequestBody

try {
    $result = $schematic->CompaniesApi->upsertCompanyTrait($upsert_trait_request_body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Schematic->CompaniesApi->upsertCompanyTrait: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **upsert_trait_request_body** | [**\Schematic\Model\UpsertTraitRequestBody**](../Model/UpsertTraitRequestBody.md)|  | |

### Return type

[**\Schematic\Model\UpsertCompanyTraitResponse**](../Model/UpsertCompanyTraitResponse.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `upsertUser()`

```php
upsertUser($upsert_user_request_body): \Schematic\Model\UpsertUserResponse
```

Upsert user

### Example

```php
<?php
require_once 'vendor/autoload.php';

use Schematic\Schematic;

$schematic = new Schematic('YOUR_SECRET_API_KEY');

$upsert_user_request_body = new \Schematic\Model\UpsertUserRequestBody(); // \Schematic\Model\UpsertUserRequestBody

try {
    $result = $schematic->CompaniesApi->upsertUser($upsert_user_request_body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Schematic->CompaniesApi->upsertUser: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **upsert_user_request_body** | [**\Schematic\Model\UpsertUserRequestBody**](../Model/UpsertUserRequestBody.md)|  | |

### Return type

[**\Schematic\Model\UpsertUserResponse**](../Model/UpsertUserResponse.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `upsertUserTrait()`

```php
upsertUserTrait($upsert_trait_request_body): \Schematic\Model\UpsertUserTraitResponse
```

Upsert user trait

### Example

```php
<?php
require_once 'vendor/autoload.php';

use Schematic\Schematic;

$schematic = new Schematic('YOUR_SECRET_API_KEY');

$upsert_trait_request_body = new \Schematic\Model\UpsertTraitRequestBody(); // \Schematic\Model\UpsertTraitRequestBody

try {
    $result = $schematic->CompaniesApi->upsertUserTrait($upsert_trait_request_body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Schematic->CompaniesApi->upsertUserTrait: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **upsert_trait_request_body** | [**\Schematic\Model\UpsertTraitRequestBody**](../Model/UpsertTraitRequestBody.md)|  | |

### Return type

[**\Schematic\Model\UpsertUserTraitResponse**](../Model/UpsertUserTraitResponse.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
