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
 * Class BusLineRepository.
 */ 
interface BusLineRepository
{
    /**
     *
     * @return \Telosys\Domain\Entity\BusLine[]
     * 
     */
    public function findAll();
    
    /**
     *
     * @param \Telosys\Domain\Entity\BusLine $busLine
     *
     * @return \Telosys\Domain\Entity\BusLine
     */
    public function save(\Telosys\Domain\Entity\BusLine $busLine);
    
    /**
     *
     * @param string $name
     *
     * @return \Telosys\Domain\Entity\BusLine
     */       
    public function findByShortName($name);
    
    /**
     *
     * @param string $name
     *
     * @param string $sense
     *
     * @return \Telosys\Domain\Entity\BusLine
     */  
    public function findByShortNameAndCommercialSense($name, $sense);
}
