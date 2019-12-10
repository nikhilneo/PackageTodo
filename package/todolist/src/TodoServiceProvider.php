<?php
namespace Nikhilneo\Todolist;
use Illuminate\Support\ServiceProvider;

    class TodoServiceProvider extends ServiceProvider
    {
        public function boot()
        {
            $this->loadRoutesFrom(__DIR__.'/routes/web.php');
            $this->loadViewsFrom(__DIR__.'/views', 'todolist');
            $this->loadMigrationsFrom(__DIR__.'/database/migrations');
        }

        public function register()
        {
            # code...
        }
    }