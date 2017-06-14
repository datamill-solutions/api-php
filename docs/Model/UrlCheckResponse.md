# UrlCheckResponse

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**valid** | **int** | Flag if the root resource (website) is valid or not [0, 1] | 
**url** | **string** | The final url of the resource | 
**http_code** | **int** | The HTTP status code according to https://en.wikipedia.org/wiki/List_of_HTTP_status_codes | 
**total_time** | **float** | Total time of the request in seconds | 
**namelookup_time** | **float** | Time until host name resolved in seconds | 
**connect_time** | **float** | Time until connection established in seconds | 
**pretransfer_time** | **float** | Time until file transfer began in seconds | 
**starttransfer_time** | **float** | Time to first byte in seconds | 
**primary_ip** | **string** | IP address of the most recent connection | 
**primary_port** | **int** | Destination port of the connection | 
**download_content_length** | **int** | Number of bytes to download from the resource (-1 means no information available; will be removed in future versions / deprecated) | 
**content_type** | **string** | Content type of the requested resource | 
**redirects** | **object[]** | Array collection of all urls including redirects | 
**parameters** | **object[]** | Array collection of all url parameters | 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


