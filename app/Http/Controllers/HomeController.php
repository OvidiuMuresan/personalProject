<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends MasterController
{
    public function __constructor(){}

    public function index(){
    	return view('home.welcome');
    }
}
