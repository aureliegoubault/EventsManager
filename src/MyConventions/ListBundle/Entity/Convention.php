<?php

namespace MyConventions\ListBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
* @ORM\Entity
* @ORM\Entity(repositoryClass="MyConventions\ListBundle\Entity\ConventionRepository")
* @ORM\Table(name="myconventions_convention")
*/
class Convention {
    
	/**
	* @ORM\Column(name="id", type="integer")
	* @ORM\Id
	* @ORM\GeneratedValue(strategy="AUTO")
	*/
	private $id;
	
	/**
	* @ORM\Column(name="name", type="string", length=255)
	*/
	private $name;
	
	/**
	* @ORM\Column(name="date", type="date")
	*/
	private $date;
	
	/**
	* @ORM\Column(name="thumbnail", type="string", length=255)
	*/
	private $thumbnail;
	
	/**
	* @ORM\Column(name="location", type="string", length=255)
	*/
	private $location;
	
	/**
	* @ORM\Column(name="enterprise", type="string", length=255)
	*/
	private $enterprise;
	
	/**
	* @ORM\Column(name="serie", type="string", length=255)
	*/
	private $serie;
	
	// CONSTRUCTEUR
	public function __construct() {
		$this->name = "";
		$this->date = new \DateTime;
		$this->thumbnail = "";
		$this->location = "";
		$this->enterprise = "";
		$this->serie = "";
	}
    
	// GETTER
	public function getId() {
		return $this->id;
	}
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
	public function getSerie() {
		return $this->serie;
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
	public function setSerie($serie){
		$this->serie = $serie;
	}

}

?>
