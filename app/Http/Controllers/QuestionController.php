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
        $title = "Pick Subject";

        $this->authorize('viewAny',Question::class);

        $subjects=Subject::all();
        return view('questions.index',compact('subjects','title'));
    }

    public function create($id)
    {
        $this->authorize('create',Question::class);
        $title = "Add Question";

        $subject=Subject::find($id);
        return view('questions.create',compact('subject','title'));
    }

    public function store(QuestionRequest $request,$id)
    {
        $question=new Question;
        $question->subject_id   = $id;
        $question->question     = $request->question;
        if($request->option1)
            $question->option1  = $request->option1;
        if($request->option2)
            $question->option2  = $request->option2;
        if($request->option3)
            $question->option3  = $request->option3;
        if($request->option4)
            $question->option4  = $request->option4;
        $question->correct_ans  = $request->correct_ans;
        $question->save();
        Toastr::success('Questions Created Succesfully','Success!');
        return back();
    }

    public function show($id)
    {
        $this->authorize('view',Question::class);

        $subject=Subject::find($id);
        $title = $subject->name;

        return view('questions.show',compact('subject','title'));
    }

    public function edit(Question $question)
    {
        $this->authorize('update',Question::class);
        $title = "Edit Question";

        return view('questions.edit',compact('question','title'));
    }

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

    public function destroy(Question $question)
    {
        $question->delete();
        Toastr::success('Question deleted Succesfully','Success!');
        return back();
    }
}
