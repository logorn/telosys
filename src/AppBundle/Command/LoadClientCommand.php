<?php

namespace AppBundle\Command;

use Symfony\Bundle\FrameworkBundle\Command\ContainerAwareCommand;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Input\InputOption;
use AppBundle\Entity\Client;

class LoadClientCommand extends ContainerAwareCommand
{
    /**
     *
     * AppBundle\Repository\ClientRepository
     *
     */
    protected $clientRepository;
    
    /**
     *
     * @var bool
     *
     */
    protected $isDryRun;    
    
    protected function configure()
    {
        $this
            ->setName('telosys:client:load')
            ->setDescription('Load client from extract and pupulate database')
            ->addOption(
                "dry-run",
                "d",
                InputOption::VALUE_NONE,
                "Simulates processing without database insertion."
            );
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {   
        $listBusLine        = [];
        $numberOfInsert     = 0;
        $asDryRunMessage    = "";
        $this->isDryRun     = $input->getOption('dry-run');
        
        if ($this->isDryRun) {
            $asDryRunMessage = " in dry-run mode";
        }
        
        $em = $this->getContainer()->get('doctrine.orm.entity_manager');
        $this->clientRepository= $em->getRepository("AppBundle\Entity\Client");
        
        $clientService      = $this->getContainer()->get('client_service');
        $jsonIterator       = $this->loadJsonData();
        
        foreach ($jsonIterator as $key => $clientData) {
            if(is_array($clientData)) {
                $client = new Client();
                $client->setCarrierNumber($clientData['carrierNumber'])
                    ->setCarrierFirstName($clientData['carrierFirstName'])
                    ->setCarrierName($clientData['carrierName'])
                    ->setCarrierAddress($clientData['carrierAddress'])
                    ->setCarrierTown($clientData['carrierTown']);
                    
                if (isset($clientData['carrierPostalCode'])) {
                    $client->setCarrierPostalCode($clientData['carrierPostalCode']);
                }
                    
                if (!$this->isDryRun) {
                    $clientService->createClient($client);
                }
                
                $numberOfInsert++;
            }
        }
        
        $output->writeln(sprintf("Client inserted: %d", $numberOfInsert));
    }
    
    protected function loadJsonData()
    {
        $content = file_get_contents($this->getContainer()->get('kernel')->getRootDir() . "/../data/clients.json");
        
        $jsonIterator = new \RecursiveIteratorIterator(
            new \RecursiveArrayIterator(json_decode($content, TRUE)),
            \RecursiveIteratorIterator::SELF_FIRST
        );

        return $jsonIterator;
    }
}
