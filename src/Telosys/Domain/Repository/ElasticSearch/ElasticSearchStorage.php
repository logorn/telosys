<?php

/*
 * This file is part of the Telosys package.
 *
 * Coded by MAILLET Hugues
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Telosys\Domain\Repository\ElasticSearch;

use AppBundle\Repository\ElasticSearch\Storages\BusLineStorage;

/**
 * Class ElasticSearchStorage.
 */ 
interface ElasticSearchStorage
{
    public function save();

    /**
     *
     * @return string
     */	    
    public function getName();
    
    /**
     *
     * @return string
     */	    
    public function getType();
    
    /**
     *
     * @return integer
     */	
	public function getId();
    
    /**
     *
     * @param integer $id
     * @return BusLineStorage
     * 
     */	
	public function setId($id);
    
    /**
     *
     * @param array $bodyData
     * @return BusLineStorage
     */	
	public function setBody($bodyData);
    
    /**
     *
     * @return array
     */	
	public function getParams();
}