<?php

namespace Comsave\SafeSalesforceSaverBundle\DependencyInjection;

use Symfony\Component\Config\FileLocator;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\DependencyInjection\Extension\Extension;
use Symfony\Component\DependencyInjection\Loader;

/**
 * Class ComsaveSafeSalesforceSaverExtension
 * @package Comsave\SafeSalesforceSaverBundle\DependencyInjection
 */
class ComsaveSafeSalesforceSaverExtension extends Extension
{
    public function load(array $configs, ContainerBuilder $container)
    {
        $loader = new Loader\YamlFileLoader($container, new FileLocator(__DIR__.'/../Resources/config'));
        $loader->load('services.yml');
    }
}