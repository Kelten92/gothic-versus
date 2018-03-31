<?php
namespace App\Repositories;
use Auth;
use App\User;
use App\Expedition;
use App\Resource;

use App\Repositories\Interfaces\UserRepositoryInterface;
use App\Repositories\BaseRepository;
use App\Notifications\ExpeditionReport;

    class UserRepository extends BaseRepository implements UserRepositoryInterface
    {
        protected $model;
    
        /**
         * UserRepository constructor.
         * @param User $article
         */
        public function __construct(User $userModel)
        {
            $this->model = $userModel;
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
         * @return Authenticated User obj or NULL 
         */
        public function getUser() {
            return Auth::user();
        }
        /**
         * @return Expedition obj or NULL 
         */
        public function getExpedition() {
            return Auth::user()->expeditions->first();
        }
        /**
         * @return Skill obj or NULL 
         */
        public function getSkills() {
            return Auth::user()->skills;
        }
        /**
         * @return Resource obj or NULL 
         */
        public function getResources() {
            return Auth::user()->resources;
        }
        /**
         * @return true  or false 
         */
        public function notify($message) {
            return Auth::user()->notify($message);
        }
         /**
         * @return Collection  or NULL 
         */
        public function notifications() {
            return Auth::user()->notifications;
        }
         /**
         * @return last child Collection  or NULL 
         */
        public function notificationsLast() {
            return Auth::user()->notifications[0];
        }
    }