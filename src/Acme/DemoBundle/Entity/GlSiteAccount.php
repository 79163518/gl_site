<?php

namespace Acme\DemoBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Acme\DemoBundle\Entity\GlSiteAccount
 *
 * @ORM\Table(name="gl_site_account")
 * @ORM\Entity
 */
class GlSiteAccount
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
     * @var string $userName
     *
     * @ORM\Column(name="user_name", type="string", length=45, nullable=true)
     */
    private $userName;

    /**
     * @var string $password
     *
     * @ORM\Column(name="password", type="string", length=45, nullable=true)
     */
    private $password;

    /**
     * @var GlSite
     *
     * @ORM\ManyToOne(targetEntity="GlSite")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="site_id", referencedColumnName="id")
     * })
     */
    private $site;



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
     * Set userName
     *
     * @param string $userName
     */
    public function setUserName($userName)
    {
        $this->userName = $userName;
    }

    /**
     * Get userName
     *
     * @return string 
     */
    public function getUserName()
    {
        return $this->userName;
    }

    /**
     * Set password
     *
     * @param string $password
     */
    public function setPassword($password)
    {
        $this->password = $password;
    }

    /**
     * Get password
     *
     * @return string 
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * Set site
     *
     * @param Acme\DemoBundle\Entity\GlSite $site
     */
    public function setSite(\Acme\DemoBundle\Entity\GlSite $site)
    {
        $this->site = $site;
    }

    /**
     * Get site
     *
     * @return Acme\DemoBundle\Entity\GlSite 
     */
    public function getSite()
    {
        return $this->site;
    }
}