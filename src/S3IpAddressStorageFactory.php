<?php

namespace CustomDynDns;

use Aws\S3\S3Client;

class S3IpAddressStorageFactory
{
    public static function create(): S3IpAddressStorage
    {
        return new S3IpAddressStorage(
            new S3Client([
                'region' => 'eu-west-1',
                'version' => '2006-03-01'
            ])
        );
    }
}