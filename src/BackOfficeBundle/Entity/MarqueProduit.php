<?php

namespace BackOfficeBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * MarqueProduit
 *
 * @ORM\Table(name="marque_produit")
 * @ORM\Entity(repositoryClass="BackOfficeBundle\Repository\MarqueProduitRepository")
 */
class MarqueProduit
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
     * @ORM\Column(name="marque", type="string", length=255)
     */
    private $marque;

    /**
    * @ORM\ManyToOne(targetEntity="BackOfficeBundle\Entity\Fournisseur")
    * @ORM\JoinColumn(name="id_fournisseur")
    */
    private $fournisseur;


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
     * Set marque
     *
     * @param string $marque
     *
     * @return MarqueProduit
     */
    public function setMarque($marque)
    {
        $this->marque = $marque;

        return $this;
    }

    /**
     * Get marque
     *
     * @return string
     */
    public function getMarque()
    {
        return $this->marque;
    }

    /**
     * Set fournisseur
     *
     * @param \BackOfficeBundle\Entity\Fournisseur $fournisseur
     *
     * @return MarqueProduit
     */
    public function setFournisseur(\BackOfficeBundle\Entity\Fournisseur $fournisseur = null)
    {
        $this->fournisseur = $fournisseur;

        return $this;
    }

    /**
     * Get fournisseur
     *
     * @return \BackOfficeBundle\Entity\Fournisseur
     */
    public function getFournisseur()
    {
        return $this->fournisseur;
    }

    public function __toString(){
        return $this->marque."(".$this->fournisseur.")";
    }
}
