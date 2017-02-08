<?php

namespace AppBundle\Repository\ElasticSearch\Storages;

use AppBundle\Repository\ElasticSearch\ElasticSearchStorageBase;
use Telosys\Domain\Repository\ElasticSearch\ElasticSearchStorage;

class BusLineStorage extends ElasticSearchStorageBase implements ElasticSearchStorage
{
	/**
     * @var integer
     */
	protected $id;
	
	/**
     * @var array
     */
	protected $params = [];
	
	const NAME = "buslines";
	
	const TYPE = "busline";
	
    /**
     *
     * @return string
     */		
	public function getName()
	{
		return self::NAME;
	}
	
    /**
     *
     * @return string
     */		
	public function getType()
	{
		return self::TYPE;
	}
	
    /**
     *
     * @param integer $id
     * @return BusLineStorage
     * 
     */	
	public function setId($id)
	{
		$this->id = $id;
		return $this;
	}
	
    /**
     *
     * @return integer
     */	
	public function getId()
	{
		return $this->id;
	}
	
    /**
     *
     * @param array $bodyData
     * @return BusLineStorage
     */	
	public function setBody($bodyData)
	{
		$this->params['body'] = $bodyData;
		return $this;
	}
	
    /**
     *
     * @return array
     */	
	public function getParams()
	{		
		return $this->params;
	}
}