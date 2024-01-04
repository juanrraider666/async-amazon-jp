<?php

namespace AsyncAmazonJp\Domain\Model;

use AsyncAmazonJp\Domain\Order\BasketName;
use AsyncAmazonJp\Domain\User\UserId;

/**
 *
 * @author bits.JuanDiaz <juan.diaz@bitsamericas.com>
 * @copyright Copyright (c) 2023, Bits Americas S.A.S
 * @date 10/24/2023
 * @version 1.0.0
 */
class Basket
{
    private string $id;


    private array $items;


    public function __construct(private readonly UserId $userId, private readonly BasketName $name)
    {
    }

    public function addItems(Item $item): void
    {
        $this->items[] = $item;
    }

    public function getUserId(): UserId
    {
        return $this->userId;
    }


    public function getName(): BasketName
    {
        return $this->name;
    }

}