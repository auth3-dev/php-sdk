<?php
// GENERATED CODE -- DO NOT EDIT!

namespace Auth3\Identity\Admin;

/**
 */
class AdminClient extends \Grpc\BaseStub {

    /**
     * @param string $hostname hostname
     * @param array $opts channel options
     * @param \Grpc\Channel $channel (optional) re-use channel object
     */
    public function __construct($hostname, $opts, $channel = null) {
        parent::__construct($hostname, $opts, $channel);
    }

    /**
     * @param \Auth3\Identity\Admin\CreateIdentityRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function CreateIdentity(\Auth3\Identity\Admin\CreateIdentityRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/depot.devtools.auth.v0.identity.admin.Admin/CreateIdentity',
        $argument,
        ['\Auth3\Identity\Admin\CreateIdentityResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Auth3\Identity\Admin\GetIdentityRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function GetIdentity(\Auth3\Identity\Admin\GetIdentityRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/depot.devtools.auth.v0.identity.admin.Admin/GetIdentity',
        $argument,
        ['\Auth3\Identity\Admin\GetIdentityResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Auth3\Identity\Admin\GetIdentityByIdentifierRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function GetIdentityByIdentifier(\Auth3\Identity\Admin\GetIdentityByIdentifierRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/depot.devtools.auth.v0.identity.admin.Admin/GetIdentityByIdentifier',
        $argument,
        ['\Auth3\Identity\Admin\GetIdentityByIdentifierResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Auth3\Identity\Admin\GetIdentitiesByAttributeRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function GetIdentitiesByAttribute(\Auth3\Identity\Admin\GetIdentitiesByAttributeRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/depot.devtools.auth.v0.identity.admin.Admin/GetIdentitiesByAttribute',
        $argument,
        ['\Auth3\Identity\Admin\GetIdentitiesByAttributeResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Auth3\Identity\Admin\GetIdentitiesRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function GetIdentities(\Auth3\Identity\Admin\GetIdentitiesRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/depot.devtools.auth.v0.identity.admin.Admin/GetIdentities',
        $argument,
        ['\Auth3\Identity\Admin\GetIdentitiesResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Auth3\Identity\Admin\UpdateIdentityRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function UpdateIdentity(\Auth3\Identity\Admin\UpdateIdentityRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/depot.devtools.auth.v0.identity.admin.Admin/UpdateIdentity',
        $argument,
        ['\Auth3\Identity\Admin\UpdateIdentityResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Auth3\Identity\Admin\DeleteIdentityRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function DeleteIdentity(\Auth3\Identity\Admin\DeleteIdentityRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/depot.devtools.auth.v0.identity.admin.Admin/DeleteIdentity',
        $argument,
        ['\Auth3\Identity\Admin\DeleteIdentityResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Auth3\Identity\Admin\GetAddressesRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function GetAddresses(\Auth3\Identity\Admin\GetAddressesRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/depot.devtools.auth.v0.identity.admin.Admin/GetAddresses',
        $argument,
        ['\Auth3\Identity\Admin\GetAddressesResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Auth3\Identity\Admin\GetAddressRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function GetAddress(\Auth3\Identity\Admin\GetAddressRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/depot.devtools.auth.v0.identity.admin.Admin/GetAddress',
        $argument,
        ['\Auth3\Identity\Admin\GetAddressResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Auth3\Identity\Admin\UpdateAddressRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function UpdateAddress(\Auth3\Identity\Admin\UpdateAddressRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/depot.devtools.auth.v0.identity.admin.Admin/UpdateAddress',
        $argument,
        ['\Auth3\Identity\Admin\UpdateAddressResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Auth3\Identity\Admin\GetTraitsRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function GetTraits(\Auth3\Identity\Admin\GetTraitsRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/depot.devtools.auth.v0.identity.admin.Admin/GetTraits',
        $argument,
        ['\Auth3\Identity\Admin\GetTraitsResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Auth3\Identity\Admin\UpdateTraitsRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function UpdateTraits(\Auth3\Identity\Admin\UpdateTraitsRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/depot.devtools.auth.v0.identity.admin.Admin/UpdateTraits',
        $argument,
        ['\Auth3\Identity\Admin\UpdateTraitsResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Auth3\Identity\Admin\GetCredentialsRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function GetCredentials(\Auth3\Identity\Admin\GetCredentialsRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/depot.devtools.auth.v0.identity.admin.Admin/GetCredentials',
        $argument,
        ['\Auth3\Identity\Admin\GetCredentialsResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Auth3\Identity\Admin\UpdateCredentialRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function UpdateCredential(\Auth3\Identity\Admin\UpdateCredentialRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/depot.devtools.auth.v0.identity.admin.Admin/UpdateCredential',
        $argument,
        ['\Auth3\Identity\Admin\UpdateCredentialResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Auth3\Identity\Admin\GetIdentityLoginAttemptsRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function GetIdentityLoginAttempts(\Auth3\Identity\Admin\GetIdentityLoginAttemptsRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/depot.devtools.auth.v0.identity.admin.Admin/GetIdentityLoginAttempts',
        $argument,
        ['\Auth3\Identity\Admin\GetIdentityLoginAttemptsResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Auth3\Identity\Admin\CreateConnectionRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function CreateConnection(\Auth3\Identity\Admin\CreateConnectionRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/depot.devtools.auth.v0.identity.admin.Admin/CreateConnection',
        $argument,
        ['\Auth3\Identity\Admin\CreateConnectionResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Auth3\Identity\Admin\GetConnectionsRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function GetConnections(\Auth3\Identity\Admin\GetConnectionsRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/depot.devtools.auth.v0.identity.admin.Admin/GetConnections',
        $argument,
        ['\Auth3\Identity\Admin\GetConnectionsResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Auth3\Identity\Admin\UpdateConnectionRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function UpdateConnection(\Auth3\Identity\Admin\UpdateConnectionRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/depot.devtools.auth.v0.identity.admin.Admin/UpdateConnection',
        $argument,
        ['\Auth3\Identity\Admin\UpdateConnectionResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Auth3\Identity\Admin\DeleteConnectionRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function DeleteConnection(\Auth3\Identity\Admin\DeleteConnectionRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/depot.devtools.auth.v0.identity.admin.Admin/DeleteConnection',
        $argument,
        ['\Auth3\Identity\Admin\DeleteConnectionResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Auth3\Identity\Admin\CreateIdSchemaRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function CreateIdSchema(\Auth3\Identity\Admin\CreateIdSchemaRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/depot.devtools.auth.v0.identity.admin.Admin/CreateIdSchema',
        $argument,
        ['\Auth3\Identity\Admin\CreateIdSchemaResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Auth3\Identity\Admin\GetIdSchemasRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function GetIdSchemas(\Auth3\Identity\Admin\GetIdSchemasRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/depot.devtools.auth.v0.identity.admin.Admin/GetIdSchemas',
        $argument,
        ['\Auth3\Identity\Admin\GetIdSchemasResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Auth3\Identity\Admin\GetIdSchemaRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function GetIdSchema(\Auth3\Identity\Admin\GetIdSchemaRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/depot.devtools.auth.v0.identity.admin.Admin/GetIdSchema',
        $argument,
        ['\Auth3\Identity\Admin\GetIdSchemaResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Auth3\Identity\Admin\GetDefaultIdSchemaRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function GetDefaultIdSchema(\Auth3\Identity\Admin\GetDefaultIdSchemaRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/depot.devtools.auth.v0.identity.admin.Admin/GetDefaultIdSchema',
        $argument,
        ['\Auth3\Identity\Admin\GetDefaultIdSchemaResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Auth3\Identity\Admin\UpdateIdSchemaRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function UpdateIdSchema(\Auth3\Identity\Admin\UpdateIdSchemaRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/depot.devtools.auth.v0.identity.admin.Admin/UpdateIdSchema',
        $argument,
        ['\Auth3\Identity\Admin\UpdateIdSchemaResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Auth3\Identity\Admin\MarkDefaultIdSchemaRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function MarkDefaultIdSchema(\Auth3\Identity\Admin\MarkDefaultIdSchemaRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/depot.devtools.auth.v0.identity.admin.Admin/MarkDefaultIdSchema',
        $argument,
        ['\Auth3\Identity\Admin\MarkDefaultIdSchemaResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Auth3\Identity\Admin\DeleteIdSchemaRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function DeleteIdSchema(\Auth3\Identity\Admin\DeleteIdSchemaRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/depot.devtools.auth.v0.identity.admin.Admin/DeleteIdSchema',
        $argument,
        ['\Auth3\Identity\Admin\DeleteIdSchemaResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Auth3\Identity\Admin\CreateOAuth2ClientRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function CreateOAuth2Client(\Auth3\Identity\Admin\CreateOAuth2ClientRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/depot.devtools.auth.v0.identity.admin.Admin/CreateOAuth2Client',
        $argument,
        ['\Auth3\Identity\Admin\CreateOAuth2ClientResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Auth3\Identity\Admin\GetOAuth2ClientsRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function GetOAuth2Clients(\Auth3\Identity\Admin\GetOAuth2ClientsRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/depot.devtools.auth.v0.identity.admin.Admin/GetOAuth2Clients',
        $argument,
        ['\Auth3\Identity\Admin\GetOAuth2ClientsResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Auth3\Identity\Admin\UpdateOAuth2ClientRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function UpdateOAuth2Client(\Auth3\Identity\Admin\UpdateOAuth2ClientRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/depot.devtools.auth.v0.identity.admin.Admin/UpdateOAuth2Client',
        $argument,
        ['\Auth3\Identity\Admin\UpdateOAuth2ClientResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Auth3\Identity\Admin\DeleteOAuth2ClientRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function DeleteOAuth2Client(\Auth3\Identity\Admin\DeleteOAuth2ClientRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/depot.devtools.auth.v0.identity.admin.Admin/DeleteOAuth2Client',
        $argument,
        ['\Auth3\Identity\Admin\DeleteOAuth2ClientResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Auth3\Identity\Admin\GetEmailsSetupRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function GetEmailsSetup(\Auth3\Identity\Admin\GetEmailsSetupRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/depot.devtools.auth.v0.identity.admin.Admin/GetEmailsSetup',
        $argument,
        ['\Auth3\Identity\Admin\GetEmailsSetupResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Auth3\Identity\Admin\UpdateEmailsSetupRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function UpdateEmailsSetup(\Auth3\Identity\Admin\UpdateEmailsSetupRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/depot.devtools.auth.v0.identity.admin.Admin/UpdateEmailsSetup',
        $argument,
        ['\Auth3\Identity\Admin\UpdateEmailsSetupResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Auth3\Identity\Admin\GetUserBaseStatisticsRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function GetUserBaseStatistics(\Auth3\Identity\Admin\GetUserBaseStatisticsRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/depot.devtools.auth.v0.identity.admin.Admin/GetUserBaseStatistics',
        $argument,
        ['\Auth3\Identity\Admin\GetUserBaseStatisticsResponse', 'decode'],
        $metadata, $options);
    }

}
