<?php

/*
 * This file is part of the Telosys package.
 *
 * Coded by MAILLET Hugues
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Component\ApiComponent;

use GuzzleHttp\Client;

/**
 * Class RennesMetropoleApiRequest.
 */            
class RennesMetropoleApiRequest
{
     /**
     * @var string
     */
    protected $apiEndPoint;
    
     /**
     * @var string
     */    
    protected $dataSet;
    
    /**
     * @var integer
     */ 
    protected $rows;
    
     /**
     * @var array
     */    
    protected $facet = [];
    
     /**
     * @var string
     */      
    protected $query;
    
    /**
     * @return HttpClient
     * 
     */
    protected $client;
    
    /**
     * @param string $apiEndPoint application endpoint
     */
    public function __construct($apiEndPoint)
    {
        $this->apiEndPoint = $apiEndPoint;
    }    
    
    /**
     *
     * @param string $dataSet
     * @return self
     *
     */
    public function setDataSet($dataSet)
    {
        $this->dataSet = $dataSet;
        return $this;
    }
    
    /**
     *
     * @return $dataSet
     *
     */
    public function getDataSet()
    {
        return $this->dataSet;
    }    
   
    /**
     *
     * @param string $rows
     * @return self
     *
     */    
    public function setRows($rows)
    {
        $this->rows = $rows;
        return $this;
    }
    
    /**
     *
     * @return $rows
     *
     */    
    public function getRows()
    {
        return $this->rows;
    }    
    
    /**
     *
     * @param string $facet
     * @return self
     *
     */      
    public function addFacet($facet)
    {
        $this->facet[] = $facet;
        return $this;
    }
 
    /**
     *
     * @return $query
     *
     */      
    public function buildQuery()
    {
        $query = "dataset=" . $this->getDataSet();
        
        foreach ($this->facet as $facet) {
            $query .= "&facet=" . $facet;
        }
        
        $query .= "&rows=" . $this->getRows();
        
        $this->query = $query;
        
        return $this->query;
    }
    
    /**
     *
     * Get client service
     *
     * @return HttpClient
     */
    protected function getClient()
    {
        $this->client = new Client();
        return $this->client;
    }
    
    /**
     *
     *
     * @return GuzzleHttp\Psr7\Stream
     */
    public function executeRequest()
    {
        $client = $this->getClient();
        $result = $client->request('GET', $this->apiEndPoint . $this->buildQuery());
        $result->getStatusCode();
        $result->getHeaderLine('content-type');
        $result->getBody();
        
        return $result->getBody();
    }
}
