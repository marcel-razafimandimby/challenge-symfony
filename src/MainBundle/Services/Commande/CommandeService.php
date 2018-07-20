<?php
//src/MainBundle/Services/Commande

namespace MainBundle\Services\Commande;

use Doctrine\ORM\EntityManager;
use BackOfficeBundle\Entity\Commande;
use BackOfficeBundle\Entity\LigneCommande;
use BackOfficeBundle\Entity\Produit;
use BackOfficeBundle\Entity\Client;
use Symfony\Component\HttpFoundation\Session\Session;
use Symfony\Component\Translation\DataCollectorTranslator;

/**
 * class CommandeService
 */
class CommandeService
{
	
	function __construct(EntityManager $em,Session $session, DataCollectorTranslator $translator)
	{
		$this->em = $em;
		$this->session = $session;
		$this->translator = $translator;
	}

	/**
	* function saveCommande
	* @param $client,$request
	*/
	public function saveCommande($client,$request)
	{
		//tester si client existe déjà dans la base
        
        $email = $client->getEmail();
        $clientDeja = $this->em->getRepository(Client::class)->findBy(array("email"=>$email));
        if($clientDeja)
            $client =  $clientDeja[0];

        //1 - insertion client
        $this->em->persist($client);
        
        //2 - insertion commande
        $commande = new Commande();
        $numCmde = $this->numCommande();
        $dateCommande = new \DateTime(date("Y-m-d H:i:s"));
        $commande->setDateCommande($dateCommande);
        $commande->setEtat(0);
        $commande->setNumeroCmde($numCmde);
        $commande->setClient($client);
        $this->em->persist($commande);
        $this->em->flush();

        //3 - insertion produit
        $tabId = $request->get('id');
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
                    $produit = $this->em->getRepository(Produit::class)->find($idProduit);
                    $ligneCommande->setProduit($produit);
                    $ligneCommande->setCommande($commande);
                    $ligneCommande->setPrixVente($prixVente);
                    $ligneCommande->setQtt($qtt);
                    $this->em->persist($ligneCommande);
                    $this->em->flush();
                }
                
            }
        }else{ //via page fiche
            $ligneCommande = new LigneCommande();
            $qtt = $request->get('qttProduit');
            $prixVente = $request->get('prixTtc');
            $idProduit = $request->get('id');
            $produit = $this->em->getRepository(Produit::class)->find($idProduit);
            $ligneCommande->setProduit($produit);
            $ligneCommande->setCommande($commande);
            $ligneCommande->setPrixVente($prixVente);
            $ligneCommande->setQtt($qtt);
            $this->em->persist($ligneCommande);
            $this->em->flush();
        }
        
        //suppression session panier
        $monPanier = $this->session->remove('monPanier');

        return $this->session->getFlashBag()->add('success', $this->translator->trans('commande.enregistrer'));


	}

	/*
    *  gestion numero de commande automatique
    */
    public function numCommande(){
        
        $commande = $this->em->getRepository(Commande::class)->findMaxId();
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
