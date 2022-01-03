<?php

namespace Ensepar\Html2pdfBundle\DependencyInjection;

use Symfony\Component\Config\Definition\Builder\TreeBuilder;
use Symfony\Component\Config\Definition\ConfigurationInterface;

class Configuration implements ConfigurationInterface
{
    public function getConfigTreeBuilder(): TreeBuilder
    {
        $treeBuilder = new TreeBuilder('ensepar_html2pdf');
        $rootNode = $treeBuilder->getRootNode();

        $rootNode
            ->children()
                ->scalarNode('orientation')->defaultValue('P')->end()
                ->scalarNode('format')->defaultValue('A4')->end()
                ->scalarNode('lang')->defaultValue('en')->end()
                ->booleanNode('unicode')->defaultTrue()->end()
                ->scalarNode('encoding')->defaultValue('UTF-8')->end()
                ->arrayNode('margin')
                    ->prototype('scalar')->end()
                    ->defaultValue([10, 15, 10, 15])
                ->end()
            ->end()
        ;

        return $treeBuilder;
    }
}
