<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TaskController extends Controller
{
    public function index(request $request){
        return view('task');
    }

    public function create(request $request){
        return view('tasks.create');
    }

    public function edit(request $request){
        return view('tasks.edit');
    }

    public function delete(request $request){
        // Deleta e manda de volta para a home
        return redirect(route('home'));
    }
}
