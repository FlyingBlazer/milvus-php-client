<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: query_coord.proto

namespace Milvus\Proto\Query;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>milvus.proto.query.LoadSegmentsRequest</code>
 */
class LoadSegmentsRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>.milvus.proto.common.MsgBase base = 1;</code>
     */
    protected $base = null;
    /**
     * Generated from protobuf field <code>int64 dst_nodeID = 2;</code>
     */
    protected $dst_nodeID = 0;
    /**
     * Generated from protobuf field <code>repeated .milvus.proto.query.SegmentLoadInfo infos = 3;</code>
     */
    private $infos;
    /**
     * Generated from protobuf field <code>.milvus.proto.schema.CollectionSchema schema = 4;</code>
     */
    protected $schema = null;
    /**
     * Generated from protobuf field <code>int64 source_nodeID = 5;</code>
     */
    protected $source_nodeID = 0;
    /**
     * Generated from protobuf field <code>int64 collectionID = 6;</code>
     */
    protected $collectionID = 0;
    /**
     * Generated from protobuf field <code>.milvus.proto.query.LoadMetaInfo load_meta = 7;</code>
     */
    protected $load_meta = null;
    /**
     * Generated from protobuf field <code>int64 replicaID = 8;</code>
     */
    protected $replicaID = 0;
    /**
     * Generated from protobuf field <code>repeated .milvus.proto.msg.MsgPosition delta_positions = 9;</code>
     */
    private $delta_positions;
    /**
     * Generated from protobuf field <code>int64 version = 10;</code>
     */
    protected $version = 0;
    /**
     * Generated from protobuf field <code>bool need_transfer = 11;</code>
     */
    protected $need_transfer = false;
    /**
     * Generated from protobuf field <code>.milvus.proto.query.LoadScope load_scope = 12;</code>
     */
    protected $load_scope = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Milvus\Proto\Common\MsgBase $base
     *     @type int|string $dst_nodeID
     *     @type array<\Milvus\Proto\Query\SegmentLoadInfo>|\Google\Protobuf\Internal\RepeatedField $infos
     *     @type \Milvus\Proto\Schema\CollectionSchema $schema
     *     @type int|string $source_nodeID
     *     @type int|string $collectionID
     *     @type \Milvus\Proto\Query\LoadMetaInfo $load_meta
     *     @type int|string $replicaID
     *     @type array<\Milvus\Proto\Msg\MsgPosition>|\Google\Protobuf\Internal\RepeatedField $delta_positions
     *     @type int|string $version
     *     @type bool $need_transfer
     *     @type int $load_scope
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
     * Generated from protobuf field <code>int64 dst_nodeID = 2;</code>
     * @return int|string
     */
    public function getDstNodeID()
    {
        return $this->dst_nodeID;
    }

    /**
     * Generated from protobuf field <code>int64 dst_nodeID = 2;</code>
     * @param int|string $var
     * @return $this
     */
    public function setDstNodeID($var)
    {
        GPBUtil::checkInt64($var);
        $this->dst_nodeID = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>repeated .milvus.proto.query.SegmentLoadInfo infos = 3;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getInfos()
    {
        return $this->infos;
    }

    /**
     * Generated from protobuf field <code>repeated .milvus.proto.query.SegmentLoadInfo infos = 3;</code>
     * @param array<\Milvus\Proto\Query\SegmentLoadInfo>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setInfos($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Milvus\Proto\Query\SegmentLoadInfo::class);
        $this->infos = $arr;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.milvus.proto.schema.CollectionSchema schema = 4;</code>
     * @return \Milvus\Proto\Schema\CollectionSchema|null
     */
    public function getSchema()
    {
        return $this->schema;
    }

    public function hasSchema()
    {
        return isset($this->schema);
    }

    public function clearSchema()
    {
        unset($this->schema);
    }

    /**
     * Generated from protobuf field <code>.milvus.proto.schema.CollectionSchema schema = 4;</code>
     * @param \Milvus\Proto\Schema\CollectionSchema $var
     * @return $this
     */
    public function setSchema($var)
    {
        GPBUtil::checkMessage($var, \Milvus\Proto\Schema\CollectionSchema::class);
        $this->schema = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>int64 source_nodeID = 5;</code>
     * @return int|string
     */
    public function getSourceNodeID()
    {
        return $this->source_nodeID;
    }

    /**
     * Generated from protobuf field <code>int64 source_nodeID = 5;</code>
     * @param int|string $var
     * @return $this
     */
    public function setSourceNodeID($var)
    {
        GPBUtil::checkInt64($var);
        $this->source_nodeID = $var;

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

    /**
     * Generated from protobuf field <code>.milvus.proto.query.LoadMetaInfo load_meta = 7;</code>
     * @return \Milvus\Proto\Query\LoadMetaInfo|null
     */
    public function getLoadMeta()
    {
        return $this->load_meta;
    }

    public function hasLoadMeta()
    {
        return isset($this->load_meta);
    }

    public function clearLoadMeta()
    {
        unset($this->load_meta);
    }

    /**
     * Generated from protobuf field <code>.milvus.proto.query.LoadMetaInfo load_meta = 7;</code>
     * @param \Milvus\Proto\Query\LoadMetaInfo $var
     * @return $this
     */
    public function setLoadMeta($var)
    {
        GPBUtil::checkMessage($var, \Milvus\Proto\Query\LoadMetaInfo::class);
        $this->load_meta = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>int64 replicaID = 8;</code>
     * @return int|string
     */
    public function getReplicaID()
    {
        return $this->replicaID;
    }

    /**
     * Generated from protobuf field <code>int64 replicaID = 8;</code>
     * @param int|string $var
     * @return $this
     */
    public function setReplicaID($var)
    {
        GPBUtil::checkInt64($var);
        $this->replicaID = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>repeated .milvus.proto.msg.MsgPosition delta_positions = 9;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getDeltaPositions()
    {
        return $this->delta_positions;
    }

    /**
     * Generated from protobuf field <code>repeated .milvus.proto.msg.MsgPosition delta_positions = 9;</code>
     * @param array<\Milvus\Proto\Msg\MsgPosition>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setDeltaPositions($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Milvus\Proto\Msg\MsgPosition::class);
        $this->delta_positions = $arr;

        return $this;
    }

    /**
     * Generated from protobuf field <code>int64 version = 10;</code>
     * @return int|string
     */
    public function getVersion()
    {
        return $this->version;
    }

    /**
     * Generated from protobuf field <code>int64 version = 10;</code>
     * @param int|string $var
     * @return $this
     */
    public function setVersion($var)
    {
        GPBUtil::checkInt64($var);
        $this->version = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>bool need_transfer = 11;</code>
     * @return bool
     */
    public function getNeedTransfer()
    {
        return $this->need_transfer;
    }

    /**
     * Generated from protobuf field <code>bool need_transfer = 11;</code>
     * @param bool $var
     * @return $this
     */
    public function setNeedTransfer($var)
    {
        GPBUtil::checkBool($var);
        $this->need_transfer = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.milvus.proto.query.LoadScope load_scope = 12;</code>
     * @return int
     */
    public function getLoadScope()
    {
        return $this->load_scope;
    }

    /**
     * Generated from protobuf field <code>.milvus.proto.query.LoadScope load_scope = 12;</code>
     * @param int $var
     * @return $this
     */
    public function setLoadScope($var)
    {
        GPBUtil::checkEnum($var, \Milvus\Proto\Query\LoadScope::class);
        $this->load_scope = $var;

        return $this;
    }

}

