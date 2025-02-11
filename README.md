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
*AccesstokensApi* | [**issueTemporaryAccessToken**](docs/Api/AccesstokensApi.md#issuetemporaryaccesstoken) | **POST** /temporary-access-tokens | Issue temporary access token
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
*AccountsApi* | [**listEnvironments**](docs/Api/AccountsApi.md#listenvironments) | **GET** /environments | List environments
*AccountsApi* | [**updateApiKey**](docs/Api/AccountsApi.md#updateapikey) | **PUT** /api-keys/{api_key_id} | Update api key
*AccountsApi* | [**updateEnvironment**](docs/Api/AccountsApi.md#updateenvironment) | **PUT** /environments/{environment_id} | Update environment
*BillingApi* | [**countBillingProducts**](docs/Api/BillingApi.md#countbillingproducts) | **GET** /billing/products/count | Count billing products
*BillingApi* | [**countCustomers**](docs/Api/BillingApi.md#countcustomers) | **GET** /billing/customers/count | Count customers
*BillingApi* | [**deleteProductPrice**](docs/Api/BillingApi.md#deleteproductprice) | **DELETE** /billing/product/prices/{billing_id} | Delete product price
*BillingApi* | [**listBillingProducts**](docs/Api/BillingApi.md#listbillingproducts) | **GET** /billing/products | List billing products
*BillingApi* | [**listCustomers**](docs/Api/BillingApi.md#listcustomers) | **GET** /billing/customers | List customers
*BillingApi* | [**listInvoices**](docs/Api/BillingApi.md#listinvoices) | **GET** /billing/invoices | List invoices
*BillingApi* | [**listMeters**](docs/Api/BillingApi.md#listmeters) | **GET** /billing/meter | List meters
*BillingApi* | [**listPaymentMethods**](docs/Api/BillingApi.md#listpaymentmethods) | **GET** /billing/payment-methods | List payment methods
*BillingApi* | [**listProductPrices**](docs/Api/BillingApi.md#listproductprices) | **GET** /billing/product/prices | List product prices
*BillingApi* | [**searchBillingPrices**](docs/Api/BillingApi.md#searchbillingprices) | **GET** /billing/price | Search billing prices
*BillingApi* | [**upsertBillingCoupon**](docs/Api/BillingApi.md#upsertbillingcoupon) | **POST** /billing/coupons | Upsert billing coupon
*BillingApi* | [**upsertBillingCustomer**](docs/Api/BillingApi.md#upsertbillingcustomer) | **POST** /billing/customer/upsert | Upsert billing customer
*BillingApi* | [**upsertBillingMeter**](docs/Api/BillingApi.md#upsertbillingmeter) | **POST** /billing/meter/upsert | Upsert billing meter
*BillingApi* | [**upsertBillingPrice**](docs/Api/BillingApi.md#upsertbillingprice) | **POST** /billing/price/upsert | Upsert billing price
*BillingApi* | [**upsertBillingProduct**](docs/Api/BillingApi.md#upsertbillingproduct) | **POST** /billing/product/upsert | Upsert billing product
*BillingApi* | [**upsertBillingSubscription**](docs/Api/BillingApi.md#upsertbillingsubscription) | **POST** /billing/subscription/upsert | Upsert billing subscription
*BillingApi* | [**upsertInvoice**](docs/Api/BillingApi.md#upsertinvoice) | **POST** /billing/invoices | Upsert invoice
*BillingApi* | [**upsertPaymentMethod**](docs/Api/BillingApi.md#upsertpaymentmethod) | **POST** /billing/payment-methods | Upsert payment method
*CheckoutApi* | [**checkoutInternal**](docs/Api/CheckoutApi.md#checkoutinternal) | **POST** /checkout-internal | Checkout internal
*CheckoutApi* | [**getCheckoutData**](docs/Api/CheckoutApi.md#getcheckoutdata) | **GET** /checkout-internal/{checkout_internal_id}/data | Get checkout data
*CheckoutApi* | [**previewCheckoutInternal**](docs/Api/CheckoutApi.md#previewcheckoutinternal) | **POST** /checkout-internal/preview | Preview checkout internal
*CheckoutApi* | [**updateCustomerSubscriptionTrialEnd**](docs/Api/CheckoutApi.md#updatecustomersubscriptiontrialend) | **PUT** /subscription/{subscription_id}/edit-trial-end | Update customer subscription trial end
*CompaniesApi* | [**countCompanies**](docs/Api/CompaniesApi.md#countcompanies) | **GET** /companies/count | Count companies
*CompaniesApi* | [**countEntityKeyDefinitions**](docs/Api/CompaniesApi.md#countentitykeydefinitions) | **GET** /entity-key-definitions/count | Count entity key definitions
*CompaniesApi* | [**countEntityTraitDefinitions**](docs/Api/CompaniesApi.md#countentitytraitdefinitions) | **GET** /entity-trait-definitions/count | Count entity trait definitions
*CompaniesApi* | [**countUsers**](docs/Api/CompaniesApi.md#countusers) | **GET** /users/count | Count users
*CompaniesApi* | [**createCompany**](docs/Api/CompaniesApi.md#createcompany) | **POST** /companies/create | Create company
*CompaniesApi* | [**createUser**](docs/Api/CompaniesApi.md#createuser) | **POST** /users/create | Create user
*CompaniesApi* | [**deleteCompany**](docs/Api/CompaniesApi.md#deletecompany) | **DELETE** /companies/{company_id} | Delete company
*CompaniesApi* | [**deleteCompanyByKeys**](docs/Api/CompaniesApi.md#deletecompanybykeys) | **POST** /companies/delete | Delete company by keys
*CompaniesApi* | [**deleteCompanyMembership**](docs/Api/CompaniesApi.md#deletecompanymembership) | **DELETE** /company-memberships/{company_membership_id} | Delete company membership
*CompaniesApi* | [**deleteUser**](docs/Api/CompaniesApi.md#deleteuser) | **DELETE** /users/{user_id} | Delete user
*CompaniesApi* | [**deleteUserByKeys**](docs/Api/CompaniesApi.md#deleteuserbykeys) | **POST** /users/delete | Delete user by keys
*CompaniesApi* | [**getActiveCompanySubscription**](docs/Api/CompaniesApi.md#getactivecompanysubscription) | **GET** /company-subscriptions | Get active company subscription
*CompaniesApi* | [**getActiveDeals**](docs/Api/CompaniesApi.md#getactivedeals) | **GET** /company-crm-deals | Get active deals
*CompaniesApi* | [**getCompany**](docs/Api/CompaniesApi.md#getcompany) | **GET** /companies/{company_id} | Get company
*CompaniesApi* | [**getEntityTraitDefinition**](docs/Api/CompaniesApi.md#getentitytraitdefinition) | **GET** /entity-trait-definitions/{entity_trait_definition_id} | Get entity trait definition
*CompaniesApi* | [**getEntityTraitValues**](docs/Api/CompaniesApi.md#getentitytraitvalues) | **GET** /entity-trait-values | Get entity trait values
*CompaniesApi* | [**getOrCreateCompanyMembership**](docs/Api/CompaniesApi.md#getorcreatecompanymembership) | **POST** /company-memberships | Get or create company membership
*CompaniesApi* | [**getOrCreateEntityTraitDefinition**](docs/Api/CompaniesApi.md#getorcreateentitytraitdefinition) | **POST** /entity-trait-definitions | Get or create entity trait definition
*CompaniesApi* | [**getUser**](docs/Api/CompaniesApi.md#getuser) | **GET** /users/{user_id} | Get user
*CompaniesApi* | [**listCompanies**](docs/Api/CompaniesApi.md#listcompanies) | **GET** /companies | List companies
*CompaniesApi* | [**listCompanyMemberships**](docs/Api/CompaniesApi.md#listcompanymemberships) | **GET** /company-memberships | List company memberships
*CompaniesApi* | [**listEntityKeyDefinitions**](docs/Api/CompaniesApi.md#listentitykeydefinitions) | **GET** /entity-key-definitions | List entity key definitions
*CompaniesApi* | [**listEntityTraitDefinitions**](docs/Api/CompaniesApi.md#listentitytraitdefinitions) | **GET** /entity-trait-definitions | List entity trait definitions
*CompaniesApi* | [**listUsers**](docs/Api/CompaniesApi.md#listusers) | **GET** /users | List users
*CompaniesApi* | [**lookupCompany**](docs/Api/CompaniesApi.md#lookupcompany) | **GET** /companies/lookup | Lookup company
*CompaniesApi* | [**lookupUser**](docs/Api/CompaniesApi.md#lookupuser) | **GET** /users/lookup | Lookup user
*CompaniesApi* | [**updateEntityTraitDefinition**](docs/Api/CompaniesApi.md#updateentitytraitdefinition) | **PUT** /entity-trait-definitions/{entity_trait_definition_id} | Update entity trait definition
*CompaniesApi* | [**upsertCompany**](docs/Api/CompaniesApi.md#upsertcompany) | **POST** /companies | Upsert company
*CompaniesApi* | [**upsertCompanyTrait**](docs/Api/CompaniesApi.md#upsertcompanytrait) | **POST** /company-traits | Upsert company trait
*CompaniesApi* | [**upsertUser**](docs/Api/CompaniesApi.md#upsertuser) | **POST** /users | Upsert user
*CompaniesApi* | [**upsertUserTrait**](docs/Api/CompaniesApi.md#upsertusertrait) | **POST** /user-traits | Upsert user trait
*ComponentsApi* | [**countComponents**](docs/Api/ComponentsApi.md#countcomponents) | **GET** /components/count | Count components
*ComponentsApi* | [**createComponent**](docs/Api/ComponentsApi.md#createcomponent) | **POST** /components | Create component
*ComponentsApi* | [**deleteComponent**](docs/Api/ComponentsApi.md#deletecomponent) | **DELETE** /components/{component_id} | Delete component
*ComponentsApi* | [**getComponent**](docs/Api/ComponentsApi.md#getcomponent) | **GET** /components/{component_id} | Get component
*ComponentsApi* | [**listComponents**](docs/Api/ComponentsApi.md#listcomponents) | **GET** /components | List components
*ComponentsApi* | [**previewComponentData**](docs/Api/ComponentsApi.md#previewcomponentdata) | **GET** /components/preview-data | Preview component data
*ComponentsApi* | [**updateComponent**](docs/Api/ComponentsApi.md#updatecomponent) | **PUT** /components/{component_id} | Update component
*CrmApi* | [**listCrmProducts**](docs/Api/CrmApi.md#listcrmproducts) | **GET** /crm/products | List crm products
*CrmApi* | [**upsertCrmDeal**](docs/Api/CrmApi.md#upsertcrmdeal) | **POST** /crm/deals/upsert | Upsert crm deal
*CrmApi* | [**upsertCrmProduct**](docs/Api/CrmApi.md#upsertcrmproduct) | **POST** /crm/products/upsert | Upsert crm product
*CrmApi* | [**upsertDealLineItemAssociation**](docs/Api/CrmApi.md#upsertdeallineitemassociation) | **POST** /crm/associations/deal-line-item | Upsert deal line item association
*CrmApi* | [**upsertLineItem**](docs/Api/CrmApi.md#upsertlineitem) | **POST** /crm/deal-line-item/upsert | Upsert line item
*EntitlementsApi* | [**countCompanyOverrides**](docs/Api/EntitlementsApi.md#countcompanyoverrides) | **GET** /company-overrides/count | Count company overrides
*EntitlementsApi* | [**countFeatureCompanies**](docs/Api/EntitlementsApi.md#countfeaturecompanies) | **GET** /feature-companies/count | Count feature companies
*EntitlementsApi* | [**countFeatureUsage**](docs/Api/EntitlementsApi.md#countfeatureusage) | **GET** /feature-usage/count | Count feature usage
*EntitlementsApi* | [**countFeatureUsers**](docs/Api/EntitlementsApi.md#countfeatureusers) | **GET** /feature-users/count | Count feature users
*EntitlementsApi* | [**countPlanEntitlements**](docs/Api/EntitlementsApi.md#countplanentitlements) | **GET** /plan-entitlements/count | Count plan entitlements
*EntitlementsApi* | [**createCompanyOverride**](docs/Api/EntitlementsApi.md#createcompanyoverride) | **POST** /company-overrides | Create company override
*EntitlementsApi* | [**createPlanEntitlement**](docs/Api/EntitlementsApi.md#createplanentitlement) | **POST** /plan-entitlements | Create plan entitlement
*EntitlementsApi* | [**deleteCompanyOverride**](docs/Api/EntitlementsApi.md#deletecompanyoverride) | **DELETE** /company-overrides/{company_override_id} | Delete company override
*EntitlementsApi* | [**deletePlanEntitlement**](docs/Api/EntitlementsApi.md#deleteplanentitlement) | **DELETE** /plan-entitlements/{plan_entitlement_id} | Delete plan entitlement
*EntitlementsApi* | [**getCompanyOverride**](docs/Api/EntitlementsApi.md#getcompanyoverride) | **GET** /company-overrides/{company_override_id} | Get company override
*EntitlementsApi* | [**getFeatureUsageByCompany**](docs/Api/EntitlementsApi.md#getfeatureusagebycompany) | **GET** /usage-by-company | Get feature usage by company
*EntitlementsApi* | [**getPlanEntitlement**](docs/Api/EntitlementsApi.md#getplanentitlement) | **GET** /plan-entitlements/{plan_entitlement_id} | Get plan entitlement
*EntitlementsApi* | [**listCompanyOverrides**](docs/Api/EntitlementsApi.md#listcompanyoverrides) | **GET** /company-overrides | List company overrides
*EntitlementsApi* | [**listFeatureCompanies**](docs/Api/EntitlementsApi.md#listfeaturecompanies) | **GET** /feature-companies | List feature companies
*EntitlementsApi* | [**listFeatureUsage**](docs/Api/EntitlementsApi.md#listfeatureusage) | **GET** /feature-usage | List feature usage
*EntitlementsApi* | [**listFeatureUsers**](docs/Api/EntitlementsApi.md#listfeatureusers) | **GET** /feature-users | List feature users
*EntitlementsApi* | [**listPlanEntitlements**](docs/Api/EntitlementsApi.md#listplanentitlements) | **GET** /plan-entitlements | List plan entitlements
*EntitlementsApi* | [**updateCompanyOverride**](docs/Api/EntitlementsApi.md#updatecompanyoverride) | **PUT** /company-overrides/{company_override_id} | Update company override
*EntitlementsApi* | [**updatePlanEntitlement**](docs/Api/EntitlementsApi.md#updateplanentitlement) | **PUT** /plan-entitlements/{plan_entitlement_id} | Update plan entitlement
*EventsApi* | [**createEvent**](docs/Api/EventsApi.md#createevent) | **POST** /events | Create event
*EventsApi* | [**createEventBatch**](docs/Api/EventsApi.md#createeventbatch) | **POST** /event-batch | Create event batch
*EventsApi* | [**getEvent**](docs/Api/EventsApi.md#getevent) | **GET** /events/{event_id} | Get event
*EventsApi* | [**getEventSummaries**](docs/Api/EventsApi.md#geteventsummaries) | **GET** /event-types | Get event summaries
*EventsApi* | [**getSegmentIntegrationStatus**](docs/Api/EventsApi.md#getsegmentintegrationstatus) | **GET** /segment-integration | Get segment integration status
*EventsApi* | [**listEvents**](docs/Api/EventsApi.md#listevents) | **GET** /events | List events
*FeaturesApi* | [**checkFlag**](docs/Api/FeaturesApi.md#checkflag) | **POST** /flags/{key}/check | Check flag
*FeaturesApi* | [**checkFlags**](docs/Api/FeaturesApi.md#checkflags) | **POST** /flags/check | Check flags
*FeaturesApi* | [**countAudienceCompanies**](docs/Api/FeaturesApi.md#countaudiencecompanies) | **POST** /audience/count-companies | Count audience companies
*FeaturesApi* | [**countAudienceUsers**](docs/Api/FeaturesApi.md#countaudienceusers) | **POST** /audience/count-users | Count audience users
*FeaturesApi* | [**countFeatures**](docs/Api/FeaturesApi.md#countfeatures) | **GET** /features/count | Count features
*FeaturesApi* | [**countFlags**](docs/Api/FeaturesApi.md#countflags) | **GET** /flags/count | Count flags
*FeaturesApi* | [**createFeature**](docs/Api/FeaturesApi.md#createfeature) | **POST** /features | Create feature
*FeaturesApi* | [**createFlag**](docs/Api/FeaturesApi.md#createflag) | **POST** /flags | Create flag
*FeaturesApi* | [**deleteFeature**](docs/Api/FeaturesApi.md#deletefeature) | **DELETE** /features/{feature_id} | Delete feature
*FeaturesApi* | [**deleteFlag**](docs/Api/FeaturesApi.md#deleteflag) | **DELETE** /flags/{flag_id} | Delete flag
*FeaturesApi* | [**getFeature**](docs/Api/FeaturesApi.md#getfeature) | **GET** /features/{feature_id} | Get feature
*FeaturesApi* | [**getFlag**](docs/Api/FeaturesApi.md#getflag) | **GET** /flags/{flag_id} | Get flag
*FeaturesApi* | [**listAudienceCompanies**](docs/Api/FeaturesApi.md#listaudiencecompanies) | **POST** /audience/get-companies | List audience companies
*FeaturesApi* | [**listAudienceUsers**](docs/Api/FeaturesApi.md#listaudienceusers) | **POST** /audience/get-users | List audience users
*FeaturesApi* | [**listFeatures**](docs/Api/FeaturesApi.md#listfeatures) | **GET** /features | List features
*FeaturesApi* | [**listFlags**](docs/Api/FeaturesApi.md#listflags) | **GET** /flags | List flags
*FeaturesApi* | [**updateFeature**](docs/Api/FeaturesApi.md#updatefeature) | **PUT** /features/{feature_id} | Update feature
*FeaturesApi* | [**updateFlag**](docs/Api/FeaturesApi.md#updateflag) | **PUT** /flags/{flag_id} | Update flag
*FeaturesApi* | [**updateFlagRules**](docs/Api/FeaturesApi.md#updateflagrules) | **PUT** /flags/{flag_id}/rules | Update flag rules
*PlangroupsApi* | [**createPlanGroup**](docs/Api/PlangroupsApi.md#createplangroup) | **POST** /plan-groups | Create plan group
*PlangroupsApi* | [**getPlanGroup**](docs/Api/PlangroupsApi.md#getplangroup) | **GET** /plan-groups | Get plan group
*PlangroupsApi* | [**updatePlanGroup**](docs/Api/PlangroupsApi.md#updateplangroup) | **PUT** /plan-groups/{plan_group_id} | Update plan group
*PlansApi* | [**countPlans**](docs/Api/PlansApi.md#countplans) | **GET** /plans/count | Count plans
*PlansApi* | [**createPlan**](docs/Api/PlansApi.md#createplan) | **POST** /plans | Create plan
*PlansApi* | [**deleteAudience**](docs/Api/PlansApi.md#deleteaudience) | **DELETE** /plan-audiences/{plan_audience_id} | Delete audience
*PlansApi* | [**deletePlan**](docs/Api/PlansApi.md#deleteplan) | **DELETE** /plans/{plan_id} | Delete plan
*PlansApi* | [**getAudience**](docs/Api/PlansApi.md#getaudience) | **GET** /plan-audiences/{plan_audience_id} | Get audience
*PlansApi* | [**getPlan**](docs/Api/PlansApi.md#getplan) | **GET** /plans/{plan_id} | Get plan
*PlansApi* | [**listPlans**](docs/Api/PlansApi.md#listplans) | **GET** /plans | List plans
*PlansApi* | [**updateAudience**](docs/Api/PlansApi.md#updateaudience) | **PUT** /plan-audiences/{plan_audience_id} | Update audience
*PlansApi* | [**updateCompanyPlans**](docs/Api/PlansApi.md#updatecompanyplans) | **PUT** /company-plans/{company_plan_id} | Update company plans
*PlansApi* | [**updatePlan**](docs/Api/PlansApi.md#updateplan) | **PUT** /plans/{plan_id} | Update plan
*PlansApi* | [**upsertBillingProductPlan**](docs/Api/PlansApi.md#upsertbillingproductplan) | **PUT** /plans/{plan_id}/billing_products | Upsert billing product plan
*WebhooksApi* | [**countWebhookEvents**](docs/Api/WebhooksApi.md#countwebhookevents) | **GET** /webhook-events/count | Count webhook events
*WebhooksApi* | [**countWebhooks**](docs/Api/WebhooksApi.md#countwebhooks) | **GET** /webhooks/count | Count webhooks
*WebhooksApi* | [**createWebhook**](docs/Api/WebhooksApi.md#createwebhook) | **POST** /webhooks | Create webhook
*WebhooksApi* | [**deleteWebhook**](docs/Api/WebhooksApi.md#deletewebhook) | **DELETE** /webhooks/{webhook_id} | Delete webhook
*WebhooksApi* | [**getWebhook**](docs/Api/WebhooksApi.md#getwebhook) | **GET** /webhooks/{webhook_id} | Get webhook
*WebhooksApi* | [**getWebhookEvent**](docs/Api/WebhooksApi.md#getwebhookevent) | **GET** /webhook-events/{webhook_event_id} | Get webhook event
*WebhooksApi* | [**listWebhookEvents**](docs/Api/WebhooksApi.md#listwebhookevents) | **GET** /webhook-events | List webhook events
*WebhooksApi* | [**listWebhooks**](docs/Api/WebhooksApi.md#listwebhooks) | **GET** /webhooks | List webhooks
*WebhooksApi* | [**updateWebhook**](docs/Api/WebhooksApi.md#updatewebhook) | **PUT** /webhooks/{webhook_id} | Update webhook

## Models

- [ApiError](docs/Model/ApiError.md)
- [ApiKeyCreateResponseData](docs/Model/ApiKeyCreateResponseData.md)
- [ApiKeyRequestListResponseData](docs/Model/ApiKeyRequestListResponseData.md)
- [ApiKeyRequestResponseData](docs/Model/ApiKeyRequestResponseData.md)
- [ApiKeyResponseData](docs/Model/ApiKeyResponseData.md)
- [AudienceRequestBody](docs/Model/AudienceRequestBody.md)
- [BillingCouponResponseData](docs/Model/BillingCouponResponseData.md)
- [BillingCustomerResponseData](docs/Model/BillingCustomerResponseData.md)
- [BillingCustomerSubscription](docs/Model/BillingCustomerSubscription.md)
- [BillingCustomerWithSubscriptionsResponseData](docs/Model/BillingCustomerWithSubscriptionsResponseData.md)
- [BillingMeterResponseData](docs/Model/BillingMeterResponseData.md)
- [BillingPriceResponseData](docs/Model/BillingPriceResponseData.md)
- [BillingPriceView](docs/Model/BillingPriceView.md)
- [BillingProductDetailResponseData](docs/Model/BillingProductDetailResponseData.md)
- [BillingProductForSubscriptionResponseData](docs/Model/BillingProductForSubscriptionResponseData.md)
- [BillingProductPlanResponseData](docs/Model/BillingProductPlanResponseData.md)
- [BillingProductPriceResponseData](docs/Model/BillingProductPriceResponseData.md)
- [BillingProductPricing](docs/Model/BillingProductPricing.md)
- [BillingProductResponseData](docs/Model/BillingProductResponseData.md)
- [BillingSubscriptionDiscount](docs/Model/BillingSubscriptionDiscount.md)
- [BillingSubscriptionDiscountView](docs/Model/BillingSubscriptionDiscountView.md)
- [BillingSubscriptionResponseData](docs/Model/BillingSubscriptionResponseData.md)
- [BillingSubscriptionView](docs/Model/BillingSubscriptionView.md)
- [ChangeSubscriptionInternalRequestBody](docs/Model/ChangeSubscriptionInternalRequestBody.md)
- [ChangeSubscriptionRequestBody](docs/Model/ChangeSubscriptionRequestBody.md)
- [CheckFlagRequestBody](docs/Model/CheckFlagRequestBody.md)
- [CheckFlagResponse](docs/Model/CheckFlagResponse.md)
- [CheckFlagResponseData](docs/Model/CheckFlagResponseData.md)
- [CheckFlagsResponse](docs/Model/CheckFlagsResponse.md)
- [CheckFlagsResponseData](docs/Model/CheckFlagsResponseData.md)
- [CheckoutDataResponseData](docs/Model/CheckoutDataResponseData.md)
- [CheckoutInternalResponse](docs/Model/CheckoutInternalResponse.md)
- [CompanyCrmDealsResponseData](docs/Model/CompanyCrmDealsResponseData.md)
- [CompanyDetailResponseData](docs/Model/CompanyDetailResponseData.md)
- [CompanyEventPeriodMetricsResponseData](docs/Model/CompanyEventPeriodMetricsResponseData.md)
- [CompanyMembershipDetailResponseData](docs/Model/CompanyMembershipDetailResponseData.md)
- [CompanyMembershipResponseData](docs/Model/CompanyMembershipResponseData.md)
- [CompanyOverrideResponseData](docs/Model/CompanyOverrideResponseData.md)
- [CompanyPlanDetailResponseData](docs/Model/CompanyPlanDetailResponseData.md)
- [CompanyPlanWithBillingSubView](docs/Model/CompanyPlanWithBillingSubView.md)
- [CompanyResponseData](docs/Model/CompanyResponseData.md)
- [CompanySubscriptionResponseData](docs/Model/CompanySubscriptionResponseData.md)
- [ComponentCapabilities](docs/Model/ComponentCapabilities.md)
- [ComponentHydrateResponseData](docs/Model/ComponentHydrateResponseData.md)
- [ComponentPreviewResponseData](docs/Model/ComponentPreviewResponseData.md)
- [ComponentResponseData](docs/Model/ComponentResponseData.md)
- [CountApiKeysParams](docs/Model/CountApiKeysParams.md)
- [CountApiKeysResponse](docs/Model/CountApiKeysResponse.md)
- [CountApiRequestsParams](docs/Model/CountApiRequestsParams.md)
- [CountApiRequestsResponse](docs/Model/CountApiRequestsResponse.md)
- [CountAudienceCompaniesResponse](docs/Model/CountAudienceCompaniesResponse.md)
- [CountAudienceUsersResponse](docs/Model/CountAudienceUsersResponse.md)
- [CountBillingProductsParams](docs/Model/CountBillingProductsParams.md)
- [CountBillingProductsResponse](docs/Model/CountBillingProductsResponse.md)
- [CountCompaniesParams](docs/Model/CountCompaniesParams.md)
- [CountCompaniesResponse](docs/Model/CountCompaniesResponse.md)
- [CountCompanyOverridesParams](docs/Model/CountCompanyOverridesParams.md)
- [CountCompanyOverridesResponse](docs/Model/CountCompanyOverridesResponse.md)
- [CountComponentsParams](docs/Model/CountComponentsParams.md)
- [CountComponentsResponse](docs/Model/CountComponentsResponse.md)
- [CountCustomersParams](docs/Model/CountCustomersParams.md)
- [CountCustomersResponse](docs/Model/CountCustomersResponse.md)
- [CountEntityKeyDefinitionsParams](docs/Model/CountEntityKeyDefinitionsParams.md)
- [CountEntityKeyDefinitionsResponse](docs/Model/CountEntityKeyDefinitionsResponse.md)
- [CountEntityTraitDefinitionsParams](docs/Model/CountEntityTraitDefinitionsParams.md)
- [CountEntityTraitDefinitionsResponse](docs/Model/CountEntityTraitDefinitionsResponse.md)
- [CountFeatureCompaniesParams](docs/Model/CountFeatureCompaniesParams.md)
- [CountFeatureCompaniesResponse](docs/Model/CountFeatureCompaniesResponse.md)
- [CountFeatureUsageParams](docs/Model/CountFeatureUsageParams.md)
- [CountFeatureUsageResponse](docs/Model/CountFeatureUsageResponse.md)
- [CountFeatureUsersParams](docs/Model/CountFeatureUsersParams.md)
- [CountFeatureUsersResponse](docs/Model/CountFeatureUsersResponse.md)
- [CountFeaturesParams](docs/Model/CountFeaturesParams.md)
- [CountFeaturesResponse](docs/Model/CountFeaturesResponse.md)
- [CountFlagsParams](docs/Model/CountFlagsParams.md)
- [CountFlagsResponse](docs/Model/CountFlagsResponse.md)
- [CountPlanEntitlementsParams](docs/Model/CountPlanEntitlementsParams.md)
- [CountPlanEntitlementsResponse](docs/Model/CountPlanEntitlementsResponse.md)
- [CountPlansParams](docs/Model/CountPlansParams.md)
- [CountPlansResponse](docs/Model/CountPlansResponse.md)
- [CountResponse](docs/Model/CountResponse.md)
- [CountUsersParams](docs/Model/CountUsersParams.md)
- [CountUsersResponse](docs/Model/CountUsersResponse.md)
- [CountWebhookEventsParams](docs/Model/CountWebhookEventsParams.md)
- [CountWebhookEventsResponse](docs/Model/CountWebhookEventsResponse.md)
- [CountWebhooksParams](docs/Model/CountWebhooksParams.md)
- [CountWebhooksResponse](docs/Model/CountWebhooksResponse.md)
- [CouponRequestBody](docs/Model/CouponRequestBody.md)
- [CreateApiKeyRequestBody](docs/Model/CreateApiKeyRequestBody.md)
- [CreateApiKeyResponse](docs/Model/CreateApiKeyResponse.md)
- [CreateBillingCustomerRequestBody](docs/Model/CreateBillingCustomerRequestBody.md)
- [CreateBillingPriceRequestBody](docs/Model/CreateBillingPriceRequestBody.md)
- [CreateBillingProductRequestBody](docs/Model/CreateBillingProductRequestBody.md)
- [CreateBillingSubscriptionsRequestBody](docs/Model/CreateBillingSubscriptionsRequestBody.md)
- [CreateCompanyOverrideRequestBody](docs/Model/CreateCompanyOverrideRequestBody.md)
- [CreateCompanyOverrideResponse](docs/Model/CreateCompanyOverrideResponse.md)
- [CreateCompanyResponse](docs/Model/CreateCompanyResponse.md)
- [CreateComponentRequestBody](docs/Model/CreateComponentRequestBody.md)
- [CreateComponentResponse](docs/Model/CreateComponentResponse.md)
- [CreateCouponRequestBody](docs/Model/CreateCouponRequestBody.md)
- [CreateCrmDealLineItemAssociationRequestBody](docs/Model/CreateCrmDealLineItemAssociationRequestBody.md)
- [CreateCrmDealRequestBody](docs/Model/CreateCrmDealRequestBody.md)
- [CreateCrmLineItemRequestBody](docs/Model/CreateCrmLineItemRequestBody.md)
- [CreateCrmProductRequestBody](docs/Model/CreateCrmProductRequestBody.md)
- [CreateEntitlementReqCommon](docs/Model/CreateEntitlementReqCommon.md)
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
- [CreateInvoiceRequestBody](docs/Model/CreateInvoiceRequestBody.md)
- [CreateMeterRequestBody](docs/Model/CreateMeterRequestBody.md)
- [CreateOrUpdateConditionGroupRequestBody](docs/Model/CreateOrUpdateConditionGroupRequestBody.md)
- [CreateOrUpdateConditionRequestBody](docs/Model/CreateOrUpdateConditionRequestBody.md)
- [CreateOrUpdateFlagRequestBody](docs/Model/CreateOrUpdateFlagRequestBody.md)
- [CreateOrUpdateRuleRequestBody](docs/Model/CreateOrUpdateRuleRequestBody.md)
- [CreatePaymentMethodRequestBody](docs/Model/CreatePaymentMethodRequestBody.md)
- [CreatePlanEntitlementRequestBody](docs/Model/CreatePlanEntitlementRequestBody.md)
- [CreatePlanEntitlementResponse](docs/Model/CreatePlanEntitlementResponse.md)
- [CreatePlanGroupRequestBody](docs/Model/CreatePlanGroupRequestBody.md)
- [CreatePlanGroupResponse](docs/Model/CreatePlanGroupResponse.md)
- [CreatePlanRequestBody](docs/Model/CreatePlanRequestBody.md)
- [CreatePlanResponse](docs/Model/CreatePlanResponse.md)
- [CreateUserResponse](docs/Model/CreateUserResponse.md)
- [CreateWebhookRequestBody](docs/Model/CreateWebhookRequestBody.md)
- [CreateWebhookResponse](docs/Model/CreateWebhookResponse.md)
- [CrmDealLineItem](docs/Model/CrmDealLineItem.md)
- [CrmDealResponseData](docs/Model/CrmDealResponseData.md)
- [CrmLineItemResponseData](docs/Model/CrmLineItemResponseData.md)
- [CrmProductResponseData](docs/Model/CrmProductResponseData.md)
- [DeleteApiKeyResponse](docs/Model/DeleteApiKeyResponse.md)
- [DeleteAudienceResponse](docs/Model/DeleteAudienceResponse.md)
- [DeleteCompanyByKeysResponse](docs/Model/DeleteCompanyByKeysResponse.md)
- [DeleteCompanyMembershipResponse](docs/Model/DeleteCompanyMembershipResponse.md)
- [DeleteCompanyOverrideResponse](docs/Model/DeleteCompanyOverrideResponse.md)
- [DeleteCompanyResponse](docs/Model/DeleteCompanyResponse.md)
- [DeleteComponentResponse](docs/Model/DeleteComponentResponse.md)
- [DeleteEnvironmentResponse](docs/Model/DeleteEnvironmentResponse.md)
- [DeleteFeatureResponse](docs/Model/DeleteFeatureResponse.md)
- [DeleteFlagResponse](docs/Model/DeleteFlagResponse.md)
- [DeletePlanEntitlementResponse](docs/Model/DeletePlanEntitlementResponse.md)
- [DeletePlanResponse](docs/Model/DeletePlanResponse.md)
- [DeleteProductPriceResponse](docs/Model/DeleteProductPriceResponse.md)
- [DeleteResponse](docs/Model/DeleteResponse.md)
- [DeleteUserByKeysResponse](docs/Model/DeleteUserByKeysResponse.md)
- [DeleteUserResponse](docs/Model/DeleteUserResponse.md)
- [DeleteWebhookResponse](docs/Model/DeleteWebhookResponse.md)
- [EntityKeyDefinitionResponseData](docs/Model/EntityKeyDefinitionResponseData.md)
- [EntityKeyDetailResponseData](docs/Model/EntityKeyDetailResponseData.md)
- [EntityKeyResponseData](docs/Model/EntityKeyResponseData.md)
- [EntityTraitDefinitionResponseData](docs/Model/EntityTraitDefinitionResponseData.md)
- [EntityTraitDetailResponseData](docs/Model/EntityTraitDetailResponseData.md)
- [EntityTraitResponseData](docs/Model/EntityTraitResponseData.md)
- [EntityTraitValue](docs/Model/EntityTraitValue.md)
- [EnvironmentDetailResponseData](docs/Model/EnvironmentDetailResponseData.md)
- [EnvironmentResponseData](docs/Model/EnvironmentResponseData.md)
- [EventBody](docs/Model/EventBody.md)
- [EventBodyFlagCheck](docs/Model/EventBodyFlagCheck.md)
- [EventBodyIdentify](docs/Model/EventBodyIdentify.md)
- [EventBodyIdentifyCompany](docs/Model/EventBodyIdentifyCompany.md)
- [EventBodyTrack](docs/Model/EventBodyTrack.md)
- [EventDetailResponseData](docs/Model/EventDetailResponseData.md)
- [EventResponseData](docs/Model/EventResponseData.md)
- [EventSummaryResponseData](docs/Model/EventSummaryResponseData.md)
- [FeatureCompanyResponseData](docs/Model/FeatureCompanyResponseData.md)
- [FeatureCompanyUserResponseData](docs/Model/FeatureCompanyUserResponseData.md)
- [FeatureDetailResponseData](docs/Model/FeatureDetailResponseData.md)
- [FeatureResponseData](docs/Model/FeatureResponseData.md)
- [FeatureUsageDetailResponseData](docs/Model/FeatureUsageDetailResponseData.md)
- [FeatureUsageResponseData](docs/Model/FeatureUsageResponseData.md)
- [FlagDetailResponseData](docs/Model/FlagDetailResponseData.md)
- [FlagResponseData](docs/Model/FlagResponseData.md)
- [GenericPreviewObject](docs/Model/GenericPreviewObject.md)
- [GetActiveCompanySubscriptionParams](docs/Model/GetActiveCompanySubscriptionParams.md)
- [GetActiveCompanySubscriptionResponse](docs/Model/GetActiveCompanySubscriptionResponse.md)
- [GetActiveDealsParams](docs/Model/GetActiveDealsParams.md)
- [GetActiveDealsResponse](docs/Model/GetActiveDealsResponse.md)
- [GetApiKeyResponse](docs/Model/GetApiKeyResponse.md)
- [GetApiRequestResponse](docs/Model/GetApiRequestResponse.md)
- [GetAudienceResponse](docs/Model/GetAudienceResponse.md)
- [GetCheckoutDataResponse](docs/Model/GetCheckoutDataResponse.md)
- [GetCompanyOverrideResponse](docs/Model/GetCompanyOverrideResponse.md)
- [GetCompanyResponse](docs/Model/GetCompanyResponse.md)
- [GetComponentResponse](docs/Model/GetComponentResponse.md)
- [GetEntityTraitDefinitionResponse](docs/Model/GetEntityTraitDefinitionResponse.md)
- [GetEntityTraitValuesParams](docs/Model/GetEntityTraitValuesParams.md)
- [GetEntityTraitValuesResponse](docs/Model/GetEntityTraitValuesResponse.md)
- [GetEnvironmentResponse](docs/Model/GetEnvironmentResponse.md)
- [GetEventResponse](docs/Model/GetEventResponse.md)
- [GetEventSummariesParams](docs/Model/GetEventSummariesParams.md)
- [GetEventSummariesResponse](docs/Model/GetEventSummariesResponse.md)
- [GetFeatureResponse](docs/Model/GetFeatureResponse.md)
- [GetFeatureUsageByCompanyParams](docs/Model/GetFeatureUsageByCompanyParams.md)
- [GetFeatureUsageByCompanyResponse](docs/Model/GetFeatureUsageByCompanyResponse.md)
- [GetFlagResponse](docs/Model/GetFlagResponse.md)
- [GetOrCreateCompanyMembershipRequestBody](docs/Model/GetOrCreateCompanyMembershipRequestBody.md)
- [GetOrCreateCompanyMembershipResponse](docs/Model/GetOrCreateCompanyMembershipResponse.md)
- [GetOrCreateEntityTraitDefinitionResponse](docs/Model/GetOrCreateEntityTraitDefinitionResponse.md)
- [GetPlanEntitlementResponse](docs/Model/GetPlanEntitlementResponse.md)
- [GetPlanGroupResponse](docs/Model/GetPlanGroupResponse.md)
- [GetPlanResponse](docs/Model/GetPlanResponse.md)
- [GetSegmentIntegrationStatusResponse](docs/Model/GetSegmentIntegrationStatusResponse.md)
- [GetUserResponse](docs/Model/GetUserResponse.md)
- [GetWebhookEventResponse](docs/Model/GetWebhookEventResponse.md)
- [GetWebhookResponse](docs/Model/GetWebhookResponse.md)
- [InvoiceRequestBody](docs/Model/InvoiceRequestBody.md)
- [InvoiceResponseData](docs/Model/InvoiceResponseData.md)
- [IssueTemporaryAccessTokenRequestBody](docs/Model/IssueTemporaryAccessTokenRequestBody.md)
- [IssueTemporaryAccessTokenResponse](docs/Model/IssueTemporaryAccessTokenResponse.md)
- [IssueTemporaryAccessTokenResponseData](docs/Model/IssueTemporaryAccessTokenResponseData.md)
- [KeysRequestBody](docs/Model/KeysRequestBody.md)
- [ListApiKeysParams](docs/Model/ListApiKeysParams.md)
- [ListApiKeysResponse](docs/Model/ListApiKeysResponse.md)
- [ListApiRequestsParams](docs/Model/ListApiRequestsParams.md)
- [ListApiRequestsResponse](docs/Model/ListApiRequestsResponse.md)
- [ListAudienceCompaniesResponse](docs/Model/ListAudienceCompaniesResponse.md)
- [ListAudienceUsersResponse](docs/Model/ListAudienceUsersResponse.md)
- [ListBillingProductsParams](docs/Model/ListBillingProductsParams.md)
- [ListBillingProductsResponse](docs/Model/ListBillingProductsResponse.md)
- [ListCompaniesParams](docs/Model/ListCompaniesParams.md)
- [ListCompaniesResponse](docs/Model/ListCompaniesResponse.md)
- [ListCompanyMembershipsParams](docs/Model/ListCompanyMembershipsParams.md)
- [ListCompanyMembershipsResponse](docs/Model/ListCompanyMembershipsResponse.md)
- [ListCompanyOverridesParams](docs/Model/ListCompanyOverridesParams.md)
- [ListCompanyOverridesResponse](docs/Model/ListCompanyOverridesResponse.md)
- [ListComponentsParams](docs/Model/ListComponentsParams.md)
- [ListComponentsResponse](docs/Model/ListComponentsResponse.md)
- [ListCrmProductsParams](docs/Model/ListCrmProductsParams.md)
- [ListCrmProductsResponse](docs/Model/ListCrmProductsResponse.md)
- [ListCustomersParams](docs/Model/ListCustomersParams.md)
- [ListCustomersResponse](docs/Model/ListCustomersResponse.md)
- [ListEntityKeyDefinitionsParams](docs/Model/ListEntityKeyDefinitionsParams.md)
- [ListEntityKeyDefinitionsResponse](docs/Model/ListEntityKeyDefinitionsResponse.md)
- [ListEntityTraitDefinitionsParams](docs/Model/ListEntityTraitDefinitionsParams.md)
- [ListEntityTraitDefinitionsResponse](docs/Model/ListEntityTraitDefinitionsResponse.md)
- [ListEnvironmentsParams](docs/Model/ListEnvironmentsParams.md)
- [ListEnvironmentsResponse](docs/Model/ListEnvironmentsResponse.md)
- [ListEventsParams](docs/Model/ListEventsParams.md)
- [ListEventsResponse](docs/Model/ListEventsResponse.md)
- [ListFeatureCompaniesParams](docs/Model/ListFeatureCompaniesParams.md)
- [ListFeatureCompaniesResponse](docs/Model/ListFeatureCompaniesResponse.md)
- [ListFeatureUsageParams](docs/Model/ListFeatureUsageParams.md)
- [ListFeatureUsageResponse](docs/Model/ListFeatureUsageResponse.md)
- [ListFeatureUsersParams](docs/Model/ListFeatureUsersParams.md)
- [ListFeatureUsersResponse](docs/Model/ListFeatureUsersResponse.md)
- [ListFeaturesParams](docs/Model/ListFeaturesParams.md)
- [ListFeaturesResponse](docs/Model/ListFeaturesResponse.md)
- [ListFlagsParams](docs/Model/ListFlagsParams.md)
- [ListFlagsResponse](docs/Model/ListFlagsResponse.md)
- [ListInvoicesParams](docs/Model/ListInvoicesParams.md)
- [ListInvoicesResponse](docs/Model/ListInvoicesResponse.md)
- [ListMetersParams](docs/Model/ListMetersParams.md)
- [ListMetersResponse](docs/Model/ListMetersResponse.md)
- [ListPaymentMethodsParams](docs/Model/ListPaymentMethodsParams.md)
- [ListPaymentMethodsResponse](docs/Model/ListPaymentMethodsResponse.md)
- [ListPlanEntitlementsParams](docs/Model/ListPlanEntitlementsParams.md)
- [ListPlanEntitlementsResponse](docs/Model/ListPlanEntitlementsResponse.md)
- [ListPlansParams](docs/Model/ListPlansParams.md)
- [ListPlansResponse](docs/Model/ListPlansResponse.md)
- [ListProductPricesParams](docs/Model/ListProductPricesParams.md)
- [ListProductPricesResponse](docs/Model/ListProductPricesResponse.md)
- [ListUsersParams](docs/Model/ListUsersParams.md)
- [ListUsersResponse](docs/Model/ListUsersResponse.md)
- [ListWebhookEventsParams](docs/Model/ListWebhookEventsParams.md)
- [ListWebhookEventsResponse](docs/Model/ListWebhookEventsResponse.md)
- [ListWebhooksParams](docs/Model/ListWebhooksParams.md)
- [ListWebhooksResponse](docs/Model/ListWebhooksResponse.md)
- [LookupCompanyParams](docs/Model/LookupCompanyParams.md)
- [LookupCompanyResponse](docs/Model/LookupCompanyResponse.md)
- [LookupUserParams](docs/Model/LookupUserParams.md)
- [LookupUserResponse](docs/Model/LookupUserResponse.md)
- [MeterRequestBody](docs/Model/MeterRequestBody.md)
- [PaginationFilter](docs/Model/PaginationFilter.md)
- [PaymentMethodRequestBody](docs/Model/PaymentMethodRequestBody.md)
- [PaymentMethodResponseData](docs/Model/PaymentMethodResponseData.md)
- [PlanAudienceDetailResponseData](docs/Model/PlanAudienceDetailResponseData.md)
- [PlanAudienceResponseData](docs/Model/PlanAudienceResponseData.md)
- [PlanDetailResponseData](docs/Model/PlanDetailResponseData.md)
- [PlanEntitlementResponseData](docs/Model/PlanEntitlementResponseData.md)
- [PlanGroupDetailResponseData](docs/Model/PlanGroupDetailResponseData.md)
- [PlanGroupPlanDetailResponseData](docs/Model/PlanGroupPlanDetailResponseData.md)
- [PlanGroupResponseData](docs/Model/PlanGroupResponseData.md)
- [PlanResponseData](docs/Model/PlanResponseData.md)
- [PreviewCheckoutInternalResponse](docs/Model/PreviewCheckoutInternalResponse.md)
- [PreviewComponentDataParams](docs/Model/PreviewComponentDataParams.md)
- [PreviewComponentDataResponse](docs/Model/PreviewComponentDataResponse.md)
- [PreviewObject](docs/Model/PreviewObject.md)
- [PreviewObjectResponseData](docs/Model/PreviewObjectResponseData.md)
- [PreviewSubscriptionChangeResponseData](docs/Model/PreviewSubscriptionChangeResponseData.md)
- [RawEventBatchResponseData](docs/Model/RawEventBatchResponseData.md)
- [RawEventResponseData](docs/Model/RawEventResponseData.md)
- [RuleConditionDetailResponseData](docs/Model/RuleConditionDetailResponseData.md)
- [RuleConditionGroupDetailResponseData](docs/Model/RuleConditionGroupDetailResponseData.md)
- [RuleConditionGroupResponseData](docs/Model/RuleConditionGroupResponseData.md)
- [RuleConditionResponseData](docs/Model/RuleConditionResponseData.md)
- [RuleDetailResponseData](docs/Model/RuleDetailResponseData.md)
- [RuleResponseData](docs/Model/RuleResponseData.md)
- [RulesDetailResponseData](docs/Model/RulesDetailResponseData.md)
- [SearchBillingPricesParams](docs/Model/SearchBillingPricesParams.md)
- [SearchBillingPricesResponse](docs/Model/SearchBillingPricesResponse.md)
- [SegmentStatusResp](docs/Model/SegmentStatusResp.md)
- [StripeEmbedInfo](docs/Model/StripeEmbedInfo.md)
- [TemporaryAccessTokenResponseData](docs/Model/TemporaryAccessTokenResponseData.md)
- [UpdateAddOnRequestBody](docs/Model/UpdateAddOnRequestBody.md)
- [UpdateApiKeyRequestBody](docs/Model/UpdateApiKeyRequestBody.md)
- [UpdateApiKeyResponse](docs/Model/UpdateApiKeyResponse.md)
- [UpdateAudienceRequestBody](docs/Model/UpdateAudienceRequestBody.md)
- [UpdateAudienceResponse](docs/Model/UpdateAudienceResponse.md)
- [UpdateCompanyOverrideRequestBody](docs/Model/UpdateCompanyOverrideRequestBody.md)
- [UpdateCompanyOverrideResponse](docs/Model/UpdateCompanyOverrideResponse.md)
- [UpdateCompanyPlansRequestBody](docs/Model/UpdateCompanyPlansRequestBody.md)
- [UpdateCompanyPlansResponse](docs/Model/UpdateCompanyPlansResponse.md)
- [UpdateComponentRequestBody](docs/Model/UpdateComponentRequestBody.md)
- [UpdateComponentResponse](docs/Model/UpdateComponentResponse.md)
- [UpdateCustomerSubscriptionTrialEndResponse](docs/Model/UpdateCustomerSubscriptionTrialEndResponse.md)
- [UpdateEntitlementReqCommon](docs/Model/UpdateEntitlementReqCommon.md)
- [UpdateEntityTraitDefinitionRequestBody](docs/Model/UpdateEntityTraitDefinitionRequestBody.md)
- [UpdateEntityTraitDefinitionResponse](docs/Model/UpdateEntityTraitDefinitionResponse.md)
- [UpdateEnvironmentRequestBody](docs/Model/UpdateEnvironmentRequestBody.md)
- [UpdateEnvironmentResponse](docs/Model/UpdateEnvironmentResponse.md)
- [UpdateFeatureRequestBody](docs/Model/UpdateFeatureRequestBody.md)
- [UpdateFeatureResponse](docs/Model/UpdateFeatureResponse.md)
- [UpdateFlagResponse](docs/Model/UpdateFlagResponse.md)
- [UpdateFlagRulesRequestBody](docs/Model/UpdateFlagRulesRequestBody.md)
- [UpdateFlagRulesResponse](docs/Model/UpdateFlagRulesResponse.md)
- [UpdatePayInAdvanceRequestBody](docs/Model/UpdatePayInAdvanceRequestBody.md)
- [UpdatePlanEntitlementRequestBody](docs/Model/UpdatePlanEntitlementRequestBody.md)
- [UpdatePlanEntitlementResponse](docs/Model/UpdatePlanEntitlementResponse.md)
- [UpdatePlanGroupRequestBody](docs/Model/UpdatePlanGroupRequestBody.md)
- [UpdatePlanGroupResponse](docs/Model/UpdatePlanGroupResponse.md)
- [UpdatePlanRequestBody](docs/Model/UpdatePlanRequestBody.md)
- [UpdatePlanResponse](docs/Model/UpdatePlanResponse.md)
- [UpdateRuleRequestBody](docs/Model/UpdateRuleRequestBody.md)
- [UpdateTrialEndRequestBody](docs/Model/UpdateTrialEndRequestBody.md)
- [UpdateWebhookRequestBody](docs/Model/UpdateWebhookRequestBody.md)
- [UpdateWebhookResponse](docs/Model/UpdateWebhookResponse.md)
- [UpsertBillingCouponResponse](docs/Model/UpsertBillingCouponResponse.md)
- [UpsertBillingCustomerResponse](docs/Model/UpsertBillingCustomerResponse.md)
- [UpsertBillingMeterResponse](docs/Model/UpsertBillingMeterResponse.md)
- [UpsertBillingPriceResponse](docs/Model/UpsertBillingPriceResponse.md)
- [UpsertBillingProductPlanResponse](docs/Model/UpsertBillingProductPlanResponse.md)
- [UpsertBillingProductRequestBody](docs/Model/UpsertBillingProductRequestBody.md)
- [UpsertBillingProductResponse](docs/Model/UpsertBillingProductResponse.md)
- [UpsertBillingSubscriptionResponse](docs/Model/UpsertBillingSubscriptionResponse.md)
- [UpsertCompanyRequestBody](docs/Model/UpsertCompanyRequestBody.md)
- [UpsertCompanyResponse](docs/Model/UpsertCompanyResponse.md)
- [UpsertCompanyTraitResponse](docs/Model/UpsertCompanyTraitResponse.md)
- [UpsertCrmDealResponse](docs/Model/UpsertCrmDealResponse.md)
- [UpsertCrmProductResponse](docs/Model/UpsertCrmProductResponse.md)
- [UpsertDealLineItemAssociationResponse](docs/Model/UpsertDealLineItemAssociationResponse.md)
- [UpsertInvoiceResponse](docs/Model/UpsertInvoiceResponse.md)
- [UpsertLineItemResponse](docs/Model/UpsertLineItemResponse.md)
- [UpsertPaymentMethodResponse](docs/Model/UpsertPaymentMethodResponse.md)
- [UpsertTraitRequestBody](docs/Model/UpsertTraitRequestBody.md)
- [UpsertUserRequestBody](docs/Model/UpsertUserRequestBody.md)
- [UpsertUserResponse](docs/Model/UpsertUserResponse.md)
- [UpsertUserSubRequestBody](docs/Model/UpsertUserSubRequestBody.md)
- [UpsertUserTraitResponse](docs/Model/UpsertUserTraitResponse.md)
- [UsageBasedEntitlementRequestBody](docs/Model/UsageBasedEntitlementRequestBody.md)
- [UsageBasedEntitlementResponseData](docs/Model/UsageBasedEntitlementResponseData.md)
- [UserDetailResponseData](docs/Model/UserDetailResponseData.md)
- [UserResponseData](docs/Model/UserResponseData.md)
- [WebhookEventDetailResponseData](docs/Model/WebhookEventDetailResponseData.md)
- [WebhookEventResponseData](docs/Model/WebhookEventResponseData.md)
- [WebhookResponseData](docs/Model/WebhookResponseData.md)

## Author

engineering@schematichq.com


## Support

If you encounter any issues or have questions regarding the Schematic PHP SDK, please contact our support team at support@schematic.com.
