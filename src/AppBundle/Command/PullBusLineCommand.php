<?php

namespace AppBundle\Command;

use Symfony\Bundle\FrameworkBundle\Command\ContainerAwareCommand;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use AppBundle\Entity\BusLine;

class PullBusLineCommand extends ContainerAwareCommand
{
    /**
     *
     * AppBundle\Repository\BusLineRepository
     *
     */
    protected $busLineRepository;
    
    protected function configure()
    {
        $this
            ->setName('telosys:busline:update')
            ->setDescription('Pull bus line and update or insert into databases');
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $listBusLine        = [];
        $numberOfInsert     = 0;        
        
        $em = $this->getContainer()->get('doctrine.orm.entity_manager');
        $this->busLineRepository= $em->getRepository("AppBundle\Entity\BusLine");
        
        $busLineData        = $this->busLineRepository->findAll();
        $busLineService     = $this->getContainer()->get('busline_service');
        $listBusLineFromApi = $busLineService->pullBuslineData();
        
        foreach($busLineData as $result) {
            $listBusLine[] = $result->getCode();;
        }
        
        foreach ($listBusLineFromApi->records as $result)
        {
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
            
            if (!in_array($busLine->getCode(), $listBusLine)) {
                $numberOfInsert++;
                $this->busLineRepository->save($busLine);
            }
        }
        
        $busLineData = $this->busLineRepository->findAll();
        
        $output->writeln(sprintf("Bus line list updated at %s", date('Y/m/d H:i:s')));
        $output->writeln(sprintf("Number of bus line inserted: %d", $numberOfInsert));
        $output->writeln(sprintf("Total bus line in database : %d", count($busLineData)));
    }
}
