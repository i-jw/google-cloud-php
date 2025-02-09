<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/netapp/v1/kms.proto

namespace Google\Cloud\NetApp\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * CreateKmsConfigRequest creates a KMS Config.
 *
 * Generated from protobuf message <code>google.cloud.netapp.v1.CreateKmsConfigRequest</code>
 */
class CreateKmsConfigRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. Value for parent.
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     */
    protected $parent = '';
    /**
     * Required. Id of the requesting KmsConfig. Must be unique within the parent
     * resource. Must contain only letters, numbers and hyphen, with the first
     * character a letter, the last a letter or a
     * number, and a 63 character maximum.
     *
     * Generated from protobuf field <code>string kms_config_id = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    protected $kms_config_id = '';
    /**
     * Required. The required parameters to create a new KmsConfig.
     *
     * Generated from protobuf field <code>.google.cloud.netapp.v1.KmsConfig kms_config = 3 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    protected $kms_config = null;

    /**
     * @param string                            $parent      Required. Value for parent. Please see
     *                                                       {@see NetAppClient::locationName()} for help formatting this field.
     * @param \Google\Cloud\NetApp\V1\KmsConfig $kmsConfig   Required. The required parameters to create a new KmsConfig.
     * @param string                            $kmsConfigId Required. Id of the requesting KmsConfig. Must be unique within the parent
     *                                                       resource. Must contain only letters, numbers and hyphen, with the first
     *                                                       character a letter, the last a letter or a
     *                                                       number, and a 63 character maximum.
     *
     * @return \Google\Cloud\NetApp\V1\CreateKmsConfigRequest
     *
     * @experimental
     */
    public static function build(string $parent, \Google\Cloud\NetApp\V1\KmsConfig $kmsConfig, string $kmsConfigId): self
    {
        return (new self())
            ->setParent($parent)
            ->setKmsConfig($kmsConfig)
            ->setKmsConfigId($kmsConfigId);
    }

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $parent
     *           Required. Value for parent.
     *     @type string $kms_config_id
     *           Required. Id of the requesting KmsConfig. Must be unique within the parent
     *           resource. Must contain only letters, numbers and hyphen, with the first
     *           character a letter, the last a letter or a
     *           number, and a 63 character maximum.
     *     @type \Google\Cloud\NetApp\V1\KmsConfig $kms_config
     *           Required. The required parameters to create a new KmsConfig.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Netapp\V1\Kms::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. Value for parent.
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getParent()
    {
        return $this->parent;
    }

    /**
     * Required. Value for parent.
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @param string $var
     * @return $this
     */
    public function setParent($var)
    {
        GPBUtil::checkString($var, True);
        $this->parent = $var;

        return $this;
    }

    /**
     * Required. Id of the requesting KmsConfig. Must be unique within the parent
     * resource. Must contain only letters, numbers and hyphen, with the first
     * character a letter, the last a letter or a
     * number, and a 63 character maximum.
     *
     * Generated from protobuf field <code>string kms_config_id = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return string
     */
    public function getKmsConfigId()
    {
        return $this->kms_config_id;
    }

    /**
     * Required. Id of the requesting KmsConfig. Must be unique within the parent
     * resource. Must contain only letters, numbers and hyphen, with the first
     * character a letter, the last a letter or a
     * number, and a 63 character maximum.
     *
     * Generated from protobuf field <code>string kms_config_id = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param string $var
     * @return $this
     */
    public function setKmsConfigId($var)
    {
        GPBUtil::checkString($var, True);
        $this->kms_config_id = $var;

        return $this;
    }

    /**
     * Required. The required parameters to create a new KmsConfig.
     *
     * Generated from protobuf field <code>.google.cloud.netapp.v1.KmsConfig kms_config = 3 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return \Google\Cloud\NetApp\V1\KmsConfig|null
     */
    public function getKmsConfig()
    {
        return $this->kms_config;
    }

    public function hasKmsConfig()
    {
        return isset($this->kms_config);
    }

    public function clearKmsConfig()
    {
        unset($this->kms_config);
    }

    /**
     * Required. The required parameters to create a new KmsConfig.
     *
     * Generated from protobuf field <code>.google.cloud.netapp.v1.KmsConfig kms_config = 3 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param \Google\Cloud\NetApp\V1\KmsConfig $var
     * @return $this
     */
    public function setKmsConfig($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\NetApp\V1\KmsConfig::class);
        $this->kms_config = $var;

        return $this;
    }

}

