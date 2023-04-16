<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: milvus.proto

namespace Milvus\Proto\Milvus;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * transfer `nodeNum` nodes from `source_resource_group` to `target_resource_group`
 *
 * Generated from protobuf message <code>milvus.proto.milvus.TransferNodeRequest</code>
 */
class TransferNodeRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>.milvus.proto.common.MsgBase base = 1;</code>
     */
    protected $base = null;
    /**
     * Generated from protobuf field <code>string source_resource_group = 2;</code>
     */
    protected $source_resource_group = '';
    /**
     * Generated from protobuf field <code>string target_resource_group = 3;</code>
     */
    protected $target_resource_group = '';
    /**
     * Generated from protobuf field <code>int32 num_node = 4;</code>
     */
    protected $num_node = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Milvus\Proto\Common\MsgBase $base
     *     @type string $source_resource_group
     *     @type string $target_resource_group
     *     @type int $num_node
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Milvus::initOnce();
        parent::__construct($data);
    }

    /**
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
     * Generated from protobuf field <code>string source_resource_group = 2;</code>
     * @return string
     */
    public function getSourceResourceGroup()
    {
        return $this->source_resource_group;
    }

    /**
     * Generated from protobuf field <code>string source_resource_group = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setSourceResourceGroup($var)
    {
        GPBUtil::checkString($var, True);
        $this->source_resource_group = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string target_resource_group = 3;</code>
     * @return string
     */
    public function getTargetResourceGroup()
    {
        return $this->target_resource_group;
    }

    /**
     * Generated from protobuf field <code>string target_resource_group = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setTargetResourceGroup($var)
    {
        GPBUtil::checkString($var, True);
        $this->target_resource_group = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>int32 num_node = 4;</code>
     * @return int
     */
    public function getNumNode()
    {
        return $this->num_node;
    }

    /**
     * Generated from protobuf field <code>int32 num_node = 4;</code>
     * @param int $var
     * @return $this
     */
    public function setNumNode($var)
    {
        GPBUtil::checkInt32($var);
        $this->num_node = $var;

        return $this;
    }

}

