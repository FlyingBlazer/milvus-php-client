<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: milvus.proto

namespace Milvus\Proto\Milvus;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 *  Get index building progress
 *
 * Generated from protobuf message <code>milvus.proto.milvus.GetIndexBuildProgressRequest</code>
 */
class GetIndexBuildProgressRequest extends \Google\Protobuf\Internal\Message
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
     * The collection name in milvus
     *
     * Generated from protobuf field <code>string collection_name = 3;</code>
     */
    protected $collection_name = '';
    /**
     * The vector field name in this collection
     *
     * Generated from protobuf field <code>string field_name = 4;</code>
     */
    protected $field_name = '';
    /**
     * Not useful for now
     *
     * Generated from protobuf field <code>string index_name = 5;</code>
     */
    protected $index_name = '';

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
     *           The collection name in milvus
     *     @type string $field_name
     *           The vector field name in this collection
     *     @type string $index_name
     *           Not useful for now
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
     * The collection name in milvus
     *
     * Generated from protobuf field <code>string collection_name = 3;</code>
     * @return string
     */
    public function getCollectionName()
    {
        return $this->collection_name;
    }

    /**
     * The collection name in milvus
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
     * The vector field name in this collection
     *
     * Generated from protobuf field <code>string field_name = 4;</code>
     * @return string
     */
    public function getFieldName()
    {
        return $this->field_name;
    }

    /**
     * The vector field name in this collection
     *
     * Generated from protobuf field <code>string field_name = 4;</code>
     * @param string $var
     * @return $this
     */
    public function setFieldName($var)
    {
        GPBUtil::checkString($var, True);
        $this->field_name = $var;

        return $this;
    }

    /**
     * Not useful for now
     *
     * Generated from protobuf field <code>string index_name = 5;</code>
     * @return string
     */
    public function getIndexName()
    {
        return $this->index_name;
    }

    /**
     * Not useful for now
     *
     * Generated from protobuf field <code>string index_name = 5;</code>
     * @param string $var
     * @return $this
     */
    public function setIndexName($var)
    {
        GPBUtil::checkString($var, True);
        $this->index_name = $var;

        return $this;
    }

}

