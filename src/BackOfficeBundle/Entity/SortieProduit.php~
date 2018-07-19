<?php

namespace BackOfficeBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * SortieProduit
 *
 * @ORM\Table(name="sortie_produit")
 * @ORM\Entity(repositoryClass="BackOfficeBundle\Repository\SortieProduitRepository")
 */
class SortieProduit
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
     * @ORM\Column(name="prixVente", type="float", nullable=true)
     */
    private $prixVente;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dateSortie", type="datetime", nullable=true)
     */
    private $dateSortie;

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
     * @return SortieProduit
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
     * Set prixVente
     *
     * @param float $prixVente
     *
     * @return SortieProduit
     */
    public function setPrixVente($prixVente)
    {
        $this->prixVente = $prixVente;

        return $this;
    }

    /**
     * Get prixVente
     *
     * @return float
     */
    public function getPrixVente()
    {
        return $this->prixVente;
    }

    /**
     * Set dateSortie
     *
     * @param \DateTime $dateSortie
     *
     * @return SortieProduit
     */
    public function setDateSortie($dateSortie)
    {
        $this->dateSortie = $dateSortie;

        return $this;
    }

    /**
     * Get dateSortie
     *
     * @return \DateTime
     */
    public function getDateSortie()
    {
        return $this->dateSortie;
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
