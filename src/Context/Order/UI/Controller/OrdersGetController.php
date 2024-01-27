<?php

namespace AsyncAmazonJp\Context\Order\UI\Controller;

use AsyncAmazonJp\Infrastructure\Framework\IntranetBaseController;
use Symfony\Component\HttpFoundation\JsonResponse;

/**
 *
 * @author bits.JuanDiaz <juan.diaz@bitsamericas.com>
 * @copyright Copyright (c) 2023, Bits Americas S.A.S
 * @date 10/27/2023
 * @version 1.0.0
 */
class OrdersGetController extends IntranetBaseController
{

    public function __invoke()
    {
       return $this->responseJson([
           'Raise Hand!',
       ]);
    }
}