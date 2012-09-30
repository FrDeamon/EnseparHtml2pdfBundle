<?php
namespace Ensepar\Html2pdfBundle\Service;

class Html2pdf
{
    protected $html2pdf;

    public function __construct($mode, $format, $lang)
    {
        $this->html2pdf = new \HTML2PDF($mode, $format, $lang);
    }

    public function get(){
        return $this->html2pdf;
    }

}

