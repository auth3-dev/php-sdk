<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: identity/admin/admin.proto

namespace Auth3\Identity\Admin;

use UnexpectedValueException;

/**
 * Protobuf type <code>depot.devtools.auth.v0.identity.admin.UserinfoSignedResponseAlg</code>
 */
class UserinfoSignedResponseAlg
{
    /**
     * Generated from protobuf enum <code>USERINFO_SIGNED_RESPONSE_ALG_UNSET = 0;</code>
     */
    const USERINFO_SIGNED_RESPONSE_ALG_UNSET = 0;
    /**
     * Generated from protobuf enum <code>USERINFO_SIGNED_RESPONSE_ALG_NONE = 1;</code>
     */
    const USERINFO_SIGNED_RESPONSE_ALG_NONE = 1;
    /**
     * Generated from protobuf enum <code>USERINFO_SIGNED_RESPONSE_ALG_RS256 = 2;</code>
     */
    const USERINFO_SIGNED_RESPONSE_ALG_RS256 = 2;

    private static $valueToName = [
        self::USERINFO_SIGNED_RESPONSE_ALG_UNSET => 'USERINFO_SIGNED_RESPONSE_ALG_UNSET',
        self::USERINFO_SIGNED_RESPONSE_ALG_NONE => 'USERINFO_SIGNED_RESPONSE_ALG_NONE',
        self::USERINFO_SIGNED_RESPONSE_ALG_RS256 => 'USERINFO_SIGNED_RESPONSE_ALG_RS256',
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
