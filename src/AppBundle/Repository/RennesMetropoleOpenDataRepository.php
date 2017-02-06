<?php
namespace AppBundle\Repository;

use Telosys\Domain\Repository;
use Component\ApiComponent\RennesMetropoleApiRequest;

class RennesMetropoleOpenDataRepository implements Repository\RennesMetropoleOpenDataRepository
{
    /**
     * @var \Component\ApiComponent\RennesMetropoleApiRequest
     */
    protected $apiRequest;

    /**
     *
     * @param RennesMetropoleApiRequest $apiRequest
     *
     */
    public function __construct(RennesMetropoleApiRequest $apiRequest)
    {
        $this->apiRequest = $apiRequest;      
    }
    
    /**
     *
     * @return GuzzleHttp\Psr7\Stream
     * 
     */    
    public function findAll()
    {
        $buildApiRequest = $this->apiRequest;
        $buildApiRequest->setDataSet("parcours-des-lignes-de-bus-du-reseau-star");
        $buildApiRequest->setRows("10000");
        $buildApiRequest->addFacet("nomcourtligne");
        $buildApiRequest->addFacet("senscommercial");
        $buildApiRequest->addFacet("nomarretdepart");
        $buildApiRequest->addFacet("nomarretarrivee");
        $buildApiRequest->addFacet("estaccessiblepmr");
        $buildApiRequest->buildQuery();
        
        return $buildApiRequest->executeRequest();
    }
}