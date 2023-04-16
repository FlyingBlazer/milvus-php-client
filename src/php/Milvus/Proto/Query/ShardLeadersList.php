<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: query_coord.proto

namespace Milvus\Proto\Query;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * All leaders of all replicas of one shard
 *
 * Generated from protobuf message <code>milvus.proto.query.ShardLeadersList</code>
 */
class ShardLeadersList extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>string channel_name = 1;</code>
     */
    protected $channel_name = '';
    /**
     * Generated from protobuf field <code>repeated int64 node_ids = 2;</code>
     */
    private $node_ids;
    /**
     * Generated from protobuf field <code>repeated string node_addrs = 3;</code>
     */
    private $node_addrs;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $channel_name
     *     @type array<int>|array<string>|\Google\Protobuf\Internal\RepeatedField $node_ids
     *     @type array<string>|\Google\Protobuf\Internal\RepeatedField $node_addrs
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\QueryCoord::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>string channel_name = 1;</code>
     * @return string
     */
    public function getChannelName()
    {
        return $this->channel_name;
    }

    /**
     * Generated from protobuf field <code>string channel_name = 1;</code>
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
     * Generated from protobuf field <code>repeated int64 node_ids = 2;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getNodeIds()
    {
        return $this->node_ids;
    }

    /**
     * Generated from protobuf field <code>repeated int64 node_ids = 2;</code>
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
     * Generated from protobuf field <code>repeated string node_addrs = 3;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getNodeAddrs()
    {
        return $this->node_addrs;
    }

    /**
     * Generated from protobuf field <code>repeated string node_addrs = 3;</code>
     * @param array<string>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setNodeAddrs($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->node_addrs = $arr;

        return $this;
    }

}

