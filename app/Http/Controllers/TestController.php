<?php

namespace App\Http\Controllers;

use App\Test;
use App\Student;
use App\Question;
use App\Department;
use Auth;
use Illuminate\Http\Request;

class TestController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin,student');
    }
    
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $questions='';
        $student=Student::find(Auth::id());
        $majorSubjects=[];
        foreach ($student->departments as $key => $department){
                $majorSubjects[] =$department->subject_id; 
                $names[] =$department->name; 
            }
        $departments=Department::where('subject_id','=',null)->whereHas('students',function($student){
            $student->where('students.id',Auth::id());
        })->get();
        if (!empty($majorSubjects)) {
            $question=Question::whereIn('subject_id',$majorSubjects)->get()->random(25);
        }
        return view('tests.create',compact('questions'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Test  $test
     * @return \Illuminate\Http\Response
     */
    public function show(Test $test)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Test  $test
     * @return \Illuminate\Http\Response
     */
    public function edit(Test $test)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Test  $test
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Test $test)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Test  $test
     * @return \Illuminate\Http\Response
     */
    public function destroy(Test $test)
    {
        //
    }
}
