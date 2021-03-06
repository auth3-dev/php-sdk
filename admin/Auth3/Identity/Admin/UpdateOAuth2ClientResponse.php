<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: identity/admin/admin.proto

namespace Auth3\Identity\Admin;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>depot.devtools.auth.v0.identity.admin.UpdateOAuth2ClientResponse</code>
 */
class UpdateOAuth2ClientResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>string client_id = 1[json_name = "clientId"];</code>
     */
    protected $client_id = '';
    /**
     * Generated from protobuf field <code>string client_secret = 2[json_name = "clientSecret"];</code>
     */
    protected $client_secret = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $client_id
     *     @type string $client_secret
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Devtools\Auth\V0\Proto\Identity\Admin\Admin::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>string client_id = 1[json_name = "clientId"];</code>
     * @return string
     */
    public function getClientId()
    {
        return $this->client_id;
    }

    /**
     * Generated from protobuf field <code>string client_id = 1[json_name = "clientId"];</code>
     * @param string $var
     * @return $this
     */
    public function setClientId($var)
    {
        GPBUtil::checkString($var, True);
        $this->client_id = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string client_secret = 2[json_name = "clientSecret"];</code>
     * @return string
     */
    public function getClientSecret()
    {
        return $this->client_secret;
    }

    /**
     * Generated from protobuf field <code>string client_secret = 2[json_name = "clientSecret"];</code>
     * @param string $var
     * @return $this
     */
    public function setClientSecret($var)
    {
        GPBUtil::checkString($var, True);
        $this->client_secret = $var;

        return $this;
    }

}

