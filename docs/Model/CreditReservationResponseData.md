# # CreditReservationResponseData

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**company_id** | **string** |  |
**created_at** | **\DateTime** |  |
**credit_type_id** | **string** |  |
**expires_at** | **\DateTime** | When the unspent hold is refunded if no track event settles it |
**id** | **string** |  |
**released_at** | **\DateTime** | When the reservation was settled, released, or expired; null while the hold is open | [optional]
**reserved_amount** | **float** | Credits held from the company&#39;s balance for the operation |
**settled_amount** | **float** | Credits the settling track event recorded against the hold; zero until settled. May exceed reserved_amount, in which case the overage was debited from the balance, up to the overdraft limit when one is set |
**updated_at** | **\DateTime** |  |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
