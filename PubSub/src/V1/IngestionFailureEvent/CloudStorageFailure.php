<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/pubsub/v1/pubsub.proto

namespace Google\Cloud\PubSub\V1\IngestionFailureEvent;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Failure when ingesting from a Cloud Storage source.
 *
 * Generated from protobuf message <code>google.pubsub.v1.IngestionFailureEvent.CloudStorageFailure</code>
 */
class CloudStorageFailure extends \Google\Protobuf\Internal\Message
{
    /**
     * Optional. Name of the Cloud Storage bucket used for ingestion.
     *
     * Generated from protobuf field <code>string bucket = 1 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    private $bucket = '';
    /**
     * Optional. Name of the Cloud Storage object which contained the section
     * that couldn't be ingested.
     *
     * Generated from protobuf field <code>string object_name = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    private $object_name = '';
    /**
     * Optional. Generation of the Cloud Storage object which contained the
     * section that couldn't be ingested.
     *
     * Generated from protobuf field <code>int64 object_generation = 3 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    private $object_generation = 0;
    protected $reason;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $bucket
     *           Optional. Name of the Cloud Storage bucket used for ingestion.
     *     @type string $object_name
     *           Optional. Name of the Cloud Storage object which contained the section
     *           that couldn't be ingested.
     *     @type int|string $object_generation
     *           Optional. Generation of the Cloud Storage object which contained the
     *           section that couldn't be ingested.
     *     @type \Google\Cloud\PubSub\V1\IngestionFailureEvent\AvroFailureReason $avro_failure_reason
     *           Optional. Failure encountered when parsing an Avro file.
     *     @type \Google\Cloud\PubSub\V1\IngestionFailureEvent\ApiViolationReason $api_violation_reason
     *           Optional. The Pub/Sub API limits prevented the desired message from
     *           being published.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Pubsub\V1\Pubsub::initOnce();
        parent::__construct($data);
    }

    /**
     * Optional. Name of the Cloud Storage bucket used for ingestion.
     *
     * Generated from protobuf field <code>string bucket = 1 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return string
     */
    public function getBucket()
    {
        return $this->bucket;
    }

    /**
     * Optional. Name of the Cloud Storage bucket used for ingestion.
     *
     * Generated from protobuf field <code>string bucket = 1 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param string $var
     * @return $this
     */
    public function setBucket($var)
    {
        GPBUtil::checkString($var, True);
        $this->bucket = $var;

        return $this;
    }

    /**
     * Optional. Name of the Cloud Storage object which contained the section
     * that couldn't be ingested.
     *
     * Generated from protobuf field <code>string object_name = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return string
     */
    public function getObjectName()
    {
        return $this->object_name;
    }

    /**
     * Optional. Name of the Cloud Storage object which contained the section
     * that couldn't be ingested.
     *
     * Generated from protobuf field <code>string object_name = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param string $var
     * @return $this
     */
    public function setObjectName($var)
    {
        GPBUtil::checkString($var, True);
        $this->object_name = $var;

        return $this;
    }

    /**
     * Optional. Generation of the Cloud Storage object which contained the
     * section that couldn't be ingested.
     *
     * Generated from protobuf field <code>int64 object_generation = 3 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return int|string
     */
    public function getObjectGeneration()
    {
        return $this->object_generation;
    }

    /**
     * Optional. Generation of the Cloud Storage object which contained the
     * section that couldn't be ingested.
     *
     * Generated from protobuf field <code>int64 object_generation = 3 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param int|string $var
     * @return $this
     */
    public function setObjectGeneration($var)
    {
        GPBUtil::checkInt64($var);
        $this->object_generation = $var;

        return $this;
    }

    /**
     * Optional. Failure encountered when parsing an Avro file.
     *
     * Generated from protobuf field <code>.google.pubsub.v1.IngestionFailureEvent.AvroFailureReason avro_failure_reason = 5 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return \Google\Cloud\PubSub\V1\IngestionFailureEvent\AvroFailureReason|null
     */
    public function getAvroFailureReason()
    {
        return $this->readOneof(5);
    }

    public function hasAvroFailureReason()
    {
        return $this->hasOneof(5);
    }

    /**
     * Optional. Failure encountered when parsing an Avro file.
     *
     * Generated from protobuf field <code>.google.pubsub.v1.IngestionFailureEvent.AvroFailureReason avro_failure_reason = 5 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param \Google\Cloud\PubSub\V1\IngestionFailureEvent\AvroFailureReason $var
     * @return $this
     */
    public function setAvroFailureReason($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\PubSub\V1\IngestionFailureEvent\AvroFailureReason::class);
        $this->writeOneof(5, $var);

        return $this;
    }

    /**
     * Optional. The Pub/Sub API limits prevented the desired message from
     * being published.
     *
     * Generated from protobuf field <code>.google.pubsub.v1.IngestionFailureEvent.ApiViolationReason api_violation_reason = 6 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return \Google\Cloud\PubSub\V1\IngestionFailureEvent\ApiViolationReason|null
     */
    public function getApiViolationReason()
    {
        return $this->readOneof(6);
    }

    public function hasApiViolationReason()
    {
        return $this->hasOneof(6);
    }

    /**
     * Optional. The Pub/Sub API limits prevented the desired message from
     * being published.
     *
     * Generated from protobuf field <code>.google.pubsub.v1.IngestionFailureEvent.ApiViolationReason api_violation_reason = 6 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param \Google\Cloud\PubSub\V1\IngestionFailureEvent\ApiViolationReason $var
     * @return $this
     */
    public function setApiViolationReason($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\PubSub\V1\IngestionFailureEvent\ApiViolationReason::class);
        $this->writeOneof(6, $var);

        return $this;
    }

    /**
     * @return string
     */
    public function getReason()
    {
        return $this->whichOneof("reason");
    }

}


