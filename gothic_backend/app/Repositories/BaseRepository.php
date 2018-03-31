<?php
namespace App\Repositories;

use App\Repositories\Interfaces\BaseRepositoryInterface;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\ModelNotFoundException;

/**
 * @codeCoverageIgnore
 */
    abstract class BaseRepository implements BaseRepositoryInterface
    {
        protected $model;
        /**
         * BaseRepository constructor.
         * @param Model $model
         */
        public function __construct(Model $model)
        {
            $this->model = $model;
        }
        /**
         * @param array $attributes
         * @return mixed
         */
        public function create(array $attributes)
        {
            return $this->model->create($attributes);
        }
        /**
         * @param array $attributes
         * @param int $id
         * @return bool
         */
        public function update(array $attributes, int $id) : bool
        {
            return $this->find($id)->update($attributes);
        }
        /**
         * @return mixed
         */
        public function all()
        {
            return $this->model->all();
        }
        /**
         * @param int $id
         * @return mixed
         */
        public function find(int $id)
        {
            return $this->model->find($id);
        }
        /**
         * @param int $id
         * @return mixed
         * @throws ModelNotFoundException
         */
        public function findOneOrFail(int $id)
        {
            return $this->model->findOrFail($id);
        }
        /**
         * @param int $id
         * @return bool
         */
        public function delete(int $id) : bool
        {
            return $this->model->find($id)->delete();
        }
    }