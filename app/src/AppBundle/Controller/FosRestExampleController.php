<?php

namespace AppBundle\Controller;

use FOS\RestBundle\Controller\FOSRestController;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class FosRestExampleController extends FOSRestController
{
    /**
     * @Route("/users-fos")
     */
    public function getUsersAction()
    {
        $data = ['username' => 'John Doe With Fos Rest'];
        $view = $this->view($data, 200)
            ->setTemplate('default/user.html.twig')
            //->setTemplateVar('user')
        ;

        return $this->handleView($view);
    }
    
}