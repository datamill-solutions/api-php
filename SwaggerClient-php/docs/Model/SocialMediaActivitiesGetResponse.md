# SocialMediaActivitiesGetResponse

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**status** | **int** | Unique status code describing the response  * **1**: Social media activities found and present in the response,  * **-1**: No social media activities found for the requested email address (in this case all following response keys except the status_description are not present),  * **-2**: Your requested is queued and a response will be available within the next 12 hours (in this case all following response keys except the status_description are not present) | 
**status_description** | **string** | Short description of the status code | 
**name** | **string** | First name and last name of the person | [optional] 
**email** | **string** | The requested email address | [optional] 
**gender** | **string** | The person&#39;s gender written in english and all lowercase. Either **female** or **male** | [optional] 
**avatar** | **string** | Profile image (fully qualified url) of the social media profile with the most followers | [optional] 
**bio** | **string** | Biography of the social media profile where the person has the most followers (unless it doesn&#39;t show a biography, then the social media profile with the second most followers is checked) | [optional] 
**max_followers** | **int** | The maximum number of followers found by any of the social media platforms | [optional] 
**sum_followers** | **int** | The total number of followers of all social media platforms | [optional] 
**location** | [**\DataMill\SocialMediaActivitiesGetLocation**](SocialMediaActivitiesGetLocation.md) |  | [optional] 
**education** | [**\DataMill\SocialMediaActivitiesGetEducation[]**](SocialMediaActivitiesGetEducation.md) | Collection of all educations found. | [optional] 
**employment** | [**\DataMill\SocialMediaActivitiesGetEmployment[]**](SocialMediaActivitiesGetEmployment.md) | Collection of all companies the person worked for. | [optional] 
**linkedin** | [**\DataMill\SocialMediaActivitiesGetLinkedIn**](SocialMediaActivitiesGetLinkedIn.md) |  | [optional] 
**xing** | [**\DataMill\SocialMediaActivitiesGetXing**](SocialMediaActivitiesGetXing.md) |  | [optional] 
**facebook** | [**\DataMill\SocialMediaActivitiesGetFacebook**](SocialMediaActivitiesGetFacebook.md) |  | [optional] 
**twitter** | [**\DataMill\SocialMediaActivitiesGetTwitter**](SocialMediaActivitiesGetTwitter.md) |  | [optional] 
**pinterest** | [**\DataMill\SocialMediaActivitiesGetPinterest**](SocialMediaActivitiesGetPinterest.md) |  | [optional] 
**instagram** | [**\DataMill\SocialMediaActivitiesGetInstagram**](SocialMediaActivitiesGetInstagram.md) |  | [optional] 
**youtube** | [**\DataMill\SocialMediaActivitiesGetYouTube**](SocialMediaActivitiesGetYouTube.md) |  | [optional] 
**googleplus** | [**\DataMill\SocialMediaActivitiesGetGooglePlus**](SocialMediaActivitiesGetGooglePlus.md) |  | [optional] 
**klout** | [**\DataMill\SocialMediaActivitiesGetKlout**](SocialMediaActivitiesGetKlout.md) |  | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


