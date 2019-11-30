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
        $departments=Department::all();        
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
      /*  if ($request->range && $request->total) {
            $exceed=$request->range + $request->total;
            if ($exceed > 100) {
                Toastr::error('Total Number Cannot Exceed 100','Error!');
                return back();
            }
        }*/
            $department->subject_id  =$request->subject_id;
            $department->range       =$request->range;
            // $department->subjects    =$request->subject_id;             
            // $department->total       =$request->total;
            $department->save();

        Toastr::success('Department is Succesfully Added','Success!');
        return back(); 
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Department  $department
     * @return \Illuminate\Http\Response
     */
    public function show(Department $department)
    {
       /* if ($department->subjects)
            $subjects=Subject::whereIn('id',$department->subjects)->get();*/
        return view('departments.show',compact('department'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Department  $department
     * @return \Illuminate\Http\Response
     */
    public function edit(Department $department)
    {
        $multiplesubjects=Subject::all();
       /* if ($department->subjects)
            $selectedsubjects=Subject::whereIn('id',$department->subjects)->get();*/
        $subjects=Subject::all();
        return view('departments.edit',compact('department','multiplesubjects','subjects'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Department  $department
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|unique:departments,name,'.$id,
            'minimum' => 'required|integer|between:1,100',
            'slug' => 'nullable|string|unique:departments,slug,'.$id,
            // 'id' => 'nullable|required_with:range',
            'range' => 'nullable|integer|between:1,100|required_with:subject_id',
            'subject_id' => 'nullable|required_with:range',
            // 'total' => 'nullable|integer|between:1,100|required_with:subject_id',
        ]);
        $department=Department::find($id);
        $department->name=$request->name;
        $department->minimum=$request->minimum;
        $department->slug=$request->slug;
      /*  if ($request->range && $request->total) {
            $exceed=$request->range + $request->total;
            if ($exceed > 100) {
                return back()->with('error',"Total Marks Cannot be exceed 100");
            }
        }*/
            $department->subject_id=$request->subject_id;
            $department->range=$request->range;
        /*    $department->subjects=$request->subject_id;             
            $department->total=$request->total;*/
            $department->save();
        Toastr::success('Department is Succesfully Updated','Success!');
        return redirect('departments');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Department  $department
     * @return \Illuminate\Http\Response
     */
    public function destroy(Department $department)
    {
        $department->delete();
        return back()->with('success','Department is Succesfully Deleted');
    }
}
