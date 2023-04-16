<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: query_coord.proto

namespace Milvus\Proto\Query;

use UnexpectedValueException;

/**
 * Protobuf type <code>milvus.proto.query.TriggerCondition</code>
 */
class TriggerCondition
{
    /**
     * Generated from protobuf enum <code>UnKnowCondition = 0;</code>
     */
    const UnKnowCondition = 0;
    /**
     * Generated from protobuf enum <code>Handoff = 1;</code>
     */
    const Handoff = 1;
    /**
     * Generated from protobuf enum <code>LoadBalance = 2;</code>
     */
    const LoadBalance = 2;
    /**
     * Generated from protobuf enum <code>GrpcRequest = 3;</code>
     */
    const GrpcRequest = 3;
    /**
     * Generated from protobuf enum <code>NodeDown = 4;</code>
     */
    const NodeDown = 4;

    private static $valueToName = [
        self::UnKnowCondition => 'UnKnowCondition',
        self::Handoff => 'Handoff',
        self::LoadBalance => 'LoadBalance',
        self::GrpcRequest => 'GrpcRequest',
        self::NodeDown => 'NodeDown',
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

