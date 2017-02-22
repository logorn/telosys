<?php

/*
 * This file is part of the Telosys package.
 *
 * Coded by MAILLET Hugues
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace AppBundle\Controller\Telosys\Project;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\JsonResponse;
use FOS\RestBundle\Controller\Annotations as Rest;
use \Symfony\Component\HttpFoundation\Request;

/**
 * Class BusLineController.
 */
class BusLineController extends Controller
{
    /**
     *
     * @Rest\Get("/projects/buslines")
     * @Rest\View(serializerGroups={"busline"}, statusCode=Response::HTTP_OK)
     *
     */
    public function getProjectsBusLinesAction()
    {
        return $this->get('busline_service')->getBusLineList();
    }
    
    /**
     *
     * @Rest\Get("/projects/buslines/{name}")
     * @Rest\View(serializerGroups={"busline"}, statusCode=Response::HTTP_OK)
     *
     */
    public function getProjectsBusLinesNameAction($name)
    {
        return $this->get('busline_service')->findByShortName($name);
    }
    
    /**
     *
     * @Rest\Get("/projects/buslines/{name}/sense/{sense}")
     * @Rest\View(serializerGroups={"busline"}, statusCode=Response::HTTP_OK)
     *
     */
    public function getProjectsBusLinesNameCommercialSenseAction($name, $sense)
    {
        return $this->get('busline_service')->findByShortNameAndCommercialSense($name, $sense);
    }
}
