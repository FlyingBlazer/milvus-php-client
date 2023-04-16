<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: data_coord.proto

namespace Milvus\Proto\Data;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>milvus.proto.data.WatchChannelsRequest</code>
 */
class WatchChannelsRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>int64 collectionID = 1;</code>
     */
    protected $collectionID = 0;
    /**
     * Generated from protobuf field <code>repeated string channelNames = 2;</code>
     */
    private $channelNames;
    /**
     * Generated from protobuf field <code>repeated .milvus.proto.common.KeyDataPair start_positions = 3;</code>
     */
    private $start_positions;
    /**
     * Generated from protobuf field <code>.milvus.proto.schema.CollectionSchema schema = 4;</code>
     */
    protected $schema = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int|string $collectionID
     *     @type array<string>|\Google\Protobuf\Internal\RepeatedField $channelNames
     *     @type array<\Milvus\Proto\Common\KeyDataPair>|\Google\Protobuf\Internal\RepeatedField $start_positions
     *     @type \Milvus\Proto\Schema\CollectionSchema $schema
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\DataCoord::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>int64 collectionID = 1;</code>
     * @return int|string
     */
    public function getCollectionID()
    {
        return $this->collectionID;
    }

    /**
     * Generated from protobuf field <code>int64 collectionID = 1;</code>
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
     * Generated from protobuf field <code>repeated string channelNames = 2;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getChannelNames()
    {
        return $this->channelNames;
    }

    /**
     * Generated from protobuf field <code>repeated string channelNames = 2;</code>
     * @param array<string>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setChannelNames($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->channelNames = $arr;

        return $this;
    }

    /**
     * Generated from protobuf field <code>repeated .milvus.proto.common.KeyDataPair start_positions = 3;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getStartPositions()
    {
        return $this->start_positions;
    }

    /**
     * Generated from protobuf field <code>repeated .milvus.proto.common.KeyDataPair start_positions = 3;</code>
     * @param array<\Milvus\Proto\Common\KeyDataPair>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setStartPositions($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Milvus\Proto\Common\KeyDataPair::class);
        $this->start_positions = $arr;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.milvus.proto.schema.CollectionSchema schema = 4;</code>
     * @return \Milvus\Proto\Schema\CollectionSchema|null
     */
    public function getSchema()
    {
        return $this->schema;
    }

    public function hasSchema()
    {
        return isset($this->schema);
    }

    public function clearSchema()
    {
        unset($this->schema);
    }

    /**
     * Generated from protobuf field <code>.milvus.proto.schema.CollectionSchema schema = 4;</code>
     * @param \Milvus\Proto\Schema\CollectionSchema $var
     * @return $this
     */
    public function setSchema($var)
    {
        GPBUtil::checkMessage($var, \Milvus\Proto\Schema\CollectionSchema::class);
        $this->schema = $var;

        return $this;
    }

}

