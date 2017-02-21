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
    
    /**
     *
     * @param string $name
     *
     * @return \Telosys\Domain\Entity\BusLine
     */       
    public function findByShortName($name)
    {
        $builder = $this->createQueryBuilder('b');

        $builder->select('b')
            ->where($builder->expr()->eq('b.shortName', ':shortName'))
            ->setParameter('shortName', $name);

        $query = $builder->getQuery();

        return $query->getResult();
    }
    
    /**
     *
     * @param string $name
     *
     * @param string $sense
     *
     * @return \Telosys\Domain\Entity\BusLine
     */       
    public function findByShortNameAndCommercialSense($name, $sense)
    {
        $builder = $this->createQueryBuilder('b');

        $builder->select('b')
            ->where($builder->expr()->eq('b.commercialSense', ':commercialSense'))
            ->andWhere($builder->expr()->eq('b.shortName', ':shortName'))
            ->setParameter('commercialSense', $sense)
            ->setParameter('shortName', $name);

        $query = $builder->getQuery();

        return $query->getResult();
    }
}
