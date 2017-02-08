<?php

namespace Telosys\Domain\Service;

use Psr\Log\LoggerInterface;
use Psr\Log\NullLogger;
use AppBundle\Repository\ClientRepository;

class ClientService
{
    /**
     * @var \AppBundle\Repository\ClientRepository
     */
    protected $repository;
    
    /**
     * @var LoggerInterface
     */
    protected $logger;

    /**
     *
     * @param ClientRepository $clientRepository
     * @param LoggerInterface $logger
     *
     */
    public function __construct(
        ClientRepository $clientRepository,
        LoggerInterface $logger = null
    ) {
        $this->clientRepository = $clientRepository;
        $this->logger = $logger ?: new NullLogger();
    }   
    
    /**
     *
     * @return array
     */
    public function getClientList()
    {
        return $this->clientRepository->findAll();        
    }
    
    /**
     *
     * @param Client $client
     * @return Client
     */
    public function createClient(\AppBundle\Entity\Client $client)
    {
        $this->fillUpClient($client);
        $this->clientRepository->save($client);
        return $client;
    }
    
    /**
     *
     * @param Client $client
     */
    protected function fillUpClient($client)
    {
        // this is a stub
        
        $client->setInitiationDate(new \DateTime())
            ->setTerminal(mt_rand(1, 10))
            ->setSession(uniqid())
            ->setAgent(mt_rand(1, 20))
            ->setCard(uniqid())
            ->setCarrierContractNumber(uniqid())
            ->setTransactionId(md5(uniqid()));
            
        return $client;
    }
    
    /**
     *
     * @param $id
     * 
     */
    public function deleteById($id)
    {
        $this->clientRepository->deleteById($id);
    }
    
    /**
     *
     * @param Client $client
     * @return Client
     */
    public function updateClient(\AppBundle\Entity\Client $client, $request)
    {  
        // complete non mandatory properties
        $client->setInitiationDate(new \DateTime($request->get('initiationDate')));
        $client->setTerminal($request->get('terminal'));
        $client->setSession($request->get('session'));
        $client->setAgent($request->get('agent'));
        $client->setCard($request->get('card'));
        $client->setCarrierContractNumber($request->get('carrierContractNumber'));
        $client->setTransactionId($request->get('transactionId'));
        
        $this->clientRepository->update($client);
        return $client;
    }
}    