<?php

namespace AppBundle\Repository\ElasticSearch;

use Elasticsearch\Common\Exceptions\Missing404Exception;

class ElasticSearchCommon
{
	/**
     *
     * @param Component\Search\ElasticSearch
     *
     */
    protected $client;
    
    /**
     *
     * @param $client
     *
     */
    public function __construct($client)
    {
        $this->client = $client->getClient();      
    }
}