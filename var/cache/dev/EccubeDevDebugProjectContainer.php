<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerRdyrpdk\EccubeDevDebugProjectContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerRdyrpdk/EccubeDevDebugProjectContainer.php') {
    touch(__DIR__.'/ContainerRdyrpdk.legacy');

    return;
}

if (!\class_exists(EccubeDevDebugProjectContainer::class, false)) {
    \class_alias(\ContainerRdyrpdk\EccubeDevDebugProjectContainer::class, EccubeDevDebugProjectContainer::class, false);
}

return new \ContainerRdyrpdk\EccubeDevDebugProjectContainer(array(
    'container.build_hash' => 'Rdyrpdk',
    'container.build_id' => '2aada967',
    'container.build_time' => 1567827608,
), __DIR__.\DIRECTORY_SEPARATOR.'ContainerRdyrpdk');