<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: milvus.proto

namespace Milvus\Proto\Milvus;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * ReplicaGroup
 *
 * Generated from protobuf message <code>milvus.proto.milvus.ReplicaInfo</code>
 */
class ReplicaInfo extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>int64 replicaID = 1;</code>
     */
    protected $replicaID = 0;
    /**
     * Generated from protobuf field <code>int64 collectionID = 2;</code>
     */
    protected $collectionID = 0;
    /**
     * empty indicates to load collection
     *
     * Generated from protobuf field <code>repeated int64 partition_ids = 3;</code>
     */
    private $partition_ids;
    /**
     * Generated from protobuf field <code>repeated .milvus.proto.milvus.ShardReplica shard_replicas = 4;</code>
     */
    private $shard_replicas;
    /**
     * include leaders
     *
     * Generated from protobuf field <code>repeated int64 node_ids = 5;</code>
     */
    private $node_ids;
    /**
     * Generated from protobuf field <code>string resource_group_name = 6;</code>
     */
    protected $resource_group_name = '';
    /**
     * outbound access rg -> node num
     *
     * Generated from protobuf field <code>map<string, int32> num_outbound_node = 7;</code>
     */
    private $num_outbound_node;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int|string $replicaID
     *     @type int|string $collectionID
     *     @type array<int>|array<string>|\Google\Protobuf\Internal\RepeatedField $partition_ids
     *           empty indicates to load collection
     *     @type array<\Milvus\Proto\Milvus\ShardReplica>|\Google\Protobuf\Internal\RepeatedField $shard_replicas
     *     @type array<int>|array<string>|\Google\Protobuf\Internal\RepeatedField $node_ids
     *           include leaders
     *     @type string $resource_group_name
     *     @type array|\Google\Protobuf\Internal\MapField $num_outbound_node
     *           outbound access rg -> node num
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Milvus::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>int64 replicaID = 1;</code>
     * @return int|string
     */
    public function getReplicaID()
    {
        return $this->replicaID;
    }

    /**
     * Generated from protobuf field <code>int64 replicaID = 1;</code>
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
     * Generated from protobuf field <code>int64 collectionID = 2;</code>
     * @return int|string
     */
    public function getCollectionID()
    {
        return $this->collectionID;
    }

    /**
     * Generated from protobuf field <code>int64 collectionID = 2;</code>
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
     * empty indicates to load collection
     *
     * Generated from protobuf field <code>repeated int64 partition_ids = 3;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getPartitionIds()
    {
        return $this->partition_ids;
    }

    /**
     * empty indicates to load collection
     *
     * Generated from protobuf field <code>repeated int64 partition_ids = 3;</code>
     * @param array<int>|array<string>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setPartitionIds($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::INT64);
        $this->partition_ids = $arr;

        return $this;
    }

    /**
     * Generated from protobuf field <code>repeated .milvus.proto.milvus.ShardReplica shard_replicas = 4;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getShardReplicas()
    {
        return $this->shard_replicas;
    }

    /**
     * Generated from protobuf field <code>repeated .milvus.proto.milvus.ShardReplica shard_replicas = 4;</code>
     * @param array<\Milvus\Proto\Milvus\ShardReplica>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setShardReplicas($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Milvus\Proto\Milvus\ShardReplica::class);
        $this->shard_replicas = $arr;

        return $this;
    }

    /**
     * include leaders
     *
     * Generated from protobuf field <code>repeated int64 node_ids = 5;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getNodeIds()
    {
        return $this->node_ids;
    }

    /**
     * include leaders
     *
     * Generated from protobuf field <code>repeated int64 node_ids = 5;</code>
     * @param array<int>|array<string>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setNodeIds($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::INT64);
        $this->node_ids = $arr;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string resource_group_name = 6;</code>
     * @return string
     */
    public function getResourceGroupName()
    {
        return $this->resource_group_name;
    }

    /**
     * Generated from protobuf field <code>string resource_group_name = 6;</code>
     * @param string $var
     * @return $this
     */
    public function setResourceGroupName($var)
    {
        GPBUtil::checkString($var, True);
        $this->resource_group_name = $var;

        return $this;
    }

    /**
     * outbound access rg -> node num
     *
     * Generated from protobuf field <code>map<string, int32> num_outbound_node = 7;</code>
     * @return \Google\Protobuf\Internal\MapField
     */
    public function getNumOutboundNode()
    {
        return $this->num_outbound_node;
    }

    /**
     * outbound access rg -> node num
     *
     * Generated from protobuf field <code>map<string, int32> num_outbound_node = 7;</code>
     * @param array|\Google\Protobuf\Internal\MapField $var
     * @return $this
     */
    public function setNumOutboundNode($var)
    {
        $arr = GPBUtil::checkMapField($var, \Google\Protobuf\Internal\GPBType::STRING, \Google\Protobuf\Internal\GPBType::INT32);
        $this->num_outbound_node = $arr;

        return $this;
    }

}

