<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerRraccyx\EccubeProdProjectContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerRraccyx/EccubeProdProjectContainer.php') {
    touch(__DIR__.'/ContainerRraccyx.legacy');

    return;
}

if (!\class_exists(EccubeProdProjectContainer::class, false)) {
    \class_alias(\ContainerRraccyx\EccubeProdProjectContainer::class, EccubeProdProjectContainer::class, false);
}

return new \ContainerRraccyx\EccubeProdProjectContainer(array(
    'container.build_hash' => 'Rraccyx',
    'container.build_id' => 'ba6534c5',
    'container.build_time' => 1567825949,
), __DIR__.\DIRECTORY_SEPARATOR.'ContainerRraccyx');