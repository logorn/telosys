<?php

/*
 * This file is part of the Telosys package.
 *
 * Coded by MAILLET Hugues
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace AppBundle\Repository\ElasticSearch;

use Elasticsearch\Common\Exceptions\Missing404Exception;

/**
 * Class ElasticSearchCommon.
 */
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