<?php

require dirname(__FILE__).'/vendor/autoload.php';

// Please, head over to https://console.auth3.dev/ and get your Administrative API Endpoint
// from your project's "Settings" > "Endpoints"
$client = new Auth3\Identity\Admin\AdminClient('<admin-endpoint-as-found-in-your-Console>', [
    'credentials' => Grpc\ChannelCredentials::createInsecure(),
]);

$request = new Auth3\Identity\Admin\GetConnectionsRequest();
// This is how you can use setters to provide parameters to the request:
// $request->setAttribute($request);
// in this case it's not needed.

list($response, $status) = $client->getConnections($request)->wait();
if ($status->code !== Grpc\STATUS_OK) {
    echo "ERROR: " . $status->code . ", " . $status->details . PHP_EOL;
    exit(1);
}

// do something with the response: $response->getConnections();
