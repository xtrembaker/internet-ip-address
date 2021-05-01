<?php

namespace CustomDynDns;

use CustomDynDns\ValueObject\IpAddress;
use Symfony\Component\DomCrawler\Crawler;

class GetIpAddressService
{
    public function __invoke(): IpAddress
    {
        $html = file_get_contents('https://mon-ip.io');

        $crawler = new Crawler();
        $crawler->addHtmlContent($html);

        $nodes = $crawler->filterXPath('//p[@id="ip"]');

        return IpAddress::create($nodes->getNode(0)->textContent);
    }
}