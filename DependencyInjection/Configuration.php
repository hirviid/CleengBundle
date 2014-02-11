<?php

namespace Hirviid\Bundle\CleengBundle\DependencyInjection;

use Symfony\Component\Config\Definition\Builder\TreeBuilder;
use Symfony\Component\Config\Definition\ConfigurationInterface;

/**
 * This class contains the configuration information for the bundle
 *
 * This information is solely responsible for how the different configuration
 * sections are normalized, and merged.
 *
 * @author David Van Gompel <david@truecolor.be>
 */
class Configuration implements ConfigurationInterface
{
    private $alias;

    public function __construct($alias)
    {
        $this->alias = $alias;
    }

    /**
     * {@inheritDoc}
     */
    public function getConfigTreeBuilder()
    {
        $treeBuilder = new TreeBuilder();
        $rootNode = $treeBuilder->root($this->alias);

        $rootNode
            ->children()
                ->booleanNode('sandbox')
                    ->defaultFalse()
                ->end()
                ->scalarNode('publisher_token')
                    ->isRequired()
                ->end()
            ->end()
        ;

        return $treeBuilder;
    }
}