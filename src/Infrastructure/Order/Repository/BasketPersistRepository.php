<?php

namespace AsyncAmazonJp\Infrastructure\Order\Repository;

use Doctrine\ORM\EntityManager;
use AsyncAmazonJp\Domain\Model\Basket;
use AsyncAmazonJp\Domain\Order\BasketRepository;
use AsyncAmazonJp\Infrastructure\PersisterRepository;

/**
 *
 * @author bits.JuanDiaz <juan.diaz@bitsamericas.com>
 * @copyright Copyright (c) 2023, Bits Americas S.A.S
 * @date 10/25/2023
 * @version 1.0.0
 */
class BasketPersistRepository extends PersisterRepository implements BasketRepository
{

    public function save(Basket $basket): void
    {
        $this->entityManager()->persist($basket);
        $this->entityManager()->flush($basket);
    }


    public function findByUserId(string $userId): ?Basket
    {
        return null;
    }
}