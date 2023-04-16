<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: data_coord.proto

namespace Milvus\Proto\Data;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>milvus.proto.data.SegmentReferenceLock</code>
 */
class SegmentReferenceLock extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>int64 taskID = 1;</code>
     */
    protected $taskID = 0;
    /**
     * Generated from protobuf field <code>int64 nodeID = 2;</code>
     */
    protected $nodeID = 0;
    /**
     * Generated from protobuf field <code>repeated int64 segmentIDs = 3;</code>
     */
    private $segmentIDs;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int|string $taskID
     *     @type int|string $nodeID
     *     @type array<int>|array<string>|\Google\Protobuf\Internal\RepeatedField $segmentIDs
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\DataCoord::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>int64 taskID = 1;</code>
     * @return int|string
     */
    public function getTaskID()
    {
        return $this->taskID;
    }

    /**
     * Generated from protobuf field <code>int64 taskID = 1;</code>
     * @param int|string $var
     * @return $this
     */
    public function setTaskID($var)
    {
        GPBUtil::checkInt64($var);
        $this->taskID = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>int64 nodeID = 2;</code>
     * @return int|string
     */
    public function getNodeID()
    {
        return $this->nodeID;
    }

    /**
     * Generated from protobuf field <code>int64 nodeID = 2;</code>
     * @param int|string $var
     * @return $this
     */
    public function setNodeID($var)
    {
        GPBUtil::checkInt64($var);
        $this->nodeID = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>repeated int64 segmentIDs = 3;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getSegmentIDs()
    {
        return $this->segmentIDs;
    }

    /**
     * Generated from protobuf field <code>repeated int64 segmentIDs = 3;</code>
     * @param array<int>|array<string>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setSegmentIDs($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::INT64);
        $this->segmentIDs = $arr;

        return $this;
    }

}

