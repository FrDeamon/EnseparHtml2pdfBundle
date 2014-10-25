<?php

namespace Ensepar\Html2pdfBundle\Factory;

/**
 * Creates HTML2PDF instances.
 */
class Html2pdfFactory
{
    private $mode;
    private $format;
    private $lang;
    private $unicode;
    private $encoding;
    private $margin;

    /**
     * @param string $mode
     * @param string $format
     * @param string $lang
     * @param boolean $unicode
     * @param string $encoding
     * @param int[] $margin
     */
    public function __construct($mode, $format, $lang, $unicode, $encoding, $margin)
    {
        $this->mode = $mode;
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
     * @param string $mode
     * @param string $format
     * @param string $lang
     * @param boolean $unicode
     * @param string $encoding
     * @param int[] $margin
     */
    public function create($mode = null, $format = null, $lang = null, $unicode = null, $encoding = null, $margin = null)
    {
        return new \HTML2PDF(
            $mode ? $mode : $this->mode,
            $format ? $format : $this->format,
            $lang ? $lang : $this->lang,
            $unicode ? $unicode : $this->unicode,
            $encoding ? $encoding : $this->encoding,
            $margin ? $margin : $this->margin
        );
    }
}
