<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    public function loadIndexView(){
        return view('index');
    }
    public function loadHomeView(){
        return view('home');
    }
}
