<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerRx0awhM\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerRx0awhM/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerRx0awhM.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerRx0awhM\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerRx0awhM\App_KernelDevDebugContainer([
    'container.build_hash' => 'Rx0awhM',
    'container.build_id' => '20c82efb',
    'container.build_time' => 1634128024,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerRx0awhM');
