<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: identity/admin/admin.proto

namespace Auth3\Identity\Admin;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>depot.devtools.auth.v0.identity.admin.DeleteIdSchemaRequest</code>
 */
class DeleteIdSchemaRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>string id = 1[json_name = "id"];</code>
     */
    protected $id = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $id
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

}

