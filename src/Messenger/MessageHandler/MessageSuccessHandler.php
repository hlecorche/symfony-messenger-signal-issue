<?php

declare(strict_types=1);

namespace App\Messenger\MessageHandler;

use App\Messenger\Message\MessageSuccess;
use Symfony\Component\Messenger\Attribute\AsMessageHandler;

#[AsMessageHandler]
class MessageSuccessHandler
{
    public function __invoke(MessageSuccess $message): void
    {
        sleep(6000); // Can be interrupted by a signal
        dump('The worker will stop correctly');
    }
}
