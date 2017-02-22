<?php

/*
 * This file is part of the Telosys package.
 *
 * Coded by MAILLET Hugues
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Telosys\Domain\Service;

use AppBundle\Repository\BusLineRepository;
use Psr\Log\LoggerInterface;
use Psr\Log\NullLogger;
use AppBundle\Repository\RennesMetropoleOpenDataRepository;
use AppBundle\Repository\BusLineStopsCoordinatesRepository;

/**
 * Class BusLineService.
 */ 
class BusLineService
{
    /**
     * @var \AppBundle\Repository\BusLineRepository
     */
    protected $repository;
    
    /**
     * @var LoggerInterface
     */
    protected $logger;
    
    /**
     * @var \AppBundle\Repository\RennesMetropoleOpenDataRepository
     */
    protected $rennesMetropoleOpenDataRepository;
    
    /**
     * @var \AppBundle\Repository\BusLineStopsCoordinatesRepository
     */
    protected $busLineStopsCoordinatesRepository;

    /**
     *
     * @param BusLineRepository $busLineRepository
     * @param LoggerInterface $logger
     * @param RennesMetropoleOpenDataRepository $rennesMetropoleOpenDataRepository
     * @param BusLineStopsCoordinatesRepository $busLineStopsCoordinatesRepository
     *
     */
    public function __construct(
        BusLineRepository $busLineRepository,
        LoggerInterface $logger = null,
        RennesMetropoleOpenDataRepository $rennesMetropoleOpenDataRepository,
        BusLineStopsCoordinatesRepository $busLineStopsCoordinatesRepository
    ) {
        $this->busLineRepository = $busLineRepository;
        $this->logger = $logger ?: new NullLogger();
        $this->rennesMetropoleOpenDataRepository = $rennesMetropoleOpenDataRepository;
        $this->busLineStopsCoordinatesRepository = $busLineStopsCoordinatesRepository;
    }   
    
    /**
     *
     * @return array
     */
    public function getBusLineList()
    {
        $busLines = $this->busLineRepository->findAll();
        $this->hydrateBusLines($busLines);
        
        return $busLines;
    }
    
    /**
     *
     * @return array
     *
     */
    public function pullBuslineData()
    {
        return json_decode($this->rennesMetropoleOpenDataRepository->findAll()->getContents());
    }
    
    /**
     *
     * @return array
     */
    public function findByShortName($name)
    {
        return $this->busLineRepository->findByShortName($name);
    }
    
    /**
     *
     * @return array
     */
    public function findByShortNameAndCommercialSense($name, $sense)
    {
        return $this->busLineRepository->findByShortNameAndCommercialSense($name, $sense);
    }
    
    /**
     *
     * @return array
     */
    protected function hydrateBusLines($buslines)
    {
        foreach($buslines as $busline) {
            // populate with coordinates
            $coordinates = $this->busLineStopsCoordinatesRepository->findOneBy(array('code' => $busline->getCode()));
            if ($coordinates) {
                $busline->setCoordinates(
                    [
                        "geometry"      => $coordinates->getGeometry(),
                        "course"        => $coordinates->getCourse(),
                        "getGeoPoint2d" => $coordinates->getGeoPoint2d(),
                    ]
                );
            }
        }
    }
}
