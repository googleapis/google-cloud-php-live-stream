<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/video/livestream/v1/resources.proto

namespace Google\Cloud\Video\LiveStream\V1\Clip;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Slice represents a slice of the requested clip.
 *
 * Generated from protobuf message <code>google.cloud.video.livestream.v1.Clip.Slice</code>
 */
class Slice extends \Google\Protobuf\Internal\Message
{
    protected $kind;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Cloud\Video\LiveStream\V1\Clip\TimeSlice $time_slice
     *           A slice in form of a tuple of Unix epoch time.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Video\Livestream\V1\Resources::initOnce();
        parent::__construct($data);
    }

    /**
     * A slice in form of a tuple of Unix epoch time.
     *
     * Generated from protobuf field <code>.google.cloud.video.livestream.v1.Clip.TimeSlice time_slice = 1;</code>
     * @return \Google\Cloud\Video\LiveStream\V1\Clip\TimeSlice|null
     */
    public function getTimeSlice()
    {
        return $this->readOneof(1);
    }

    public function hasTimeSlice()
    {
        return $this->hasOneof(1);
    }

    /**
     * A slice in form of a tuple of Unix epoch time.
     *
     * Generated from protobuf field <code>.google.cloud.video.livestream.v1.Clip.TimeSlice time_slice = 1;</code>
     * @param \Google\Cloud\Video\LiveStream\V1\Clip\TimeSlice $var
     * @return $this
     */
    public function setTimeSlice($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Video\LiveStream\V1\Clip\TimeSlice::class);
        $this->writeOneof(1, $var);

        return $this;
    }

    /**
     * @return string
     */
    public function getKind()
    {
        return $this->whichOneof("kind");
    }

}


