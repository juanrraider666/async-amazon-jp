<?php

declare(strict_types=1);

namespace AsyncAmazonJp\Domain\ValueObject;

use Stringable;

use Symfony\Component\Uid\Uuid as Suuid;
/**
 *
 * @author bits.JuanDiaz <juan.diaz@bitsamericas.com>
 * @date 10/5/2023
 */
class Uuid implements Stringable
{
    public function __construct(private readonly string $value)
    {
        $this->assertValidUuid($this->value);
    }

    public static function random(): self
    {
        return new static((string)Suuid::v4());
    }
    public function getValue(): string
    {
        return $this->value;
    }

    public function __toString(): string
    {
        return $this->getValue();
    }

    private function assertValidUuid(string $value): void
    {
        if (Suuid::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('<%s> does not allow the value <%s>.', static::class, $value));
        }
    }
}