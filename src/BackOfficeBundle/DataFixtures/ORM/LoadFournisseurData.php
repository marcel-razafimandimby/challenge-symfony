<?php
namespace BackOfficeBundle\DataFixtures\ORM;
 
use BackOfficeBundle\Entity\Fournisseur;
use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
 
class LoadFournisseurData 
       extends AbstractFixture 
       implements OrderedFixtureInterface
{
 
  /**
  * Load data fixtures with the passed EntityManager
  * @param ObjectManager $manager
  */
  public function load(ObjectManager $manager)
  {
    $fournisseur = new Fournisseur();
    $fournisseur->setNom("Algha Group");
    $fournisseur->setAdresse("1700 Firbourg Nice");
    $fournisseur->setTelephone("0263598741");
    $this->addReference('fournisseur', $fournisseur);
    $manager->persist($fournisseur);
 
    $fournisseur = new Fournisseur();
    $fournisseur->setNom("Agatha");
    $fournisseur->setAdresse("1888 Paris");
    $fournisseur->setTelephone("33458976");
    $manager->persist($fournisseur);
 
    $manager->flush();
  }
 
  /**
  * Get the order of this fixture
  * @return integer
  */
  public function getOrder()
  {
    return 2;
  }
 
}