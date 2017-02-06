<?php

namespace AppBundle\Document;

use Doctrine\ODM\MongoDB\Mapping\Annotations as MongoDB;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * Class BusLineStopsCoordinates
 * @package AppBundle\Document
 * @MongoDB\Document(collection="bus_line_stops_coordinates", repositoryClass="AppBundle\Repository\BusLineStopsCoordinatesRepository")
 * 
 */
class BusLineStopsCoordinates extends \Telosys\Domain\Document\BusLineStopsCoordinates
{
     
}
