<?php

namespace Acme\DemoBundle\Crawler;
use Acme\DemoBundle\Site\SiteInterface; 

interface CrawlerInterface
{
    function crawl();
}
