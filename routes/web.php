<?php

use App\Http\Controllers\TaskController;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {

    return view('welcome');

});

Route::get('/token', function () {

    return csrf_token();

});

Route::get('tasks', [TaskController::class, 'getList']);

Route::get('task/{id}', [TaskController::class, 'get']);

Route::post('task', [TaskController::class, 'store']);

Route::put('task/{id}', [TaskController::class, 'update']);

Route::delete('task/{id}', [TaskController::class, 'destroy']);



