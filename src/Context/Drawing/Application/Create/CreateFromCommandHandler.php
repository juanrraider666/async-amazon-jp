<?php

namespace AsyncAmazonJp\Context\Drawing\Application\Create;

use AsyncAmazonJp\Context\Drawing\Application\Command\AddDraftCommand;
use AsyncAmazonJp\Domain\Bus\Command\CommandHandler;
use AsyncAmazonJp\Domain\Model\DrawingIdentifier;

/**
 *
 * @author bits.JuanDiaz <juan.diaz@bitsamericas.com>
 * @date 10/5/2023
 */
class CreateFromCommandHandler implements CommandHandler
{

    public function __construct(private readonly CourseCreator $creator)
    {
    }

//    public function __invoke(Comm $command): void
//    {
//        $id       = new DrawingIdentifier($command->getId());
//        $name     = new CourseName($command->getName());
//
//        $this->creator->__invoke($id, $name);
//    }
}