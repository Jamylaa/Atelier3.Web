<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\Container2rAlACv\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/Container2rAlACv/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/Container2rAlACv.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\Container2rAlACv\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \Container2rAlACv\App_KernelDevDebugContainer([
    'container.build_hash' => '2rAlACv',
    'container.build_id' => '3201c1c2',
    'container.build_time' => 1695855126,
], __DIR__.\DIRECTORY_SEPARATOR.'Container2rAlACv');
