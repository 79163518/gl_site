<?php

namespace Acme\DemoBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Acme\DemoBundle\Entity\GlSiteForum
 *
 * @ORM\Table(name="gl_site_forum")
 * @ORM\Entity(repositoryClass="Acme\DemoBundle\Repository\ForumRepository")
 */
class GlSiteForum
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
     * @var string $forumName
     *
     * @ORM\Column(name="forum_name", type="string", length=45, nullable=true)
     */
    private $forumName;

    /**
     * @var string $threadPattern
     *
     * @ORM\Column(name="thread_pattern", type="string", length=1000, nullable=true)
     */
    private $threadPattern;

    /**
     * @var string $url
     *
     * @ORM\Column(name="url", type="string", length=45, nullable=true)
     */
    private $url;

    /**
     * @var integer $deep
     *
     * @ORM\Column(name="deep", type="integer", nullable=true)
     */
    private $deep;

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
     * Set forumName
     *
     * @param string $forumName
     */
    public function setForumName($forumName)
    {
        $this->forumName = $forumName;
    }

    /**
     * Get forumName
     *
     * @return string 
     */
    public function getForumName()
    {
        return $this->forumName;
    }

    /**
     * Set threadPattern
     *
     * @param string $threadPattern
     */
    public function setThreadPattern($threadPattern)
    {
        $this->threadPattern = $threadPattern;
    }

    /**
     * Get threadPattern
     *
     * @return string 
     */
    public function getThreadPattern()
    {
        return $this->threadPattern;
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
     * Set deep
     *
     * @param integer $deep
     */
    public function setDeep($deep)
    {
        $this->deep = $deep;
    }

    /**
     * Get deep
     *
     * @return integer 
     */
    public function getDeep()
    {
        return $this->deep;
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
