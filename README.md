# schematic-php

Schematic API

For more information, please visit [https://schematichq.com](https://schematichq.com).

## Installation & Usage

### Requirements

PHP 7.4 and later.
Should also work with PHP 8.0.

### Installation

You can install the Schematic PHP SDK via Composer. Run the following command in your project directory:

```bash
composer require schematichq/schematic-php
```

### Usage

To initialize the Schematic client, provide a secret API key; you can issue an API key in the API Keys section of settings in the Schematic web app.

```php
<?php

require_once 'vendor/autoload.php';

use Schematic\Schematic;

$schematic = new Schematic('YOUR_SECRET_API_KEY');
```

Once you have initialized the Schematic client, you can make API calls using the various API classes provided by the SDK.

```php
$companies = $schematic->CompaniesApi->listCompanies();
```

The SDK throws exceptions in case of API errors. You can catch and handle these exceptions in your code:

```php
try {
    $companies = $schematic->CompaniesApi->listCompanies();
    // Process the companies
} catch (\Exception $e) {
    // Handle the exception
    echo 'Error: ' . $e->getMessage();
}
```

## API Endpoints

The following Schematic API endpoints are accessible via this client library. All URIs are relative to *https://api.schematichq.com*

Class | Method | HTTP request | Description
------------ | ------------- | ------------- | -------------
*AccountsApi* | [**countApiKeys**](docs/Api/AccountsApi.md#countapikeys) | **GET** /api-keys/count | Count api keys
*AccountsApi* | [**countApiRequests**](docs/Api/AccountsApi.md#countapirequests) | **GET** /api-requests/count | Count api requests
*AccountsApi* | [**createApiKey**](docs/Api/AccountsApi.md#createapikey) | **POST** /api-keys | Create api key
*AccountsApi* | [**createEnvironment**](docs/Api/AccountsApi.md#createenvironment) | **POST** /environments | Create environment
*AccountsApi* | [**deleteApiKey**](docs/Api/AccountsApi.md#deleteapikey) | **DELETE** /api-keys/{api_key_id} | Delete api key
*AccountsApi* | [**deleteEnvironment**](docs/Api/AccountsApi.md#deleteenvironment) | **DELETE** /environments/{environment_id} | Delete environment
*AccountsApi* | [**getApiKey**](docs/Api/AccountsApi.md#getapikey) | **GET** /api-keys/{api_key_id} | Get api key
*AccountsApi* | [**getApiRequest**](docs/Api/AccountsApi.md#getapirequest) | **GET** /api-requests/{api_request_id} | Get api request
*AccountsApi* | [**getEnvironment**](docs/Api/AccountsApi.md#getenvironment) | **GET** /environments/{environment_id} | Get environment
*AccountsApi* | [**listApiKeys**](docs/Api/AccountsApi.md#listapikeys) | **GET** /api-keys | List api keys
*AccountsApi* | [**listApiRequests**](docs/Api/AccountsApi.md#listapirequests) | **GET** /api-requests | List api requests
*AccountsApi* | [**updateApiKey**](docs/Api/AccountsApi.md#updateapikey) | **PUT** /api-keys/{api_key_id} | Update api key
*AccountsApi* | [**updateEnvironment**](docs/Api/AccountsApi.md#updateenvironment) | **PUT** /environments/{environment_id} | Update environment
*CompaniesApi* | [**createCompany**](docs/Api/CompaniesApi.md#createcompany) | **POST** /companies/create | Create company
*CompaniesApi* | [**createUser**](docs/Api/CompaniesApi.md#createuser) | **POST** /users/create | Create user
*CompaniesApi* | [**deleteCompany**](docs/Api/CompaniesApi.md#deletecompany) | **DELETE** /companies/{company_id} | Delete company
*CompaniesApi* | [**deleteCompanyByKeys**](docs/Api/CompaniesApi.md#deletecompanybykeys) | **POST** /companies/delete | Delete company by keys
*CompaniesApi* | [**deleteCompanyMembership**](docs/Api/CompaniesApi.md#deletecompanymembership) | **DELETE** /company-memberships/{company_membership_id} | Delete company membership
*CompaniesApi* | [**deleteUser**](docs/Api/CompaniesApi.md#deleteuser) | **DELETE** /users/{user_id} | Delete user
*CompaniesApi* | [**deleteUserByKeys**](docs/Api/CompaniesApi.md#deleteuserbykeys) | **POST** /users/delete | Delete user by keys
*CompaniesApi* | [**getCompany**](docs/Api/CompaniesApi.md#getcompany) | **GET** /companies/{company_id} | Get company
*CompaniesApi* | [**getOrCreateCompanyMembership**](docs/Api/CompaniesApi.md#getorcreatecompanymembership) | **POST** /company-memberships | Get or create company membership
*CompaniesApi* | [**getOrCreateEntityTraitDefinition**](docs/Api/CompaniesApi.md#getorcreateentitytraitdefinition) | **POST** /entity-trait-definitions | Get or create entity trait definition
*CompaniesApi* | [**getUser**](docs/Api/CompaniesApi.md#getuser) | **GET** /users/{user_id} | Get user
*CompaniesApi* | [**listCompanies**](docs/Api/CompaniesApi.md#listcompanies) | **GET** /companies | List companies
*CompaniesApi* | [**listCompanyMemberships**](docs/Api/CompaniesApi.md#listcompanymemberships) | **GET** /company-memberships | List company memberships
*CompaniesApi* | [**listCompanyPlans**](docs/Api/CompaniesApi.md#listcompanyplans) | **GET** /company-plans | List company plans
*CompaniesApi* | [**listUsers**](docs/Api/CompaniesApi.md#listusers) | **GET** /users | List users
*CompaniesApi* | [**lookupCompany**](docs/Api/CompaniesApi.md#lookupcompany) | **GET** /companies/lookup | Lookup company
*CompaniesApi* | [**lookupUser**](docs/Api/CompaniesApi.md#lookupuser) | **GET** /users/lookup | Lookup user
*CompaniesApi* | [**updateEntityTraitDefinition**](docs/Api/CompaniesApi.md#updateentitytraitdefinition) | **PUT** /entity-trait-definitions/{entity_trait_definition_id} | Update entity trait definition
*CompaniesApi* | [**upsertCompany**](docs/Api/CompaniesApi.md#upsertcompany) | **POST** /companies | Upsert company
*CompaniesApi* | [**upsertCompanyTrait**](docs/Api/CompaniesApi.md#upsertcompanytrait) | **POST** /company-traits | Upsert company trait
*CompaniesApi* | [**upsertUser**](docs/Api/CompaniesApi.md#upsertuser) | **POST** /users | Upsert user
*CompaniesApi* | [**upsertUserTrait**](docs/Api/CompaniesApi.md#upsertusertrait) | **POST** /user-traits | Upsert user trait
*EntitlementsApi* | [**createCompanyOverride**](docs/Api/EntitlementsApi.md#createcompanyoverride) | **POST** /company-overrides | Create company override
*EntitlementsApi* | [**createPlanEntitlement**](docs/Api/EntitlementsApi.md#createplanentitlement) | **POST** /plan-entitlements | Create plan entitlement
*EntitlementsApi* | [**deleteCompanyOverride**](docs/Api/EntitlementsApi.md#deletecompanyoverride) | **DELETE** /company-overrides/{company_override_id} | Delete company override
*EntitlementsApi* | [**deletePlanEntitlement**](docs/Api/EntitlementsApi.md#deleteplanentitlement) | **DELETE** /plan-entitlements/{plan_entitlement_id} | Delete plan entitlement
*EntitlementsApi* | [**getCompanyOverride**](docs/Api/EntitlementsApi.md#getcompanyoverride) | **GET** /company-overrides/{company_override_id} | Get company override
*EntitlementsApi* | [**getPlanEntitlement**](docs/Api/EntitlementsApi.md#getplanentitlement) | **GET** /plan-entitlements/{plan_entitlement_id} | Get plan entitlement
*EntitlementsApi* | [**listCompanyOverrides**](docs/Api/EntitlementsApi.md#listcompanyoverrides) | **GET** /company-overrides | List company overrides
*EntitlementsApi* | [**listPlanEntitlements**](docs/Api/EntitlementsApi.md#listplanentitlements) | **GET** /plan-entitlements | List plan entitlements
*EntitlementsApi* | [**updateCompanyOverride**](docs/Api/EntitlementsApi.md#updatecompanyoverride) | **PUT** /company-overrides/{company_override_id} | Update company override
*EntitlementsApi* | [**updatePlanEntitlement**](docs/Api/EntitlementsApi.md#updateplanentitlement) | **PUT** /plan-entitlements/{plan_entitlement_id} | Update plan entitlement
*EventsApi* | [**countEventSummaries**](docs/Api/EventsApi.md#counteventsummaries) | **GET** /event-types/count | Count event summaries
*EventsApi* | [**countEvents**](docs/Api/EventsApi.md#countevents) | **GET** /events/count | Count events
*EventsApi* | [**createEvent**](docs/Api/EventsApi.md#createevent) | **POST** /events | Create event
*EventsApi* | [**createEventBatch**](docs/Api/EventsApi.md#createeventbatch) | **POST** /event-batch | Create event batch
*EventsApi* | [**getEvent**](docs/Api/EventsApi.md#getevent) | **GET** /events/{event_id} | Get event
*EventsApi* | [**getEventSummaries**](docs/Api/EventsApi.md#geteventsummaries) | **GET** /event-types | Get event summaries
*EventsApi* | [**getEventSummaryBySubtype**](docs/Api/EventsApi.md#geteventsummarybysubtype) | **GET** /event-types/{key} | Get event summary by subtype
*EventsApi* | [**listEvents**](docs/Api/EventsApi.md#listevents) | **GET** /events | List events
*EventsApi* | [**listMetricCounts**](docs/Api/EventsApi.md#listmetriccounts) | **GET** /metric-counts | List metric counts
*FeaturesApi* | [**checkFlag**](docs/Api/FeaturesApi.md#checkflag) | **POST** /flags/{key}/check | Check flag
*FeaturesApi* | [**checkFlags**](docs/Api/FeaturesApi.md#checkflags) | **POST** /flags/check | Check flags
*FeaturesApi* | [**countAudienceCompanies**](docs/Api/FeaturesApi.md#countaudiencecompanies) | **POST** /audience/count-companies | Count audience companies
*FeaturesApi* | [**countAudienceUsers**](docs/Api/FeaturesApi.md#countaudienceusers) | **POST** /audience/count-users | Count audience users
*FeaturesApi* | [**countFlagChecks**](docs/Api/FeaturesApi.md#countflagchecks) | **GET** /flag-checks/count | Count flag checks
*FeaturesApi* | [**createFeature**](docs/Api/FeaturesApi.md#createfeature) | **POST** /features | Create feature
*FeaturesApi* | [**createFlag**](docs/Api/FeaturesApi.md#createflag) | **POST** /flags | Create flag
*FeaturesApi* | [**deleteFeature**](docs/Api/FeaturesApi.md#deletefeature) | **DELETE** /features/{feature_id} | Delete feature
*FeaturesApi* | [**deleteFlag**](docs/Api/FeaturesApi.md#deleteflag) | **DELETE** /flags/{flag_id} | Delete flag
*FeaturesApi* | [**getFeature**](docs/Api/FeaturesApi.md#getfeature) | **GET** /features/{feature_id} | Get feature
*FeaturesApi* | [**getFlag**](docs/Api/FeaturesApi.md#getflag) | **GET** /flags/{flag_id} | Get flag
*FeaturesApi* | [**getFlagCheck**](docs/Api/FeaturesApi.md#getflagcheck) | **GET** /flag-checks/{flag_check_id} | Get flag check
*FeaturesApi* | [**getLatestFlagChecks**](docs/Api/FeaturesApi.md#getlatestflagchecks) | **GET** /flag-checks/latest | Get latest flag checks
*FeaturesApi* | [**listAudienceCompanies**](docs/Api/FeaturesApi.md#listaudiencecompanies) | **POST** /audience/get-companies | List audience companies
*FeaturesApi* | [**listAudienceUsers**](docs/Api/FeaturesApi.md#listaudienceusers) | **POST** /audience/get-users | List audience users
*FeaturesApi* | [**listFeatures**](docs/Api/FeaturesApi.md#listfeatures) | **GET** /features | List features
*FeaturesApi* | [**listFlagChecks**](docs/Api/FeaturesApi.md#listflagchecks) | **GET** /flag-checks | List flag checks
*FeaturesApi* | [**listFlags**](docs/Api/FeaturesApi.md#listflags) | **GET** /flags | List flags
*FeaturesApi* | [**updateFeature**](docs/Api/FeaturesApi.md#updatefeature) | **PUT** /features/{feature_id} | Update feature
*FeaturesApi* | [**updateFlag**](docs/Api/FeaturesApi.md#updateflag) | **PUT** /flags/{flag_id} | Update flag
*FeaturesApi* | [**updateFlagRules**](docs/Api/FeaturesApi.md#updateflagrules) | **PUT** /flags/{flag_id}/rules | Update flag rules
*PlansApi* | [**createPlan**](docs/Api/PlansApi.md#createplan) | **POST** /plans | Create plan
*PlansApi* | [**deleteAudience**](docs/Api/PlansApi.md#deleteaudience) | **DELETE** /plan-audiences/{plan_audience_id} | Delete audience
*PlansApi* | [**deletePlan**](docs/Api/PlansApi.md#deleteplan) | **DELETE** /plans/{plan_id} | Delete plan
*PlansApi* | [**getPlan**](docs/Api/PlansApi.md#getplan) | **GET** /plans/{plan_id} | Get plan
*PlansApi* | [**listPlans**](docs/Api/PlansApi.md#listplans) | **GET** /plans | List plans
*PlansApi* | [**updateAudience**](docs/Api/PlansApi.md#updateaudience) | **PUT** /plan-audiences/{plan_audience_id} | Update audience
*PlansApi* | [**updatePlan**](docs/Api/PlansApi.md#updateplan) | **PUT** /plans/{plan_id} | Update plan

## Models

- [ApiError](docs/Model/ApiError.md)
- [ApiKeyCreateResponseData](docs/Model/ApiKeyCreateResponseData.md)
- [ApiKeyRequestListResponseData](docs/Model/ApiKeyRequestListResponseData.md)
- [ApiKeyRequestResponseData](docs/Model/ApiKeyRequestResponseData.md)
- [ApiKeyResponseData](docs/Model/ApiKeyResponseData.md)
- [AudienceRequestBody](docs/Model/AudienceRequestBody.md)
- [CheckFlagOutputWithFlagKey](docs/Model/CheckFlagOutputWithFlagKey.md)
- [CheckFlagRequestBody](docs/Model/CheckFlagRequestBody.md)
- [CheckFlagResponse](docs/Model/CheckFlagResponse.md)
- [CheckFlagResponseData](docs/Model/CheckFlagResponseData.md)
- [CheckFlagsResponse](docs/Model/CheckFlagsResponse.md)
- [CheckFlagsResponseData](docs/Model/CheckFlagsResponseData.md)
- [CompanyDetailResponseData](docs/Model/CompanyDetailResponseData.md)
- [CompanyMembershipDetailResponseData](docs/Model/CompanyMembershipDetailResponseData.md)
- [CompanyMembershipResponseData](docs/Model/CompanyMembershipResponseData.md)
- [CompanyOverrideResponseData](docs/Model/CompanyOverrideResponseData.md)
- [CompanyPlanResponseData](docs/Model/CompanyPlanResponseData.md)
- [CompanyResponseData](docs/Model/CompanyResponseData.md)
- [CountApiKeysParams](docs/Model/CountApiKeysParams.md)
- [CountApiKeysResponse](docs/Model/CountApiKeysResponse.md)
- [CountApiRequestsParams](docs/Model/CountApiRequestsParams.md)
- [CountApiRequestsResponse](docs/Model/CountApiRequestsResponse.md)
- [CountAudienceCompaniesResponse](docs/Model/CountAudienceCompaniesResponse.md)
- [CountAudienceUsersResponse](docs/Model/CountAudienceUsersResponse.md)
- [CountEventSummariesParams](docs/Model/CountEventSummariesParams.md)
- [CountEventSummariesResponse](docs/Model/CountEventSummariesResponse.md)
- [CountEventsParams](docs/Model/CountEventsParams.md)
- [CountEventsResponse](docs/Model/CountEventsResponse.md)
- [CountFlagChecksParams](docs/Model/CountFlagChecksParams.md)
- [CountFlagChecksResponse](docs/Model/CountFlagChecksResponse.md)
- [CountResponse](docs/Model/CountResponse.md)
- [CreateApiKeyRequestBody](docs/Model/CreateApiKeyRequestBody.md)
- [CreateApiKeyResponse](docs/Model/CreateApiKeyResponse.md)
- [CreateCompanyOverrideRequestBody](docs/Model/CreateCompanyOverrideRequestBody.md)
- [CreateCompanyOverrideResponse](docs/Model/CreateCompanyOverrideResponse.md)
- [CreateCompanyResponse](docs/Model/CreateCompanyResponse.md)
- [CreateEntityTraitDefinitionRequestBody](docs/Model/CreateEntityTraitDefinitionRequestBody.md)
- [CreateEnvironmentRequestBody](docs/Model/CreateEnvironmentRequestBody.md)
- [CreateEnvironmentResponse](docs/Model/CreateEnvironmentResponse.md)
- [CreateEventBatchRequestBody](docs/Model/CreateEventBatchRequestBody.md)
- [CreateEventBatchResponse](docs/Model/CreateEventBatchResponse.md)
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
- [CreatePlanEntitlementRequestBody](docs/Model/CreatePlanEntitlementRequestBody.md)
- [CreatePlanEntitlementResponse](docs/Model/CreatePlanEntitlementResponse.md)
- [CreatePlanRequestBody](docs/Model/CreatePlanRequestBody.md)
- [CreatePlanResponse](docs/Model/CreatePlanResponse.md)
- [CreateReqCommon](docs/Model/CreateReqCommon.md)
- [CreateUserResponse](docs/Model/CreateUserResponse.md)
- [DeleteApiKeyResponse](docs/Model/DeleteApiKeyResponse.md)
- [DeleteAudienceResponse](docs/Model/DeleteAudienceResponse.md)
- [DeleteCompanyByKeysResponse](docs/Model/DeleteCompanyByKeysResponse.md)
- [DeleteCompanyMembershipResponse](docs/Model/DeleteCompanyMembershipResponse.md)
- [DeleteCompanyOverrideResponse](docs/Model/DeleteCompanyOverrideResponse.md)
- [DeleteCompanyResponse](docs/Model/DeleteCompanyResponse.md)
- [DeleteEnvironmentResponse](docs/Model/DeleteEnvironmentResponse.md)
- [DeleteFeatureResponse](docs/Model/DeleteFeatureResponse.md)
- [DeleteFlagResponse](docs/Model/DeleteFlagResponse.md)
- [DeletePlanEntitlementResponse](docs/Model/DeletePlanEntitlementResponse.md)
- [DeletePlanResponse](docs/Model/DeletePlanResponse.md)
- [DeleteResponse](docs/Model/DeleteResponse.md)
- [DeleteUserByKeysResponse](docs/Model/DeleteUserByKeysResponse.md)
- [DeleteUserResponse](docs/Model/DeleteUserResponse.md)
- [EntityKeyResponseData](docs/Model/EntityKeyResponseData.md)
- [EntityTraitDefinitionResponseData](docs/Model/EntityTraitDefinitionResponseData.md)
- [EnvironmentDetailResponseData](docs/Model/EnvironmentDetailResponseData.md)
- [EnvironmentResponseData](docs/Model/EnvironmentResponseData.md)
- [EventBody](docs/Model/EventBody.md)
- [EventBodyIdentify](docs/Model/EventBodyIdentify.md)
- [EventBodyIdentifyCompany](docs/Model/EventBodyIdentifyCompany.md)
- [EventBodyTrack](docs/Model/EventBodyTrack.md)
- [EventListResponseData](docs/Model/EventListResponseData.md)
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
- [GetCompanyOverrideResponse](docs/Model/GetCompanyOverrideResponse.md)
- [GetCompanyResponse](docs/Model/GetCompanyResponse.md)
- [GetEnvironmentResponse](docs/Model/GetEnvironmentResponse.md)
- [GetEventResponse](docs/Model/GetEventResponse.md)
- [GetEventSummariesParams](docs/Model/GetEventSummariesParams.md)
- [GetEventSummariesResponse](docs/Model/GetEventSummariesResponse.md)
- [GetEventSummaryBySubtypeResponse](docs/Model/GetEventSummaryBySubtypeResponse.md)
- [GetFeatureResponse](docs/Model/GetFeatureResponse.md)
- [GetFlagCheckResponse](docs/Model/GetFlagCheckResponse.md)
- [GetFlagResponse](docs/Model/GetFlagResponse.md)
- [GetLatestFlagChecksParams](docs/Model/GetLatestFlagChecksParams.md)
- [GetLatestFlagChecksResponse](docs/Model/GetLatestFlagChecksResponse.md)
- [GetOrCreateCompanyMembershipRequestBody](docs/Model/GetOrCreateCompanyMembershipRequestBody.md)
- [GetOrCreateCompanyMembershipResponse](docs/Model/GetOrCreateCompanyMembershipResponse.md)
- [GetOrCreateEntityTraitDefinitionResponse](docs/Model/GetOrCreateEntityTraitDefinitionResponse.md)
- [GetPlanEntitlementResponse](docs/Model/GetPlanEntitlementResponse.md)
- [GetPlanResponse](docs/Model/GetPlanResponse.md)
- [GetUserResponse](docs/Model/GetUserResponse.md)
- [KeysRequestBody](docs/Model/KeysRequestBody.md)
- [ListApiKeysParams](docs/Model/ListApiKeysParams.md)
- [ListApiKeysResponse](docs/Model/ListApiKeysResponse.md)
- [ListApiRequestsParams](docs/Model/ListApiRequestsParams.md)
- [ListApiRequestsResponse](docs/Model/ListApiRequestsResponse.md)
- [ListAudienceCompaniesResponse](docs/Model/ListAudienceCompaniesResponse.md)
- [ListAudienceUsersResponse](docs/Model/ListAudienceUsersResponse.md)
- [ListCompaniesParams](docs/Model/ListCompaniesParams.md)
- [ListCompaniesResponse](docs/Model/ListCompaniesResponse.md)
- [ListCompanyMembershipsParams](docs/Model/ListCompanyMembershipsParams.md)
- [ListCompanyMembershipsResponse](docs/Model/ListCompanyMembershipsResponse.md)
- [ListCompanyOverridesParams](docs/Model/ListCompanyOverridesParams.md)
- [ListCompanyOverridesResponse](docs/Model/ListCompanyOverridesResponse.md)
- [ListCompanyPlansParams](docs/Model/ListCompanyPlansParams.md)
- [ListCompanyPlansResponse](docs/Model/ListCompanyPlansResponse.md)
- [ListEventsParams](docs/Model/ListEventsParams.md)
- [ListEventsResponse](docs/Model/ListEventsResponse.md)
- [ListFeaturesParams](docs/Model/ListFeaturesParams.md)
- [ListFeaturesResponse](docs/Model/ListFeaturesResponse.md)
- [ListFlagChecksParams](docs/Model/ListFlagChecksParams.md)
- [ListFlagChecksResponse](docs/Model/ListFlagChecksResponse.md)
- [ListFlagsParams](docs/Model/ListFlagsParams.md)
- [ListFlagsResponse](docs/Model/ListFlagsResponse.md)
- [ListMetricCountsParams](docs/Model/ListMetricCountsParams.md)
- [ListMetricCountsResponse](docs/Model/ListMetricCountsResponse.md)
- [ListPlanEntitlementsParams](docs/Model/ListPlanEntitlementsParams.md)
- [ListPlanEntitlementsResponse](docs/Model/ListPlanEntitlementsResponse.md)
- [ListPlansParams](docs/Model/ListPlansParams.md)
- [ListPlansResponse](docs/Model/ListPlansResponse.md)
- [ListUsersParams](docs/Model/ListUsersParams.md)
- [ListUsersResponse](docs/Model/ListUsersResponse.md)
- [LookupCompanyParams](docs/Model/LookupCompanyParams.md)
- [LookupCompanyResponse](docs/Model/LookupCompanyResponse.md)
- [LookupUserParams](docs/Model/LookupUserParams.md)
- [LookupUserResponse](docs/Model/LookupUserResponse.md)
- [MetricCountsHourlyResponseData](docs/Model/MetricCountsHourlyResponseData.md)
- [PaginationFilter](docs/Model/PaginationFilter.md)
- [PlanAudienceDetailResponseData](docs/Model/PlanAudienceDetailResponseData.md)
- [PlanAudienceResponseData](docs/Model/PlanAudienceResponseData.md)
- [PlanEntitlementResponseData](docs/Model/PlanEntitlementResponseData.md)
- [PlanResponseData](docs/Model/PlanResponseData.md)
- [RawEventBatchResponseData](docs/Model/RawEventBatchResponseData.md)
- [RawEventResponseData](docs/Model/RawEventResponseData.md)
- [RuleConditionGroupDetailResponseData](docs/Model/RuleConditionGroupDetailResponseData.md)
- [RuleConditionGroupResponseData](docs/Model/RuleConditionGroupResponseData.md)
- [RuleConditionResponseData](docs/Model/RuleConditionResponseData.md)
- [RuleDetailResponseData](docs/Model/RuleDetailResponseData.md)
- [RuleResponseData](docs/Model/RuleResponseData.md)
- [RulesDetailResponseData](docs/Model/RulesDetailResponseData.md)
- [UpdateApiKeyRequestBody](docs/Model/UpdateApiKeyRequestBody.md)
- [UpdateApiKeyResponse](docs/Model/UpdateApiKeyResponse.md)
- [UpdateAudienceRequestBody](docs/Model/UpdateAudienceRequestBody.md)
- [UpdateAudienceResponse](docs/Model/UpdateAudienceResponse.md)
- [UpdateCompanyOverrideRequestBody](docs/Model/UpdateCompanyOverrideRequestBody.md)
- [UpdateCompanyOverrideResponse](docs/Model/UpdateCompanyOverrideResponse.md)
- [UpdateEntityTraitDefinitionRequestBody](docs/Model/UpdateEntityTraitDefinitionRequestBody.md)
- [UpdateEntityTraitDefinitionResponse](docs/Model/UpdateEntityTraitDefinitionResponse.md)
- [UpdateEnvironmentRequestBody](docs/Model/UpdateEnvironmentRequestBody.md)
- [UpdateEnvironmentResponse](docs/Model/UpdateEnvironmentResponse.md)
- [UpdateFeatureRequestBody](docs/Model/UpdateFeatureRequestBody.md)
- [UpdateFeatureResponse](docs/Model/UpdateFeatureResponse.md)
- [UpdateFlagResponse](docs/Model/UpdateFlagResponse.md)
- [UpdateFlagRulesRequestBody](docs/Model/UpdateFlagRulesRequestBody.md)
- [UpdateFlagRulesResponse](docs/Model/UpdateFlagRulesResponse.md)
- [UpdatePlanEntitlementRequestBody](docs/Model/UpdatePlanEntitlementRequestBody.md)
- [UpdatePlanEntitlementResponse](docs/Model/UpdatePlanEntitlementResponse.md)
- [UpdatePlanRequestBody](docs/Model/UpdatePlanRequestBody.md)
- [UpdatePlanResponse](docs/Model/UpdatePlanResponse.md)
- [UpdateReqCommon](docs/Model/UpdateReqCommon.md)
- [UpdateRuleRequestBody](docs/Model/UpdateRuleRequestBody.md)
- [UpsertCompanyRequestBody](docs/Model/UpsertCompanyRequestBody.md)
- [UpsertCompanyResponse](docs/Model/UpsertCompanyResponse.md)
- [UpsertCompanyTraitResponse](docs/Model/UpsertCompanyTraitResponse.md)
- [UpsertTraitRequestBody](docs/Model/UpsertTraitRequestBody.md)
- [UpsertUserRequestBody](docs/Model/UpsertUserRequestBody.md)
- [UpsertUserResponse](docs/Model/UpsertUserResponse.md)
- [UpsertUserSubRequestBody](docs/Model/UpsertUserSubRequestBody.md)
- [UpsertUserTraitResponse](docs/Model/UpsertUserTraitResponse.md)
- [UserDetailResponseData](docs/Model/UserDetailResponseData.md)
- [UserResponseData](docs/Model/UserResponseData.md)

## Author

engineering@schematichq.com


## Support

If you encounter any issues or have questions regarding the Schematic PHP SDK, please contact our support team at support@schematic.com.
