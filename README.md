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
$companies = $schematic->Companies->listCompanies();
```

The SDK throws exceptions in case of API errors. You can catch and handle these exceptions in your code:

```php
try {
    $companies = $schematic->Companies->listCompanies();
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
*CompaniesApi* | [**createCompany**](docs/Api/CompaniesApi.md#createcompany) | **POST** /companies | Create company
*CompaniesApi* | [**createCompanyMembership**](docs/Api/CompaniesApi.md#createcompanymembership) | **POST** /company-memberships | Create company membership
*CompaniesApi* | [**createCompanyTrait**](docs/Api/CompaniesApi.md#createcompanytrait) | **POST** /company-traits | Create company trait
*CompaniesApi* | [**createEntityTraitDefinition**](docs/Api/CompaniesApi.md#createentitytraitdefinition) | **POST** /entity-trait-definitions | Create entity trait definition
*CompaniesApi* | [**createUser**](docs/Api/CompaniesApi.md#createuser) | **POST** /users | Create user
*CompaniesApi* | [**createUserTrait**](docs/Api/CompaniesApi.md#createusertrait) | **POST** /user-traits | Create user trait
*CompaniesApi* | [**deleteCompany**](docs/Api/CompaniesApi.md#deletecompany) | **DELETE** /companies/{company_id} | Delete company
*CompaniesApi* | [**deleteCompanyMembership**](docs/Api/CompaniesApi.md#deletecompanymembership) | **DELETE** /company-memberships/{company_membership_id} | Delete company membership
*CompaniesApi* | [**deleteUser**](docs/Api/CompaniesApi.md#deleteuser) | **DELETE** /users/{user_id} | Delete user
*CompaniesApi* | [**getCompany**](docs/Api/CompaniesApi.md#getcompany) | **GET** /companies/{company_id} | Get company
*CompaniesApi* | [**getUser**](docs/Api/CompaniesApi.md#getuser) | **GET** /users/{user_id} | Get user
*CompaniesApi* | [**listCompanies**](docs/Api/CompaniesApi.md#listcompanies) | **GET** /companies | List companies
*CompaniesApi* | [**listCompanyMemberships**](docs/Api/CompaniesApi.md#listcompanymemberships) | **GET** /company-memberships | List company memberships
*CompaniesApi* | [**listCompanyPlans**](docs/Api/CompaniesApi.md#listcompanyplans) | **GET** /company-plans | List company plans
*CompaniesApi* | [**listUsers**](docs/Api/CompaniesApi.md#listusers) | **GET** /users | List users
*CompaniesApi* | [**lookupCompany**](docs/Api/CompaniesApi.md#lookupcompany) | **GET** /companies/lookup | Lookup company
*CompaniesApi* | [**lookupUser**](docs/Api/CompaniesApi.md#lookupuser) | **GET** /users/lookup | Lookup user
*CompaniesApi* | [**updateEntityTraitDefinition**](docs/Api/CompaniesApi.md#updateentitytraitdefinition) | **PUT** /entity-trait-definitions/{entity_trait_definition_id} | Update entity trait definition
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
*FeaturesApi* | [**countCompaniesAudience**](docs/Api/FeaturesApi.md#countcompaniesaudience) | **POST** /audience/count-companies | Count Companies audience
*FeaturesApi* | [**countFlagChecks**](docs/Api/FeaturesApi.md#countflagchecks) | **GET** /flag-checks/count | Count flag checks
*FeaturesApi* | [**countUsersAudience**](docs/Api/FeaturesApi.md#countusersaudience) | **POST** /audience/count-users | Count Users audience
*FeaturesApi* | [**createFeature**](docs/Api/FeaturesApi.md#createfeature) | **POST** /features | Create feature
*FeaturesApi* | [**createFlag**](docs/Api/FeaturesApi.md#createflag) | **POST** /flags | Create flag
*FeaturesApi* | [**deleteFeature**](docs/Api/FeaturesApi.md#deletefeature) | **DELETE** /features/{feature_id} | Delete feature
*FeaturesApi* | [**deleteFlag**](docs/Api/FeaturesApi.md#deleteflag) | **DELETE** /flags/{flag_id} | Delete flag
*FeaturesApi* | [**getCompaniesAudience**](docs/Api/FeaturesApi.md#getcompaniesaudience) | **POST** /audience/get-companies | Get Companies audience
*FeaturesApi* | [**getFeature**](docs/Api/FeaturesApi.md#getfeature) | **GET** /features/{feature_id} | Get feature
*FeaturesApi* | [**getFlag**](docs/Api/FeaturesApi.md#getflag) | **GET** /flags/{flag_id} | Get flag
*FeaturesApi* | [**getFlagCheck**](docs/Api/FeaturesApi.md#getflagcheck) | **GET** /flag-checks/{flag_check_id} | Get flag check
*FeaturesApi* | [**getUsersAudience**](docs/Api/FeaturesApi.md#getusersaudience) | **POST** /audience/get-users | Get Users audience
*FeaturesApi* | [**latestFlagChecks**](docs/Api/FeaturesApi.md#latestflagchecks) | **GET** /flag-checks/latest | Latest flag checks
*FeaturesApi* | [**listFeatures**](docs/Api/FeaturesApi.md#listfeatures) | **GET** /features | List features
*FeaturesApi* | [**listFlagChecks**](docs/Api/FeaturesApi.md#listflagchecks) | **GET** /flag-checks | List flag checks
*FeaturesApi* | [**listFlags**](docs/Api/FeaturesApi.md#listflags) | **GET** /flags | List flags
*FeaturesApi* | [**rulesFlag**](docs/Api/FeaturesApi.md#rulesflag) | **PUT** /flags/{flag_id}/rules | Rules flag
*FeaturesApi* | [**updateFeature**](docs/Api/FeaturesApi.md#updatefeature) | **PUT** /features/{feature_id} | Update feature
*FeaturesApi* | [**updateFlag**](docs/Api/FeaturesApi.md#updateflag) | **PUT** /flags/{flag_id} | Update flag
*PlansApi* | [**createPlan**](docs/Api/PlansApi.md#createplan) | **POST** /plans | Create plan
*PlansApi* | [**deletePlan**](docs/Api/PlansApi.md#deleteplan) | **DELETE** /plans/{plan_id} | Delete plan
*PlansApi* | [**deletePlanAudience**](docs/Api/PlansApi.md#deleteplanaudience) | **DELETE** /plan-audiences/{plan_audience_id} | Delete plan audience
*PlansApi* | [**getPlan**](docs/Api/PlansApi.md#getplan) | **GET** /plans/{plan_id} | Get plan
*PlansApi* | [**listPlans**](docs/Api/PlansApi.md#listplans) | **GET** /plans | List plans
*PlansApi* | [**updatePlan**](docs/Api/PlansApi.md#updateplan) | **PUT** /plans/{plan_id} | Update plan
*PlansApi* | [**updatePlanAudience**](docs/Api/PlansApi.md#updateplanaudience) | **PUT** /plan-audiences/{plan_audience_id} | Update plan audience

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
- [CountCompaniesAudienceResponse](docs/Model/CountCompaniesAudienceResponse.md)
- [CountEventTypesParams](docs/Model/CountEventTypesParams.md)
- [CountEventTypesResponse](docs/Model/CountEventTypesResponse.md)
- [CountEventsParams](docs/Model/CountEventsParams.md)
- [CountEventsResponse](docs/Model/CountEventsResponse.md)
- [CountFlagChecksParams](docs/Model/CountFlagChecksParams.md)
- [CountFlagChecksResponse](docs/Model/CountFlagChecksResponse.md)
- [CountResponse](docs/Model/CountResponse.md)
- [CountUsersAudienceResponse](docs/Model/CountUsersAudienceResponse.md)
- [CreateApiKeyRequestBody](docs/Model/CreateApiKeyRequestBody.md)
- [CreateApiKeyResponse](docs/Model/CreateApiKeyResponse.md)
- [CreateCompanyMembershipResponse](docs/Model/CreateCompanyMembershipResponse.md)
- [CreateCompanyOverrideRequestBody](docs/Model/CreateCompanyOverrideRequestBody.md)
- [CreateCompanyOverrideResponse](docs/Model/CreateCompanyOverrideResponse.md)
- [CreateCompanyResponse](docs/Model/CreateCompanyResponse.md)
- [CreateCompanyTraitResponse](docs/Model/CreateCompanyTraitResponse.md)
- [CreateEntityTraitDefinitionRequestBody](docs/Model/CreateEntityTraitDefinitionRequestBody.md)
- [CreateEntityTraitDefinitionResponse](docs/Model/CreateEntityTraitDefinitionResponse.md)
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
- [CreatePlanEntitlementRequestBody](docs/Model/CreatePlanEntitlementRequestBody.md)
- [CreatePlanEntitlementResponse](docs/Model/CreatePlanEntitlementResponse.md)
- [CreatePlanRequestBody](docs/Model/CreatePlanRequestBody.md)
- [CreatePlanResponse](docs/Model/CreatePlanResponse.md)
- [CreateReqCommon](docs/Model/CreateReqCommon.md)
- [CreateUserResponse](docs/Model/CreateUserResponse.md)
- [CreateUserTraitResponse](docs/Model/CreateUserTraitResponse.md)
- [DeleteApiKeyResponse](docs/Model/DeleteApiKeyResponse.md)
- [DeleteCompanyMembershipResponse](docs/Model/DeleteCompanyMembershipResponse.md)
- [DeleteCompanyOverrideResponse](docs/Model/DeleteCompanyOverrideResponse.md)
- [DeleteCompanyResponse](docs/Model/DeleteCompanyResponse.md)
- [DeleteEnvironmentResponse](docs/Model/DeleteEnvironmentResponse.md)
- [DeleteFeatureResponse](docs/Model/DeleteFeatureResponse.md)
- [DeleteFlagResponse](docs/Model/DeleteFlagResponse.md)
- [DeletePlanAudienceResponse](docs/Model/DeletePlanAudienceResponse.md)
- [DeletePlanEntitlementResponse](docs/Model/DeletePlanEntitlementResponse.md)
- [DeletePlanResponse](docs/Model/DeletePlanResponse.md)
- [DeleteResponse](docs/Model/DeleteResponse.md)
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
- [GetCompaniesAudienceResponse](docs/Model/GetCompaniesAudienceResponse.md)
- [GetCompanyOverrideResponse](docs/Model/GetCompanyOverrideResponse.md)
- [GetCompanyResponse](docs/Model/GetCompanyResponse.md)
- [GetEnvironmentResponse](docs/Model/GetEnvironmentResponse.md)
- [GetEventResponse](docs/Model/GetEventResponse.md)
- [GetEventTypeResponse](docs/Model/GetEventTypeResponse.md)
- [GetFeatureResponse](docs/Model/GetFeatureResponse.md)
- [GetFlagCheckResponse](docs/Model/GetFlagCheckResponse.md)
- [GetFlagResponse](docs/Model/GetFlagResponse.md)
- [GetOrCreateCompanyMembershipRequestBody](docs/Model/GetOrCreateCompanyMembershipRequestBody.md)
- [GetPlanEntitlementResponse](docs/Model/GetPlanEntitlementResponse.md)
- [GetPlanResponse](docs/Model/GetPlanResponse.md)
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
- [ListCompanyOverridesParams](docs/Model/ListCompanyOverridesParams.md)
- [ListCompanyOverridesResponse](docs/Model/ListCompanyOverridesResponse.md)
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
- [ListFlagsParams](docs/Model/ListFlagsParams.md)
- [ListFlagsResponse](docs/Model/ListFlagsResponse.md)
- [ListMetricCountsHourlyParams](docs/Model/ListMetricCountsHourlyParams.md)
- [ListMetricCountsHourlyResponse](docs/Model/ListMetricCountsHourlyResponse.md)
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
- [PlanEntitlementResponseData](docs/Model/PlanEntitlementResponseData.md)
- [PlanResponseData](docs/Model/PlanResponseData.md)
- [RawEventResponseData](docs/Model/RawEventResponseData.md)
- [RuleConditionGroupDetailResponseData](docs/Model/RuleConditionGroupDetailResponseData.md)
- [RuleConditionGroupResponseData](docs/Model/RuleConditionGroupResponseData.md)
- [RuleConditionResponseData](docs/Model/RuleConditionResponseData.md)
- [RuleDetailResponseData](docs/Model/RuleDetailResponseData.md)
- [RuleResponseData](docs/Model/RuleResponseData.md)
- [RulesDetailResponseData](docs/Model/RulesDetailResponseData.md)
- [RulesFlagResponse](docs/Model/RulesFlagResponse.md)
- [UpdateApiKeyRequestBody](docs/Model/UpdateApiKeyRequestBody.md)
- [UpdateApiKeyResponse](docs/Model/UpdateApiKeyResponse.md)
- [UpdateAudienceRequestBody](docs/Model/UpdateAudienceRequestBody.md)
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
- [UpdatePlanAudienceResponse](docs/Model/UpdatePlanAudienceResponse.md)
- [UpdatePlanEntitlementRequestBody](docs/Model/UpdatePlanEntitlementRequestBody.md)
- [UpdatePlanEntitlementResponse](docs/Model/UpdatePlanEntitlementResponse.md)
- [UpdatePlanRequestBody](docs/Model/UpdatePlanRequestBody.md)
- [UpdatePlanResponse](docs/Model/UpdatePlanResponse.md)
- [UpdateReqCommon](docs/Model/UpdateReqCommon.md)
- [UpdateRuleRequestBody](docs/Model/UpdateRuleRequestBody.md)
- [UpsertCompanyRequestBody](docs/Model/UpsertCompanyRequestBody.md)
- [UpsertTraitRequestBody](docs/Model/UpsertTraitRequestBody.md)
- [UpsertUserRequestBody](docs/Model/UpsertUserRequestBody.md)
- [UpsertUserSubRequestBody](docs/Model/UpsertUserSubRequestBody.md)
- [UserDetailResponseData](docs/Model/UserDetailResponseData.md)
- [UserResponseData](docs/Model/UserResponseData.md)

## Author




## Support

If you encounter any issues or have questions regarding the Schematic PHP SDK, please contact our support team at support@schematic.com.
