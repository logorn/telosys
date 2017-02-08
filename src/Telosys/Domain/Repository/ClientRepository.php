<?php

namespace Telosys\Domain\Repository;

interface ClientRepository
{
    /**
     *
     * @return \Telosys\Domain\Entity\Client[]
     * 
     */
    public function findAll();
    
    /**
     *
     * @param \Telosys\Domain\Entity\BusLine $client
     *
     * @return \Telosys\Domain\Entity\Client
     */
    public function save(\Telosys\Domain\Entity\Client $client);
    
    /**
     *
     * @param integer $id
     * 
     */
    public function deleteById($id);
    
    /**
     *
     * @param \Telosys\Domain\Entity\BusLine $client
     *
     * @return \Telosys\Domain\Entity\Client
     */
    public function update(\Telosys\Domain\Entity\Client $client);
}
