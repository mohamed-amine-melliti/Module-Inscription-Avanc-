<?php

namespace ContainerYtaFXth;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getMimeTypesService extends App_KernelProdContainer
{
    /*
     * Gets the private 'mime_types' shared service.
     *
     * @return \Symfony\Component\Mime\MimeTypes
     */
    public static function do($container, $lazyLoad = true)
    {
        $container->privates['mime_types'] = $instance = new \Symfony\Component\Mime\MimeTypes();

        $instance->setDefault($instance);

        return $instance;
    }
}
