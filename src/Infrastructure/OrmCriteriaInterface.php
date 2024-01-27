<?php

namespace AsyncAmazonJp\Infrastructure;

use AsyncAmazonJp\Domain\Model\User;

interface OrmCriteriaInterface {

    public function search(User $user);
    public function and(string $query);
    public function orx();

}