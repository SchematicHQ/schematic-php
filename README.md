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
$require_environment = True; // bool
$x_schematic_environment_id = 'x_schematic_environment_id_example'; // string | If the request is made using an API key that is not environment-scoped, specify the environment using this header
$environment_id = 'environment_id_example'; // string
$limit = 56; // int | Page limit (default 100)
$offset = 56; // int | Page offset (default 0)
$order = 'order_example'; // string | Order by column
$dir = 'dir_example'; // string | Order direction

try {
    $result = $apiInstance->countApiKeys($require_environment, $x_schematic_environment_id, $environment_id, $limit, $offset, $order, $dir);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountsApi->countApiKeys: ', $e->getMessage(), PHP_EOL;
}

```

## API Endpoints

All URIs are relative to *https://api.schematichq.com*

Class | Method | HTTP request | Description
------------ | ------------- | ------------- | -------------
*AccountsApi* | [**countApiKeys**](docs/Api/AccountsApi.md#countapikeys) | **GET** /api-keys/count | Count api keys
*AccountsApi* | [**createApiKey**](docs/Api/AccountsApi.md#createapikey) | **POST** /api-keys | Create api key
*AccountsApi* | [**createEnvironment**](docs/Api/AccountsApi.md#createenvironment) | **POST** /environments | Create environment
*AccountsApi* | [**deleteApiKey**](docs/Api/AccountsApi.md#deleteapikey) | **DELETE** /api-keys/{api_key_id} | Delete api key
*AccountsApi* | [**deleteEnvironment**](docs/Api/AccountsApi.md#deleteenvironment) | **DELETE** /environments/{environment_id} | Delete environment
*AccountsApi* | [**getApiKey**](docs/Api/AccountsApi.md#getapikey) | **GET** /api-keys/{api_key_id} | Get api key
*AccountsApi* | [**listApiKeys**](docs/Api/AccountsApi.md#listapikeys) | **GET** /api-keys | List api keys
*AccountsApi* | [**updateApiKey**](docs/Api/AccountsApi.md#updateapikey) | **PUT** /api-keys/{api_key_id} | Update api key
*AccountsApi* | [**updateEnvironment**](docs/Api/AccountsApi.md#updateenvironment) | **PUT** /environments/{environment_id} | Update environment
*CompaniesApi* | [**createCompany**](docs/Api/CompaniesApi.md#createcompany) | **POST** /companies | Create company
*CompaniesApi* | [**createCompanyMembership**](docs/Api/CompaniesApi.md#createcompanymembership) | **POST** /company-memberships | Create company membership
*CompaniesApi* | [**createUser**](docs/Api/CompaniesApi.md#createuser) | **POST** /users | Create user
*CompaniesApi* | [**deleteCompanyMembership**](docs/Api/CompaniesApi.md#deletecompanymembership) | **DELETE** /company-memberships/{company_membership_id} | Delete company membership
*CompaniesApi* | [**getCompany**](docs/Api/CompaniesApi.md#getcompany) | **GET** /companies/{company_id} | Get company
*CompaniesApi* | [**getUser**](docs/Api/CompaniesApi.md#getuser) | **GET** /users/{user_id} | Get user
*CompaniesApi* | [**listCompanies**](docs/Api/CompaniesApi.md#listcompanies) | **GET** /companies | List companies
*CompaniesApi* | [**listCompanyMemberships**](docs/Api/CompaniesApi.md#listcompanymemberships) | **GET** /company-memberships | List company memberships
*CompaniesApi* | [**listUsers**](docs/Api/CompaniesApi.md#listusers) | **GET** /users | List users
*CompaniesApi* | [**updateEntityTraitDefinition**](docs/Api/CompaniesApi.md#updateentitytraitdefinition) | **PUT** /entity-trait-definitions/{entity_trait_definition_id} | Update entity trait definition
*EventsApi* | [**countEventTypes**](docs/Api/EventsApi.md#counteventtypes) | **GET** /event-types/count | Count event types
*EventsApi* | [**countEvents**](docs/Api/EventsApi.md#countevents) | **GET** /events/count | Count events
*EventsApi* | [**createEvent**](docs/Api/EventsApi.md#createevent) | **POST** /events | Create event
*EventsApi* | [**getEvent**](docs/Api/EventsApi.md#getevent) | **GET** /events/{event_id} | Get event
*EventsApi* | [**getEventType**](docs/Api/EventsApi.md#geteventtype) | **GET** /event-types/{key} | Get event type
*EventsApi* | [**listEventTypes**](docs/Api/EventsApi.md#listeventtypes) | **GET** /event-types | List event types
*EventsApi* | [**listEvents**](docs/Api/EventsApi.md#listevents) | **GET** /events | List events
*EventsApi* | [**listMetricCounts**](docs/Api/EventsApi.md#listmetriccounts) | **GET** /metric-counts | List metric counts
*EventsApi* | [**listMetricCountsHourly**](docs/Api/EventsApi.md#listmetriccountshourly) | **GET** /metric-counts-hourly | List metric counts hourly
*FeaturesApi* | [**checkFlag**](docs/Api/FeaturesApi.md#checkflag) | **POST** /flags/{key}/check | Check flag
*FeaturesApi* | [**checkFlags**](docs/Api/FeaturesApi.md#checkflags) | **POST** /flags/check | Check flags
*FeaturesApi* | [**countFlagValues**](docs/Api/FeaturesApi.md#countflagvalues) | **GET** /flag-values/count | Count flag values
*FeaturesApi* | [**createFeature**](docs/Api/FeaturesApi.md#createfeature) | **POST** /features | Create feature
*FeaturesApi* | [**createFlag**](docs/Api/FeaturesApi.md#createflag) | **POST** /flags | Create flag
*FeaturesApi* | [**createRule**](docs/Api/FeaturesApi.md#createrule) | **POST** /rules | Create rule
*FeaturesApi* | [**deleteFeature**](docs/Api/FeaturesApi.md#deletefeature) | **DELETE** /features/{feature_id} | Delete feature
*FeaturesApi* | [**deleteFlag**](docs/Api/FeaturesApi.md#deleteflag) | **DELETE** /flags/{flag_id} | Delete flag
*FeaturesApi* | [**getFeature**](docs/Api/FeaturesApi.md#getfeature) | **GET** /features/{feature_id} | Get feature
*FeaturesApi* | [**getFlag**](docs/Api/FeaturesApi.md#getflag) | **GET** /flags/{flag_id} | Get flag
*FeaturesApi* | [**getRule**](docs/Api/FeaturesApi.md#getrule) | **GET** /rules/{rule_id} | Get rule
*FeaturesApi* | [**latestFlagChecks**](docs/Api/FeaturesApi.md#latestflagchecks) | **GET** /flag-checks/latest | Latest flag checks
*FeaturesApi* | [**listFeatures**](docs/Api/FeaturesApi.md#listfeatures) | **GET** /features | List features
*FeaturesApi* | [**listFlagChecks**](docs/Api/FeaturesApi.md#listflagchecks) | **GET** /flag-checks | List flag checks
*FeaturesApi* | [**listFlagValues**](docs/Api/FeaturesApi.md#listflagvalues) | **GET** /flag-values | List flag values
*FeaturesApi* | [**listFlags**](docs/Api/FeaturesApi.md#listflags) | **GET** /flags | List flags
*FeaturesApi* | [**updateFeature**](docs/Api/FeaturesApi.md#updatefeature) | **PUT** /features/{feature_id} | Update feature
*FeaturesApi* | [**updateFlag**](docs/Api/FeaturesApi.md#updateflag) | **PUT** /flags/{flag_id} | Update flag
*FeaturesApi* | [**updateRule**](docs/Api/FeaturesApi.md#updaterule) | **PUT** /rules/{rule_id} | Update rule
*PlansApi* | [**createPlan**](docs/Api/PlansApi.md#createplan) | **POST** /plans | Create plan
*PlansApi* | [**deletePlan**](docs/Api/PlansApi.md#deleteplan) | **DELETE** /plans/{plan_id} | Delete plan
*PlansApi* | [**getPlan**](docs/Api/PlansApi.md#getplan) | **GET** /plans/{plan_id} | Get plan
*PlansApi* | [**listPlans**](docs/Api/PlansApi.md#listplans) | **GET** /plans | List plans
*PlansApi* | [**syncCompanyPlans**](docs/Api/PlansApi.md#synccompanyplans) | **POST** /company-plans/sync | Sync company plans
*PlansApi* | [**updatePlan**](docs/Api/PlansApi.md#updateplan) | **PUT** /plans/{plan_id} | Update plan
*PlansApi* | [**updatePlanAudience**](docs/Api/PlansApi.md#updateplanaudience) | **PUT** /plan-audiences/{plan_audience_id} | Update plan audience
*PlansApi* | [**upsertBillingPeriod**](docs/Api/PlansApi.md#upsertbillingperiod) | **POST** /billing-periods/{key}/upsert | Upsert billing period

## Models

- [ApiError](docs/Model/ApiError.md)
- [ApiKeyCreateResponseData](docs/Model/ApiKeyCreateResponseData.md)
- [ApiKeyResponseData](docs/Model/ApiKeyResponseData.md)
- [BillingPeriodResponseData](docs/Model/BillingPeriodResponseData.md)
- [CheckFlagOutputWithFlagKey](docs/Model/CheckFlagOutputWithFlagKey.md)
- [CheckFlagRequestBody](docs/Model/CheckFlagRequestBody.md)
- [CheckFlagResponse](docs/Model/CheckFlagResponse.md)
- [CheckFlagResponseData](docs/Model/CheckFlagResponseData.md)
- [CheckFlagsResponse](docs/Model/CheckFlagsResponse.md)
- [CheckFlagsResponseData](docs/Model/CheckFlagsResponseData.md)
- [CompanyDetailResponseData](docs/Model/CompanyDetailResponseData.md)
- [CompanyMembershipDetailResponseData](docs/Model/CompanyMembershipDetailResponseData.md)
- [CompanyMembershipResponseData](docs/Model/CompanyMembershipResponseData.md)
- [CompanyPlanResponseData](docs/Model/CompanyPlanResponseData.md)
- [CompanyResponseData](docs/Model/CompanyResponseData.md)
- [CountApiKeysParams](docs/Model/CountApiKeysParams.md)
- [CountApiKeysResponse](docs/Model/CountApiKeysResponse.md)
- [CountEventTypesParams](docs/Model/CountEventTypesParams.md)
- [CountEventTypesResponse](docs/Model/CountEventTypesResponse.md)
- [CountEventsParams](docs/Model/CountEventsParams.md)
- [CountEventsResponse](docs/Model/CountEventsResponse.md)
- [CountFlagValuesParams](docs/Model/CountFlagValuesParams.md)
- [CountFlagValuesResponse](docs/Model/CountFlagValuesResponse.md)
- [CountResponse](docs/Model/CountResponse.md)
- [CreateApiKeyRequestBody](docs/Model/CreateApiKeyRequestBody.md)
- [CreateApiKeyResponse](docs/Model/CreateApiKeyResponse.md)
- [CreateCompanyMembershipResponse](docs/Model/CreateCompanyMembershipResponse.md)
- [CreateCompanyResponse](docs/Model/CreateCompanyResponse.md)
- [CreateEnvironmentRequestBody](docs/Model/CreateEnvironmentRequestBody.md)
- [CreateEnvironmentResponse](docs/Model/CreateEnvironmentResponse.md)
- [CreateEventRequestBody](docs/Model/CreateEventRequestBody.md)
- [CreateEventResponse](docs/Model/CreateEventResponse.md)
- [CreateFeatureRequestBody](docs/Model/CreateFeatureRequestBody.md)
- [CreateFeatureResponse](docs/Model/CreateFeatureResponse.md)
- [CreateFlagRequestBody](docs/Model/CreateFlagRequestBody.md)
- [CreateFlagResponse](docs/Model/CreateFlagResponse.md)
- [CreateOrUpdateCompanyPlanRequestBody](docs/Model/CreateOrUpdateCompanyPlanRequestBody.md)
- [CreateOrUpdateConditionGroupRequestBody](docs/Model/CreateOrUpdateConditionGroupRequestBody.md)
- [CreateOrUpdateConditionRequestBody](docs/Model/CreateOrUpdateConditionRequestBody.md)
- [CreateOrUpdateFlagRequestBody](docs/Model/CreateOrUpdateFlagRequestBody.md)
- [CreateOrUpdateRuleRequestBody](docs/Model/CreateOrUpdateRuleRequestBody.md)
- [CreatePlanRequestBody](docs/Model/CreatePlanRequestBody.md)
- [CreatePlanResponse](docs/Model/CreatePlanResponse.md)
- [CreateRuleRequestBody](docs/Model/CreateRuleRequestBody.md)
- [CreateRuleResponse](docs/Model/CreateRuleResponse.md)
- [CreateUserResponse](docs/Model/CreateUserResponse.md)
- [DeleteApiKeyResponse](docs/Model/DeleteApiKeyResponse.md)
- [DeleteCompanyMembershipResponse](docs/Model/DeleteCompanyMembershipResponse.md)
- [DeleteEnvironmentResponse](docs/Model/DeleteEnvironmentResponse.md)
- [DeleteFeatureResponse](docs/Model/DeleteFeatureResponse.md)
- [DeleteFlagResponse](docs/Model/DeleteFlagResponse.md)
- [DeletePlanResponse](docs/Model/DeletePlanResponse.md)
- [DeleteResponse](docs/Model/DeleteResponse.md)
- [EntityFlagValueResponseData](docs/Model/EntityFlagValueResponseData.md)
- [EntityKeyResponseData](docs/Model/EntityKeyResponseData.md)
- [EntityTraitDefinitionResponseData](docs/Model/EntityTraitDefinitionResponseData.md)
- [EnvironmentDetailResponseData](docs/Model/EnvironmentDetailResponseData.md)
- [EnvironmentResponseData](docs/Model/EnvironmentResponseData.md)
- [EventBody](docs/Model/EventBody.md)
- [EventBodyIdentify](docs/Model/EventBodyIdentify.md)
- [EventBodyIdentifyCompany](docs/Model/EventBodyIdentifyCompany.md)
- [EventBodyTrack](docs/Model/EventBodyTrack.md)
- [EventResponseData](docs/Model/EventResponseData.md)
- [EventSummaryResponseData](docs/Model/EventSummaryResponseData.md)
- [FeatureDetailResponseData](docs/Model/FeatureDetailResponseData.md)
- [FeatureResponseData](docs/Model/FeatureResponseData.md)
- [FlagCheckLogResponseData](docs/Model/FlagCheckLogResponseData.md)
- [FlagDetailResponseData](docs/Model/FlagDetailResponseData.md)
- [FlagResponseData](docs/Model/FlagResponseData.md)
- [GetApiKeyResponse](docs/Model/GetApiKeyResponse.md)
- [GetCompanyResponse](docs/Model/GetCompanyResponse.md)
- [GetEventResponse](docs/Model/GetEventResponse.md)
- [GetEventTypeResponse](docs/Model/GetEventTypeResponse.md)
- [GetFeatureResponse](docs/Model/GetFeatureResponse.md)
- [GetFlagResponse](docs/Model/GetFlagResponse.md)
- [GetOrCreateCompanyMembershipRequestBody](docs/Model/GetOrCreateCompanyMembershipRequestBody.md)
- [GetPlanResponse](docs/Model/GetPlanResponse.md)
- [GetRuleResponse](docs/Model/GetRuleResponse.md)
- [GetUserResponse](docs/Model/GetUserResponse.md)
- [LatestFlagChecksParams](docs/Model/LatestFlagChecksParams.md)
- [LatestFlagChecksResponse](docs/Model/LatestFlagChecksResponse.md)
- [ListApiKeysParams](docs/Model/ListApiKeysParams.md)
- [ListApiKeysResponse](docs/Model/ListApiKeysResponse.md)
- [ListCompaniesParams](docs/Model/ListCompaniesParams.md)
- [ListCompaniesResponse](docs/Model/ListCompaniesResponse.md)
- [ListCompanyMembershipsParams](docs/Model/ListCompanyMembershipsParams.md)
- [ListCompanyMembershipsResponse](docs/Model/ListCompanyMembershipsResponse.md)
- [ListEventTypesParams](docs/Model/ListEventTypesParams.md)
- [ListEventTypesResponse](docs/Model/ListEventTypesResponse.md)
- [ListEventsParams](docs/Model/ListEventsParams.md)
- [ListEventsResponse](docs/Model/ListEventsResponse.md)
- [ListFeaturesParams](docs/Model/ListFeaturesParams.md)
- [ListFeaturesResponse](docs/Model/ListFeaturesResponse.md)
- [ListFlagChecksParams](docs/Model/ListFlagChecksParams.md)
- [ListFlagChecksResponse](docs/Model/ListFlagChecksResponse.md)
- [ListFlagValuesParams](docs/Model/ListFlagValuesParams.md)
- [ListFlagValuesResponse](docs/Model/ListFlagValuesResponse.md)
- [ListFlagsParams](docs/Model/ListFlagsParams.md)
- [ListFlagsResponse](docs/Model/ListFlagsResponse.md)
- [ListMetricCountsHourlyParams](docs/Model/ListMetricCountsHourlyParams.md)
- [ListMetricCountsHourlyResponse](docs/Model/ListMetricCountsHourlyResponse.md)
- [ListMetricCountsParams](docs/Model/ListMetricCountsParams.md)
- [ListMetricCountsResponse](docs/Model/ListMetricCountsResponse.md)
- [ListPlansParams](docs/Model/ListPlansParams.md)
- [ListPlansResponse](docs/Model/ListPlansResponse.md)
- [ListUsersParams](docs/Model/ListUsersParams.md)
- [ListUsersResponse](docs/Model/ListUsersResponse.md)
- [MetricCountsHourlyResponseData](docs/Model/MetricCountsHourlyResponseData.md)
- [PlanResponseData](docs/Model/PlanResponseData.md)
- [RuleConditionGroupDetailResponseData](docs/Model/RuleConditionGroupDetailResponseData.md)
- [RuleConditionGroupResponseData](docs/Model/RuleConditionGroupResponseData.md)
- [RuleConditionResponseData](docs/Model/RuleConditionResponseData.md)
- [RuleDetailResponseData](docs/Model/RuleDetailResponseData.md)
- [RuleResponseData](docs/Model/RuleResponseData.md)
- [SyncCompanyPlansRequestBody](docs/Model/SyncCompanyPlansRequestBody.md)
- [SyncCompanyPlansResponse](docs/Model/SyncCompanyPlansResponse.md)
- [SyncCompanyPlansResponseData](docs/Model/SyncCompanyPlansResponseData.md)
- [UpdateApiKeyRequestBody](docs/Model/UpdateApiKeyRequestBody.md)
- [UpdateApiKeyResponse](docs/Model/UpdateApiKeyResponse.md)
- [UpdateAudienceRequestBody](docs/Model/UpdateAudienceRequestBody.md)
- [UpdateEntityTraitDefinitionRequestBody](docs/Model/UpdateEntityTraitDefinitionRequestBody.md)
- [UpdateEntityTraitDefinitionResponse](docs/Model/UpdateEntityTraitDefinitionResponse.md)
- [UpdateEnvironmentRequestBody](docs/Model/UpdateEnvironmentRequestBody.md)
- [UpdateEnvironmentResponse](docs/Model/UpdateEnvironmentResponse.md)
- [UpdateFeatureRequestBody](docs/Model/UpdateFeatureRequestBody.md)
- [UpdateFeatureResponse](docs/Model/UpdateFeatureResponse.md)
- [UpdateFlagResponse](docs/Model/UpdateFlagResponse.md)
- [UpdatePlanAudienceResponse](docs/Model/UpdatePlanAudienceResponse.md)
- [UpdatePlanRequestBody](docs/Model/UpdatePlanRequestBody.md)
- [UpdatePlanResponse](docs/Model/UpdatePlanResponse.md)
- [UpdateRuleRequestBody](docs/Model/UpdateRuleRequestBody.md)
- [UpdateRuleResponse](docs/Model/UpdateRuleResponse.md)
- [UpsertBillingPeriodRequestBody](docs/Model/UpsertBillingPeriodRequestBody.md)
- [UpsertBillingPeriodResponse](docs/Model/UpsertBillingPeriodResponse.md)
- [UpsertCompanyRequestBody](docs/Model/UpsertCompanyRequestBody.md)
- [UpsertUserRequestBody](docs/Model/UpsertUserRequestBody.md)
- [UpsertUserSubRequestBody](docs/Model/UpsertUserSubRequestBody.md)
- [UserDetailResponseData](docs/Model/UserDetailResponseData.md)
- [UserResponseData](docs/Model/UserResponseData.md)

## Authorization

Authentication schemes defined for the API:
### ApiKeyAuth

- **Type**: API key
- **API key parameter name**: X-Schematic-Api-Key
- **Location**: HTTP header


## Tests

To run the tests, use:

```bash
composer install
vendor/bin/phpunit
```

## Author



## About this package

This PHP package is automatically generated by the [OpenAPI Generator](https://openapi-generator.tech) project:

- API version: `0.1`
- Build package: `org.openapitools.codegen.languages.PhpClientCodegen`
