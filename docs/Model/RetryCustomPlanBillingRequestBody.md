# # RetryCustomPlanBillingRequestBody

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**activation_strategy** | [**\Schematic\Model\CustomPlanActivationStrategy**](CustomPlanActivationStrategy.md) |  | [optional]
**billing_cycle_anchor** | **\DateTime** | The date the subscription&#39;s billing period renews on. Only honored when the retry creates a subscription. | [optional]
**billing_start_date** | **\DateTime** | The date the contract term starts. A past date backdates the subscription so the first invoice covers the term from this date to the renewal date. Requires billing_cycle_anchor. When both are omitted, the term pinned at finalize is reissued. Only honored when the retry creates a subscription. | [optional]
**customer_email** | **string** |  |
**days_until_due** | **int** |  | [optional]
**prorate_first_period** | **bool** | When true, the partial period between the subscription starting and its renewal date is billed pro rata straight away. When false that period is free and no invoice is raised until the renewal date. Only applies alongside billing_cycle_anchor. Defaults to true. | [optional]
**send_invoice** | **bool** | Whether Stripe emails the invoice when it is finalized. Defaults to true. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
