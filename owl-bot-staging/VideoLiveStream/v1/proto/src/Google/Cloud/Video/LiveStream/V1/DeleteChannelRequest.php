<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/video/livestream/v1/service.proto

namespace Google\Cloud\Video\LiveStream\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Request message for "LivestreamService.DeleteChannel".
 *
 * Generated from protobuf message <code>google.cloud.video.livestream.v1.DeleteChannelRequest</code>
 */
class DeleteChannelRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The name of the channel resource, in the form of:
     * `projects/{project}/locations/{location}/channels/{channelId}`.
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     */
    protected $name = '';
    /**
     * A request ID to identify requests. Specify a unique request ID
     * so that if you must retry your request, the server will know to ignore
     * the request if it has already been completed. The server will guarantee
     * that for at least 60 minutes after the first request.
     * For example, consider a situation where you make an initial request and the
     * request times out. If you make the request again with the same request ID,
     * the server can check if original operation with the same request ID was
     * received, and if so, will ignore the second request. This prevents clients
     * from accidentally creating duplicate commitments.
     * The request ID must be a valid UUID with the exception that zero UUID is
     * not supported `(00000000-0000-0000-0000-000000000000)`.
     *
     * Generated from protobuf field <code>string request_id = 2;</code>
     */
    protected $request_id = '';
    /**
     * If the `force` field is set to the default value of `false`, you must
     * delete all of a channel's events before you can delete the channel itself.
     * If the field is set to `true`, requests to delete a channel also delete
     * associated channel events.
     *
     * Generated from protobuf field <code>bool force = 3;</code>
     */
    protected $force = false;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $name
     *           Required. The name of the channel resource, in the form of:
     *           `projects/{project}/locations/{location}/channels/{channelId}`.
     *     @type string $request_id
     *           A request ID to identify requests. Specify a unique request ID
     *           so that if you must retry your request, the server will know to ignore
     *           the request if it has already been completed. The server will guarantee
     *           that for at least 60 minutes after the first request.
     *           For example, consider a situation where you make an initial request and the
     *           request times out. If you make the request again with the same request ID,
     *           the server can check if original operation with the same request ID was
     *           received, and if so, will ignore the second request. This prevents clients
     *           from accidentally creating duplicate commitments.
     *           The request ID must be a valid UUID with the exception that zero UUID is
     *           not supported `(00000000-0000-0000-0000-000000000000)`.
     *     @type bool $force
     *           If the `force` field is set to the default value of `false`, you must
     *           delete all of a channel's events before you can delete the channel itself.
     *           If the field is set to `true`, requests to delete a channel also delete
     *           associated channel events.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Video\Livestream\V1\Service::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. The name of the channel resource, in the form of:
     * `projects/{project}/locations/{location}/channels/{channelId}`.
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Required. The name of the channel resource, in the form of:
     * `projects/{project}/locations/{location}/channels/{channelId}`.
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @param string $var
     * @return $this
     */
    public function setName($var)
    {
        GPBUtil::checkString($var, True);
        $this->name = $var;

        return $this;
    }

    /**
     * A request ID to identify requests. Specify a unique request ID
     * so that if you must retry your request, the server will know to ignore
     * the request if it has already been completed. The server will guarantee
     * that for at least 60 minutes after the first request.
     * For example, consider a situation where you make an initial request and the
     * request times out. If you make the request again with the same request ID,
     * the server can check if original operation with the same request ID was
     * received, and if so, will ignore the second request. This prevents clients
     * from accidentally creating duplicate commitments.
     * The request ID must be a valid UUID with the exception that zero UUID is
     * not supported `(00000000-0000-0000-0000-000000000000)`.
     *
     * Generated from protobuf field <code>string request_id = 2;</code>
     * @return string
     */
    public function getRequestId()
    {
        return $this->request_id;
    }

    /**
     * A request ID to identify requests. Specify a unique request ID
     * so that if you must retry your request, the server will know to ignore
     * the request if it has already been completed. The server will guarantee
     * that for at least 60 minutes after the first request.
     * For example, consider a situation where you make an initial request and the
     * request times out. If you make the request again with the same request ID,
     * the server can check if original operation with the same request ID was
     * received, and if so, will ignore the second request. This prevents clients
     * from accidentally creating duplicate commitments.
     * The request ID must be a valid UUID with the exception that zero UUID is
     * not supported `(00000000-0000-0000-0000-000000000000)`.
     *
     * Generated from protobuf field <code>string request_id = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setRequestId($var)
    {
        GPBUtil::checkString($var, True);
        $this->request_id = $var;

        return $this;
    }

    /**
     * If the `force` field is set to the default value of `false`, you must
     * delete all of a channel's events before you can delete the channel itself.
     * If the field is set to `true`, requests to delete a channel also delete
     * associated channel events.
     *
     * Generated from protobuf field <code>bool force = 3;</code>
     * @return bool
     */
    public function getForce()
    {
        return $this->force;
    }

    /**
     * If the `force` field is set to the default value of `false`, you must
     * delete all of a channel's events before you can delete the channel itself.
     * If the field is set to `true`, requests to delete a channel also delete
     * associated channel events.
     *
     * Generated from protobuf field <code>bool force = 3;</code>
     * @param bool $var
     * @return $this
     */
    public function setForce($var)
    {
        GPBUtil::checkBool($var);
        $this->force = $var;

        return $this;
    }

}

