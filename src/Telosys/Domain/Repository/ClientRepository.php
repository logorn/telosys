<?php

/*
 * This file is part of the Telosys package.
 *
 * Coded by MAILLET Hugues
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Telosys\Domain\Repository;

/**
 * Class ClientRepository.
 */ 
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
