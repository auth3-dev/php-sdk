<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: identity/admin/admin.proto

namespace Auth3\Identity\Admin\GetConnectionsResponse;

use UnexpectedValueException;

/**
 * Protobuf type <code>depot.devtools.auth.v0.identity.admin.GetConnectionsResponse.Purposes</code>
 */
class Purposes
{
    /**
     * Generated from protobuf enum <code>PURPOSE_UNKNOWN = 0;</code>
     */
    const PURPOSE_UNKNOWN = 0;
    /**
     * Generated from protobuf enum <code>PURPOSE_MAIN_FACTOR = 1;</code>
     */
    const PURPOSE_MAIN_FACTOR = 1;
    /**
     * Generated from protobuf enum <code>PURPOSE_SECOND_FACTOR = 2;</code>
     */
    const PURPOSE_SECOND_FACTOR = 2;

    private static $valueToName = [
        self::PURPOSE_UNKNOWN => 'PURPOSE_UNKNOWN',
        self::PURPOSE_MAIN_FACTOR => 'PURPOSE_MAIN_FACTOR',
        self::PURPOSE_SECOND_FACTOR => 'PURPOSE_SECOND_FACTOR',
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

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(Purposes::class, \Auth3\Identity\Admin\GetConnectionsResponse_Purposes::class);
