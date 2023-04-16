<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: common.proto

namespace Milvus\Proto\Common;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>milvus.proto.common.PlaceholderValue</code>
 */
class PlaceholderValue extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>string tag = 1;</code>
     */
    protected $tag = '';
    /**
     * Generated from protobuf field <code>.milvus.proto.common.PlaceholderType type = 2;</code>
     */
    protected $type = 0;
    /**
     * values is a 2d-array, every array contains a vector
     *
     * Generated from protobuf field <code>repeated bytes values = 3;</code>
     */
    private $values;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $tag
     *     @type int $type
     *     @type array<string>|\Google\Protobuf\Internal\RepeatedField $values
     *           values is a 2d-array, every array contains a vector
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Common::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>string tag = 1;</code>
     * @return string
     */
    public function getTag()
    {
        return $this->tag;
    }

    /**
     * Generated from protobuf field <code>string tag = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setTag($var)
    {
        GPBUtil::checkString($var, True);
        $this->tag = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.milvus.proto.common.PlaceholderType type = 2;</code>
     * @return int
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Generated from protobuf field <code>.milvus.proto.common.PlaceholderType type = 2;</code>
     * @param int $var
     * @return $this
     */
    public function setType($var)
    {
        GPBUtil::checkEnum($var, \Milvus\Proto\Common\PlaceholderType::class);
        $this->type = $var;

        return $this;
    }

    /**
     * values is a 2d-array, every array contains a vector
     *
     * Generated from protobuf field <code>repeated bytes values = 3;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getValues()
    {
        return $this->values;
    }

    /**
     * values is a 2d-array, every array contains a vector
     *
     * Generated from protobuf field <code>repeated bytes values = 3;</code>
     * @param array<string>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setValues($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::BYTES);
        $this->values = $arr;

        return $this;
    }

}

