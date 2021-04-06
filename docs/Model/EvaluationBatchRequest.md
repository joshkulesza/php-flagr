# EvaluationBatchRequest

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**enable_debug** | **bool** |  | [optional] 
**entities** | [**\Flagr\Client\Model\EvaluationEntity[]**](EvaluationEntity.md) |  | 
**flag_i_ds** | **int[]** | flagIDs | [optional] 
**flag_keys** | **string[]** | flagKeys. Either flagIDs, flagKeys or flagTags works. If pass in multiples, Flagr may return duplicate results. | [optional] 
**flag_tags** | **string[]** | flagTags. Either flagIDs, flagKeys or flagTags works. If pass in multiples, Flagr may return duplicate results. | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

