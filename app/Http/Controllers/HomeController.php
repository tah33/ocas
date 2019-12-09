<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use Toastr;
use App\Department;
use App\Student;
use App\Subject;
use App\Http\Requests\Login;
use App\verifyStudent;
use App\Mail\VerifyMail;

class HomeController extends Controller
{
    public function welcome()
    {
        $departments = Department::all();
        return view('welcome',compact('departments'));
    }

    //For showing the login form
    public function loginForm()
    {
        return view('home.login');
    }

    //For verifying the login
    public function verifyLogin(Login $request)
    {
        $username = Auth::guard('admin')->attempt(['email' => $request->login, 'password' => $request->input('password')]);
        $email = Auth::guard('admin')->attempt(['username' => $request->login, 'password' => $request->input('password')]);
        $username2 = Auth::guard('student')->attempt(['email' => $request->login, 'password' => $request->input('password')]);
        $email2 = Auth::guard('student')->attempt(['username' => $request->login, 'password' => $request->input('password')]);
        if ($username || $email || $username2 || $email2) {
            Toastr::success('LoggedIn Sucessfully', 'Success!');
            return redirect()->intended(url('home'));
        } else {
            return back()->with('msg', "Enter Credentials Correctly");
        }

    }

    //Redirecting the user After Sucessfully LoggedIn
    public function home(Request $request)
    {
        if (Auth::guard('admin')->check()) {

            $data = [
                'page_title' => 'Dashboard :: OCASUS',
                'departments' => Department::all(),
                'subjects' => Subject::all(),
                'students' => Student::all()
            ];
            return view('admin.home')->with(array_merge($this->data, $data));
        } else
            return view('student.home');
    }

    //For Logging Out The User
    public function logout()
    {
        Auth::guard('admin')->logout();
        return redirect('/login');
    }


}
