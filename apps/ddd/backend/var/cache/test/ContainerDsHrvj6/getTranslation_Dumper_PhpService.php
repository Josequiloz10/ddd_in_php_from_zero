<?php

namespace ContainerDsHrvj6;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getTranslation_Dumper_PhpService extends srcMN_Apps_Ddd_Backend_DddBackendKernelTestDebugContainer
{
    /**
     * Gets the private 'translation.dumper.php' shared service.
     *
     * @return \Symfony\Component\Translation\Dumper\PhpFileDumper
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['translation.dumper.php'] = new \Symfony\Component\Translation\Dumper\PhpFileDumper();
    }
}
