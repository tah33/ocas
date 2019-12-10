<?php

namespace App\Http\Controllers;

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
        $student = Student::where('email', $request->email)->first();
        if ($student) {
            \Mail::to($student->email)->send(new VerifyMail($student));
            return back();
        } else {
            Toastr::error("Couldn't Found Any Account Associate with this Email", 'Error!');
            return back();
        }
    }

    public function edit($id)
    {
        $student = Student::find($id);
        return view('email.edit', compact('student'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'password' => 'required|confirmed|min:8'
        ]);
        $student = Student::find($id);

        if ($request->password) {
            if (Hash::check($request->password, $student->password)) {
                Toastr::error('Your new password is similar to your current password. Please try another password.', 'Error!');
                return back();
            }

            if (!Hash::check($request->password, $student->password)) {
                $student->password = bcrypt($request->password);
                $student->save();
                Toastr::success('Your Password is changed successfully', 'Success!');
                return redirect('login');
            }
        }
    }

    public function destroy($id)
    {
        //
    }
}
