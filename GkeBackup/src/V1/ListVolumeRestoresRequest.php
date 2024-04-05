<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/gkebackup/v1/gkebackup.proto

namespace Google\Cloud\GkeBackup\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Request message for ListVolumeRestores.
 *
 * Generated from protobuf message <code>google.cloud.gkebackup.v1.ListVolumeRestoresRequest</code>
 */
class ListVolumeRestoresRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The Restore that contains the VolumeRestores to list.
     * Format: `projects/&#42;&#47;locations/&#42;&#47;restorePlans/&#42;&#47;restores/&#42;`
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     */
    private $parent = '';
    /**
     * Optional. The target number of results to return in a single response.
     * If not specified, a default value will be chosen by the service.
     * Note that the response may include a partial list and a caller should
     * only rely on the response's
     * [next_page_token][google.cloud.gkebackup.v1.ListVolumeRestoresResponse.next_page_token]
     * to determine if there are more instances left to be queried.
     *
     * Generated from protobuf field <code>int32 page_size = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    private $page_size = 0;
    /**
     * Optional. The value of
     * [next_page_token][google.cloud.gkebackup.v1.ListVolumeRestoresResponse.next_page_token]
     * received from a previous `ListVolumeRestores` call.
     * Provide this to retrieve the subsequent page in a multi-page list of
     * results. When paginating, all other parameters provided to
     * `ListVolumeRestores` must match the call that provided the page token.
     *
     * Generated from protobuf field <code>string page_token = 3 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    private $page_token = '';
    /**
     * Optional. Field match expression used to filter the results.
     *
     * Generated from protobuf field <code>string filter = 4 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    private $filter = '';
    /**
     * Optional. Field by which to sort the results.
     *
     * Generated from protobuf field <code>string order_by = 5 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    private $order_by = '';

    /**
     * @param string $parent Required. The Restore that contains the VolumeRestores to list.
     *                       Format: `projects/&#42;/locations/&#42;/restorePlans/&#42;/restores/*`
     *                       Please see {@see BackupForGKEClient::restoreName()} for help formatting this field.
     *
     * @return \Google\Cloud\GkeBackup\V1\ListVolumeRestoresRequest
     *
     * @experimental
     */
    public static function build(string $parent): self
    {
        return (new self())
            ->setParent($parent);
    }

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $parent
     *           Required. The Restore that contains the VolumeRestores to list.
     *           Format: `projects/&#42;&#47;locations/&#42;&#47;restorePlans/&#42;&#47;restores/&#42;`
     *     @type int $page_size
     *           Optional. The target number of results to return in a single response.
     *           If not specified, a default value will be chosen by the service.
     *           Note that the response may include a partial list and a caller should
     *           only rely on the response's
     *           [next_page_token][google.cloud.gkebackup.v1.ListVolumeRestoresResponse.next_page_token]
     *           to determine if there are more instances left to be queried.
     *     @type string $page_token
     *           Optional. The value of
     *           [next_page_token][google.cloud.gkebackup.v1.ListVolumeRestoresResponse.next_page_token]
     *           received from a previous `ListVolumeRestores` call.
     *           Provide this to retrieve the subsequent page in a multi-page list of
     *           results. When paginating, all other parameters provided to
     *           `ListVolumeRestores` must match the call that provided the page token.
     *     @type string $filter
     *           Optional. Field match expression used to filter the results.
     *     @type string $order_by
     *           Optional. Field by which to sort the results.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Gkebackup\V1\Gkebackup::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. The Restore that contains the VolumeRestores to list.
     * Format: `projects/&#42;&#47;locations/&#42;&#47;restorePlans/&#42;&#47;restores/&#42;`
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getParent()
    {
        return $this->parent;
    }

    /**
     * Required. The Restore that contains the VolumeRestores to list.
     * Format: `projects/&#42;&#47;locations/&#42;&#47;restorePlans/&#42;&#47;restores/&#42;`
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
     * Optional. The target number of results to return in a single response.
     * If not specified, a default value will be chosen by the service.
     * Note that the response may include a partial list and a caller should
     * only rely on the response's
     * [next_page_token][google.cloud.gkebackup.v1.ListVolumeRestoresResponse.next_page_token]
     * to determine if there are more instances left to be queried.
     *
     * Generated from protobuf field <code>int32 page_size = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return int
     */
    public function getPageSize()
    {
        return $this->page_size;
    }

    /**
     * Optional. The target number of results to return in a single response.
     * If not specified, a default value will be chosen by the service.
     * Note that the response may include a partial list and a caller should
     * only rely on the response's
     * [next_page_token][google.cloud.gkebackup.v1.ListVolumeRestoresResponse.next_page_token]
     * to determine if there are more instances left to be queried.
     *
     * Generated from protobuf field <code>int32 page_size = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param int $var
     * @return $this
     */
    public function setPageSize($var)
    {
        GPBUtil::checkInt32($var);
        $this->page_size = $var;

        return $this;
    }

    /**
     * Optional. The value of
     * [next_page_token][google.cloud.gkebackup.v1.ListVolumeRestoresResponse.next_page_token]
     * received from a previous `ListVolumeRestores` call.
     * Provide this to retrieve the subsequent page in a multi-page list of
     * results. When paginating, all other parameters provided to
     * `ListVolumeRestores` must match the call that provided the page token.
     *
     * Generated from protobuf field <code>string page_token = 3 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return string
     */
    public function getPageToken()
    {
        return $this->page_token;
    }

    /**
     * Optional. The value of
     * [next_page_token][google.cloud.gkebackup.v1.ListVolumeRestoresResponse.next_page_token]
     * received from a previous `ListVolumeRestores` call.
     * Provide this to retrieve the subsequent page in a multi-page list of
     * results. When paginating, all other parameters provided to
     * `ListVolumeRestores` must match the call that provided the page token.
     *
     * Generated from protobuf field <code>string page_token = 3 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param string $var
     * @return $this
     */
    public function setPageToken($var)
    {
        GPBUtil::checkString($var, True);
        $this->page_token = $var;

        return $this;
    }

    /**
     * Optional. Field match expression used to filter the results.
     *
     * Generated from protobuf field <code>string filter = 4 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return string
     */
    public function getFilter()
    {
        return $this->filter;
    }

    /**
     * Optional. Field match expression used to filter the results.
     *
     * Generated from protobuf field <code>string filter = 4 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param string $var
     * @return $this
     */
    public function setFilter($var)
    {
        GPBUtil::checkString($var, True);
        $this->filter = $var;

        return $this;
    }

    /**
     * Optional. Field by which to sort the results.
     *
     * Generated from protobuf field <code>string order_by = 5 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return string
     */
    public function getOrderBy()
    {
        return $this->order_by;
    }

    /**
     * Optional. Field by which to sort the results.
     *
     * Generated from protobuf field <code>string order_by = 5 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param string $var
     * @return $this
     */
    public function setOrderBy($var)
    {
        GPBUtil::checkString($var, True);
        $this->order_by = $var;

        return $this;
    }

}

