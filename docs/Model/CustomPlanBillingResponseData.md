# # CustomPlanBillingResponseData

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**activation_strategy** | [**\Schematic\Model\CustomPlanActivationStrategy**](CustomPlanActivationStrategy.md) |  |
**billing_cycle_anchor** | **\DateTime** | The billing period renewal date pinned when the subscription started, when one was set. When no invoice exists yet, the first invoice is raised on this date. | [optional]
**company_id** | **string** |  |
**created_at** | **\DateTime** |  |
**days_until_due** | **int** |  |
**external_invoice_id** | **string** |  | [optional]
**id** | **string** |  |
**paid_at** | **\DateTime** |  | [optional]
**plan_billing_source** | [**\Schematic\Model\PlanBillingSource**](PlanBillingSource.md) | The flow that created this billing record: a custom plan, or a standard plan assigned by invoice through Manage Plan. |
**plan_id** | **string** |  |
**published_at** | **\DateTime** |  | [optional]
**send_invoice** | **bool** |  |
**status** | [**\Schematic\Model\CustomPlanBillingStatus**](CustomPlanBillingStatus.md) |  |
**stripe_invoice_url** | **string** |  | [optional]
**updated_at** | **\DateTime** |  |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
