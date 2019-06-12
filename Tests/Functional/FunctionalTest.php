<?php

namespace Ensepar\Html2pdfBundle\Tests\Functional;

use Symfony\Bundle\FrameworkBundle\Test\KernelTestCase;

class FunctionalTest extends KernelTestCase
{
    public static function getKernelClass()
    {
        return 'Ensepar\Html2pdfBundle\Tests\Fixtures\AppKernel';
    }

    /**
     * We make sure multiple calls are OK.
     *
     * @see https://github.com/OwlyCode/EnseparHtml2pdfBundle/issues/12
     */
    public function testMultipleCalls()
    {
        static::bootKernel();

        $factory = static::$kernel->getContainer()->get('html2pdf_factory');

        $pdf1 = $factory->create();
        $pdf1->writeHTML("<html><body><p>foo</p></body></html>");

        $pdf2 = $factory->create();
        $pdf2->writeHTML("<html><body><p>foo</p></body></html>");

        // The two pdfs should have the same chars count.
        $this->assertContains("6020\n%%EOF", $pdf1->output('my.pdf', 'S'));
        $this->assertContains("6020\n%%EOF", $pdf2->output('my.pdf', 'S'));
    }
}
