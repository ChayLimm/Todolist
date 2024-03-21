<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class taskscontroller extends Controller
{
    public function index(){
        return view('tasks.index');
}
    public function create(){
        return view('tasks.create');
    }
    public function store(){
        return request()->all();
    }
}