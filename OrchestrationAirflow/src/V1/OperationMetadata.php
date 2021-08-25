<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/orchestration/airflow/service/v1/operations.proto

namespace Google\Cloud\Orchestration\Airflow\Service\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Metadata describing an operation.
 *
 * Generated from protobuf message <code>google.cloud.orchestration.airflow.service.v1.OperationMetadata</code>
 */
class OperationMetadata extends \Google\Protobuf\Internal\Message
{
    /**
     * Output only. The current operation state.
     *
     * Generated from protobuf field <code>.google.cloud.orchestration.airflow.service.v1.OperationMetadata.State state = 1;</code>
     */
    private $state = 0;
    /**
     * Output only. The type of operation being performed.
     *
     * Generated from protobuf field <code>.google.cloud.orchestration.airflow.service.v1.OperationMetadata.Type operation_type = 2;</code>
     */
    private $operation_type = 0;
    /**
     * Output only. The resource being operated on, as a [relative resource name](
     * /apis/design/resource_names#relative_resource_name).
     *
     * Generated from protobuf field <code>string resource = 3;</code>
     */
    private $resource = '';
    /**
     * Output only. The UUID of the resource being operated on.
     *
     * Generated from protobuf field <code>string resource_uuid = 4;</code>
     */
    private $resource_uuid = '';
    /**
     * Output only. The time the operation was submitted to the server.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp create_time = 5;</code>
     */
    private $create_time = null;
    /**
     * Output only. The time when the operation terminated, regardless of its success.
     * This field is unset if the operation is still ongoing.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp end_time = 6;</code>
     */
    private $end_time = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $state
     *           Output only. The current operation state.
     *     @type int $operation_type
     *           Output only. The type of operation being performed.
     *     @type string $resource
     *           Output only. The resource being operated on, as a [relative resource name](
     *           /apis/design/resource_names#relative_resource_name).
     *     @type string $resource_uuid
     *           Output only. The UUID of the resource being operated on.
     *     @type \Google\Protobuf\Timestamp $create_time
     *           Output only. The time the operation was submitted to the server.
     *     @type \Google\Protobuf\Timestamp $end_time
     *           Output only. The time when the operation terminated, regardless of its success.
     *           This field is unset if the operation is still ongoing.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Orchestration\Airflow\Service\V1\Operations::initOnce();
        parent::__construct($data);
    }

    /**
     * Output only. The current operation state.
     *
     * Generated from protobuf field <code>.google.cloud.orchestration.airflow.service.v1.OperationMetadata.State state = 1;</code>
     * @return int
     */
    public function getState()
    {
        return $this->state;
    }

    /**
     * Output only. The current operation state.
     *
     * Generated from protobuf field <code>.google.cloud.orchestration.airflow.service.v1.OperationMetadata.State state = 1;</code>
     * @param int $var
     * @return $this
     */
    public function setState($var)
    {
        GPBUtil::checkEnum($var, \Google\Cloud\Orchestration\Airflow\Service\V1\OperationMetadata\State::class);
        $this->state = $var;

        return $this;
    }

    /**
     * Output only. The type of operation being performed.
     *
     * Generated from protobuf field <code>.google.cloud.orchestration.airflow.service.v1.OperationMetadata.Type operation_type = 2;</code>
     * @return int
     */
    public function getOperationType()
    {
        return $this->operation_type;
    }

    /**
     * Output only. The type of operation being performed.
     *
     * Generated from protobuf field <code>.google.cloud.orchestration.airflow.service.v1.OperationMetadata.Type operation_type = 2;</code>
     * @param int $var
     * @return $this
     */
    public function setOperationType($var)
    {
        GPBUtil::checkEnum($var, \Google\Cloud\Orchestration\Airflow\Service\V1\OperationMetadata\Type::class);
        $this->operation_type = $var;

        return $this;
    }

    /**
     * Output only. The resource being operated on, as a [relative resource name](
     * /apis/design/resource_names#relative_resource_name).
     *
     * Generated from protobuf field <code>string resource = 3;</code>
     * @return string
     */
    public function getResource()
    {
        return $this->resource;
    }

    /**
     * Output only. The resource being operated on, as a [relative resource name](
     * /apis/design/resource_names#relative_resource_name).
     *
     * Generated from protobuf field <code>string resource = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setResource($var)
    {
        GPBUtil::checkString($var, True);
        $this->resource = $var;

        return $this;
    }

    /**
     * Output only. The UUID of the resource being operated on.
     *
     * Generated from protobuf field <code>string resource_uuid = 4;</code>
     * @return string
     */
    public function getResourceUuid()
    {
        return $this->resource_uuid;
    }

    /**
     * Output only. The UUID of the resource being operated on.
     *
     * Generated from protobuf field <code>string resource_uuid = 4;</code>
     * @param string $var
     * @return $this
     */
    public function setResourceUuid($var)
    {
        GPBUtil::checkString($var, True);
        $this->resource_uuid = $var;

        return $this;
    }

    /**
     * Output only. The time the operation was submitted to the server.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp create_time = 5;</code>
     * @return \Google\Protobuf\Timestamp|null
     */
    public function getCreateTime()
    {
        return isset($this->create_time) ? $this->create_time : null;
    }

    public function hasCreateTime()
    {
        return isset($this->create_time);
    }

    public function clearCreateTime()
    {
        unset($this->create_time);
    }

    /**
     * Output only. The time the operation was submitted to the server.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp create_time = 5;</code>
     * @param \Google\Protobuf\Timestamp $var
     * @return $this
     */
    public function setCreateTime($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->create_time = $var;

        return $this;
    }

    /**
     * Output only. The time when the operation terminated, regardless of its success.
     * This field is unset if the operation is still ongoing.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp end_time = 6;</code>
     * @return \Google\Protobuf\Timestamp|null
     */
    public function getEndTime()
    {
        return isset($this->end_time) ? $this->end_time : null;
    }

    public function hasEndTime()
    {
        return isset($this->end_time);
    }

    public function clearEndTime()
    {
        unset($this->end_time);
    }

    /**
     * Output only. The time when the operation terminated, regardless of its success.
     * This field is unset if the operation is still ongoing.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp end_time = 6;</code>
     * @param \Google\Protobuf\Timestamp $var
     * @return $this
     */
    public function setEndTime($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->end_time = $var;

        return $this;
    }

}

