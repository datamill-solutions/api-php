# BusinessDataDunsResolveResponse

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**status** | **string** | Flag if a company was found by its D-U-N-S number or not [**0*, **1**] | 
**status_description** | **string** | Describes if a company was found or if the specified D-U-N-S number could not be resolved. Possible values are: **company not found**, **company found**, **invalid duns number** | 
**company_name** | **string** | The company&#39;s official name | [optional] 
**company_name_2** | **string** | The company&#39;s second name or \&quot;doing business as\&quot; | [optional] 
**continent_name** | **string** | Continent name of the company&#39;s headquarters | [optional] 
**country_code** | **string** | ISO 3166-1 alpha-2 country code of the company&#39;s headquarters | [optional] 
**country_code_3** | **string** | ISO 3166-1 alpha-3 country code of the company&#39;s headquarters | [optional] 
**zip** | **string** | Postal code of the company&#39;s headquarters | [optional] 
**city** | **string** | City of the company&#39;s headquarters | [optional] 
**street** | **string** | Street name of the company&#39;s headquarters | [optional] 
**house_number** | **string** | House number of the company&#39;s headquarters | [optional] 
**phone_number** | **string** | Phone number of the company&#39;s headquarters | [optional] 
**fax_number** | **string** | Fax number of the company&#39;s headquarters | [optional] 
**state_name** | **string** | State name of the company&#39;s headquarters | [optional] 
**state_code** | **string** | ISO 3166-2 state code of the company&#39;s headquarters | [optional] 
**ceo_name** | **string** | Name of the company&#39;s CEO (Chief Executive Officer) | [optional] 
**ceo_title** | **string** | Position / Business title of the company&#39;s CEO | [optional] 
**ceo_secondary** | **string[]** | Collection of names of further CEOs | [optional] 
**sic_code** | **string** | The company&#39;s international SIC (Standard Industrial Classification) code | [optional] 
**sic_description** | **string** | Description of the SIC code | [optional] 
**year_started** | **string** | Year of establishment | [optional] 
**annual_turnover_local_currency** | **int** | The company&#39;s annual turnover in its local currency (may be NULL if unset) | [optional] 
**annual_turnover_indicator_code** | **string** | Indicator if the annual turnover is an approximated or exact value: **&lt;empty value&gt;**: not available, **0**: exact value, **1**: low end of range, **2**: approximated, **3**: modeled value | [optional] 
**annual_turnover_indicator_description** | **string** | Description of the annual turnover indicator | [optional] 
**annual_turnover_usd** | **int** | The company&#39;s annual turnover in US Dollar (may be NULL if unset) | [optional] 
**net_income** | **int** | The company&#39;s net income in its local currency (may be NULL if unset) | [optional] 
**net_income_usd** | **int** | The company&#39;s net income in US Dollar (may be NULL if unset) | [optional] 
**net_worth** | **int** | The company&#39;s net worth (net value) in its local currency (may be NULL if unset) | [optional] 
**net_worth_usd** | **int** | The company&#39;s net worth (net value) in US Dollar (may be NULL if unset) | [optional] 
**currency_code** | **string** | The local currency code of the company&#39;s headquarters country (3-letter ISO 4217 currency code) | [optional] 
**currency_name** | **string** | The local currency name of the company&#39;s headquarters country | [optional] 
**marketability_code** | **string** | Indicator if the company / branch can be used for marketing purposes: **1**: not marketable, but listed, **2**: not marketable and not listed, **3**: marketable and listed | [optional] 
**marketability_description** | **string** | Description of the marketable indicator value | [optional] 
**total_employees** | **int** | The total number of employees (may be NULL if unset) | [optional] 
**total_employees_indicator** | **string** | Indicator if the total number of employees is an approximated or exact value: **0**: exact value, **1**: low end of range, **2**: approximated | [optional] 
**total_employees_indicator_description** | **string** | Description of the total number of employees indicator | [optional] 
**total_employees_physical_address** | **int** | The total number of employees working at the company&#39;s headquarters (may be NULL if unset) | [optional] 
**total_employees_physical_address_indicator** | **string** | Indicator if the total number of employees (working at the company&#39;s headquarters) is an approximated or exact value: **&lt;empty value&gt;**: not available, **0**: exact value, **1**: low end of range, **2**: approximated or not available if the number of employees at this location is zero, **3**: modeled value | [optional] 
**import_export_indicator** | **string** | Indicator if the company has an import and/or export trade: **&lt;empty value&gt;**: not available, **A**: import / export / agent, **B**: imports and exports, **C**: imports, **D**: imports and agents, **E**: exports and agents, **F**: agents, keeps no inventory, does not take title goods, **G**: not available or none, **H**: exports | [optional] 
**import_export_indicator_description** | **string** | Description of the import/export indicator | [optional] 
**legal_form_code** | **int** | Code of the company&#39;s legal form (may be NULL if unset) | [optional] 
**legal_form_description** | **string** | Description of the legal form code | [optional] 
**business_structure_code** | **string** | Code of the company&#39;s business structure: **&lt;empty value&gt;**: not available, **0**: single location, **1**: headquarter, **2**: branch, **4**: division, | [optional] 
**business_structure_description** | **string** | Description of the business structure code | [optional] 
**business_registration_number_code** | **string** | Unique code describing the national registration id | [optional] 
**business_registration_number_code_description** | **string** | Friendly name of the business registration number code | [optional] 
**undeliverable_indicator** | **string** | Indicator if any of the company&#39;s information are undeliverable: **B**: both addresses are undeliverable, **M**: mail address is undeliverable, **N**: no nixie indication, **P**: physical address undeliverable, **Y**: one of the addresses is undeliverable | [optional] 
**undeliverable_description** | **string** | Description of the undeliverable indicator | [optional] 
**financial_statement_date** | [**\DateTime**](Date.md) | Timestamp when the financial information were updated the last time (may be full year only or full date with day, month and year) | [optional] 
**report_date** | [**\DateTime**](Date.md) | Timestamp when the company&#39;s information were updated the last time (may be full year only or full date with day, month and year) | [optional] 
**is_only_available_address** | **bool** | Flag if this postal address is the only address available for the company | [optional] 
**is_subsidiary** | **bool** | Flag if this postal address is a subsidiary of the company | [optional] 
**total_employees_including_principals_indicator** | **bool** | Flag if the total number of employees includes principals | [optional] 
**is_out_of_business** | **bool** | Flag if the company is already out of business | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)

