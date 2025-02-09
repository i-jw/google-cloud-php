<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/securitycentermanagement/v1/security_center_management.proto

namespace Google\Cloud\SecurityCenterManagement\V1\SimulateSecurityHealthAnalyticsCustomModuleRequest;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Manually constructed information about a resource.
 *
 * Generated from protobuf message <code>google.cloud.securitycentermanagement.v1.SimulateSecurityHealthAnalyticsCustomModuleRequest.SimulatedResource</code>
 */
class SimulatedResource extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The type of the resource. For example,
     * `compute.googleapis.com/Disk`.
     *
     * Generated from protobuf field <code>string resource_type = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    protected $resource_type = '';
    /**
     * Optional. A representation of the Google Cloud resource. Should match the
     * Google Cloud resource JSON format.
     * If the custom module evaluates only the IAM allow policy, then you can
     * omit this field.
     *
     * Generated from protobuf field <code>.google.protobuf.Struct resource_data = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    protected $resource_data = null;
    /**
     * Optional. A representation of the IAM allow policy.
     * If the custom module evaluates only the resource data, then you can omit
     * this field.
     *
     * Generated from protobuf field <code>.google.iam.v1.Policy iam_policy_data = 3 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    protected $iam_policy_data = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $resource_type
     *           Required. The type of the resource. For example,
     *           `compute.googleapis.com/Disk`.
     *     @type \Google\Protobuf\Struct $resource_data
     *           Optional. A representation of the Google Cloud resource. Should match the
     *           Google Cloud resource JSON format.
     *           If the custom module evaluates only the IAM allow policy, then you can
     *           omit this field.
     *     @type \Google\Cloud\Iam\V1\Policy $iam_policy_data
     *           Optional. A representation of the IAM allow policy.
     *           If the custom module evaluates only the resource data, then you can omit
     *           this field.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Securitycentermanagement\V1\SecurityCenterManagement::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. The type of the resource. For example,
     * `compute.googleapis.com/Disk`.
     *
     * Generated from protobuf field <code>string resource_type = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return string
     */
    public function getResourceType()
    {
        return $this->resource_type;
    }

    /**
     * Required. The type of the resource. For example,
     * `compute.googleapis.com/Disk`.
     *
     * Generated from protobuf field <code>string resource_type = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param string $var
     * @return $this
     */
    public function setResourceType($var)
    {
        GPBUtil::checkString($var, True);
        $this->resource_type = $var;

        return $this;
    }

    /**
     * Optional. A representation of the Google Cloud resource. Should match the
     * Google Cloud resource JSON format.
     * If the custom module evaluates only the IAM allow policy, then you can
     * omit this field.
     *
     * Generated from protobuf field <code>.google.protobuf.Struct resource_data = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return \Google\Protobuf\Struct|null
     */
    public function getResourceData()
    {
        return $this->resource_data;
    }

    public function hasResourceData()
    {
        return isset($this->resource_data);
    }

    public function clearResourceData()
    {
        unset($this->resource_data);
    }

    /**
     * Optional. A representation of the Google Cloud resource. Should match the
     * Google Cloud resource JSON format.
     * If the custom module evaluates only the IAM allow policy, then you can
     * omit this field.
     *
     * Generated from protobuf field <code>.google.protobuf.Struct resource_data = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param \Google\Protobuf\Struct $var
     * @return $this
     */
    public function setResourceData($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Struct::class);
        $this->resource_data = $var;

        return $this;
    }

    /**
     * Optional. A representation of the IAM allow policy.
     * If the custom module evaluates only the resource data, then you can omit
     * this field.
     *
     * Generated from protobuf field <code>.google.iam.v1.Policy iam_policy_data = 3 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return \Google\Cloud\Iam\V1\Policy|null
     */
    public function getIamPolicyData()
    {
        return $this->iam_policy_data;
    }

    public function hasIamPolicyData()
    {
        return isset($this->iam_policy_data);
    }

    public function clearIamPolicyData()
    {
        unset($this->iam_policy_data);
    }

    /**
     * Optional. A representation of the IAM allow policy.
     * If the custom module evaluates only the resource data, then you can omit
     * this field.
     *
     * Generated from protobuf field <code>.google.iam.v1.Policy iam_policy_data = 3 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param \Google\Cloud\Iam\V1\Policy $var
     * @return $this
     */
    public function setIamPolicyData($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Iam\V1\Policy::class);
        $this->iam_policy_data = $var;

        return $this;
    }

}


