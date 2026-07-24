# # StripeIntegrationConfig

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**account_id** | **string** | Connected Stripe account ID (acct_*) | [optional]
**account_name** | **string** | Display name of the connected Stripe account | [optional]
**company_update_only** | **bool** | When importing Stripe customers, only update existing companies, do not create new companies | [optional]
**is_sandbox** | **bool** | Whether the integration is connected to a Stripe sandbox account |
**live_mode** | **bool** | Whether the integration is connected to a live Stripe account |
**onboard_url** | **string** | Onboarding URL returned during the v2 (Connect) install flow before activation | [optional]
**type** | **string** | Discriminator: always \&quot;stripe\&quot; for this variant |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
