<?php

//src/BackOfficeBundle/Services/Stock
namespace BackOfficeBundle\Services\Stock;

use Doctrine\ORM\EntityManager;
use BackOfficeBundle\Entity\Stock;
use BackOfficeBundle\Entity\Produit;

/**
 * class StockService
 */
class StockService
{
	
	function __construct(EntityManager $em)
	{
		$this->em = $em;
	}

	public function majStock($produit,$type="ajout")
	{
		$stock = $this->em->getRepository(Stock::class)->findBy(array("produit"=>$produit->getProduit()));
        if($stock){
            $qttStock = $stock[0]->getQtt();
            if ($type=='ajout') {
            	$nvQtt = $qttStock + $produit->getQtt();
            }else
            	$nvQtt = $qttStock - $produit->getQtt();
            
            $stock[0]->setQtt($nvQtt);
            $this->em->persist($stock[0]);
            $this->em->flush();
            return true;

        }

        return false;
	}

	public function initStock($stocks)
	{
		$produits = $this->em->getRepository(Produit::class)->findAll();
        if(!$stocks && $produits){ 
        	//Réinitialisation Stock
            foreach ($produits as $key => $value) {
                $stock = new Stock();
                $stock->setQtt($value->getQtt());
                $stock->setProduit($value);
                $this->em->persist($stock);
                $this->em->flush();

            }
           
            $stocks = $this->em->getRepository(Stock::class)->findAll();
        }

        return $stocks;
	}
}