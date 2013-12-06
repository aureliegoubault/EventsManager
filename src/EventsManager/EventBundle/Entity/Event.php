<?php

namespace EventsManager\EventBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
* @ORM\Entity
* @ORM\Entity(repositoryClass="EventsManager\EventBundle\Entity\EventRepository")
* @ORM\Table(name="eventsManager_evenements")
*/
class Event {
    
	/**
	* @ORM\Column(name="id", type="integer")
	* @ORM\Id
	* @ORM\GeneratedValue(strategy="AUTO")
	*/
	private $id;
	
	/**
	* @ORM\Column(name="type", type="string", length=255)
	*/
	private $type;
        
        /**
	* @ORM\Column(name="titre", type="string", length=255)
	*/
	private $titre;
	
	// CONSTRUCTEUR
	public function __construct() {
		$this->titre = "";
	}
    
	// GETTER
	public function getId() {
		return $this->id;
	}
	public function getType() {
		return $this->type;
	}
	public function getTitre() {
		return $this->titre;
	}
	
	// SETTER
	public function setType($type) {
		$this->type = $type;
	}
	public function setTitre($titre){
		$this->titre = $titre;
	}

}

?>
