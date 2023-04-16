<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: milvus.proto

namespace Milvus\Proto\Milvus;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * List collections
 *
 * Generated from protobuf message <code>milvus.proto.milvus.ShowCollectionsRequest</code>
 */
class ShowCollectionsRequest extends \Google\Protobuf\Internal\Message
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
     * Not useful for now
     *
     * Generated from protobuf field <code>uint64 time_stamp = 3;</code>
     */
    protected $time_stamp = 0;
    /**
     * Decide return Loaded collections or All collections(Optional)
     *
     * Generated from protobuf field <code>.milvus.proto.milvus.ShowType type = 4;</code>
     */
    protected $type = 0;
    /**
     * When type is InMemory, will return these collection's inMemory_percentages.(Optional)
     * Deprecated: use GetLoadingProgress rpc instead
     *
     * Generated from protobuf field <code>repeated string collection_names = 5;</code>
     */
    private $collection_names;

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
     *     @type int|string $time_stamp
     *           Not useful for now
     *     @type int $type
     *           Decide return Loaded collections or All collections(Optional)
     *     @type array<string>|\Google\Protobuf\Internal\RepeatedField $collection_names
     *           When type is InMemory, will return these collection's inMemory_percentages.(Optional)
     *           Deprecated: use GetLoadingProgress rpc instead
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
     * Not useful for now
     *
     * Generated from protobuf field <code>uint64 time_stamp = 3;</code>
     * @return int|string
     */
    public function getTimeStamp()
    {
        return $this->time_stamp;
    }

    /**
     * Not useful for now
     *
     * Generated from protobuf field <code>uint64 time_stamp = 3;</code>
     * @param int|string $var
     * @return $this
     */
    public function setTimeStamp($var)
    {
        GPBUtil::checkUint64($var);
        $this->time_stamp = $var;

        return $this;
    }

    /**
     * Decide return Loaded collections or All collections(Optional)
     *
     * Generated from protobuf field <code>.milvus.proto.milvus.ShowType type = 4;</code>
     * @return int
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Decide return Loaded collections or All collections(Optional)
     *
     * Generated from protobuf field <code>.milvus.proto.milvus.ShowType type = 4;</code>
     * @param int $var
     * @return $this
     */
    public function setType($var)
    {
        GPBUtil::checkEnum($var, \Milvus\Proto\Milvus\ShowType::class);
        $this->type = $var;

        return $this;
    }

    /**
     * When type is InMemory, will return these collection's inMemory_percentages.(Optional)
     * Deprecated: use GetLoadingProgress rpc instead
     *
     * Generated from protobuf field <code>repeated string collection_names = 5;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getCollectionNames()
    {
        return $this->collection_names;
    }

    /**
     * When type is InMemory, will return these collection's inMemory_percentages.(Optional)
     * Deprecated: use GetLoadingProgress rpc instead
     *
     * Generated from protobuf field <code>repeated string collection_names = 5;</code>
     * @param array<string>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setCollectionNames($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->collection_names = $arr;

        return $this;
    }

}

