<?php

namespace AsyncAmazonJp\Domain\Model;

/**
 *
 * @author bits.JuanDiaz <juan.diaz@bitsamericas.com>
 * @copyright Copyright (c) 2023, Bits Americas S.A.S
 * @date 10/24/2023
 * @version 1.0.0
 */
class Item
{
    public function __construct(private readonly string $productId, private readonly string $quantity)
    {
    }

    public function getProductId(): string
    {
        return $this->productId;
    }

    public function getQuantity(): string
    {
        return $this->quantity;
    }

}