<?php

namespace EES\SidAuthenticationBundle\DependencyInjection;

use Symfony\Component\Config\Definition\Builder\TreeBuilder;
use Symfony\Component\Config\Definition\ConfigurationInterface;

class Configuration implements ConfigurationInterface
{

    /**
     * Generates the configuration tree builder.
     *
     * @return \Symfony\Component\Config\Definition\Builder\TreeBuilder The tree builder
     */
    public function getConfigTreeBuilder()
    {
        $treeBuilder = new TreeBuilder();
        $rootNode = $treeBuilder->root("sid_authentication_bundle");

        $rootNode->
            children()->
                scalarNode("test")->isRequired()->cannotBeEmpty()->end()->
            end()
        ;

        return $treeBuilder;
    }

}
