<?php

declare(strict_types=1);

namespace App\Jobs;

use Psr\SimpleCache\CacheInterface;
use Yiisoft\Yii\Queue\Message\MessageInterface;

final class SimpleJob
{
    public function __construct(private readonly CacheInterface $cache)
    {
    }

    public function handle(MessageInterface $message): void
    {
        while (!$this->cache->get('canContinue', false)) {
            sleep(1);
        }

        \md5('test');
    }
}
