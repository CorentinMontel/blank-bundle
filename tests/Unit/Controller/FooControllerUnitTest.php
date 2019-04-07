<?php

namespace Cmd\BlankBundle\Tests\Unit\Controller;


use Cmd\BlankBundle\Controller\FooController;
use PHPUnit\Framework\TestCase;
use Symfony\Component\HttpFoundation\Response;

class FooControllerUnitTest extends TestCase
{
    private $controller = null;

    protected function setUp(): void
    {
        $this->controller = new FooController();
    }

    protected function tearDown(): void
    {
        $this->controller = null;
    }

    public function testBarAction()
    {
        $this->assertInstanceOf(Response::class, $this->controller->foo());
    }
}
