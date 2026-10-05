# # BillingPlanCreditGrantResponseData

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**arrears_anchor** | [**\Schematic\Model\BillingArrearsAnchor**](BillingArrearsAnchor.md) | Which boundary closes a monthly arrears window. Only meaningful when arrears_cadence is monthly. | [optional]
**arrears_cadence** | [**\Schematic\Model\BillingArrearsCadence**](BillingArrearsCadence.md) | How often postpaid charges are closed and invoiced. Defaults to end_of_billing_period. | [optional]
**auto_topup_amount** | **int** |  | [optional]
**auto_topup_amount_type** | **string** |  | [optional]
**auto_topup_availability** | [**\Schematic\Model\BillingCreditAutoTopupAvailability**](BillingCreditAutoTopupAvailability.md) |  |
**auto_topup_enabled** | **bool** | Derived from auto_topup_availability; use that instead. |
**auto_topup_expiry_type** | [**\Schematic\Model\BillingCreditExpiryType**](BillingCreditExpiryType.md) |  | [optional]
**auto_topup_expiry_unit** | [**\Schematic\Model\BillingCreditExpiryUnit**](BillingCreditExpiryUnit.md) |  | [optional]
**auto_topup_expiry_unit_count** | **int** |  | [optional]
**auto_topup_self_service** | **bool** | Derived from auto_topup_availability; use that instead. |
**auto_topup_threshold_credits** | **int** |  | [optional]
**auto_topup_threshold_percent** | **int** |  | [optional]
**billing_mode** | [**\Schematic\Model\BillingPlanCreditGrantBillingMode**](BillingPlanCreditGrantBillingMode.md) | Whether the credits are included in the plan price (granted) or billed as their own subscription line at a price per credit (billed). |
**can_buy_bundles** | **bool** | Deprecated: bundle availability is a per-bundle plan compatibility set now; use compatible_plan_ids on credit bundles instead. |
**company_credit_amount** | **int** | Credits granted once per company on top of the per-license amount. Always 0 when scaling is fixed. |
**created_at** | **\DateTime** |  |
**credit** | [**\Schematic\Model\BillingCreditResponseData**](BillingCreditResponseData.md) |  | [optional]
**credit_amount** | **int** |  |
**credit_id** | **string** |  |
**credit_name** | **string** | Use credit.name from the nested credit object instead |
**credit_plural_name** | **string** | Use plural_name from the nested credit object instead | [optional]
**credit_singular_name** | **string** | Use singular_name from the nested credit object instead | [optional]
**expiry_type** | [**\Schematic\Model\BillingCreditExpiryType**](BillingCreditExpiryType.md) |  | [optional]
**expiry_unit** | [**\Schematic\Model\BillingCreditExpiryUnit**](BillingCreditExpiryUnit.md) |  | [optional]
**expiry_unit_count** | **int** |  | [optional]
**id** | **string** |  |
**license_id** | **string** | The license whose quantity scales this grant. Set only when scaling is per_license. | [optional]
**overdraft_limit** | **float** | Optional limit on how far the balance may go below zero, in credits. A floor on the balance, not an allowance per invoice window: consumption is denied once the balance would fall below minus this figure, and stays denied until a new grant lands or the negative balance is settled. Absent means no limit. | [optional]
**plan** | [**\Schematic\Model\PreviewObjectResponseData**](PreviewObjectResponseData.md) |  | [optional]
**plan_id** | **string** |  |
**plan_name** | **string** | Use plan.name from the nested plan object instead |
**plan_version_id** | **string** |  | [optional]
**postpaid_enabled** | **bool** | Whether consumption may continue past a zero balance, accruing at postpaid_rate_per_unit rather than being denied. |
**postpaid_rate_per_unit** | **int** | Amount charged per credit consumed past zero, in the currency&#39;s minor unit. Defaults to the credit&#39;s own cost basis when postpaid is enabled without one. | [optional]
**postpaid_rate_per_unit_decimal** | **string** | Decimal form of postpaid_rate_per_unit, for rates finer than one minor unit. | [optional]
**price** | [**\Schematic\Model\BillingPriceResponseData**](BillingPriceResponseData.md) | The Stripe price a billed grant bills through. Minted when the plan version is published. | [optional]
**price_tiers** | [**\Schematic\Model\BillingPlanCreditGrantPriceTierResponseData[]**](BillingPlanCreditGrantPriceTierResponseData.md) | Tier table pricing the credits, cheapest bound first. Empty unless billing_mode is billed and the credits are priced on tiers. |
**reset_cadence** | [**\Schematic\Model\BillingPlanCreditGrantResetCadence**](BillingPlanCreditGrantResetCadence.md) |  | [optional]
**reset_start** | [**\Schematic\Model\BillingPlanCreditGrantResetStart**](BillingPlanCreditGrantResetStart.md) |  | [optional]
**reset_type** | [**\Schematic\Model\BillingPlanCreditGrantResetType**](BillingPlanCreditGrantResetType.md) |  | [optional]
**rollover_percentage** | **int** | Percentage of unused credits that carry over when this grant resets. Only meaningful when reset_type is plan_period. |
**scaling** | [**\Schematic\Model\PlanCreditGrantScaling**](PlanCreditGrantScaling.md) | Whether the grant is a fixed amount per company, or issued once per license the company holds. |
**tier_mode** | [**\Schematic\Model\BillingTiersMode**](BillingTiersMode.md) | How price_tiers apply: volume prices every credit at the rate of the tier the total lands in, graduated prices each tier&#39;s own credits at its own rate. Set only when price_tiers is non-empty. | [optional]
**unit_price** | **int** | Price per credit in the plan currency&#39;s smallest unit. Set only when billing_mode is billed and the credits are priced at one rate. | [optional]
**unit_price_decimal** | **string** | Price per credit as a decimal in the plan currency&#39;s smallest unit. Set only when billing_mode is billed and the rate is below one cent. | [optional]
**updated_at** | **\DateTime** |  |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
