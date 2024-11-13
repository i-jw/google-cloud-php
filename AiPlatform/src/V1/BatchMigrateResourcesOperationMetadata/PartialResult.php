<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/aiplatform/v1/migration_service.proto

namespace Google\Cloud\AIPlatform\V1\BatchMigrateResourcesOperationMetadata;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Represents a partial result in batch migration operation for one
 * [MigrateResourceRequest][google.cloud.aiplatform.v1.MigrateResourceRequest].
 *
 * Generated from protobuf message <code>google.cloud.aiplatform.v1.BatchMigrateResourcesOperationMetadata.PartialResult</code>
 */
class PartialResult extends \Google\Protobuf\Internal\Message
{
    /**
     * It's the same as the value in
     * [BatchMigrateResourcesRequest.migrate_resource_requests][google.cloud.aiplatform.v1.BatchMigrateResourcesRequest.migrate_resource_requests].
     *
     * Generated from protobuf field <code>.google.cloud.aiplatform.v1.MigrateResourceRequest request = 1;</code>
     */
    protected $request = null;
    protected $result;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Rpc\Status $error
     *           The error result of the migration request in case of failure.
     *     @type string $model
     *           Migrated model resource name.
     *     @type string $dataset
     *           Migrated dataset resource name.
     *     @type \Google\Cloud\AIPlatform\V1\MigrateResourceRequest $request
     *           It's the same as the value in
     *           [BatchMigrateResourcesRequest.migrate_resource_requests][google.cloud.aiplatform.v1.BatchMigrateResourcesRequest.migrate_resource_requests].
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Aiplatform\V1\MigrationService::initOnce();
        parent::__construct($data);
    }

    /**
     * The error result of the migration request in case of failure.
     *
     * Generated from protobuf field <code>.google.rpc.Status error = 2;</code>
     * @return \Google\Rpc\Status|null
     */
    public function getError()
    {
        return $this->readOneof(2);
    }

    public function hasError()
    {
        return $this->hasOneof(2);
    }

    /**
     * The error result of the migration request in case of failure.
     *
     * Generated from protobuf field <code>.google.rpc.Status error = 2;</code>
     * @param \Google\Rpc\Status $var
     * @return $this
     */
    public function setError($var)
    {
        GPBUtil::checkMessage($var, \Google\Rpc\Status::class);
        $this->writeOneof(2, $var);

        return $this;
    }

    /**
     * Migrated model resource name.
     *
     * Generated from protobuf field <code>string model = 3 [(.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getModel()
    {
        return $this->readOneof(3);
    }

    public function hasModel()
    {
        return $this->hasOneof(3);
    }

    /**
     * Migrated model resource name.
     *
     * Generated from protobuf field <code>string model = 3 [(.google.api.resource_reference) = {</code>
     * @param string $var
     * @return $this
     */
    public function setModel($var)
    {
        GPBUtil::checkString($var, True);
        $this->writeOneof(3, $var);

        return $this;
    }

    /**
     * Migrated dataset resource name.
     *
     * Generated from protobuf field <code>string dataset = 4 [(.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getDataset()
    {
        return $this->readOneof(4);
    }

    public function hasDataset()
    {
        return $this->hasOneof(4);
    }

    /**
     * Migrated dataset resource name.
     *
     * Generated from protobuf field <code>string dataset = 4 [(.google.api.resource_reference) = {</code>
     * @param string $var
     * @return $this
     */
    public function setDataset($var)
    {
        GPBUtil::checkString($var, True);
        $this->writeOneof(4, $var);

        return $this;
    }

    /**
     * It's the same as the value in
     * [BatchMigrateResourcesRequest.migrate_resource_requests][google.cloud.aiplatform.v1.BatchMigrateResourcesRequest.migrate_resource_requests].
     *
     * Generated from protobuf field <code>.google.cloud.aiplatform.v1.MigrateResourceRequest request = 1;</code>
     * @return \Google\Cloud\AIPlatform\V1\MigrateResourceRequest|null
     */
    public function getRequest()
    {
        return $this->request;
    }

    public function hasRequest()
    {
        return isset($this->request);
    }

    public function clearRequest()
    {
        unset($this->request);
    }

    /**
     * It's the same as the value in
     * [BatchMigrateResourcesRequest.migrate_resource_requests][google.cloud.aiplatform.v1.BatchMigrateResourcesRequest.migrate_resource_requests].
     *
     * Generated from protobuf field <code>.google.cloud.aiplatform.v1.MigrateResourceRequest request = 1;</code>
     * @param \Google\Cloud\AIPlatform\V1\MigrateResourceRequest $var
     * @return $this
     */
    public function setRequest($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\AIPlatform\V1\MigrateResourceRequest::class);
        $this->request = $var;

        return $this;
    }

    /**
     * @return string
     */
    public function getResult()
    {
        return $this->whichOneof("result");
    }

}


