<?php

namespace AsyncAmazonJp\Context\Order\UI\Controller;

use AsyncAmazonJp\Application\Order\Command\AddItemToBasketCommand;
use AsyncAmazonJp\Infrastructure\Framework\IntranetBaseController;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Request;

/**
 *
 * @author bits.JuanDiaz <juan.diaz@bitsamericas.com>
 * @copyright Copyright (c) 2023, Bits Americas S.A.S
 * @date 10/24/2023
 * @version 1.0.0
 */
final class AddItemToBasketController extends IntranetBaseController
{
    final public function __invoke(Request $request): RedirectResponse
    {
        $this->bus->dispatch(new AddItemToBasketCommand(
            $request->query->get('order_id'),
            $request->query->get('user_id'),
            $request->query->get('product_id'),
            $request->query->get('quantity'),
        ));

        return $this->redirectWithMessage(
            'add_item_to_basket',
            sprintf('Product Added %s', $request->request->getAlpha('name'))
        );
    }
}