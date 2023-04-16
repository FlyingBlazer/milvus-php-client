<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: data_coord.proto

namespace Milvus\Proto\Data;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>milvus.proto.data.GetSegmentInfoResponse</code>
 */
class GetSegmentInfoResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>.milvus.proto.common.Status status = 1;</code>
     */
    protected $status = null;
    /**
     * Generated from protobuf field <code>repeated .milvus.proto.data.SegmentInfo infos = 2;</code>
     */
    private $infos;
    /**
     * Generated from protobuf field <code>map<string, .milvus.proto.msg.MsgPosition> channel_checkpoint = 3;</code>
     */
    private $channel_checkpoint;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Milvus\Proto\Common\Status $status
     *     @type array<\Milvus\Proto\Data\SegmentInfo>|\Google\Protobuf\Internal\RepeatedField $infos
     *     @type array|\Google\Protobuf\Internal\MapField $channel_checkpoint
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\DataCoord::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>.milvus.proto.common.Status status = 1;</code>
     * @return \Milvus\Proto\Common\Status|null
     */
    public function getStatus()
    {
        return $this->status;
    }

    public function hasStatus()
    {
        return isset($this->status);
    }

    public function clearStatus()
    {
        unset($this->status);
    }

    /**
     * Generated from protobuf field <code>.milvus.proto.common.Status status = 1;</code>
     * @param \Milvus\Proto\Common\Status $var
     * @return $this
     */
    public function setStatus($var)
    {
        GPBUtil::checkMessage($var, \Milvus\Proto\Common\Status::class);
        $this->status = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>repeated .milvus.proto.data.SegmentInfo infos = 2;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getInfos()
    {
        return $this->infos;
    }

    /**
     * Generated from protobuf field <code>repeated .milvus.proto.data.SegmentInfo infos = 2;</code>
     * @param array<\Milvus\Proto\Data\SegmentInfo>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setInfos($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Milvus\Proto\Data\SegmentInfo::class);
        $this->infos = $arr;

        return $this;
    }

    /**
     * Generated from protobuf field <code>map<string, .milvus.proto.msg.MsgPosition> channel_checkpoint = 3;</code>
     * @return \Google\Protobuf\Internal\MapField
     */
    public function getChannelCheckpoint()
    {
        return $this->channel_checkpoint;
    }

    /**
     * Generated from protobuf field <code>map<string, .milvus.proto.msg.MsgPosition> channel_checkpoint = 3;</code>
     * @param array|\Google\Protobuf\Internal\MapField $var
     * @return $this
     */
    public function setChannelCheckpoint($var)
    {
        $arr = GPBUtil::checkMapField($var, \Google\Protobuf\Internal\GPBType::STRING, \Google\Protobuf\Internal\GPBType::MESSAGE, \Milvus\Proto\Msg\MsgPosition::class);
        $this->channel_checkpoint = $arr;

        return $this;
    }

}

