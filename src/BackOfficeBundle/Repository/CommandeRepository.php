<?php

namespace BackOfficeBundle\Repository;

/**
 * CommandeRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class CommandeRepository extends \Doctrine\ORM\EntityRepository
{
	public function findMaxId()
	{
		$dql = "SELECT MAX(c.id) FROM BackOfficeBundle:Commande as c";
		$query=$this->_em->createQuery($dql);
		return $query->getArrayResult();
	}
}
