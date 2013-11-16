<?php

namespace MyConventions\ListBundle\Entity;

class Convention {
    
	// ATTRIBUTS
	private $name;
	private $date;
	private $thumbnail;
	
	// CONSTRUCTEUR
	public function __construct() {
		$this->name = "";
		$this->date = new \DateTime;
		$this->thumbnail = "";
	}
    
	// GETTER
	public function getName() {
		return $this->name;
	}
	public function getDate() {
		return $this->date;
	}
	public function getThumbnail() {
		return $this->thumbnail;
	}
	
	// SETTER
	public function setName($name) {
		$this->name = $name;
	}
	public function setDate($date){
		$this->date = $date;
	}
	public function setThumbnail($thumbnail){
		$this->thumbnail = $thumbnail;
	}

}

?>
