<?php

namespace App\Http\Controllers;

use App\Test;
use App\Student;
use App\Question;
use App\Subject;
use App\Common;
use App\Rank;
use App\Exam;
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

    public function create(Request $request)
    {
        $subjects='';$majorSubjects=[];

        foreach (Auth::guard('student')->user()->departments as $key => $department){
                $majorSubjects[] =$department->subject_id;
            }
        $filter=array_filter($majorSubjects);

        $sub=$add=0;

        $no_of_questions = 100;
        if (count($filter) > 1){
            $uniqueSubjects=array_unique($filter);
            $div = ceil($no_of_questions/count($uniqueSubjects));//34
            $mul = $div*count($uniqueSubjects);//34*3 = 102

            if ($mul > $no_of_questions)
                $sub = $mul - $no_of_questions; //102-100
                else
                    $add = $no_of_questions - $mul; //100-96 = 4

            $majors=Subject::whereIn('id',$filter)->get();
            $commons=Common::all();
            }
        else
            $div=$no_of_questions;

        return view('tests.create',compact('majors','div','sub','add','commons'));
    }

    public function store(Request $request)
    {
        $count=$common=0;

        $exam = Exam::first();

        foreach ($request->major as $key => $major) {
            $question = Question::where('id',$key)->where('correct_ans',$major)->first();
            if ($question){
                $count++;
            }
        }

        foreach ($request->common as $key => $common) {
            $question = Question::where('id',$key)->where('correct_ans',$common)->first();
            if ($question){
                $common++;
            }
        }

        $test = new Test;
        $test->student_id = Auth::id();
        $test->ans = $request->major;
        $test->marks = ($count/$exam->major)*100;
        $test->common = $request->common;
        $test->common_marks = ($common/$exam->common)*100;
        $test->save();

        $student=Student::find(Auth::id());
        $mark=0;
        foreach ($student->departments as $key => $department){
                $majorSubjects[] =$department->subject_id;
            }
        $filter=array_filter($majorSubjects);

        $sub=$add=0;

        if (count($filter) > 1){
            $uniqueSubjects=array_unique($filter);
            $div = ceil($exam->major/count($uniqueSubjects));
            $mul = $div*count($uniqueSubjects);

            if ($mul > $exam->major)
                $sub = $mul - $exam->major;

                else
                    $add = $exam->major - $mul;
            }
        else
            $div=$exam->major;

        foreach ($student->departments as $key => $department){
                $rank = new Rank;
                $rank->subject_id = $department->subject_id;
                foreach ($request->major as $key => $value) {
                $correct = Question::where('id',$key)->where('correct_ans',$value)->first();
                if ($correct && $correct->subject_id == $department->subject_id){
                    $mark++;
                }
            }

                $markpercentage = ($mark* ($add == 0 ? $div-$sub : $div+$add))/100 ;
                $rank->test_id = $test->id;
                $rank->marks = $markpercentage;
                $rank->save();
                $mark=0;
                $add = 0;
                $sub =0 ;
                }
        $commons = Common::all();
        foreach ($commons as $key => $common){
                $rank = new Rank;
                $rank->subject_id = $common->subject_id;
                    foreach ($request->common as $key => $value) {
                    $correct = Question::where('id',$key)->where('correct_ans',$value)->first();
                    if ($correct && $correct->subject_id == $common->subject_id){
                        $correct_ans++;
                    }
                }
    
                    $markpercentage = ($mark* ($add == 0 ? $div-$sub : $div+$add))/100 ;
                    $rank->test_id = $test->id;
                    $rank->marks = ($correct_ans * )100;
                    $rank->save();
                    $mark=0;
                    $add = 0;
                    $sub =0 ;
                    }

        Toastr::success('Your answer was succesfully submitted','Success!');
        return back();
    }

    public function show(Test $test)
    {
        //
    }

    public function edit(Test $test)
    {
        //
    }

    public function update(Request $request, Test $test)
    {
        //
    }

    public function destroy(Test $test)
    {
        //
    }

}
