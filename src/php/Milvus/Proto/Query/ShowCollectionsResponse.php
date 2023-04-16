<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: query_coord.proto

namespace Milvus\Proto\Query;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>milvus.proto.query.ShowCollectionsResponse</code>
 */
class ShowCollectionsResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>.milvus.proto.common.Status status = 1;</code>
     */
    protected $status = null;
    /**
     * Generated from protobuf field <code>repeated int64 collectionIDs = 2;</code>
     */
    private $collectionIDs;
    /**
     * Generated from protobuf field <code>repeated int64 inMemory_percentages = 3;</code>
     */
    private $inMemory_percentages;
    /**
     * Generated from protobuf field <code>repeated bool query_service_available = 4;</code>
     */
    private $query_service_available;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Milvus\Proto\Common\Status $status
     *     @type array<int>|array<string>|\Google\Protobuf\Internal\RepeatedField $collectionIDs
     *     @type array<int>|array<string>|\Google\Protobuf\Internal\RepeatedField $inMemory_percentages
     *     @type array<bool>|\Google\Protobuf\Internal\RepeatedField $query_service_available
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\QueryCoord::initOnce();
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
     * Generated from protobuf field <code>repeated int64 collectionIDs = 2;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getCollectionIDs()
    {
        return $this->collectionIDs;
    }

    /**
     * Generated from protobuf field <code>repeated int64 collectionIDs = 2;</code>
     * @param array<int>|array<string>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setCollectionIDs($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::INT64);
        $this->collectionIDs = $arr;

        return $this;
    }

    /**
     * Generated from protobuf field <code>repeated int64 inMemory_percentages = 3;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getInMemoryPercentages()
    {
        return $this->inMemory_percentages;
    }

    /**
     * Generated from protobuf field <code>repeated int64 inMemory_percentages = 3;</code>
     * @param array<int>|array<string>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setInMemoryPercentages($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::INT64);
        $this->inMemory_percentages = $arr;

        return $this;
    }

    /**
     * Generated from protobuf field <code>repeated bool query_service_available = 4;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getQueryServiceAvailable()
    {
        return $this->query_service_available;
    }

    /**
     * Generated from protobuf field <code>repeated bool query_service_available = 4;</code>
     * @param array<bool>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setQueryServiceAvailable($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::BOOL);
        $this->query_service_available = $arr;

        return $this;
    }

}

