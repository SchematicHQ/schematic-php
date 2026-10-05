# # CompanyPlanDetailResponseData

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**active_version** | [**\Schematic\Model\PlanVersionResponseData**](PlanVersionResponseData.md) |  | [optional]
**audience_type** | **string** |  | [optional]
**available_periods** | [**\Schematic\Model\PlanPriceCadence[]**](PlanPriceCadence.md) |  |
**billing_linked_resource** | [**\Schematic\Model\BillingLinkedResourceResponseData**](BillingLinkedResourceResponseData.md) |  | [optional]
**billing_product** | [**\Schematic\Model\BillingProductDetailResponseData**](BillingProductDetailResponseData.md) |  | [optional]
**billing_strategy** | [**\Schematic\Model\BillingStrategy**](BillingStrategy.md) |  |
**catalogs** | [**\Schematic\Model\PlanCatalogMembershipResponseData[]**](PlanCatalogMembershipResponseData.md) |  | [optional]
**charge_type** | [**\Schematic\Model\ChargeType**](ChargeType.md) |  |
**company_can_trial** | **bool** |  |
**company_count** | **int** |  |
**company_id** | **string** |  | [optional]
**company_logo_url** | **string** |  | [optional]
**company_name** | **string** |  | [optional]
**compatible_plan_ids** | **string[]** |  |
**controlled_by** | [**\Schematic\Model\BillingProviderType**](BillingProviderType.md) |  |
**copied_from_plan_id** | **string** |  | [optional]
**created_at** | **\DateTime** |  |
**credits** | [**\Schematic\Model\BillingCreditResponseData[]**](BillingCreditResponseData.md) |  |
**currency_prices** | [**\Schematic\Model\PlanCurrencyPricesResponseData[]**](PlanCurrencyPricesResponseData.md) |  |
**current** | **bool** |  |
**custom** | **bool** |  |
**custom_plan_config** | [**\Schematic\Model\CustomPlanConfig**](CustomPlanConfig.md) |  | [optional]
**description** | **string** |  |
**draft_version** | [**\Schematic\Model\PlanVersionResponseData**](PlanVersionResponseData.md) |  | [optional]
**entitlements** | [**\Schematic\Model\PlanEntitlementResponseData[]**](PlanEntitlementResponseData.md) |  | [optional]
**estimated_totals** | [**\Schematic\Model\EstimatedPlanTotal[]**](EstimatedPlanTotal.md) |  | [optional]
**features** | [**\Schematic\Model\FeatureInPlanResponseData[]**](FeatureInPlanResponseData.md) |  |
**icon** | [**\Schematic\Model\PlanIcon**](PlanIcon.md) |  |
**id** | **string** |  |
**included_credit_grants** | [**\Schematic\Model\PlanCreditGrantView[]**](PlanCreditGrantView.md) |  |
**invalid_reason** | [**\Schematic\Model\CompanyPlanInvalidReason**](CompanyPlanInvalidReason.md) |  | [optional]
**is_custom** | **bool** |  |
**is_default** | **bool** |  |
**is_free** | **bool** | Deprecated: reports the plan&#39;s charge type, not its price. Read the plan&#39;s prices to tell whether it costs anything, or billing_strategy to tell how it is billed. | [optional]
**is_trialable** | **bool** |  |
**monthly_price** | [**\Schematic\Model\BillingPriceResponseData**](BillingPriceResponseData.md) |  | [optional]
**name** | **string** |  |
**one_time_price** | [**\Schematic\Model\BillingPriceResponseData**](BillingPriceResponseData.md) |  | [optional]
**plan_type** | [**\Schematic\Model\PlanType**](PlanType.md) |  |
**quarterly_price** | [**\Schematic\Model\BillingPriceResponseData**](BillingPriceResponseData.md) |  | [optional]
**trial_days** | **int** |  | [optional]
**updated_at** | **\DateTime** |  |
**usage_violations** | [**\Schematic\Model\FeatureUsageResponseData[]**](FeatureUsageResponseData.md) |  |
**valid** | **bool** |  |
**versions** | [**\Schematic\Model\PlanVersionResponseData[]**](PlanVersionResponseData.md) |  |
**yearly_price** | [**\Schematic\Model\BillingPriceResponseData**](BillingPriceResponseData.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
