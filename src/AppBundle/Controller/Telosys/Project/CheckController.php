<?php

namespace AppBundle\Controller\Telosys\Project;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\JsonResponse;
use FOS\RestBundle\Controller\Annotations as Rest;
use \Symfony\Component\HttpFoundation\Request;

class CheckController extends Controller
{
    /**
     *
     * @Rest\Get("/projects/pings")
     * @Rest\View(statusCode=Response::HTTP_OK)
     */
    public function getProjectsPingsAction()
    {
        return [
            "message" => "pong"
        ];
    }
}
