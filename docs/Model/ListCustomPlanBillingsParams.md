# # ListCustomPlanBillingsParams

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**company_id** | **string** | Filter by company ID | [optional]
**limit** | **int** | Page limit (default 100) | [optional]
**offset** | **int** | Page offset (default 0) | [optional]
**plan_billing_source** | [**\Schematic\Model\PlanBillingSource**](PlanBillingSource.md) | Filter by the flow that created the billing record. Defaults to custom_plan. | [optional]
**plan_id** | **string** | Filter by plan ID | [optional]
**status** | [**\Schematic\Model\CustomPlanBillingStatus**](CustomPlanBillingStatus.md) | Filter by billing status | [optional]
**statuses** | [**\Schematic\Model\CustomPlanBillingStatus[]**](CustomPlanBillingStatus.md) | Filter by multiple billing statuses | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
