<?php

namespace ContainerL0ndjsv;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_RwMgiHHService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.RwMgiHH' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.RwMgiHH'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'App\\Controller\\AdminController::admin' => ['privates', '.service_locator.OqAOQGI', 'get_ServiceLocator_OqAOQGIService', true],
            'App\\Controller\\BookingController::book' => ['privates', '.service_locator.sRHoVhN', 'get_ServiceLocator_SRHoVhNService', true],
            'App\\Controller\\CommentaireController::delete' => ['privates', '.service_locator.5Tv0MEa', 'get_ServiceLocator_5Tv0MEaService', true],
            'App\\Controller\\CommentaireController::update' => ['privates', '.service_locator.5Tv0MEa', 'get_ServiceLocator_5Tv0MEaService', true],
            'App\\Controller\\RegistrationController::register' => ['privates', '.service_locator.e_4zbH4', 'get_ServiceLocator_E4zbH4Service', true],
            'App\\Controller\\SecurityController::login' => ['privates', '.service_locator.rSTd.nA', 'get_ServiceLocator_RSTd_NAService', true],
            'App\\Controller\\SecurityController::passerEnAdmin' => ['privates', '.service_locator.bYqs9Eo', 'get_ServiceLocator_BYqs9EoService', true],
            'App\\Controller\\TaxisController::addTaxi' => ['privates', '.service_locator.Ud20X4g', 'get_ServiceLocator_Ud20X4gService', true],
            'App\\Controller\\TaxisController::delete' => ['privates', '.service_locator.OqAOQGI', 'get_ServiceLocator_OqAOQGIService', true],
            'App\\Controller\\TaxisController::gestionTaxi' => ['privates', '.service_locator.OqAOQGI', 'get_ServiceLocator_OqAOQGIService', true],
            'App\\Controller\\TaxisController::listetaxi' => ['privates', '.service_locator.OqAOQGI', 'get_ServiceLocator_OqAOQGIService', true],
            'App\\Controller\\TaxisController::oneTaxi' => ['privates', '.service_locator.d_yJmac', 'get_ServiceLocator_DYJmacService', true],
            'App\\Controller\\TaxisController::update' => ['privates', '.service_locator.Ud20X4g', 'get_ServiceLocator_Ud20X4gService', true],
            'App\\Kernel::loadRoutes' => ['privates', '.service_locator.y4_Zrx.', 'get_ServiceLocator_Y4Zrx_Service', true],
            'App\\Kernel::registerContainerConfiguration' => ['privates', '.service_locator.y4_Zrx.', 'get_ServiceLocator_Y4Zrx_Service', true],
            'kernel::loadRoutes' => ['privates', '.service_locator.y4_Zrx.', 'get_ServiceLocator_Y4Zrx_Service', true],
            'kernel::registerContainerConfiguration' => ['privates', '.service_locator.y4_Zrx.', 'get_ServiceLocator_Y4Zrx_Service', true],
            'App\\Controller\\AdminController:admin' => ['privates', '.service_locator.OqAOQGI', 'get_ServiceLocator_OqAOQGIService', true],
            'App\\Controller\\BookingController:book' => ['privates', '.service_locator.sRHoVhN', 'get_ServiceLocator_SRHoVhNService', true],
            'App\\Controller\\CommentaireController:delete' => ['privates', '.service_locator.5Tv0MEa', 'get_ServiceLocator_5Tv0MEaService', true],
            'App\\Controller\\CommentaireController:update' => ['privates', '.service_locator.5Tv0MEa', 'get_ServiceLocator_5Tv0MEaService', true],
            'App\\Controller\\RegistrationController:register' => ['privates', '.service_locator.e_4zbH4', 'get_ServiceLocator_E4zbH4Service', true],
            'App\\Controller\\SecurityController:login' => ['privates', '.service_locator.rSTd.nA', 'get_ServiceLocator_RSTd_NAService', true],
            'App\\Controller\\SecurityController:passerEnAdmin' => ['privates', '.service_locator.bYqs9Eo', 'get_ServiceLocator_BYqs9EoService', true],
            'App\\Controller\\TaxisController:addTaxi' => ['privates', '.service_locator.Ud20X4g', 'get_ServiceLocator_Ud20X4gService', true],
            'App\\Controller\\TaxisController:delete' => ['privates', '.service_locator.OqAOQGI', 'get_ServiceLocator_OqAOQGIService', true],
            'App\\Controller\\TaxisController:gestionTaxi' => ['privates', '.service_locator.OqAOQGI', 'get_ServiceLocator_OqAOQGIService', true],
            'App\\Controller\\TaxisController:listetaxi' => ['privates', '.service_locator.OqAOQGI', 'get_ServiceLocator_OqAOQGIService', true],
            'App\\Controller\\TaxisController:oneTaxi' => ['privates', '.service_locator.d_yJmac', 'get_ServiceLocator_DYJmacService', true],
            'App\\Controller\\TaxisController:update' => ['privates', '.service_locator.Ud20X4g', 'get_ServiceLocator_Ud20X4gService', true],
            'kernel:loadRoutes' => ['privates', '.service_locator.y4_Zrx.', 'get_ServiceLocator_Y4Zrx_Service', true],
            'kernel:registerContainerConfiguration' => ['privates', '.service_locator.y4_Zrx.', 'get_ServiceLocator_Y4Zrx_Service', true],
        ], [
            'App\\Controller\\AdminController::admin' => '?',
            'App\\Controller\\BookingController::book' => '?',
            'App\\Controller\\CommentaireController::delete' => '?',
            'App\\Controller\\CommentaireController::update' => '?',
            'App\\Controller\\RegistrationController::register' => '?',
            'App\\Controller\\SecurityController::login' => '?',
            'App\\Controller\\SecurityController::passerEnAdmin' => '?',
            'App\\Controller\\TaxisController::addTaxi' => '?',
            'App\\Controller\\TaxisController::delete' => '?',
            'App\\Controller\\TaxisController::gestionTaxi' => '?',
            'App\\Controller\\TaxisController::listetaxi' => '?',
            'App\\Controller\\TaxisController::oneTaxi' => '?',
            'App\\Controller\\TaxisController::update' => '?',
            'App\\Kernel::loadRoutes' => '?',
            'App\\Kernel::registerContainerConfiguration' => '?',
            'kernel::loadRoutes' => '?',
            'kernel::registerContainerConfiguration' => '?',
            'App\\Controller\\AdminController:admin' => '?',
            'App\\Controller\\BookingController:book' => '?',
            'App\\Controller\\CommentaireController:delete' => '?',
            'App\\Controller\\CommentaireController:update' => '?',
            'App\\Controller\\RegistrationController:register' => '?',
            'App\\Controller\\SecurityController:login' => '?',
            'App\\Controller\\SecurityController:passerEnAdmin' => '?',
            'App\\Controller\\TaxisController:addTaxi' => '?',
            'App\\Controller\\TaxisController:delete' => '?',
            'App\\Controller\\TaxisController:gestionTaxi' => '?',
            'App\\Controller\\TaxisController:listetaxi' => '?',
            'App\\Controller\\TaxisController:oneTaxi' => '?',
            'App\\Controller\\TaxisController:update' => '?',
            'kernel:loadRoutes' => '?',
            'kernel:registerContainerConfiguration' => '?',
        ]);
    }
}
