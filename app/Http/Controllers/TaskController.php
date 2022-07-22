<?php

namespace App\Http\Controllers;

use App\Services\TaskService;
use http\Env\Request;


class TaskController extends Controller
{

    private $service;

    public function __construct(TaskService $service)
    {
         $this->service = $service;
    }

    public function getList()
    {
        return $this->service->getList();
    }

    public function store(Request $request)
    {
        return $this->service->store([
            'name'=> $request->name,
            'licence' => $request->licence
        ]);
    }

    public function get($id)
    {
        return $this->service->get($id);
    }

    public function update(Request $request, $id)
    {
        return $this->service->update([
            'name'=> $request->name,
            'licence' => $request->licence
        ],$id);
    }

    public function destroy($id)
    {
        return $this->service->destroy($id);
    }
}
