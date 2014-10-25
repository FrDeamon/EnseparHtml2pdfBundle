<?php

namespace Ensepar\Html2pdfBundle\Tests\Functional;

use Ensepar\Html2pdfBundle\Test\WebTestCase;

class FunctionalTest extends WebTestCase
{
    /**
     * We make sure multiple calls are OK.
     *
     * @see https://github.com/OwlyCode/EnseparHtml2pdfBundle/issues/12
     */
    public function testMultipleCalls()
    {
        $client = self::createClient();
        $factory = $client->getContainer()->get('html2pdf_factory');

        $pdf1 = $factory->create();
        $pdf1->writeHTML("<html><body><p>foo</p></body></html>");

        $pdf2 = $factory->create();
        $pdf2->writeHTML("<html><body><p>foo</p></body></html>");

        $this->assertSame($pdf1->Output('my.pdf', 'S'), $pdf2->Output('my.pdf', 'S'));
    }
}
