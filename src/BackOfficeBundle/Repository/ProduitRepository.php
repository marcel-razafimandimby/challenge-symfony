<?php

namespace BackOfficeBundle\Repository;

/**
 * ProduitRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class ProduitRepository extends \Doctrine\ORM\EntityRepository
{
	public function getOtherProduct($id){
		$dql = "SELECT p
		FROM BackOfficeBundle:Produit p
		WHERE p.id!=:id";

		$query = $this->_em->createQuery($dql);
		$query->setParameter('id', $id);

		return $query->getResult();
	}
	public function getProductPanier($tabId){
		$dql = "SELECT p
		FROM BackOfficeBundle:Produit p
		WHERE p.id in (".$tabId.")";

		$query = $this->_em->createQuery($dql);
		return $query->getResult();
	}
}