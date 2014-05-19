<?php

namespace YOUR_NAMESPACE_HERE;

use Silex\WebTestCase;
use Symfony\Component\HttpKernel;


class TaprootTest extends WebTestCase {
	public function createApplication() {
		return createTestApplication();
	}
	
	public function setUp() {
		parent::setUp();
	}
	
	public function testHasHomepage() {
		$client = $this->createClient();
		$crawler = $client->request('GET', '/');
		$this->assertTrue($client->getResponse()->isOk());
		$this->assertCount(1, $crawler->filter('p:contains("Hello World!")'));
	}
}
