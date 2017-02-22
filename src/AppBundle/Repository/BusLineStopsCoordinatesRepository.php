<?php
namespace AppBundle\Repository;

use Telosys\Domain\Repository;
use Doctrine\ODM\MongoDB\DocumentRepository;

class BusLineStopsCoordinatesRepository extends DocumentRepository implements Repository\BusLineStopsCoordinatesRepository
{
    /**
     *
     * @return \Telosys\Domain\Document\BusLineStopsCoordinates[]
     * 
     */
    public function findAll()
    {
        return $this->createQueryBuilder("BusLineStopsCoordinates")
            ->hydrate(false)
            ->getQuery()
            ->execute();
    }
}