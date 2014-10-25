<?php

namespace Ensepar\Html2pdfBundle\DependencyInjection;

use Symfony\Component\Config\Definition\Builder\TreeBuilder;
use Symfony\Component\Config\Definition\ConfigurationInterface;

/**
 * This is the class that validates and merges configuration from your app/config files
 */
class Configuration implements ConfigurationInterface
{
    public function getConfigTreeBuilder()
    {
        $treeBuilder = new TreeBuilder();
        $root = $treeBuilder->root('ensepar_html2pdf');

        $root
            ->children()
                ->scalarNode('orientation')->defaultValue('P')->end()
                ->scalarNode('format')->defaultValue('A4')->end()
                ->scalarNode('lang')->defaultValue('en')->end()
                ->booleanNode('unicode')->defaultTrue()->end()
                ->scalarNode('encoding')->defaultValue('UTF-8')->end()
                ->arrayNode('margin')
                    ->prototype('scalar')->end()
                    ->defaultValue(array(10, 15, 10, 15))
                ->end()
            ->end()
        ;

        return $treeBuilder;
    }
}
