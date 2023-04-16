<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: etcd_meta.proto

namespace Milvus\Proto\Etcd;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>milvus.proto.etcd.IndexInfo</code>
 */
class IndexInfo extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>string index_name = 1;</code>
     */
    protected $index_name = '';
    /**
     * Generated from protobuf field <code>int64 indexID = 2;</code>
     */
    protected $indexID = 0;
    /**
     * Generated from protobuf field <code>repeated .milvus.proto.common.KeyValuePair index_params = 3;</code>
     */
    private $index_params;
    /**
     * Generated from protobuf field <code>bool deleted = 4;</code>
     */
    protected $deleted = false;
    /**
     * Generated from protobuf field <code>uint64 create_time = 5;</code>
     */
    protected $create_time = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $index_name
     *     @type int|string $indexID
     *     @type array<\Milvus\Proto\Common\KeyValuePair>|\Google\Protobuf\Internal\RepeatedField $index_params
     *     @type bool $deleted
     *     @type int|string $create_time
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\EtcdMeta::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>string index_name = 1;</code>
     * @return string
     */
    public function getIndexName()
    {
        return $this->index_name;
    }

    /**
     * Generated from protobuf field <code>string index_name = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setIndexName($var)
    {
        GPBUtil::checkString($var, True);
        $this->index_name = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>int64 indexID = 2;</code>
     * @return int|string
     */
    public function getIndexID()
    {
        return $this->indexID;
    }

    /**
     * Generated from protobuf field <code>int64 indexID = 2;</code>
     * @param int|string $var
     * @return $this
     */
    public function setIndexID($var)
    {
        GPBUtil::checkInt64($var);
        $this->indexID = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>repeated .milvus.proto.common.KeyValuePair index_params = 3;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getIndexParams()
    {
        return $this->index_params;
    }

    /**
     * Generated from protobuf field <code>repeated .milvus.proto.common.KeyValuePair index_params = 3;</code>
     * @param array<\Milvus\Proto\Common\KeyValuePair>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setIndexParams($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Milvus\Proto\Common\KeyValuePair::class);
        $this->index_params = $arr;

        return $this;
    }

    /**
     * Generated from protobuf field <code>bool deleted = 4;</code>
     * @return bool
     */
    public function getDeleted()
    {
        return $this->deleted;
    }

    /**
     * Generated from protobuf field <code>bool deleted = 4;</code>
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
     * Generated from protobuf field <code>uint64 create_time = 5;</code>
     * @return int|string
     */
    public function getCreateTime()
    {
        return $this->create_time;
    }

    /**
     * Generated from protobuf field <code>uint64 create_time = 5;</code>
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

