<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/dialogflow/v2/gcs.proto

namespace GPBMetadata\Google\Cloud\Dialogflow\V2;

class Gcs
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Google\Api\FieldBehavior::initOnce();
        \GPBMetadata\Google\Api\Annotations::initOnce();
        $pool->internalAddGeneratedFile(
            '
�
$google/cloud/dialogflow/v2/gcs.protogoogle.cloud.dialogflow.v2google/api/annotations.proto"
GcsDestination
uri (	B�
com.google.cloud.dialogflow.v2BGcsProtoPZDgoogle.golang.org/genproto/googleapis/cloud/dialogflow/v2;dialogflow��DF�Google.Cloud.Dialogflow.V2bproto3'
        , true);

        static::$is_initialized = true;
    }
}

