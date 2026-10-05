# # ManagePlanRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**activate_on_payment** | **bool** | If true, the company gets the plan only once the first invoice is paid. Only applies to an invoiced subscription. Defaults to false. | [optional]
**add_on_selections** | [**\Schematic\Model\PlanSelection[]**](PlanSelection.md) |  |
**base_plan_id** | **string** |  | [optional]
**base_plan_price_id** | **string** |  | [optional]
**base_plan_version_id** | **string** |  | [optional]
**billing_cycle_anchor** | **\DateTime** | The date the subscription&#39;s billing period renews on. Only honored when starting a new subscription; changing the anchor on an existing subscription is not supported. | [optional]
**billing_email** | **string** | Address the invoice is sent to. Required when collection_method is send_invoice. | [optional]
**billing_entity_id** | **string** | The company that pays for this subscription. Must already have a Stripe customer. Only honored when starting a new subscription. | [optional]
**cancel_immediately** | **bool** | If false, subscription cancels at period end. Only applies when removing all plans. Defaults to true. | [optional]
**collection_method** | [**\Schematic\Model\BillingCollectionMethod**](BillingCollectionMethod.md) | How the subscription is paid: charged to a payment method on file, or invoiced with payment terms. Invoicing is only available when starting a new subscription. Defaults to charge_automatically. | [optional]
**company_id** | **string** |  |
**coupon_external_id** | **string** |  | [optional]
**credit_bundles** | [**\Schematic\Model\UpdateCreditBundleRequestBody[]**](UpdateCreditBundleRequestBody.md) |  |
**currency** | **string** | ISO 4217 currency this change is being built in. Prices are still selected by id; this records the intent. | [optional]
**custom_field_values** | [**\Schematic\Model\CheckoutFieldValue[]**](CheckoutFieldValue.md) |  |
**days_until_due** | **int** | Payment terms in days for an invoiced subscription. Defaults to 30. | [optional]
**pay_in_advance_entitlements** | [**\Schematic\Model\UpdatePayInAdvanceRequestBody[]**](UpdatePayInAdvanceRequestBody.md) |  |
**payment_method_external_id** | **string** |  | [optional]
**promo_code** | **string** |  | [optional]
**prorate** | **bool** | If true and cancel_immediately is true, issue prorated credit. Only applies when removing all plans. Defaults to true. | [optional]
**prorate_first_period** | **bool** | When true, the partial period between the subscription starting and its renewal date is billed pro rata straight away. When false that period is free and no invoice is raised until the renewal date. Only applies alongside billing_cycle_anchor. Defaults to true. | [optional]
**send_invoice** | **bool** | Whether Stripe emails the invoice when it is finalized. Only applies to an invoiced subscription. Defaults to true. | [optional]
**trial_end** | **\DateTime** |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
