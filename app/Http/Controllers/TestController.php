<?php

namespace App\Http\Controllers;

use App\Test;
use App\Student;
use App\Question;
use App\Subject;
use App\Department;
use Auth;
use Illuminate\Http\Request;
use Toastr;
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
        $subjects='';
        $student=Student::find(Auth::id());
        $majorSubjects=[];

        foreach ($student->departments as $key => $department){
                $majorSubjects[] =$department->subject_id;
            }
        $filter=array_filter($majorSubjects);

        $sub=0;
        $no_of_questions = 100;

        if (count($filter) > 1){
            $uniqueSubjects=array_unique($filter);
            $div = ceil($no_of_questions/count($uniqueSubjects));
            $mul = $div*count($uniqueSubjects);

            if ($mul > $no_of_questions) {
                $sub = $mul - $no_of_questions; 
            }
            $subjects=Subject::whereIn('id',$filter)->get();
            }
        else
            $div=$no_of_questions/2;

        return view('tests.create',compact('subjects','div','sub'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $count=0;
        foreach ($request->ans as $key => $ans) {
            $question = Question::where('id',$key)->where('correct_ans',$ans)->first();
            if ($question)
                $count++;
        }
        $test = new Test;
        $test->student_id = Auth::id();
        $test->ans = $request->ans;
        $test->marks = $count;
        $test->save();
        Toastr::success('Your answer was succesfully submitted','Success!');
        return back();
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
