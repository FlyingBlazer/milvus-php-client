<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: index_coord.proto

namespace Milvus\Proto\Index;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>milvus.proto.index.FieldIndex</code>
 */
class FieldIndex extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>.milvus.proto.index.IndexInfo index_info = 1;</code>
     */
    protected $index_info = null;
    /**
     * Generated from protobuf field <code>bool deleted = 2;</code>
     */
    protected $deleted = false;
    /**
     * Generated from protobuf field <code>uint64 create_time = 3;</code>
     */
    protected $create_time = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Milvus\Proto\Index\IndexInfo $index_info
     *     @type bool $deleted
     *     @type int|string $create_time
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\IndexCoord::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>.milvus.proto.index.IndexInfo index_info = 1;</code>
     * @return \Milvus\Proto\Index\IndexInfo|null
     */
    public function getIndexInfo()
    {
        return $this->index_info;
    }

    public function hasIndexInfo()
    {
        return isset($this->index_info);
    }

    public function clearIndexInfo()
    {
        unset($this->index_info);
    }

    /**
     * Generated from protobuf field <code>.milvus.proto.index.IndexInfo index_info = 1;</code>
     * @param \Milvus\Proto\Index\IndexInfo $var
     * @return $this
     */
    public function setIndexInfo($var)
    {
        GPBUtil::checkMessage($var, \Milvus\Proto\Index\IndexInfo::class);
        $this->index_info = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>bool deleted = 2;</code>
     * @return bool
     */
    public function getDeleted()
    {
        return $this->deleted;
    }

    /**
     * Generated from protobuf field <code>bool deleted = 2;</code>
     * @param bool $var
     * @return $this
     */
    public function setDeleted($var)
    {
        GPBUtil::checkBool($var);
        $this->deleted = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint64 create_time = 3;</code>
     * @return int|string
     */
    public function getCreateTime()
    {
        return $this->create_time;
    }

    /**
     * Generated from protobuf field <code>uint64 create_time = 3;</code>
     * @param int|string $var
     * @return $this
     */
    public function setCreateTime($var)
    {
        GPBUtil::checkUint64($var);
        $this->create_time = $var;

        return $this;
    }

}

