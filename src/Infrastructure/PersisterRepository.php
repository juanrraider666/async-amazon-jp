<?php

namespace AsyncAmazonJp\Infrastructure;

use Doctrine\ORM\EntityManager;

/**
 *
 * @author bits.JuanDiaz <juan.diaz@bitsamericas.com>
 * @copyright Copyright (c) 2023, Bits Americas S.A.S
 * @date 10/25/2023
 * @version 1.0.0
 */
abstract class PersisterRepository
{

    public function __construct(private readonly EntityManager $entityManager)
    {
    }

    protected function entityManager(): EntityManager
    {
        return $this->entityManager;
    }

}