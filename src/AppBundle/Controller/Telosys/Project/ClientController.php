<?php

namespace AppBundle\Controller\Telosys\Project;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\JsonResponse;
use FOS\RestBundle\Controller\Annotations as Rest;
use \Symfony\Component\HttpFoundation\Request;
use AppBundle\Entity\Client;
use AppBundle\Form\CreateClientType;

class ClientController extends Controller
{
    /**
     *
     * @Rest\Get("/projects/clients")
     * @Rest\View(serializerGroups={"client"}, statusCode=Response::HTTP_OK)
     * 
     */
    public function getProjectsClientsAction()
    {
        return $this->get('client_service')->getClientList();
    }
    
    /**
     * @Rest\Post("/projects/clients")
     * @Rest\View(serializerGroups={"client"}, statusCode=Response::HTTP_OK)
     *
     */
    public function postProjectsClientsAction(Request $request)
    {
        $client     = new Client();
        $clientForm = $this->createForm(CreateClientType::class, $client);
        $clientForm->handleRequest($request);
        
        /* @var $clientForm \Symfony\Component\Form\Form */
        $clientForm->submit($request->request->all());

        if (!$clientForm->isValid() && $clientForm->isSubmitted()) {
            return $clientForm;
        }
        
        $response = $this->get('client_service')->createClient($client);
        
        return $response;
    }
    
    /**
     * @Rest\Delete("/projects/clients/{id}")
     * @Rest\View(serializerGroups={"client"}, statusCode=Response::HTTP_OK)
     *
     */
    public function deleteProjectsClientsAction($id)
    {
        $this->get('client_service')->deleteById($id);
    }
    
    /**
     * @Rest\Put("/projects/clients/{id}")
     * @Rest\View(serializerGroups={"client"}, statusCode=Response::HTTP_OK)
     *
     */
    public function putProjectsClientsAction($id, Request $request)
    {
        $client     = new Client();
        $client->setId($id);
        
        $clientForm = $this->createForm(CreateClientType::class, $client);
        $clientForm->handleRequest($request);
        
        /* @var $clientForm \Symfony\Component\Form\Form */
        $clientForm->submit($request->request->all());

        if (!$clientForm->isValid() && $clientForm->isSubmitted()) {
            return $clientForm;
        }
        
        return $this->get('client_service')->updateClient($client, $request);
    }
}
