<?php

namespace AsyncAmazonJp\Infrastructure\Framework;

use AsyncAmazonJp\Domain\Bus\Command\CommandBus;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\RequestStack;
use function Lambdish\Phunctional\repeat;

/**
 *
 * @author bits.JuanDiaz <juan.diaz@bitsamericas.com>
 * @copyright Copyright (c) 2023, Bits Americas S.A.S
 * @date 10/26/2023
 * @version 1.0.0
 */
class IntranetBaseController
{

    public function __construct(
        protected readonly RequestStack $requestStack,
        protected readonly CommandBus   $bus
    )
    {
    }

    public function redirectWithMessage(string $routeName, string $message): RedirectResponse
    {
        $this->addFlashFor('message', [$message]);

        return $this->redirect($routeName);
    }

    private function addFlashFor(string $prefix, array $messages): void
    {
        repeat(function (string $message) use ($prefix) {
            $this->requestStack->getSession()->getFlashBag()->set($prefix, $message);
        }, count($messages));

    }

    public function redirect(string $routeName): RedirectResponse
    {
        return new RedirectResponse($this->router->generate($routeName), 302);
    }
}