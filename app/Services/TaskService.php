<?php

namespace App\Services;


use App\Repositories\TaskRepositoryinterface;

class TaskService
{
    private $repo;

    public function __construct(TaskRepositoryinterface $repo)
    {
         $this->repo = $repo;
    }

    public function getList()
    {
        return $this->repo->getList();
    }

    public function store(array $data)
    {
        return $this->repo->store($data);
    }

    public function get($id)
    {
        return $this->repo->get($id);
    }

    public function update(array $data, $id)
    {
        return $this->repo->update($data,$id);
    }

    public function destroy($id)
    {
        return $this->repo->destroy($id);
    }
}
