<?php
namespace Acme\DemoBundle\Command;

use Symfony\Bundle\FrameworkBundle\Command\ContainerAwareCommand;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Output\OutputInterface;

use Acme\DemoBundle\Crawler\Crawler;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\DependencyInjection\Reference;

class CrawlerCommand extends ContainerAwareCommand
{
    protected function configure()
    {
        $this
            ->setName('demo:greet')
            ->setDescription('Greet someone')
            ->addArgument('name', InputArgument::OPTIONAL, 'Who do you want to greet?')
            ->addOption('yell', null, InputOption::VALUE_NONE, 'If set, the task will yell in uppercase letters')
        ;

    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $forum = 'lou19_entertain';

        $crawlerServiceId = $forum.'_crawler';

        //$siteService = 'Acme\\DemoBundle\\Site\\'.$siteShort.'Site';
        //$forumService =  'Acme\\DemoBundle\\Forum\\'.$siteShort.$forumShort.'Forum';

        //$this->getContainer()->register($siteServiceId, $siteService)
            //->addArgument(new Reference("doctrine.orm.entity_manager"));
        //$this->getContainer()->register($forumServiceId, $forumService)
            //->addArgument(new Reference("doctrine.orm.entity_manager"));


        $crawler = $this->getContainer()->get($crawlerServiceId);

        $result = $this->getContainer()->get('doctrine')
            ->getRepository('AcmeDemoBundle:GlSiteForum')
            ->findByForumJoinToSite('lou19_entertain');

        var_export($result);

        
        //$name = $input->getArgument('name');
        //if ($name) {
            //$text = 'Hello '.$name;
        //} else {
            //$text = 'Hello';
        //}

        //if ($input->getOption('yell')) {
            //$text = strtoupper($text);
        //}

        //$output->writeln($text);
    }
}

