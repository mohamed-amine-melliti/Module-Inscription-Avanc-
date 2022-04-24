<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/_profiler' => [[['_route' => '_profiler_home', '_controller' => 'web_profiler.controller.profiler::homeAction'], null, null, null, true, false, null]],
        '/_profiler/search' => [[['_route' => '_profiler_search', '_controller' => 'web_profiler.controller.profiler::searchAction'], null, null, null, false, false, null]],
        '/_profiler/search_bar' => [[['_route' => '_profiler_search_bar', '_controller' => 'web_profiler.controller.profiler::searchBarAction'], null, null, null, false, false, null]],
        '/_profiler/phpinfo' => [[['_route' => '_profiler_phpinfo', '_controller' => 'web_profiler.controller.profiler::phpinfoAction'], null, null, null, false, false, null]],
        '/_profiler/open' => [[['_route' => '_profiler_open_file', '_controller' => 'web_profiler.controller.profiler::openAction'], null, null, null, false, false, null]],
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
                .'|/_(?'
                    .'|wdt/([^/]++)(*:24)'
                    .'|profiler/([^/]++)(?'
                        .'|/(?'
                            .'|search/results(*:69)'
                            .'|router(*:82)'
                            .'|exception(?'
                                .'|(*:101)'
                                .'|\\.css(*:114)'
                            .')'
                        .')'
                        .'|(*:124)'
                    .')'
                    .'|error/(\\d+)(?:\\.([^/]++))?(*:159)'
                .')'
                .'|/dossier/([^/]++)(*:185)'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        24 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
        69 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
        82 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
        101 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception_panel::body'], ['token'], null, null, false, false, null]],
        114 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception_panel::stylesheet'], ['token'], null, null, false, false, null]],
        124 => [[['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null]],
        159 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        185 => [
            [['_route' => 'dossier', '_controller' => 'App\\Controller\\DossierController::index'], ['type'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
