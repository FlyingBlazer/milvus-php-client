<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: query_coord.proto

namespace Milvus\Proto\Query;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>milvus.proto.query.PartitionStates</code>
 */
class PartitionStates extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>int64 partitionID = 1;</code>
     */
    protected $partitionID = 0;
    /**
     * Generated from protobuf field <code>.milvus.proto.query.PartitionState state = 2;</code>
     */
    protected $state = 0;
    /**
     * Generated from protobuf field <code>int64 inMemory_percentage = 3;</code>
     */
    protected $inMemory_percentage = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int|string $partitionID
     *     @type int $state
     *     @type int|string $inMemory_percentage
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\QueryCoord::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>int64 partitionID = 1;</code>
     * @return int|string
     */
    public function getPartitionID()
    {
        return $this->partitionID;
    }

    /**
     * Generated from protobuf field <code>int64 partitionID = 1;</code>
     * @param int|string $var
     * @return $this
     */
    public function setPartitionID($var)
    {
        GPBUtil::checkInt64($var);
        $this->partitionID = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.milvus.proto.query.PartitionState state = 2;</code>
     * @return int
     */
    public function getState()
    {
        return $this->state;
    }

    /**
     * Generated from protobuf field <code>.milvus.proto.query.PartitionState state = 2;</code>
     * @param int $var
     * @return $this
     */
    public function setState($var)
    {
        GPBUtil::checkEnum($var, \Milvus\Proto\Query\PartitionState::class);
        $this->state = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>int64 inMemory_percentage = 3;</code>
     * @return int|string
     */
    public function getInMemoryPercentage()
    {
        return $this->inMemory_percentage;
    }

    /**
     * Generated from protobuf field <code>int64 inMemory_percentage = 3;</code>
     * @param int|string $var
     * @return $this
     */
    public function setInMemoryPercentage($var)
    {
        GPBUtil::checkInt64($var);
        $this->inMemory_percentage = $var;

        return $this;
    }

}

