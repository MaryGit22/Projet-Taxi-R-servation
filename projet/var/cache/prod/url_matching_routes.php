<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/admin' => [[['_route' => 'app_admin', '_controller' => 'App\\Controller\\AdminController::admin'], null, null, null, false, false, null]],
        '/booking' => [[['_route' => 'app_booking', '_controller' => 'App\\Controller\\BookingController::book'], null, null, null, false, false, null]],
        '/' => [[['_route' => 'app_home', '_controller' => 'App\\Controller\\HomeController::index'], null, null, null, false, false, null]],
        '/contact' => [[['_route' => 'app_contact', '_controller' => 'App\\Controller\\HomeController::contact'], null, null, null, false, false, null]],
        '/cgu' => [[['_route' => 'app_cgu', '_controller' => 'App\\Controller\\HomeController::mention'], null, null, null, false, false, null]],
        '/register' => [[['_route' => 'app_register', '_controller' => 'App\\Controller\\RegistrationController::register'], null, null, null, false, false, null]],
        '/login' => [[['_route' => 'app_login', '_controller' => 'App\\Controller\\SecurityController::login'], null, null, null, false, false, null]],
        '/profil' => [[['_route' => 'app_profil', '_controller' => 'App\\Controller\\SecurityController::profil'], null, null, null, false, false, null]],
        '/logout' => [[['_route' => 'app_logout', '_controller' => 'App\\Controller\\SecurityController::logout'], null, null, null, false, false, null]],
        '/add_taxi' => [[['_route' => 'app_taxis_add', '_controller' => 'App\\Controller\\TaxisController::addTaxi'], null, null, null, false, false, null]],
        '/taxis' => [[['_route' => 'app_taxis', '_controller' => 'App\\Controller\\TaxisController::listetaxi'], null, null, null, false, false, null]],
        '/gestionTaxis' => [[['_route' => 'app_taxis_gestion', '_controller' => 'App\\Controller\\TaxisController::gestionTaxi'], null, null, null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/modifier_commentaire_(\\d+)(*:34)'
                .'|/supprimer_commentaire_(\\d+)(*:69)'
                .'|/passer_en_admin_(\\d+)(*:98)'
                .'|/taxi_(\\d+)(*:116)'
                .'|/update_taxi_(\\d+)(*:142)'
                .'|/delete_taxi_(\\d+)(*:168)'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        34 => [[['_route' => 'app_commentaire_modifier', '_controller' => 'App\\Controller\\CommentaireController::update'], ['id'], null, null, false, true, null]],
        69 => [[['_route' => 'app_commentaire_supprimer', '_controller' => 'App\\Controller\\CommentaireController::delete'], ['id'], null, null, false, true, null]],
        98 => [[['_route' => 'app_passer_en_admin', '_controller' => 'App\\Controller\\SecurityController::passerEnAdmin'], ['id'], null, null, false, true, null]],
        116 => [[['_route' => 'app_taxi', '_controller' => 'App\\Controller\\TaxisController::oneTaxi'], ['id'], null, null, false, true, null]],
        142 => [[['_route' => 'app_taxi_update', '_controller' => 'App\\Controller\\TaxisController::update'], ['id'], null, null, false, true, null]],
        168 => [
            [['_route' => 'app_taxi_delete', '_controller' => 'App\\Controller\\TaxisController::delete'], ['id'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
