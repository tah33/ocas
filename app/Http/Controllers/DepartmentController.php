<?php

namespace App\Http\Controllers;

use App\Department;
use App\Subject;
use App\Condition ;
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
        $departments=Department::get();
        foreach ($departments as $key => $dept) {
            if ($dept->condition) {
            $subjects=Subject::whereIn('id',$dept->condition->subject_id)->get();
            $subject=Subject::where('id',$dept->subject_id)->first();
}
        }            
        return view('departments.index',compact('departments','subjects','subject'));
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
                return back();
            }
        }
        if($request->id && $request->range)
        {
            $department->subject_id=$request->id;
            $department->range=$request->range;

        }
            $department->save();

        if($department->save() && $request->subject_id && $request->total)
        {   
            $condition = new Condition;
            $condition->subject_id=$request->subject_id;             
            $condition->department_id=$department->id;
            $condition->total=$request->total;
            $condition->save();
        }
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
