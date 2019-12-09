<?php
namespace Nikhilneo\Todolist;
use Illuminate\Support\ServiceProvider;

    class TodoServiceProvider extends ServiceProvider
    {
        public function boot()
        {
            $this->loadRoutesFrom(__DIR__.'/routes/web.php');
            $this->loadViewsFrom(__DIR__.'/views', 'todolist');
        }

        public function register()
        {
            # code...
        }
    }