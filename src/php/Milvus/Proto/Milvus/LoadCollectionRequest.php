<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: milvus.proto

namespace Milvus\Proto\Milvus;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 **
 * Load collection data into query nodes, then you can do vector search on this collection.
 *
 * Generated from protobuf message <code>milvus.proto.milvus.LoadCollectionRequest</code>
 */
class LoadCollectionRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Not useful for now
     *
     * Generated from protobuf field <code>.milvus.proto.common.MsgBase base = 1;</code>
     */
    protected $base = null;
    /**
     * Not useful for now
     *
     * Generated from protobuf field <code>string db_name = 2;</code>
     */
    protected $db_name = '';
    /**
     * The collection name you want to load
     *
     * Generated from protobuf field <code>string collection_name = 3;</code>
     */
    protected $collection_name = '';
    /**
     * The replica number to load, default by 1
     *
     * Generated from protobuf field <code>int32 replica_number = 4;</code>
     */
    protected $replica_number = 0;
    /**
     * create replica used resource group
     *
     * Generated from protobuf field <code>repeated string resource_groups = 5;</code>
     */
    private $resource_groups;
    /**
     * Whether to enable refresh mode.
     *
     * Generated from protobuf field <code>bool refresh = 6;</code>
     */
    protected $refresh = false;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Milvus\Proto\Common\MsgBase $base
     *           Not useful for now
     *     @type string $db_name
     *           Not useful for now
     *     @type string $collection_name
     *           The collection name you want to load
     *     @type int $replica_number
     *           The replica number to load, default by 1
     *     @type array<string>|\Google\Protobuf\Internal\RepeatedField $resource_groups
     *           create replica used resource group
     *     @type bool $refresh
     *           Whether to enable refresh mode.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Milvus::initOnce();
        parent::__construct($data);
    }

    /**
     * Not useful for now
     *
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
     * Not useful for now
     *
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
     * Not useful for now
     *
     * Generated from protobuf field <code>string db_name = 2;</code>
     * @return string
     */
    public function getDbName()
    {
        return $this->db_name;
    }

    /**
     * Not useful for now
     *
     * Generated from protobuf field <code>string db_name = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setDbName($var)
    {
        GPBUtil::checkString($var, True);
        $this->db_name = $var;

        return $this;
    }

    /**
     * The collection name you want to load
     *
     * Generated from protobuf field <code>string collection_name = 3;</code>
     * @return string
     */
    public function getCollectionName()
    {
        return $this->collection_name;
    }

    /**
     * The collection name you want to load
     *
     * Generated from protobuf field <code>string collection_name = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setCollectionName($var)
    {
        GPBUtil::checkString($var, True);
        $this->collection_name = $var;

        return $this;
    }

    /**
     * The replica number to load, default by 1
     *
     * Generated from protobuf field <code>int32 replica_number = 4;</code>
     * @return int
     */
    public function getReplicaNumber()
    {
        return $this->replica_number;
    }

    /**
     * The replica number to load, default by 1
     *
     * Generated from protobuf field <code>int32 replica_number = 4;</code>
     * @param int $var
     * @return $this
     */
    public function setReplicaNumber($var)
    {
        GPBUtil::checkInt32($var);
        $this->replica_number = $var;

        return $this;
    }

    /**
     * create replica used resource group
     *
     * Generated from protobuf field <code>repeated string resource_groups = 5;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getResourceGroups()
    {
        return $this->resource_groups;
    }

    /**
     * create replica used resource group
     *
     * Generated from protobuf field <code>repeated string resource_groups = 5;</code>
     * @param array<string>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setResourceGroups($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->resource_groups = $arr;

        return $this;
    }

    /**
     * Whether to enable refresh mode.
     *
     * Generated from protobuf field <code>bool refresh = 6;</code>
     * @return bool
     */
    public function getRefresh()
    {
        return $this->refresh;
    }

    /**
     * Whether to enable refresh mode.
     *
     * Generated from protobuf field <code>bool refresh = 6;</code>
     * @param bool $var
     * @return $this
     */
    public function setRefresh($var)
    {
        GPBUtil::checkBool($var);
        $this->refresh = $var;

        return $this;
    }

}

