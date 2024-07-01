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
                .'|/_error/(\\d+)(?:\\.([^/]++))?(*:35)'
                .'|/modifier_commentaire_(\\d+)(*:69)'
                .'|/supprimer_commentaire_(\\d+)(*:104)'
                .'|/passer_en_admin_(\\d+)(*:134)'
                .'|/taxi_(\\d+)(*:153)'
                .'|/update_taxi_(\\d+)(*:179)'
                .'|/delete_taxi_(\\d+)(*:205)'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        35 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        69 => [[['_route' => 'app_commentaire_modifier', '_controller' => 'App\\Controller\\CommentaireController::update'], ['id'], null, null, false, true, null]],
        104 => [[['_route' => 'app_commentaire_supprimer', '_controller' => 'App\\Controller\\CommentaireController::delete'], ['id'], null, null, false, true, null]],
        134 => [[['_route' => 'app_passer_en_admin', '_controller' => 'App\\Controller\\SecurityController::passerEnAdmin'], ['id'], null, null, false, true, null]],
        153 => [[['_route' => 'app_taxi', '_controller' => 'App\\Controller\\TaxisController::oneTaxi'], ['id'], null, null, false, true, null]],
        179 => [[['_route' => 'app_taxi_update', '_controller' => 'App\\Controller\\TaxisController::update'], ['id'], null, null, false, true, null]],
        205 => [
            [['_route' => 'app_taxi_delete', '_controller' => 'App\\Controller\\TaxisController::delete'], ['id'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
