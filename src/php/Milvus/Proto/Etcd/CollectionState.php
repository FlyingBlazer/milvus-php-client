<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: etcd_meta.proto

namespace Milvus\Proto\Etcd;

use UnexpectedValueException;

/**
 * Protobuf type <code>milvus.proto.etcd.CollectionState</code>
 */
class CollectionState
{
    /**
     * Generated from protobuf enum <code>CollectionCreated = 0;</code>
     */
    const CollectionCreated = 0;
    /**
     * Generated from protobuf enum <code>CollectionCreating = 1;</code>
     */
    const CollectionCreating = 1;
    /**
     * Generated from protobuf enum <code>CollectionDropping = 2;</code>
     */
    const CollectionDropping = 2;
    /**
     * Generated from protobuf enum <code>CollectionDropped = 3;</code>
     */
    const CollectionDropped = 3;

    private static $valueToName = [
        self::CollectionCreated => 'CollectionCreated',
        self::CollectionCreating => 'CollectionCreating',
        self::CollectionDropping => 'CollectionDropping',
        self::CollectionDropped => 'CollectionDropped',
    ];

    public static function name($value)
    {
        if (!isset(self::$valueToName[$value])) {
            throw new UnexpectedValueException(sprintf(
                    'Enum %s has no name defined for value %s', __CLASS__, $value));
        }
        return self::$valueToName[$value];
    }


    public static function value($name)
    {
        $const = __CLASS__ . '::' . strtoupper($name);
        if (!defined($const)) {
            throw new UnexpectedValueException(sprintf(
                    'Enum %s has no value defined for name %s', __CLASS__, $name));
        }
        return constant($const);
    }
}

