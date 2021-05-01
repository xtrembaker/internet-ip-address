<?php

namespace CustomDynDns;

use Aws\S3\S3Client;
use CustomDynDns\ValueObject\IpAddress;

class S3IpAddressStorage implements IpAddressStorage
{
    private S3Client $client;
    private string $bucket;

    public function __construct(S3Client $client)
    {
        $this->client = $client;
    }

    public function save(IpAddress $ipAddress): void
    {
        $this->client->putObject([
            'Bucket' => 'le-pre-vert-ip-address',
            'Key' => 'le-pre-vert-ip-address',
            'Body' => $ipAddress->value()
        ]);
    }
}