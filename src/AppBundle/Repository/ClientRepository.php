<?php

namespace AppBundle\Repository;

use Telosys\Domain\Repository;
use Doctrine\ORM\EntityRepository;

class ClientRepository extends EntityRepository implements Repository\ClientRepository
{
    /**
     *
     * @return \Telosys\Domain\Entity\Client[]
     * 
     */    
    public function findAll()
    {
        $builder = $this->createQueryBuilder('c');
        $builder->select('c');
        $query = $builder->getQuery();

        return $query->getResult();
    }
    
    /**
     *
     * @param \Telosys\Domain\Entity\Client $client
     *
     * @return \Telosys\Domain\Entity\Client
     */
    public function save(\Telosys\Domain\Entity\Client $client)
    {
        $this->_em->persist($client);
        $this->_em->flush();
        return $client;
    }
    
    /**
     * 
     * @param integer $id
     * 
     */
    public function deleteById($id)
    {
        $query = $this->_em->createQueryBuilder()
            ->delete('AppBundle:Client', 'c')
            ->where('c.id = :id')
            ->setParameter('id', $id);

        return $query->getQuery()->getResult();
    }
    
    /**
     *
     * @param \Telosys\Domain\Entity\BusLine $client
     *
     * @return \Telosys\Domain\Entity\Client
     */
    public function update(\Telosys\Domain\Entity\Client $client)
    {
        $this->_em->merge($client);
        $this->_em->flush();
        return $client;
    }
}
