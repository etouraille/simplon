<?php

namespace AppBundle\Controller;

use FOS\RestBundle\Controller\FOSRestController;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class FosRestExampleController extends FOSRestController
{
    /**
     * @Route("/users-fos.{format}")
     */
    public function getUsersAction( $format )
    {
        $data = ['user' => [ 'name' => 'John Doe With Fos Rest', 'cool' => ['awsome', 'nice' ]]];
        $view = $this->view($data, 200)
            ->setTemplate('default/user.html.twig')
            ->setFormat($format)
        ;

        return $this->handleView($view);
    }
    
}