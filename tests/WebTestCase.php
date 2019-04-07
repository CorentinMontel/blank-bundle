<?php

namespace Cmd\BlankBundle\Tests;

use Cmd\BlankBundle\Tests\App\Kernel;
use Symfony\Bundle\FrameworkBundle\Test\WebTestCase as BaseWebTestCase;

abstract class WebTestCase extends BaseWebTestCase
{
    protected static function getKernelClass()
    {
        return Kernel::class;
    }
}
