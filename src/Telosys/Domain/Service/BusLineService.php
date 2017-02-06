<?php

namespace Telosys\Domain\Service;

use AppBundle\Repository\BusLineRepository;
use Psr\Log\LoggerInterface;
use Psr\Log\NullLogger;
use AppBundle\Repository\RennesMetropoleOpenDataRepository;

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
     *
     * @param BusLineRepository $busLineRepository
     * @param LoggerInterface $logger
     * @param RennesMetropoleOpenDataRepository $rennesMetropoleOpenDataRepository
     *
     */
    public function __construct(
        BusLineRepository $busLineRepository,
        LoggerInterface $logger = null,
        RennesMetropoleOpenDataRepository $rennesMetropoleOpenDataRepository
    ) {
        $this->busLineRepository = $busLineRepository;
        $this->logger = $logger ?: new NullLogger();
        $this->rennesMetropoleOpenDataRepository = $rennesMetropoleOpenDataRepository;
    }   
    
    /**
     *
     * @return array
     */
    public function getBusLineList()
    {
        return $this->busLineRepository->findAll();
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
}
