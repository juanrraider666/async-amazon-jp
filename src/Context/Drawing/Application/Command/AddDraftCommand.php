<?php

namespace AsyncAmazonJp\Context\Drawing\Application\Command;

use AsyncAmazonJp\Domain\Bus\Command\Command;
use Symfony\Component\HttpFoundation\Request;

/**
 *
 * @author bits.JuanDiaz <juan.diaz@bitsamericas.com>
 * @date 10/5/2023
 */
class AddDraftCommand implements Command
{
    public function __construct(private readonly string $id, private readonly string $name)
    {
    }

    public static function create(string $id, string $name): self
    {
        return new self($id, $name);
    }

    public static function createFromRequest(Request $request): self
    {
        return new self($request->get('id'), $request->get('name'));
    }
    public function getId(): string
    {
        return $this->id;
    }

    public function getName(): string
    {
        return $this->name;
    }
}