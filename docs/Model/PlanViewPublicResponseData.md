# # PlanViewPublicResponseData

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**audience_type** | **string** |  | [optional]
**billing_product** | [**\Schematic\Model\BillingProductDetailResponseData**](BillingProductDetailResponseData.md) |  | [optional]
**charge_type** | [**\Schematic\Model\ChargeType**](ChargeType.md) |  |
**company_count** | **int** |  |
**compatible_plan_ids** | **string[]** |  |
**controlled_by** | [**\Schematic\Model\PlanControlledByType**](PlanControlledByType.md) |  |
**created_at** | **\DateTime** |  |
**custom** | **bool** |  |
**custom_plan_config** | [**\Schematic\Model\CustomPlanConfig**](CustomPlanConfig.md) |  | [optional]
**description** | **string** |  |
**entitlements** | [**\Schematic\Model\PlanEntitlementResponseData[]**](PlanEntitlementResponseData.md) |  |
**features** | [**\Schematic\Model\FeatureDetailResponseData[]**](FeatureDetailResponseData.md) |  |
**icon** | **string** |  |
**id** | **string** |  |
**included_credit_grants** | [**\Schematic\Model\PlanCreditGrantView[]**](PlanCreditGrantView.md) |  |
**is_custom** | **bool** |  |
**is_default** | **bool** |  |
**is_free** | **bool** |  |
**is_trialable** | **bool** |  |
**monthly_price** | [**\Schematic\Model\BillingPriceResponseData**](BillingPriceResponseData.md) |  | [optional]
**name** | **string** |  |
**one_time_price** | [**\Schematic\Model\BillingPriceResponseData**](BillingPriceResponseData.md) |  | [optional]
**plan_type** | [**\Schematic\Model\PlanType**](PlanType.md) |  |
**trial_days** | **int** |  | [optional]
**updated_at** | **\DateTime** |  |
**versions** | [**\Schematic\Model\PlanVersionResponseData[]**](PlanVersionResponseData.md) |  |
**yearly_price** | [**\Schematic\Model\BillingPriceResponseData**](BillingPriceResponseData.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
