<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: plan.proto

namespace Milvus\Proto\Plan;

use UnexpectedValueException;

/**
 * Protobuf type <code>milvus.proto.plan.OpType</code>
 */
class OpType
{
    /**
     * Generated from protobuf enum <code>Invalid = 0;</code>
     */
    const Invalid = 0;
    /**
     * Generated from protobuf enum <code>GreaterThan = 1;</code>
     */
    const GreaterThan = 1;
    /**
     * Generated from protobuf enum <code>GreaterEqual = 2;</code>
     */
    const GreaterEqual = 2;
    /**
     * Generated from protobuf enum <code>LessThan = 3;</code>
     */
    const LessThan = 3;
    /**
     * Generated from protobuf enum <code>LessEqual = 4;</code>
     */
    const LessEqual = 4;
    /**
     * Generated from protobuf enum <code>Equal = 5;</code>
     */
    const Equal = 5;
    /**
     * Generated from protobuf enum <code>NotEqual = 6;</code>
     */
    const NotEqual = 6;
    /**
     * startsWith
     *
     * Generated from protobuf enum <code>PrefixMatch = 7;</code>
     */
    const PrefixMatch = 7;
    /**
     * endsWith
     *
     * Generated from protobuf enum <code>PostfixMatch = 8;</code>
     */
    const PostfixMatch = 8;
    /**
     * like
     *
     * Generated from protobuf enum <code>Match = 9;</code>
     */
    const PBMatch = 9;
    /**
     * for case 1 < a < b
     *
     * Generated from protobuf enum <code>Range = 10;</code>
     */
    const Range = 10;
    /**
     * TODO:: used for term expr
     *
     * Generated from protobuf enum <code>In = 11;</code>
     */
    const In = 11;
    /**
     * Generated from protobuf enum <code>NotIn = 12;</code>
     */
    const NotIn = 12;

    private static $valueToName = [
        self::Invalid => 'Invalid',
        self::GreaterThan => 'GreaterThan',
        self::GreaterEqual => 'GreaterEqual',
        self::LessThan => 'LessThan',
        self::LessEqual => 'LessEqual',
        self::Equal => 'Equal',
        self::NotEqual => 'NotEqual',
        self::PrefixMatch => 'PrefixMatch',
        self::PostfixMatch => 'PostfixMatch',
        self::PBMatch => 'Match',
        self::Range => 'Range',
        self::In => 'In',
        self::NotIn => 'NotIn',
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

