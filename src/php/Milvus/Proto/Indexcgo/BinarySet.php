<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: index_cgo_msg.proto

namespace Milvus\Proto\Indexcgo;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>milvus.proto.indexcgo.BinarySet</code>
 */
class BinarySet extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>repeated .milvus.proto.indexcgo.Binary datas = 1;</code>
     */
    private $datas;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type array<\Milvus\Proto\Indexcgo\Binary>|\Google\Protobuf\Internal\RepeatedField $datas
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\IndexCgoMsg::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>repeated .milvus.proto.indexcgo.Binary datas = 1;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getDatas()
    {
        return $this->datas;
    }

    /**
     * Generated from protobuf field <code>repeated .milvus.proto.indexcgo.Binary datas = 1;</code>
     * @param array<\Milvus\Proto\Indexcgo\Binary>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setDatas($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Milvus\Proto\Indexcgo\Binary::class);
        $this->datas = $arr;

        return $this;
    }

}

