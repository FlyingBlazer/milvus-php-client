<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: data_coord.proto

namespace Milvus\Proto\Data;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>milvus.proto.data.SegmentMsg</code>
 */
class SegmentMsg extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>.milvus.proto.common.MsgBase base = 1;</code>
     */
    protected $base = null;
    /**
     * Generated from protobuf field <code>.milvus.proto.data.SegmentInfo segment = 2;</code>
     */
    protected $segment = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Milvus\Proto\Common\MsgBase $base
     *     @type \Milvus\Proto\Data\SegmentInfo $segment
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\DataCoord::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>.milvus.proto.common.MsgBase base = 1;</code>
     * @return \Milvus\Proto\Common\MsgBase|null
     */
    public function getBase()
    {
        return $this->base;
    }

    public function hasBase()
    {
        return isset($this->base);
    }

    public function clearBase()
    {
        unset($this->base);
    }

    /**
     * Generated from protobuf field <code>.milvus.proto.common.MsgBase base = 1;</code>
     * @param \Milvus\Proto\Common\MsgBase $var
     * @return $this
     */
    public function setBase($var)
    {
        GPBUtil::checkMessage($var, \Milvus\Proto\Common\MsgBase::class);
        $this->base = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.milvus.proto.data.SegmentInfo segment = 2;</code>
     * @return \Milvus\Proto\Data\SegmentInfo|null
     */
    public function getSegment()
    {
        return $this->segment;
    }

    public function hasSegment()
    {
        return isset($this->segment);
    }

    public function clearSegment()
    {
        unset($this->segment);
    }

    /**
     * Generated from protobuf field <code>.milvus.proto.data.SegmentInfo segment = 2;</code>
     * @param \Milvus\Proto\Data\SegmentInfo $var
     * @return $this
     */
    public function setSegment($var)
    {
        GPBUtil::checkMessage($var, \Milvus\Proto\Data\SegmentInfo::class);
        $this->segment = $var;

        return $this;
    }

}

