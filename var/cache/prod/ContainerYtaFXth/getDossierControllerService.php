<?php

namespace ContainerYtaFXth;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getDossierControllerService extends App_KernelProdContainer
{
    /*
     * Gets the public 'App\Controller\DossierController' shared autowired service.
     *
     * @return \App\Controller\DossierController
     */
    public static function do($container, $lazyLoad = true)
    {
        $container->services['App\\Controller\\DossierController'] = $instance = new \App\Controller\DossierController(($container->services['doctrine.orm.default_entity_manager'] ?? $container->load('getDoctrine_Orm_DefaultEntityManagerService')), ($container->privates['App\\Repository\\DossierRepository'] ?? $container->load('getDossierRepositoryService')));

        $instance->setContainer(($container->privates['.service_locator.GNc8e5B'] ?? $container->load('get_ServiceLocator_GNc8e5BService'))->withContext('App\\Controller\\DossierController', $container));

        return $instance;
    }
}
