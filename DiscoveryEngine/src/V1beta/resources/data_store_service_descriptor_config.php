<?php

return [
    'interfaces' => [
        'google.cloud.discoveryengine.v1beta.DataStoreService' => [
            'CreateDataStore' => [
                'longRunning' => [
                    'operationReturnType' => '\Google\Cloud\DiscoveryEngine\V1beta\DataStore',
                    'metadataReturnType' => '\Google\Cloud\DiscoveryEngine\V1beta\CreateDataStoreMetadata',
                    'initialPollDelayMillis' => '500',
                    'pollDelayMultiplier' => '1.5',
                    'maxPollDelayMillis' => '5000',
                    'totalPollTimeoutMillis' => '300000',
                ],
                'callType' => \Google\ApiCore\Call::LONGRUNNING_CALL,
                'headerParams' => [
                    [
                        'keyName' => 'parent',
                        'fieldAccessors' => [
                            'getParent',
                        ],
                    ],
                ],
            ],
            'DeleteDataStore' => [
                'longRunning' => [
                    'operationReturnType' => '\Google\Protobuf\GPBEmpty',
                    'metadataReturnType' => '\Google\Cloud\DiscoveryEngine\V1beta\DeleteDataStoreMetadata',
                    'initialPollDelayMillis' => '500',
                    'pollDelayMultiplier' => '1.5',
                    'maxPollDelayMillis' => '5000',
                    'totalPollTimeoutMillis' => '300000',
                ],
                'callType' => \Google\ApiCore\Call::LONGRUNNING_CALL,
                'headerParams' => [
                    [
                        'keyName' => 'name',
                        'fieldAccessors' => [
                            'getName',
                        ],
                    ],
                ],
            ],
            'GetDataStore' => [
                'callType' => \Google\ApiCore\Call::UNARY_CALL,
                'responseType' => 'Google\Cloud\DiscoveryEngine\V1beta\DataStore',
                'headerParams' => [
                    [
                        'keyName' => 'name',
                        'fieldAccessors' => [
                            'getName',
                        ],
                    ],
                ],
            ],
            'ListDataStores' => [
                'pageStreaming' => [
                    'requestPageTokenGetMethod' => 'getPageToken',
                    'requestPageTokenSetMethod' => 'setPageToken',
                    'requestPageSizeGetMethod' => 'getPageSize',
                    'requestPageSizeSetMethod' => 'setPageSize',
                    'responsePageTokenGetMethod' => 'getNextPageToken',
                    'resourcesGetMethod' => 'getDataStores',
                ],
                'callType' => \Google\ApiCore\Call::PAGINATED_CALL,
                'responseType' => 'Google\Cloud\DiscoveryEngine\V1beta\ListDataStoresResponse',
                'headerParams' => [
                    [
                        'keyName' => 'parent',
                        'fieldAccessors' => [
                            'getParent',
                        ],
                    ],
                ],
            ],
            'UpdateDataStore' => [
                'callType' => \Google\ApiCore\Call::UNARY_CALL,
                'responseType' => 'Google\Cloud\DiscoveryEngine\V1beta\DataStore',
                'headerParams' => [
                    [
                        'keyName' => 'data_store.name',
                        'fieldAccessors' => [
                            'getDataStore',
                            'getName',
                        ],
                    ],
                ],
            ],
            'templateMap' => [
                'collection' => 'projects/{project}/locations/{location}/collections/{collection}',
                'dataStore' => 'projects/{project}/locations/{location}/dataStores/{data_store}',
                'documentProcessingConfig' => 'projects/{project}/locations/{location}/dataStores/{data_store}/documentProcessingConfig',
                'projectLocationCollectionDataStore' => 'projects/{project}/locations/{location}/collections/{collection}/dataStores/{data_store}',
                'projectLocationCollectionDataStoreDocumentProcessingConfig' => 'projects/{project}/locations/{location}/collections/{collection}/dataStores/{data_store}/documentProcessingConfig',
                'projectLocationCollectionDataStoreSchema' => 'projects/{project}/locations/{location}/collections/{collection}/dataStores/{data_store}/schemas/{schema}',
                'projectLocationDataStore' => 'projects/{project}/locations/{location}/dataStores/{data_store}',
                'projectLocationDataStoreDocumentProcessingConfig' => 'projects/{project}/locations/{location}/dataStores/{data_store}/documentProcessingConfig',
                'projectLocationDataStoreSchema' => 'projects/{project}/locations/{location}/dataStores/{data_store}/schemas/{schema}',
                'schema' => 'projects/{project}/locations/{location}/dataStores/{data_store}/schemas/{schema}',
            ],
        ],
    ],
];
