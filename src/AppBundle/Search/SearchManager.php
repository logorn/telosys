<?php

namespace AppBundle\Search;

use Psr\Log\LoggerInterface;
use Psr\Log\NullLogger;

class SearchManager
{
    /**
     * @var LoggerInterface
     */
    protected $logger;

    /**
     *
     * @var Client
     */
    protected $client;
    
    /**
     *
     * @param object $client
     * @param LoggerInterface $logger
     */
    public function __construct($client, LoggerInterface $logger = null)
    {
        $this->client = $client;
        $this->logger = $logger ?: new NullLogger;
    }
    
    public function getClient()
    {
        return $this->client->getInstance();
    }
}