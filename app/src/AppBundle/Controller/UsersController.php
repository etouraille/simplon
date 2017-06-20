<?php

namespace AppBundle\Controller;


use AppBundle\Model\User;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;


use Sensio\Bundle\FrameworkExtraBundle\Configuration\ParamConverter;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

use FOS\RestBundle\View\View;

class UsersController extends Controller {

	/**
 	 * @ParamConverter("user", converter="fos_rest.request_body")
 	 * @Route("/api/users")
 	 */
	function postUsersAction( User $user ) {

		syslog(LOG_ERR, get_class($user->groups[0] ) );
		/*
		$view = View::create();
		$view->setData($user);
		$view->setFormat('json');
		*/
		return $user;
	}
}
