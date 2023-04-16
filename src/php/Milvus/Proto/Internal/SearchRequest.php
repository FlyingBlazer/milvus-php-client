<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: internal.proto

namespace Milvus\Proto\Internal;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>milvus.proto.internal.SearchRequest</code>
 */
class SearchRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>.milvus.proto.common.MsgBase base = 1;</code>
     */
    protected $base = null;
    /**
     * Generated from protobuf field <code>int64 reqID = 2;</code>
     */
    protected $reqID = 0;
    /**
     * Generated from protobuf field <code>int64 dbID = 3;</code>
     */
    protected $dbID = 0;
    /**
     * Generated from protobuf field <code>int64 collectionID = 4;</code>
     */
    protected $collectionID = 0;
    /**
     * Generated from protobuf field <code>repeated int64 partitionIDs = 5;</code>
     */
    private $partitionIDs;
    /**
     * Generated from protobuf field <code>string dsl = 6;</code>
     */
    protected $dsl = '';
    /**
     * serialized `PlaceholderGroup`
     *
     * Generated from protobuf field <code>bytes placeholder_group = 7;</code>
     */
    protected $placeholder_group = '';
    /**
     * Generated from protobuf field <code>.milvus.proto.common.DslType dsl_type = 8;</code>
     */
    protected $dsl_type = 0;
    /**
     * Generated from protobuf field <code>bytes serialized_expr_plan = 9;</code>
     */
    protected $serialized_expr_plan = '';
    /**
     * Generated from protobuf field <code>repeated int64 output_fields_id = 10;</code>
     */
    private $output_fields_id;
    /**
     * Generated from protobuf field <code>uint64 travel_timestamp = 11;</code>
     */
    protected $travel_timestamp = 0;
    /**
     * Generated from protobuf field <code>uint64 guarantee_timestamp = 12;</code>
     */
    protected $guarantee_timestamp = 0;
    /**
     * Generated from protobuf field <code>uint64 timeout_timestamp = 13;</code>
     */
    protected $timeout_timestamp = 0;
    /**
     * Generated from protobuf field <code>int64 nq = 14;</code>
     */
    protected $nq = 0;
    /**
     * Generated from protobuf field <code>int64 topk = 15;</code>
     */
    protected $topk = 0;
    /**
     * Generated from protobuf field <code>string metricType = 16;</code>
     */
    protected $metricType = '';
    /**
     * Optional
     *
     * Generated from protobuf field <code>bool ignoreGrowing = 17;</code>
     */
    protected $ignoreGrowing = false;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Milvus\Proto\Common\MsgBase $base
     *     @type int|string $reqID
     *     @type int|string $dbID
     *     @type int|string $collectionID
     *     @type array<int>|array<string>|\Google\Protobuf\Internal\RepeatedField $partitionIDs
     *     @type string $dsl
     *     @type string $placeholder_group
     *           serialized `PlaceholderGroup`
     *     @type int $dsl_type
     *     @type string $serialized_expr_plan
     *     @type array<int>|array<string>|\Google\Protobuf\Internal\RepeatedField $output_fields_id
     *     @type int|string $travel_timestamp
     *     @type int|string $guarantee_timestamp
     *     @type int|string $timeout_timestamp
     *     @type int|string $nq
     *     @type int|string $topk
     *     @type string $metricType
     *     @type bool $ignoreGrowing
     *           Optional
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Internal::initOnce();
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
     * Generated from protobuf field <code>int64 reqID = 2;</code>
     * @return int|string
     */
    public function getReqID()
    {
        return $this->reqID;
    }

    /**
     * Generated from protobuf field <code>int64 reqID = 2;</code>
     * @param int|string $var
     * @return $this
     */
    public function setReqID($var)
    {
        GPBUtil::checkInt64($var);
        $this->reqID = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>int64 dbID = 3;</code>
     * @return int|string
     */
    public function getDbID()
    {
        return $this->dbID;
    }

    /**
     * Generated from protobuf field <code>int64 dbID = 3;</code>
     * @param int|string $var
     * @return $this
     */
    public function setDbID($var)
    {
        GPBUtil::checkInt64($var);
        $this->dbID = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>int64 collectionID = 4;</code>
     * @return int|string
     */
    public function getCollectionID()
    {
        return $this->collectionID;
    }

    /**
     * Generated from protobuf field <code>int64 collectionID = 4;</code>
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
     * Generated from protobuf field <code>repeated int64 partitionIDs = 5;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getPartitionIDs()
    {
        return $this->partitionIDs;
    }

    /**
     * Generated from protobuf field <code>repeated int64 partitionIDs = 5;</code>
     * @param array<int>|array<string>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setPartitionIDs($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::INT64);
        $this->partitionIDs = $arr;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string dsl = 6;</code>
     * @return string
     */
    public function getDsl()
    {
        return $this->dsl;
    }

    /**
     * Generated from protobuf field <code>string dsl = 6;</code>
     * @param string $var
     * @return $this
     */
    public function setDsl($var)
    {
        GPBUtil::checkString($var, True);
        $this->dsl = $var;

        return $this;
    }

    /**
     * serialized `PlaceholderGroup`
     *
     * Generated from protobuf field <code>bytes placeholder_group = 7;</code>
     * @return string
     */
    public function getPlaceholderGroup()
    {
        return $this->placeholder_group;
    }

    /**
     * serialized `PlaceholderGroup`
     *
     * Generated from protobuf field <code>bytes placeholder_group = 7;</code>
     * @param string $var
     * @return $this
     */
    public function setPlaceholderGroup($var)
    {
        GPBUtil::checkString($var, False);
        $this->placeholder_group = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.milvus.proto.common.DslType dsl_type = 8;</code>
     * @return int
     */
    public function getDslType()
    {
        return $this->dsl_type;
    }

    /**
     * Generated from protobuf field <code>.milvus.proto.common.DslType dsl_type = 8;</code>
     * @param int $var
     * @return $this
     */
    public function setDslType($var)
    {
        GPBUtil::checkEnum($var, \Milvus\Proto\Common\DslType::class);
        $this->dsl_type = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>bytes serialized_expr_plan = 9;</code>
     * @return string
     */
    public function getSerializedExprPlan()
    {
        return $this->serialized_expr_plan;
    }

    /**
     * Generated from protobuf field <code>bytes serialized_expr_plan = 9;</code>
     * @param string $var
     * @return $this
     */
    public function setSerializedExprPlan($var)
    {
        GPBUtil::checkString($var, False);
        $this->serialized_expr_plan = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>repeated int64 output_fields_id = 10;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getOutputFieldsId()
    {
        return $this->output_fields_id;
    }

    /**
     * Generated from protobuf field <code>repeated int64 output_fields_id = 10;</code>
     * @param array<int>|array<string>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setOutputFieldsId($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::INT64);
        $this->output_fields_id = $arr;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint64 travel_timestamp = 11;</code>
     * @return int|string
     */
    public function getTravelTimestamp()
    {
        return $this->travel_timestamp;
    }

    /**
     * Generated from protobuf field <code>uint64 travel_timestamp = 11;</code>
     * @param int|string $var
     * @return $this
     */
    public function setTravelTimestamp($var)
    {
        GPBUtil::checkUint64($var);
        $this->travel_timestamp = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint64 guarantee_timestamp = 12;</code>
     * @return int|string
     */
    public function getGuaranteeTimestamp()
    {
        return $this->guarantee_timestamp;
    }

    /**
     * Generated from protobuf field <code>uint64 guarantee_timestamp = 12;</code>
     * @param int|string $var
     * @return $this
     */
    public function setGuaranteeTimestamp($var)
    {
        GPBUtil::checkUint64($var);
        $this->guarantee_timestamp = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint64 timeout_timestamp = 13;</code>
     * @return int|string
     */
    public function getTimeoutTimestamp()
    {
        return $this->timeout_timestamp;
    }

    /**
     * Generated from protobuf field <code>uint64 timeout_timestamp = 13;</code>
     * @param int|string $var
     * @return $this
     */
    public function setTimeoutTimestamp($var)
    {
        GPBUtil::checkUint64($var);
        $this->timeout_timestamp = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>int64 nq = 14;</code>
     * @return int|string
     */
    public function getNq()
    {
        return $this->nq;
    }

    /**
     * Generated from protobuf field <code>int64 nq = 14;</code>
     * @param int|string $var
     * @return $this
     */
    public function setNq($var)
    {
        GPBUtil::checkInt64($var);
        $this->nq = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>int64 topk = 15;</code>
     * @return int|string
     */
    public function getTopk()
    {
        return $this->topk;
    }

    /**
     * Generated from protobuf field <code>int64 topk = 15;</code>
     * @param int|string $var
     * @return $this
     */
    public function setTopk($var)
    {
        GPBUtil::checkInt64($var);
        $this->topk = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string metricType = 16;</code>
     * @return string
     */
    public function getMetricType()
    {
        return $this->metricType;
    }

    /**
     * Generated from protobuf field <code>string metricType = 16;</code>
     * @param string $var
     * @return $this
     */
    public function setMetricType($var)
    {
        GPBUtil::checkString($var, True);
        $this->metricType = $var;

        return $this;
    }

    /**
     * Optional
     *
     * Generated from protobuf field <code>bool ignoreGrowing = 17;</code>
     * @return bool
     */
    public function getIgnoreGrowing()
    {
        return $this->ignoreGrowing;
    }

    /**
     * Optional
     *
     * Generated from protobuf field <code>bool ignoreGrowing = 17;</code>
     * @param bool $var
     * @return $this
     */
    public function setIgnoreGrowing($var)
    {
        GPBUtil::checkBool($var);
        $this->ignoreGrowing = $var;

        return $this;
    }

}

