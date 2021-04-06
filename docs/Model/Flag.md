# Flag

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**created_by** | **string** |  | [optional] 
**data_records_enabled** | **bool** | enabled data records will get data logging in the metrics pipeline, for example, kafka. | 
**description** | **string** |  | 
**enabled** | **bool** |  | 
**entity_type** | **string** | it will override the entityType in the evaluation logs if it&#x27;s not empty | [optional] 
**id** | **int** |  | [optional] 
**key** | **string** | unique key representation of the flag | [optional] 
**notes** | **string** | flag usage details in markdown format | [optional] 
**segments** | [**\Swagger\Client\Model\Segment[]**](Segment.md) |  | [optional] 
**tags** | [**\Swagger\Client\Model\Tag[]**](Tag.md) |  | [optional] 
**updated_at** | [**\DateTime**](\DateTime.md) |  | [optional] 
**updated_by** | **string** |  | [optional] 
**variants** | [**\Swagger\Client\Model\Variant[]**](Variant.md) |  | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

