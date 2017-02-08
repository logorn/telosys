<?php

namespace Telosys\Domain\Repository;

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
