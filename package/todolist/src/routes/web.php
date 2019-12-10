<?php

// Creating a group of routes which will use same namespace for their controller.
Route::group(['namespace' => 'Nikhilneo\Todolist\Http\Controllers'], function () {
    
    // Route to get view of the package.
    Route::get('todolist', 'TodolistController@getToDoList')->name('todolist.view');

    // Route to get data form view of the package.
    Route::post('todolist', 'TodolistController@postToDoList')->name('todolist.form');
});
    
