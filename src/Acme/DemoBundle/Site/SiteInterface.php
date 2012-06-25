<?php

namespace Acme\DemoBundle\Site;

interface SiteInterface
{
    function login(SiteAccount $account = null);

    function logout(Account $account = null);

    function getSite($shrot = null);
}
