<?php

namespace MainBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class IndexController extends Controller
{
    public function indexAction()
    {
    	$em = $this->getDoctrine()->getManager();
    	$produits = $em->getRepository('BackOfficeBundle:Produit')->findBy(array(),array("id"=>"DESC"));

        return $this->render('@Main/Index/index.html.twig', array(
        	'produits' => $produits,
        ));
    }
}
