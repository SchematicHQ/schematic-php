# # ChangeSubscriptionInternalRequestBody

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**add_on_ids** | [**\Schematic\Model\UpdateAddOnRequestBody[]**](UpdateAddOnRequestBody.md) |  |
**auto_topup_overrides** | [**\Schematic\Model\UpdateAutoTopupOverrideRequestBody[]**](UpdateAutoTopupOverrideRequestBody.md) |  |
**billing_entity_id** | **string** |  | [optional]
**company_id** | **string** |  |
**coupon_external_id** | **string** |  | [optional]
**credit_bundles** | [**\Schematic\Model\UpdateCreditBundleRequestBody[]**](UpdateCreditBundleRequestBody.md) |  |
**currency** | **string** | ISO 4217 currency this cart is being built in. Prices are still selected by id; this records the intent, and a cart that prices in another currency is reported as a problem. | [optional]
**custom_field_values** | [**\Schematic\Model\CheckoutFieldValue[]**](CheckoutFieldValue.md) |  |
**new_plan_id** | **string** |  |
**new_price_id** | **string** |  |
**opt_in_accepted** | **bool** |  | [optional]
**pay_in_advance** | [**\Schematic\Model\UpdatePayInAdvanceRequestBody[]**](UpdatePayInAdvanceRequestBody.md) |  |
**payment_method_id** | **string** |  | [optional]
**promo_code** | **string** |  | [optional]
**skip_trial** | **bool** |  |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
