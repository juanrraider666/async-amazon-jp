<?php

namespace AsyncAmazonJp\Domain\Order;

use AsyncAmazonJp\Domain\Model\Basket;

/**
 *
 * @author bits.JuanDiaz <juan.diaz@bitsamericas.com>
 * @copyright Copyright (c) 2023, Bits Americas S.A.S
 * @date 10/25/2023
 * @version 1.0.0
 */
interface BasketRepository
{
    public function findByUserId(string $userId): ?Basket;
    public function save(Basket $basket): void;

}