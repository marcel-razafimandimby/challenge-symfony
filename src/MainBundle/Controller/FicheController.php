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
    public function ficheAction($id)
    {
        $em = $this->getDoctrine()->getManager();
        $produit = $em->getRepository(Produit::class)->find($id);

        $autresProduits = $em->getRepository(Produit::class)->getOtherProduct($id);

        return $this->render('@Main/Fiche/fiche.html.twig',array(
            'produit' => $produit,
            'autresProduits'=>$autresProduits
        ));
    }

    public function inscriptionAction($id,Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $produit = $em->getRepository(Produit::class)->find($id);

        $autresProduits = $em->getRepository(Produit::class)->getOtherProduct($id);

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
    public function panierAction(Request $request)
    {
        
        $requestSession = $this->container->get('request_stack')->getCurrentRequest();
        $session = $requestSession->getSession();
        $monPanier = $session->get('monPanier');
        
        $tabIdsQtt = array();
        $produitPanier = array();
        if(empty($monPanier))
            $monPanier = array();
        $id = $request->get('id');
        $qtt = $request->get('qtt');
        if(null==$qtt)
            $qtt=1;

        //supression produit dans un panier
        $delete = $request->get('delete');
        if(null!=$delete && $delete=1){
            $monPanierNew = array();
            if($monPanier){
                foreach ($monPanier as $keyP => $valueP) {
                    $explodeValueP = explode("#", $valueP);
                    if($explodeValueP[0]!=$id){
                        $monPanierNew[] = $valueP;
                    }
                }
                $monPanier = $monPanierNew;
                $session->set('monPanier', $monPanier);
            }
        }
        if(null!=$id && $delete!=1){
            if (!in_array($id."#".$qtt, $monPanier))
            {
                $monPanier[]= $id."#".$qtt;
                $session->set('monPanier', $monPanier);
            }
        }


        if($monPanier){
            $tabIds = array();
            
            foreach ($monPanier as $key => $value) {
                $explodeValue = explode("#", $value);
                $tabIds[] = $explodeValue[0];
                $tabIdsQtt[$explodeValue[0]] = $explodeValue[1];
            }
            $ids = implode(',', $tabIds);
            
            $em = $this->getDoctrine()->getManager();
            $produitPanier = $em->getRepository('BackOfficeBundle:Produit')->getProductPanier($ids);


        }

        $client = new Client();
        $form = $this->createForm('BackOfficeBundle\Form\ClientType', $client);

        return $this->render('@Main/Fiche/panier.html.twig',array(
            'produitPanier'=>$produitPanier,
            'tabIdsQtt'=>$tabIdsQtt,
            'form' => $form->createView(),
        ));
    }

    public function validerCommandeAction(Request $request){

        $em = $this->getDoctrine()->getManager();
        //1 - Insertion information Client
        $client = new Client();
        $form = $this->createForm('BackOfficeBundle\Form\ClientType', $client);
        $form->handleRequest($request);

        $tabId = $request->get('id');

        if ($form->isSubmitted() && $form->isValid()) {
            //tester si client existe déjà dans la base
            $email = $client->getEmail();
            $clientDeja = $em->getRepository('BackOfficeBundle:Client')->findBy(array("email"=>$email));
            if($clientDeja)
                $client =  $clientDeja[0];
            //1 - insertion client
            $em = $this->getDoctrine()->getManager();
            $em->persist($client);
            $em->flush();
            //2 - insertion commande
            $commande = new Commande();
            $numCmde = $this->numCommande();
            $dateCommande = new \DateTime(date("Y-m-d H:i:s"));
            $commande->setDateCommande($dateCommande);
            $commande->setEtat(0);
            $commande->setNumeroCmde($numCmde);
            $commande->setClient($client);
            $em->persist($commande);
            $em->flush();

            //3 - insertion produit
            
            if(null!= $tabId && is_array($tabId)){ //via page panier
                $tabQtt = $request->get('qtt');
                $tabPrixUnitaire = $request->get('prixUnitaire');
                foreach ($tabId as $key => $value) {
                    $ligneCommande = new LigneCommande();
                    $qtt = $tabQtt[$key];
                    if($qtt>0){
                        $prixUnitaire = $tabPrixUnitaire[$key];
                        $prixVente = $prixUnitaire*$qtt;
                        $idProduit = $value;
                        $produit = $em->getRepository('BackOfficeBundle:Produit')->find($idProduit);
                        $ligneCommande->setProduit($produit);
                        $ligneCommande->setCommande($commande);
                        $ligneCommande->setPrixVente($prixVente);
                        $ligneCommande->setQtt($qtt);
                        $em->persist($ligneCommande);
                        $em->flush();
                    }
                    
                }
            }else{ //via page fiche
                $ligneCommande = new LigneCommande();
                $qtt = $request->get('qttProduit');
                $prixVente = $request->get('prixTtc');
                $idProduit = $request->get('id');
                $produit = $em->getRepository('BackOfficeBundle:Produit')->find($idProduit);
                $ligneCommande->setProduit($produit);
                $ligneCommande->setCommande($commande);
                $ligneCommande->setPrixVente($prixVente);
                $ligneCommande->setQtt($qtt);
                $em->persist($ligneCommande);
                $em->flush();
            }
            
            //suppression session panier
            $requestSession = $this->container->get('request_stack')->getCurrentRequest();
            $session = $requestSession->getSession();
            $monPanier = $session->remove('monPanier');
            $this->get('session')->getFlashBag()->add('success', 'Votre commande est enregistrée');
            
        }else
            $this->get('session')->getFlashBag()->add('error', 'Votre commande n\'a pas pu être enregistrée');

        $produits = $em->getRepository('BackOfficeBundle:Produit')->findBy(array(),array("id"=>"DESC"));

        return $this->render('@Main/Fiche/valider-commande.html.twig',array(
            'produits' => $produits,
        ));

    }

    /*
    *  gestion numero de commande automatique
    */
    public function numCommande(){
        $em = $this->getDoctrine()->getManager();
        $commande = $em->getRepository('BackOfficeBundle:Commande')->findMaxId();
        $MaxId = $commande[0][1];
        $date = new \DateTime();
        $dateYear = $date->format('y');
        $seconds = $date->format('s');
        $day = $date->format('d');
        $month = $date->format('m');
        $nbFourZero = '0000';
        
        $monthLetters = array("1"=>"A","2"=>"B","3"=>"C","4"=>"D","5"=>"E","6"=>"F", "7"=>"G","8"=>"H","9"=>"I","10"=>"J","11"=>"K","12"=>"L");

        $monthLettre = "";
        foreach ($monthLetters as $key => $value) {
            if ($key == $month) {
                $monthLettre = $value; 
            }
        }
        $numero_commande = $dateYear.$monthLettre.$nbFourZero.$MaxId.$seconds;

        return $numero_commande;
    }
}
