<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: identity/admin/admin.proto

namespace Auth3\Identity\Admin;

use UnexpectedValueException;

/**
 * Protobuf type <code>depot.devtools.auth.v0.identity.admin.SubjectType</code>
 */
class SubjectType
{
    /**
     * Generated from protobuf enum <code>SUBJECT_TYPE_PUBLIC = 0;</code>
     */
    const SUBJECT_TYPE_PUBLIC = 0;
    /**
     * Generated from protobuf enum <code>SUBJECT_TYPE_PAIRWISE = 1;</code>
     */
    const SUBJECT_TYPE_PAIRWISE = 1;

    private static $valueToName = [
        self::SUBJECT_TYPE_PUBLIC => 'SUBJECT_TYPE_PUBLIC',
        self::SUBJECT_TYPE_PAIRWISE => 'SUBJECT_TYPE_PAIRWISE',
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
