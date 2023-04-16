<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: data_coord.proto

namespace Milvus\Proto\Data;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>milvus.proto.data.GetSegmentInfoRequest</code>
 */
class GetSegmentInfoRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>.milvus.proto.common.MsgBase base = 1;</code>
     */
    protected $base = null;
    /**
     * Generated from protobuf field <code>repeated int64 segmentIDs = 2;</code>
     */
    private $segmentIDs;
    /**
     * Generated from protobuf field <code>bool includeUnHealthy = 3;</code>
     */
    protected $includeUnHealthy = false;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Milvus\Proto\Common\MsgBase $base
     *     @type array<int>|array<string>|\Google\Protobuf\Internal\RepeatedField $segmentIDs
     *     @type bool $includeUnHealthy
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\DataCoord::initOnce();
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
     * Generated from protobuf field <code>repeated int64 segmentIDs = 2;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getSegmentIDs()
    {
        return $this->segmentIDs;
    }

    /**
     * Generated from protobuf field <code>repeated int64 segmentIDs = 2;</code>
     * @param array<int>|array<string>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setSegmentIDs($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::INT64);
        $this->segmentIDs = $arr;

        return $this;
    }

    /**
     * Generated from protobuf field <code>bool includeUnHealthy = 3;</code>
     * @return bool
     */
    public function getIncludeUnHealthy()
    {
        return $this->includeUnHealthy;
    }

    /**
     * Generated from protobuf field <code>bool includeUnHealthy = 3;</code>
     * @param bool $var
     * @return $this
     */
    public function setIncludeUnHealthy($var)
    {
        GPBUtil::checkBool($var);
        $this->includeUnHealthy = $var;

        return $this;
    }

}

