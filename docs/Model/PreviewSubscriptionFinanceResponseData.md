# # PreviewSubscriptionFinanceResponseData

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**amount_off** | **int** |  |
**currency** | **string** | ISO 4217 currency every amount in this block is denominated in. |
**discount_amount** | **int** |  |
**discounts** | [**\Schematic\Model\PreviewSubscriptionDiscountResponseData[]**](PreviewSubscriptionDiscountResponseData.md) |  |
**due_now** | **int** |  |
**new_charges** | **int** |  |
**percent_off** | **float** |  |
**period_end** | **\DateTime** |  |
**period_start** | **\DateTime** |  |
**promo_code_applied** | **bool** |  |
**proration** | **int** |  |
**proration_billed_at** | **\DateTime** |  | [optional]
**tax_amount** | **int** |  | [optional]
**tax_display_name** | **string** |  | [optional]
**tax_require_billing_details** | **bool** |  |
**total_per_billing_period** | **int** |  |
**trial_end** | **\DateTime** |  | [optional]
**upcoming_invoice_line_items** | [**\Schematic\Model\PreviewSubscriptionUpcomingInvoiceLineItems[]**](PreviewSubscriptionUpcomingInvoiceLineItems.md) |  |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
