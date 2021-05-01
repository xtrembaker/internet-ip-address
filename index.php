<?php

require __DIR__.'/vendor/autoload.php';

$dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
$dotenv->load();

use CustomDynDns\GetIpAddressService;
use CustomDynDns\S3IpAddressStorageFactory;

$ipAddress = (new GetIpAddressService())();

$ipAddressStorage = S3IpAddressStorageFactory::create();
$ipAddressStorage->save($ipAddress);