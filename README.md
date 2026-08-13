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
*AccountsApi* | [**countAccountMembers**](docs/Api/AccountsApi.md#countaccountmembers) | **GET** /account-members/count | Count account members
*AccountsApi* | [**countApiKeys**](docs/Api/AccountsApi.md#countapikeys) | **GET** /api-keys/count | Count api keys
*AccountsApi* | [**countAuditLogs**](docs/Api/AccountsApi.md#countauditlogs) | **GET** /audit-log/count | Count audit logs
*AccountsApi* | [**createApiKey**](docs/Api/AccountsApi.md#createapikey) | **POST** /api-keys | Create api key
*AccountsApi* | [**createEnvironment**](docs/Api/AccountsApi.md#createenvironment) | **POST** /environments | Create environment
*AccountsApi* | [**deleteApiKey**](docs/Api/AccountsApi.md#deleteapikey) | **DELETE** /api-keys/{api_key_id} | Delete api key
*AccountsApi* | [**deleteEnvironment**](docs/Api/AccountsApi.md#deleteenvironment) | **DELETE** /environments/{environment_id} | Delete environment
*AccountsApi* | [**getAccountMember**](docs/Api/AccountsApi.md#getaccountmember) | **GET** /account-members/{account_member_id} | Get account member
*AccountsApi* | [**getApiKey**](docs/Api/AccountsApi.md#getapikey) | **GET** /api-keys/{api_key_id} | Get api key
*AccountsApi* | [**getAuditLog**](docs/Api/AccountsApi.md#getauditlog) | **GET** /audit-log/{audit_log_id} | Get audit log
*AccountsApi* | [**getEnvironment**](docs/Api/AccountsApi.md#getenvironment) | **GET** /environments/{environment_id} | Get environment
*AccountsApi* | [**getWhoAmI**](docs/Api/AccountsApi.md#getwhoami) | **GET** /whoami | Get who am I
*AccountsApi* | [**listAccountMembers**](docs/Api/AccountsApi.md#listaccountmembers) | **GET** /account-members | List account members
*AccountsApi* | [**listApiKeys**](docs/Api/AccountsApi.md#listapikeys) | **GET** /api-keys | List api keys
*AccountsApi* | [**listAuditLogs**](docs/Api/AccountsApi.md#listauditlogs) | **GET** /audit-log | List audit logs
*AccountsApi* | [**listEnvironments**](docs/Api/AccountsApi.md#listenvironments) | **GET** /environments | List environments
*AccountsApi* | [**quickstart**](docs/Api/AccountsApi.md#quickstart) | **POST** /quickstart | Quickstart
*AccountsApi* | [**updateApiKey**](docs/Api/AccountsApi.md#updateapikey) | **PUT** /api-keys/{api_key_id} | Update api key
*AccountsApi* | [**updateEnvironment**](docs/Api/AccountsApi.md#updateenvironment) | **PUT** /environments/{environment_id} | Update environment
*BillingApi* | [**countBillingProducts**](docs/Api/BillingApi.md#countbillingproducts) | **GET** /billing/products/count | Count billing products
*BillingApi* | [**countCustomers**](docs/Api/BillingApi.md#countcustomers) | **GET** /billing/customers/count | Count customers
*BillingApi* | [**deleteBillingCoupon**](docs/Api/BillingApi.md#deletebillingcoupon) | **DELETE** /billing/coupons/{billing_id} | Delete billing coupon
*BillingApi* | [**deleteBillingCustomer**](docs/Api/BillingApi.md#deletebillingcustomer) | **DELETE** /billing/customer/{billing_id} | Delete billing customer
*BillingApi* | [**deleteBillingInvoice**](docs/Api/BillingApi.md#deletebillinginvoice) | **DELETE** /billing/invoices/{billing_id} | Delete billing invoice
*BillingApi* | [**deleteBillingProduct**](docs/Api/BillingApi.md#deletebillingproduct) | **DELETE** /billing/product/{billing_id} | Delete billing product
*BillingApi* | [**deletePaymentMethodByExternalID**](docs/Api/BillingApi.md#deletepaymentmethodbyexternalid) | **DELETE** /billing/payment-methods/{billing_id} | Delete payment method by external ID
*BillingApi* | [**deleteProductPrice**](docs/Api/BillingApi.md#deleteproductprice) | **DELETE** /billing/product/prices/{billing_id} | Delete product price
*BillingApi* | [**listBillingPrices**](docs/Api/BillingApi.md#listbillingprices) | **GET** /billing/price | List billing prices
*BillingApi* | [**listBillingProductPrices**](docs/Api/BillingApi.md#listbillingproductprices) | **GET** /billing/product/prices | List billing product prices
*BillingApi* | [**listBillingProducts**](docs/Api/BillingApi.md#listbillingproducts) | **GET** /billing/products | List billing products
*BillingApi* | [**listCoupons**](docs/Api/BillingApi.md#listcoupons) | **GET** /billing/coupons | List coupons
*BillingApi* | [**listCustomersWithSubscriptions**](docs/Api/BillingApi.md#listcustomerswithsubscriptions) | **GET** /billing/customers | List customers with subscriptions
*BillingApi* | [**listInvoices**](docs/Api/BillingApi.md#listinvoices) | **GET** /billing/invoices | List invoices
*BillingApi* | [**listMeters**](docs/Api/BillingApi.md#listmeters) | **GET** /billing/meter | List meters
*BillingApi* | [**listPaymentMethods**](docs/Api/BillingApi.md#listpaymentmethods) | **GET** /billing/payment-methods | List payment methods
*BillingApi* | [**upsertBillingCoupon**](docs/Api/BillingApi.md#upsertbillingcoupon) | **POST** /billing/coupons | Upsert billing coupon
*BillingApi* | [**upsertBillingCustomer**](docs/Api/BillingApi.md#upsertbillingcustomer) | **POST** /billing/customer/upsert | Upsert billing customer
*BillingApi* | [**upsertBillingMeter**](docs/Api/BillingApi.md#upsertbillingmeter) | **POST** /billing/meter/upsert | Upsert billing meter
*BillingApi* | [**upsertBillingPrice**](docs/Api/BillingApi.md#upsertbillingprice) | **POST** /billing/price/upsert | Upsert billing price
*BillingApi* | [**upsertBillingProduct**](docs/Api/BillingApi.md#upsertbillingproduct) | **POST** /billing/product/upsert | Upsert billing product
*BillingApi* | [**upsertBillingSubscription**](docs/Api/BillingApi.md#upsertbillingsubscription) | **POST** /billing/subscription/upsert | Upsert billing subscription
*BillingApi* | [**upsertInvoice**](docs/Api/BillingApi.md#upsertinvoice) | **POST** /billing/invoices | Upsert invoice
*BillingApi* | [**upsertPaymentMethod**](docs/Api/BillingApi.md#upsertpaymentmethod) | **POST** /billing/payment-methods | Upsert payment method
*CatalogsApi* | [**addCreditBundle**](docs/Api/CatalogsApi.md#addcreditbundle) | **POST** /catalogs/{catalog_id}/credit-bundles/{credit_bundle_id} | Add credit bundle
*CatalogsApi* | [**addPlan**](docs/Api/CatalogsApi.md#addplan) | **POST** /catalogs/{catalog_id}/plans/{plan_id} | Add plan
*CatalogsApi* | [**createCatalog**](docs/Api/CatalogsApi.md#createcatalog) | **POST** /catalogs | Create catalog
*CatalogsApi* | [**deleteCatalog**](docs/Api/CatalogsApi.md#deletecatalog) | **DELETE** /catalogs/{catalog_id} | Delete catalog
*CatalogsApi* | [**getCatalog**](docs/Api/CatalogsApi.md#getcatalog) | **GET** /catalogs/{catalog_id} | Get catalog
*CatalogsApi* | [**getConfiguration**](docs/Api/CatalogsApi.md#getconfiguration) | **GET** /catalogs/{catalog_id}/configuration | Get configuration
*CatalogsApi* | [**getCreditBundlesInCatalog**](docs/Api/CatalogsApi.md#getcreditbundlesincatalog) | **GET** /catalogs/{catalog_id}/credit-bundles | Get credit bundles in catalog
*CatalogsApi* | [**getDerivedFeatures**](docs/Api/CatalogsApi.md#getderivedfeatures) | **GET** /catalogs/{catalog_id}/features | Get derived features
*CatalogsApi* | [**getPlansInCatalog**](docs/Api/CatalogsApi.md#getplansincatalog) | **GET** /catalogs/{catalog_id}/plans | Get plans in catalog
*CatalogsApi* | [**listCatalogs**](docs/Api/CatalogsApi.md#listcatalogs) | **GET** /catalogs | List catalogs
*CatalogsApi* | [**removeCreditBundle**](docs/Api/CatalogsApi.md#removecreditbundle) | **DELETE** /catalogs/{catalog_id}/credit-bundles/{credit_bundle_id} | Remove credit bundle
*CatalogsApi* | [**removePlan**](docs/Api/CatalogsApi.md#removeplan) | **DELETE** /catalogs/{catalog_id}/plans/{plan_id} | Remove plan
*CatalogsApi* | [**updateCatalog**](docs/Api/CatalogsApi.md#updatecatalog) | **PUT** /catalogs/{catalog_id} | Update catalog
*CatalogsApi* | [**updateConfiguration**](docs/Api/CatalogsApi.md#updateconfiguration) | **PUT** /catalogs/{catalog_id}/configuration | Update configuration
*CheckoutApi* | [**cancelSubscription**](docs/Api/CheckoutApi.md#cancelsubscription) | **POST** /manage-plan/subscription/cancel | Cancel subscription
*CheckoutApi* | [**checkoutInternal**](docs/Api/CheckoutApi.md#checkoutinternal) | **POST** /checkout-internal | Checkout internal
*CheckoutApi* | [**getCheckoutData**](docs/Api/CheckoutApi.md#getcheckoutdata) | **POST** /checkout-internal/data | Get checkout data
*CheckoutApi* | [**getCompanyBillingDetails**](docs/Api/CheckoutApi.md#getcompanybillingdetails) | **GET** /companies/{company_id}/billing-details | Get company billing details
*CheckoutApi* | [**managePlan**](docs/Api/CheckoutApi.md#manageplan) | **POST** /manage-plan | Manage plan
*CheckoutApi* | [**previewCheckoutInternal**](docs/Api/CheckoutApi.md#previewcheckoutinternal) | **POST** /checkout-internal/preview | Preview checkout internal
*CheckoutApi* | [**previewManagePlan**](docs/Api/CheckoutApi.md#previewmanageplan) | **POST** /manage-plan/preview | Preview manage plan
*CheckoutApi* | [**updateCompanyBillingDetails**](docs/Api/CheckoutApi.md#updatecompanybillingdetails) | **PUT** /companies/{company_id}/billing-details | Update company billing details
*CheckoutApi* | [**updateCustomerSubscriptionTrialEnd**](docs/Api/CheckoutApi.md#updatecustomersubscriptiontrialend) | **PUT** /subscription/{subscription_id}/edit-trial-end | Update customer subscription trial end
*CompaniesApi* | [**countCompanies**](docs/Api/CompaniesApi.md#countcompanies) | **GET** /companies/count | Count companies
*CompaniesApi* | [**countEntityKeyDefinitions**](docs/Api/CompaniesApi.md#countentitykeydefinitions) | **GET** /entity-key-definitions/count | Count entity key definitions
*CompaniesApi* | [**countEntityKeys**](docs/Api/CompaniesApi.md#countentitykeys) | **GET** /entity-keys/count | Count entity keys
*CompaniesApi* | [**countEntityTraitDefinitions**](docs/Api/CompaniesApi.md#countentitytraitdefinitions) | **GET** /entity-trait-definitions/count | Count entity trait definitions
*CompaniesApi* | [**countEntityTraits**](docs/Api/CompaniesApi.md#countentitytraits) | **GET** /entity-traits/count | Count entity traits
*CompaniesApi* | [**countPlanTraits**](docs/Api/CompaniesApi.md#countplantraits) | **GET** /plan-traits/count | Count plan traits
*CompaniesApi* | [**countUsers**](docs/Api/CompaniesApi.md#countusers) | **GET** /users/count | Count users
*CompaniesApi* | [**createCompany**](docs/Api/CompaniesApi.md#createcompany) | **POST** /companies/create | Create company
*CompaniesApi* | [**createUser**](docs/Api/CompaniesApi.md#createuser) | **POST** /users/create | Create user
*CompaniesApi* | [**deleteCompany**](docs/Api/CompaniesApi.md#deletecompany) | **DELETE** /companies/{company_id} | Delete company
*CompaniesApi* | [**deleteCompanyByKeys**](docs/Api/CompaniesApi.md#deletecompanybykeys) | **POST** /companies/delete | Delete company by keys
*CompaniesApi* | [**deleteCompanyMembership**](docs/Api/CompaniesApi.md#deletecompanymembership) | **DELETE** /company-memberships/{company_membership_id} | Delete company membership
*CompaniesApi* | [**deleteEntityKeyDefinition**](docs/Api/CompaniesApi.md#deleteentitykeydefinition) | **DELETE** /entity-key-definitions/{entity_key_definition_id} | Delete entity key definition
*CompaniesApi* | [**deleteEntityTraitDefinition**](docs/Api/CompaniesApi.md#deleteentitytraitdefinition) | **DELETE** /entity-trait-definitions/{entity_trait_definition_id} | Delete entity trait definition
*CompaniesApi* | [**deleteUser**](docs/Api/CompaniesApi.md#deleteuser) | **DELETE** /users/{user_id} | Delete user
*CompaniesApi* | [**deleteUserByKeys**](docs/Api/CompaniesApi.md#deleteuserbykeys) | **POST** /users/delete | Delete user by keys
*CompaniesApi* | [**getActiveCompanySubscription**](docs/Api/CompaniesApi.md#getactivecompanysubscription) | **GET** /company-subscriptions | Get active company subscription
*CompaniesApi* | [**getBillingEntityChildSubscriptions**](docs/Api/CompaniesApi.md#getbillingentitychildsubscriptions) | **GET** /company-billing-entity-subscriptions | Get billing entity child subscriptions
*CompaniesApi* | [**getCompany**](docs/Api/CompaniesApi.md#getcompany) | **GET** /companies/{company_id} | Get company
*CompaniesApi* | [**getCompanyBillingEntity**](docs/Api/CompaniesApi.md#getcompanybillingentity) | **GET** /company-billing-entity | Get company billing entity
*CompaniesApi* | [**getEntityTraitDefinition**](docs/Api/CompaniesApi.md#getentitytraitdefinition) | **GET** /entity-trait-definitions/{entity_trait_definition_id} | Get entity trait definition
*CompaniesApi* | [**getEntityTraitDefinitionUsage**](docs/Api/CompaniesApi.md#getentitytraitdefinitionusage) | **GET** /entity-trait-definitions/{entity_trait_definition_id}/usage | Get entity trait definition usage
*CompaniesApi* | [**getEntityTraitValues**](docs/Api/CompaniesApi.md#getentitytraitvalues) | **GET** /entity-trait-values | Get entity trait values
*CompaniesApi* | [**getOrCreateCompanyMembership**](docs/Api/CompaniesApi.md#getorcreatecompanymembership) | **POST** /company-memberships | Get or create company membership
*CompaniesApi* | [**getOrCreateEntityTraitDefinition**](docs/Api/CompaniesApi.md#getorcreateentitytraitdefinition) | **POST** /entity-trait-definitions | Get or create entity trait definition
*CompaniesApi* | [**getPlanChange**](docs/Api/CompaniesApi.md#getplanchange) | **GET** /plan-changes/{plan_change_id} | Get plan change
*CompaniesApi* | [**getPlanTrait**](docs/Api/CompaniesApi.md#getplantrait) | **GET** /plan-traits/{plan_trait_id} | Get plan trait
*CompaniesApi* | [**getUser**](docs/Api/CompaniesApi.md#getuser) | **GET** /users/{user_id} | Get user
*CompaniesApi* | [**listCompanies**](docs/Api/CompaniesApi.md#listcompanies) | **GET** /companies | List companies
*CompaniesApi* | [**listCompanyMemberships**](docs/Api/CompaniesApi.md#listcompanymemberships) | **GET** /company-memberships | List company memberships
*CompaniesApi* | [**listEntityKeyDefinitions**](docs/Api/CompaniesApi.md#listentitykeydefinitions) | **GET** /entity-key-definitions | List entity key definitions
*CompaniesApi* | [**listEntityTraitDefinitions**](docs/Api/CompaniesApi.md#listentitytraitdefinitions) | **GET** /entity-trait-definitions | List entity trait definitions
*CompaniesApi* | [**listPlanChanges**](docs/Api/CompaniesApi.md#listplanchanges) | **GET** /plan-changes | List plan changes
*CompaniesApi* | [**listPlanTraits**](docs/Api/CompaniesApi.md#listplantraits) | **GET** /plan-traits | List plan traits
*CompaniesApi* | [**listUsers**](docs/Api/CompaniesApi.md#listusers) | **GET** /users | List users
*CompaniesApi* | [**lookupCompany**](docs/Api/CompaniesApi.md#lookupcompany) | **GET** /companies/lookup | Lookup company
*CompaniesApi* | [**lookupUser**](docs/Api/CompaniesApi.md#lookupuser) | **GET** /users/lookup | Lookup user
*CompaniesApi* | [**updateEntityTraitDefinition**](docs/Api/CompaniesApi.md#updateentitytraitdefinition) | **PUT** /entity-trait-definitions/{entity_trait_definition_id} | Update entity trait definition
*CompaniesApi* | [**updatePlanTraitsBulk**](docs/Api/CompaniesApi.md#updateplantraitsbulk) | **POST** /plan-traits/bulk | Update plan traits bulk
*CompaniesApi* | [**upsertCompany**](docs/Api/CompaniesApi.md#upsertcompany) | **POST** /companies | Upsert company
*CompaniesApi* | [**upsertCompanyTrait**](docs/Api/CompaniesApi.md#upsertcompanytrait) | **POST** /company-traits | Upsert company trait
*CompaniesApi* | [**upsertUser**](docs/Api/CompaniesApi.md#upsertuser) | **POST** /users | Upsert user
*CompaniesApi* | [**upsertUserTrait**](docs/Api/CompaniesApi.md#upsertusertrait) | **POST** /user-traits | Upsert user trait
*ComponentsApi* | [**bindCatalog**](docs/Api/ComponentsApi.md#bindcatalog) | **PUT** /components/{component_id}/catalog | Bind catalog
*ComponentsApi* | [**countComponents**](docs/Api/ComponentsApi.md#countcomponents) | **GET** /components/count | Count components
*ComponentsApi* | [**createComponent**](docs/Api/ComponentsApi.md#createcomponent) | **POST** /components | Create component
*ComponentsApi* | [**deleteComponent**](docs/Api/ComponentsApi.md#deletecomponent) | **DELETE** /components/{component_id} | Delete component
*ComponentsApi* | [**getComponent**](docs/Api/ComponentsApi.md#getcomponent) | **GET** /components/{component_id} | Get component
*ComponentsApi* | [**listComponents**](docs/Api/ComponentsApi.md#listcomponents) | **GET** /components | List components
*ComponentsApi* | [**previewComponentData**](docs/Api/ComponentsApi.md#previewcomponentdata) | **GET** /components/preview-data | Preview component data
*ComponentsApi* | [**updateComponent**](docs/Api/ComponentsApi.md#updatecomponent) | **PUT** /components/{component_id} | Update component
*ComponentspublicApi* | [**getPublicPlans**](docs/Api/ComponentspublicApi.md#getpublicplans) | **GET** /public/plans | Get public plans
*CreditsApi* | [**acquireCreditLease**](docs/Api/CreditsApi.md#acquirecreditlease) | **POST** /billing/credits/lease | Acquire credit lease
*CreditsApi* | [**countBillingCredits**](docs/Api/CreditsApi.md#countbillingcredits) | **GET** /billing/credits/count | Count billing credits
*CreditsApi* | [**countBillingCreditsGrants**](docs/Api/CreditsApi.md#countbillingcreditsgrants) | **GET** /billing/credits/grants/count | Count billing credits grants
*CreditsApi* | [**countBillingPlanCreditGrants**](docs/Api/CreditsApi.md#countbillingplancreditgrants) | **GET** /billing/credits/plan-grants/count | Count billing plan credit grants
*CreditsApi* | [**countCompanyGrants**](docs/Api/CreditsApi.md#countcompanygrants) | **GET** /billing/credits/grants/company/count | Count company grants
*CreditsApi* | [**countCreditBundles**](docs/Api/CreditsApi.md#countcreditbundles) | **GET** /billing/credits/bundles/count | Count credit bundles
*CreditsApi* | [**countCreditEventLedger**](docs/Api/CreditsApi.md#countcrediteventledger) | **GET** /v2/billing/credits/ledger/count | Count credit event ledger
*CreditsApi* | [**createBillingCredit**](docs/Api/CreditsApi.md#createbillingcredit) | **POST** /billing/credits | Create billing credit
*CreditsApi* | [**createBillingPlanCreditGrant**](docs/Api/CreditsApi.md#createbillingplancreditgrant) | **POST** /billing/credits/plan-grants | Create billing plan credit grant
*CreditsApi* | [**createCreditBundle**](docs/Api/CreditsApi.md#createcreditbundle) | **POST** /billing/credits/bundles | Create credit bundle
*CreditsApi* | [**deleteBillingPlanCreditGrant**](docs/Api/CreditsApi.md#deletebillingplancreditgrant) | **DELETE** /billing/credits/plan-grants/{plan_grant_id} | Delete billing plan credit grant
*CreditsApi* | [**deleteCreditBundle**](docs/Api/CreditsApi.md#deletecreditbundle) | **DELETE** /billing/credits/bundles/{bundle_id} | Delete credit bundle
*CreditsApi* | [**extendCreditLease**](docs/Api/CreditsApi.md#extendcreditlease) | **PUT** /billing/credits/lease/{lease_id}/extend | Extend credit lease
*CreditsApi* | [**getCreditBundle**](docs/Api/CreditsApi.md#getcreditbundle) | **GET** /billing/credits/bundles/{bundle_id} | Get credit bundle
*CreditsApi* | [**getSingleBillingCredit**](docs/Api/CreditsApi.md#getsinglebillingcredit) | **GET** /billing/credits/{credit_id} | Get single billing credit
*CreditsApi* | [**getSingleBillingPlanCreditGrant**](docs/Api/CreditsApi.md#getsinglebillingplancreditgrant) | **GET** /billing/credits/plan-grants/{plan_grant_id} | Get single billing plan credit grant
*CreditsApi* | [**grantBillingCreditsToCompany**](docs/Api/CreditsApi.md#grantbillingcreditstocompany) | **POST** /billing/credits/grants/company | Grant billing credits to company
*CreditsApi* | [**listBillingCredits**](docs/Api/CreditsApi.md#listbillingcredits) | **GET** /billing/credits | List billing credits
*CreditsApi* | [**listBillingPlanCreditGrants**](docs/Api/CreditsApi.md#listbillingplancreditgrants) | **GET** /billing/credits/plan-grants | List billing plan credit grants
*CreditsApi* | [**listCompanyCreditBalances**](docs/Api/CreditsApi.md#listcompanycreditbalances) | **GET** /billing/credits/balance | List company credit balances
*CreditsApi* | [**listCompanyGrants**](docs/Api/CreditsApi.md#listcompanygrants) | **GET** /billing/credits/grants/company/list | List company grants
*CreditsApi* | [**listCreditBundles**](docs/Api/CreditsApi.md#listcreditbundles) | **GET** /billing/credits/bundles | List credit bundles
*CreditsApi* | [**listCreditEventLedger**](docs/Api/CreditsApi.md#listcrediteventledger) | **GET** /v2/billing/credits/ledger | List credit event ledger
*CreditsApi* | [**listGrantsForCredit**](docs/Api/CreditsApi.md#listgrantsforcredit) | **GET** /billing/credits/grants/list | List grants for credit
*CreditsApi* | [**releaseCreditLease**](docs/Api/CreditsApi.md#releasecreditlease) | **PUT** /billing/credits/lease/{lease_id}/release | Release credit lease
*CreditsApi* | [**softDeleteBillingCredit**](docs/Api/CreditsApi.md#softdeletebillingcredit) | **DELETE** /billing/credits/{credit_id} | Soft delete billing credit
*CreditsApi* | [**updateBillingCredit**](docs/Api/CreditsApi.md#updatebillingcredit) | **PUT** /billing/credits/{credit_id} | Update billing credit
*CreditsApi* | [**updateBillingPlanCreditGrant**](docs/Api/CreditsApi.md#updatebillingplancreditgrant) | **PUT** /billing/credits/plan-grants/{plan_grant_id} | Update billing plan credit grant
*CreditsApi* | [**updateCreditBundleDetails**](docs/Api/CreditsApi.md#updatecreditbundledetails) | **PUT** /billing/credits/bundles/{bundle_id} | Update credit bundle details
*CreditsApi* | [**zeroOutGrant**](docs/Api/CreditsApi.md#zerooutgrant) | **PUT** /billing/credits/grants/{grant_id}/zero-out | Zero out grant
*DataexportsApi* | [**createDataExport**](docs/Api/DataexportsApi.md#createdataexport) | **POST** /data-exports | Create data export
*DataexportsApi* | [**getDataExport**](docs/Api/DataexportsApi.md#getdataexport) | **GET** /data-exports/{data_export_id} | Get data export
*DataexportsApi* | [**getDataExportArtifact**](docs/Api/DataexportsApi.md#getdataexportartifact) | **GET** /data-exports/{data_export_id}/artifact | Get data export artifact
*DataexportsApi* | [**listDataExports**](docs/Api/DataexportsApi.md#listdataexports) | **GET** /data-exports | List data exports
*EntitlementsApi* | [**countCompanyOverrides**](docs/Api/EntitlementsApi.md#countcompanyoverrides) | **GET** /company-overrides/count | Count company overrides
*EntitlementsApi* | [**countFeatureCompanies**](docs/Api/EntitlementsApi.md#countfeaturecompanies) | **GET** /feature-companies/count | Count feature companies
*EntitlementsApi* | [**countFeatureUsage**](docs/Api/EntitlementsApi.md#countfeatureusage) | **GET** /feature-usage/count | Count feature usage
*EntitlementsApi* | [**countFeatureUsers**](docs/Api/EntitlementsApi.md#countfeatureusers) | **GET** /feature-users/count | Count feature users
*EntitlementsApi* | [**countPlanEntitlements**](docs/Api/EntitlementsApi.md#countplanentitlements) | **GET** /plan-entitlements/count | Count plan entitlements
*EntitlementsApi* | [**createCompanyOverride**](docs/Api/EntitlementsApi.md#createcompanyoverride) | **POST** /company-overrides | Create company override
*EntitlementsApi* | [**createPlanEntitlement**](docs/Api/EntitlementsApi.md#createplanentitlement) | **POST** /plan-entitlements | Create plan entitlement
*EntitlementsApi* | [**deleteCompanyOverride**](docs/Api/EntitlementsApi.md#deletecompanyoverride) | **DELETE** /company-overrides/{company_override_id} | Delete company override
*EntitlementsApi* | [**deletePlanEntitlement**](docs/Api/EntitlementsApi.md#deleteplanentitlement) | **DELETE** /plan-entitlements/{plan_entitlement_id} | Delete plan entitlement
*EntitlementsApi* | [**duplicatePlanEntitlements**](docs/Api/EntitlementsApi.md#duplicateplanentitlements) | **POST** /plan-entitlements/duplicate | Duplicate plan entitlements
*EntitlementsApi* | [**getCompanyOverride**](docs/Api/EntitlementsApi.md#getcompanyoverride) | **GET** /company-overrides/{company_override_id} | Get company override
*EntitlementsApi* | [**getFeatureUsageByCompany**](docs/Api/EntitlementsApi.md#getfeatureusagebycompany) | **GET** /usage-by-company | Get feature usage by company
*EntitlementsApi* | [**getFeatureUsageTimeSeries**](docs/Api/EntitlementsApi.md#getfeatureusagetimeseries) | **GET** /feature-usage-timeseries | Get feature usage time series
*EntitlementsApi* | [**getPlanEntitlement**](docs/Api/EntitlementsApi.md#getplanentitlement) | **GET** /plan-entitlements/{plan_entitlement_id} | Get plan entitlement
*EntitlementsApi* | [**getUserUsageByCompany**](docs/Api/EntitlementsApi.md#getuserusagebycompany) | **GET** /user-usage-by-company | Get user usage by company
*EntitlementsApi* | [**getUserUsageDetail**](docs/Api/EntitlementsApi.md#getuserusagedetail) | **GET** /user-usage-detail | Get user usage detail
*EntitlementsApi* | [**listCompanyOverrides**](docs/Api/EntitlementsApi.md#listcompanyoverrides) | **GET** /company-overrides | List company overrides
*EntitlementsApi* | [**listFeatureCompanies**](docs/Api/EntitlementsApi.md#listfeaturecompanies) | **GET** /feature-companies | List feature companies
*EntitlementsApi* | [**listFeatureUsage**](docs/Api/EntitlementsApi.md#listfeatureusage) | **GET** /feature-usage | List feature usage
*EntitlementsApi* | [**listFeatureUsers**](docs/Api/EntitlementsApi.md#listfeatureusers) | **GET** /feature-users | List feature users
*EntitlementsApi* | [**listPlanEntitlements**](docs/Api/EntitlementsApi.md#listplanentitlements) | **GET** /plan-entitlements | List plan entitlements
*EntitlementsApi* | [**updateCompanyOverride**](docs/Api/EntitlementsApi.md#updatecompanyoverride) | **PUT** /company-overrides/{company_override_id} | Update company override
*EntitlementsApi* | [**updatePlanEntitlement**](docs/Api/EntitlementsApi.md#updateplanentitlement) | **PUT** /plan-entitlements/{plan_entitlement_id} | Update plan entitlement
*EntitlementsApi* | [**upsertPlanEntitlementForBillingProduct**](docs/Api/EntitlementsApi.md#upsertplanentitlementforbillingproduct) | **POST** /plan-entitlements/billing-linked | Upsert plan entitlement for billing product
*EventsApi* | [**createEvent**](docs/Api/EventsApi.md#createevent) | **POST** /events | Create event
*EventsApi* | [**createEventBatch**](docs/Api/EventsApi.md#createeventbatch) | **POST** /event-batch | Create event batch
*EventsApi* | [**getEvent**](docs/Api/EventsApi.md#getevent) | **GET** /events/{event_id} | Get event
*EventsApi* | [**getEventSummaries**](docs/Api/EventsApi.md#geteventsummaries) | **GET** /event-types | Get event summaries
*EventsApi* | [**getSegmentIntegrationStatus**](docs/Api/EventsApi.md#getsegmentintegrationstatus) | **GET** /segment-integration | Get segment integration status
*EventsApi* | [**listEvents**](docs/Api/EventsApi.md#listevents) | **GET** /events | List events
*FeaturesApi* | [**checkFlag**](docs/Api/FeaturesApi.md#checkflag) | **POST** /flags/{key}/check | Check flag
*FeaturesApi* | [**checkFlags**](docs/Api/FeaturesApi.md#checkflags) | **POST** /flags/check | Check flags
*FeaturesApi* | [**checkFlagsBulk**](docs/Api/FeaturesApi.md#checkflagsbulk) | **POST** /flags/check-bulk | Check flags bulk
*FeaturesApi* | [**countFeatures**](docs/Api/FeaturesApi.md#countfeatures) | **GET** /features/count | Count features
*FeaturesApi* | [**countFlags**](docs/Api/FeaturesApi.md#countflags) | **GET** /flags/count | Count flags
*FeaturesApi* | [**createFeature**](docs/Api/FeaturesApi.md#createfeature) | **POST** /features | Create feature
*FeaturesApi* | [**createFlag**](docs/Api/FeaturesApi.md#createflag) | **POST** /flags | Create flag
*FeaturesApi* | [**deleteFeature**](docs/Api/FeaturesApi.md#deletefeature) | **DELETE** /features/{feature_id} | Delete feature
*FeaturesApi* | [**deleteFlag**](docs/Api/FeaturesApi.md#deleteflag) | **DELETE** /flags/{flag_id} | Delete flag
*FeaturesApi* | [**getFeature**](docs/Api/FeaturesApi.md#getfeature) | **GET** /features/{feature_id} | Get feature
*FeaturesApi* | [**getFlag**](docs/Api/FeaturesApi.md#getflag) | **GET** /flags/{flag_id} | Get flag
*FeaturesApi* | [**listFeatures**](docs/Api/FeaturesApi.md#listfeatures) | **GET** /features | List features
*FeaturesApi* | [**listFlags**](docs/Api/FeaturesApi.md#listflags) | **GET** /flags | List flags
*FeaturesApi* | [**updateFeature**](docs/Api/FeaturesApi.md#updatefeature) | **PUT** /features/{feature_id} | Update feature
*FeaturesApi* | [**updateFlag**](docs/Api/FeaturesApi.md#updateflag) | **PUT** /flags/{flag_id} | Update flag
*FeaturesApi* | [**updateFlagRules**](docs/Api/FeaturesApi.md#updateflagrules) | **PUT** /flags/{flag_id}/rules | Update flag rules
*FeaturesApi* | [**upsertFeatureForBillingProduct**](docs/Api/FeaturesApi.md#upsertfeatureforbillingproduct) | **POST** /features/billing-linked | Upsert feature for billing product
*InsightsApi* | [**getActivity**](docs/Api/InsightsApi.md#getactivity) | **GET** /insights/activity | Get activity
*InsightsApi* | [**getEnvironmentFeatureUsageTimeSeries**](docs/Api/InsightsApi.md#getenvironmentfeatureusagetimeseries) | **GET** /insights/feature-usage-timeseries | Get environment feature usage time series
*InsightsApi* | [**getEnvironmentTraitUsageTimeSeries**](docs/Api/InsightsApi.md#getenvironmenttraitusagetimeseries) | **GET** /insights/trait-usage-timeseries | Get environment trait usage time series
*InsightsApi* | [**getPlanGrowth**](docs/Api/InsightsApi.md#getplangrowth) | **GET** /insights/plan-growth | Get plan growth
*InsightsApi* | [**getSummary**](docs/Api/InsightsApi.md#getsummary) | **GET** /insights/summary | Get summary
*InsightsApi* | [**getTopFeaturesByUsage**](docs/Api/InsightsApi.md#gettopfeaturesbyusage) | **GET** /insights/top-features | Get top features by usage
*IntegrationsapiApi* | [**assumeStripeInstalled**](docs/Api/IntegrationsapiApi.md#assumestripeinstalled) | **POST** /integrations/stripe/v2/assume-installed | Assume stripe installed
*IntegrationsapiApi* | [**getIntegrationWebhookUrl**](docs/Api/IntegrationsapiApi.md#getintegrationwebhookurl) | **GET** /integrations/{type}/webhook-url | Get integration webhook url
*IntegrationsapiApi* | [**installIntegration**](docs/Api/IntegrationsapiApi.md#installintegration) | **POST** /integrations/install | Install integration
*IntegrationsapiApi* | [**installStripe**](docs/Api/IntegrationsapiApi.md#installstripe) | **POST** /integrations/stripe/v2/install | Install stripe
*IntegrationsapiApi* | [**listIntegrations**](docs/Api/IntegrationsapiApi.md#listintegrations) | **GET** /integrations | List integrations
*IntegrationsapiApi* | [**loadSampleDataSet**](docs/Api/IntegrationsapiApi.md#loadsampledataset) | **GET** /integrations/stripe/dataset-sample-v2 | Load sample data set
*IntegrationsapiApi* | [**runIntegration**](docs/Api/IntegrationsapiApi.md#runintegration) | **GET** /integration/start/{integration_id} | Run integration
*IntegrationsapiApi* | [**startDataImport**](docs/Api/IntegrationsapiApi.md#startdataimport) | **POST** /integrations/start-data-import | Start data import
*IntegrationsapiApi* | [**uninstallIntegration**](docs/Api/IntegrationsapiApi.md#uninstallintegration) | **DELETE** /integrations/uninstall/{integration_id} | Uninstall integration
*LicensesApi* | [**countLicenses**](docs/Api/LicensesApi.md#countlicenses) | **GET** /licenses/count | Count licenses
*LicensesApi* | [**getSingleLicense**](docs/Api/LicensesApi.md#getsinglelicense) | **GET** /licenses/{license_id} | Get single license
*LicensesApi* | [**listLicenses**](docs/Api/LicensesApi.md#listlicenses) | **GET** /licenses | List licenses
*PlanbundleApi* | [**createCustomPlanBundle**](docs/Api/PlanbundleApi.md#createcustomplanbundle) | **POST** /custom-plan-bundles | Create custom plan bundle
*PlanbundleApi* | [**createPlanBundle**](docs/Api/PlanbundleApi.md#createplanbundle) | **POST** /plan-bundles | Create plan bundle
*PlanbundleApi* | [**updatePlanBundle**](docs/Api/PlanbundleApi.md#updateplanbundle) | **PUT** /plan-bundles/{plan_bundle_id} | Update plan bundle
*PlangroupsApi* | [**createPlanGroup**](docs/Api/PlangroupsApi.md#createplangroup) | **POST** /plan-groups | Create plan group
*PlangroupsApi* | [**getPlanGroup**](docs/Api/PlangroupsApi.md#getplangroup) | **GET** /plan-groups | Get plan group
*PlangroupsApi* | [**updatePlanGroup**](docs/Api/PlangroupsApi.md#updateplangroup) | **PUT** /plan-groups/{plan_group_id} | Update plan group
*PlanmigrationsApi* | [**countCompanyMigrations**](docs/Api/PlanmigrationsApi.md#countcompanymigrations) | **GET** /plan-version-company-migrations/count | Count company migrations
*PlanmigrationsApi* | [**countMigrations**](docs/Api/PlanmigrationsApi.md#countmigrations) | **GET** /plan-version-migrations/count | Count migrations
*PlanmigrationsApi* | [**createMigration**](docs/Api/PlanmigrationsApi.md#createmigration) | **POST** /plan-version-migrations | Create migration
*PlanmigrationsApi* | [**getMigration**](docs/Api/PlanmigrationsApi.md#getmigration) | **GET** /plan-version-migrations/{plan_version_migration_id} | Get migration
*PlanmigrationsApi* | [**listCompanyMigrations**](docs/Api/PlanmigrationsApi.md#listcompanymigrations) | **GET** /plan-version-company-migrations | List company migrations
*PlanmigrationsApi* | [**listMigrations**](docs/Api/PlanmigrationsApi.md#listmigrations) | **GET** /plan-version-migrations | List migrations
*PlanmigrationsApi* | [**previewMigration**](docs/Api/PlanmigrationsApi.md#previewmigration) | **POST** /plan-version-migrations/preview | Preview migration
*PlanmigrationsApi* | [**retryCompanyMigration**](docs/Api/PlanmigrationsApi.md#retrycompanymigration) | **POST** /plan-version-company-migrations/{plan_version_company_migration_id}/retry | Retry company migration
*PlanmigrationsApi* | [**retryMigration**](docs/Api/PlanmigrationsApi.md#retrymigration) | **POST** /plan-version-migrations/{plan_version_migration_id}/retry | Retry migration
*PlansApi* | [**countBillingProductMatchCompanies**](docs/Api/PlansApi.md#countbillingproductmatchcompanies) | **GET** /plans/billing-product-match-companies/count | Count billing product match companies
*PlansApi* | [**countPlans**](docs/Api/PlansApi.md#countplans) | **GET** /plans/count | Count plans
*PlansApi* | [**createCustomPlan**](docs/Api/PlansApi.md#createcustomplan) | **POST** /custom-plans | Create custom plan
*PlansApi* | [**createPlan**](docs/Api/PlansApi.md#createplan) | **POST** /plans | Create plan
*PlansApi* | [**deletePlan**](docs/Api/PlansApi.md#deleteplan) | **DELETE** /plans/{plan_id} | Delete plan
*PlansApi* | [**deletePlanVersion**](docs/Api/PlansApi.md#deleteplanversion) | **DELETE** /plans/version/{plan_version_id} | Delete plan version
*PlansApi* | [**getPlan**](docs/Api/PlansApi.md#getplan) | **GET** /plans/{plan_id} | Get plan
*PlansApi* | [**listBillingProductMatchCompanies**](docs/Api/PlansApi.md#listbillingproductmatchcompanies) | **GET** /plans/billing-product-match-companies | List billing product match companies
*PlansApi* | [**listCustomPlanBillings**](docs/Api/PlansApi.md#listcustomplanbillings) | **GET** /custom-plan-billings | List custom plan billings
*PlansApi* | [**listPlanIssues**](docs/Api/PlansApi.md#listplanissues) | **GET** /plans/issues | List plan issues
*PlansApi* | [**listPlans**](docs/Api/PlansApi.md#listplans) | **GET** /plans | List plans
*PlansApi* | [**markCustomPlanBillingPaid**](docs/Api/PlansApi.md#markcustomplanbillingpaid) | **PUT** /custom-plan-billings/{custom_plan_billing_id}/mark-paid | Mark custom plan billing paid
*PlansApi* | [**publishPlanVersion**](docs/Api/PlansApi.md#publishplanversion) | **PUT** /plans/version/{plan_version_id}/publish | Publish plan version
*PlansApi* | [**retryCustomPlanBilling**](docs/Api/PlansApi.md#retrycustomplanbilling) | **PUT** /custom-plan-billings/{custom_plan_billing_id}/retry | Retry custom plan billing
*PlansApi* | [**updateCompanyPlans**](docs/Api/PlansApi.md#updatecompanyplans) | **PUT** /company-plans/{company_plan_id} | Update company plans
*PlansApi* | [**updatePlan**](docs/Api/PlansApi.md#updateplan) | **PUT** /plans/{plan_id} | Update plan
*PlansApi* | [**upsertBillingProductPlan**](docs/Api/PlansApi.md#upsertbillingproductplan) | **PUT** /plans/{plan_id}/billing_products | Upsert billing product plan
*PlansApi* | [**upsertPlanForBillingProduct**](docs/Api/PlansApi.md#upsertplanforbillingproduct) | **POST** /plans/billing-linked | Upsert plan for billing product
*ScheduledcheckoutApi* | [**createScheduledCheckout**](docs/Api/ScheduledcheckoutApi.md#createscheduledcheckout) | **POST** /scheduled-checkout | Create scheduled checkout
*ScheduledcheckoutApi* | [**getScheduledCheckout**](docs/Api/ScheduledcheckoutApi.md#getscheduledcheckout) | **GET** /scheduled-checkout/{scheduled_checkout_id} | Get scheduled checkout
*ScheduledcheckoutApi* | [**listScheduledCheckouts**](docs/Api/ScheduledcheckoutApi.md#listscheduledcheckouts) | **GET** /scheduled-checkout | List scheduled checkouts
*ScheduledcheckoutApi* | [**updateScheduledCheckout**](docs/Api/ScheduledcheckoutApi.md#updatescheduledcheckout) | **PUT** /scheduled-checkout/{scheduled_checkout_id} | Update scheduled checkout
*WebhooksApi* | [**countWebhookEvents**](docs/Api/WebhooksApi.md#countwebhookevents) | **GET** /webhook-events/count | Count webhook events
*WebhooksApi* | [**countWebhooks**](docs/Api/WebhooksApi.md#countwebhooks) | **GET** /webhooks/count | Count webhooks
*WebhooksApi* | [**createWebhook**](docs/Api/WebhooksApi.md#createwebhook) | **POST** /webhooks | Create webhook
*WebhooksApi* | [**deleteWebhook**](docs/Api/WebhooksApi.md#deletewebhook) | **DELETE** /webhooks/{webhook_id} | Delete webhook
*WebhooksApi* | [**getWebhook**](docs/Api/WebhooksApi.md#getwebhook) | **GET** /webhooks/{webhook_id} | Get webhook
*WebhooksApi* | [**getWebhookEvent**](docs/Api/WebhooksApi.md#getwebhookevent) | **GET** /webhook-events/{webhook_event_id} | Get webhook event
*WebhooksApi* | [**listWebhookEvents**](docs/Api/WebhooksApi.md#listwebhookevents) | **GET** /webhook-events | List webhook events
*WebhooksApi* | [**listWebhooks**](docs/Api/WebhooksApi.md#listwebhooks) | **GET** /webhooks | List webhooks
*WebhooksApi* | [**sendTestWebhookAction**](docs/Api/WebhooksApi.md#sendtestwebhookaction) | **POST** /webhooks/{webhook_id}/test | Send test webhook action
*WebhooksApi* | [**updateWebhook**](docs/Api/WebhooksApi.md#updatewebhook) | **PUT** /webhooks/{webhook_id} | Update webhook

## Models

- [AccountMemberPermission](docs/Model/AccountMemberPermission.md)
- [AccountMemberResponseData](docs/Model/AccountMemberResponseData.md)
- [AccountMemberRole](docs/Model/AccountMemberRole.md)
- [AcquireCreditLeaseRequestBody](docs/Model/AcquireCreditLeaseRequestBody.md)
- [AcquireCreditLeaseResponse](docs/Model/AcquireCreditLeaseResponse.md)
- [ActivityEntryResponseData](docs/Model/ActivityEntryResponseData.md)
- [ActivityResponseResponseData](docs/Model/ActivityResponseResponseData.md)
- [ActorType](docs/Model/ActorType.md)
- [ApiError](docs/Model/ApiError.md)
- [ApiKeyCreateResponseData](docs/Model/ApiKeyCreateResponseData.md)
- [ApiKeyIntegrationResponseData](docs/Model/ApiKeyIntegrationResponseData.md)
- [ApiKeyResponseData](docs/Model/ApiKeyResponseData.md)
- [ApiKeyScope](docs/Model/ApiKeyScope.md)
- [AssumeStripeInstalledResponse](docs/Model/AssumeStripeInstalledResponse.md)
- [AuditLogExportMetadata](docs/Model/AuditLogExportMetadata.md)
- [AuditLogListResponseData](docs/Model/AuditLogListResponseData.md)
- [AuditLogResponseData](docs/Model/AuditLogResponseData.md)
- [BillingCollectionMethod](docs/Model/BillingCollectionMethod.md)
- [BillingCouponResponseData](docs/Model/BillingCouponResponseData.md)
- [BillingCreditAutoTopupAvailability](docs/Model/BillingCreditAutoTopupAvailability.md)
- [BillingCreditBundleResponseData](docs/Model/BillingCreditBundleResponseData.md)
- [BillingCreditBundleStatus](docs/Model/BillingCreditBundleStatus.md)
- [BillingCreditBundleType](docs/Model/BillingCreditBundleType.md)
- [BillingCreditBundleView](docs/Model/BillingCreditBundleView.md)
- [BillingCreditBurnStrategy](docs/Model/BillingCreditBurnStrategy.md)
- [BillingCreditExpiryType](docs/Model/BillingCreditExpiryType.md)
- [BillingCreditExpiryUnit](docs/Model/BillingCreditExpiryUnit.md)
- [BillingCreditGrantReason](docs/Model/BillingCreditGrantReason.md)
- [BillingCreditGrantResponseData](docs/Model/BillingCreditGrantResponseData.md)
- [BillingCreditGrantZeroedOutReason](docs/Model/BillingCreditGrantZeroedOutReason.md)
- [BillingCreditLedgerAuthority](docs/Model/BillingCreditLedgerAuthority.md)
- [BillingCreditLedgerResponseData](docs/Model/BillingCreditLedgerResponseData.md)
- [BillingCreditResponseData](docs/Model/BillingCreditResponseData.md)
- [BillingCreditRolloverPolicy](docs/Model/BillingCreditRolloverPolicy.md)
- [BillingCreditView](docs/Model/BillingCreditView.md)
- [BillingCustomerResponseData](docs/Model/BillingCustomerResponseData.md)
- [BillingCustomerSubscription](docs/Model/BillingCustomerSubscription.md)
- [BillingCustomerWithSubscriptionsResponseData](docs/Model/BillingCustomerWithSubscriptionsResponseData.md)
- [BillingLinkedResourceResponseData](docs/Model/BillingLinkedResourceResponseData.md)
- [BillingMeterResponseData](docs/Model/BillingMeterResponseData.md)
- [BillingPlanCreditGrantResetCadence](docs/Model/BillingPlanCreditGrantResetCadence.md)
- [BillingPlanCreditGrantResetStart](docs/Model/BillingPlanCreditGrantResetStart.md)
- [BillingPlanCreditGrantResetType](docs/Model/BillingPlanCreditGrantResetType.md)
- [BillingPlanCreditGrantResponseData](docs/Model/BillingPlanCreditGrantResponseData.md)
- [BillingPriceResponseData](docs/Model/BillingPriceResponseData.md)
- [BillingPriceScheme](docs/Model/BillingPriceScheme.md)
- [BillingPriceUsageType](docs/Model/BillingPriceUsageType.md)
- [BillingPriceView](docs/Model/BillingPriceView.md)
- [BillingProductDetailResponseData](docs/Model/BillingProductDetailResponseData.md)
- [BillingProductForSubscriptionResponseData](docs/Model/BillingProductForSubscriptionResponseData.md)
- [BillingProductPlanResponseData](docs/Model/BillingProductPlanResponseData.md)
- [BillingProductPriceInterval](docs/Model/BillingProductPriceInterval.md)
- [BillingProductPriceResponseData](docs/Model/BillingProductPriceResponseData.md)
- [BillingProductPriceTierResponseData](docs/Model/BillingProductPriceTierResponseData.md)
- [BillingProductPricing](docs/Model/BillingProductPricing.md)
- [BillingProductRecordResponseData](docs/Model/BillingProductRecordResponseData.md)
- [BillingProductResponseData](docs/Model/BillingProductResponseData.md)
- [BillingProviderType](docs/Model/BillingProviderType.md)
- [BillingStrategy](docs/Model/BillingStrategy.md)
- [BillingSubscriptionDiscount](docs/Model/BillingSubscriptionDiscount.md)
- [BillingSubscriptionDiscountView](docs/Model/BillingSubscriptionDiscountView.md)
- [BillingSubscriptionResponseData](docs/Model/BillingSubscriptionResponseData.md)
- [BillingSubscriptionTrialEndSetting](docs/Model/BillingSubscriptionTrialEndSetting.md)
- [BillingSubscriptionView](docs/Model/BillingSubscriptionView.md)
- [BillingTiersMode](docs/Model/BillingTiersMode.md)
- [BindCatalogRequestBody](docs/Model/BindCatalogRequestBody.md)
- [BindCatalogResponse](docs/Model/BindCatalogResponse.md)
- [CancelSubscriptionRequest](docs/Model/CancelSubscriptionRequest.md)
- [CancelSubscriptionResponse](docs/Model/CancelSubscriptionResponse.md)
- [CaptureRawEvent](docs/Model/CaptureRawEvent.md)
- [CaptureRawEventBatch](docs/Model/CaptureRawEventBatch.md)
- [CatalogConfigOrderedBundle](docs/Model/CatalogConfigOrderedBundle.md)
- [CatalogConfigOrderedBundleResponseData](docs/Model/CatalogConfigOrderedBundleResponseData.md)
- [CatalogConfigOrderedEntitlement](docs/Model/CatalogConfigOrderedEntitlement.md)
- [CatalogConfigOrderedEntitlementResponseData](docs/Model/CatalogConfigOrderedEntitlementResponseData.md)
- [CatalogConfigOrderedPlan](docs/Model/CatalogConfigOrderedPlan.md)
- [CatalogConfigOrderedPlanResponseData](docs/Model/CatalogConfigOrderedPlanResponseData.md)
- [CatalogConfigurationResponseData](docs/Model/CatalogConfigurationResponseData.md)
- [CatalogCreditBundleIDsResponseData](docs/Model/CatalogCreditBundleIDsResponseData.md)
- [CatalogDerivedFeatureResponseData](docs/Model/CatalogDerivedFeatureResponseData.md)
- [CatalogDerivedFeaturesResponseData](docs/Model/CatalogDerivedFeaturesResponseData.md)
- [CatalogPlanIDsResponseData](docs/Model/CatalogPlanIDsResponseData.md)
- [CatalogResponseData](docs/Model/CatalogResponseData.md)
- [ChangeSubscriptionInternalRequestBody](docs/Model/ChangeSubscriptionInternalRequestBody.md)
- [ChangeSubscriptionRequestBody](docs/Model/ChangeSubscriptionRequestBody.md)
- [ChargeType](docs/Model/ChargeType.md)
- [CheckFlagRequestBody](docs/Model/CheckFlagRequestBody.md)
- [CheckFlagResponse](docs/Model/CheckFlagResponse.md)
- [CheckFlagResponseData](docs/Model/CheckFlagResponseData.md)
- [CheckFlagsBulkRequestBody](docs/Model/CheckFlagsBulkRequestBody.md)
- [CheckFlagsBulkResponse](docs/Model/CheckFlagsBulkResponse.md)
- [CheckFlagsBulkResponseData](docs/Model/CheckFlagsBulkResponseData.md)
- [CheckFlagsResponse](docs/Model/CheckFlagsResponse.md)
- [CheckFlagsResponseData](docs/Model/CheckFlagsResponseData.md)
- [CheckoutBundlePurchaseBehavior](docs/Model/CheckoutBundlePurchaseBehavior.md)
- [CheckoutDataRequestBody](docs/Model/CheckoutDataRequestBody.md)
- [CheckoutDataResponseData](docs/Model/CheckoutDataResponseData.md)
- [CheckoutFieldInput](docs/Model/CheckoutFieldInput.md)
- [CheckoutFieldResponseData](docs/Model/CheckoutFieldResponseData.md)
- [CheckoutFieldValue](docs/Model/CheckoutFieldValue.md)
- [CheckoutFieldWithValue](docs/Model/CheckoutFieldWithValue.md)
- [CheckoutInternalResponse](docs/Model/CheckoutInternalResponse.md)
- [CheckoutSettingsResponseData](docs/Model/CheckoutSettingsResponseData.md)
- [CheckoutSubscription](docs/Model/CheckoutSubscription.md)
- [ClerkIntegrationConfig](docs/Model/ClerkIntegrationConfig.md)
- [CompanyBillingAddressView](docs/Model/CompanyBillingAddressView.md)
- [CompanyBillingCheckoutSettings](docs/Model/CompanyBillingCheckoutSettings.md)
- [CompanyBillingDetailsResponseData](docs/Model/CompanyBillingDetailsResponseData.md)
- [CompanyBillingDetailsView](docs/Model/CompanyBillingDetailsView.md)
- [CompanyBillingEntityResponseData](docs/Model/CompanyBillingEntityResponseData.md)
- [CompanyBillingEntitySubscriptionResponseData](docs/Model/CompanyBillingEntitySubscriptionResponseData.md)
- [CompanyCreditBalance](docs/Model/CompanyCreditBalance.md)
- [CompanyCreditBalanceResponseData](docs/Model/CompanyCreditBalanceResponseData.md)
- [CompanyDetailResponseData](docs/Model/CompanyDetailResponseData.md)
- [CompanyEventPeriodMetricsResponseData](docs/Model/CompanyEventPeriodMetricsResponseData.md)
- [CompanyFeatureUsageExportMetadata](docs/Model/CompanyFeatureUsageExportMetadata.md)
- [CompanyLedgerResponseData](docs/Model/CompanyLedgerResponseData.md)
- [CompanyMatchingCriteria](docs/Model/CompanyMatchingCriteria.md)
- [CompanyMembershipDetailResponseData](docs/Model/CompanyMembershipDetailResponseData.md)
- [CompanyMembershipResponseData](docs/Model/CompanyMembershipResponseData.md)
- [CompanyOverrideNoteResponseData](docs/Model/CompanyOverrideNoteResponseData.md)
- [CompanyOverrideResponseData](docs/Model/CompanyOverrideResponseData.md)
- [CompanyPlanCreditGrantView](docs/Model/CompanyPlanCreditGrantView.md)
- [CompanyPlanDetailResponseData](docs/Model/CompanyPlanDetailResponseData.md)
- [CompanyPlanInvalidReason](docs/Model/CompanyPlanInvalidReason.md)
- [CompanyPlanWithBillingSubView](docs/Model/CompanyPlanWithBillingSubView.md)
- [CompanyResponseData](docs/Model/CompanyResponseData.md)
- [CompanySubscriptionResponseData](docs/Model/CompanySubscriptionResponseData.md)
- [CompanyTaxIDView](docs/Model/CompanyTaxIDView.md)
- [ComparableOperator](docs/Model/ComparableOperator.md)
- [CompatiblePlans](docs/Model/CompatiblePlans.md)
- [CompatiblePlansResponseData](docs/Model/CompatiblePlansResponseData.md)
- [ComponentCapabilities](docs/Model/ComponentCapabilities.md)
- [ComponentCheckoutSettings](docs/Model/ComponentCheckoutSettings.md)
- [ComponentDisplaySettings](docs/Model/ComponentDisplaySettings.md)
- [ComponentEntityType](docs/Model/ComponentEntityType.md)
- [ComponentHydrateResponseData](docs/Model/ComponentHydrateResponseData.md)
- [ComponentPreviewResponseData](docs/Model/ComponentPreviewResponseData.md)
- [ComponentResponseData](docs/Model/ComponentResponseData.md)
- [ComponentSettingsResponseData](docs/Model/ComponentSettingsResponseData.md)
- [ComponentState](docs/Model/ComponentState.md)
- [Condition](docs/Model/Condition.md)
- [ConditionGroup](docs/Model/ConditionGroup.md)
- [ConditionGroupResponseData](docs/Model/ConditionGroupResponseData.md)
- [ConditionGroupView](docs/Model/ConditionGroupView.md)
- [ConditionResponseData](docs/Model/ConditionResponseData.md)
- [ConditionType](docs/Model/ConditionType.md)
- [ConditionView](docs/Model/ConditionView.md)
- [CountAccountMembersParams](docs/Model/CountAccountMembersParams.md)
- [CountAccountMembersResponse](docs/Model/CountAccountMembersResponse.md)
- [CountApiKeysParams](docs/Model/CountApiKeysParams.md)
- [CountApiKeysResponse](docs/Model/CountApiKeysResponse.md)
- [CountAuditLogsParams](docs/Model/CountAuditLogsParams.md)
- [CountAuditLogsResponse](docs/Model/CountAuditLogsResponse.md)
- [CountBillingCreditsGrantsParams](docs/Model/CountBillingCreditsGrantsParams.md)
- [CountBillingCreditsGrantsResponse](docs/Model/CountBillingCreditsGrantsResponse.md)
- [CountBillingCreditsParams](docs/Model/CountBillingCreditsParams.md)
- [CountBillingCreditsResponse](docs/Model/CountBillingCreditsResponse.md)
- [CountBillingPlanCreditGrantsParams](docs/Model/CountBillingPlanCreditGrantsParams.md)
- [CountBillingPlanCreditGrantsResponse](docs/Model/CountBillingPlanCreditGrantsResponse.md)
- [CountBillingProductMatchCompaniesParams](docs/Model/CountBillingProductMatchCompaniesParams.md)
- [CountBillingProductMatchCompaniesResponse](docs/Model/CountBillingProductMatchCompaniesResponse.md)
- [CountBillingProductsParams](docs/Model/CountBillingProductsParams.md)
- [CountBillingProductsResponse](docs/Model/CountBillingProductsResponse.md)
- [CountCompaniesParams](docs/Model/CountCompaniesParams.md)
- [CountCompaniesResponse](docs/Model/CountCompaniesResponse.md)
- [CountCompanyGrantsParams](docs/Model/CountCompanyGrantsParams.md)
- [CountCompanyGrantsResponse](docs/Model/CountCompanyGrantsResponse.md)
- [CountCompanyMigrationsParams](docs/Model/CountCompanyMigrationsParams.md)
- [CountCompanyMigrationsResponse](docs/Model/CountCompanyMigrationsResponse.md)
- [CountCompanyOverridesParams](docs/Model/CountCompanyOverridesParams.md)
- [CountCompanyOverridesResponse](docs/Model/CountCompanyOverridesResponse.md)
- [CountComponentsParams](docs/Model/CountComponentsParams.md)
- [CountComponentsResponse](docs/Model/CountComponentsResponse.md)
- [CountCreditBundlesParams](docs/Model/CountCreditBundlesParams.md)
- [CountCreditBundlesResponse](docs/Model/CountCreditBundlesResponse.md)
- [CountCreditEventLedgerParams](docs/Model/CountCreditEventLedgerParams.md)
- [CountCreditEventLedgerResponse](docs/Model/CountCreditEventLedgerResponse.md)
- [CountCustomersParams](docs/Model/CountCustomersParams.md)
- [CountCustomersResponse](docs/Model/CountCustomersResponse.md)
- [CountEntityKeyDefinitionsParams](docs/Model/CountEntityKeyDefinitionsParams.md)
- [CountEntityKeyDefinitionsResponse](docs/Model/CountEntityKeyDefinitionsResponse.md)
- [CountEntityKeysParams](docs/Model/CountEntityKeysParams.md)
- [CountEntityKeysResponse](docs/Model/CountEntityKeysResponse.md)
- [CountEntityTraitDefinitionsParams](docs/Model/CountEntityTraitDefinitionsParams.md)
- [CountEntityTraitDefinitionsResponse](docs/Model/CountEntityTraitDefinitionsResponse.md)
- [CountEntityTraitsParams](docs/Model/CountEntityTraitsParams.md)
- [CountEntityTraitsResponse](docs/Model/CountEntityTraitsResponse.md)
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
- [CountLicensesParams](docs/Model/CountLicensesParams.md)
- [CountLicensesResponse](docs/Model/CountLicensesResponse.md)
- [CountMigrationsParams](docs/Model/CountMigrationsParams.md)
- [CountMigrationsResponse](docs/Model/CountMigrationsResponse.md)
- [CountPlanEntitlementsParams](docs/Model/CountPlanEntitlementsParams.md)
- [CountPlanEntitlementsResponse](docs/Model/CountPlanEntitlementsResponse.md)
- [CountPlanTraitsParams](docs/Model/CountPlanTraitsParams.md)
- [CountPlanTraitsResponse](docs/Model/CountPlanTraitsResponse.md)
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
- [CreateBillingCreditRequestBody](docs/Model/CreateBillingCreditRequestBody.md)
- [CreateBillingCreditResponse](docs/Model/CreateBillingCreditResponse.md)
- [CreateBillingCustomerRequestBody](docs/Model/CreateBillingCustomerRequestBody.md)
- [CreateBillingLinkedFeatureRequestBody](docs/Model/CreateBillingLinkedFeatureRequestBody.md)
- [CreateBillingLinkedPlanEntitlementRequestBody](docs/Model/CreateBillingLinkedPlanEntitlementRequestBody.md)
- [CreateBillingLinkedPlanRequestBody](docs/Model/CreateBillingLinkedPlanRequestBody.md)
- [CreateBillingPlanCreditGrantRequestBody](docs/Model/CreateBillingPlanCreditGrantRequestBody.md)
- [CreateBillingPlanCreditGrantResponse](docs/Model/CreateBillingPlanCreditGrantResponse.md)
- [CreateBillingPriceRequestBody](docs/Model/CreateBillingPriceRequestBody.md)
- [CreateBillingPriceTierRequestBody](docs/Model/CreateBillingPriceTierRequestBody.md)
- [CreateBillingProductRequestBody](docs/Model/CreateBillingProductRequestBody.md)
- [CreateBillingSubscriptionRequestBody](docs/Model/CreateBillingSubscriptionRequestBody.md)
- [CreateCatalogRequestBody](docs/Model/CreateCatalogRequestBody.md)
- [CreateCatalogResponse](docs/Model/CreateCatalogResponse.md)
- [CreateCompanyCreditGrant](docs/Model/CreateCompanyCreditGrant.md)
- [CreateCompanyOverrideRequestBody](docs/Model/CreateCompanyOverrideRequestBody.md)
- [CreateCompanyOverrideResponse](docs/Model/CreateCompanyOverrideResponse.md)
- [CreateCompanyResponse](docs/Model/CreateCompanyResponse.md)
- [CreateComponentRequestBody](docs/Model/CreateComponentRequestBody.md)
- [CreateComponentResponse](docs/Model/CreateComponentResponse.md)
- [CreateCouponRequestBody](docs/Model/CreateCouponRequestBody.md)
- [CreateCreditBundleRequestBody](docs/Model/CreateCreditBundleRequestBody.md)
- [CreateCreditBundleResponse](docs/Model/CreateCreditBundleResponse.md)
- [CreateCustomPlanBundlePlanRequestBody](docs/Model/CreateCustomPlanBundlePlanRequestBody.md)
- [CreateCustomPlanBundleRequestBody](docs/Model/CreateCustomPlanBundleRequestBody.md)
- [CreateCustomPlanBundleResponse](docs/Model/CreateCustomPlanBundleResponse.md)
- [CreateCustomPlanRequestBody](docs/Model/CreateCustomPlanRequestBody.md)
- [CreateCustomPlanResponse](docs/Model/CreateCustomPlanResponse.md)
- [CreateDataExportRequestBody](docs/Model/CreateDataExportRequestBody.md)
- [CreateDataExportResponse](docs/Model/CreateDataExportResponse.md)
- [CreateEntitlementInBundleRequestBody](docs/Model/CreateEntitlementInBundleRequestBody.md)
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
- [CreateMigrationInput](docs/Model/CreateMigrationInput.md)
- [CreateMigrationResponse](docs/Model/CreateMigrationResponse.md)
- [CreateOrUpdateConditionGroupRequestBody](docs/Model/CreateOrUpdateConditionGroupRequestBody.md)
- [CreateOrUpdateConditionRequestBody](docs/Model/CreateOrUpdateConditionRequestBody.md)
- [CreateOrUpdateFlagRequestBody](docs/Model/CreateOrUpdateFlagRequestBody.md)
- [CreateOrUpdateRuleRequestBody](docs/Model/CreateOrUpdateRuleRequestBody.md)
- [CreatePaymentMethodRequestBody](docs/Model/CreatePaymentMethodRequestBody.md)
- [CreatePlanBundleRequestBody](docs/Model/CreatePlanBundleRequestBody.md)
- [CreatePlanBundleResponse](docs/Model/CreatePlanBundleResponse.md)
- [CreatePlanEntitlementRequestBody](docs/Model/CreatePlanEntitlementRequestBody.md)
- [CreatePlanEntitlementResponse](docs/Model/CreatePlanEntitlementResponse.md)
- [CreatePlanGroupRequestBody](docs/Model/CreatePlanGroupRequestBody.md)
- [CreatePlanGroupResponse](docs/Model/CreatePlanGroupResponse.md)
- [CreatePlanRequestBody](docs/Model/CreatePlanRequestBody.md)
- [CreatePlanResponse](docs/Model/CreatePlanResponse.md)
- [CreatePriceTierRequestBody](docs/Model/CreatePriceTierRequestBody.md)
- [CreateScheduledCheckoutRequest](docs/Model/CreateScheduledCheckoutRequest.md)
- [CreateScheduledCheckoutResponse](docs/Model/CreateScheduledCheckoutResponse.md)
- [CreateUserResponse](docs/Model/CreateUserResponse.md)
- [CreateWebhookRequestBody](docs/Model/CreateWebhookRequestBody.md)
- [CreateWebhookResponse](docs/Model/CreateWebhookResponse.md)
- [CreditAutoTopupAmountType](docs/Model/CreditAutoTopupAmountType.md)
- [CreditBundleCurrencyPrice](docs/Model/CreditBundleCurrencyPrice.md)
- [CreditBundleCurrencyPriceRequestBody](docs/Model/CreditBundleCurrencyPriceRequestBody.md)
- [CreditBundleCurrencyPriceResponseData](docs/Model/CreditBundleCurrencyPriceResponseData.md)
- [CreditBundlePurchaseResponseData](docs/Model/CreditBundlePurchaseResponseData.md)
- [CreditCompanyGrantView](docs/Model/CreditCompanyGrantView.md)
- [CreditCurrencyPrice](docs/Model/CreditCurrencyPrice.md)
- [CreditCurrencyPriceRequestBody](docs/Model/CreditCurrencyPriceRequestBody.md)
- [CreditCurrencyPriceResponseData](docs/Model/CreditCurrencyPriceResponseData.md)
- [CreditEventLedgerResponseData](docs/Model/CreditEventLedgerResponseData.md)
- [CreditEventType](docs/Model/CreditEventType.md)
- [CreditGrantDetail](docs/Model/CreditGrantDetail.md)
- [CreditGrantExpiryRequestBody](docs/Model/CreditGrantExpiryRequestBody.md)
- [CreditGrantSortOrder](docs/Model/CreditGrantSortOrder.md)
- [CreditLeaseResponseData](docs/Model/CreditLeaseResponseData.md)
- [CreditTransferResponseData](docs/Model/CreditTransferResponseData.md)
- [CreditTransferView](docs/Model/CreditTransferView.md)
- [CreditTriggerConfig](docs/Model/CreditTriggerConfig.md)
- [CreditUsage](docs/Model/CreditUsage.md)
- [CreditUsageAggregation](docs/Model/CreditUsageAggregation.md)
- [CreditUsageReason](docs/Model/CreditUsageReason.md)
- [CreditsAutoTopupCompanySummary](docs/Model/CreditsAutoTopupCompanySummary.md)
- [CreditsAutoTopupCreditSummary](docs/Model/CreditsAutoTopupCreditSummary.md)
- [CreditsAutoTopupHardFailure](docs/Model/CreditsAutoTopupHardFailure.md)
- [CreditsAutoTopupRetryFailure](docs/Model/CreditsAutoTopupRetryFailure.md)
- [CreditsAutoTopupSuccess](docs/Model/CreditsAutoTopupSuccess.md)
- [CreditsCreditPurchaseSuccess](docs/Model/CreditsCreditPurchaseSuccess.md)
- [CreditsWebhookCompanySummary](docs/Model/CreditsWebhookCompanySummary.md)
- [CreditsWebhookCreditSummary](docs/Model/CreditsWebhookCreditSummary.md)
- [CurrencyPriceRequestBody](docs/Model/CurrencyPriceRequestBody.md)
- [CustomPlanActivationStrategy](docs/Model/CustomPlanActivationStrategy.md)
- [CustomPlanBillingResponseData](docs/Model/CustomPlanBillingResponseData.md)
- [CustomPlanBillingStatus](docs/Model/CustomPlanBillingStatus.md)
- [CustomPlanConfig](docs/Model/CustomPlanConfig.md)
- [CustomPlanViewConfigResponseData](docs/Model/CustomPlanViewConfigResponseData.md)
- [CustomerBillingAddress](docs/Model/CustomerBillingAddress.md)
- [DataEventPayload](docs/Model/DataEventPayload.md)
- [DataExportMetadata](docs/Model/DataExportMetadata.md)
- [DataExportOutputFileType](docs/Model/DataExportOutputFileType.md)
- [DataExportResponseData](docs/Model/DataExportResponseData.md)
- [DataExportStatus](docs/Model/DataExportStatus.md)
- [DataExportType](docs/Model/DataExportType.md)
- [DatastreamCompanyPlan](docs/Model/DatastreamCompanyPlan.md)
- [DeleteApiKeyResponse](docs/Model/DeleteApiKeyResponse.md)
- [DeleteBillingCouponResponse](docs/Model/DeleteBillingCouponResponse.md)
- [DeleteBillingCustomerResponse](docs/Model/DeleteBillingCustomerResponse.md)
- [DeleteBillingInvoiceResponse](docs/Model/DeleteBillingInvoiceResponse.md)
- [DeleteBillingPlanCreditGrantParams](docs/Model/DeleteBillingPlanCreditGrantParams.md)
- [DeleteBillingPlanCreditGrantRequestBody](docs/Model/DeleteBillingPlanCreditGrantRequestBody.md)
- [DeleteBillingPlanCreditGrantResponse](docs/Model/DeleteBillingPlanCreditGrantResponse.md)
- [DeleteBillingProductResponse](docs/Model/DeleteBillingProductResponse.md)
- [DeleteCatalogResponse](docs/Model/DeleteCatalogResponse.md)
- [DeleteCompanyByKeysResponse](docs/Model/DeleteCompanyByKeysResponse.md)
- [DeleteCompanyMembershipResponse](docs/Model/DeleteCompanyMembershipResponse.md)
- [DeleteCompanyOverrideResponse](docs/Model/DeleteCompanyOverrideResponse.md)
- [DeleteCompanyParams](docs/Model/DeleteCompanyParams.md)
- [DeleteCompanyResponse](docs/Model/DeleteCompanyResponse.md)
- [DeleteComponentResponse](docs/Model/DeleteComponentResponse.md)
- [DeleteCreditBundleResponse](docs/Model/DeleteCreditBundleResponse.md)
- [DeleteEntityKeyDefinitionResponse](docs/Model/DeleteEntityKeyDefinitionResponse.md)
- [DeleteEntityTraitDefinitionResponse](docs/Model/DeleteEntityTraitDefinitionResponse.md)
- [DeleteEnvironmentResponse](docs/Model/DeleteEnvironmentResponse.md)
- [DeleteFeatureResponse](docs/Model/DeleteFeatureResponse.md)
- [DeleteFlagResponse](docs/Model/DeleteFlagResponse.md)
- [DeletePaymentMethodByExternalIDResponse](docs/Model/DeletePaymentMethodByExternalIDResponse.md)
- [DeletePlanEntitlementResponse](docs/Model/DeletePlanEntitlementResponse.md)
- [DeletePlanResponse](docs/Model/DeletePlanResponse.md)
- [DeletePlanVersionParams](docs/Model/DeletePlanVersionParams.md)
- [DeletePlanVersionResponse](docs/Model/DeletePlanVersionResponse.md)
- [DeleteProductPriceResponse](docs/Model/DeleteProductPriceResponse.md)
- [DeleteResponse](docs/Model/DeleteResponse.md)
- [DeleteUserByKeysResponse](docs/Model/DeleteUserByKeysResponse.md)
- [DeleteUserResponse](docs/Model/DeleteUserResponse.md)
- [DeleteWebhookResponse](docs/Model/DeleteWebhookResponse.md)
- [DuplicatePlanEntitlementsRequestBody](docs/Model/DuplicatePlanEntitlementsRequestBody.md)
- [DuplicatePlanEntitlementsResponse](docs/Model/DuplicatePlanEntitlementsResponse.md)
- [DuplicatePlanEntitlementsResponseResponseData](docs/Model/DuplicatePlanEntitlementsResponseResponseData.md)
- [EntitlementCurrencyPricesResponseData](docs/Model/EntitlementCurrencyPricesResponseData.md)
- [EntitlementPriceBehavior](docs/Model/EntitlementPriceBehavior.md)
- [EntitlementTriggerConfig](docs/Model/EntitlementTriggerConfig.md)
- [EntitlementType](docs/Model/EntitlementType.md)
- [EntitlementValueType](docs/Model/EntitlementValueType.md)
- [EntitlementsInPlan](docs/Model/EntitlementsInPlan.md)
- [EntityKeyDefinitionResponseData](docs/Model/EntityKeyDefinitionResponseData.md)
- [EntityKeyDetailResponseData](docs/Model/EntityKeyDetailResponseData.md)
- [EntityKeyResponseData](docs/Model/EntityKeyResponseData.md)
- [EntityTraitDefinitionResponseData](docs/Model/EntityTraitDefinitionResponseData.md)
- [EntityTraitDefinitionUsage](docs/Model/EntityTraitDefinitionUsage.md)
- [EntityTraitDetailResponseData](docs/Model/EntityTraitDetailResponseData.md)
- [EntityTraitResponseData](docs/Model/EntityTraitResponseData.md)
- [EntityTraitValue](docs/Model/EntityTraitValue.md)
- [EntityType](docs/Model/EntityType.md)
- [EnvironmentDetailResponseData](docs/Model/EnvironmentDetailResponseData.md)
- [EnvironmentFeatureUsageTimeSeriesResponseData](docs/Model/EnvironmentFeatureUsageTimeSeriesResponseData.md)
- [EnvironmentResponseData](docs/Model/EnvironmentResponseData.md)
- [EnvironmentTraitUsageTimeSeriesResponseData](docs/Model/EnvironmentTraitUsageTimeSeriesResponseData.md)
- [EnvironmentType](docs/Model/EnvironmentType.md)
- [EnvironmentUsagePointResponseData](docs/Model/EnvironmentUsagePointResponseData.md)
- [EventBody](docs/Model/EventBody.md)
- [EventBodyFlagCheck](docs/Model/EventBodyFlagCheck.md)
- [EventBodyIdentify](docs/Model/EventBodyIdentify.md)
- [EventBodyIdentifyCompany](docs/Model/EventBodyIdentifyCompany.md)
- [EventBodyInference](docs/Model/EventBodyInference.md)
- [EventBodyTrack](docs/Model/EventBodyTrack.md)
- [EventDetailResponseData](docs/Model/EventDetailResponseData.md)
- [EventExportMetadata](docs/Model/EventExportMetadata.md)
- [EventResponseData](docs/Model/EventResponseData.md)
- [EventStatus](docs/Model/EventStatus.md)
- [EventSummaryResponseData](docs/Model/EventSummaryResponseData.md)
- [EventType](docs/Model/EventType.md)
- [ExtendCreditLeaseRequestBody](docs/Model/ExtendCreditLeaseRequestBody.md)
- [ExtendCreditLeaseResponse](docs/Model/ExtendCreditLeaseResponse.md)
- [FeatureCompanyResponseData](docs/Model/FeatureCompanyResponseData.md)
- [FeatureCompanyUserResponseData](docs/Model/FeatureCompanyUserResponseData.md)
- [FeatureDetailResponseData](docs/Model/FeatureDetailResponseData.md)
- [FeatureEntitlement](docs/Model/FeatureEntitlement.md)
- [FeatureInPlanResponseData](docs/Model/FeatureInPlanResponseData.md)
- [FeatureLedgerResponseData](docs/Model/FeatureLedgerResponseData.md)
- [FeatureLifecyclePhase](docs/Model/FeatureLifecyclePhase.md)
- [FeatureResponseData](docs/Model/FeatureResponseData.md)
- [FeatureType](docs/Model/FeatureType.md)
- [FeatureUsageDetailResponseData](docs/Model/FeatureUsageDetailResponseData.md)
- [FeatureUsageLegacyResponseData](docs/Model/FeatureUsageLegacyResponseData.md)
- [FeatureUsageResponseData](docs/Model/FeatureUsageResponseData.md)
- [FeatureUsageTimeSeriesResponseData](docs/Model/FeatureUsageTimeSeriesResponseData.md)
- [FeatureView](docs/Model/FeatureView.md)
- [FlagDetailResponseData](docs/Model/FlagDetailResponseData.md)
- [FlagInPlanResponseData](docs/Model/FlagInPlanResponseData.md)
- [FlagResponseData](docs/Model/FlagResponseData.md)
- [FlagType](docs/Model/FlagType.md)
- [FlagView](docs/Model/FlagView.md)
- [GenericPreviewObject](docs/Model/GenericPreviewObject.md)
- [GetAccountMemberResponse](docs/Model/GetAccountMemberResponse.md)
- [GetActiveCompanySubscriptionParams](docs/Model/GetActiveCompanySubscriptionParams.md)
- [GetActiveCompanySubscriptionResponse](docs/Model/GetActiveCompanySubscriptionResponse.md)
- [GetActivityParams](docs/Model/GetActivityParams.md)
- [GetActivityResponse](docs/Model/GetActivityResponse.md)
- [GetApiKeyResponse](docs/Model/GetApiKeyResponse.md)
- [GetAuditLogResponse](docs/Model/GetAuditLogResponse.md)
- [GetBillingEntityChildSubscriptionsParams](docs/Model/GetBillingEntityChildSubscriptionsParams.md)
- [GetBillingEntityChildSubscriptionsResponse](docs/Model/GetBillingEntityChildSubscriptionsResponse.md)
- [GetCatalogResponse](docs/Model/GetCatalogResponse.md)
- [GetCheckoutDataResponse](docs/Model/GetCheckoutDataResponse.md)
- [GetCompanyBillingDetailsResponse](docs/Model/GetCompanyBillingDetailsResponse.md)
- [GetCompanyBillingEntityParams](docs/Model/GetCompanyBillingEntityParams.md)
- [GetCompanyBillingEntityResponse](docs/Model/GetCompanyBillingEntityResponse.md)
- [GetCompanyOverrideResponse](docs/Model/GetCompanyOverrideResponse.md)
- [GetCompanyResponse](docs/Model/GetCompanyResponse.md)
- [GetComponentResponse](docs/Model/GetComponentResponse.md)
- [GetConfigurationResponse](docs/Model/GetConfigurationResponse.md)
- [GetCreditBundleResponse](docs/Model/GetCreditBundleResponse.md)
- [GetCreditBundlesInCatalogResponse](docs/Model/GetCreditBundlesInCatalogResponse.md)
- [GetDataExportResponse](docs/Model/GetDataExportResponse.md)
- [GetDerivedFeaturesResponse](docs/Model/GetDerivedFeaturesResponse.md)
- [GetEntityTraitDefinitionResponse](docs/Model/GetEntityTraitDefinitionResponse.md)
- [GetEntityTraitDefinitionUsageResponse](docs/Model/GetEntityTraitDefinitionUsageResponse.md)
- [GetEntityTraitValuesParams](docs/Model/GetEntityTraitValuesParams.md)
- [GetEntityTraitValuesResponse](docs/Model/GetEntityTraitValuesResponse.md)
- [GetEnvironmentFeatureUsageTimeSeriesParams](docs/Model/GetEnvironmentFeatureUsageTimeSeriesParams.md)
- [GetEnvironmentFeatureUsageTimeSeriesResponse](docs/Model/GetEnvironmentFeatureUsageTimeSeriesResponse.md)
- [GetEnvironmentResponse](docs/Model/GetEnvironmentResponse.md)
- [GetEnvironmentTraitUsageTimeSeriesParams](docs/Model/GetEnvironmentTraitUsageTimeSeriesParams.md)
- [GetEnvironmentTraitUsageTimeSeriesResponse](docs/Model/GetEnvironmentTraitUsageTimeSeriesResponse.md)
- [GetEventResponse](docs/Model/GetEventResponse.md)
- [GetEventSummariesParams](docs/Model/GetEventSummariesParams.md)
- [GetEventSummariesResponse](docs/Model/GetEventSummariesResponse.md)
- [GetFeatureResponse](docs/Model/GetFeatureResponse.md)
- [GetFeatureUsageByCompanyParams](docs/Model/GetFeatureUsageByCompanyParams.md)
- [GetFeatureUsageByCompanyResponse](docs/Model/GetFeatureUsageByCompanyResponse.md)
- [GetFeatureUsageTimeSeriesParams](docs/Model/GetFeatureUsageTimeSeriesParams.md)
- [GetFeatureUsageTimeSeriesResponse](docs/Model/GetFeatureUsageTimeSeriesResponse.md)
- [GetFlagResponse](docs/Model/GetFlagResponse.md)
- [GetIntegrationWebhookUrlResponse](docs/Model/GetIntegrationWebhookUrlResponse.md)
- [GetMigrationResponse](docs/Model/GetMigrationResponse.md)
- [GetOrCreateCompanyMembershipRequestBody](docs/Model/GetOrCreateCompanyMembershipRequestBody.md)
- [GetOrCreateCompanyMembershipResponse](docs/Model/GetOrCreateCompanyMembershipResponse.md)
- [GetOrCreateEntityTraitDefinitionResponse](docs/Model/GetOrCreateEntityTraitDefinitionResponse.md)
- [GetPlanChangeResponse](docs/Model/GetPlanChangeResponse.md)
- [GetPlanEntitlementResponse](docs/Model/GetPlanEntitlementResponse.md)
- [GetPlanGroupParams](docs/Model/GetPlanGroupParams.md)
- [GetPlanGroupResponse](docs/Model/GetPlanGroupResponse.md)
- [GetPlanGrowthParams](docs/Model/GetPlanGrowthParams.md)
- [GetPlanGrowthResponse](docs/Model/GetPlanGrowthResponse.md)
- [GetPlanParams](docs/Model/GetPlanParams.md)
- [GetPlanResponse](docs/Model/GetPlanResponse.md)
- [GetPlanTraitResponse](docs/Model/GetPlanTraitResponse.md)
- [GetPlansInCatalogResponse](docs/Model/GetPlansInCatalogResponse.md)
- [GetPublicPlansResponse](docs/Model/GetPublicPlansResponse.md)
- [GetScheduledCheckoutResponse](docs/Model/GetScheduledCheckoutResponse.md)
- [GetSegmentIntegrationStatusResponse](docs/Model/GetSegmentIntegrationStatusResponse.md)
- [GetSingleBillingCreditResponse](docs/Model/GetSingleBillingCreditResponse.md)
- [GetSingleBillingPlanCreditGrantResponse](docs/Model/GetSingleBillingPlanCreditGrantResponse.md)
- [GetSingleLicenseResponse](docs/Model/GetSingleLicenseResponse.md)
- [GetSummaryResponse](docs/Model/GetSummaryResponse.md)
- [GetTopFeaturesByUsageParams](docs/Model/GetTopFeaturesByUsageParams.md)
- [GetTopFeaturesByUsageResponse](docs/Model/GetTopFeaturesByUsageResponse.md)
- [GetUserResponse](docs/Model/GetUserResponse.md)
- [GetUserUsageByCompanyParams](docs/Model/GetUserUsageByCompanyParams.md)
- [GetUserUsageByCompanyResponse](docs/Model/GetUserUsageByCompanyResponse.md)
- [GetUserUsageDetailParams](docs/Model/GetUserUsageDetailParams.md)
- [GetUserUsageDetailResponse](docs/Model/GetUserUsageDetailResponse.md)
- [GetWebhookEventResponse](docs/Model/GetWebhookEventResponse.md)
- [GetWebhookResponse](docs/Model/GetWebhookResponse.md)
- [GetWhoAmIResponse](docs/Model/GetWhoAmIResponse.md)
- [GrantBillingCreditsToCompanyResponse](docs/Model/GrantBillingCreditsToCompanyResponse.md)
- [InsightsSummaryResponseData](docs/Model/InsightsSummaryResponseData.md)
- [InstallIntegrationRequestBody](docs/Model/InstallIntegrationRequestBody.md)
- [InstallIntegrationResponse](docs/Model/InstallIntegrationResponse.md)
- [InstallStripeResponse](docs/Model/InstallStripeResponse.md)
- [IntegrationCapabilities](docs/Model/IntegrationCapabilities.md)
- [IntegrationConfig](docs/Model/IntegrationConfig.md)
- [IntegrationInstallConfig](docs/Model/IntegrationInstallConfig.md)
- [IntegrationInstallResponseData](docs/Model/IntegrationInstallResponseData.md)
- [IntegrationResponseData](docs/Model/IntegrationResponseData.md)
- [IntegrationState](docs/Model/IntegrationState.md)
- [IntegrationType](docs/Model/IntegrationType.md)
- [IntegrationWebhookUrlResponseData](docs/Model/IntegrationWebhookUrlResponseData.md)
- [IntegrationsDataSetResponseData](docs/Model/IntegrationsDataSetResponseData.md)
- [IntegrationsListResponseData](docs/Model/IntegrationsListResponseData.md)
- [IntegrationsResponseData](docs/Model/IntegrationsResponseData.md)
- [InvoiceRequestBody](docs/Model/InvoiceRequestBody.md)
- [InvoiceResponseData](docs/Model/InvoiceResponseData.md)
- [InvoiceStatus](docs/Model/InvoiceStatus.md)
- [IssueTemporaryAccessTokenRequestBody](docs/Model/IssueTemporaryAccessTokenRequestBody.md)
- [IssueTemporaryAccessTokenResponse](docs/Model/IssueTemporaryAccessTokenResponse.md)
- [IssueTemporaryAccessTokenResponseData](docs/Model/IssueTemporaryAccessTokenResponseData.md)
- [KeysRequestBody](docs/Model/KeysRequestBody.md)
- [LicenseResponseData](docs/Model/LicenseResponseData.md)
- [LimitTimeSeriesPointResponseData](docs/Model/LimitTimeSeriesPointResponseData.md)
- [ListAccountMembersParams](docs/Model/ListAccountMembersParams.md)
- [ListAccountMembersResponse](docs/Model/ListAccountMembersResponse.md)
- [ListApiKeysParams](docs/Model/ListApiKeysParams.md)
- [ListApiKeysResponse](docs/Model/ListApiKeysResponse.md)
- [ListAuditLogsParams](docs/Model/ListAuditLogsParams.md)
- [ListAuditLogsResponse](docs/Model/ListAuditLogsResponse.md)
- [ListBillingCreditsParams](docs/Model/ListBillingCreditsParams.md)
- [ListBillingCreditsResponse](docs/Model/ListBillingCreditsResponse.md)
- [ListBillingPlanCreditGrantsParams](docs/Model/ListBillingPlanCreditGrantsParams.md)
- [ListBillingPlanCreditGrantsResponse](docs/Model/ListBillingPlanCreditGrantsResponse.md)
- [ListBillingPricesParams](docs/Model/ListBillingPricesParams.md)
- [ListBillingPricesResponse](docs/Model/ListBillingPricesResponse.md)
- [ListBillingProductMatchCompaniesParams](docs/Model/ListBillingProductMatchCompaniesParams.md)
- [ListBillingProductMatchCompaniesResponse](docs/Model/ListBillingProductMatchCompaniesResponse.md)
- [ListBillingProductPricesParams](docs/Model/ListBillingProductPricesParams.md)
- [ListBillingProductPricesResponse](docs/Model/ListBillingProductPricesResponse.md)
- [ListBillingProductsParams](docs/Model/ListBillingProductsParams.md)
- [ListBillingProductsResponse](docs/Model/ListBillingProductsResponse.md)
- [ListCatalogsParams](docs/Model/ListCatalogsParams.md)
- [ListCatalogsResponse](docs/Model/ListCatalogsResponse.md)
- [ListCompaniesParams](docs/Model/ListCompaniesParams.md)
- [ListCompaniesResponse](docs/Model/ListCompaniesResponse.md)
- [ListCompanyCreditBalancesParams](docs/Model/ListCompanyCreditBalancesParams.md)
- [ListCompanyCreditBalancesResponse](docs/Model/ListCompanyCreditBalancesResponse.md)
- [ListCompanyGrantsParams](docs/Model/ListCompanyGrantsParams.md)
- [ListCompanyGrantsResponse](docs/Model/ListCompanyGrantsResponse.md)
- [ListCompanyMembershipsParams](docs/Model/ListCompanyMembershipsParams.md)
- [ListCompanyMembershipsResponse](docs/Model/ListCompanyMembershipsResponse.md)
- [ListCompanyMigrationsParams](docs/Model/ListCompanyMigrationsParams.md)
- [ListCompanyMigrationsResponse](docs/Model/ListCompanyMigrationsResponse.md)
- [ListCompanyOverridesParams](docs/Model/ListCompanyOverridesParams.md)
- [ListCompanyOverridesResponse](docs/Model/ListCompanyOverridesResponse.md)
- [ListComponentsParams](docs/Model/ListComponentsParams.md)
- [ListComponentsResponse](docs/Model/ListComponentsResponse.md)
- [ListCouponsParams](docs/Model/ListCouponsParams.md)
- [ListCouponsResponse](docs/Model/ListCouponsResponse.md)
- [ListCreditBundlesParams](docs/Model/ListCreditBundlesParams.md)
- [ListCreditBundlesResponse](docs/Model/ListCreditBundlesResponse.md)
- [ListCreditEventLedgerParams](docs/Model/ListCreditEventLedgerParams.md)
- [ListCreditEventLedgerResponse](docs/Model/ListCreditEventLedgerResponse.md)
- [ListCustomPlanBillingsParams](docs/Model/ListCustomPlanBillingsParams.md)
- [ListCustomPlanBillingsResponse](docs/Model/ListCustomPlanBillingsResponse.md)
- [ListCustomersWithSubscriptionsParams](docs/Model/ListCustomersWithSubscriptionsParams.md)
- [ListCustomersWithSubscriptionsResponse](docs/Model/ListCustomersWithSubscriptionsResponse.md)
- [ListDataExportsParams](docs/Model/ListDataExportsParams.md)
- [ListDataExportsResponse](docs/Model/ListDataExportsResponse.md)
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
- [ListGrantsForCreditParams](docs/Model/ListGrantsForCreditParams.md)
- [ListGrantsForCreditResponse](docs/Model/ListGrantsForCreditResponse.md)
- [ListIntegrationsParams](docs/Model/ListIntegrationsParams.md)
- [ListIntegrationsResponse](docs/Model/ListIntegrationsResponse.md)
- [ListInvoicesParams](docs/Model/ListInvoicesParams.md)
- [ListInvoicesResponse](docs/Model/ListInvoicesResponse.md)
- [ListLicensesParams](docs/Model/ListLicensesParams.md)
- [ListLicensesResponse](docs/Model/ListLicensesResponse.md)
- [ListMetersParams](docs/Model/ListMetersParams.md)
- [ListMetersResponse](docs/Model/ListMetersResponse.md)
- [ListMigrationsParams](docs/Model/ListMigrationsParams.md)
- [ListMigrationsResponse](docs/Model/ListMigrationsResponse.md)
- [ListPaymentMethodsParams](docs/Model/ListPaymentMethodsParams.md)
- [ListPaymentMethodsResponse](docs/Model/ListPaymentMethodsResponse.md)
- [ListPlanChangesParams](docs/Model/ListPlanChangesParams.md)
- [ListPlanChangesResponse](docs/Model/ListPlanChangesResponse.md)
- [ListPlanEntitlementsParams](docs/Model/ListPlanEntitlementsParams.md)
- [ListPlanEntitlementsResponse](docs/Model/ListPlanEntitlementsResponse.md)
- [ListPlanIssuesParams](docs/Model/ListPlanIssuesParams.md)
- [ListPlanIssuesResponse](docs/Model/ListPlanIssuesResponse.md)
- [ListPlanTraitsParams](docs/Model/ListPlanTraitsParams.md)
- [ListPlanTraitsResponse](docs/Model/ListPlanTraitsResponse.md)
- [ListPlansParams](docs/Model/ListPlansParams.md)
- [ListPlansResponse](docs/Model/ListPlansResponse.md)
- [ListScheduledCheckoutsParams](docs/Model/ListScheduledCheckoutsParams.md)
- [ListScheduledCheckoutsResponse](docs/Model/ListScheduledCheckoutsResponse.md)
- [ListUsersParams](docs/Model/ListUsersParams.md)
- [ListUsersResponse](docs/Model/ListUsersResponse.md)
- [ListWebhookEventsParams](docs/Model/ListWebhookEventsParams.md)
- [ListWebhookEventsResponse](docs/Model/ListWebhookEventsResponse.md)
- [ListWebhooksParams](docs/Model/ListWebhooksParams.md)
- [ListWebhooksResponse](docs/Model/ListWebhooksResponse.md)
- [LoadSampleDataSetResponse](docs/Model/LoadSampleDataSetResponse.md)
- [LookupCompanyParams](docs/Model/LookupCompanyParams.md)
- [LookupCompanyResponse](docs/Model/LookupCompanyResponse.md)
- [LookupUserParams](docs/Model/LookupUserParams.md)
- [LookupUserResponse](docs/Model/LookupUserResponse.md)
- [ManagePlanPreviewResponseResponseData](docs/Model/ManagePlanPreviewResponseResponseData.md)
- [ManagePlanRequest](docs/Model/ManagePlanRequest.md)
- [ManagePlanResponse](docs/Model/ManagePlanResponse.md)
- [ManagePlanResponseResponseData](docs/Model/ManagePlanResponseResponseData.md)
- [MarkCustomPlanBillingPaidResponse](docs/Model/MarkCustomPlanBillingPaidResponse.md)
- [MeterRequestBody](docs/Model/MeterRequestBody.md)
- [MetricPeriod](docs/Model/MetricPeriod.md)
- [MetricPeriodMonthReset](docs/Model/MetricPeriodMonthReset.md)
- [MetronomeIntegrationConfig](docs/Model/MetronomeIntegrationConfig.md)
- [MigrationErrorCode](docs/Model/MigrationErrorCode.md)
- [MigrationProrationBehavior](docs/Model/MigrationProrationBehavior.md)
- [MrrResponseData](docs/Model/MrrResponseData.md)
- [OrbIntegrationConfig](docs/Model/OrbIntegrationConfig.md)
- [OrderedPlansInGroup](docs/Model/OrderedPlansInGroup.md)
- [PaymentMethodRequestBody](docs/Model/PaymentMethodRequestBody.md)
- [PaymentMethodResponseData](docs/Model/PaymentMethodResponseData.md)
- [PlanBillingSource](docs/Model/PlanBillingSource.md)
- [PlanBundleAction](docs/Model/PlanBundleAction.md)
- [PlanBundleCreditGrantRequestBody](docs/Model/PlanBundleCreditGrantRequestBody.md)
- [PlanBundleEntitlementRequestBody](docs/Model/PlanBundleEntitlementRequestBody.md)
- [PlanBundleResponseData](docs/Model/PlanBundleResponseData.md)
- [PlanCatalogMembershipResponseData](docs/Model/PlanCatalogMembershipResponseData.md)
- [PlanChangeAction](docs/Model/PlanChangeAction.md)
- [PlanChangeBasePlanAction](docs/Model/PlanChangeBasePlanAction.md)
- [PlanChangeResponseData](docs/Model/PlanChangeResponseData.md)
- [PlanChangeSubscriptionAction](docs/Model/PlanChangeSubscriptionAction.md)
- [PlanCreditGrantScaling](docs/Model/PlanCreditGrantScaling.md)
- [PlanCreditGrantView](docs/Model/PlanCreditGrantView.md)
- [PlanCurrencyPriceRequestBody](docs/Model/PlanCurrencyPriceRequestBody.md)
- [PlanCurrencyPricesResponseData](docs/Model/PlanCurrencyPricesResponseData.md)
- [PlanDetailResponseData](docs/Model/PlanDetailResponseData.md)
- [PlanEntitlementResponseData](docs/Model/PlanEntitlementResponseData.md)
- [PlanEntitlementsOrder](docs/Model/PlanEntitlementsOrder.md)
- [PlanGroupBundleOrder](docs/Model/PlanGroupBundleOrder.md)
- [PlanGroupDetailResponseData](docs/Model/PlanGroupDetailResponseData.md)
- [PlanGroupPlanDetailResponseData](docs/Model/PlanGroupPlanDetailResponseData.md)
- [PlanGroupPlanEntitlementsOrder](docs/Model/PlanGroupPlanEntitlementsOrder.md)
- [PlanGroupResponseData](docs/Model/PlanGroupResponseData.md)
- [PlanGrowthPointResponseData](docs/Model/PlanGrowthPointResponseData.md)
- [PlanGrowthResponseData](docs/Model/PlanGrowthResponseData.md)
- [PlanIcon](docs/Model/PlanIcon.md)
- [PlanIssueResponseData](docs/Model/PlanIssueResponseData.md)
- [PlanPriceCadence](docs/Model/PlanPriceCadence.md)
- [PlanResponseData](docs/Model/PlanResponseData.md)
- [PlanSelection](docs/Model/PlanSelection.md)
- [PlanSnapshotView](docs/Model/PlanSnapshotView.md)
- [PlanTraitResponseData](docs/Model/PlanTraitResponseData.md)
- [PlanType](docs/Model/PlanType.md)
- [PlanVersionCompanyMigrationResponseData](docs/Model/PlanVersionCompanyMigrationResponseData.md)
- [PlanVersionCompanyMigrationStatus](docs/Model/PlanVersionCompanyMigrationStatus.md)
- [PlanVersionMigrationPreviewCompanyResponseData](docs/Model/PlanVersionMigrationPreviewCompanyResponseData.md)
- [PlanVersionMigrationPreviewResponseData](docs/Model/PlanVersionMigrationPreviewResponseData.md)
- [PlanVersionMigrationResponseData](docs/Model/PlanVersionMigrationResponseData.md)
- [PlanVersionMigrationStatus](docs/Model/PlanVersionMigrationStatus.md)
- [PlanVersionMigrationStrategy](docs/Model/PlanVersionMigrationStrategy.md)
- [PlanVersionResponseData](docs/Model/PlanVersionResponseData.md)
- [PlanVersionSnapshotView](docs/Model/PlanVersionSnapshotView.md)
- [PlanVersionStatus](docs/Model/PlanVersionStatus.md)
- [PlanViewPublicResponseData](docs/Model/PlanViewPublicResponseData.md)
- [PreviewCheckoutInternalResponse](docs/Model/PreviewCheckoutInternalResponse.md)
- [PreviewComponentDataParams](docs/Model/PreviewComponentDataParams.md)
- [PreviewComponentDataResponse](docs/Model/PreviewComponentDataResponse.md)
- [PreviewManagePlanResponse](docs/Model/PreviewManagePlanResponse.md)
- [PreviewMigrationRequestBody](docs/Model/PreviewMigrationRequestBody.md)
- [PreviewMigrationResponse](docs/Model/PreviewMigrationResponse.md)
- [PreviewObject](docs/Model/PreviewObject.md)
- [PreviewObjectResponseData](docs/Model/PreviewObjectResponseData.md)
- [PreviewSubscriptionChangeResponseData](docs/Model/PreviewSubscriptionChangeResponseData.md)
- [PreviewSubscriptionDiscountResponseData](docs/Model/PreviewSubscriptionDiscountResponseData.md)
- [PreviewSubscriptionFinanceResponseData](docs/Model/PreviewSubscriptionFinanceResponseData.md)
- [PreviewSubscriptionUpcomingInvoiceLineItems](docs/Model/PreviewSubscriptionUpcomingInvoiceLineItems.md)
- [ProrationBehavior](docs/Model/ProrationBehavior.md)
- [PublicPlansResponseData](docs/Model/PublicPlansResponseData.md)
- [PublishPlanVersionRequestBody](docs/Model/PublishPlanVersionRequestBody.md)
- [PublishPlanVersionResponse](docs/Model/PublishPlanVersionResponse.md)
- [QuickstartResp](docs/Model/QuickstartResp.md)
- [QuickstartResponse](docs/Model/QuickstartResponse.md)
- [RawEventBatchResponseData](docs/Model/RawEventBatchResponseData.md)
- [RawEventResponseData](docs/Model/RawEventResponseData.md)
- [ReleaseCreditLeaseResponse](docs/Model/ReleaseCreditLeaseResponse.md)
- [RetryCompanyMigrationResponse](docs/Model/RetryCompanyMigrationResponse.md)
- [RetryCustomPlanBillingRequestBody](docs/Model/RetryCustomPlanBillingRequestBody.md)
- [RetryCustomPlanBillingResponse](docs/Model/RetryCustomPlanBillingResponse.md)
- [RetryMigrationRequestBody](docs/Model/RetryMigrationRequestBody.md)
- [RetryMigrationResponse](docs/Model/RetryMigrationResponse.md)
- [Rule](docs/Model/Rule.md)
- [RuleConditionDetailResponseData](docs/Model/RuleConditionDetailResponseData.md)
- [RuleConditionGroupDetailResponseData](docs/Model/RuleConditionGroupDetailResponseData.md)
- [RuleConditionGroupResponseData](docs/Model/RuleConditionGroupResponseData.md)
- [RuleConditionResponseData](docs/Model/RuleConditionResponseData.md)
- [RuleDetailResponseData](docs/Model/RuleDetailResponseData.md)
- [RuleResponseData](docs/Model/RuleResponseData.md)
- [RuleType](docs/Model/RuleType.md)
- [RuleView](docs/Model/RuleView.md)
- [RulesDetailResponseData](docs/Model/RulesDetailResponseData.md)
- [RulesEngineSchemaVersion](docs/Model/RulesEngineSchemaVersion.md)
- [RulesengineCheckFlagResult](docs/Model/RulesengineCheckFlagResult.md)
- [RulesengineCompany](docs/Model/RulesengineCompany.md)
- [RulesengineCompanyMetric](docs/Model/RulesengineCompanyMetric.md)
- [RulesengineCondition](docs/Model/RulesengineCondition.md)
- [RulesengineConditionGroup](docs/Model/RulesengineConditionGroup.md)
- [RulesengineConditionType](docs/Model/RulesengineConditionType.md)
- [RulesengineEntitlementValueType](docs/Model/RulesengineEntitlementValueType.md)
- [RulesengineEntityType](docs/Model/RulesengineEntityType.md)
- [RulesengineFeatureEntitlement](docs/Model/RulesengineFeatureEntitlement.md)
- [RulesengineFlag](docs/Model/RulesengineFlag.md)
- [RulesengineMetricPeriod](docs/Model/RulesengineMetricPeriod.md)
- [RulesengineMetricPeriodMonthReset](docs/Model/RulesengineMetricPeriodMonthReset.md)
- [RulesengineRule](docs/Model/RulesengineRule.md)
- [RulesengineRuleType](docs/Model/RulesengineRuleType.md)
- [RulesengineSubscription](docs/Model/RulesengineSubscription.md)
- [RulesengineTrait](docs/Model/RulesengineTrait.md)
- [RulesengineTraitDefinition](docs/Model/RulesengineTraitDefinition.md)
- [RulesengineUser](docs/Model/RulesengineUser.md)
- [RulesengineWarningTier](docs/Model/RulesengineWarningTier.md)
- [RunIntegrationResponse](docs/Model/RunIntegrationResponse.md)
- [ScheduledCheckoutResponseData](docs/Model/ScheduledCheckoutResponseData.md)
- [ScheduledCheckoutStatus](docs/Model/ScheduledCheckoutStatus.md)
- [ScheduledDowngradeConfigBehavior](docs/Model/ScheduledDowngradeConfigBehavior.md)
- [ScheduledDowngradeResponseData](docs/Model/ScheduledDowngradeResponseData.md)
- [SegmentStatusResp](docs/Model/SegmentStatusResp.md)
- [SendTestWebhookActionResponse](docs/Model/SendTestWebhookActionResponse.md)
- [SkippedEntitlementErrorResponseData](docs/Model/SkippedEntitlementErrorResponseData.md)
- [SkippedEntitlementResponseData](docs/Model/SkippedEntitlementResponseData.md)
- [SoftDeleteBillingCreditResponse](docs/Model/SoftDeleteBillingCreditResponse.md)
- [SortDirection](docs/Model/SortDirection.md)
- [StartDataImportRequestBody](docs/Model/StartDataImportRequestBody.md)
- [StartDataImportResponse](docs/Model/StartDataImportResponse.md)
- [StripeEmbedInfo](docs/Model/StripeEmbedInfo.md)
- [StripeIntegrationConfig](docs/Model/StripeIntegrationConfig.md)
- [SubscriptionStatus](docs/Model/SubscriptionStatus.md)
- [SubscriptionTraitUpdate](docs/Model/SubscriptionTraitUpdate.md)
- [SubscriptionType](docs/Model/SubscriptionType.md)
- [TaxIDInput](docs/Model/TaxIDInput.md)
- [TaxIdType](docs/Model/TaxIdType.md)
- [TemporaryAccessTokenResourceType](docs/Model/TemporaryAccessTokenResourceType.md)
- [TemporaryAccessTokenResponseData](docs/Model/TemporaryAccessTokenResponseData.md)
- [TestWebhookRequestBody](docs/Model/TestWebhookRequestBody.md)
- [TestWebhookResponseData](docs/Model/TestWebhookResponseData.md)
- [TimeSeriesGranularity](docs/Model/TimeSeriesGranularity.md)
- [TopFeatureByUsageResponseData](docs/Model/TopFeatureByUsageResponseData.md)
- [TopFeaturesByUsageResponseData](docs/Model/TopFeaturesByUsageResponseData.md)
- [TraitDefinition](docs/Model/TraitDefinition.md)
- [TraitType](docs/Model/TraitType.md)
- [TrialStatus](docs/Model/TrialStatus.md)
- [UninstallIntegrationResponse](docs/Model/UninstallIntegrationResponse.md)
- [UpdateAddOnRequestBody](docs/Model/UpdateAddOnRequestBody.md)
- [UpdateApiKeyRequestBody](docs/Model/UpdateApiKeyRequestBody.md)
- [UpdateApiKeyResponse](docs/Model/UpdateApiKeyResponse.md)
- [UpdateAutoTopupOverrideRequestBody](docs/Model/UpdateAutoTopupOverrideRequestBody.md)
- [UpdateBillingCreditRequestBody](docs/Model/UpdateBillingCreditRequestBody.md)
- [UpdateBillingCreditResponse](docs/Model/UpdateBillingCreditResponse.md)
- [UpdateBillingPlanCreditGrantRequestBody](docs/Model/UpdateBillingPlanCreditGrantRequestBody.md)
- [UpdateBillingPlanCreditGrantResponse](docs/Model/UpdateBillingPlanCreditGrantResponse.md)
- [UpdateCatalogConfigurationRequestBody](docs/Model/UpdateCatalogConfigurationRequestBody.md)
- [UpdateCatalogRequestBody](docs/Model/UpdateCatalogRequestBody.md)
- [UpdateCatalogResponse](docs/Model/UpdateCatalogResponse.md)
- [UpdateCompanyBillingDetailsRequestBody](docs/Model/UpdateCompanyBillingDetailsRequestBody.md)
- [UpdateCompanyBillingDetailsResponse](docs/Model/UpdateCompanyBillingDetailsResponse.md)
- [UpdateCompanyOverrideRequestBody](docs/Model/UpdateCompanyOverrideRequestBody.md)
- [UpdateCompanyOverrideResponse](docs/Model/UpdateCompanyOverrideResponse.md)
- [UpdateCompanyPlansRequestBody](docs/Model/UpdateCompanyPlansRequestBody.md)
- [UpdateCompanyPlansResponse](docs/Model/UpdateCompanyPlansResponse.md)
- [UpdateComponentRequestBody](docs/Model/UpdateComponentRequestBody.md)
- [UpdateComponentResponse](docs/Model/UpdateComponentResponse.md)
- [UpdateConfigurationResponse](docs/Model/UpdateConfigurationResponse.md)
- [UpdateCreditBundleDetailsRequestBody](docs/Model/UpdateCreditBundleDetailsRequestBody.md)
- [UpdateCreditBundleDetailsResponse](docs/Model/UpdateCreditBundleDetailsResponse.md)
- [UpdateCreditBundleRequestBody](docs/Model/UpdateCreditBundleRequestBody.md)
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
- [UpdatePlanBundleRequestBody](docs/Model/UpdatePlanBundleRequestBody.md)
- [UpdatePlanBundleResponse](docs/Model/UpdatePlanBundleResponse.md)
- [UpdatePlanEntitlementRequestBody](docs/Model/UpdatePlanEntitlementRequestBody.md)
- [UpdatePlanEntitlementResponse](docs/Model/UpdatePlanEntitlementResponse.md)
- [UpdatePlanGroupRequestBody](docs/Model/UpdatePlanGroupRequestBody.md)
- [UpdatePlanGroupResponse](docs/Model/UpdatePlanGroupResponse.md)
- [UpdatePlanRequestBody](docs/Model/UpdatePlanRequestBody.md)
- [UpdatePlanResponse](docs/Model/UpdatePlanResponse.md)
- [UpdatePlanTraitBulkRequestBody](docs/Model/UpdatePlanTraitBulkRequestBody.md)
- [UpdatePlanTraitTraitRequestBody](docs/Model/UpdatePlanTraitTraitRequestBody.md)
- [UpdatePlanTraitsBulkResponse](docs/Model/UpdatePlanTraitsBulkResponse.md)
- [UpdateRuleRequestBody](docs/Model/UpdateRuleRequestBody.md)
- [UpdateScheduledCheckoutRequest](docs/Model/UpdateScheduledCheckoutRequest.md)
- [UpdateScheduledCheckoutResponse](docs/Model/UpdateScheduledCheckoutResponse.md)
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
- [UpsertFeatureForBillingProductResponse](docs/Model/UpsertFeatureForBillingProductResponse.md)
- [UpsertInvoiceResponse](docs/Model/UpsertInvoiceResponse.md)
- [UpsertPaymentMethodResponse](docs/Model/UpsertPaymentMethodResponse.md)
- [UpsertPlanEntitlementForBillingProductResponse](docs/Model/UpsertPlanEntitlementForBillingProductResponse.md)
- [UpsertPlanForBillingProductResponse](docs/Model/UpsertPlanForBillingProductResponse.md)
- [UpsertTraitRequestBody](docs/Model/UpsertTraitRequestBody.md)
- [UpsertUserRequestBody](docs/Model/UpsertUserRequestBody.md)
- [UpsertUserResponse](docs/Model/UpsertUserResponse.md)
- [UpsertUserSubRequestBody](docs/Model/UpsertUserSubRequestBody.md)
- [UpsertUserTraitResponse](docs/Model/UpsertUserTraitResponse.md)
- [UsageBasedEntitlementRequestBody](docs/Model/UsageBasedEntitlementRequestBody.md)
- [UsageBasedEntitlementResponseData](docs/Model/UsageBasedEntitlementResponseData.md)
- [UsageTimeSeriesPointResponseData](docs/Model/UsageTimeSeriesPointResponseData.md)
- [UserCreditUsageResponseData](docs/Model/UserCreditUsageResponseData.md)
- [UserDailyCreditPointResponseData](docs/Model/UserDailyCreditPointResponseData.md)
- [UserDailyUsagePointResponseData](docs/Model/UserDailyUsagePointResponseData.md)
- [UserDetailResponseData](docs/Model/UserDetailResponseData.md)
- [UserFeatureUsageResponseData](docs/Model/UserFeatureUsageResponseData.md)
- [UserResponseData](docs/Model/UserResponseData.md)
- [UserUsageByCompanyResponseData](docs/Model/UserUsageByCompanyResponseData.md)
- [UserUsageDetailResponseData](docs/Model/UserUsageDetailResponseData.md)
- [WarningTier](docs/Model/WarningTier.md)
- [WarningTierRequestBody](docs/Model/WarningTierRequestBody.md)
- [WarningTierResponseData](docs/Model/WarningTierResponseData.md)
- [WebFeatureUsageWebhookOutput](docs/Model/WebFeatureUsageWebhookOutput.md)
- [WebScheduledDowngradeWebhookOutput](docs/Model/WebScheduledDowngradeWebhookOutput.md)
- [WebhookEventDetailResponseData](docs/Model/WebhookEventDetailResponseData.md)
- [WebhookEventResponseData](docs/Model/WebhookEventResponseData.md)
- [WebhookEventStatus](docs/Model/WebhookEventStatus.md)
- [WebhookRequestType](docs/Model/WebhookRequestType.md)
- [WebhookResponseData](docs/Model/WebhookResponseData.md)
- [WebhookStatus](docs/Model/WebhookStatus.md)
- [WebhookUrl](docs/Model/WebhookUrl.md)
- [WhoAmIResponseData](docs/Model/WhoAmIResponseData.md)
- [WorkOSIntegrationConfig](docs/Model/WorkOSIntegrationConfig.md)
- [ZeroOutGrantRequestBody](docs/Model/ZeroOutGrantRequestBody.md)
- [ZeroOutGrantResponse](docs/Model/ZeroOutGrantResponse.md)

## Author

engineering@schematichq.com


## Support

If you encounter any issues or have questions regarding the Schematic PHP SDK, please contact our support team at support@schematic.com.
