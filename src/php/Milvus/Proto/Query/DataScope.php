<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: query_coord.proto

namespace Milvus\Proto\Query;

use UnexpectedValueException;

/**
 * Protobuf type <code>milvus.proto.query.DataScope</code>
 */
class DataScope
{
    /**
     * Generated from protobuf enum <code>UnKnown = 0;</code>
     */
    const UnKnown = 0;
    /**
     * Generated from protobuf enum <code>All = 1;</code>
     */
    const All = 1;
    /**
     * Generated from protobuf enum <code>Streaming = 2;</code>
     */
    const Streaming = 2;
    /**
     * Generated from protobuf enum <code>Historical = 3;</code>
     */
    const Historical = 3;

    private static $valueToName = [
        self::UnKnown => 'UnKnown',
        self::All => 'All',
        self::Streaming => 'Streaming',
        self::Historical => 'Historical',
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

