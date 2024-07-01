<?php

namespace ContainerYvsTdTF;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_Ud20X4gService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.Ud20X4g' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.Ud20X4g'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'repoTax' => ['privates', 'App\\Repository\\TaxisRepository', 'getTaxisRepositoryService', true],
            'slugger' => ['privates', 'slugger', 'getSluggerService', true],
        ], [
            'repoTax' => 'App\\Repository\\TaxisRepository',
            'slugger' => '?',
        ]);
    }
}
