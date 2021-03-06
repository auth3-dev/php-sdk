<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: identity/admin/admin.proto

namespace Auth3\Identity\Admin;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>depot.devtools.auth.v0.identity.admin.GetAddressRequest</code>
 */
class GetAddressRequest extends \Google\Protobuf\Internal\Message
{
    protected $match;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $id
     *     @type string $verification
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Devtools\Auth\V0\Proto\Identity\Admin\Admin::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>string id = 1[json_name = "id"];</code>
     * @return string
     */
    public function getId()
    {
        return $this->readOneof(1);
    }

    /**
     * Generated from protobuf field <code>string id = 1[json_name = "id"];</code>
     * @param string $var
     * @return $this
     */
    public function setId($var)
    {
        GPBUtil::checkString($var, True);
        $this->writeOneof(1, $var);

        return $this;
    }

    /**
     * Generated from protobuf field <code>string verification = 2[json_name = "verification"];</code>
     * @return string
     */
    public function getVerification()
    {
        return $this->readOneof(2);
    }

    /**
     * Generated from protobuf field <code>string verification = 2[json_name = "verification"];</code>
     * @param string $var
     * @return $this
     */
    public function setVerification($var)
    {
        GPBUtil::checkString($var, True);
        $this->writeOneof(2, $var);

        return $this;
    }

    /**
     * @return string
     */
    public function getMatch()
    {
        return $this->whichOneof("match");
    }

}

