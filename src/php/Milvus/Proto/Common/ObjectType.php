<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: common.proto

namespace Milvus\Proto\Common;

use UnexpectedValueException;

/**
 * Protobuf type <code>milvus.proto.common.ObjectType</code>
 */
class ObjectType
{
    /**
     * Generated from protobuf enum <code>Collection = 0;</code>
     */
    const Collection = 0;
    /**
     * Generated from protobuf enum <code>Global = 1;</code>
     */
    const PBGlobal = 1;
    /**
     * Generated from protobuf enum <code>User = 2;</code>
     */
    const User = 2;

    private static $valueToName = [
        self::Collection => 'Collection',
        self::PBGlobal => 'Global',
        self::User => 'User',
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
            $pbconst =  __CLASS__. '::PB' . strtoupper($name);
            if (!defined($pbconst)) {
                throw new UnexpectedValueException(sprintf(
                        'Enum %s has no value defined for name %s', __CLASS__, $name));
            }
            return constant($pbconst);
        }
        return constant($const);
    }
}

