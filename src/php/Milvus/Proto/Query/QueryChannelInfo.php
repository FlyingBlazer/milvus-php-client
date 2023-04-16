<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: query_coord.proto

namespace Milvus\Proto\Query;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>milvus.proto.query.QueryChannelInfo</code>
 */
class QueryChannelInfo extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>int64 collectionID = 1;</code>
     */
    protected $collectionID = 0;
    /**
     * Generated from protobuf field <code>string query_channel = 2;</code>
     */
    protected $query_channel = '';
    /**
     * Generated from protobuf field <code>string query_result_channel = 3;</code>
     */
    protected $query_result_channel = '';
    /**
     * Generated from protobuf field <code>repeated .milvus.proto.query.SegmentInfo global_sealed_segments = 4;</code>
     */
    private $global_sealed_segments;
    /**
     * Generated from protobuf field <code>.milvus.proto.msg.MsgPosition seek_position = 5;</code>
     */
    protected $seek_position = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int|string $collectionID
     *     @type string $query_channel
     *     @type string $query_result_channel
     *     @type array<\Milvus\Proto\Query\SegmentInfo>|\Google\Protobuf\Internal\RepeatedField $global_sealed_segments
     *     @type \Milvus\Proto\Msg\MsgPosition $seek_position
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\QueryCoord::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>int64 collectionID = 1;</code>
     * @return int|string
     */
    public function getCollectionID()
    {
        return $this->collectionID;
    }

    /**
     * Generated from protobuf field <code>int64 collectionID = 1;</code>
     * @param int|string $var
     * @return $this
     */
    public function setCollectionID($var)
    {
        GPBUtil::checkInt64($var);
        $this->collectionID = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string query_channel = 2;</code>
     * @return string
     */
    public function getQueryChannel()
    {
        return $this->query_channel;
    }

    /**
     * Generated from protobuf field <code>string query_channel = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setQueryChannel($var)
    {
        GPBUtil::checkString($var, True);
        $this->query_channel = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string query_result_channel = 3;</code>
     * @return string
     */
    public function getQueryResultChannel()
    {
        return $this->query_result_channel;
    }

    /**
     * Generated from protobuf field <code>string query_result_channel = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setQueryResultChannel($var)
    {
        GPBUtil::checkString($var, True);
        $this->query_result_channel = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>repeated .milvus.proto.query.SegmentInfo global_sealed_segments = 4;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getGlobalSealedSegments()
    {
        return $this->global_sealed_segments;
    }

    /**
     * Generated from protobuf field <code>repeated .milvus.proto.query.SegmentInfo global_sealed_segments = 4;</code>
     * @param array<\Milvus\Proto\Query\SegmentInfo>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setGlobalSealedSegments($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Milvus\Proto\Query\SegmentInfo::class);
        $this->global_sealed_segments = $arr;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.milvus.proto.msg.MsgPosition seek_position = 5;</code>
     * @return \Milvus\Proto\Msg\MsgPosition|null
     */
    public function getSeekPosition()
    {
        return $this->seek_position;
    }

    public function hasSeekPosition()
    {
        return isset($this->seek_position);
    }

    public function clearSeekPosition()
    {
        unset($this->seek_position);
    }

    /**
     * Generated from protobuf field <code>.milvus.proto.msg.MsgPosition seek_position = 5;</code>
     * @param \Milvus\Proto\Msg\MsgPosition $var
     * @return $this
     */
    public function setSeekPosition($var)
    {
        GPBUtil::checkMessage($var, \Milvus\Proto\Msg\MsgPosition::class);
        $this->seek_position = $var;

        return $this;
    }

}

