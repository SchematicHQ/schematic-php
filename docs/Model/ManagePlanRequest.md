# # ManagePlanRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**add_on_selections** | [**\Schematic\Model\PlanSelection[]**](PlanSelection.md) |  |
**base_plan_id** | **string** |  | [optional]
**base_plan_price_id** | **string** |  | [optional]
**cancel_immediately** | **bool** | If false, subscription cancels at period end. Only applies when removing all plans. Defaults to true. | [optional]
**company_id** | **string** |  |
**coupon_external_id** | **string** |  | [optional]
**credit_bundles** | [**\Schematic\Model\UpdateCreditBundleRequestBody[]**](UpdateCreditBundleRequestBody.md) |  |
**pay_in_advance_entitlements** | [**\Schematic\Model\UpdatePayInAdvanceRequestBody[]**](UpdatePayInAdvanceRequestBody.md) |  |
**payment_method_external_id** | **string** |  | [optional]
**promo_code** | **string** |  | [optional]
**prorate** | **bool** | If true and cancel_immediately is true, issue prorated credit. Only applies when removing all plans. Defaults to true. | [optional]
**trial_end** | **\DateTime** |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
