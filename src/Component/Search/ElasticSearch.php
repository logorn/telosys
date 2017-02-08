<?php

namespace Component\Search;

use Elasticsearch\Client;
use Elasticsearch\ClientBuilder;
use Psr\Log\LoggerInterface;
use Psr\Log\NullLogger;

class ElasticSearch
{
    /**
     * @var array
     */    
    protected $configuration = [];
    
    /**
     * @var LoggerInterface
     */
    protected $logger;
    
    /**
    * @var Elasticsearch\Client
    */
    private static $client = null;    
    
    /**
     *
     * @param array $configuration application
     * @param LoggerInterface $logger
     *
     */
    public function __construct($configuration, LoggerInterface $logger = null)
    {
        $this->configuration = $configuration;
        $this->logger = $logger;
    }
    
    /**
     *
     * @return array
     *
     */    
    protected function getHosts()
    {
        $hosts = [];
        foreach($this->configuration['clients'] as $host)
        {
            $hosts[] = $host['scheme'] . "://" .  $host['host'] . ":" . $host['port'];
        }
        return $hosts;
    }
    
    /**
     *
     * @return Elasticsearch\Client
     *
     */
    public function getInstance()
    {
        if (is_null(self::$client)) {
            $defaultHandler = ClientBuilder::defaultHandler(
                ['max_handles' => $this->configuration['max_handles']]
            );
            
            self::$client = ClientBuilder::create()
                        ->setHosts($this->getHosts())
                        ->setRetries($this->configuration['retries'])
                        ->setHandler($defaultHandler)
                        ->setLogger($this->logger)
                        ->build();
        }
        return self::$client;
    }
    
    /**
     *
     * @return array
     *
     */
    public function getAllMapping()
    {
        return $this->getInstance()->indices()->getMapping();
    }    
}