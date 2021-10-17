# Auth3 PHP SDK

The official [Auth3](https://auth3.dev/?utm_source=github&utm_medium=sdk&utm_campaign=php) php SDK library.

## API Documentation

Check-out the API documentation at [https://docs.auth3.dev/apis/identity-platform/administrative](https://docs.auth3.dev/apis/identity-platform/administrative?utm_source=github&utm_medium=sdk&utm_campaign=php) for further help.

## Installation

### Prerequisites

Please, note that using this library requires that you also [Install gRPC for PHP](https://cloud.google.com/php/grpc) on your system. 

Missing to do so, will result in import errors regarding gRPC libraries (such as, `Error: Class 'Grpc\ChannelCredentials' not found`). In that case, make sure that to `sudo pecl install grpc-<version>` the same version of the resolved PHP library, to avoid any kind of issues. 

**Mac users** which installed php via `brew` should also make sure to use the correct `php` binary, rather than the system-wide `/usr/bin/php`. You can see your binary location with `brew list php` (for example, `/usr/local/Cellar/php/8.0.11_1/bin/php`). Failing to do so could lead to the same issues stated above, because the `extension=grpc.so` might have been configured on another php installation.

### Automated

```bash
$ composer require auth3-dev/auth3-sdk
```

### Manual

Using [composer](https://getcomposer.org/) to get the library, add to your `composer.json`:

```php
"require": {
  "auth3-dev/auth3-sdk": "^1.0.0"
}
```

Then run:

```bash
$ composer install # or "update"
```

Within your code you can now:

```php
<?php

require('vendor/autoload.php');

$client = new Auth3\Identity\Admin\AdminClient('<admin-endpoint-as-found-in-your-Console>', [
    'credentials' => Grpc\ChannelCredentials::secure(),
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

// do something with the response:
// $response.getConnections()
```

## Examples

Check-out the `examples/` folder to see how to initialise a client and perform queries.

Execute it with:

```bash
$ cat examples/admin/main.php # customise client connection info
$ composer install
$ php -d extension=grpc.so main.php
```

**NOTE** You will need to add `extension=grpc.so` into your php.ini file. Or add `-d extension=grpc.so` to your command line to load the needed extensions. Failing to do so won't resolve some libraries imports. Check out the [documentation](https://cloud.google.com/php/grpc) to setup your environment.

## Additional help

You can find further help, examples, tools and suggestions [here](https://grpc.io/docs/languages/php/).

## Change Language

Not your target language? Check out our official SDKs for: 

  * [go](https://github.com/auth3-dev/go-sdk)
  * [cpp](https://github.com/auth3-dev/cpp-sdk)
  * [java](https://github.com/auth3-dev/java-sdk)
  * [nodejs](https://github.com/auth3-dev/nodejs-sdk)
  * [dart](https://github.com/auth3-dev/dart-sdk)
  * [python](https://github.com/auth3-dev/python-sdk)
  * [php](https://github.com/auth3-dev/php-sdk)
  * [ruby](https://github.com/auth3-dev/ruby-sdk)
  * [rust](https://github.com/auth3-dev/rust-sdk)
  * [scala](https://github.com/auth3-dev/scala-sdk)
  * [swift](https://github.com/auth3-dev/swift-sdk)
  * [c#](https://github.com/auth3-dev/csharp-sdk)

## Contributing

At this time we don't accept external contributions, but we're open for feedbacks and requests. We're always looking for contributions on our security, refer to [our dedicated page](https://auth3.dev/bounty-program?utm_source=github&utm_medium=sdk&utm_campaign=php) for more.

## Support

Customers of the Auth3 Identity Platform can access support through the official channels available on [our website](https://auth3.dev/?utm_source=github&utm_medium=sdk&utm_campaign=php). We won't be able to accomodate Customer requests through the bug tracker for security reasons. 

## License

Read the [LICENSE](./LICENSE).