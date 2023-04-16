<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: index_coord.proto

namespace Milvus\Proto\Index;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>milvus.proto.index.QueryJobsResponse</code>
 */
class QueryJobsResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>.milvus.proto.common.Status status = 1;</code>
     */
    protected $status = null;
    /**
     * Generated from protobuf field <code>string clusterID = 2;</code>
     */
    protected $clusterID = '';
    /**
     * Generated from protobuf field <code>repeated .milvus.proto.index.IndexTaskInfo index_infos = 3;</code>
     */
    private $index_infos;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Milvus\Proto\Common\Status $status
     *     @type string $clusterID
     *     @type array<\Milvus\Proto\Index\IndexTaskInfo>|\Google\Protobuf\Internal\RepeatedField $index_infos
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\IndexCoord::initOnce();
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
     * Generated from protobuf field <code>string clusterID = 2;</code>
     * @return string
     */
    public function getClusterID()
    {
        return $this->clusterID;
    }

    /**
     * Generated from protobuf field <code>string clusterID = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setClusterID($var)
    {
        GPBUtil::checkString($var, True);
        $this->clusterID = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>repeated .milvus.proto.index.IndexTaskInfo index_infos = 3;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getIndexInfos()
    {
        return $this->index_infos;
    }

    /**
     * Generated from protobuf field <code>repeated .milvus.proto.index.IndexTaskInfo index_infos = 3;</code>
     * @param array<\Milvus\Proto\Index\IndexTaskInfo>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setIndexInfos($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Milvus\Proto\Index\IndexTaskInfo::class);
        $this->index_infos = $arr;

        return $this;
    }

}

