<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/video/livestream/v1/service.proto

namespace Google\Cloud\Video\LiveStream\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Request message for "LivestreamService.ListInputs".
 *
 * Generated from protobuf message <code>google.cloud.video.livestream.v1.ListInputsRequest</code>
 */
class ListInputsRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The parent location for the resource, in the form of:
     * `projects/{project}/locations/{location}`.
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     */
    protected $parent = '';
    /**
     * The maximum number of items to return. If unspecified, server
     * will pick an appropriate default. Server may return fewer items than
     * requested. A caller should only rely on response's
     * [next_page_token][google.cloud.video.livestream.v1.ListInputsResponse.next_page_token] to
     * determine if there are more items left to be queried.
     *
     * Generated from protobuf field <code>int32 page_size = 2;</code>
     */
    protected $page_size = 0;
    /**
     * The next_page_token value returned from a previous List request, if any.
     *
     * Generated from protobuf field <code>string page_token = 3;</code>
     */
    protected $page_token = '';
    /**
     * The filter to apply to list results.
     *
     * Generated from protobuf field <code>string filter = 4;</code>
     */
    protected $filter = '';
    /**
     * Specifies the ordering of results following syntax at [Sorting
     * Order](https://cloud.google.com/apis/design/design_patterns#sorting_order).
     *
     * Generated from protobuf field <code>string order_by = 5;</code>
     */
    protected $order_by = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $parent
     *           Required. The parent location for the resource, in the form of:
     *           `projects/{project}/locations/{location}`.
     *     @type int $page_size
     *           The maximum number of items to return. If unspecified, server
     *           will pick an appropriate default. Server may return fewer items than
     *           requested. A caller should only rely on response's
     *           [next_page_token][google.cloud.video.livestream.v1.ListInputsResponse.next_page_token] to
     *           determine if there are more items left to be queried.
     *     @type string $page_token
     *           The next_page_token value returned from a previous List request, if any.
     *     @type string $filter
     *           The filter to apply to list results.
     *     @type string $order_by
     *           Specifies the ordering of results following syntax at [Sorting
     *           Order](https://cloud.google.com/apis/design/design_patterns#sorting_order).
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Video\Livestream\V1\Service::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. The parent location for the resource, in the form of:
     * `projects/{project}/locations/{location}`.
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getParent()
    {
        return $this->parent;
    }

    /**
     * Required. The parent location for the resource, in the form of:
     * `projects/{project}/locations/{location}`.
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
     * The maximum number of items to return. If unspecified, server
     * will pick an appropriate default. Server may return fewer items than
     * requested. A caller should only rely on response's
     * [next_page_token][google.cloud.video.livestream.v1.ListInputsResponse.next_page_token] to
     * determine if there are more items left to be queried.
     *
     * Generated from protobuf field <code>int32 page_size = 2;</code>
     * @return int
     */
    public function getPageSize()
    {
        return $this->page_size;
    }

    /**
     * The maximum number of items to return. If unspecified, server
     * will pick an appropriate default. Server may return fewer items than
     * requested. A caller should only rely on response's
     * [next_page_token][google.cloud.video.livestream.v1.ListInputsResponse.next_page_token] to
     * determine if there are more items left to be queried.
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
     * The next_page_token value returned from a previous List request, if any.
     *
     * Generated from protobuf field <code>string page_token = 3;</code>
     * @return string
     */
    public function getPageToken()
    {
        return $this->page_token;
    }

    /**
     * The next_page_token value returned from a previous List request, if any.
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
     * The filter to apply to list results.
     *
     * Generated from protobuf field <code>string filter = 4;</code>
     * @return string
     */
    public function getFilter()
    {
        return $this->filter;
    }

    /**
     * The filter to apply to list results.
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

    /**
     * Specifies the ordering of results following syntax at [Sorting
     * Order](https://cloud.google.com/apis/design/design_patterns#sorting_order).
     *
     * Generated from protobuf field <code>string order_by = 5;</code>
     * @return string
     */
    public function getOrderBy()
    {
        return $this->order_by;
    }

    /**
     * Specifies the ordering of results following syntax at [Sorting
     * Order](https://cloud.google.com/apis/design/design_patterns#sorting_order).
     *
     * Generated from protobuf field <code>string order_by = 5;</code>
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

