<?php

namespace MyConventions\ListBundle\Entity;

class Convention {
    
	// ATTRIBUTS
	private $name;
	
	// CONSTRUCTEUR
	public function __construct() {
		$this->name = "";
	}
    
	// GETTER
	public function setName($name) {
		$this->name = $name;
	}
	
	// SETTER
	public function getName() {
		return $this->name;
	}

}

?>
