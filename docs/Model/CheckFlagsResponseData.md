# # CheckFlagsResponseData

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**credit_balances** | [**array<string,\Schematic\Model\CompanyCreditBalance>**](CompanyCreditBalance.md) | Lease-aware credit balances keyed by credit ID, covering every credit type the company holds a balance in | [optional]
**credit_spend_policies** | [**\Schematic\Model\CreditSpendPolicy[]**](CreditSpendPolicy.md) | Credit spend policies binding the evaluated company and user; empty when none bind. Each response carries the whole set, so replace any previously received set with it. Advisory: the flag values do not reflect them, since a check names no draw amount |
**flags** | [**\Schematic\Model\CheckFlagResponseData[]**](CheckFlagResponseData.md) |  |
**plan** | [**\Schematic\Model\DatastreamCompanyPlan**](DatastreamCompanyPlan.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
