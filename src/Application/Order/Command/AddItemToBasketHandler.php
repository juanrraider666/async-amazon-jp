<?php

namespace AsyncAmazonJp\Application\Order\Command;

use AsyncAmazonJp\Domain\Bus\Command\CommandHandler;
use AsyncAmazonJp\Domain\Model\Basket;
use AsyncAmazonJp\Domain\Model\Item;
use AsyncAmazonJp\Domain\Order\BasketName;
use AsyncAmazonJp\Domain\Order\OrderId;
use AsyncAmazonJp\Domain\User\UserId;
use AsyncAmazonJp\Infrastructure\Order\Repository\BasketPersistRepository;

/**
 *
 * @author bits.JuanDiaz <juan.diaz@bitsamericas.com>
 * @copyright Copyright (c) 2023, Bits Americas S.A.S
 * @date 10/24/2023
 * @version 1.0.0
 */
class AddItemToBasketHandler implements CommandHandler
{

    public function __construct(private BasketPersistRepository $basketPersistRepository)
    {
    }

    public function __invoke(AddItemToBasketCommand $command): void
    {
        $userId = new UserId($command->userId);

        $basket = $this->basketPersistRepository->findByUserId($userId);

        if (!$basket) {
            $basket = new Basket($userId, new BasketName('Basket JP'));
        }

        $item = new Item($command->productId, $command->quantity);
        $basket->addItems($item);

        $this->basketPersistRepository->save($basket);
    }

}