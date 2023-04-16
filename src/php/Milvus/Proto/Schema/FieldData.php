<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: schema.proto

namespace Milvus\Proto\Schema;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>milvus.proto.schema.FieldData</code>
 */
class FieldData extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>.milvus.proto.schema.DataType type = 1;</code>
     */
    protected $type = 0;
    /**
     * Generated from protobuf field <code>string field_name = 2;</code>
     */
    protected $field_name = '';
    /**
     * Generated from protobuf field <code>int64 field_id = 5;</code>
     */
    protected $field_id = 0;
    protected $field;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $type
     *     @type string $field_name
     *     @type \Milvus\Proto\Schema\ScalarField $scalars
     *     @type \Milvus\Proto\Schema\VectorField $vectors
     *     @type int|string $field_id
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Schema::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>.milvus.proto.schema.DataType type = 1;</code>
     * @return int
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Generated from protobuf field <code>.milvus.proto.schema.DataType type = 1;</code>
     * @param int $var
     * @return $this
     */
    public function setType($var)
    {
        GPBUtil::checkEnum($var, \Milvus\Proto\Schema\DataType::class);
        $this->type = $var;

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
     * Generated from protobuf field <code>.milvus.proto.schema.ScalarField scalars = 3;</code>
     * @return \Milvus\Proto\Schema\ScalarField|null
     */
    public function getScalars()
    {
        return $this->readOneof(3);
    }

    public function hasScalars()
    {
        return $this->hasOneof(3);
    }

    /**
     * Generated from protobuf field <code>.milvus.proto.schema.ScalarField scalars = 3;</code>
     * @param \Milvus\Proto\Schema\ScalarField $var
     * @return $this
     */
    public function setScalars($var)
    {
        GPBUtil::checkMessage($var, \Milvus\Proto\Schema\ScalarField::class);
        $this->writeOneof(3, $var);

        return $this;
    }

    /**
     * Generated from protobuf field <code>.milvus.proto.schema.VectorField vectors = 4;</code>
     * @return \Milvus\Proto\Schema\VectorField|null
     */
    public function getVectors()
    {
        return $this->readOneof(4);
    }

    public function hasVectors()
    {
        return $this->hasOneof(4);
    }

    /**
     * Generated from protobuf field <code>.milvus.proto.schema.VectorField vectors = 4;</code>
     * @param \Milvus\Proto\Schema\VectorField $var
     * @return $this
     */
    public function setVectors($var)
    {
        GPBUtil::checkMessage($var, \Milvus\Proto\Schema\VectorField::class);
        $this->writeOneof(4, $var);

        return $this;
    }

    /**
     * Generated from protobuf field <code>int64 field_id = 5;</code>
     * @return int|string
     */
    public function getFieldId()
    {
        return $this->field_id;
    }

    /**
     * Generated from protobuf field <code>int64 field_id = 5;</code>
     * @param int|string $var
     * @return $this
     */
    public function setFieldId($var)
    {
        GPBUtil::checkInt64($var);
        $this->field_id = $var;

        return $this;
    }

    /**
     * @return string
     */
    public function getField()
    {
        return $this->whichOneof("field");
    }

}

