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
$config = Schematic\Configuration::getDefaultConfiguration()->setApiKey('X-Schematic-Api-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Schematic\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Schematic-Api-Key', 'Bearer');


$apiInstance = new Schematic\Api\SchematicApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$key = 'key_example'; // string | key
$check_flag_request_body = new \Schematic\Model\CheckFlagRequestBody(); // \Schematic\Model\CheckFlagRequestBody
$x_schematic_environment_id = 'x_schematic_environment_id_example'; // string | If the request is made using an API key that is not environment-scoped, specify the environment using this header

try {
    $result = $apiInstance->checkFlag($key, $check_flag_request_body, $x_schematic_environment_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SchematicApi->checkFlag: ', $e->getMessage(), PHP_EOL;
}

```

## API Endpoints

All URIs are relative to *https://api.schematichq.com*

Class | Method | HTTP request | Description
------------ | ------------- | ------------- | -------------
*SchematicApi* | [**checkFlag**](docs/Api/SchematicApi.md#checkflag) | **POST** /flags/{key}/check | Check flag
*SchematicApi* | [**checkFlags**](docs/Api/SchematicApi.md#checkflags) | **POST** /flags/check | Check flags
*SchematicApi* | [**countApiKeys**](docs/Api/SchematicApi.md#countapikeys) | **GET** /api-keys/count | Count api keys
*SchematicApi* | [**countApiRequests**](docs/Api/SchematicApi.md#countapirequests) | **GET** /api-requests/count | Count api requests
*SchematicApi* | [**countCompaniesAudience**](docs/Api/SchematicApi.md#countcompaniesaudience) | **POST** /audience/count-companies | Count Companies audience
*SchematicApi* | [**countEventTypes**](docs/Api/SchematicApi.md#counteventtypes) | **GET** /event-types/count | Count event types
*SchematicApi* | [**countEvents**](docs/Api/SchematicApi.md#countevents) | **GET** /events/count | Count events
*SchematicApi* | [**countFlagChecks**](docs/Api/SchematicApi.md#countflagchecks) | **GET** /flag-checks/count | Count flag checks
*SchematicApi* | [**countFlagValues**](docs/Api/SchematicApi.md#countflagvalues) | **GET** /flag-values/count | Count flag values
*SchematicApi* | [**countUsersAudience**](docs/Api/SchematicApi.md#countusersaudience) | **POST** /audience/count-users | Count Users audience
*SchematicApi* | [**createApiKey**](docs/Api/SchematicApi.md#createapikey) | **POST** /api-keys | Create api key
*SchematicApi* | [**createCompany**](docs/Api/SchematicApi.md#createcompany) | **POST** /companies | Create company
*SchematicApi* | [**createCompanyMembership**](docs/Api/SchematicApi.md#createcompanymembership) | **POST** /company-memberships | Create company membership
*SchematicApi* | [**createEnvironment**](docs/Api/SchematicApi.md#createenvironment) | **POST** /environments | Create environment
*SchematicApi* | [**createEvent**](docs/Api/SchematicApi.md#createevent) | **POST** /events | Create event
*SchematicApi* | [**createFeature**](docs/Api/SchematicApi.md#createfeature) | **POST** /features | Create feature
*SchematicApi* | [**createFlag**](docs/Api/SchematicApi.md#createflag) | **POST** /flags | Create flag
*SchematicApi* | [**createPlan**](docs/Api/SchematicApi.md#createplan) | **POST** /plans | Create plan
*SchematicApi* | [**createRule**](docs/Api/SchematicApi.md#createrule) | **POST** /rules | Create rule
*SchematicApi* | [**createUser**](docs/Api/SchematicApi.md#createuser) | **POST** /users | Create user
*SchematicApi* | [**deleteApiKey**](docs/Api/SchematicApi.md#deleteapikey) | **DELETE** /api-keys/{api_key_id} | Delete api key
*SchematicApi* | [**deleteCompanyMembership**](docs/Api/SchematicApi.md#deletecompanymembership) | **DELETE** /company-memberships/{company_membership_id} | Delete company membership
*SchematicApi* | [**deleteEnvironment**](docs/Api/SchematicApi.md#deleteenvironment) | **DELETE** /environments/{environment_id} | Delete environment
*SchematicApi* | [**deleteFeature**](docs/Api/SchematicApi.md#deletefeature) | **DELETE** /features/{feature_id} | Delete feature
*SchematicApi* | [**deleteFlag**](docs/Api/SchematicApi.md#deleteflag) | **DELETE** /flags/{flag_id} | Delete flag
*SchematicApi* | [**deletePlan**](docs/Api/SchematicApi.md#deleteplan) | **DELETE** /plans/{plan_id} | Delete plan
*SchematicApi* | [**getApiKey**](docs/Api/SchematicApi.md#getapikey) | **GET** /api-keys/{api_key_id} | Get api key
*SchematicApi* | [**getApiRequest**](docs/Api/SchematicApi.md#getapirequest) | **GET** /api-requests/{api_request_id} | Get api request
*SchematicApi* | [**getCompaniesAudience**](docs/Api/SchematicApi.md#getcompaniesaudience) | **POST** /audience/get-companies | Get Companies audience
*SchematicApi* | [**getCompany**](docs/Api/SchematicApi.md#getcompany) | **GET** /companies/{company_id} | Get company
*SchematicApi* | [**getEnvironment**](docs/Api/SchematicApi.md#getenvironment) | **GET** /environments/{environment_id} | Get environment
*SchematicApi* | [**getEvent**](docs/Api/SchematicApi.md#getevent) | **GET** /events/{event_id} | Get event
*SchematicApi* | [**getEventType**](docs/Api/SchematicApi.md#geteventtype) | **GET** /event-types/{key} | Get event type
*SchematicApi* | [**getFeature**](docs/Api/SchematicApi.md#getfeature) | **GET** /features/{feature_id} | Get feature
*SchematicApi* | [**getFlag**](docs/Api/SchematicApi.md#getflag) | **GET** /flags/{flag_id} | Get flag
*SchematicApi* | [**getFlagCheck**](docs/Api/SchematicApi.md#getflagcheck) | **GET** /flag-checks/{flag_check_id} | Get flag check
*SchematicApi* | [**getPlan**](docs/Api/SchematicApi.md#getplan) | **GET** /plans/{plan_id} | Get plan
*SchematicApi* | [**getRule**](docs/Api/SchematicApi.md#getrule) | **GET** /rules/{rule_id} | Get rule
*SchematicApi* | [**getUser**](docs/Api/SchematicApi.md#getuser) | **GET** /users/{user_id} | Get user
*SchematicApi* | [**getUsersAudience**](docs/Api/SchematicApi.md#getusersaudience) | **POST** /audience/get-users | Get Users audience
*SchematicApi* | [**latestFlagChecks**](docs/Api/SchematicApi.md#latestflagchecks) | **GET** /flag-checks/latest | Latest flag checks
*SchematicApi* | [**listApiKeys**](docs/Api/SchematicApi.md#listapikeys) | **GET** /api-keys | List api keys
*SchematicApi* | [**listApiRequests**](docs/Api/SchematicApi.md#listapirequests) | **GET** /api-requests | List api requests
*SchematicApi* | [**listCompanies**](docs/Api/SchematicApi.md#listcompanies) | **GET** /companies | List companies
*SchematicApi* | [**listCompanyMemberships**](docs/Api/SchematicApi.md#listcompanymemberships) | **GET** /company-memberships | List company memberships
*SchematicApi* | [**listCompanyPlans**](docs/Api/SchematicApi.md#listcompanyplans) | **GET** /company-plans | List company plans
*SchematicApi* | [**listEventTypes**](docs/Api/SchematicApi.md#listeventtypes) | **GET** /event-types | List event types
*SchematicApi* | [**listEvents**](docs/Api/SchematicApi.md#listevents) | **GET** /events | List events
*SchematicApi* | [**listFeatures**](docs/Api/SchematicApi.md#listfeatures) | **GET** /features | List features
*SchematicApi* | [**listFlagChecks**](docs/Api/SchematicApi.md#listflagchecks) | **GET** /flag-checks | List flag checks
*SchematicApi* | [**listFlagValues**](docs/Api/SchematicApi.md#listflagvalues) | **GET** /flag-values | List flag values
*SchematicApi* | [**listFlags**](docs/Api/SchematicApi.md#listflags) | **GET** /flags | List flags
*SchematicApi* | [**listMetricCounts**](docs/Api/SchematicApi.md#listmetriccounts) | **GET** /metric-counts | List metric counts
*SchematicApi* | [**listMetricCountsHourly**](docs/Api/SchematicApi.md#listmetriccountshourly) | **GET** /metric-counts-hourly | List metric counts hourly
*SchematicApi* | [**listPlans**](docs/Api/SchematicApi.md#listplans) | **GET** /plans | List plans
*SchematicApi* | [**listUsers**](docs/Api/SchematicApi.md#listusers) | **GET** /users | List users
*SchematicApi* | [**updateApiKey**](docs/Api/SchematicApi.md#updateapikey) | **PUT** /api-keys/{api_key_id} | Update api key
*SchematicApi* | [**updateEntityTraitDefinition**](docs/Api/SchematicApi.md#updateentitytraitdefinition) | **PUT** /entity-trait-definitions/{entity_trait_definition_id} | Update entity trait definition
*SchematicApi* | [**updateEnvironment**](docs/Api/SchematicApi.md#updateenvironment) | **PUT** /environments/{environment_id} | Update environment
*SchematicApi* | [**updateFeature**](docs/Api/SchematicApi.md#updatefeature) | **PUT** /features/{feature_id} | Update feature
*SchematicApi* | [**updateFlag**](docs/Api/SchematicApi.md#updateflag) | **PUT** /flags/{flag_id} | Update flag
*SchematicApi* | [**updatePlan**](docs/Api/SchematicApi.md#updateplan) | **PUT** /plans/{plan_id} | Update plan
*SchematicApi* | [**updatePlanAudience**](docs/Api/SchematicApi.md#updateplanaudience) | **PUT** /plan-audiences/{plan_audience_id} | Update plan audience
*SchematicApi* | [**updateRule**](docs/Api/SchematicApi.md#updaterule) | **PUT** /rules/{rule_id} | Update rule
*SchematicApi* | [**upsertBillingPeriod**](docs/Api/SchematicApi.md#upsertbillingperiod) | **POST** /billing-periods/{key}/upsert | Upsert billing period

## Models

- [ApiError](docs/Model/ApiError.md)
- [ApiKeyCreateResponseData](docs/Model/ApiKeyCreateResponseData.md)
- [ApiKeyRequestListResponseData](docs/Model/ApiKeyRequestListResponseData.md)
- [ApiKeyRequestResponseData](docs/Model/ApiKeyRequestResponseData.md)
- [ApiKeyResponseData](docs/Model/ApiKeyResponseData.md)
- [AudienceRequestBody](docs/Model/AudienceRequestBody.md)
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
- [CountApiRequestsParams](docs/Model/CountApiRequestsParams.md)
- [CountApiRequestsResponse](docs/Model/CountApiRequestsResponse.md)
- [CountCompaniesAudienceResponse](docs/Model/CountCompaniesAudienceResponse.md)
- [CountEventTypesParams](docs/Model/CountEventTypesParams.md)
- [CountEventTypesResponse](docs/Model/CountEventTypesResponse.md)
- [CountEventsParams](docs/Model/CountEventsParams.md)
- [CountEventsResponse](docs/Model/CountEventsResponse.md)
- [CountFlagChecksParams](docs/Model/CountFlagChecksParams.md)
- [CountFlagChecksResponse](docs/Model/CountFlagChecksResponse.md)
- [CountFlagValuesParams](docs/Model/CountFlagValuesParams.md)
- [CountFlagValuesResponse](docs/Model/CountFlagValuesResponse.md)
- [CountResponse](docs/Model/CountResponse.md)
- [CountUsersAudienceResponse](docs/Model/CountUsersAudienceResponse.md)
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
- [FlagCheckLogDetailResponseData](docs/Model/FlagCheckLogDetailResponseData.md)
- [FlagCheckLogResponseData](docs/Model/FlagCheckLogResponseData.md)
- [FlagDetailResponseData](docs/Model/FlagDetailResponseData.md)
- [FlagResponseData](docs/Model/FlagResponseData.md)
- [GetApiKeyResponse](docs/Model/GetApiKeyResponse.md)
- [GetApiRequestResponse](docs/Model/GetApiRequestResponse.md)
- [GetCompaniesAudienceResponse](docs/Model/GetCompaniesAudienceResponse.md)
- [GetCompanyResponse](docs/Model/GetCompanyResponse.md)
- [GetEnvironmentResponse](docs/Model/GetEnvironmentResponse.md)
- [GetEventResponse](docs/Model/GetEventResponse.md)
- [GetEventTypeResponse](docs/Model/GetEventTypeResponse.md)
- [GetFeatureResponse](docs/Model/GetFeatureResponse.md)
- [GetFlagCheckResponse](docs/Model/GetFlagCheckResponse.md)
- [GetFlagResponse](docs/Model/GetFlagResponse.md)
- [GetOrCreateCompanyMembershipRequestBody](docs/Model/GetOrCreateCompanyMembershipRequestBody.md)
- [GetPlanResponse](docs/Model/GetPlanResponse.md)
- [GetRuleResponse](docs/Model/GetRuleResponse.md)
- [GetUserResponse](docs/Model/GetUserResponse.md)
- [GetUsersAudienceResponse](docs/Model/GetUsersAudienceResponse.md)
- [LatestFlagChecksParams](docs/Model/LatestFlagChecksParams.md)
- [LatestFlagChecksResponse](docs/Model/LatestFlagChecksResponse.md)
- [ListApiKeysParams](docs/Model/ListApiKeysParams.md)
- [ListApiKeysResponse](docs/Model/ListApiKeysResponse.md)
- [ListApiRequestsParams](docs/Model/ListApiRequestsParams.md)
- [ListApiRequestsResponse](docs/Model/ListApiRequestsResponse.md)
- [ListCompaniesParams](docs/Model/ListCompaniesParams.md)
- [ListCompaniesResponse](docs/Model/ListCompaniesResponse.md)
- [ListCompanyMembershipsParams](docs/Model/ListCompanyMembershipsParams.md)
- [ListCompanyMembershipsResponse](docs/Model/ListCompanyMembershipsResponse.md)
- [ListCompanyPlansParams](docs/Model/ListCompanyPlansParams.md)
- [ListCompanyPlansResponse](docs/Model/ListCompanyPlansResponse.md)
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
- [PaginationFilter](docs/Model/PaginationFilter.md)
- [PlanResponseData](docs/Model/PlanResponseData.md)
- [RuleConditionGroupDetailResponseData](docs/Model/RuleConditionGroupDetailResponseData.md)
- [RuleConditionGroupResponseData](docs/Model/RuleConditionGroupResponseData.md)
- [RuleConditionResponseData](docs/Model/RuleConditionResponseData.md)
- [RuleDetailResponseData](docs/Model/RuleDetailResponseData.md)
- [RuleResponseData](docs/Model/RuleResponseData.md)
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
    - Package version: `0.0.4`
- Build package: `org.openapitools.codegen.languages.PhpClientCodegen`
