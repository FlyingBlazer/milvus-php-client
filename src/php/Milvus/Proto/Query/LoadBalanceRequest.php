<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: query_coord.proto

namespace Milvus\Proto\Query;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>milvus.proto.query.LoadBalanceRequest</code>
 */
class LoadBalanceRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>.milvus.proto.common.MsgBase base = 1;</code>
     */
    protected $base = null;
    /**
     * Generated from protobuf field <code>repeated int64 source_nodeIDs = 2;</code>
     */
    private $source_nodeIDs;
    /**
     * Generated from protobuf field <code>.milvus.proto.query.TriggerCondition balance_reason = 3;</code>
     */
    protected $balance_reason = 0;
    /**
     * Generated from protobuf field <code>repeated int64 dst_nodeIDs = 4;</code>
     */
    private $dst_nodeIDs;
    /**
     * Generated from protobuf field <code>repeated int64 sealed_segmentIDs = 5;</code>
     */
    private $sealed_segmentIDs;
    /**
     * Generated from protobuf field <code>int64 collectionID = 6;</code>
     */
    protected $collectionID = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Milvus\Proto\Common\MsgBase $base
     *     @type array<int>|array<string>|\Google\Protobuf\Internal\RepeatedField $source_nodeIDs
     *     @type int $balance_reason
     *     @type array<int>|array<string>|\Google\Protobuf\Internal\RepeatedField $dst_nodeIDs
     *     @type array<int>|array<string>|\Google\Protobuf\Internal\RepeatedField $sealed_segmentIDs
     *     @type int|string $collectionID
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\QueryCoord::initOnce();
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
     * Generated from protobuf field <code>repeated int64 source_nodeIDs = 2;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getSourceNodeIDs()
    {
        return $this->source_nodeIDs;
    }

    /**
     * Generated from protobuf field <code>repeated int64 source_nodeIDs = 2;</code>
     * @param array<int>|array<string>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setSourceNodeIDs($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::INT64);
        $this->source_nodeIDs = $arr;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.milvus.proto.query.TriggerCondition balance_reason = 3;</code>
     * @return int
     */
    public function getBalanceReason()
    {
        return $this->balance_reason;
    }

    /**
     * Generated from protobuf field <code>.milvus.proto.query.TriggerCondition balance_reason = 3;</code>
     * @param int $var
     * @return $this
     */
    public function setBalanceReason($var)
    {
        GPBUtil::checkEnum($var, \Milvus\Proto\Query\TriggerCondition::class);
        $this->balance_reason = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>repeated int64 dst_nodeIDs = 4;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getDstNodeIDs()
    {
        return $this->dst_nodeIDs;
    }

    /**
     * Generated from protobuf field <code>repeated int64 dst_nodeIDs = 4;</code>
     * @param array<int>|array<string>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setDstNodeIDs($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::INT64);
        $this->dst_nodeIDs = $arr;

        return $this;
    }

    /**
     * Generated from protobuf field <code>repeated int64 sealed_segmentIDs = 5;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getSealedSegmentIDs()
    {
        return $this->sealed_segmentIDs;
    }

    /**
     * Generated from protobuf field <code>repeated int64 sealed_segmentIDs = 5;</code>
     * @param array<int>|array<string>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setSealedSegmentIDs($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::INT64);
        $this->sealed_segmentIDs = $arr;

        return $this;
    }

    /**
     * Generated from protobuf field <code>int64 collectionID = 6;</code>
     * @return int|string
     */
    public function getCollectionID()
    {
        return $this->collectionID;
    }

    /**
     * Generated from protobuf field <code>int64 collectionID = 6;</code>
     * @param int|string $var
     * @return $this
     */
    public function setCollectionID($var)
    {
        GPBUtil::checkInt64($var);
        $this->collectionID = $var;

        return $this;
    }

}

