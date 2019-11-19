<?php

namespace App\Http\Controllers;

use App\Question;
use App\Subject;
use Illuminate\Http\Request;
use App\Http\Requests\QuestionRequest;
use Toastr;
class QuestionController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin,student');
    }
    
    public function index()
    {
        $subjects=Subject::all();
        return view('questions.index',compact('subjects'));
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id)
    {
        $subject=Subject::find($id);
        return view('questions.create',compact('subject'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(QuestionRequest $request,$id)
    {
        $question=new Question;
        $question->subject_id = $id;
        $question->question = $request->question;
        if($request->option1)
            $question->option1 = $request->option1;
        if($request->option2)
            $question->option2 = $request->option2;
        if($request->option3)
            $question->option3 = $request->option3;
        if($request->option4)
            $question->option4 = $request->option4;
        $question->correct_ans = $request->correct_ans;
        $question->save();
        Toastr::success('Questions Created Succesfully','Success!');
        return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Question  $question
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $subject=Subject::find($id);
        return view('questions.show',compact('subject'));
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Question  $question
     * @return \Illuminate\Http\Response
     */
    public function edit(Question $question)
    {
        return view('questions.edit',compact('question'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Question  $question
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Question $question)
    {
        $request->validate([
            'question' =>  'required',
            'option1'  =>  'required_without_all:option2,option3,option4',
            'option2'  =>  'required_without_all:option1,option3,option4',
            'option3'  =>  'required_without_all:option1,option2,option4',
            'option4'  =>  'required_without_all:option1,option3,option2',
        ]);
        $question->question = $request->question;
        if($request->option1)
            $question->option1 = $request->option1;
        if($request->option2)
            $question->option2 = $request->option2;
        if($request->option3)
            $question->option3 = $request->option3;
        if($request->option4)
            $question->option4 = $request->option4;
        $question->correct_ans = $request->correct_ans;
        $question->save();
        Toastr::success('Question Updated Succesfully','Success!');
        return redirect('questions/'.$question->subject_id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Question  $question
     * @return \Illuminate\Http\Response
     */
    public function destroy(Question $question)
    {
        $question->delete();
        Toastr::success('Question deleted Succesfully','Success!');
        return back();
    }
}
