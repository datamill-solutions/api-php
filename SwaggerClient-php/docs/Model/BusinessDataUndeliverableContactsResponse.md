# BusinessDataUndeliverableContactsResponse

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**undeliverable** | **string** | Flag if sending a mail would result in an undeliverable state [**0**, **1**] | 
**deceased** | **string** | Flag if the person is deceased [**0**, **1**] | 
**moved** | **string** | Flag if the person has moved to a new address but we do not know the new address [**0**, **1**] | 
**new_address_available** | **string** | Flag if the person has moved to a new address and we know the new address [**0**, **1**] | 
**contact** | [**\DataMill\BusinessDataUndeliverableContactsSearchContact**](BusinessDataUndeliverableContactsSearchContact.md) |  | 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


