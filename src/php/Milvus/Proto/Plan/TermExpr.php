<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: plan.proto

namespace Milvus\Proto\Plan;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>milvus.proto.plan.TermExpr</code>
 */
class TermExpr extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>.milvus.proto.plan.ColumnInfo column_info = 1;</code>
     */
    protected $column_info = null;
    /**
     * Generated from protobuf field <code>repeated .milvus.proto.plan.GenericValue values = 2;</code>
     */
    private $values;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Milvus\Proto\Plan\ColumnInfo $column_info
     *     @type array<\Milvus\Proto\Plan\GenericValue>|\Google\Protobuf\Internal\RepeatedField $values
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Plan::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>.milvus.proto.plan.ColumnInfo column_info = 1;</code>
     * @return \Milvus\Proto\Plan\ColumnInfo|null
     */
    public function getColumnInfo()
    {
        return $this->column_info;
    }

    public function hasColumnInfo()
    {
        return isset($this->column_info);
    }

    public function clearColumnInfo()
    {
        unset($this->column_info);
    }

    /**
     * Generated from protobuf field <code>.milvus.proto.plan.ColumnInfo column_info = 1;</code>
     * @param \Milvus\Proto\Plan\ColumnInfo $var
     * @return $this
     */
    public function setColumnInfo($var)
    {
        GPBUtil::checkMessage($var, \Milvus\Proto\Plan\ColumnInfo::class);
        $this->column_info = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>repeated .milvus.proto.plan.GenericValue values = 2;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getValues()
    {
        return $this->values;
    }

    /**
     * Generated from protobuf field <code>repeated .milvus.proto.plan.GenericValue values = 2;</code>
     * @param array<\Milvus\Proto\Plan\GenericValue>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setValues($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Milvus\Proto\Plan\GenericValue::class);
        $this->values = $arr;

        return $this;
    }

}

