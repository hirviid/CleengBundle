<?php

namespace Hirviid\Bundle\CleengBundle\DependencyInjection;

use Symfony\Component\Config\FileLocator;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\DependencyInjection\Loader\XmlFileLoader;
use Symfony\Component\HttpKernel\DependencyInjection\Extension;

/**
 * HirviidCleengExtension.
 *
 * @author David Van Gompel <david@truecolor.be>
 */
class HirviidCleengExtension extends Extension
{
    public function load(array $configs, ContainerBuilder $container)
    {
        $configuration = new Configuration($this->getAlias());
        $config = $this->processConfiguration($configuration, $configs);

        $loader = new XmlFileLoader($container, new FileLocator(__DIR__ . '/../Resources/config'));
        $loader->load('cleeng.xml');

        $container->setParameter('cleeng.publisher_token', $config['publisher_token']);
        $container->setParameter('cleeng.sandbox', $config['sandbox']);
    }
}