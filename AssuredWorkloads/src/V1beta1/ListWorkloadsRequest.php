<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/assuredworkloads/v1beta1/assuredworkloads.proto

namespace Google\Cloud\AssuredWorkloads\V1beta1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Request for fetching workloads in an organization.
 *
 * Generated from protobuf message <code>google.cloud.assuredworkloads.v1beta1.ListWorkloadsRequest</code>
 */
class ListWorkloadsRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. Parent Resource to list workloads from.
     * Must be of the form `organizations/{org_id}/locations/{location}`.
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     */
    protected $parent = '';
    /**
     * Page size.
     *
     * Generated from protobuf field <code>int32 page_size = 2;</code>
     */
    protected $page_size = 0;
    /**
     * Page token returned from previous request. Page token contains context from
     * previous request. Page token needs to be passed in the second and following
     * requests.
     *
     * Generated from protobuf field <code>string page_token = 3;</code>
     */
    protected $page_token = '';
    /**
     * A custom filter for filtering by properties of a workload. At this time,
     * only filtering by labels is supported.
     *
     * Generated from protobuf field <code>string filter = 4;</code>
     */
    protected $filter = '';

    /**
     * @param string $parent Required. Parent Resource to list workloads from.
     *                       Must be of the form `organizations/{org_id}/locations/{location}`. Please see
     *                       {@see AssuredWorkloadsServiceClient::locationName()} for help formatting this field.
     *
     * @return \Google\Cloud\AssuredWorkloads\V1beta1\ListWorkloadsRequest
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
     *           Required. Parent Resource to list workloads from.
     *           Must be of the form `organizations/{org_id}/locations/{location}`.
     *     @type int $page_size
     *           Page size.
     *     @type string $page_token
     *           Page token returned from previous request. Page token contains context from
     *           previous request. Page token needs to be passed in the second and following
     *           requests.
     *     @type string $filter
     *           A custom filter for filtering by properties of a workload. At this time,
     *           only filtering by labels is supported.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Assuredworkloads\V1Beta1\Assuredworkloads::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. Parent Resource to list workloads from.
     * Must be of the form `organizations/{org_id}/locations/{location}`.
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getParent()
    {
        return $this->parent;
    }

    /**
     * Required. Parent Resource to list workloads from.
     * Must be of the form `organizations/{org_id}/locations/{location}`.
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
     * Page size.
     *
     * Generated from protobuf field <code>int32 page_size = 2;</code>
     * @return int
     */
    public function getPageSize()
    {
        return $this->page_size;
    }

    /**
     * Page size.
     *
     * Generated from protobuf field <code>int32 page_size = 2;</code>
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
     * Page token returned from previous request. Page token contains context from
     * previous request. Page token needs to be passed in the second and following
     * requests.
     *
     * Generated from protobuf field <code>string page_token = 3;</code>
     * @return string
     */
    public function getPageToken()
    {
        return $this->page_token;
    }

    /**
     * Page token returned from previous request. Page token contains context from
     * previous request. Page token needs to be passed in the second and following
     * requests.
     *
     * Generated from protobuf field <code>string page_token = 3;</code>
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
     * A custom filter for filtering by properties of a workload. At this time,
     * only filtering by labels is supported.
     *
     * Generated from protobuf field <code>string filter = 4;</code>
     * @return string
     */
    public function getFilter()
    {
        return $this->filter;
    }

    /**
     * A custom filter for filtering by properties of a workload. At this time,
     * only filtering by labels is supported.
     *
     * Generated from protobuf field <code>string filter = 4;</code>
     * @param string $var
     * @return $this
     */
    public function setFilter($var)
    {
        GPBUtil::checkString($var, True);
        $this->filter = $var;

        return $this;
    }

}

