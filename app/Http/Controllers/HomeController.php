<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use Toastr;
use App\Department;
use App\Student;
use App\Http\Requests\Login;
use App\verifyStudent;
use App\Mail\VerifyMail;

class HomeController extends Controller
{

	//For showing the login form
     public function loginForm()
     {
     	return view('home.login');
     }
     //For verifying the login
     public function verifyLogin(Login $request)
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
        {
            $students=Student::all();
            $departments=Department::all();
     		return view('admin.home',compact('students','departments'));
        }
     	elseif(Auth::guard('student')->check() && Auth::user()->verified == 1)
     		return view('student.home');
        else
        {
            Auth::logout();
        return redirect('login')
        ->with('warning', "Sorry your email cannot be identified,Please verify your email First");
        }
     }
     //For Logging Out The User
     public function logout()
     {
     	Auth::guard('admin')->logout();
     	return redirect('/login');
     }
 
    public function verifyStudent($token)
    {
        $verifyStudent = VerifyStudent::where('token', $token)->first();
        if(isset($verifyStudent) )
        {
            
            if($verifyStudent->student->verified == 0)
            {
                $verifyStudent->student->verified = 1;
                $verifyStudent->student->save();
                $status = "Your e-mail is verified. You can now login.";
            } 
            else
            {
                $status = "Your e-mail is already verified. You can now login.";
            }
        }
        else
        {
            return redirect('/login')->with('warning', "Sorry your email cannot be identified.");
        }
        return redirect('/login')->with('status', $status);
    }
    
}
