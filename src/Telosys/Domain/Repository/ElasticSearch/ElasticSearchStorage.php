<?php

namespace Telosys\Domain\Repository\ElasticSearch;

use AppBundle\Repository\ElasticSearch\Storages\BusLineStorage;

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