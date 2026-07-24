# # IntegrationConfig

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
**external_customer_id_key** | **string** | Schematic company key used to store the Metronome customer&#39;s ingest alias; when unset, imported customers carry only metronome_customer_id | [optional]
**first_events_received** | **bool** | Whether Schematic has received the first webhook event from WorkOS after install | [optional]
**webhook_url** | **string** | URL configured on the WorkOS webhook endpoint that delivers events to Schematic | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
