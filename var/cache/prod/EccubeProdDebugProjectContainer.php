<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerYljvrot\EccubeProdDebugProjectContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerYljvrot/EccubeProdDebugProjectContainer.php') {
    touch(__DIR__.'/ContainerYljvrot.legacy');

    return;
}

if (!\class_exists(EccubeProdDebugProjectContainer::class, false)) {
    \class_alias(\ContainerYljvrot\EccubeProdDebugProjectContainer::class, EccubeProdDebugProjectContainer::class, false);
}

return new \ContainerYljvrot\EccubeProdDebugProjectContainer(array(
    'container.build_hash' => 'Yljvrot',
    'container.build_id' => '01c7dee7',
    'container.build_time' => 1567827258,
), __DIR__.\DIRECTORY_SEPARATOR.'ContainerYljvrot');
