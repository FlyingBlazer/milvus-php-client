<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: data_coord.proto

namespace Milvus\Proto\Data;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>milvus.proto.data.SegmentInfo</code>
 */
class SegmentInfo extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>int64 ID = 1;</code>
     */
    protected $ID = 0;
    /**
     * Generated from protobuf field <code>int64 collectionID = 2;</code>
     */
    protected $collectionID = 0;
    /**
     * Generated from protobuf field <code>int64 partitionID = 3;</code>
     */
    protected $partitionID = 0;
    /**
     * Generated from protobuf field <code>string insert_channel = 4;</code>
     */
    protected $insert_channel = '';
    /**
     * Generated from protobuf field <code>int64 num_of_rows = 5;</code>
     */
    protected $num_of_rows = 0;
    /**
     * Generated from protobuf field <code>.milvus.proto.common.SegmentState state = 6;</code>
     */
    protected $state = 0;
    /**
     * Generated from protobuf field <code>int64 max_row_num = 7;</code>
     */
    protected $max_row_num = 0;
    /**
     * Generated from protobuf field <code>uint64 last_expire_time = 8;</code>
     */
    protected $last_expire_time = 0;
    /**
     * Generated from protobuf field <code>.milvus.proto.msg.MsgPosition start_position = 9;</code>
     */
    protected $start_position = null;
    /**
     * Generated from protobuf field <code>.milvus.proto.msg.MsgPosition dml_position = 10;</code>
     */
    protected $dml_position = null;
    /**
     * binlogs consist of insert binlogs
     *
     * Generated from protobuf field <code>repeated .milvus.proto.data.FieldBinlog binlogs = 11;</code>
     */
    private $binlogs;
    /**
     * Generated from protobuf field <code>repeated .milvus.proto.data.FieldBinlog statslogs = 12;</code>
     */
    private $statslogs;
    /**
     * deltalogs consists of delete binlogs. FieldID is not used yet since delete is always applied on primary key
     *
     * Generated from protobuf field <code>repeated .milvus.proto.data.FieldBinlog deltalogs = 13;</code>
     */
    private $deltalogs;
    /**
     * Generated from protobuf field <code>bool createdByCompaction = 14;</code>
     */
    protected $createdByCompaction = false;
    /**
     * Generated from protobuf field <code>repeated int64 compactionFrom = 15;</code>
     */
    private $compactionFrom;
    /**
     * timestamp when segment marked drop
     *
     * Generated from protobuf field <code>uint64 dropped_at = 16;</code>
     */
    protected $dropped_at = 0;
    /**
     * A flag indicating if:
     * (1) this segment is created by bulk insert, and
     * (2) the bulk insert task that creates this segment has not yet reached `ImportCompleted` state.
     *
     * Generated from protobuf field <code>bool is_importing = 17;</code>
     */
    protected $is_importing = false;
    /**
     * Generated from protobuf field <code>bool is_fake = 18;</code>
     */
    protected $is_fake = false;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int|string $ID
     *     @type int|string $collectionID
     *     @type int|string $partitionID
     *     @type string $insert_channel
     *     @type int|string $num_of_rows
     *     @type int $state
     *     @type int|string $max_row_num
     *     @type int|string $last_expire_time
     *     @type \Milvus\Proto\Msg\MsgPosition $start_position
     *     @type \Milvus\Proto\Msg\MsgPosition $dml_position
     *     @type array<\Milvus\Proto\Data\FieldBinlog>|\Google\Protobuf\Internal\RepeatedField $binlogs
     *           binlogs consist of insert binlogs
     *     @type array<\Milvus\Proto\Data\FieldBinlog>|\Google\Protobuf\Internal\RepeatedField $statslogs
     *     @type array<\Milvus\Proto\Data\FieldBinlog>|\Google\Protobuf\Internal\RepeatedField $deltalogs
     *           deltalogs consists of delete binlogs. FieldID is not used yet since delete is always applied on primary key
     *     @type bool $createdByCompaction
     *     @type array<int>|array<string>|\Google\Protobuf\Internal\RepeatedField $compactionFrom
     *     @type int|string $dropped_at
     *           timestamp when segment marked drop
     *     @type bool $is_importing
     *           A flag indicating if:
     *           (1) this segment is created by bulk insert, and
     *           (2) the bulk insert task that creates this segment has not yet reached `ImportCompleted` state.
     *     @type bool $is_fake
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\DataCoord::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>int64 ID = 1;</code>
     * @return int|string
     */
    public function getID()
    {
        return $this->ID;
    }

    /**
     * Generated from protobuf field <code>int64 ID = 1;</code>
     * @param int|string $var
     * @return $this
     */
    public function setID($var)
    {
        GPBUtil::checkInt64($var);
        $this->ID = $var;

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
     * Generated from protobuf field <code>string insert_channel = 4;</code>
     * @return string
     */
    public function getInsertChannel()
    {
        return $this->insert_channel;
    }

    /**
     * Generated from protobuf field <code>string insert_channel = 4;</code>
     * @param string $var
     * @return $this
     */
    public function setInsertChannel($var)
    {
        GPBUtil::checkString($var, True);
        $this->insert_channel = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>int64 num_of_rows = 5;</code>
     * @return int|string
     */
    public function getNumOfRows()
    {
        return $this->num_of_rows;
    }

    /**
     * Generated from protobuf field <code>int64 num_of_rows = 5;</code>
     * @param int|string $var
     * @return $this
     */
    public function setNumOfRows($var)
    {
        GPBUtil::checkInt64($var);
        $this->num_of_rows = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.milvus.proto.common.SegmentState state = 6;</code>
     * @return int
     */
    public function getState()
    {
        return $this->state;
    }

    /**
     * Generated from protobuf field <code>.milvus.proto.common.SegmentState state = 6;</code>
     * @param int $var
     * @return $this
     */
    public function setState($var)
    {
        GPBUtil::checkEnum($var, \Milvus\Proto\Common\SegmentState::class);
        $this->state = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>int64 max_row_num = 7;</code>
     * @return int|string
     */
    public function getMaxRowNum()
    {
        return $this->max_row_num;
    }

    /**
     * Generated from protobuf field <code>int64 max_row_num = 7;</code>
     * @param int|string $var
     * @return $this
     */
    public function setMaxRowNum($var)
    {
        GPBUtil::checkInt64($var);
        $this->max_row_num = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint64 last_expire_time = 8;</code>
     * @return int|string
     */
    public function getLastExpireTime()
    {
        return $this->last_expire_time;
    }

    /**
     * Generated from protobuf field <code>uint64 last_expire_time = 8;</code>
     * @param int|string $var
     * @return $this
     */
    public function setLastExpireTime($var)
    {
        GPBUtil::checkUint64($var);
        $this->last_expire_time = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.milvus.proto.msg.MsgPosition start_position = 9;</code>
     * @return \Milvus\Proto\Msg\MsgPosition|null
     */
    public function getStartPosition()
    {
        return $this->start_position;
    }

    public function hasStartPosition()
    {
        return isset($this->start_position);
    }

    public function clearStartPosition()
    {
        unset($this->start_position);
    }

    /**
     * Generated from protobuf field <code>.milvus.proto.msg.MsgPosition start_position = 9;</code>
     * @param \Milvus\Proto\Msg\MsgPosition $var
     * @return $this
     */
    public function setStartPosition($var)
    {
        GPBUtil::checkMessage($var, \Milvus\Proto\Msg\MsgPosition::class);
        $this->start_position = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.milvus.proto.msg.MsgPosition dml_position = 10;</code>
     * @return \Milvus\Proto\Msg\MsgPosition|null
     */
    public function getDmlPosition()
    {
        return $this->dml_position;
    }

    public function hasDmlPosition()
    {
        return isset($this->dml_position);
    }

    public function clearDmlPosition()
    {
        unset($this->dml_position);
    }

    /**
     * Generated from protobuf field <code>.milvus.proto.msg.MsgPosition dml_position = 10;</code>
     * @param \Milvus\Proto\Msg\MsgPosition $var
     * @return $this
     */
    public function setDmlPosition($var)
    {
        GPBUtil::checkMessage($var, \Milvus\Proto\Msg\MsgPosition::class);
        $this->dml_position = $var;

        return $this;
    }

    /**
     * binlogs consist of insert binlogs
     *
     * Generated from protobuf field <code>repeated .milvus.proto.data.FieldBinlog binlogs = 11;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getBinlogs()
    {
        return $this->binlogs;
    }

    /**
     * binlogs consist of insert binlogs
     *
     * Generated from protobuf field <code>repeated .milvus.proto.data.FieldBinlog binlogs = 11;</code>
     * @param array<\Milvus\Proto\Data\FieldBinlog>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setBinlogs($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Milvus\Proto\Data\FieldBinlog::class);
        $this->binlogs = $arr;

        return $this;
    }

    /**
     * Generated from protobuf field <code>repeated .milvus.proto.data.FieldBinlog statslogs = 12;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getStatslogs()
    {
        return $this->statslogs;
    }

    /**
     * Generated from protobuf field <code>repeated .milvus.proto.data.FieldBinlog statslogs = 12;</code>
     * @param array<\Milvus\Proto\Data\FieldBinlog>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setStatslogs($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Milvus\Proto\Data\FieldBinlog::class);
        $this->statslogs = $arr;

        return $this;
    }

    /**
     * deltalogs consists of delete binlogs. FieldID is not used yet since delete is always applied on primary key
     *
     * Generated from protobuf field <code>repeated .milvus.proto.data.FieldBinlog deltalogs = 13;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getDeltalogs()
    {
        return $this->deltalogs;
    }

    /**
     * deltalogs consists of delete binlogs. FieldID is not used yet since delete is always applied on primary key
     *
     * Generated from protobuf field <code>repeated .milvus.proto.data.FieldBinlog deltalogs = 13;</code>
     * @param array<\Milvus\Proto\Data\FieldBinlog>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setDeltalogs($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Milvus\Proto\Data\FieldBinlog::class);
        $this->deltalogs = $arr;

        return $this;
    }

    /**
     * Generated from protobuf field <code>bool createdByCompaction = 14;</code>
     * @return bool
     */
    public function getCreatedByCompaction()
    {
        return $this->createdByCompaction;
    }

    /**
     * Generated from protobuf field <code>bool createdByCompaction = 14;</code>
     * @param bool $var
     * @return $this
     */
    public function setCreatedByCompaction($var)
    {
        GPBUtil::checkBool($var);
        $this->createdByCompaction = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>repeated int64 compactionFrom = 15;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getCompactionFrom()
    {
        return $this->compactionFrom;
    }

    /**
     * Generated from protobuf field <code>repeated int64 compactionFrom = 15;</code>
     * @param array<int>|array<string>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setCompactionFrom($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::INT64);
        $this->compactionFrom = $arr;

        return $this;
    }

    /**
     * timestamp when segment marked drop
     *
     * Generated from protobuf field <code>uint64 dropped_at = 16;</code>
     * @return int|string
     */
    public function getDroppedAt()
    {
        return $this->dropped_at;
    }

    /**
     * timestamp when segment marked drop
     *
     * Generated from protobuf field <code>uint64 dropped_at = 16;</code>
     * @param int|string $var
     * @return $this
     */
    public function setDroppedAt($var)
    {
        GPBUtil::checkUint64($var);
        $this->dropped_at = $var;

        return $this;
    }

    /**
     * A flag indicating if:
     * (1) this segment is created by bulk insert, and
     * (2) the bulk insert task that creates this segment has not yet reached `ImportCompleted` state.
     *
     * Generated from protobuf field <code>bool is_importing = 17;</code>
     * @return bool
     */
    public function getIsImporting()
    {
        return $this->is_importing;
    }

    /**
     * A flag indicating if:
     * (1) this segment is created by bulk insert, and
     * (2) the bulk insert task that creates this segment has not yet reached `ImportCompleted` state.
     *
     * Generated from protobuf field <code>bool is_importing = 17;</code>
     * @param bool $var
     * @return $this
     */
    public function setIsImporting($var)
    {
        GPBUtil::checkBool($var);
        $this->is_importing = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>bool is_fake = 18;</code>
     * @return bool
     */
    public function getIsFake()
    {
        return $this->is_fake;
    }

    /**
     * Generated from protobuf field <code>bool is_fake = 18;</code>
     * @param bool $var
     * @return $this
     */
    public function setIsFake($var)
    {
        GPBUtil::checkBool($var);
        $this->is_fake = $var;

        return $this;
    }

}

