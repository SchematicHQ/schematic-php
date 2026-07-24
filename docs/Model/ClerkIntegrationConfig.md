# # ClerkIntegrationConfig

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**first_events_received** | **bool** | Whether Schematic has received the first webhook event from Clerk after install | [optional]
**type** | **string** | Discriminator: always \&quot;clerk\&quot; for this variant |
**webhook_url** | **string** | URL configured on the Clerk webhook endpoint that delivers events to Schematic | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
