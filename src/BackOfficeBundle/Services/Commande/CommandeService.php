<?php
//src/BackOfficeBundle/Services/Commande

namespace BackOfficeBundle\Services\Commande;

use Doctrine\ORM\EntityManager;
use BackOfficeBundle\Entity\LigneCommande;

/**
 * class CommandeService
 */
class CommandeService 
{
	/**
	* @param EntityManager $em
	*/
	public function __construct(EntityManager $em)
	{
		$this->em = $em;
	}

	/**
	* function getTotalCommande
	*/
	public function getTotalCommande()
	{
		$listCommande = $this->em->getRepository(LigneCommande::class)->findAll();
		$tabTotalCommande = array();
        $tabTotal = array();
        if($listCommande){
            foreach ($listCommande as $key => $value) {
                $tabTotalCommande[$value->getCommande()->getNumeroCmde()][] = $value->getPrixVente();
            }
            if($tabTotalCommande){
                foreach ($tabTotalCommande as $nuCommande => $valuePrice) {
                    $prixVente = 0;
                    foreach ($valuePrice as $keyPrice => $price) {
                        $prixVente = $prixVente + $price;
                    }
                    $tabTotal[$nuCommande] = $prixVente;
                }
            }
        }

        return $tabTotal;
	}
	
}