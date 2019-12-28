<?php

namespace App\Http\Controllers;

use App\Common;
use App\Department;
use App\Subject;
use App\Condition;
use App\Question;
use App\Http\Requests\DepartmentRequest;
use Illuminate\Http\Request;
use Toastr;

class DepartmentController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin,student');
    }

    public function index()
    {
        $title = "Departments List";

        $departments = Department::all();
        return view('departments.index', compact('departments','title'));
    }

    public function create()
    {
        $this->authorize('create',Department::class);
        $title = "Create Departments";

        $subjects = Subject::all();
        return view('departments.create', compact('subjects','title'));
    }

    public function store(DepartmentRequest $request)
    {
        $department             = new Department;
        $department->name       = $request->name;
        $department->minimum    = $request->minimum;
        $department->slug       = $request->slug;
        $department->subject_id = $request->subject_id;
        $department->marks      = $request->range;
        $department->scope      = $request->scope;
        $department->save();

        Toastr::success('Department is Succesfully Added', 'Success!');
        return back();
    }

    public function show(Department $department)
    {
       // $this->authorize('view',Department::class);
        $title = $department->slug ? $department->slug : $department->name;

        return view('departments.show', compact('department','title'));
    }

    public function edit(Department $department)
    {
        $this->authorize('update',Department::class);
        $title = " Edit info";

        $multiplesubjects = Subject::all();
        $subjects = Subject::all();
        return view('departments.edit', compact('department', 'multiplesubjects', 'subjects','title'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|unique:departments,name,' . $id,
            'minimum' => 'required|integer|between:1,100',
            'slug' => 'nullable|string|unique:departments,slug,' . $id,
            'range' => 'required',
            'subject_id' => 'required',
        ]);
        $department                 = Department::find($id);
        $department->name           = $request->name;
        $department->minimum        = $request->minimum;
        $department->slug           = $request->slug;
        $department->subject_id     = $request->subject_id;
        $department->marks          = $request->range;
        $department->scope          = $request->scope;

        if ($request->logo) {
            $file   = $request->File('logo');
            $ext    = ($department->slug ? $department->slug : $department->name).".".($file->getClientOriginalExtension());
            $file->storeAs('images/department', $ext);
            $department->logo = $ext;
        }
        $department->save();
        Toastr::success('Department is Succesfully Updated', 'Success!');
        return redirect('departments');
    }

    public function destroy(Department $department)
    {
        $department->delete();
        return back()->with('success', 'Department is Succesfully Deleted');
    }
}
