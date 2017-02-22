<?php

/*
 * This file is part of the Telosys package.
 *
 * Coded by MAILLET Hugues
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace AppBundle\Search;

use Psr\Log\LoggerInterface;
use Psr\Log\NullLogger;

/**
 * Class SearchManager.
 */
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