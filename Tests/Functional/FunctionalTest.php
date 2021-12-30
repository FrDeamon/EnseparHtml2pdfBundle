<?php

namespace Ensepar\Html2pdfBundle\Tests\Functional;

use Ensepar\Html2pdfBundle\Factory\Html2pdfFactory;
use Symfony\Bundle\FrameworkBundle\Test\KernelTestCase;
use Ensepar\Html2pdfBundle\Tests\Fixtures\AppKernel;

class FunctionalTest extends KernelTestCase
{
    public static function getKernelClass(): string
    {
        return AppKernel::class;
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

        $content = '<html><body><p>foo</p></body></html>';

        $pdf1 = ($factory->create())->writeHTML($content);
        $pdf1File = $pdf1->output('my.pdf', 'S');

        $pdf2 = ($factory->create())->writeHTML($content);
        $pdf2File = $pdf2->output('my.pdf', 'S');

        // The two pdfs should have the same chars count.
        if (method_exists($this, 'assertStringContainsString')) {
            $this->assertStringContainsString("6434\n%%EOF", $pdf1File);
            $this->assertStringContainsString("6434\n%%EOF", $pdf2File);
        } else {
            $this->assertContains("6434\n%%EOF", $pdf1File);
            $this->assertContains("6434\n%%EOF", $pdf2File);
        }
    }
}
