<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appProdUrlMatcher
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appProdUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    /**
     * Constructor.
     */
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function match($pathinfo)
    {
        $allow = array();
        $pathinfo = rawurldecode($pathinfo);

        if (0 === strpos($pathinfo, '/MyConventions')) {
            // MyConventions_accueil
            if (rtrim($pathinfo, '/') === '/MyConventions') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'MyConventions_accueil');
                }

                return array (  '_controller' => 'MyConventions\\ListBundle\\Controller\\ListController::indexAction',  '_route' => 'MyConventions_accueil',);
            }

            // MyConventions_ajouter
            if (rtrim($pathinfo, '/') === '/MyConventions/ajouter') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'MyConventions_ajouter');
                }

                return array (  '_controller' => 'MyConventions\\ListBundle\\Controller\\ListController::ajouterAction',  '_route' => 'MyConventions_ajouter',);
            }

        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
