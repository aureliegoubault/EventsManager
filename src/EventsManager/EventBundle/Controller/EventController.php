<?php

namespace EventsManager\EventBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class EventController extends Controller {
    
    public function indexAction() {
        
        // On recupere le service Doctrine
        $doctrine = $this->getDoctrine();
        
        // On recupere le service EntityManager
        $em = $doctrine->getManager();
        
        // On recupere le repository
        $repository = $em->getRepository("EventsManager\EventBundle\Entity\Event");
        
        // On recupere l'entite correspondant a l'id
        $events = $repository->findAll();
        
        return $this->render('EventsManagerEventBundle:Event:index.html.twig', array('events' => $events));
    
    }
    
}
