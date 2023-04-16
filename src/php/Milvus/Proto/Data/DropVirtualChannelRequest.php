<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: data_coord.proto

namespace Milvus\Proto\Data;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>milvus.proto.data.DropVirtualChannelRequest</code>
 */
class DropVirtualChannelRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>.milvus.proto.common.MsgBase base = 1;</code>
     */
    protected $base = null;
    /**
     * Generated from protobuf field <code>string channel_name = 2;</code>
     */
    protected $channel_name = '';
    /**
     * Generated from protobuf field <code>repeated .milvus.proto.data.DropVirtualChannelSegment segments = 3;</code>
     */
    private $segments;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Milvus\Proto\Common\MsgBase $base
     *     @type string $channel_name
     *     @type array<\Milvus\Proto\Data\DropVirtualChannelSegment>|\Google\Protobuf\Internal\RepeatedField $segments
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
     * Generated from protobuf field <code>string channel_name = 2;</code>
     * @return string
     */
    public function getChannelName()
    {
        return $this->channel_name;
    }

    /**
     * Generated from protobuf field <code>string channel_name = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setChannelName($var)
    {
        GPBUtil::checkString($var, True);
        $this->channel_name = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>repeated .milvus.proto.data.DropVirtualChannelSegment segments = 3;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getSegments()
    {
        return $this->segments;
    }

    /**
     * Generated from protobuf field <code>repeated .milvus.proto.data.DropVirtualChannelSegment segments = 3;</code>
     * @param array<\Milvus\Proto\Data\DropVirtualChannelSegment>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setSegments($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Milvus\Proto\Data\DropVirtualChannelSegment::class);
        $this->segments = $arr;

        return $this;
    }

}

