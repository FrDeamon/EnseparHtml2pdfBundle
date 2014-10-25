<?php

namespace Ensepar\Html2pdfBundle\Test;

use Ensepar\Html2pdfBundle\Tests\Fixtures\AppKernel;
use Symfony\Bundle\FrameworkBundle\Test\KernelTestCase;
use Symfony\Bundle\FrameworkBundle\Client;

abstract class WebTestCase extends KernelTestCase
{
    public static function createClient()
    {
        $app = new AppKernel('test', true);
        $app->boot();

        return new Client($app);
    }
}
