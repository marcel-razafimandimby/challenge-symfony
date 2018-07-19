<?php
namespace BackOfficeBundle\DataFixtures\ORM;
 
use BackOfficeBundle\Entity\MarqueProduit;
use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
 
class LoadMarqueProduitData 
       extends AbstractFixture 
       implements OrderedFixtureInterface
{
 
  /**
  * Load data fixtures with the passed EntityManager
  * @param ObjectManager $manager
  */
  public function load(ObjectManager $manager)
  {
    $marqueProduit = new MarqueProduit();
    $marqueProduit->setMarque("Air titanium");
    $fournisseur = $this->getReference('fournisseur');
    $this->addReference('marqueProduit', $marqueProduit);
    $marqueProduit->setFournisseur($fournisseur);
    $manager->persist($marqueProduit);
 
    $marqueProduit = new MarqueProduit();
    $marqueProduit->setMarque("Acetanium");
    $fournisseur = $this->getReference('fournisseur');
    $marqueProduit->setFournisseur($fournisseur);
    $manager->persist($marqueProduit);
 
    $manager->flush();
  }
 
  /**
  * Get the order of this fixture
  * @return integer
  */
  public function getOrder()
  {
    return 3;
  }
 
}