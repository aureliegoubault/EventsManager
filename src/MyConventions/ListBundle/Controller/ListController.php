<?php

// On se place dans le bon namespace
namespace MyConventions\ListBundle\Controller;

// Chargement des classes
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use MyConventions\ListBundle\Entity\Convention;

class ListController extends Controller {
  	
	/***** Fonction pour le rendu de la page d'accueil ****/
	public function indexAction() {
		
		// On r�cup�re le service
		$fichier = $this->container->get('myconventions_list.fichier');
		
		// On r�cup�re la liste des conventions
		$conventions = $fichier->getAll('conventions.txt');
		
		return $this->render('MyConventionsListBundle:List:index.html.twig', array('conventions' => $conventions));
	}
	
	/***** Fonction pour le rendu du formulaire d'ajout *****/
	public function ajouterAction(){
		
		// On cre un objet Convention
		$convention = new Convention();
		
		// On cree le FormBuilder
		$formBuilder = $this->createFormBuilder($convention);
		
		// On ajoute les champs que l'on veut dans le formulaire
		$formBuilder->add('name', 'text');
		$formBuilder->add('date', 'date');
		$formBuilder->add('thumbnail', 'text');
		
		// On g�n�re le formulaire
		$form = $formBuilder->getForm();
		
		// On r�cup�re la requete
		$request = $this->get('request');
		
		if ($request->getMethod() == 'POST') {
			
			// L'objet Convention contient les donn�es du formulaire
			$form->bind($request);
			
			$fichier = $this->container->get('myconventions_list.fichier');
			$fichier->addConvention($convention, 'conventions.txt');
			
			return $this->redirect($this->generateUrl('MyConventions_accueil'));
			
		}
		
		return $this->render('MyConventionsListBundle:List:ajouter.html.twig', array('form' => $form->createView()));
		
	}
	
}

?>
