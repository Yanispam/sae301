<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\Container8R21PQR\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/Container8R21PQR/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/Container8R21PQR.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\Container8R21PQR\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \Container8R21PQR\App_KernelDevDebugContainer([
    'container.build_hash' => '8R21PQR',
    'container.build_id' => '35205816',
    'container.build_time' => 1669381945,
], __DIR__.\DIRECTORY_SEPARATOR.'Container8R21PQR');
