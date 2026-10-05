# # StripeIntegrationConfig

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**account_id** | **string** | Connected Stripe account ID (acct_*) | [optional]
**account_name** | **string** | Display name of the connected Stripe account | [optional]
**claimable_sandbox_expires_at** | **\DateTime** | When Stripe deletes the sandbox if nobody claims it, 60 days from creation; absent on sandboxes created before it was recorded | [optional]
**claimable_sandbox_id** | **string** | Stripe claimable sandbox this connection was provisioned from; absent for an OAuth connect | [optional]
**claimable_sandbox_status** | **string** | Stripe&#39;s claim status for the sandbox: unclaimed, claimed, or live | [optional]
**company_update_only** | **bool** | When importing Stripe customers, only update existing companies, do not create new companies | [optional]
**is_sandbox** | **bool** | Whether the integration is connected to a Stripe sandbox account |
**live_mode** | **bool** | Whether the integration is connected to a live Stripe account |
**onboard_url** | **string** | Onboarding URL returned during the v2 (Connect) install flow before activation | [optional]
**return_to** | **string** | App location that started the connect flow; the OAuth callback redirects back there on success | [optional]
**type** | **string** | Discriminator: always \&quot;stripe\&quot; for this variant |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
