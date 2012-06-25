<?php
namespace Acme\DemoBundle\Site;

use Doctrine\ORM\EntityManager;

abstract class AbstractSite implements SiteInterface
{
    public function __construct(EntityManager $em)
    {
        $this->repoSite = $em->getRepository('AcmeDemoBundle:GlSite');
    }

    public function login(SiteAccount $account = null)
    {
        $pattern = $this->parseLoginPattern(
            $account->getUserName(),
            $account->getPassword(),
            $account->getLoginPattern()
        );

        $ch = curl_init();
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true); 
        curl_setopt($ch, CURLOPT_BINARYTRANSFER, true); 

        $filedsStr = http_build_query($pattern['fields']);

        if ($pattern['method'] == 'POST') {
            curl_setopt($ch, CURLOPT_URL, $pattern['url']);
            curl_setopt($ch, CURLOPT_POST, count($pattern['fields'])) ; 
            curl_setopt($ch, CURLOPT_POSTFIELDS, $fieldsStr) ; 
        } else {
            if (strpos($pattern['url'], '?') === false) {
                $url = $pattern['url']."?".$fieldsStr;
            } else {
                $url = $pattern['url']."&".$fieldsStr;
            }
        }

        return curl_exec($ch);
    }

    public function logout(Account $account = null)
    {
    }

    public function getSite($short = null)
    {
        $this->site = $this->repoSite->getSiteByShort($short);

        return $this->site;
    }

    public function needCrawlerlogin()
    {
        if ($this->site->getCrawlerLogin() == 1) {
            return true;
        } else {
            return false;
        }
    }

    abstract public function auth(SiteAccount $account); 

    abstract protected function parseLoginPattern($userName, $password, $pattern); 
    
    abstract protected function parseAuthPattern($userName, $password, $pattern);


}
