<?php

namespace App\Repositories;

class TaskRepositoryeloquent implements TaskRepositoryinterface
{

    protected $model;

    public function __construct(Model $model)
    {
         $this->model = $model;
    }

    public function getList()
    {
        return $this->model->all();
    }

    public function store(array $data)
    {
        return $this->model->create($data);
    }

    public function get($id)
    {
        return $this->model->find($id);
    }

    public function update(array $data, $id)
    {
        return $this->model->find($id)->update($data);
    }

    public function destroy($id)
    {
        return $this->model->find($id)->delete();
    }
}
