<?php

/*
 * This file is part of the Telosys package.
 *
 * Coded by MAILLET Hugues
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Telosys\Domain\Repository\ElasticSearch\Queries;

use Telosys\Domain\Repository\ElasticSearch\ElasticSearchQuery;

/**
 * Class BusLineQuery.
 */        
interface BusLineQuery extends ElasticSearchQuery
{
    /**
     *
     * @param string $content
     * @return string
     */       
	public function getBusLineByCode($code);
    
    /**
     *
     * @return string
     * 
     */ 
    public function getAll();
    
    /**
     *
     * Sample using _all
     *
     * @param string $content
     * @return string
     */     
    public function getBusLineMatchAll($content);
    
    /**
     *
     * Sample using query_string
     *
     * @param string $content
     * @return string
     * 
     */ 
    public function getBusLineQueryString($content);
    
    /**
     *
     * Sample using Query DSL library for Elasticsearch 
     *
     * @param string $content
     * @return string
     * 
     */    
    public function getExtendQueryToolsQueryString($content);
}
