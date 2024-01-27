<?php

namespace AsyncAmazonJp\Infrastructure\Order\Criteria;

use AsyncAmazonJp\Domain\Model\User;
use AsyncAmazonJp\Infrastructure\CriteriaDto;
use AsyncAmazonJp\Infrastructure\OrmCriteriaInterface;

/**
 *
 * @author bits.JuanDiaz <juan.diaz@bitsamericas.com>
 * @copyright Copyright (c) 2024, Bits Americas S.A.S
 * @date 1/25/2024
 * @version 1.0.0
 */
class SearchByUserCriteria implements OrmCriteriaInterface {


    public function __construct(private CriteriaDto $criteria) {
    }

    public function search(User $user) {
        $alias = "user";
        return $alias .'.id' . '=' . $user;
    }

    public function and(string $query) {
        $criteria = 'user.id'. 'and' . 'user.name';
        $this->criteria->and($query);
    }

    public function orx() {
        // TODO: Implement orx() method.
    }
}