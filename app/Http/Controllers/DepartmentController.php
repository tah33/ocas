<?php

namespace App\Http\Controllers;

use App\Department;
use App\Subject;
use App\Rule;
use App\Http\Requests\DepartmentRequest;
use Toastr;
class DepartmentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $departments=Department::paginate(10);
        return view('departments.index',compact('departments'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $subjects=Subject::all();
        return view('departments.create',compact('subjects'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(DepartmentRequest $request)
    {
        $department=new Department;
        $department->name=$request->name;
        $department->minimum=$request->minimum;
        $department->slug=$request->slug;
        if ($request->range && $request->total) {
            $exceed=$request->range + $request->total;
            if ($exceed > 100) {
                Toastr::error('Total Number Cannot Exceed 100 Marks','Error!');
                return back();
            }
        }
        if($request->subject_id && $request->range)
        {
            $department->save();
            $rule = new Rule;
            $rule->subject_id=$request->subject_id;
            $rule->department_id=$department->id;
            $rule->range=$request->range;
            $rule->save();
        }
        // elseif($request->id && $request->total)
        // {
        //     $rule = new Rule;
        //     $a=$request->id;
        //     $rule->subject_id=$a;
        //     $rule->department_id=$department->id;
        //     $rule->range=$request->total;
        //     $rule->save();
        // }
        Toastr::success('Department Created Successfully with its Conditions',"Success!");
        return redirect('departments');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Department  $department
     * @return \Illuminate\Http\Response
     */
    public function show(Department $department)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Department  $department
     * @return \Illuminate\Http\Response
     */
    public function edit(Department $department)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Department  $department
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Department $department)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Department  $department
     * @return \Illuminate\Http\Response
     */
    public function destroy(Department $department)
    {
        //
    }
}
