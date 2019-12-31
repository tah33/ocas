<?php

namespace App\Http\Controllers;

use App\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Mail\VerifyMail;
use App\Student;
use Toastr;
use Hash;

class EmailController extends Controller
{

    public function store(Request $request)
    {
        $email = $request->email;
        if ($request->email) {
            \Mail::to($request->email)->send(new VerifyMail($email));
            Toastr::success("Password Reset link has been sent, check your email", 'Success!');
        }

        else {
            Toastr::error("Couldn't Found Any Account Associate with this Email", 'Error!');
        }
        return back();
    }

    public function edit($email)
    {
        $user = Student::where('email',$email)->first();
        if(!$user){
            $user = Admin::where('email',$email)->first();
        }
        return view('email.edit', compact('user'));
    }

    public function update(Request $request, $email)
    {
        $request->validate([
            'password' => 'required|confirmed|min:8'
        ]);
        $user = Student::where('email',$email)->first();
        if(!$user)
            $user = Admin::where('email',$email)->first();

        if ($request->password) {
            if (Hash::check($request->password, $user->password)) {
                Toastr::error('Your new password is similar to your current password. Please try another password.', 'Error!');
                return back();
            }

            if (!Hash::check($request->password, $user->password)) {
                $user->password = bcrypt($request->password);
                $user->save();
                Toastr::success('Your Password is changed successfully, You can now login', 'Success!');
                return redirect('login');
            }
        }
    }

    public function destroy($id)
    {
        //
    }
}
