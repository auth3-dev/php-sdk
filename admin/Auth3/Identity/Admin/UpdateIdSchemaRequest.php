<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: identity/admin/admin.proto

namespace Auth3\Identity\Admin;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>depot.devtools.auth.v0.identity.admin.UpdateIdSchemaRequest</code>
 */
class UpdateIdSchemaRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>string id = 1[json_name = "id"];</code>
     */
    protected $id = '';
    /**
     * Generated from protobuf field <code>string name = 2[json_name = "name"];</code>
     */
    protected $name = '';
    /**
     * Generated from protobuf field <code>.google.protobuf.Struct content = 3[json_name = "content"];</code>
     */
    protected $content = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $id
     *     @type string $name
     *     @type \Google\Protobuf\Struct $content
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
     * Generated from protobuf field <code>string name = 2[json_name = "name"];</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Generated from protobuf field <code>string name = 2[json_name = "name"];</code>
     * @param string $var
     * @return $this
     */
    public function setName($var)
    {
        GPBUtil::checkString($var, True);
        $this->name = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.google.protobuf.Struct content = 3[json_name = "content"];</code>
     * @return \Google\Protobuf\Struct
     */
    public function getContent()
    {
        return $this->content;
    }

    /**
     * Generated from protobuf field <code>.google.protobuf.Struct content = 3[json_name = "content"];</code>
     * @param \Google\Protobuf\Struct $var
     * @return $this
     */
    public function setContent($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Struct::class);
        $this->content = $var;

        return $this;
    }

}

