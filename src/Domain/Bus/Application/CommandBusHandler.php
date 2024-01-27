<?php

namespace AsyncAmazonJp\Domain\Bus\Application;

use AsyncAmazonJp\Domain\Bus\Command\Command;
use AsyncAmazonJp\Domain\Bus\Command\CommandBus;
use AsyncAmazonJp\Domain\Bus\Command\CommandHandler;

/**
 *
 * @author bits.JuanDiaz <juan.diaz@bitsamericas.com>
 * @copyright Copyright (c) 2023, Bits Americas S.A.S
 * @date 10/24/2023
 * @version 1.0.0
 */
class CommandBusHandler implements CommandBus
{

    public function __construct(private array $handlers = []) {
    }

    public function dispatch(Command $command): void
    {
        if (!isset($this->handlers[get_class($command)])) {
            throw new \RuntimeException("No handler registered for " . get_class($command));
        }

        /** @var CommandHandler $handler */
        $handler = $this->handlers[get_class($command)];
        dd($handler);
       // $handler->__invoke($command);
    }

}