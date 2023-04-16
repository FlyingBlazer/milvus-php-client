<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: milvus.proto

namespace Milvus\Proto\Milvus;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>milvus.proto.milvus.OperateUserRoleRequest</code>
 */
class OperateUserRoleRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Not useful for now
     *
     * Generated from protobuf field <code>.milvus.proto.common.MsgBase base = 1;</code>
     */
    protected $base = null;
    /**
     * username
     *
     * Generated from protobuf field <code>string username = 2;</code>
     */
    protected $username = '';
    /**
     * role name
     *
     * Generated from protobuf field <code>string role_name = 3;</code>
     */
    protected $role_name = '';
    /**
     * operation type
     *
     * Generated from protobuf field <code>.milvus.proto.milvus.OperateUserRoleType type = 4;</code>
     */
    protected $type = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Milvus\Proto\Common\MsgBase $base
     *           Not useful for now
     *     @type string $username
     *           username
     *     @type string $role_name
     *           role name
     *     @type int $type
     *           operation type
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Milvus::initOnce();
        parent::__construct($data);
    }

    /**
     * Not useful for now
     *
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
     * Not useful for now
     *
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
     * username
     *
     * Generated from protobuf field <code>string username = 2;</code>
     * @return string
     */
    public function getUsername()
    {
        return $this->username;
    }

    /**
     * username
     *
     * Generated from protobuf field <code>string username = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setUsername($var)
    {
        GPBUtil::checkString($var, True);
        $this->username = $var;

        return $this;
    }

    /**
     * role name
     *
     * Generated from protobuf field <code>string role_name = 3;</code>
     * @return string
     */
    public function getRoleName()
    {
        return $this->role_name;
    }

    /**
     * role name
     *
     * Generated from protobuf field <code>string role_name = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setRoleName($var)
    {
        GPBUtil::checkString($var, True);
        $this->role_name = $var;

        return $this;
    }

    /**
     * operation type
     *
     * Generated from protobuf field <code>.milvus.proto.milvus.OperateUserRoleType type = 4;</code>
     * @return int
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * operation type
     *
     * Generated from protobuf field <code>.milvus.proto.milvus.OperateUserRoleType type = 4;</code>
     * @param int $var
     * @return $this
     */
    public function setType($var)
    {
        GPBUtil::checkEnum($var, \Milvus\Proto\Milvus\OperateUserRoleType::class);
        $this->type = $var;

        return $this;
    }

}

