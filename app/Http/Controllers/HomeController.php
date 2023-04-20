<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function__construct()
    {
    	$this->middleware('auth');
    }
    //show application deshboard
    @return\Illuminate\Http\Respone

    public function index()
    {
    	return view('home');
    }
}
