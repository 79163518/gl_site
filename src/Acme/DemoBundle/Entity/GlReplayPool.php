<?php

namespace Acme\DemoBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Acme\DemoBundle\Entity\GlReplayPool
 *
 * @ORM\Table(name="gl_replay_pool")
 * @ORM\Entity
 */
class GlReplayPool
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
     * @var string $content
     *
     * @ORM\Column(name="content", type="string", length=1000, nullable=true)
     */
    private $content;

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
     * Set content
     *
     * @param string $content
     */
    public function setContent($content)
    {
        $this->content = $content;
    }

    /**
     * Get content
     *
     * @return string 
     */
    public function getContent()
    {
        return $this->content;
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