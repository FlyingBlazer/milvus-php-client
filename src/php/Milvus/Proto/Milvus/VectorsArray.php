<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: milvus.proto

namespace Milvus\Proto\Milvus;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>milvus.proto.milvus.VectorsArray</code>
 */
class VectorsArray extends \Google\Protobuf\Internal\Message
{
    protected $array;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Milvus\Proto\Milvus\VectorIDs $id_array
     *           vector ids
     *     @type \Milvus\Proto\Schema\VectorField $data_array
     *           vectors data
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Milvus::initOnce();
        parent::__construct($data);
    }

    /**
     * vector ids
     *
     * Generated from protobuf field <code>.milvus.proto.milvus.VectorIDs id_array = 1;</code>
     * @return \Milvus\Proto\Milvus\VectorIDs|null
     */
    public function getIdArray()
    {
        return $this->readOneof(1);
    }

    public function hasIdArray()
    {
        return $this->hasOneof(1);
    }

    /**
     * vector ids
     *
     * Generated from protobuf field <code>.milvus.proto.milvus.VectorIDs id_array = 1;</code>
     * @param \Milvus\Proto\Milvus\VectorIDs $var
     * @return $this
     */
    public function setIdArray($var)
    {
        GPBUtil::checkMessage($var, \Milvus\Proto\Milvus\VectorIDs::class);
        $this->writeOneof(1, $var);

        return $this;
    }

    /**
     * vectors data
     *
     * Generated from protobuf field <code>.milvus.proto.schema.VectorField data_array = 2;</code>
     * @return \Milvus\Proto\Schema\VectorField|null
     */
    public function getDataArray()
    {
        return $this->readOneof(2);
    }

    public function hasDataArray()
    {
        return $this->hasOneof(2);
    }

    /**
     * vectors data
     *
     * Generated from protobuf field <code>.milvus.proto.schema.VectorField data_array = 2;</code>
     * @param \Milvus\Proto\Schema\VectorField $var
     * @return $this
     */
    public function setDataArray($var)
    {
        GPBUtil::checkMessage($var, \Milvus\Proto\Schema\VectorField::class);
        $this->writeOneof(2, $var);

        return $this;
    }

    /**
     * @return string
     */
    public function getArray()
    {
        return $this->whichOneof("array");
    }

}

