<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerWecynvb\appProdProjectContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerWecynvb/appProdProjectContainer.php') {
    touch(__DIR__.'/ContainerWecynvb.legacy');

    return;
}

if (!\class_exists(appProdProjectContainer::class, false)) {
    \class_alias(\ContainerWecynvb\appProdProjectContainer::class, appProdProjectContainer::class, false);
}

return new \ContainerWecynvb\appProdProjectContainer(array(
    'container.build_hash' => 'Wecynvb',
    'container.build_id' => '5f29211b',
    'container.build_time' => 1540452704,
), __DIR__.\DIRECTORY_SEPARATOR.'ContainerWecynvb');
