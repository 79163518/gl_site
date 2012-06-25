<?php

namespace Acme\DemoBundle\Site;

abstract class AbstractSiteAccount implements SiteAccountInterface
{
    public function __construct(EntityManager $em)
    {
    }

    public function getUserName()
    {
    }

    public function getPassword()
    {
    }
}
