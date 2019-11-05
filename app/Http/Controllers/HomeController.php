<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use Toastr;
use App\Department;
use App\Student;
use App\Http\Requests\Register;
use App\verifyStudent;
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
     //Show RegistrationForm
    public function registerForm()
    {
        $departments=Department::all();
        return view('home.register',compact('departments'));
    }
    public function create(Register $request)
    {
        //Registering Students
        $student=new Student;
        $student->name = $request->input('name');
        $student->username = $request->input('username');
        $student->email = $request->input('email');
        $student->password = bcrypt($request->input('password'));
        $student->gender = $request->input('gender');
        $student->phone = $request->input('phone');
        $student->save();

        //Saving Departments to Students
        $student->departments()->attach($request->id);

        //Generating a Token for Student
        $verifyUser = VerifyStudent::create([
        'student_id' => $student->id,
        'token' => sha1(time())
            ]);
        //Sending Mail to Student
        \Mail::to($student->email)->send(new VerifyMail($student));
        return $student;
    }
    public function verifyStudent($token)
    {
        $verifyStudent = VerifyStudent::where('token', $token)->first();
  if(isset($verifyStudent) )
  {
    $student = $verifyStudent->student;
    if(!$student->verified)
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
public function authenticated(Request $request, $student)
{
  if (!$student->verified) {
    auth()->logout();
    return back()->with('warning', 'You need to confirm your account. We have sent you an activation code, please check your email.');
  }
  return redirect()->intended($this->redirectPath());
}

}
