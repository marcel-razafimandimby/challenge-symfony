<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerSyxxxdr\appProdDebugProjectContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerSyxxxdr/appProdDebugProjectContainer.php') {
    touch(__DIR__.'/ContainerSyxxxdr.legacy');

    return;
}

if (!\class_exists(appProdDebugProjectContainer::class, false)) {
    \class_alias(\ContainerSyxxxdr\appProdDebugProjectContainer::class, appProdDebugProjectContainer::class, false);
}

return new \ContainerSyxxxdr\appProdDebugProjectContainer(array(
    'container.build_hash' => 'Syxxxdr',
    'container.build_id' => 'ea8596b1',
    'container.build_time' => 1529314726,
), __DIR__.\DIRECTORY_SEPARATOR.'ContainerSyxxxdr');