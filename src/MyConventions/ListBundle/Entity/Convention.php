<?php

namespace MyConventions\ListBundle\Entity;

class Convention {
    
	// ATTRIBUTS
	private $name;
	private $date;
	private $thumbnail;
	private $location;
	private $enterprise;
	private $show;
	
	// CONSTRUCTEUR
	public function __construct() {
		$this->name = "";
		$this->date = new \DateTime;
		$this->thumbnail = "";
		$this->location = "";
		$this->enterprise = "";
		$this->show = "";
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
	public function getLocation() {
		return $this->location;
	}
	public function getEnterprise() {
		return $this->enterprise;
	}
	public function getShow() {
		return $this->show;
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
	public function setLocation($location){
		$this->location = $location;
	}
	public function setEnterprise($enterprise){
		$this->enterprise = $enterprise;
	}
	public function setShow($show){
		$this->show = $show;
	}

}

?>
