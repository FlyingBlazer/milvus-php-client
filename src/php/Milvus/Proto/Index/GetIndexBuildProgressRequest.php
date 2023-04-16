<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: index_coord.proto

namespace Milvus\Proto\Index;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>milvus.proto.index.GetIndexBuildProgressRequest</code>
 */
class GetIndexBuildProgressRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>int64 collectionID = 1;</code>
     */
    protected $collectionID = 0;
    /**
     * Generated from protobuf field <code>string index_name = 2;</code>
     */
    protected $index_name = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int|string $collectionID
     *     @type string $index_name
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\IndexCoord::initOnce();
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
     * Generated from protobuf field <code>string index_name = 2;</code>
     * @return string
     */
    public function getIndexName()
    {
        return $this->index_name;
    }

    /**
     * Generated from protobuf field <code>string index_name = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setIndexName($var)
    {
        GPBUtil::checkString($var, True);
        $this->index_name = $var;

        return $this;
    }

}

