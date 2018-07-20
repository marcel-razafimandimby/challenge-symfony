<?php

namespace MainBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use BackOfficeBundle\Entity\Produit;

class IndexController extends Controller
{
    public function indexAction()
    {
    	$em = $this->getDoctrine()->getManager();
    	$produits = $em->getRepository(Produit::class)->findBy(array(),array("id"=>"DESC"));

        return $this->render('@Main/Index/index.html.twig', array(
        	'produits' => $produits,
        ));
    }
}
