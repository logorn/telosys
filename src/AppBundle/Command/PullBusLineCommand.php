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
use AppBundle\Document\BusLineStopsCoordinates;

/**
 * Class PullBusLineCommand.
 */
class PullBusLineCommand extends ContainerAwareCommand
{
    /**
     *
     * AppBundle\Repository\BusLineRepository
     *
     */
    protected $busLineRepository;
    
    /**
     *
     * @var bool
     *
     */
    protected $isDryRun;    

    /**
     * {@inheritdoc}
     */    
    protected function configure()
    {
        $this
            ->setName('telosys:busline:update')
            ->setDescription('Pull bus line and update or insert into databases')
            ->addOption(
                "dry-run",
                "d",
                InputOption::VALUE_NONE,
                "Simulates bus line pull without database insertion."
            );
    }

    /**
     * {@inheritdoc}
     */    
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
        $this->busLineRepository= $em->getRepository("AppBundle\Entity\BusLine");
        
        $busLineData        = $this->busLineRepository->findAll();
        $busLineService     = $this->getContainer()->get('busline_service');
        $listBusLineFromApi = $busLineService->pullBuslineData();
        
        foreach($busLineData as $result) {
            $listBusLine[] = $result->getCode();
        }
        
        $output->writeln(sprintf("\n\n<info>Begin insert bus line%s.</info>", $asDryRunMessage));
        
        foreach ($listBusLineFromApi->records as $result)
        {
            // orm
            $busLine = $this->getBuslineEntity($result);
            // odm
            $busLineStopsCoordinates = $this->getBusLineStopsCoordinates($result);
            
            if (!in_array($busLine->getCode(), $listBusLine)) {
                $numberOfInsert++;
                if (!$this->isDryRun) {
                    $this->busLineRepository->save($busLine);
                    $this->insertBusLineStopsCoordinates($busLineStopsCoordinates);
                }
            }
        }
        
        $busLineData = $this->busLineRepository->findAll();
        
        $output->writeln(sprintf("Bus line list updated at %s", date('Y/m/d H:i:s')));
        $output->writeln(sprintf("Number of bus line inserted: %d", $numberOfInsert));
        $output->writeln(sprintf("Total bus line in database: %d", count($busLineData)));
    }
    
    /**
     * @param stdClass $result
     * @return BusLine $busLine
     */    
    protected function getBuslineEntity($result)
    {
        // entity
        $busLine = new BusLine();
        $busLine->setRecordId($result->recordid);
        $busLine->setDepartureStartPointName($result->fields->nomarretdepart);
        $busLine->setArriveStopPointName($result->fields->nomarretarrivee);
        $busLine->setCode($result->fields->code);
        $busLine->setShortName($result->fields->nomcourtligne);
        $busLine->setFullLabel($result->fields->libellelong);
        $busLine->setLineId($result->fields->idligne);
        $busLine->setDepartureStartPointId($result->fields->idarretdepart);
        $busLine->setArriveStopPointId($result->fields->idarretarrivee);
        $busLine->setCommercialSense($result->fields->senscommercial);
        $busLine->setIsAccessibleForDisabledPersons((bool) $result->fields->estaccessiblepmr);
        $busLine->setInternalId($result->fields->id);
        $busLine->setType($result->fields->type);
        
        return $busLine;
    }
    
    /**
     * @param stdClass $result
     * @return BusLineStopsCoordinates $busLineStopsCoordinates
     */
    protected function getBusLineStopsCoordinates($result)
    {
        $busLineStopsCoordinates = new BusLineStopsCoordinates();
        $busLineStopsCoordinates->setCode($result->fields->code);
        $busLineStopsCoordinates->setRecordId($result->recordid);
        
        if (property_exists($result->fields, "parcours")) {
            $busLineStopsCoordinates->setCourse((array) $result->fields->parcours);
        }
        
        if (property_exists($result->fields, "geo_point_2d")) {
            $busLineStopsCoordinates->setGeoPoint2d($result->fields->geo_point_2d);
        }
        
        if (property_exists($result, "geometry")) {
            $busLineStopsCoordinates->setGeometry((array) $result->geometry);
        }
        
        return $busLineStopsCoordinates;
    }
    
    /**
     * @param BusLineStopsCoordinates $busLineStopsCoordinates
     */
    protected function insertBusLineStopsCoordinates(BusLineStopsCoordinates $busLineStopsCoordinates)
    {
        $documentManager = $this->getDoctrineODMContainer();
        if (!$this->isDryRun) {
            $documentManager->persist($busLineStopsCoordinates);
            $documentManager->flush();
        }
    }
    
    /**
     *
     * @return Doctrine\ODM\MongoDB\DocumentManager
     * 
     */
    protected function getDoctrineODMContainer()
    {
        return $this->getContainer()->get('doctrine_mongodb')->getManager();
    }
}
