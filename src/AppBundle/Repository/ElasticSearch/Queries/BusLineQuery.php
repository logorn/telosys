<?php

namespace AppBundle\Repository\ElasticSearch\Queries;

use AppBundle\Repository\ElasticSearch\ElasticSearchQueryBase;
use Telosys\Domain\Repository\ElasticSearch\ElasticSearchQuery;

class BusLineQuery extends ElasticSearchQueryBase implements ElasticSearchQuery
{
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
    
	public function getBusLineByCode($code)
    {
        $params = [
            'index' => $this->getName(),
            'type'  => $this->getType(),
            'body'  => [
                'query' => [
                    'match' => [
                        'code' => $code
                    ]
                ]
            ]
        ];
        
        return $this->client->search($params);
    }
}
