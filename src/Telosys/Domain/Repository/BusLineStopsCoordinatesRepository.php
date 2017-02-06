<?php

namespace Telosys\Domain\Repository;

interface BusLineStopsCoordinatesRepository
{
    /**
     *
     * @return \Telosys\Domain\Document\BusLineStopsCoordinates[]
     * 
     */
    public function findAll();
}
