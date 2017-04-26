# AddressSearchResponse

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**country_iso_2** | **string** | ISO 3166-1 alpha-2 country code | 
**country_iso_3** | **string** | ISO 3166-1 alpha-3 country code | 
**country** | **string** | Country name together with the language information | 
**state** | **string** | State name/code together with the language information | 
**state_name** | **string** | State name together with the language information | 
**state_code** | **string** | ISO 3166-2 state code (if available) | 
**county** | **string** | County name together with the language information (if available) | 
**district** | **string** | District name together with the language information (if available) | 
**zip** | **string** | Postal code | 
**city** | **string** | City name together with the language information | 
**street** | **string** | Street name together with the language information | 
**housenumber** | **string** | House number or building name together with the language information (if available) | 
**additional_data** | **string** | Additional house number information (e.g. floor, apartment, top) | 
**relevance** | **string** | Indicates the relevance of the result found. The higher the score the more relevant the alternative. The score is a normalized value between 0 and 100. Every typo or mismatch between the request and response data (e.g. incorrect data, abbreviation, ..) will reduce the relevance. | 
**latitude** | **string** | Latitude to place a marker indicating the given location on a map (uses a dot as decimal point) | 
**longitude** | **string** | Longitude to place a marker indicating the given location on a map (uses a dot as decimal point) | 
**navigation_latitude** | **string** | Latitude of a potential route waypoint (uses a dot as decimal point) | 
**navigation_longitude** | **string** | Longitude of a potential route waypoint (uses a dot as decimal point) | 
**matchlevel** | **string** | The most detailed address field that matches the geo-coding query. **housenumber**: the whole geo-location including the house number / building name was found. **street**: the whole geo-location excluding the house number / building name was found. Please consider if you do not provide a house number or building name in the request the most detailed address field possible will always be the street. **general**: our service could only resolve a few address parts above the street level (e.g. only country or country + city, ...). | 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


