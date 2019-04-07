<?php

namespace Cmd\BlankBundle\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;

class FooController extends AbstractController
{
    public function foo()
    {
        return new Response('Hello');
    }
}
