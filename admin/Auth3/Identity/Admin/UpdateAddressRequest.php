<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: identity/admin/admin.proto

namespace Auth3\Identity\Admin;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>depot.devtools.auth.v0.identity.admin.UpdateAddressRequest</code>
 */
class UpdateAddressRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>string id = 1[json_name = "id"];</code>
     */
    protected $id = '';
    protected $attribute;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $id
     *     @type bool $verified
     *     @type string $address
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
        return $this->id;
    }

    /**
     * Generated from protobuf field <code>string id = 1[json_name = "id"];</code>
     * @param string $var
     * @return $this
     */
    public function setId($var)
    {
        GPBUtil::checkString($var, True);
        $this->id = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>bool verified = 2[json_name = "verified"];</code>
     * @return bool
     */
    public function getVerified()
    {
        return $this->readOneof(2);
    }

    /**
     * Generated from protobuf field <code>bool verified = 2[json_name = "verified"];</code>
     * @param bool $var
     * @return $this
     */
    public function setVerified($var)
    {
        GPBUtil::checkBool($var);
        $this->writeOneof(2, $var);

        return $this;
    }

    /**
     * Generated from protobuf field <code>string address = 3[json_name = "address"];</code>
     * @return string
     */
    public function getAddress()
    {
        return $this->readOneof(3);
    }

    /**
     * Generated from protobuf field <code>string address = 3[json_name = "address"];</code>
     * @param string $var
     * @return $this
     */
    public function setAddress($var)
    {
        GPBUtil::checkString($var, True);
        $this->writeOneof(3, $var);

        return $this;
    }

    /**
     * @return string
     */
    public function getAttribute()
    {
        return $this->whichOneof("attribute");
    }

}
