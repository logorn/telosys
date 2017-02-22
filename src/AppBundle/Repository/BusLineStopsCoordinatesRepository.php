<?php

/*
 * This file is part of the Telosys package.
 *
 * Coded by MAILLET Hugues
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace AppBundle\Repository;

use Telosys\Domain\Repository;
use Doctrine\ODM\MongoDB\DocumentRepository;

/**
 * Class BusLineStopsCoordinatesRepository.
 */
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