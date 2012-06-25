<?php
namespace Acme\DemoBundle\Forum;
use Doctrine\ORM\EntityManager;

abstract class AbstractForum implements ForumInterface
{
    public function __construct(EntityManager $em, $short)
    {
        $this->em = $em;
        $this->forumName = $short;
        $this->getSite();
    }

    public function getForumUrl()
    {

    }

    public function getThreadPattern()
    {

    }

    public function getSite()
    {
        //return $this->em->getRepository('AcmeDemoBundle:ForumRepository')
            //->findByForumJoinToSite($this->forumName);
    }
}
