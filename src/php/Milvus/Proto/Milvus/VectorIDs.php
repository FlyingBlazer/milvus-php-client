<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: milvus.proto

namespace Milvus\Proto\Milvus;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>milvus.proto.milvus.VectorIDs</code>
 */
class VectorIDs extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>string collection_name = 1;</code>
     */
    protected $collection_name = '';
    /**
     * Generated from protobuf field <code>string field_name = 2;</code>
     */
    protected $field_name = '';
    /**
     * Generated from protobuf field <code>.milvus.proto.schema.IDs id_array = 3;</code>
     */
    protected $id_array = null;
    /**
     * Generated from protobuf field <code>repeated string partition_names = 4;</code>
     */
    private $partition_names;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $collection_name
     *     @type string $field_name
     *     @type \Milvus\Proto\Schema\IDs $id_array
     *     @type array<string>|\Google\Protobuf\Internal\RepeatedField $partition_names
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Milvus::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>string collection_name = 1;</code>
     * @return string
     */
    public function getCollectionName()
    {
        return $this->collection_name;
    }

    /**
     * Generated from protobuf field <code>string collection_name = 1;</code>
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
     * Generated from protobuf field <code>string field_name = 2;</code>
     * @return string
     */
    public function getFieldName()
    {
        return $this->field_name;
    }

    /**
     * Generated from protobuf field <code>string field_name = 2;</code>
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
     * Generated from protobuf field <code>.milvus.proto.schema.IDs id_array = 3;</code>
     * @return \Milvus\Proto\Schema\IDs|null
     */
    public function getIdArray()
    {
        return $this->id_array;
    }

    public function hasIdArray()
    {
        return isset($this->id_array);
    }

    public function clearIdArray()
    {
        unset($this->id_array);
    }

    /**
     * Generated from protobuf field <code>.milvus.proto.schema.IDs id_array = 3;</code>
     * @param \Milvus\Proto\Schema\IDs $var
     * @return $this
     */
    public function setIdArray($var)
    {
        GPBUtil::checkMessage($var, \Milvus\Proto\Schema\IDs::class);
        $this->id_array = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>repeated string partition_names = 4;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getPartitionNames()
    {
        return $this->partition_names;
    }

    /**
     * Generated from protobuf field <code>repeated string partition_names = 4;</code>
     * @param array<string>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setPartitionNames($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->partition_names = $arr;

        return $this;
    }

}

