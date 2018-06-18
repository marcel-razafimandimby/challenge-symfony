<?php
namespace BackOfficeBundle\DataFixtures\ORM;
 
use BackOfficeBundle\Entity\Produit;
use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
 
class LoadProduitData 
       extends AbstractFixture 
       implements OrderedFixtureInterface
{
 
  /**
  * Load data fixtures with the passed EntityManager
  * @param ObjectManager $manager
  */
  public function load(ObjectManager $manager)
  {
    $produit = new Produit();
    $produit->setTitre("KISS Ecaille clair Cristal");
    $produit->setDescription("Cette monture écaille poudrée illuminera votre visage. La touche de rouge en bout de manchon la rend originale et discrète à la fois.");
    $produit->setQtt("50");
    $produit->setPrixTtc("700");
    $produit->setType("Vue");
    $produit->setGenre("Homme");
    $marqueProduit = $this->getReference('marqueProduit');
    $produit->setMarque($marqueProduit);
    
    $manager->persist($produit);
 
    $produit = new Produit();
    $produit->setTitre("KADOR OCCHIALERIA");
    $produit->setDescription("KADOR : fabrication de lunettes de vue et de soleil en acétate, lunettes pliables, lunettes de maquillage, lunettes professionnelles pour dentistes et chirurgiens, monocles et autres produits.");
    $produit->setQtt("70");
    $produit->setPrixTtc("300");
    $produit->setType("Soleil");
    $produit->setGenre("Femme");
    $marqueProduit = $this->getReference('marqueProduit');
    $produit->setMarque($marqueProduit);
    
    $manager->persist($produit);
 
    $manager->flush();
  }
 
  /**
  * Get the order of this fixture
  * @return integer
  */
  public function getOrder()
  {
    return 4;
  }
 
}