<?php

namespace AsyncAmazonJp\Application\Order\Command;

use AsyncAmazonJp\Domain\Bus\Command\Command;

/**
 *
 * @author bits.JuanDiaz <juan.diaz@bitsamericas.com>
 * @copyright Copyright (c) 2023, Bits Americas S.A.S
 * @date 10/24/2023
 * @version 1.0.0
 */
class AddItemToBasketCommand implements Command
{

    public function __construct(
        public string $orderId,
        public string $userId,
        public string $productId,
        public int    $quantity
    ) {
    }

}