<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserRegistrationController extends Controller
{
    public function index(){
        return view('welcome');
    }

    public function create(){
        return view('create');
    }

    public function update(){
        return view('update');
    }
}
