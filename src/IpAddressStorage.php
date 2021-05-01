<?php

namespace CustomDynDns;

use CustomDynDns\ValueObject\IpAddress;

interface IpAddressStorage
{
    public function save(IpAddress $ipAddress): void;
}