<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerYtaFXth\App_KernelProdContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerYtaFXth/App_KernelProdContainer.php') {
    touch(__DIR__.'/ContainerYtaFXth.legacy');

    return;
}

if (!\class_exists(App_KernelProdContainer::class, false)) {
    \class_alias(\ContainerYtaFXth\App_KernelProdContainer::class, App_KernelProdContainer::class, false);
}

return new \ContainerYtaFXth\App_KernelProdContainer([
    'container.build_hash' => 'YtaFXth',
    'container.build_id' => '0e39f451',
    'container.build_time' => 1647958773,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerYtaFXth');