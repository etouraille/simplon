<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class TwigController extends Controller
{
    
	/**
	 * @Route("/users")
	 */
    public function getUsersAction()
    {
        $data = ['username' => 'John Doe'];
        
        return $this->render('default/user.html.twig', $data);
        
        
    }
}
