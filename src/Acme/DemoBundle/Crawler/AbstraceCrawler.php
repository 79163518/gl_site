<?php

namespace Acme\DemoBundle\Crawler;
use Acme\DemoBundle\Site\SiteInterface; 
use Acme\DemoBundle\Forum\ForumInterface; 

abstract class AbstraceCrawler implements CrawlerInterface
{
    public function __construct(ForumInterface $forum)
    {
        $this->forum = $forum;
        $this->site = $forum->getSite();
    }

    public function crawl()
    {
        if ($this->site->needCrawlerlogin()) {
            $loginInfo = $this->site->login();
        }
    }
}
