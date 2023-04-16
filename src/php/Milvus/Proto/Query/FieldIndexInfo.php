<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: query_coord.proto

namespace Milvus\Proto\Query;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>milvus.proto.query.FieldIndexInfo</code>
 */
class FieldIndexInfo extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>int64 fieldID = 1;</code>
     */
    protected $fieldID = 0;
    /**
     * deprecated
     *
     * Generated from protobuf field <code>bool enable_index = 2;</code>
     */
    protected $enable_index = false;
    /**
     * Generated from protobuf field <code>string index_name = 3;</code>
     */
    protected $index_name = '';
    /**
     * Generated from protobuf field <code>int64 indexID = 4;</code>
     */
    protected $indexID = 0;
    /**
     * Generated from protobuf field <code>int64 buildID = 5;</code>
     */
    protected $buildID = 0;
    /**
     * Generated from protobuf field <code>repeated .milvus.proto.common.KeyValuePair index_params = 6;</code>
     */
    private $index_params;
    /**
     * Generated from protobuf field <code>repeated string index_file_paths = 7;</code>
     */
    private $index_file_paths;
    /**
     * Generated from protobuf field <code>int64 index_size = 8;</code>
     */
    protected $index_size = 0;
    /**
     * Generated from protobuf field <code>int64 index_version = 9;</code>
     */
    protected $index_version = 0;
    /**
     * Generated from protobuf field <code>int64 num_rows = 10;</code>
     */
    protected $num_rows = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int|string $fieldID
     *     @type bool $enable_index
     *           deprecated
     *     @type string $index_name
     *     @type int|string $indexID
     *     @type int|string $buildID
     *     @type array<\Milvus\Proto\Common\KeyValuePair>|\Google\Protobuf\Internal\RepeatedField $index_params
     *     @type array<string>|\Google\Protobuf\Internal\RepeatedField $index_file_paths
     *     @type int|string $index_size
     *     @type int|string $index_version
     *     @type int|string $num_rows
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\QueryCoord::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>int64 fieldID = 1;</code>
     * @return int|string
     */
    public function getFieldID()
    {
        return $this->fieldID;
    }

    /**
     * Generated from protobuf field <code>int64 fieldID = 1;</code>
     * @param int|string $var
     * @return $this
     */
    public function setFieldID($var)
    {
        GPBUtil::checkInt64($var);
        $this->fieldID = $var;

        return $this;
    }

    /**
     * deprecated
     *
     * Generated from protobuf field <code>bool enable_index = 2;</code>
     * @return bool
     */
    public function getEnableIndex()
    {
        return $this->enable_index;
    }

    /**
     * deprecated
     *
     * Generated from protobuf field <code>bool enable_index = 2;</code>
     * @param bool $var
     * @return $this
     */
    public function setEnableIndex($var)
    {
        GPBUtil::checkBool($var);
        $this->enable_index = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string index_name = 3;</code>
     * @return string
     */
    public function getIndexName()
    {
        return $this->index_name;
    }

    /**
     * Generated from protobuf field <code>string index_name = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setIndexName($var)
    {
        GPBUtil::checkString($var, True);
        $this->index_name = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>int64 indexID = 4;</code>
     * @return int|string
     */
    public function getIndexID()
    {
        return $this->indexID;
    }

    /**
     * Generated from protobuf field <code>int64 indexID = 4;</code>
     * @param int|string $var
     * @return $this
     */
    public function setIndexID($var)
    {
        GPBUtil::checkInt64($var);
        $this->indexID = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>int64 buildID = 5;</code>
     * @return int|string
     */
    public function getBuildID()
    {
        return $this->buildID;
    }

    /**
     * Generated from protobuf field <code>int64 buildID = 5;</code>
     * @param int|string $var
     * @return $this
     */
    public function setBuildID($var)
    {
        GPBUtil::checkInt64($var);
        $this->buildID = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>repeated .milvus.proto.common.KeyValuePair index_params = 6;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getIndexParams()
    {
        return $this->index_params;
    }

    /**
     * Generated from protobuf field <code>repeated .milvus.proto.common.KeyValuePair index_params = 6;</code>
     * @param array<\Milvus\Proto\Common\KeyValuePair>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setIndexParams($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Milvus\Proto\Common\KeyValuePair::class);
        $this->index_params = $arr;

        return $this;
    }

    /**
     * Generated from protobuf field <code>repeated string index_file_paths = 7;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getIndexFilePaths()
    {
        return $this->index_file_paths;
    }

    /**
     * Generated from protobuf field <code>repeated string index_file_paths = 7;</code>
     * @param array<string>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setIndexFilePaths($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->index_file_paths = $arr;

        return $this;
    }

    /**
     * Generated from protobuf field <code>int64 index_size = 8;</code>
     * @return int|string
     */
    public function getIndexSize()
    {
        return $this->index_size;
    }

    /**
     * Generated from protobuf field <code>int64 index_size = 8;</code>
     * @param int|string $var
     * @return $this
     */
    public function setIndexSize($var)
    {
        GPBUtil::checkInt64($var);
        $this->index_size = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>int64 index_version = 9;</code>
     * @return int|string
     */
    public function getIndexVersion()
    {
        return $this->index_version;
    }

    /**
     * Generated from protobuf field <code>int64 index_version = 9;</code>
     * @param int|string $var
     * @return $this
     */
    public function setIndexVersion($var)
    {
        GPBUtil::checkInt64($var);
        $this->index_version = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>int64 num_rows = 10;</code>
     * @return int|string
     */
    public function getNumRows()
    {
        return $this->num_rows;
    }

    /**
     * Generated from protobuf field <code>int64 num_rows = 10;</code>
     * @param int|string $var
     * @return $this
     */
    public function setNumRows($var)
    {
        GPBUtil::checkInt64($var);
        $this->num_rows = $var;

        return $this;
    }

}

