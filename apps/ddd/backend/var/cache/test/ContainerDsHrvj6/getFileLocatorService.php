<?php

namespace ContainerDsHrvj6;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getFileLocatorService extends srcMN_Apps_Ddd_Backend_DddBackendKernelTestDebugContainer
{
    /**
     * Gets the private 'file_locator' shared service.
     *
     * @return \Symfony\Component\HttpKernel\Config\FileLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['file_locator'] = new \Symfony\Component\HttpKernel\Config\FileLocator(($container->services['kernel'] ?? $container->get('kernel', 1)), (\dirname(__DIR__, 4).'/src/Resources'), [0 => (\dirname(__DIR__, 4).'/src')], false);
    }
}
