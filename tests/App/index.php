<?php

require __DIR__.'/../../vendor/autoload.php';

use Cmd\BlankBundle\Tests\App\Kernel;
use Symfony\Component\HttpFoundation\Request;

$kernel = new Kernel('dev', true);
$request = Request::createFromGlobals();
$response = $kernel->handle($request);
$response->send();
$kernel->terminate($request, $response);
