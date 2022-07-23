<?php

namespace App\Providers;

use App\Models\Task;
use App\Repositories\TaskRepositoryeloquent;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind('App\Repositories\TaskRepositoryinterface', 'App\Repositories\TaskRepositoryeloquent');

        $this->app->bind('App\Repositories\TaskRepositoryinterface', function(){
            return new TaskRepositoryeloquent(new Task());
        });
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
