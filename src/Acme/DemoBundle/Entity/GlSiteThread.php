<?php

namespace Acme\DemoBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Acme\DemoBundle\Entity\GlSiteThread
 *
 * @ORM\Table(name="gl_site_thread")
 * @ORM\Entity
 */
class GlSiteThread
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
     * @var string $identity
     *
     * @ORM\Column(name="identity", type="string", length=45, nullable=true)
     */
    private $identity;

    /**
     * @var integer $maxReply
     *
     * @ORM\Column(name="max_reply", type="integer", nullable=true)
     */
    private $maxReply;

    /**
     * @var GlSiteForum
     *
     * @ORM\ManyToOne(targetEntity="GlSiteForum")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="forum_id", referencedColumnName="id")
     * })
     */
    private $forum;



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
     * Set identity
     *
     * @param string $identity
     */
    public function setIdentity($identity)
    {
        $this->identity = $identity;
    }

    /**
     * Get identity
     *
     * @return string 
     */
    public function getIdentity()
    {
        return $this->identity;
    }

    /**
     * Set maxReply
     *
     * @param integer $maxReply
     */
    public function setMaxReply($maxReply)
    {
        $this->maxReply = $maxReply;
    }

    /**
     * Get maxReply
     *
     * @return integer 
     */
    public function getMaxReply()
    {
        return $this->maxReply;
    }

    /**
     * Set forum
     *
     * @param Acme\DemoBundle\Entity\GlSiteForum $forum
     */
    public function setForum(\Acme\DemoBundle\Entity\GlSiteForum $forum)
    {
        $this->forum = $forum;
    }

    /**
     * Get forum
     *
     * @return Acme\DemoBundle\Entity\GlSiteForum 
     */
    public function getForum()
    {
        return $this->forum;
    }
}