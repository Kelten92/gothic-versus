<?php
namespace App\Repositories\Interfaces;

use App\Repositories\Interfaces\BaseRepositoryInterface;

    interface UserRepositoryInterface extends BaseRepositoryInterface
    {
        public function create(array $attributes);
    }