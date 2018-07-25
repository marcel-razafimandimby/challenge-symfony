<?php

namespace tests\BackOfficeBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;
use BackOfficeBundle\Controller\ClientController;
/**
 * class ClientControllerTest
 */
class ClientControllerTest extends WebTestCase
{
	
	/** @test */
	public function indexClient()
	{
		$client = static::createClient();

        $crawler = $client->request('GET', '/backoffice/login');

        $this->assertEquals(200, $client->getResponse()->getStatusCode(), "Unexpected HTTP status code for GET /backoffice/login");
	}
}

?>