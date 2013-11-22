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
		
		// On recupere le service Doctrine
		$doctrine = $this->getDoctrine();
		
		// On recupere le service EntityManager
		$em = $doctrine->getManager();
		
		// On recupere le repository
		$repository = $em->getRepository("MyConventions\ListBundle\Entity\Convention");
		
		// On recupere l'entite correspondant a l'id
		$conventions = $repository->findAll();
		
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
		$formBuilder->add('location', 'text');
		$formBuilder->add('enterprise', 'text');
		$formBuilder->add('serie', 'text');
		
		// On gŽnre le formulaire
		$form = $formBuilder->getForm();
		
		// On rŽcupre la requete
		$request = $this->get('request');
		
		if ($request->getMethod() == 'POST') {
			
			// L'objet Convention contient les donnŽes du formulaire
			$form->bind($request);
			
			// On recupere l'EntityManager
			$em = $this->getDoctrine()->getManager();
			
			// On persiste l'entite
			$em->persist($convention);
			
			// On flush tous les elements persistes
			$em->flush();
			
			return $this->redirect($this->generateUrl('MyConventions_accueil'));
			
		}
		
		return $this->render('MyConventionsListBundle:List:ajouter.html.twig', array('form' => $form->createView()));
		
	}
	
	
	/***** Fonction pour le rendu d'une convention *****/
	public function consulterAction($id){
		
		// On recupere le service Doctrine
		$doctrine = $this->getDoctrine();
		
		// On recupere le service EntityManager
		$em = $doctrine->getManager();
		
		// On recupere le repository
		$repository = $em->getRepository("MyConventions\ListBundle\Entity\Convention");
		
		// On recupere l'entite correspondant a l'id
		$convention = $repository->find($id);
	
		return $this->render('MyConventionsListBundle:List:consulter.html.twig', array('convention' => $convention));
	
	}
	
	/***** Fonction pour editer une convention *****/
	public function editerAction($id){
	
		return new Response("<p>in progress</p>");
	
	}
	
	/***** Fonction pour supprimer une convention *****/
	public function supprimerAction($id){
	
		// On recupere l'EntityManager
		$em = $this->getDoctrine()->getManager();
		
		// On recupere le repository
		$repository = $em->getRepository("MyConventions\ListBundle\Entity\Convention");
		
		// On recupere l'entite correspondant a l'id
		$convention = $repository->find($id);
		
		// On supprime l'entite
		$em->remove($convention);
		$em->flush();
	
		// Redirection vers la page d'accueil
		return $this->redirect($this->generateUrl('MyConventions_accueil'));
	
	}
	
	
}

?>
