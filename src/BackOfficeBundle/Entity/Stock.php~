<?php

namespace BackOfficeBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Stock
 *
 * @ORM\Table(name="stock")
 * @ORM\Entity(repositoryClass="BackOfficeBundle\Repository\StockRepository")
 */
class Stock
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var int
     *
     * @ORM\Column(name="qtt", type="integer", nullable=true)
     */
    private $qtt;

     /**
    * @ORM\OneToOne(targetEntity="BackOfficeBundle\Entity\Produit")
    * @ORM\JoinColumn(name="id_produit")
    */
    private $produit;


    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set qtt
     *
     * @param integer $qtt
     *
     * @return Stock
     */
    public function setQtt($qtt)
    {
        $this->qtt = $qtt;

        return $this;
    }

    /**
     * Get qtt
     *
     * @return int
     */
    public function getQtt()
    {
        return $this->qtt;
    }

    /**
     * Set produit
     *
     * @param \BackOfficeBundle\Entity\Produit $produit
     *
     * @return Stock
     */
    public function setProduit(\BackOfficeBundle\Entity\Produit $produit = null)
    {
        $this->produit = $produit;

        return $this;
    }

    /**
     * Get produit
     *
     * @return \BackOfficeBundle\Entity\Produit
     */
    public function getProduit()
    {
        return $this->produit;
    }
}
