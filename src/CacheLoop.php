<?php

declare(strict_types=1);

namespace App;

use Yiisoft\Yii\Queue\Cli\LoopInterface;
use Psr\SimpleCache\CacheInterface;

final class CacheLoop implements LoopInterface
{
    public function __construct(
        private readonly CacheInterface $cache,
    ) {
    }

    public function canContinue(): bool
    {
        return (bool) $this->cache->get('canContinue', true);
    }
}