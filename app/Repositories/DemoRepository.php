<?php


namespace App\Repositories;

use Domain\DemoModel;
use Illuminate\Database\Eloquent\ModelNotFoundException;

class DemoRepository
{

    /**
     * @var DemoModel
     */
    private $model;

    /**
     * DemoModelRepository constructor.
     *
     * @param DemoModel $demo
     */
    public function __construct(DemoModel $demo)
    {
        $this->model = $demo;
    }

    /**
     * @return mixed
     */
    public function getAll($user_id = null)
    {
        $query_builder = $this
            ->model
            ->orderBy('created_at', 'DESC');

        if($user_id){
            $query_builder
                ->where('user_id', $user_id);
        }

        return $query_builder->get();
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
         * @var DemoModel $demo;
         */
        $demo = $this
            ->model
            ->find($id);

        if (!$demo) {
            throw new ModelNotFoundException("DemoModel with id: ${id} not found.");
        }

        return $demo;
    }

    /**
     * Store a new resource in storage
     *
     * @param array $data
     * @return DemoModel|bool
     */
    public function storeNew($data)
    {
        /**
         * @var DemoModel $demo;
         */
        $demo = $this->model;

        $demo->fill($data);

        if (!$demo->save()) {
            return false;
        }

        return $demo;
    }

    /**
     * Update a resource by ID
     *
     * @param integer $id
     * @param array $data
     * @return DemoModel|bool
     */
    public function updateById($id, $data)
    {
        /**
         * @var DemoModel $demo;
         */
        $demo = $this->findById($id);

        $demo->fill($data);

        if (!$demo->save()) {
            return false;
        }

        return $demo;
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
         * @var DemoModel $demo;
         */
        $demo = $this->findById($id);

        if ($demo) {
            return $demo->delete();
        }

        return false;
    }
}
