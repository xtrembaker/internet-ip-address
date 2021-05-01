<?php

namespace CustomDynDns\ValueObject;

class IpAddress
{
    private string $ip;

    private function __construct(string $ip)
    {
        // @TODO assert ip is a real ip address
        $this->ip = $ip;
    }
    
    public static function create(string $ip): self
    {
        return new self($ip);
    }
    
    public function value(): string
    {
        return $this->ip;
    }
}