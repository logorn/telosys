<?php

namespace AppBundle\Controller\Telosys\Project;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\JsonResponse;
use FOS\RestBundle\Controller\Annotations as Rest;
use \Symfony\Component\HttpFoundation\Request;

class BusLineSearchController extends Controller
{
    /**
     *
     * @Rest\Get("/projects/search/buslines/{code}")
     * @Rest\View(statusCode=Response::HTTP_OK)
     * 
     */
    public function getProjectsSearchBusLinesCodeAction($code)
    {
        return $this->get('busline_search_service')->getBusLineByCode($code);
    }
}
