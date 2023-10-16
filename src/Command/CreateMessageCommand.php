<?php

declare(strict_types=1);

namespace App\Command;

use App\Messenger\Message\MessageSuccess;
use Symfony\Component\Console\Attribute\AsCommand;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Messenger\MessageBusInterface;

#[AsCommand(name: 'app:create-message', description: 'Create message')]
class CreateMessageCommand extends Command
{
    public function __construct(protected MessageBusInterface $messageBus)
    {
        parent::__construct();
    }

    protected function execute(InputInterface $input, OutputInterface $output): int
    {
        $this->messageBus->dispatch(new MessageSuccess());

        return self::SUCCESS;
    }
}
