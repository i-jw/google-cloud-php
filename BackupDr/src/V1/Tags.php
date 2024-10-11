<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/backupdr/v1/backupvault_gce.proto

namespace Google\Cloud\BackupDR\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * A set of instance tags.
 *
 * Generated from protobuf message <code>google.cloud.backupdr.v1.Tags</code>
 */
class Tags extends \Google\Protobuf\Internal\Message
{
    /**
     * Optional. An array of tags. Each tag must be 1-63 characters long, and
     * comply with RFC1035.
     *
     * Generated from protobuf field <code>repeated string items = 1 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    private $items;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type array<string>|\Google\Protobuf\Internal\RepeatedField $items
     *           Optional. An array of tags. Each tag must be 1-63 characters long, and
     *           comply with RFC1035.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Backupdr\V1\BackupvaultGce::initOnce();
        parent::__construct($data);
    }

    /**
     * Optional. An array of tags. Each tag must be 1-63 characters long, and
     * comply with RFC1035.
     *
     * Generated from protobuf field <code>repeated string items = 1 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getItems()
    {
        return $this->items;
    }

    /**
     * Optional. An array of tags. Each tag must be 1-63 characters long, and
     * comply with RFC1035.
     *
     * Generated from protobuf field <code>repeated string items = 1 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param array<string>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setItems($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->items = $arr;

        return $this;
    }

}

