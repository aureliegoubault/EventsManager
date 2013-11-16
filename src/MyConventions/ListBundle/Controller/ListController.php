<?php

// On se place dans le bon namespace
namespace MyConventions\ListBundle\Controller;

// Chargement des classes
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

class ListController extends Controller {
  	
	// Fonction pour le rendu de la page d'accueil
	public function indexAction() {
		
		// On rŽcupre le service
		$fichier = $this->container->get('myconventions_list.fichier');
		
		// On rŽcupre la liste des conventions
		$conventions = $fichier->getAll('conventions.txt');
		
		return $this->render('MyConventionsListBundle:List:index.html.twig', array('conventions' => $conventions));
	}
	
}
