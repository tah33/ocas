<?php

namespace App\Http\Controllers;

use App\Admin;
use App\Http\Requests\AdminRequest;
use App\Mail\AccountConfirmation;
use App\Question;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Str;
use Toastr;
use Auth;
class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin,student');
    }

    public function index()
    {
        $title ='Admin List';
        $admins = Admin::all()->except(Auth::guard('admin')->id());
        return view('admin.index',compact('admins','title'));
    }

    public function create()
    {
        $title = 'Create Admin';
        return view('admin.create',compact('title'));
    }

    public function store(AdminRequest $request)
    {
        $password=Str::random(5);
        $admin = new Admin();
        $admin->name = $request->name;
        $admin->username = $request->username;
        $admin->email = $request->email;
        $admin->password = bcrypt($password);
        $admin->save();
        $array=['password' => $password, 'email' =>$admin->email];
        \Mail::to($request->email)->send(new AccountConfirmation($array));
        Toastr::success('Accounts Has been created and Email has been sent with credentials','Success!');
        return back();
    }

    public function show(Admin $admin)
    {
        $title = 'Admin Profile';
        return view('admin.show',compact('admin','title'));
    }

    public function edit(Admin $admin)
    {
        //
    }

    public function update(Request $request, Admin $admin)
    {
        //
    }

    public function destroy(Admin $admin)
    {
        //
    }
}
