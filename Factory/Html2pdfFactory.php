<?php

namespace Ensepar\Html2pdfBundle\Factory;

use Spipu\Html2Pdf\Html2Pdf;

class Html2pdfFactory
{
    private $orientation;
    private $format;
    private $lang;
    private $unicode;
    private $encoding;
    private $margin;

    /**
     * @param int[] $margin
     */
    public function __construct(string $orientation, string $format, string $lang, bool $unicode, string $encoding, array $margin)
    {
        $this->orientation = $orientation;
        $this->format = $format;
        $this->lang = $lang;
        $this->unicode = $unicode;
        $this->margin = $margin;
        $this->encoding = $encoding;
    }

    /**
     * If not provided, the following arguments will be replaced by the default
     * value set in the constructor.
     */
    public function create(string $orientation = null, string $format = null, string $lang = null, bool $unicode = null, string $encoding = null, array $margin = null): Html2Pdf
    {
        return new Html2Pdf(
            $orientation ? $orientation : $this->orientation,
            $format ? $format : $this->format,
            $lang ? $lang : $this->lang,
            $unicode ? $unicode : $this->unicode,
            $encoding ? $encoding : $this->encoding,
            $margin ? $margin : $this->margin
        );
    }
}
