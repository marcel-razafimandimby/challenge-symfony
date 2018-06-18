<?php

namespace BackOfficeBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * EntreeProduit
 *
 * @ORM\Table(name="entree_produit")
 * @ORM\Entity(repositoryClass="BackOfficeBundle\Repository\EntreeProduitRepository")
 */
class EntreeProduit
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
     * @var float
     *
     * @ORM\Column(name="prixEntree", type="float", nullable=true)
     */
    private $prixEntree;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dateEntree", type="datetime", nullable=true)
     */
    private $dateEntree;

    /**
    * @ORM\ManyToOne(targetEntity="BackOfficeBundle\Entity\Produit")
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
     * @return EntreeProduit
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
     * Set prixEntree
     *
     * @param float $prixEntree
     *
     * @return EntreeProduit
     */
    public function setPrixEntree($prixEntree)
    {
        $this->prixEntree = $prixEntree;

        return $this;
    }

    /**
     * Get prixEntree
     *
     * @return float
     */
    public function getPrixEntree()
    {
        return $this->prixEntree;
    }

    /**
     * Set dateEntree
     *
     * @param \DateTime $dateEntree
     *
     * @return EntreeProduit
     */
    public function setDateEntree($dateEntree)
    {
        $this->dateEntree = $dateEntree;

        return $this;
    }

    /**
     * Get dateEntree
     *
     * @return \DateTime
     */
    public function getDateEntree()
    {
        return $this->dateEntree;
    }

    /**
     * Set produit
     *
     * @param \BackOfficeBundle\Entity\Produit $produit
     *
     * @return SortieProduit
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
