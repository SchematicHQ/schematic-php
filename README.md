# OpenAPIClient-php

Schematic API

## Installation & Usage

### Requirements

PHP 7.4 and later.
Should also work with PHP 8.0.

### Composer

To install the bindings via [Composer](https://getcomposer.org/), add the following to `composer.json`:

```json
{
    "repositories": [
        {
            "type": "vcs",
            "url": "https://github.com/GIT_USER_ID/GIT_REPO_ID.git"
        }
    ],
    "require": {
        "GIT_USER_ID/GIT_REPO_ID": "*@dev"
    }
}
```

Then run `composer install`

### Manual Installation

Download the files and include `autoload.php`:

```php
<?php
require_once('/path/to/OpenAPIClient-php/vendor/autoload.php');
```

## Getting Started

Please follow the [installation procedure](#installation--usage) and then run the following:

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



// Configure API key authorization: ApiKeyAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('X-Schematic-Api-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Schematic-Api-Key', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\AccountsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$create_api_key_request = new \OpenAPI\Client\Model\CreateApiKeyRequest(); // \OpenAPI\Client\Model\CreateApiKeyRequest
$x_schematic_environment_id = 'x_schematic_environment_id_example'; // string | If the request is made using an API key that is not environment-scoped, specify the environment using this header

try {
    $result = $apiInstance->createApiKey($create_api_key_request, $x_schematic_environment_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountsApi->createApiKey: ', $e->getMessage(), PHP_EOL;
}

```

## API Endpoints

All URIs are relative to *https://api.schematichq.com*

| Class          | Method                                                              | HTTP request                              | Description           |
| -------------- | ------------------------------------------------------------------- | ----------------------------------------- | --------------------- |
| _AccountsApi_  | [**createApiKey**](docs/Api/AccountsApi.md#createapikey)            | **POST** /api-keys                        | Create api key        |
| _AccountsApi_  | [**createEnvironment**](docs/Api/AccountsApi.md#createenvironment)  | **POST** /environments                    | Create environment    |
| _AccountsApi_  | [**deleteApiKey**](docs/Api/AccountsApi.md#deleteapikey)            | **DELETE** /api-keys/{api_key_id}         | Delete api key        |
| _AccountsApi_  | [**deleteEnvironment**](docs/Api/AccountsApi.md#deleteenvironment)  | **DELETE** /environments/{environment_id} | Delete environment    |
| _AccountsApi_  | [**updateEnvironment**](docs/Api/AccountsApi.md#updateenvironment)  | **PUT** /environments/{environment_id}    | Update environment    |
| _CompaniesApi_ | [**createCompany**](docs/Api/CompaniesApi.md#createcompany)         | **POST** /companies                       | Create company        |
| _CompaniesApi_ | [**createUser**](docs/Api/CompaniesApi.md#createuser)               | **POST** /users                           | Create user           |
| _CompaniesApi_ | [**getCompany**](docs/Api/CompaniesApi.md#getcompany)               | **GET** /companies/{company_id}           | Get company           |
| _CompaniesApi_ | [**getUser**](docs/Api/CompaniesApi.md#getuser)                     | **GET** /users/{user_id}                  | Get user              |
| _CompaniesApi_ | [**listCompanies**](docs/Api/CompaniesApi.md#listcompanies)         | **GET** /companies                        | List companies        |
| _CompaniesApi_ | [**listUsers**](docs/Api/CompaniesApi.md#listusers)                 | **GET** /users                            | List users            |
| _EventsApi_    | [**countEventTypes**](docs/Api/EventsApi.md#counteventtypes)        | **GET** /event-types/count                | Count event types     |
| _EventsApi_    | [**countEvents**](docs/Api/EventsApi.md#countevents)                | **GET** /events/count                     | Count events          |
| _EventsApi_    | [**createEvent**](docs/Api/EventsApi.md#createevent)                | **POST** /events                          | Create event          |
| _EventsApi_    | [**getEvent**](docs/Api/EventsApi.md#getevent)                      | **GET** /events/{event_id}                | Get event             |
| _EventsApi_    | [**getEventType**](docs/Api/EventsApi.md#geteventtype)              | **GET** /event-types/{key}                | Get event type        |
| _EventsApi_    | [**listEventTypes**](docs/Api/EventsApi.md#listeventtypes)          | **GET** /event-types                      | List event types      |
| _EventsApi_    | [**listEvents**](docs/Api/EventsApi.md#listevents)                  | **GET** /events                           | List events           |
| _FeaturesApi_  | [**checkFlag**](docs/Api/FeaturesApi.md#checkflag)                  | **POST** /flags/{key}/check               | Check flag            |
| _FeaturesApi_  | [**countFlagValues**](docs/Api/FeaturesApi.md#countflagvalues)      | **GET** /flag-values/count                | Count flag values     |
| _FeaturesApi_  | [**createFeature**](docs/Api/FeaturesApi.md#createfeature)          | **POST** /features                        | Create feature        |
| _FeaturesApi_  | [**deleteFeature**](docs/Api/FeaturesApi.md#deletefeature)          | **DELETE** /features/{feature_id}         | Delete feature        |
| _FeaturesApi_  | [**getFeature**](docs/Api/FeaturesApi.md#getfeature)                | **GET** /features/{feature_id}            | Get feature           |
| _FeaturesApi_  | [**listFeatures**](docs/Api/FeaturesApi.md#listfeatures)            | **GET** /features                         | List features         |
| _FeaturesApi_  | [**listFlagValues**](docs/Api/FeaturesApi.md#listflagvalues)        | **GET** /flag-values                      | List flag values      |
| _FeaturesApi_  | [**updateFeature**](docs/Api/FeaturesApi.md#updatefeature)          | **PUT** /features/{feature_id}            | Update feature        |
| _PlansApi_     | [**createPlan**](docs/Api/PlansApi.md#createplan)                   | **POST** /plans                           | Create plan           |
| _PlansApi_     | [**deletePlan**](docs/Api/PlansApi.md#deleteplan)                   | **DELETE** /plans/{plan_id}               | Delete plan           |
| _PlansApi_     | [**getPlan**](docs/Api/PlansApi.md#getplan)                         | **GET** /plans/{plan_id}                  | Get plan              |
| _PlansApi_     | [**listPlans**](docs/Api/PlansApi.md#listplans)                     | **GET** /plans                            | List plans            |
| _PlansApi_     | [**syncCompanyPlans**](docs/Api/PlansApi.md#synccompanyplans)       | **POST** /company-plans/sync              | Sync company plans    |
| _PlansApi_     | [**updatePlan**](docs/Api/PlansApi.md#updateplan)                   | **PUT** /plans/{plan_id}                  | Update plan           |
| _PlansApi_     | [**upsertBillingPeriod**](docs/Api/PlansApi.md#upsertbillingperiod) | **POST** /billing-periods/{key}/upsert    | Upsert billing period |

## Models

-   [CheckFlag200Response](docs/Model/CheckFlag200Response.md)
-   [CheckFlag200ResponseData](docs/Model/CheckFlag200ResponseData.md)
-   [CheckFlagRequest](docs/Model/CheckFlagRequest.md)
-   [CountEventTypes200Response](docs/Model/CountEventTypes200Response.md)
-   [CountEventTypes200ResponseData](docs/Model/CountEventTypes200ResponseData.md)
-   [CountEvents200Response](docs/Model/CountEvents200Response.md)
-   [CountFlagValues200Response](docs/Model/CountFlagValues200Response.md)
-   [CreateApiKey200Response](docs/Model/CreateApiKey200Response.md)
-   [CreateApiKey200ResponseData](docs/Model/CreateApiKey200ResponseData.md)
-   [CreateApiKeyRequest](docs/Model/CreateApiKeyRequest.md)
-   [CreateCompany200Response](docs/Model/CreateCompany200Response.md)
-   [CreateCompany200ResponseData](docs/Model/CreateCompany200ResponseData.md)
-   [CreateCompany200ResponseDataKeysInner](docs/Model/CreateCompany200ResponseDataKeysInner.md)
-   [CreateCompanyRequest](docs/Model/CreateCompanyRequest.md)
-   [CreateEnvironment200Response](docs/Model/CreateEnvironment200Response.md)
-   [CreateEnvironment200ResponseData](docs/Model/CreateEnvironment200ResponseData.md)
-   [CreateEnvironment200ResponseDataApiKeysInner](docs/Model/CreateEnvironment200ResponseDataApiKeysInner.md)
-   [CreateEnvironmentRequest](docs/Model/CreateEnvironmentRequest.md)
-   [CreateEvent200Response](docs/Model/CreateEvent200Response.md)
-   [CreateEvent200ResponseData](docs/Model/CreateEvent200ResponseData.md)
-   [CreateEventRequest](docs/Model/CreateEventRequest.md)
-   [CreateEventRequestBody](docs/Model/CreateEventRequestBody.md)
-   [CreateEventRequestBodyOneOf](docs/Model/CreateEventRequestBodyOneOf.md)
-   [CreateEventRequestBodyOneOf1](docs/Model/CreateEventRequestBodyOneOf1.md)
-   [CreateEventRequestBodyOneOf1Company](docs/Model/CreateEventRequestBodyOneOf1Company.md)
-   [CreateFeature200Response](docs/Model/CreateFeature200Response.md)
-   [CreateFeature200ResponseData](docs/Model/CreateFeature200ResponseData.md)
-   [CreateFeature200ResponseDataFlagsInner](docs/Model/CreateFeature200ResponseDataFlagsInner.md)
-   [CreateFeature200ResponseDataFlagsInnerRulesInner](docs/Model/CreateFeature200ResponseDataFlagsInnerRulesInner.md)
-   [CreateFeature200ResponseDataFlagsInnerRulesInnerConditionsInner](docs/Model/CreateFeature200ResponseDataFlagsInnerRulesInnerConditionsInner.md)
-   [CreateFeatureRequest](docs/Model/CreateFeatureRequest.md)
-   [CreateFeatureRequestFlag](docs/Model/CreateFeatureRequestFlag.md)
-   [CreateFeatureRequestFlagRulesInner](docs/Model/CreateFeatureRequestFlagRulesInner.md)
-   [CreateFeatureRequestFlagRulesInnerConditionsInner](docs/Model/CreateFeatureRequestFlagRulesInnerConditionsInner.md)
-   [CreatePlan200Response](docs/Model/CreatePlan200Response.md)
-   [CreatePlan200ResponseData](docs/Model/CreatePlan200ResponseData.md)
-   [CreatePlanRequest](docs/Model/CreatePlanRequest.md)
-   [CreateUser200Response](docs/Model/CreateUser200Response.md)
-   [CreateUser200ResponseData](docs/Model/CreateUser200ResponseData.md)
-   [CreateUserRequest](docs/Model/CreateUserRequest.md)
-   [DeleteApiKey200Response](docs/Model/DeleteApiKey200Response.md)
-   [DeleteApiKey200ResponseData](docs/Model/DeleteApiKey200ResponseData.md)
-   [Error](docs/Model/Error.md)
-   [GetCompany200Response](docs/Model/GetCompany200Response.md)
-   [GetEvent200Response](docs/Model/GetEvent200Response.md)
-   [GetEventType200Response](docs/Model/GetEventType200Response.md)
-   [GetEventType200ResponseData](docs/Model/GetEventType200ResponseData.md)
-   [GetFeature200Response](docs/Model/GetFeature200Response.md)
-   [GetPlan200Response](docs/Model/GetPlan200Response.md)
-   [GetUser200Response](docs/Model/GetUser200Response.md)
-   [ListCompanies200Response](docs/Model/ListCompanies200Response.md)
-   [ListCompanies200ResponseDataInner](docs/Model/ListCompanies200ResponseDataInner.md)
-   [ListCompanies200ResponseParams](docs/Model/ListCompanies200ResponseParams.md)
-   [ListEventTypes200Response](docs/Model/ListEventTypes200Response.md)
-   [ListEventTypes200ResponseDataInner](docs/Model/ListEventTypes200ResponseDataInner.md)
-   [ListEventTypes200ResponseParams](docs/Model/ListEventTypes200ResponseParams.md)
-   [ListEvents200Response](docs/Model/ListEvents200Response.md)
-   [ListEvents200ResponseDataInner](docs/Model/ListEvents200ResponseDataInner.md)
-   [ListEvents200ResponseParams](docs/Model/ListEvents200ResponseParams.md)
-   [ListFeatures200Response](docs/Model/ListFeatures200Response.md)
-   [ListFeatures200ResponseDataInner](docs/Model/ListFeatures200ResponseDataInner.md)
-   [ListFeatures200ResponseParams](docs/Model/ListFeatures200ResponseParams.md)
-   [ListFlagValues200Response](docs/Model/ListFlagValues200Response.md)
-   [ListFlagValues200ResponseDataInner](docs/Model/ListFlagValues200ResponseDataInner.md)
-   [ListFlagValues200ResponseParams](docs/Model/ListFlagValues200ResponseParams.md)
-   [ListPlans200Response](docs/Model/ListPlans200Response.md)
-   [ListPlans200ResponseDataInner](docs/Model/ListPlans200ResponseDataInner.md)
-   [ListUsers200Response](docs/Model/ListUsers200Response.md)
-   [ListUsers200ResponseDataInner](docs/Model/ListUsers200ResponseDataInner.md)
-   [SyncCompanyPlans200Response](docs/Model/SyncCompanyPlans200Response.md)
-   [SyncCompanyPlans200ResponseData](docs/Model/SyncCompanyPlans200ResponseData.md)
-   [SyncCompanyPlans200ResponseDataPlansInner](docs/Model/SyncCompanyPlans200ResponseDataPlansInner.md)
-   [SyncCompanyPlansRequest](docs/Model/SyncCompanyPlansRequest.md)
-   [SyncCompanyPlansRequestPlansInner](docs/Model/SyncCompanyPlansRequestPlansInner.md)
-   [UpdateEnvironment200Response](docs/Model/UpdateEnvironment200Response.md)
-   [UpdateEnvironment200ResponseData](docs/Model/UpdateEnvironment200ResponseData.md)
-   [UpsertBillingPeriod200Response](docs/Model/UpsertBillingPeriod200Response.md)
-   [UpsertBillingPeriod200ResponseData](docs/Model/UpsertBillingPeriod200ResponseData.md)
-   [UpsertBillingPeriodRequest](docs/Model/UpsertBillingPeriodRequest.md)

## Authorization

Authentication schemes defined for the API:

### ApiKeyAuth

-   **Type**: API key
-   **API key parameter name**: X-Schematic-Api-Key
-   **Location**: HTTP header

## Tests

To run the tests, use:

```bash
composer install
vendor/bin/phpunit
```

## Author

## About this package

This PHP package is automatically generated by the [OpenAPI Generator](https://openapi-generator.tech) project:

-   API version: `0.1`
-   Build package: `org.openapitools.codegen.languages.PhpClientCodegen`
