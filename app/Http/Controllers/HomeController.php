<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
	//For showing the login form
     public function loginForm()
     {
     	return view('home.login');
     }
     //For verifying the login
     public function verify()
     {
     	
     }
}
