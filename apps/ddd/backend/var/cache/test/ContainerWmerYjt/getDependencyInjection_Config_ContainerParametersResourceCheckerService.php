<?php

namespace ContainerWmerYjt;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getDependencyInjection_Config_ContainerParametersResourceCheckerService extends srcMN_Apps_Ddd_Backend_DddBackendKernelTestDebugContainer
{
    /**
     * Gets the private 'dependency_injection.config.container_parameters_resource_checker' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\Config\ContainerParametersResourceChecker
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['dependency_injection.config.container_parameters_resource_checker'] = new \Symfony\Component\DependencyInjection\Config\ContainerParametersResourceChecker($container);
    }
}
