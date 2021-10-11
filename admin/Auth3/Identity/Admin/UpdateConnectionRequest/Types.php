<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: identity/admin/admin.proto

namespace Auth3\Identity\Admin\UpdateConnectionRequest;

use UnexpectedValueException;

/**
 * Protobuf type <code>depot.devtools.auth.v0.identity.admin.UpdateConnectionRequest.Types</code>
 */
class Types
{
    /**
     * Generated from protobuf enum <code>UNSET = 0;</code>
     */
    const PBUNSET = 0;
    /**
     * Generated from protobuf enum <code>PASSWORD = 1;</code>
     */
    const PASSWORD = 1;
    /**
     * Generated from protobuf enum <code>OTP = 2;</code>
     */
    const OTP = 2;
    /**
     * Generated from protobuf enum <code>TOTP = 3;</code>
     */
    const TOTP = 3;
    /**
     * Generated from protobuf enum <code>OIDC = 4;</code>
     */
    const OIDC = 4;

    private static $valueToName = [
        self::PBUNSET => 'PBUNSET',
        self::PASSWORD => 'PASSWORD',
        self::OTP => 'OTP',
        self::TOTP => 'TOTP',
        self::OIDC => 'OIDC',
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
class_alias(Types::class, \Auth3\Identity\Admin\UpdateConnectionRequest_Types::class);

