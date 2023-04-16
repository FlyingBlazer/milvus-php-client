<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: msg.proto

namespace Milvus\Proto\Msg;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>milvus.proto.msg.CreatePartitionRequest</code>
 */
class CreatePartitionRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>.milvus.proto.common.MsgBase base = 1;</code>
     */
    protected $base = null;
    /**
     * Generated from protobuf field <code>string db_name = 2;</code>
     */
    protected $db_name = '';
    /**
     * Generated from protobuf field <code>string collection_name = 3;</code>
     */
    protected $collection_name = '';
    /**
     * Generated from protobuf field <code>string partition_name = 4;</code>
     */
    protected $partition_name = '';
    /**
     * Generated from protobuf field <code>int64 dbID = 5;</code>
     */
    protected $dbID = 0;
    /**
     * Generated from protobuf field <code>int64 collectionID = 6;</code>
     */
    protected $collectionID = 0;
    /**
     * Generated from protobuf field <code>int64 partitionID = 7;</code>
     */
    protected $partitionID = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Milvus\Proto\Common\MsgBase $base
     *     @type string $db_name
     *     @type string $collection_name
     *     @type string $partition_name
     *     @type int|string $dbID
     *     @type int|string $collectionID
     *     @type int|string $partitionID
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Msg::initOnce();
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
     * Generated from protobuf field <code>string db_name = 2;</code>
     * @return string
     */
    public function getDbName()
    {
        return $this->db_name;
    }

    /**
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
     * Generated from protobuf field <code>string collection_name = 3;</code>
     * @return string
     */
    public function getCollectionName()
    {
        return $this->collection_name;
    }

    /**
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
     * Generated from protobuf field <code>string partition_name = 4;</code>
     * @return string
     */
    public function getPartitionName()
    {
        return $this->partition_name;
    }

    /**
     * Generated from protobuf field <code>string partition_name = 4;</code>
     * @param string $var
     * @return $this
     */
    public function setPartitionName($var)
    {
        GPBUtil::checkString($var, True);
        $this->partition_name = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>int64 dbID = 5;</code>
     * @return int|string
     */
    public function getDbID()
    {
        return $this->dbID;
    }

    /**
     * Generated from protobuf field <code>int64 dbID = 5;</code>
     * @param int|string $var
     * @return $this
     */
    public function setDbID($var)
    {
        GPBUtil::checkInt64($var);
        $this->dbID = $var;

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
     * Generated from protobuf field <code>int64 partitionID = 7;</code>
     * @return int|string
     */
    public function getPartitionID()
    {
        return $this->partitionID;
    }

    /**
     * Generated from protobuf field <code>int64 partitionID = 7;</code>
     * @param int|string $var
     * @return $this
     */
    public function setPartitionID($var)
    {
        GPBUtil::checkInt64($var);
        $this->partitionID = $var;

        return $this;
    }

}

