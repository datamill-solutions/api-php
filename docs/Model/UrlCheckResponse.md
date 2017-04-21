# UrlCheckResponse

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**valid** | **int** | Flag if the root resource (website) is valid or not [0, 1] | 
**url** | **string** | The final url of the resource | 
**httpCode** | **int** | The HTTP status code according to https://en.wikipedia.org/wiki/List_of_HTTP_status_codes | 
**totalTime** | **float** | Total time of the request in seconds | 
**namelookupTime** | **float** | Time until host name resolved in seconds | 
**connectTime** | **float** | Time until connection established in seconds | 
**pretransferTime** | **float** | Time until file transfer began in seconds | 
**starttransferTime** | **float** | Time to first byte in seconds | 
**primaryIp** | **string** | IP address of the most recent connection | 
**primaryPort** | **int** | Destination port of the connection | 
**downloadContentLength** | **int** | Number of bytes to download from the resource (-1 means no information available) | 
**contentType** | **string** | Content type of the requested resource | 
**redirects** | **object[]** | Array collection of all urls including redirects | 
**parameters** | **object[]** | Array collection of all url parameters | 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


