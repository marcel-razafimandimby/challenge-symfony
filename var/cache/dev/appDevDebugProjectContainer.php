<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerKw7s2e3\appDevDebugProjectContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerKw7s2e3/appDevDebugProjectContainer.php') {
    touch(__DIR__.'/ContainerKw7s2e3.legacy');

    return;
}

if (!\class_exists(appDevDebugProjectContainer::class, false)) {
    \class_alias(\ContainerKw7s2e3\appDevDebugProjectContainer::class, appDevDebugProjectContainer::class, false);
}

return new \ContainerKw7s2e3\appDevDebugProjectContainer(array(
    'container.build_hash' => 'Kw7s2e3',
    'container.build_id' => 'e123b454',
    'container.build_time' => 1529315049,
), __DIR__.\DIRECTORY_SEPARATOR.'ContainerKw7s2e3');