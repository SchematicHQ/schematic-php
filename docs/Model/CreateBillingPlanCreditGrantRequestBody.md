# # CreateBillingPlanCreditGrantRequestBody

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**apply_to_existing** | **bool** |  | [optional]
**arrears_anchor** | [**\Schematic\Model\BillingArrearsAnchor**](BillingArrearsAnchor.md) | Which boundary closes a monthly arrears window: the subscription&#39;s own recurrence (billing_period_start) or the calendar month (month_end). Only applies when arrears_cadence is monthly; defaults to billing_period_start. | [optional]
**arrears_cadence** | [**\Schematic\Model\BillingArrearsCadence**](BillingArrearsCadence.md) | How often postpaid charges are closed and invoiced: end_of_billing_period (the default) or monthly. Quarterly is not available for postpaid charges. | [optional]
**auto_topup_amount** | **int** |  | [optional]
**auto_topup_amount_type** | [**\Schematic\Model\CreditAutoTopupAmountType**](CreditAutoTopupAmountType.md) |  | [optional]
**auto_topup_availability** | [**\Schematic\Model\BillingCreditAutoTopupAvailability**](BillingCreditAutoTopupAvailability.md) |  | [optional]
**auto_topup_enabled** | **bool** |  | [optional]
**auto_topup_expiry_type** | [**\Schematic\Model\BillingCreditExpiryType**](BillingCreditExpiryType.md) |  | [optional]
**auto_topup_expiry_unit** | [**\Schematic\Model\BillingCreditExpiryUnit**](BillingCreditExpiryUnit.md) |  | [optional]
**auto_topup_expiry_unit_count** | **int** |  | [optional]
**auto_topup_self_service** | **bool** |  | [optional]
**auto_topup_threshold_credits** | **int** |  | [optional]
**auto_topup_threshold_percent** | **int** |  | [optional]
**billing_mode** | [**\Schematic\Model\BillingPlanCreditGrantBillingMode**](BillingPlanCreditGrantBillingMode.md) | Whether the credits are included in the plan price (granted) or billed as their own subscription line at a price per credit (billed). Billed is only available on custom plans. Defaults to granted. | [optional]
**can_buy_bundles** | **bool** | Deprecated: use compatible_plan_ids on credit bundles instead. Still accepted; writes through to the credit&#39;s bundle compatibility. | [optional]
**company_credit_amount** | **int** | Credits granted once per company on top of the per-license amount. Only valid when scaling is per_license. Defaults to 0. | [optional]
**credit_amount** | **int** |  |
**credit_id** | **string** |  |
**expiry_type** | [**\Schematic\Model\BillingCreditExpiryType**](BillingCreditExpiryType.md) |  | [optional]
**expiry_unit** | [**\Schematic\Model\BillingCreditExpiryUnit**](BillingCreditExpiryUnit.md) |  | [optional]
**expiry_unit_count** | **int** |  | [optional]
**license_id** | **string** | The license whose quantity scales this grant. Required when scaling is per_license. | [optional]
**overdraft_limit** | **float** | Optional limit on how far the balance may go below zero, in credits. It is a floor on the balance rather than an allowance per invoice window: the balance may run down to minus this figure, and beyond it the flag check denies the same way an exhausted balance does with postpaid off. Nothing resets when an invoice window rolls, so a company that reaches the limit stays denied until a new grant lands or the negative balance is settled. Omit for no limit. | [optional]
**plan_id** | **string** |  |
**plan_version_id** | **string** |  | [optional]
**postpaid_enabled** | **bool** | Whether consumption may continue past a zero balance. When false (the default) the flag check denies once the balance is exhausted, which is the existing behavior. When true, consumption continues and accrues at postpaid_rate_per_unit, settled on arrears_cadence. Intended for invoice-billed customers on net terms, who have no card for auto top-up to charge. | [optional]
**postpaid_rate_per_unit** | **int** | Amount charged per credit consumed past a zero balance, in the currency&#39;s minor unit. Optional: defaults to the credit&#39;s own cost basis (price_per_unit) when postpaid_enabled is true. | [optional]
**postpaid_rate_per_unit_decimal** | **string** | Decimal string form of postpaid_rate_per_unit, for rates finer than one minor unit (for example 0.0002). Takes precedence over postpaid_rate_per_unit when both are set, matching how the credit&#39;s own price_per_unit_decimal behaves. | [optional]
**price_tiers** | [**\Schematic\Model\CreditGrantPriceTierRequestBody[]**](CreditGrantPriceTierRequestBody.md) | Tier table pricing the credits on this grant, cheapest bound first, the last tier unbounded. Give this instead of unit_price to charge a rate that changes with the number of credits on the invoice. Requires tier_mode. | [optional]
**reset_cadence** | [**\Schematic\Model\BillingPlanCreditGrantResetCadence**](BillingPlanCreditGrantResetCadence.md) |  |
**reset_start** | [**\Schematic\Model\BillingPlanCreditGrantResetStart**](BillingPlanCreditGrantResetStart.md) |  |
**reset_type** | [**\Schematic\Model\BillingPlanCreditGrantResetType**](BillingPlanCreditGrantResetType.md) |  | [optional]
**rollover_percentage** | **int** | Percentage of unused credits that carry over when this grant resets. Only applies when reset_type is plan_period. Rolled-over credits expire at the next reset and are not rolled again. Defaults to 0. | [optional]
**scaling** | [**\Schematic\Model\PlanCreditGrantScaling**](PlanCreditGrantScaling.md) | Whether the grant is a fixed amount per company, or issued once per license the company holds. Defaults to fixed. | [optional]
**tier_mode** | [**\Schematic\Model\BillingTiersMode**](BillingTiersMode.md) | How price_tiers apply: volume prices every credit at the rate of the tier the total lands in, graduated prices each tier&#39;s own credits at its own rate. Required with price_tiers. | [optional]
**unit_price** | **int** | Price per credit in the plan currency&#39;s smallest unit. Required when billing_mode is billed, unless unit_price_decimal or price_tiers is set. | [optional]
**unit_price_decimal** | **string** | Price per credit as a decimal in the plan currency&#39;s smallest unit, for prices below one cent. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
