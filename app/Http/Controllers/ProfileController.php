<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\Password;
use App\Admin;
use App\Student;
use App\Department;
use Auth;
use Hash;
use Toastr;
use Carbon\Carbon;

class ProfileController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin,student');
    }

    public function show($id)
    {
        if (Auth::guard('admin')->check())
            $user = Admin::find($id);
        else
            $user = Student::find($id);
        return view('profiles.show', compact('user'));
    }

    public function edit($id)
    {
        $departments = '';
        if (Auth::guard('admin')->check())
            $user = Admin::find($id);
        else {
            $user = Student::find($id);
            foreach ($user->departments as $key => $department)
                $ids[] = $department->id;
            $departments = Department::whereNotIn('id', $ids)->get();
        }
        return view('profiles.edit', compact('user', 'departments'));
    }

    public function update(Request $request, $id)
    {
        $min = Carbon::now()->subYear(15);
        if (Auth::guard('student')->check()) {
            $request->validate([
                'name'      => 'required',
                'username'  => 'required|unique:students,username,' . $id,
                'email'     => 'required|unique:students,email,' . $id,
                'phone'     => 'required|regex:/\+?(880)?01[3456789][0-9]{8}\b/|max:14|min:11|unique:students,phone,' . $id,
                'gender'    => 'required',
                'dob'       => "required|before:$min",
                'address'   => 'required',
                'id'        => 'required'
            ]);
        } else {
            $request->validate([
                'name' => 'required',
                'username' => 'required|unique:admins,username,' . $id,
                'email' => 'required|unique:admins,email,' . $id,
            ]);
        }

        $user = Auth::guard('admin')->check() ? Admin::find($id) : Student::find($id);

        if (Auth::guard('admin')->check()) {
            $user->name     = $request->name;
            $user->username = $request->username;
            $user->email    = $request->email;
            $user->save();
        } else {
            $user->name     = $request->name;
            $user->username = $request->username;
            $user->email    = $request->email;
            $user->phone    = $request->phone;
            $user->gender   = $request->gender;
            $user->address  = $request->address;
            $user->dob      = $request->dob;
            if ($request->image) {
                $file = $request->File('image');
                $ext = $user->username . "." . $file->clientExtension();
                $file->storeAs('images/', $ext);
                $user->image = $ext;
            }
            $user->save();

            $user->departments()->sync($request->id);
        }
        Toastr::success('Your Profile is Updated successfully', 'Success!');
        return redirect('home');
    }

    public function password()
    {
        if (Auth::guard('admin')->check())
            $user = Auth::guard('admin')->user();
        else
            $user = Auth::guard('student')->user();
        return view('profiles.reset-password', compact('user'));
    }

    public function resetpassword(Password $request, $id)
    {
        if (Auth::guard('admin')->check())
            $user = Admin::find($id);
        else
            $user = Student::find($id);

        if (!Hash::check($request->old, $user->password)) {
            Toastr::error("your current password does not match with the password you provided. please try again.", "Error");
            return back();
        }

        if ($request->password) {
            if (Hash::check($request->password, $user->password)) {
                Toastr::error('Your new password is similar to your current password. Please try another password.', 'Error!');
                return back();
            }

            if (Hash::check($request->old, $user->password)) {
                $user->password = bcrypt($request->password);
                $user->save();
                Toastr::success('Your Password is changed successfully', 'Success!');
                return back();
            }

        }
    }
}
