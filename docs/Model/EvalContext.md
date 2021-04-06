# EvalContext

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**enable_debug** | **bool** |  | [optional] 
**entity_context** | **object** |  | [optional] 
**entity_id** | **string** | entityID is used to deterministically at random to evaluate the flag result. If it&#x27;s empty, flagr will randomly generate one. | [optional] 
**entity_type** | **string** |  | [optional] 
**flag_id** | **int** | flagID | [optional] 
**flag_key** | **string** | flagKey. flagID or flagKey will resolve to the same flag. Either works. | [optional] 
**flag_tags** | **string[]** | flagTags. flagTags looks up flags by tag. Either works. | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

