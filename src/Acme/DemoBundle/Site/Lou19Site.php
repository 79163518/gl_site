<?php

namespace Acme\DemoBundle\Site;

class Lou19Site extends AbstractSite
{
    public function auth(SiteAccount $account)
    {
        $loginInfo = $this->login($account);

        $pattern = $this->parseAuthPattern(
            $account->getUserName(),
            $account->getPassword(),
            $account->getLoginPattern()
        );

        $tmp = array();

        $userCookie = str_replace(
            array($loginInfo['token']),
            array('%token%'),
            $pattern['cookie']
        );

        return $userCookie;
    }

    protected function parseLoginPattern($userName, $password, $pattern)
    {
        $tmp = array();
        $pattern = json_decode($pattern, true);

        $tmp['url'] = $pattern['url'];
        $tmp['method'] = $pattern['method'];

        $loginPhrase = str_replace(
            array($userName, $password), 
            array('%username%', '%password%'),
            $pattern['loginPhrase']
        );

        $tmp['fields'] = json_decode($str, true);

        return $tmp;
    }

    protected function parseAuthPattern($userName, $password, $pattern)
    {
        $cookiePattern = json_decode($pattern, true);
    }
}

