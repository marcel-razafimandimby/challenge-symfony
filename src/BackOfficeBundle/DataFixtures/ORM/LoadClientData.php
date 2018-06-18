<?php
namespace BackOfficeBundle\DataFixtures\ORM;
 
use BackOfficeBundle\Entity\Client;
use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
 
class LoadClientData 
       extends AbstractFixture 
       implements OrderedFixtureInterface
{
 
  /**
  * Load data fixtures with the passed EntityManager
  * @param ObjectManager $manager
  */
  public function load(ObjectManager $manager)
  {
    $client = new Client();
    $client->setNom("Ratovo");
    $client->setPrenom("Paul");
    $client->setAdresse("Lot IIA 223 Tanjombato");
    $client->setEmail("ratovo@gmail.com");
    $client->setTelephone("+261320461352");
    //$this->addReference('clientId', $client);
    $manager->persist($client);
 
    $client = new Client();
    $client->setNom("Razanany");
    $client->setPrenom("Jean Pierre");
    $client->setAdresse("Lot IIA 223 Tanjombato Betafo");
    $client->setEmail("razanany@gmail.com");
    $client->setTelephone("+26132046134568");
    $manager->persist($client);
 
    $manager->flush();
  }
 
  /**
  * Get the order of this fixture
  * @return integer
  */
  public function getOrder()
  {
    return 1;
  }
 
}