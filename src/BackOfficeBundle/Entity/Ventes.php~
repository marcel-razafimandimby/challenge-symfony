<?php

namespace BackOfficeBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Ventes
 *
 * @ORM\Table(name="ventes")
 * @ORM\Entity(repositoryClass="BackOfficeBundle\Repository\VentesRepository")
 */
class Ventes
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
     * @var string
     *
     * @ORM\Column(name="codeVente", type="string", length=255, nullable=true)
     */
    private $codeVente;

    /**
     * @var int
     *
     * @ORM\Column(name="qtt", type="integer", nullable=true)
     */
    private $qtt;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dateVente", type="datetime", nullable=true)
     */
    private $dateVente;

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
     * Set codeVente
     *
     * @param string $codeVente
     *
     * @return Ventes
     */
    public function setCodeVente($codeVente)
    {
        $this->codeVente = $codeVente;

        return $this;
    }

    /**
     * Get codeVente
     *
     * @return string
     */
    public function getCodeVente()
    {
        return $this->codeVente;
    }

    /**
     * Set qtt
     *
     * @param integer $qtt
     *
     * @return Ventes
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
     * Set dateVente
     *
     * @param \DateTime $dateVente
     *
     * @return Ventes
     */
    public function setDateVente($dateVente)
    {
        $this->dateVente = $dateVente;

        return $this;
    }

    /**
     * Get dateVente
     *
     * @return \DateTime
     */
    public function getDateVente()
    {
        return $this->dateVente;
    }

    /**
     * Set produit
     *
     * @param \BackOfficeBundle\Entity\Produit $produit
     *
     * @return Ventes
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
