<?php

declare(strict_types=1);

use Yiisoft\Cache\File\FileCache;

return [
    \Psr\SimpleCache\CacheInterface::class => FileCache::class,
];
