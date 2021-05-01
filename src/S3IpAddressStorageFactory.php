<?php

namespace CustomDynDns;

use Aws\Credentials\Credentials;
use Aws\S3\S3Client;

class S3IpAddressStorageFactory
{
    public static function create(): S3IpAddressStorage
    {
        return new S3IpAddressStorage(
            new S3Client([
                'region' => 'eu-west-1',
                'version' => '2006-03-01',
                'credentials' => new Credentials(
                    $_ENV['AWS_ACCESS_KEY_ID'],
                    $_ENV['AWS_SECRET_ACCESS_KEY']
                )
            ])
        );
    }
}