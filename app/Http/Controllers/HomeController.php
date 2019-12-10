<?php

namespace App\Http\Controllers;

use App\Activity;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Auth;
use Toastr;
use App\Department;
use App\Student;
use App\Subject;
use App\Http\Requests\Login;

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

    //Redirecting the user After Successfully LoggedIn
    public function home(Request $request)
    {
        if (Auth::guard('admin')->check()) {

            $data = [
                'page_title'    => 'Dashboard :: Admin',
                'departments'   => Department::all(),
                'subjects'      => Subject::all(),
                'students'      => Student::all(),
                'activities'    => Activity::orderBy('id','desc')->take(10)->get(),
            ];
            return view('admin.home')->with(array_merge($this->data, $data));
        }
        else {
            $data = [
                'page_title'    => 'Dashboard :: Student',
                'departments'   => Department::all(),
                'subjects'      => Subject::all(),
                'students'      => Student::all(),
            ];
            $activity = Activity::where('student_id',Auth::guard('student')->id())->latest()->first();
            if ($activity && !empty($activity->logout_time)) {
                $activity = new Activity();
                $activity->student_id = Auth::guard('student')->id();
                $activity->login_time = Carbon::now('Asia/Dhaka');
                $activity->save();
            }
            return view('student.home');
        }
    }

    //For Logging Out The User
    public function logout()
    {
        if(Auth::guard('student')->check())
        {
            $activity =Activity::where('student_id',Auth::guard('student')->id())->latest()->first();
            $activity->logout_time   = Carbon::now('Asia/Dhaka');
            $activity->save();
            Auth::guard('student')->logout();
        }
        else
            Auth::guard('admin')->logout();

        return redirect('/login');
    }
}
