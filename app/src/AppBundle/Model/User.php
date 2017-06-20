<?php

namespace AppBundle\Model;

use JMS\Serializer\Annotation\Type;

class User {
	
	public $username;

	/**
	* @Type("string")
	*/
	public $firstname;
	
	/**
	* @Type("string")
	*/
	public $lastname;

	/**
	* @Type("ArrayCollection<AppBundle\Model\Group>")
	*/
	public $groups;

}