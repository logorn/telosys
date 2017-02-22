<?php

/*
 * This file is part of the Telosys package.
 *
 * Coded by MAILLET Hugues
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace AppBundle\Repository\ElasticSearch\Storages;

use AppBundle\Repository\ElasticSearch\ElasticSearchStorageBase;
use Telosys\Domain\Repository\ElasticSearch\ElasticSearchStorage;

/**
 * Class BusLineStorage.
 */
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