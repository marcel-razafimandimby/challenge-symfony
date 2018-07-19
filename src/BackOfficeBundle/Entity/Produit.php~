<?php

namespace BackOfficeBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Produit
 *
 * @ORM\Table(name="produit")
 * @ORM\Entity(repositoryClass="BackOfficeBundle\Repository\ProduitRepository")
 */
class Produit
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
     * @ORM\Column(name="titre", type="string", length=255)
     */
    private $titre;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="text", nullable=true)
     */
    private $description;

    /**
     * @var int
     *
     * @ORM\Column(name="qtt", type="integer", nullable=true)
     */
    private $qtt;

    /**
     * @var float
     *
     * @ORM\Column(name="prixTtc", type="float", nullable=true)
     */
    private $prixTtc;

    /**
     * @var string
     *
     * @ORM\Column(name="type", type="string", length=255)
     */
    private $type;

    /**
     * @var string
     *
     * @ORM\Column(name="genre", type="string", length=255)
     */
    private $genre;

    /**
    * @ORM\ManyToOne(targetEntity="BackOfficeBundle\Entity\MarqueProduit")
    * @ORM\JoinColumn(name="id_marque")
    */
    private $marque;


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
     * Set titre
     *
     * @param string $titre
     *
     * @return Produit
     */
    public function setTitre($titre)
    {
        $this->titre = $titre;

        return $this;
    }

    /**
     * Get titre
     *
     * @return string
     */
    public function getTitre()
    {
        return $this->titre;
    }

    /**
     * Set description
     *
     * @param string $description
     *
     * @return Produit
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get description
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set qtt
     *
     * @param integer $qtt
     *
     * @return Produit
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
     * Set prixTtc
     *
     * @param float $prixTtc
     *
     * @return Produit
     */
    public function setPrixTtc($prixTtc)
    {
        $this->prixTtc = $prixTtc;

        return $this;
    }

    /**
     * Get prixTtc
     *
     * @return float
     */
    public function getPrixTtc()
    {
        return $this->prixTtc;
    }

    /**
     * Set type
     *
     * @param string $type
     *
     * @return Produit
     */
    public function setType($type)
    {
        $this->type = $type;

        return $this;
    }

    /**
     * Get type
     *
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Set genre
     *
     * @param string $genre
     *
     * @return Produit
     */
    public function setGenre($genre)
    {
        $this->genre = $genre;

        return $this;
    }

    /**
     * Get genre
     *
     * @return string
     */
    public function getGenre()
    {
        return $this->genre;
    }

    /**
     * Set marque
     *
     * @param \BackOfficeBundle\Entity\MarqueProduit $marque
     *
     * @return Produit
     */
    public function setMarque(\BackOfficeBundle\Entity\MarqueProduit $marque = null)
    {
        $this->marque = $marque;

        return $this;
    }

    /**
     * Get marque
     *
     * @return \BackOfficeBundle\Entity\MarqueProduit
     */
    public function getMarque()
    {
        return $this->marque;
    }

    public function __toString(){
        return $this->titre;
    }
}
