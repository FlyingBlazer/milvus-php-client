<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: milvus.proto

namespace Milvus\Proto\Milvus;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>milvus.proto.milvus.UserResult</code>
 */
class UserResult extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>.milvus.proto.milvus.UserEntity user = 1;</code>
     */
    protected $user = null;
    /**
     * Generated from protobuf field <code>repeated .milvus.proto.milvus.RoleEntity roles = 2;</code>
     */
    private $roles;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Milvus\Proto\Milvus\UserEntity $user
     *     @type array<\Milvus\Proto\Milvus\RoleEntity>|\Google\Protobuf\Internal\RepeatedField $roles
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Milvus::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>.milvus.proto.milvus.UserEntity user = 1;</code>
     * @return \Milvus\Proto\Milvus\UserEntity|null
     */
    public function getUser()
    {
        return $this->user;
    }

    public function hasUser()
    {
        return isset($this->user);
    }

    public function clearUser()
    {
        unset($this->user);
    }

    /**
     * Generated from protobuf field <code>.milvus.proto.milvus.UserEntity user = 1;</code>
     * @param \Milvus\Proto\Milvus\UserEntity $var
     * @return $this
     */
    public function setUser($var)
    {
        GPBUtil::checkMessage($var, \Milvus\Proto\Milvus\UserEntity::class);
        $this->user = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>repeated .milvus.proto.milvus.RoleEntity roles = 2;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getRoles()
    {
        return $this->roles;
    }

    /**
     * Generated from protobuf field <code>repeated .milvus.proto.milvus.RoleEntity roles = 2;</code>
     * @param array<\Milvus\Proto\Milvus\RoleEntity>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setRoles($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Milvus\Proto\Milvus\RoleEntity::class);
        $this->roles = $arr;

        return $this;
    }

}

