<?php

namespace App\Http\Controllers;

use App\Exam;
use Toastr;;
use Illuminate\Http\Request;

class ExamController extends Controller
{
    public function __construct()
    {
        $this->middleware(['auth:admin,student','can:before,App\Exam']);
    }

    public function index()
    {

    }

    public function create()
    {
        $title = "Set Exam Rule";

        $exam = Exam::first();
        return view('exams.create',compact('exam','title'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'major' => 'required',
            'common' => 'required',
            'time' => 'required'
        ]);
        $exam = Exam::first();
        if($exam)
        {
            $exam->major    = $request->major;
            $exam->common   = $request->common;
            $exam->time     = $request->time;
            $exam->save();
            Toastr::success('success','Exam Rule was Updated Successfully');
            return back();
        }
       else {
           $exam = new Exam;
           $exam->major = $request->major;
           $exam->common = $request->common;
           $exam->time = $request->time;
           $exam->save();
           Toastr::success('success', 'Rule was Created Successfully');
           return back();
       }
    }

    public function show(Exam $exam)
    {
        //
    }

    public function edit(Exam $exam)
    {
        //
    }

    public function update(Request $request, Exam $exam)
    {
        //
    }

    public function destroy(Exam $exam)
    {
        //
    }
}
