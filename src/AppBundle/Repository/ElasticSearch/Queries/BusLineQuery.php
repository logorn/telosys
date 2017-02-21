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
    
    /**
     *
     * @param string $content
     * @return string
     */       
	public function getBusLineByCode($code)
    {
        $params = [
            'index' => $this->getName(),
            'type'  => $this->getType(),
            'body' => [
                'query' => [
                    'filtered' => [
                        'match_all' => []
                    ]
                ],
                'filter' => [
                    'term' => [
                        'code' => $code
                    ]
                ]
            ]
        ];
        
        return $this->client->search($params);
    }
    
    /**
     *
     * @return string
     * 
     */ 
    public function getAll()
    {
        $params = [
            'index' => $this->getName(),
            'type'  => $this->getType(),
        ];
        
        return $this->client->search($params);
    }
    
    /**
     *
     * Sample using _all
     *
     * @param string $content
     * @return string
     */     
    public function getBusLineMatchAll($content)
    {
         $params = [
            'index' => $this->getName(),
            'type'  => $this->getType(),
            'body' => [
                'query' => [
                    'match' => [ 
                        '_all' => $content 
                    ]
                ],
            ],
        ];
        
        return $this->client->search($params);
    }
    
    /**
     *
     * Sample using query_string
     *
     * @param string $content
     * @return string
     * 
     */ 
    public function getBusLineQueryString($content)
    {
         $params = [
            'index' => $this->getName(),
            'type'  => $this->getType(),
            'body' => [
                'query' => [
                    'query_string' => [ 
                        'query' => $content 
                    ]
                ],
            ],
        ];
        
        return $this->client->search($params);
    }
}
