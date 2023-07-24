<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(){
        return view('user_iterface.index');
    }
    public function pune_projects()
    {
        return view('user_iterface.pune_projects');
    }
}
