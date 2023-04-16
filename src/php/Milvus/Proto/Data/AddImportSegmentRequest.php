<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: data_coord.proto

namespace Milvus\Proto\Data;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>milvus.proto.data.AddImportSegmentRequest</code>
 */
class AddImportSegmentRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>.milvus.proto.common.MsgBase base = 1;</code>
     */
    protected $base = null;
    /**
     * Generated from protobuf field <code>int64 segment_id = 2;</code>
     */
    protected $segment_id = 0;
    /**
     * Generated from protobuf field <code>string channel_name = 3;</code>
     */
    protected $channel_name = '';
    /**
     * Generated from protobuf field <code>int64 collection_id = 4;</code>
     */
    protected $collection_id = 0;
    /**
     * Generated from protobuf field <code>int64 partition_id = 5;</code>
     */
    protected $partition_id = 0;
    /**
     * Generated from protobuf field <code>int64 row_num = 6;</code>
     */
    protected $row_num = 0;
    /**
     * Generated from protobuf field <code>repeated .milvus.proto.data.FieldBinlog stats_log = 7;</code>
     */
    private $stats_log;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Milvus\Proto\Common\MsgBase $base
     *     @type int|string $segment_id
     *     @type string $channel_name
     *     @type int|string $collection_id
     *     @type int|string $partition_id
     *     @type int|string $row_num
     *     @type array<\Milvus\Proto\Data\FieldBinlog>|\Google\Protobuf\Internal\RepeatedField $stats_log
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
     * Generated from protobuf field <code>int64 segment_id = 2;</code>
     * @return int|string
     */
    public function getSegmentId()
    {
        return $this->segment_id;
    }

    /**
     * Generated from protobuf field <code>int64 segment_id = 2;</code>
     * @param int|string $var
     * @return $this
     */
    public function setSegmentId($var)
    {
        GPBUtil::checkInt64($var);
        $this->segment_id = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string channel_name = 3;</code>
     * @return string
     */
    public function getChannelName()
    {
        return $this->channel_name;
    }

    /**
     * Generated from protobuf field <code>string channel_name = 3;</code>
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
     * Generated from protobuf field <code>int64 collection_id = 4;</code>
     * @return int|string
     */
    public function getCollectionId()
    {
        return $this->collection_id;
    }

    /**
     * Generated from protobuf field <code>int64 collection_id = 4;</code>
     * @param int|string $var
     * @return $this
     */
    public function setCollectionId($var)
    {
        GPBUtil::checkInt64($var);
        $this->collection_id = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>int64 partition_id = 5;</code>
     * @return int|string
     */
    public function getPartitionId()
    {
        return $this->partition_id;
    }

    /**
     * Generated from protobuf field <code>int64 partition_id = 5;</code>
     * @param int|string $var
     * @return $this
     */
    public function setPartitionId($var)
    {
        GPBUtil::checkInt64($var);
        $this->partition_id = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>int64 row_num = 6;</code>
     * @return int|string
     */
    public function getRowNum()
    {
        return $this->row_num;
    }

    /**
     * Generated from protobuf field <code>int64 row_num = 6;</code>
     * @param int|string $var
     * @return $this
     */
    public function setRowNum($var)
    {
        GPBUtil::checkInt64($var);
        $this->row_num = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>repeated .milvus.proto.data.FieldBinlog stats_log = 7;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getStatsLog()
    {
        return $this->stats_log;
    }

    /**
     * Generated from protobuf field <code>repeated .milvus.proto.data.FieldBinlog stats_log = 7;</code>
     * @param array<\Milvus\Proto\Data\FieldBinlog>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setStatsLog($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Milvus\Proto\Data\FieldBinlog::class);
        $this->stats_log = $arr;

        return $this;
    }

}

