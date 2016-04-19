<?php
namespace Test\Infrastructure\Web\WebBundle\Controller;
use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class WebTest extends WebTestCase
{
    public function testIndex()
    {
        $client = static::createClient();
        $crawler = $client->request('GET', '/');
        $this->assertContains('Kip', $client->getResponse()->getContent());
    }
}