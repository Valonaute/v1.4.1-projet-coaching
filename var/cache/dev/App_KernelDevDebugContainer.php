<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\Container81s0qb8\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/Container81s0qb8/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/Container81s0qb8.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\Container81s0qb8\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \Container81s0qb8\App_KernelDevDebugContainer([
    'container.build_hash' => '81s0qb8',
    'container.build_id' => '27da8feb',
    'container.build_time' => 1691673591,
], __DIR__.\DIRECTORY_SEPARATOR.'Container81s0qb8');