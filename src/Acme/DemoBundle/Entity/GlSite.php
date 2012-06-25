<?php

namespace Acme\DemoBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Acme\DemoBundle\Entity\GlSite
 *
 * @ORM\Table(name="gl_site")
 * @ORM\Entity(repositoryClass="Acme\DemoBundle\Repository\SiteRepository")
 */
class GlSite
{
    /**
     * @var integer $id
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var string $name
     *
     * @ORM\Column(name="name", type="string", length=45, nullable=true)
     */
    private $name;

    /**
     * @var string $short
     *
     * @ORM\Column(name="short", type="string", length=45, nullable=true)
     */
    private $short;

    /**
     * @var string $url
     *
     * @ORM\Column(name="url", type="string", length=45, nullable=true)
     */
    private $url;

    /**
     * @var string $loginPattern
     *
     * @ORM\Column(name="login_pattern", type="string", length=1000, nullable=true)
     */
    private $loginPattern;

    /**
     * @var string $authPattern
     *
     * @ORM\Column(name="auth_pattern", type="string", length=45, nullable=true)
     */
    private $authPattern;

    /**
     * @var boolean $crawlerLogin
     *
     * @ORM\Column(name="crawler_login", type="boolean", nullable=true)
     */
    private $crawlerLogin;



    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set name
     *
     * @param string $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * Get name
     *
     * @return string 
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set short
     *
     * @param string $short
     */
    public function setShort($short)
    {
        $this->short = $short;
    }

    /**
     * Get short
     *
     * @return string 
     */
    public function getShort()
    {
        return $this->short;
    }

    /**
     * Set url
     *
     * @param string $url
     */
    public function setUrl($url)
    {
        $this->url = $url;
    }

    /**
     * Get url
     *
     * @return string 
     */
    public function getUrl()
    {
        return $this->url;
    }

    /**
     * Set loginPattern
     *
     * @param string $loginPattern
     */
    public function setLoginPattern($loginPattern)
    {
        $this->loginPattern = $loginPattern;
    }

    /**
     * Get loginPattern
     *
     * @return string 
     */
    public function getLoginPattern()
    {
        return $this->loginPattern;
    }

    /**
     * Set authPattern
     *
     * @param string $authPattern
     */
    public function setAuthPattern($authPattern)
    {
        $this->authPattern = $authPattern;
    }

    /**
     * Get authPattern
     *
     * @return string 
     */
    public function getAuthPattern()
    {
        return $this->authPattern;
    }

    /**
     * Set crawlerLogin
     *
     * @param boolean $crawlerLogin
     */
    public function setCrawlerLogin($crawlerLogin)
    {
        $this->crawlerLogin = $crawlerLogin;
    }

    /**
     * Get crawlerLogin
     *
     * @return boolean 
     */
    public function getCrawlerLogin()
    {
        return $this->crawlerLogin;
    }
}