<?php

namespace MainBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use BackOfficeBundle\Entity\Client;
use BackOfficeBundle\Entity\Commande;
use BackOfficeBundle\Entity\LigneCommande;
use BackOfficeBundle\Entity\Produit;
use BackOfficeBundle\Form\ClientType;


class FicheController extends Controller
{
    /**
    * function ficheAction
    * @param Produit $produit
    */
    public function ficheAction(Produit $produit)
    {
        $em = $this->getDoctrine()->getManager();
        /** @var ArrayCollection|Produit[] $autresProduits */
        $autresProduits = $em->getRepository(Produit::class)->getOtherProduct($produit);

        return $this->render('@Main/Fiche/fiche.html.twig',array(
            'produit' => $produit,
            'autresProduits'=>$autresProduits
        ));
        
    }

    /**
    * function inscriptionAction
    * @param Produit $produit,Request $request
    * @return view inscription
    */
    public function inscriptionAction(Produit $produit, Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        /** @var ArrayCollection|Produit[] $autresProduits */
        $autresProduits = $em->getRepository(Produit::class)->getOtherProduct($produit);

        $client = new Client();
        $form = $this->createForm(ClientType::class, $client);

        return $this->render('@Main/Fiche/inscription.html.twig',array(
            'produit' => $produit,
            'autresProduits'=>$autresProduits,
            'qtt'=>$request->get('qttCmde'),
            'prixTtc'=>$request->get('prixTtc'),
            'form' => $form->createView(),
        ));
    }

    /**
    * function panierAction
    * @param Request $request
    * @return view panier
    */
    public function panierAction(Request $request)
    {
        $session = $this->get('session');
        $monPanier = $session->get('monPanier');

        $em = $this->getDoctrine()->getManager();
        /** @var ArrayCollection|Produit[] $produitPanier*/
        $produitPanier = $em->getRepository('BackOfficeBundle:Produit')->getProductPanier($monPanier);
        
        $client = new Client();
        $form = $this->createForm(ClientType::class, $client);

        return $this->render('@Main/Fiche/panier.html.twig',array(
            'produitPanier'=>$produitPanier,
            'form' => $form->createView(),
        ));
    }

    /**
    * function panierDelete
    * @param $id produit
    * @return redirectToRoute main_panierpage
    */
    public function panierDeleteAction($id)
    {
        $deletePanier = $this->get('main.panier')->deleteProduit($id);

        return $this->redirectToRoute('main_panierpage');
    }

    /**
    * function panierAdd
    * @param $id produit
    * @return redirectToRoute main_panierpage
    */
    public function panierAddAction($id, Request $request)
    {
        $addProduitPanier = $this->get('main.panier')->addProduit($id,$request);

        return $this->redirectToRoute('main_panierpage');
    }

    public function validerCommandeAction(Request $request){

        $em = $this->getDoctrine()->getManager();
        //1 - Insertion information Client
        $client = new Client();
        $form = $this->createForm(ClientType::class, $client);
        $form->handleRequest($request);
        if ($form->isSubmitted())
            $checkCommande = $this->get('main.commande')->saveCommande($client,$request);
        else
            $this->get('session')->getFlashBag()->add('error', $this->get('translator')->trans('commande.nonEnregistrer'));

        $produits = $em->getRepository('BackOfficeBundle:Produit')->findBy(array(),array("id"=>"DESC"));

        return $this->render('@Main/Fiche/valider-commande.html.twig',array(
            'produits' => $produits,
        ));

    }

    
}
