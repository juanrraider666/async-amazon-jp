<?php

namespace AsyncAmazonJp\Infrastructure;

/**
 *
 * @author bits.JuanDiaz <juan.diaz@bitsamericas.com>
 * @copyright Copyright (c) 2024, Bits Americas S.A.S
 * @date 1/25/2024
 * @version 1.0.0
 */
class CriteriaDto {

    public function __construct(private array $query) {
    }

    public function and(string $query): void {

    }

}