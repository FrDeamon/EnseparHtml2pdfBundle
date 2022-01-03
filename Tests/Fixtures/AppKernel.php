<?php

namespace Ensepar\Html2pdfBundle\Tests\Fixtures;

use Ensepar\Html2pdfBundle\EnseparHtml2pdfBundle;
use Symfony\Bundle\FrameworkBundle\FrameworkBundle;
use Symfony\Component\Config\Loader\LoaderInterface;
use Symfony\Component\HttpKernel\Kernel;

class AppKernel extends Kernel
{
    /**
     * {@inheritdoc}
     */
    public function registerBundles(): array
    {
        return array(
            new FrameworkBundle(),
            new EnseparHtml2pdfBundle(),
        );
    }

    /**
     * {@inheritdoc}
     */
    public function registerContainerConfiguration(LoaderInterface $loader)
    {
        $loader->load(__DIR__.'/config/config.yml');
    }

    /**
     * {@inheritdoc}
     */
    public function getCacheDir(): string
    {
        $dir = sys_get_temp_dir().'/test_html2pdf_bundle_cache';
        if (!is_dir($dir)) {
            mkdir($dir, 0777, true);
        }

        return $dir;
    }

    /**
     * {@inheritdoc}
     */
    public function getLogDir(): string
    {
        $dir = sys_get_temp_dir().'/test_html2pdf_bundle_log';
        if (!is_dir($dir)) {
            mkdir($dir, 0777, true);
        }

        return $dir;
    }
}
