<?php

namespace AsyncAmazonJp\Domain\Order;

use Doctrine\ORM\Mapping as ORM;

/**
 *
 * @author bits.JuanDiaz <juan.diaz@bitsamericas.com>
 * @copyright Copyright (c) 2023, Bits Americas S.A.S
 * @date 10/26/2023
 * @version 1.0.0
 */

/*
 * Esto es un Value object
 *
 * Embeddable:
 * es una clase que no tiene su propio ciclo de vida y
 * no puede ser consultado por sí misma. Se usa para descomponer una clase en piezas reutilizables.
 */
#[ORM\Embeddable]
class BasketName
{
    public function __construct(protected string $name)
    {
    }

    public function getName(): string
    {
        return $this->name;
    }

}