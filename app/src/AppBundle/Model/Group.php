<?php

namespace AppBundle\Model;

use JMS\Serializer\Annotation\Type;

class Group {
	
	/**
	* @Type("string")
	*/
	public $role;

	public $user;
	
}