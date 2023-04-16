<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: milvus.proto

namespace Milvus\Proto\Milvus;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>milvus.proto.milvus.PersistentSegmentInfo</code>
 */
class PersistentSegmentInfo extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>int64 segmentID = 1;</code>
     */
    protected $segmentID = 0;
    /**
     * Generated from protobuf field <code>int64 collectionID = 2;</code>
     */
    protected $collectionID = 0;
    /**
     * Generated from protobuf field <code>int64 partitionID = 3;</code>
     */
    protected $partitionID = 0;
    /**
     * Generated from protobuf field <code>int64 num_rows = 4;</code>
     */
    protected $num_rows = 0;
    /**
     * Generated from protobuf field <code>.milvus.proto.common.SegmentState state = 5;</code>
     */
    protected $state = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int|string $segmentID
     *     @type int|string $collectionID
     *     @type int|string $partitionID
     *     @type int|string $num_rows
     *     @type int $state
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Milvus::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>int64 segmentID = 1;</code>
     * @return int|string
     */
    public function getSegmentID()
    {
        return $this->segmentID;
    }

    /**
     * Generated from protobuf field <code>int64 segmentID = 1;</code>
     * @param int|string $var
     * @return $this
     */
    public function setSegmentID($var)
    {
        GPBUtil::checkInt64($var);
        $this->segmentID = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>int64 collectionID = 2;</code>
     * @return int|string
     */
    public function getCollectionID()
    {
        return $this->collectionID;
    }

    /**
     * Generated from protobuf field <code>int64 collectionID = 2;</code>
     * @param int|string $var
     * @return $this
     */
    public function setCollectionID($var)
    {
        GPBUtil::checkInt64($var);
        $this->collectionID = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>int64 partitionID = 3;</code>
     * @return int|string
     */
    public function getPartitionID()
    {
        return $this->partitionID;
    }

    /**
     * Generated from protobuf field <code>int64 partitionID = 3;</code>
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
     * Generated from protobuf field <code>int64 num_rows = 4;</code>
     * @return int|string
     */
    public function getNumRows()
    {
        return $this->num_rows;
    }

    /**
     * Generated from protobuf field <code>int64 num_rows = 4;</code>
     * @param int|string $var
     * @return $this
     */
    public function setNumRows($var)
    {
        GPBUtil::checkInt64($var);
        $this->num_rows = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.milvus.proto.common.SegmentState state = 5;</code>
     * @return int
     */
    public function getState()
    {
        return $this->state;
    }

    /**
     * Generated from protobuf field <code>.milvus.proto.common.SegmentState state = 5;</code>
     * @param int $var
     * @return $this
     */
    public function setState($var)
    {
        GPBUtil::checkEnum($var, \Milvus\Proto\Common\SegmentState::class);
        $this->state = $var;

        return $this;
    }

}

