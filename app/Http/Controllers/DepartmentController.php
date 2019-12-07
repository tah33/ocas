<?php

namespace App\Http\Controllers;

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
        $departments = Department::all();
        return view('departments.index', compact('departments'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $subjects = Subject::all();
        return view('departments.create', compact('subjects'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(DepartmentRequest $request)
    {
        $department = new Department;
        $department->name = $request->name;
        $department->minimum = $request->minimum;
        $department->slug = $request->slug;
        $department->subject_id = $request->subject_id;
        $department->range = $request->range;
        if ($request->logo) {
            $file = $request->File('logo');
            $ext = ($department->slug ? $department->slug : $department->name) . "." . ($file->clientExtension());
            $file->storeAs('images/department', $ext);
            $department->logo = $ext;
        }
        $department->save();

        Toastr::success('Department is Succesfully Added', 'Success!');
        return back();
    }

    /**
     * Display the specified resource.
     *
     * @param \App\Department $department
     * @return \Illuminate\Http\Response
     */
    public function show(Department $department)
    {
        return view('departments.show', compact('department'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\Department $department
     * @return \Illuminate\Http\Response
     */
    public function edit(Department $department)
    {
        $multiplesubjects = Subject::all();
        $subjects = Subject::all();
        return view('departments.edit', compact('department', 'multiplesubjects', 'subjects'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param \App\Department $department
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|unique:departments,name,' . $id,
            'minimum' => 'required|integer|between:1,100',
            'slug' => 'nullable|string|unique:departments,slug,' . $id,
            'range' => 'nullable|integer|between:1,100|required_with:subject_id',
            'subject_id' => 'nullable|required_with:range',
        ]);
        $department                 = Department::find($id);
        $department->name           = $request->name;
        $department->minimum        = $request->minimum;
        $department->slug           = $request->slug;
        $department->subject_id     = $request->subject_id;
        $department->range          = $request->range;
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

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Department $department
     * @return \Illuminate\Http\Response
     */
    public function destroy(Department $department)
    {
        $department->delete();
        return back()->with('success', 'Department is Succesfully Deleted');
    }
}
