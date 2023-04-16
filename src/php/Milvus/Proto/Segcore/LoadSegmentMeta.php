<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: segcore.proto

namespace Milvus\Proto\Segcore;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>milvus.proto.segcore.LoadSegmentMeta</code>
 */
class LoadSegmentMeta extends \Google\Protobuf\Internal\Message
{
    /**
     * TODOs
     *
     * Generated from protobuf field <code>repeated .milvus.proto.segcore.LoadFieldMeta metas = 1;</code>
     */
    private $metas;
    /**
     * Generated from protobuf field <code>int64 total_size = 2;</code>
     */
    protected $total_size = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type array<\Milvus\Proto\Segcore\LoadFieldMeta>|\Google\Protobuf\Internal\RepeatedField $metas
     *           TODOs
     *     @type int|string $total_size
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Segcore::initOnce();
        parent::__construct($data);
    }

    /**
     * TODOs
     *
     * Generated from protobuf field <code>repeated .milvus.proto.segcore.LoadFieldMeta metas = 1;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getMetas()
    {
        return $this->metas;
    }

    /**
     * TODOs
     *
     * Generated from protobuf field <code>repeated .milvus.proto.segcore.LoadFieldMeta metas = 1;</code>
     * @param array<\Milvus\Proto\Segcore\LoadFieldMeta>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setMetas($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Milvus\Proto\Segcore\LoadFieldMeta::class);
        $this->metas = $arr;

        return $this;
    }

    /**
     * Generated from protobuf field <code>int64 total_size = 2;</code>
     * @return int|string
     */
    public function getTotalSize()
    {
        return $this->total_size;
    }

    /**
     * Generated from protobuf field <code>int64 total_size = 2;</code>
     * @param int|string $var
     * @return $this
     */
    public function setTotalSize($var)
    {
        GPBUtil::checkInt64($var);
        $this->total_size = $var;

        return $this;
    }

}

