<?php

namespace ContainerWmerYjt;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getTranslation_Dumper_QtService extends srcMN_Apps_Ddd_Backend_DddBackendKernelTestDebugContainer
{
    /**
     * Gets the private 'translation.dumper.qt' shared service.
     *
     * @return \Symfony\Component\Translation\Dumper\QtFileDumper
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['translation.dumper.qt'] = new \Symfony\Component\Translation\Dumper\QtFileDumper();
    }
}
