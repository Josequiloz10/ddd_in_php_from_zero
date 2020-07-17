<?php

namespace ContainerWmerYjt;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getConsole_Command_TranslationUpdateService extends srcMN_Apps_Ddd_Backend_DddBackendKernelTestDebugContainer
{
    /**
     * Gets the private 'console.command.translation_update' shared service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Command\TranslationUpdateCommand
     */
    public static function do($container, $lazyLoad = true)
    {
        $container->privates['console.command.translation_update'] = $instance = new \Symfony\Bundle\FrameworkBundle\Command\TranslationUpdateCommand(($container->privates['translation.writer'] ?? $container->load('getTranslation_WriterService')), ($container->privates['translation.reader'] ?? $container->load('getTranslation_ReaderService')), ($container->privates['translation.extractor'] ?? $container->load('getTranslation_ExtractorService')), 'en', (\dirname(__DIR__, 4).'/translations'), '', [], [0 => '/home/francisco/dev/ddd_in_php_from_zero/vendor/symfony/http-kernel/EventListener/LocaleAwareListener.php', 1 => '/home/francisco/dev/ddd_in_php_from_zero/vendor/symfony/framework-bundle/Command/TranslationDebugCommand.php', 2 => '/home/francisco/dev/ddd_in_php_from_zero/vendor/symfony/framework-bundle/CacheWarmer/TranslationsCacheWarmer.php']);

        $instance->setName('translation:update');

        return $instance;
    }
}
