<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: plan.proto

namespace Milvus\Proto\Plan;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>milvus.proto.plan.BinaryExpr</code>
 */
class BinaryExpr extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>.milvus.proto.plan.BinaryExpr.BinaryOp op = 1;</code>
     */
    protected $op = 0;
    /**
     * Generated from protobuf field <code>.milvus.proto.plan.Expr left = 2;</code>
     */
    protected $left = null;
    /**
     * Generated from protobuf field <code>.milvus.proto.plan.Expr right = 3;</code>
     */
    protected $right = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $op
     *     @type \Milvus\Proto\Plan\Expr $left
     *     @type \Milvus\Proto\Plan\Expr $right
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Plan::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>.milvus.proto.plan.BinaryExpr.BinaryOp op = 1;</code>
     * @return int
     */
    public function getOp()
    {
        return $this->op;
    }

    /**
     * Generated from protobuf field <code>.milvus.proto.plan.BinaryExpr.BinaryOp op = 1;</code>
     * @param int $var
     * @return $this
     */
    public function setOp($var)
    {
        GPBUtil::checkEnum($var, \Milvus\Proto\Plan\BinaryExpr\BinaryOp::class);
        $this->op = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.milvus.proto.plan.Expr left = 2;</code>
     * @return \Milvus\Proto\Plan\Expr|null
     */
    public function getLeft()
    {
        return $this->left;
    }

    public function hasLeft()
    {
        return isset($this->left);
    }

    public function clearLeft()
    {
        unset($this->left);
    }

    /**
     * Generated from protobuf field <code>.milvus.proto.plan.Expr left = 2;</code>
     * @param \Milvus\Proto\Plan\Expr $var
     * @return $this
     */
    public function setLeft($var)
    {
        GPBUtil::checkMessage($var, \Milvus\Proto\Plan\Expr::class);
        $this->left = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.milvus.proto.plan.Expr right = 3;</code>
     * @return \Milvus\Proto\Plan\Expr|null
     */
    public function getRight()
    {
        return $this->right;
    }

    public function hasRight()
    {
        return isset($this->right);
    }

    public function clearRight()
    {
        unset($this->right);
    }

    /**
     * Generated from protobuf field <code>.milvus.proto.plan.Expr right = 3;</code>
     * @param \Milvus\Proto\Plan\Expr $var
     * @return $this
     */
    public function setRight($var)
    {
        GPBUtil::checkMessage($var, \Milvus\Proto\Plan\Expr::class);
        $this->right = $var;

        return $this;
    }

}

