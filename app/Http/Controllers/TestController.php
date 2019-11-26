<?php

namespace App\Http\Controllers;

use App\Test;
use App\Student;
use App\Question;
use App\Subject;
use App\Answer;
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
    public function create(Request $request)
    {
        $subjects=$given='';
       /* $ans = Answer::where('student_id',Auth::id())->latest()->first();
        if ($ans && $request->ans) {
             $ans->given_ans = $request->ans;
             $ans->save();
         } 
         else{
            if ($request->ans) {
                $given = new Answer;
                $given->student_id = Auth::id();
                $given->given_ans = $request->ans;
                $given->save();
            }
         }*/
        $student=Student::find(Auth::id());
        $majorSubjects=[];
        foreach ($student->departments as $key => $department){
                $majorSubjects[] =$department->subject_id; //1,4
                $ranges[] =$department->range;//EG.ICT=40,MATH=50 
            }
        if (count($majorSubjects) > 0){
            $div = array_sum($ranges)/count($majorSubjects);//45
            $count=$div/100;//0.45*50
            $result=$count*$department->range;//22.5
            $subjects=Subject::whereIn('id',$majorSubjects)->get();
            }
        else
            $div=array_sum($ranges);
        return view('tests.create',compact('subjects','div','given','majorSubjects'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        dd($request->ans);
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
