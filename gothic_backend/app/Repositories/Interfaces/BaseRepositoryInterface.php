<?php
namespace App\Repositories\Interfaces;

    interface BaseRepositoryInterface
    {
        public function create(array $attributes);
        public function update(array $attributes, int $id);
        public function all();
        public function find(int $id);
        public function delete(int $id);
    }