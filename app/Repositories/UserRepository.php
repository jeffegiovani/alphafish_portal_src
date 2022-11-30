<?php


namespace App\Repositories;

use Domain\User;
use Illuminate\Database\Eloquent\ModelNotFoundException;

class UserRepository
{

    /**
     * @var User
     */
    private $model;

    /**
     * UserRepository constructor.
     *
     * @param User $user
     */
    public function __construct(User $user)
    {
        $this->model = $user;
    }

    /**
     * @return mixed
     */
    public function getAll()
    {
        $query_builder = $this
            ->model
            ->orderBy('first_name', 'ASC');

        return $query_builder->get();
    }

    /**
     * @param null $user_id
     *
     * @return \Illuminate\Support\Collection
     */
    public function getAllPluckedUp($user_id = null)
    {
        $query_builder = $this
            ->model
            ->orderBy('first_name', 'ASC');

        if ($user_id) {
            $query_builder
                ->where('user_id', $user_id);
        }

        return $query_builder
            ->get()
            ->pluck('full_name', 'id');
    }

    /**
     * Find a resource by ID
     *
     * @param integer $id
     * @return mixed
     */
    public function findById($id)
    {
        /**
         * @var User $user
         */
        $user = $this
            ->model
            ->find($id);

        if (!$user) {
            throw new ModelNotFoundException("User with id: ${id} not found.");
        }

        return $user;
    }

    /**
     * Store a new resource in storage
     *
     * @param array $data
     * @return User|bool
     */
    public function storeNew($data)
    {
        /**
         * @var User $user
         */
        $user = $this->model;

        $user->fill($data);

        if (!$user->save()) {
            return false;
        }

        return $user;
    }

    /**
     * Update a resource by ID
     *
     * @param integer $id
     * @param array $data
     * @return User|bool
     */
    public function updateById($id, $data)
    {
        /**
         * @var User $user
         */
        $user = $this->findById($id);

        $user->fill($data);

        if (!$user->save()) {
            return false;
        }

        return $user;
    }

    /**
     *
     * Delete the resource from storage
     *
     * @param integer $id
     * @return bool|null
     * @throws \Exception
     */
    public function deleteById($id)
    {
        /**
         * @var User $user
         */
        $user = $this->findById($id);

        if ($user) {
            return $user->delete();
        }

        return false;
    }
}
