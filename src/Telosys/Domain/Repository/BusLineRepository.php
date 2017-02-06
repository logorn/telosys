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
}
