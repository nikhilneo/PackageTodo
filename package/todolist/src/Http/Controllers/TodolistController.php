<?php

namespace Nikhilneo\Todolist\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class TodolistController extends Controller 
{
    
    // THis function will return the view of the todolist
    public function getToDoList()
    {
        return view('todolist::todolist');
    }
    
    //This function will save the data provided by view of todolist page.
    public function postToDoList(Request $request)
    {
        if (Auth::check()) {

            dd($request->all());
        } else {
            return "You are not logged in";
        }
    }
}