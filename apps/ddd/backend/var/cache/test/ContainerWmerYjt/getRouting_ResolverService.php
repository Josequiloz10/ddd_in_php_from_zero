<?php

namespace ContainerWmerYjt;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getRouting_ResolverService extends srcMN_Apps_Ddd_Backend_DddBackendKernelTestDebugContainer
{
    /**
     * Gets the private 'routing.resolver' shared service.
     *
     * @return \Symfony\Component\Config\Loader\LoaderResolver
     */
    public static function do($container, $lazyLoad = true)
    {
        $container->privates['routing.resolver'] = $instance = new \Symfony\Component\Config\Loader\LoaderResolver();

        $instance->addLoader(($container->privates['routing.loader.xml'] ?? $container->load('getRouting_Loader_XmlService')));
        $instance->addLoader(($container->privates['routing.loader.yml'] ?? $container->load('getRouting_Loader_YmlService')));
        $instance->addLoader(($container->privates['routing.loader.php'] ?? $container->load('getRouting_Loader_PhpService')));
        $instance->addLoader(($container->privates['routing.loader.glob'] ?? $container->load('getRouting_Loader_GlobService')));
        $instance->addLoader(($container->privates['routing.loader.directory'] ?? $container->load('getRouting_Loader_DirectoryService')));
        $instance->addLoader(($container->privates['routing.loader.container'] ?? $container->load('getRouting_Loader_ContainerService')));

        return $instance;
    }
}
