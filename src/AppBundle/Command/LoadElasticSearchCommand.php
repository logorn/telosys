<?php

/*
 * This file is part of the Telosys package.
 *
 * Coded by MAILLET Hugues
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace AppBundle\Command;

use Symfony\Bundle\FrameworkBundle\Command\ContainerAwareCommand;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Input\InputOption;
use AppBundle\Entity\BusLine;

/**
 * Class LoadElasticSearchCommand.
 */
class LoadElasticSearchCommand extends ContainerAwareCommand
{
    /**
     *
     * @var bool
     *
     */
    protected $isDryRun;
    
    /**
     *
     * AppBundle\Repository\BusLineRepository
     *
     */
    protected $busLineRepository;

    /**
     * {@inheritdoc}
     */
    protected function configure()
    {
        $this
            ->setName('telosys:elasticsearch:load')
            ->setDescription('Load elasticsearch with busline data')
            ->addOption(
                "dry-run",
                "d",
                InputOption::VALUE_NONE,
                "Simulates processing without insertion."
            );
    }

    /**
     * {@inheritdoc}
     */
    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $numberOfInsert     = 0;
        $asDryRunMessage    = "";
        $this->isDryRun     = $input->getOption('dry-run');
        
        if ($this->isDryRun) {
            $asDryRunMessage = " in dry-run mode";
        }
        
        // setup index
        $busLineSearchService = $this->getContainer()->get('busline_search_service');
        
        if (!$this->isDryRun) {
            $busLineSearchService->setupIndex();
        }
        
        $busLineService = $this->getContainer()->get('busline_service');
        $results        = $busLineService->getBusLineList();
        
        $output->writeln(sprintf("\n\n<info>Begin insert bus line%s.</info>", $asDryRunMessage));
        
        foreach ($results as $result) {
            if (!$this->isDryRun) {
                $busLineSearchService->saveDocument($result);
            }
            $numberOfInsert++;
        }
        
        $output->writeln(sprintf("Bus line list updated at %s", date('Y/m/d H:i:s')));
        $output->writeln(sprintf("Number of bus line inserted: %d", $numberOfInsert));
    }
}
