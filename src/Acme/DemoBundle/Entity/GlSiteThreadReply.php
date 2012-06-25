<?php

namespace Acme\DemoBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Acme\DemoBundle\Entity\GlSiteThreadReply
 *
 * @ORM\Table(name="gl_site_thread_reply")
 * @ORM\Entity
 */
class GlSiteThreadReply
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
     * @var GlSiteThread
     *
     * @ORM\ManyToOne(targetEntity="GlSiteThread")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="thread_id", referencedColumnName="id")
     * })
     */
    private $thread;

    /**
     * @var GlSiteAccount
     *
     * @ORM\ManyToOne(targetEntity="GlSiteAccount")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="account_id", referencedColumnName="id")
     * })
     */
    private $account;

    /**
     * @var GlReplayPool
     *
     * @ORM\ManyToOne(targetEntity="GlReplayPool")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="reply_content", referencedColumnName="id")
     * })
     */
    private $replyContent;



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
     * Set thread
     *
     * @param Acme\DemoBundle\Entity\GlSiteThread $thread
     */
    public function setThread(\Acme\DemoBundle\Entity\GlSiteThread $thread)
    {
        $this->thread = $thread;
    }

    /**
     * Get thread
     *
     * @return Acme\DemoBundle\Entity\GlSiteThread 
     */
    public function getThread()
    {
        return $this->thread;
    }

    /**
     * Set account
     *
     * @param Acme\DemoBundle\Entity\GlSiteAccount $account
     */
    public function setAccount(\Acme\DemoBundle\Entity\GlSiteAccount $account)
    {
        $this->account = $account;
    }

    /**
     * Get account
     *
     * @return Acme\DemoBundle\Entity\GlSiteAccount 
     */
    public function getAccount()
    {
        return $this->account;
    }

    /**
     * Set replyContent
     *
     * @param Acme\DemoBundle\Entity\GlReplayPool $replyContent
     */
    public function setReplyContent(\Acme\DemoBundle\Entity\GlReplayPool $replyContent)
    {
        $this->replyContent = $replyContent;
    }

    /**
     * Get replyContent
     *
     * @return Acme\DemoBundle\Entity\GlReplayPool 
     */
    public function getReplyContent()
    {
        return $this->replyContent;
    }
}