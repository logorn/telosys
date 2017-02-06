<?php
namespace AppBundle\Repository;

use Telosys\Domain\Repository;
use Doctrine\ORM\EntityRepository;

class BusLineRepository extends EntityRepository implements Repository\BusLineRepository
{
    /**
     *
     * @return \Telosys\Domain\Entity\BusLine[]
     * 
     */    
    public function findAll()
    {
        $builder = $this->createQueryBuilder('b');
        $builder->select('b');
        $query = $builder->getQuery();

        return $query->getResult();
    }
    
    /**
     *
     * @param \Telosys\Domain\Entity\BusLine $busLine
     *
     * @return \Telosys\Domain\Entity\BusLine
     */
    public function save(\Telosys\Domain\Entity\BusLine $busLine)
    {
        $this->_em->persist($busLine);
        $this->_em->flush();
        return $busLine;
    }
}
