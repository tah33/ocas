<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use Toastr;				
class HomeController extends Controller
{
	//For showing the login form
     public function loginForm()
     {
     	return view('home.login');
     }
     //For verifying the login
     public function verify(Request $request)
     {
     	$username=Auth::guard('admin')->attempt(['email' => $request->input('login'), 'password' => $request->input('password')]);
     	$email=Auth::guard('admin')->attempt(['username' => $request->input('login'), 'password' => $request->input('password')]);
     	$username2=Auth::guard('student')->attempt(['email' => $request->input('login'), 'password' => $request->input('password')]);
     	$email2=Auth::guard('student')->attempt(['username' => $request->input('login'), 'password' => $request->input('password')]);
     	if ($username || $email || $username2 || $email2) {
     		   
     		   return redirect()->intended(url('home'));
     	}
     	else
     	{
     		return back()->with('msg',"Enter Credentials Correctly");
     	}

     }
     //Redirecting the user After Sucessfully LoggedIn
     public function home(Request $request)
     {
     	if(Auth::guard('admin')->check())
     		return view('admin.home');
     	else
     		return view('student.home');
     }
     //For Logging Out The User
     public function logout()
     {
     	Auth::guard('admin')->logout();
     	return redirect('/');
     }
}
