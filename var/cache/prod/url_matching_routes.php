<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/dossier' => [[['_route' => 'dossiers', '_controller' => 'App\\Controller\\DossierController::show'], null, null, null, false, false, null]],
        '/ouvertureDossier' => [[['_route' => 'ouvertureDossier', '_controller' => 'App\\Controller\\DossierController::ouvertureDossier'], null, null, null, false, false, null]],
        '/ouvertureExcercice' => [[['_route' => 'ouvertureExcercice', '_controller' => 'App\\Controller\\DossierController::ouvertureExcerice'], null, null, null, false, false, null]],
        '/donneesExcerice' => [[['_route' => 'donneesExcerice', '_controller' => 'App\\Controller\\DossierController::donneesExcerice'], null, null, null, false, false, null]],
        '/' => [[['_route' => 'home', '_controller' => 'App\\Controller\\HomeController::index'], null, null, null, false, false, null]],
        '/login' => [[['_route' => 'login', '_controller' => 'App\\Controller\\LoginController::index'], null, null, null, false, false, null]],
        '/registre' => [[['_route' => 'registre', '_controller' => 'App\\Controller\\LoginController::registre'], null, null, null, false, false, null]],
        '/confirmation' => [[['_route' => 'confirmation', '_controller' => 'App\\Controller\\LoginController::confirmation'], null, null, null, false, false, null]],
        '/definitionPaiement' => [[['_route' => 'definitionPaiement', '_controller' => 'App\\Controller\\LoginController::definitionPaiement'], null, null, null, false, false, null]],
        '/mail' => [[['_route' => 'email', '_controller' => 'App\\Controller\\LoginController::envoieMailAcceptation'], null, null, null, false, false, null]],
        '/logout' => [[['_route' => 'logout', '_controller' => 'App\\Controller\\LoginController::logout'], null, null, null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/dossier/([^/]++)(*:24)'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        24 => [
            [['_route' => 'dossier', '_controller' => 'App\\Controller\\DossierController::index'], ['type'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
