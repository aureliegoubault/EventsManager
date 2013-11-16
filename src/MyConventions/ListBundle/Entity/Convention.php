<?php

namespace MyConventions\ListBundle\Entity;

class Convention {
    
	protected $name;
	
	public function __construct() {

		$this->name = "";

	}
    
	public function setName($name) {

		$this->name = $name;

	}
	
	public function getName() {

		return $this->name;

	}

}

?>
