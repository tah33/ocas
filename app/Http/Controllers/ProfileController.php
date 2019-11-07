<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Admin;
use App\Student;
use Auth;
use Hash;
class ProfileController extends Controller
{
    public function show($id)
    {
    	if(Auth::guard('admin')->check())
        	$user=Admin::find($id);
        else
        	$user=Student::find($id);
        return view('profiles.show',compact('user'));
    }
    public function edit($id)
    {
        if(Auth::guard('admin')->check())
        	$user=Admin::find($id);
        else
        	$user=Student::find($id);
        return view('profiles.edit',compact('user'));
    }
    public function update(Request $request, $id)
    {
    	if(Auth::guard('admin')->check())
    	{
        	$request->validate([
        	'name'=>'required',
        	'username'=>'required|unique:admins,username,'.$id,
        	'email'=>'required|unique:admins,email,'.$id,
    		]);
    	}
    	else{
    		$request->validate([
        	'name'=>'required',
        	'username'=>'required|unique:students,username,'.$id,
        	'email'=>'required|unique:students,email,'.$id,
            'phone' => 'required|regex:/\+?(880)?01[3456789][0-9]{8}\b/|max:14|min:11|unique:students,phone,'.$id,
        	'gender'=>'required',
        	'address'=>'required',
        	'id'=>'required',

    		]);
    	}
        $user =Auth::guard('admin')->check()? Admin::find($id) : Student::find($id);
        $user->name = $request->name;
        $user->username = $request->username;
        $user->email = $request->email;
        if(Auth::guard('student')->check())
        {
        	$user->phone = $request->phone;
        	$user->gender = $request->gender;
        	$user->address = $request->address;
        	if ($request->image)
        	{
            $file=$request->File('image');
            $ext=$file->getClientOriginalExtension();
            $filename=$user->username . '.' . $ext;
            $file->move('images/',$filename);
            $user->image=$filename;
        	}
        	$user->departments()->attach($request->id);	
		}
        $user->save();
        return redirect('home');
    }
    public function password()
    {
        if(Auth::guard('admin')->check())
            $user=Auth::guard('admin')->user();
        else
            $user=Auth::guard('student')->user();
        return view('profiles.reset-password',compact('user'));   
    }
    public function resetpassword(Request $request,$id)
    {
        $request->validate([
            'old' =>'required',
            'password' =>'required|confirmed|min:8',
        ]);
        if(Auth::guard('admin')->check())
            $user=Admin::find($id);
        else
            $user=Student::find($id);
        if($request->password){
            // $password=$request->old;
            if (Hash::check($request->old, $user->password)) {
                $user->password = bcrypt($request->password);
                $user->save();
                return back()->with("success","your Passwor is chenged Succesfully");;
            }
            else
                return back()->with("error","your current password does not match with the password you provided. please try again.");
        }
    }
}
