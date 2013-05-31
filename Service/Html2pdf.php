<?php
namespace Ensepar\Html2pdfBundle\Service;

class Html2pdf
{
    protected $html2pdf;

    public $mode;
    public $format;
    public $lang;
    public $unicode;
    public $margin;

    public function __construct($mode, $format, $lang,$unicode,$encoding,$margin)
    {
    	$this->mode = $mode;
    	$this->format = $format;
    	$this->lang = $lang;
    	$this->unicode = $unicode;
    	$this->margin = $margin;
    }

    public function init()
    {
    	$this->html2pdf = new \HTML2PDF($this->mode, $this->format, $this->lang, $this->unicode, $this->encoding, $this->margin);
    }

    public function get()
    {
        return $this->html2pdf;
    }
}

