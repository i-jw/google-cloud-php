<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/aiplatform/v1/index_endpoint_service.proto

namespace GPBMetadata\Google\Cloud\Aiplatform\V1;

class IndexEndpointService
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Google\Api\Annotations::initOnce();
        \GPBMetadata\Google\Api\Client::initOnce();
        \GPBMetadata\Google\Api\FieldBehavior::initOnce();
        \GPBMetadata\Google\Api\Resource::initOnce();
        \GPBMetadata\Google\Cloud\Aiplatform\V1\IndexEndpoint::initOnce();
        \GPBMetadata\Google\Cloud\Aiplatform\V1\Operation::initOnce();
        \GPBMetadata\Google\Longrunning\Operations::initOnce();
        \GPBMetadata\Google\Protobuf\GPBEmpty::initOnce();
        \GPBMetadata\Google\Protobuf\FieldMask::initOnce();
        $pool->internalAddGeneratedFile(
            '
�$
7google/cloud/aiplatform/v1/index_endpoint_service.protogoogle.cloud.aiplatform.v1google/api/client.protogoogle/api/field_behavior.protogoogle/api/resource.proto/google/cloud/aiplatform/v1/index_endpoint.proto*google/cloud/aiplatform/v1/operation.proto#google/longrunning/operations.protogoogle/protobuf/empty.proto google/protobuf/field_mask.proto"�
CreateIndexEndpointRequest9
parent (	B)�A�A#
!locations.googleapis.com/LocationF
index_endpoint (2).google.cloud.aiplatform.v1.IndexEndpointB�A"v
$CreateIndexEndpointOperationMetadataN
generic_metadata (24.google.cloud.aiplatform.v1.GenericOperationMetadata"X
GetIndexEndpointRequest=
name (	B/�A�A)
\'aiplatform.googleapis.com/IndexEndpoint"�
ListIndexEndpointsRequest9
parent (	B)�A�A#
!locations.googleapis.com/Location
filter (	B�A
	page_size (B�A

page_token (	B�A2
	read_mask (2.google.protobuf.FieldMaskB�A"y
ListIndexEndpointsResponseB
index_endpoints (2).google.cloud.aiplatform.v1.IndexEndpoint
next_page_token (	"�
UpdateIndexEndpointRequestF
index_endpoint (2).google.cloud.aiplatform.v1.IndexEndpointB�A4
update_mask (2.google.protobuf.FieldMaskB�A"[
DeleteIndexEndpointRequest=
name (	B/�A�A)
\'aiplatform.googleapis.com/IndexEndpoint"�
DeployIndexRequestG
index_endpoint (	B/�A�A)
\'aiplatform.googleapis.com/IndexEndpointF
deployed_index (2).google.cloud.aiplatform.v1.DeployedIndexB�A"X
DeployIndexResponseA
deployed_index (2).google.cloud.aiplatform.v1.DeployedIndex"�
DeployIndexOperationMetadataN
generic_metadata (24.google.cloud.aiplatform.v1.GenericOperationMetadata
deployed_index_id (	"
UndeployIndexRequestG
index_endpoint (	B/�A�A)
\'aiplatform.googleapis.com/IndexEndpoint
deployed_index_id (	B�A"
UndeployIndexResponse"p
UndeployIndexOperationMetadataN
generic_metadata (24.google.cloud.aiplatform.v1.GenericOperationMetadata"�
MutateDeployedIndexRequestG
index_endpoint (	B/�A�A)
\'aiplatform.googleapis.com/IndexEndpointF
deployed_index (2).google.cloud.aiplatform.v1.DeployedIndexB�A"`
MutateDeployedIndexResponseA
deployed_index (2).google.cloud.aiplatform.v1.DeployedIndex"�
$MutateDeployedIndexOperationMetadataN
generic_metadata (24.google.cloud.aiplatform.v1.GenericOperationMetadata
deployed_index_id (	2�
IndexEndpointService�
CreateIndexEndpoint6.google.cloud.aiplatform.v1.CreateIndexEndpointRequest.google.longrunning.Operation"��A5
IndexEndpoint$CreateIndexEndpointOperationMetadata�Aparent,index_endpoint���D"2/v1/{parent=projects/*/locations/*}/indexEndpoints:index_endpoint�
GetIndexEndpoint3.google.cloud.aiplatform.v1.GetIndexEndpointRequest).google.cloud.aiplatform.v1.IndexEndpoint"A�Aname���42/v1/{name=projects/*/locations/*/indexEndpoints/*}�
ListIndexEndpoints5.google.cloud.aiplatform.v1.ListIndexEndpointsRequest6.google.cloud.aiplatform.v1.ListIndexEndpointsResponse"C�Aparent���42/v1/{parent=projects/*/locations/*}/indexEndpoints�
UpdateIndexEndpoint6.google.cloud.aiplatform.v1.UpdateIndexEndpointRequest).google.cloud.aiplatform.v1.IndexEndpoint"v�Aindex_endpoint,update_mask���S2A/v1/{index_endpoint.name=projects/*/locations/*/indexEndpoints/*}:index_endpoint�
DeleteIndexEndpoint6.google.cloud.aiplatform.v1.DeleteIndexEndpointRequest.google.longrunning.Operation"t�A0
google.protobuf.EmptyDeleteOperationMetadata�Aname���4*2/v1/{name=projects/*/locations/*/indexEndpoints/*}�
DeployIndex..google.cloud.aiplatform.v1.DeployIndexRequest.google.longrunning.Operation"��A3
DeployIndexResponseDeployIndexOperationMetadata�Aindex_endpoint,deployed_index���M"H/v1/{index_endpoint=projects/*/locations/*/indexEndpoints/*}:deployIndex:*�
UndeployIndex0.google.cloud.aiplatform.v1.UndeployIndexRequest.google.longrunning.Operation"��A7
UndeployIndexResponseUndeployIndexOperationMetadata�A index_endpoint,deployed_index_id���O"J/v1/{index_endpoint=projects/*/locations/*/indexEndpoints/*}:undeployIndex:*�
MutateDeployedIndex6.google.cloud.aiplatform.v1.MutateDeployedIndexRequest.google.longrunning.Operation"��AC
MutateDeployedIndexResponse$MutateDeployedIndexOperationMetadata�Aindex_endpoint,deployed_index���b"P/v1/{index_endpoint=projects/*/locations/*/indexEndpoints/*}:mutateDeployedIndex:deployed_indexM�Aaiplatform.googleapis.com�A.https://www.googleapis.com/auth/cloud-platformB�
com.google.cloud.aiplatform.v1BIndexEndpointServiceProtoPZ>cloud.google.com/go/aiplatform/apiv1/aiplatformpb;aiplatformpb�Google.Cloud.AIPlatform.V1�Google\\Cloud\\AIPlatform\\V1�Google::Cloud::AIPlatform::V1bproto3'
        , true);

        static::$is_initialized = true;
    }
}

