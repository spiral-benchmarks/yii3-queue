<?php

declare(strict_types=1);

namespace App\Jobs;

use Yiisoft\Yii\Queue\Message\MessageInterface;

final class SimpleJob
{
    public function handle(MessageInterface $message): void
    {
        \md5('test');
    }
}
