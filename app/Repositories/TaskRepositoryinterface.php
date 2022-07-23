<?php

namespace App\Repositories;

use Illuminate\Database\Eloquent\Model;

interface TaskRepositoryinterface
{
    public function __construct(Model $model);

    public function getList();

    public function store(array $data);

    public function get($id);

    public function update(array $data, $id);

    public function destroy($id);

}
