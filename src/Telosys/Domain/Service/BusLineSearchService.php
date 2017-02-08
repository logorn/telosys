<?php

namespace Telosys\Domain\Service;

use Psr\Log\LoggerInterface;
use Psr\Log\NullLogger;
use AppBundle\Repository\ElasticSearch\Storages\BusLineStorage;
use AppBundle\Repository\ElasticSearch\Indexes\BusLineIndex;
use AppBundle\Repository\ElasticSearch\Queries\BusLineQuery;
use \Telosys\Domain\Entity\BusLine;

class BusLineSearchService
{
    /**
     * @var AppBundle\Repository\ElasticSearch\Storages\BusLineStorage
     */
    protected $busLineStorage;
    
    /**
     * @var AppBundle\Repository\ElasticSearch\Indexes\BusLineIndex
     */
    protected $busLineIndex;
    
    /**
     * @var AppBundle\Repository\ElasticSearch\Queries\BusLineQuery
     */
    protected $busLineQuery;
    
    /**
     * @var LoggerInterface
     */
    protected $logger;
    
    /**
     *
     * @param BusLineStorage $busLineStorage
     * @param BusLineIndex $busLineIndex
     * @param BusLineQuery $busLineQuery
     * @param LoggerInterface $logger
     *
     */
    public function __construct(
        BusLineStorage $busLineStorage,
        BusLineIndex $busLineIndex,
        BusLineQuery $busLineQuery,
        LoggerInterface $logger = null
    ) {
        $this->busLineStorage = $busLineStorage;
        $this->busLineIndex = $busLineIndex;
        $this->busLineQuery = $busLineQuery;
        $this->logger = $logger ?: new NullLogger();
    }
    
    public function setupIndex()
    {
        $this->busLineIndex->execute();
    }
    
    /**
     *
     * @param \Telosys\Domain\Entity\BusLine $busLine
     *
     * @return \Telosys\Domain\Entity\BusLine
     */    
    public function saveDocument(BusLine $busLine)
    {
        $this->busLineStorage->setId($busLine->getId());
        $this->busLineStorage->setBody($busLine->toArray());
        $this->busLineStorage->save();
        
        return $busLine;
    }
    
    /**
     *
     * @param string $code
     *
     */     
    public function getBusLineByCode($code)
    {
        $response = $this->busLineQuery->getBusLineByCode($code);
        return $response;
        return $response['hits']['hits'];
    }
}
