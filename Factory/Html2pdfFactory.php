<?php

namespace Ensepar\Html2pdfBundle\Factory;

/**
 * Creates HTML2PDF instances.
 */
class Html2pdfFactory
{
    private $orientation;
    private $format;
    private $lang;
    private $unicode;
    private $encoding;
    private $margin;

    /**
     * @param string $orientation
     * @param string $format
     * @param string $lang
     * @param boolean $unicode
     * @param string $encoding
     * @param int[] $margin
     */
    public function __construct($orientation, $format, $lang, $unicode, $encoding, $margin)
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
     *
     * @param string $orientation
     * @param string $format
     * @param string $lang
     * @param boolean $unicode
     * @param string $encoding
     * @param int[] $margin
     */
    public function create($orientation = null, $format = null, $lang = null, $unicode = null, $encoding = null, $margin = null)
    {
        return new \HTML2PDF(
            $orientation ? $orientation : $this->orientation,
            $format ? $format : $this->format,
            $lang ? $lang : $this->lang,
            $unicode ? $unicode : $this->unicode,
            $encoding ? $encoding : $this->encoding,
            $margin ? $margin : $this->margin
        );
    }
}
