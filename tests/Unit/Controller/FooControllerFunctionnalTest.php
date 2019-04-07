<?php

namespace Cmd\BlankBundle\Tests\Unit\Controller;


use Cmd\BlankBundle\Controller\FooController;
use Cmd\BlankBundle\Tests\WebTestCase;
use Symfony\Component\HttpFoundation\Response;

class FooControllerFunctionnalTest extends WebTestCase
{
    private $client = null;

    private $dic = null;

    public function setUp(): void
    {
        $this->client = static::createClient();
        $this->dic = $this->client->getContainer();
    }

    public function tearDown(): void
    {
        $this->client = null;
        $this->dic = null;
    }

    public function testBarAction()
    {
        $this->client->request('GET', '/');

        $this->assertTrue($this->client->getResponse()->isSuccessful());
    }

}
