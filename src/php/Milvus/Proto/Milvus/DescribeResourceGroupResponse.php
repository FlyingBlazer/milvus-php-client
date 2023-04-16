<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: milvus.proto

namespace Milvus\Proto\Milvus;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>milvus.proto.milvus.DescribeResourceGroupResponse</code>
 */
class DescribeResourceGroupResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>.milvus.proto.common.Status status = 1;</code>
     */
    protected $status = null;
    /**
     * Generated from protobuf field <code>.milvus.proto.milvus.ResourceGroup resource_group = 2;</code>
     */
    protected $resource_group = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Milvus\Proto\Common\Status $status
     *     @type \Milvus\Proto\Milvus\ResourceGroup $resource_group
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Milvus::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>.milvus.proto.common.Status status = 1;</code>
     * @return \Milvus\Proto\Common\Status|null
     */
    public function getStatus()
    {
        return $this->status;
    }

    public function hasStatus()
    {
        return isset($this->status);
    }

    public function clearStatus()
    {
        unset($this->status);
    }

    /**
     * Generated from protobuf field <code>.milvus.proto.common.Status status = 1;</code>
     * @param \Milvus\Proto\Common\Status $var
     * @return $this
     */
    public function setStatus($var)
    {
        GPBUtil::checkMessage($var, \Milvus\Proto\Common\Status::class);
        $this->status = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.milvus.proto.milvus.ResourceGroup resource_group = 2;</code>
     * @return \Milvus\Proto\Milvus\ResourceGroup|null
     */
    public function getResourceGroup()
    {
        return $this->resource_group;
    }

    public function hasResourceGroup()
    {
        return isset($this->resource_group);
    }

    public function clearResourceGroup()
    {
        unset($this->resource_group);
    }

    /**
     * Generated from protobuf field <code>.milvus.proto.milvus.ResourceGroup resource_group = 2;</code>
     * @param \Milvus\Proto\Milvus\ResourceGroup $var
     * @return $this
     */
    public function setResourceGroup($var)
    {
        GPBUtil::checkMessage($var, \Milvus\Proto\Milvus\ResourceGroup::class);
        $this->resource_group = $var;

        return $this;
    }

}

