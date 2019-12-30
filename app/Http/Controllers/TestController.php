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
        $title ="Given Tests";
        $tests = Test::all();
        return view('tests.index',compact('tests','title'));
    }

    public function rules()
    {
        $title = 'Rules for Tests';
        $exam = Exam::first();
        $commons = Common::all();
        return view('tests.rules',compact('title','exam','commons'));
    }

    public function create(Request $request)
    {
        $title ="Test Area";

        $this->authorize('create', Test::class);

        $subjects = '';
        $majorSubjects = [];

        $exam = Exam::first();

        foreach (Auth::guard('student')->user()->departments as $key => $department) {
            $majorSubjects[] = $department->subject_id;
        }
        $filter = array_filter($majorSubjects);
        $majors = Subject::whereIn('id', $filter)->get();

        $sub = $add = 0;

        if (count($filter) > 1) {
            $uniqueSubjects = array_unique($filter);
            $div            = ceil($exam->major / count($uniqueSubjects));
            $mul            = $div * count($uniqueSubjects);

            if ($mul > $exam->major)
                $sub = $mul - $exam->major;
            else
                $add = $exam->major - $mul;
        } else
            $div = $exam->major;

        $less = $greater = 0;

        $commons    = Common::all();
        $divide     = ceil($exam->common / count($commons));
        $multiple   = $divide * count($commons);

        if ($multiple > $exam->common)
            $less    = $multiple - $exam->common;
        else
            $greater = $exam->common - $multiple;

        return view('tests.create', compact('majors', 'div', 'sub', 'add', 'commons', 'less', 'greater','divide','title','exam'));
    }

    public function store(Request $request)
    {
        $count = $common_marks = 0;

        $exam = Exam::first();
        if($request->major) {
            foreach ($request->major as $key => $major) {
                $question = Question::where('id', $key)->where('correct_ans', $major)->first();
                if ($question) {
                    $count++;
                }
            }
        }
        if($request->common) {
            foreach ($request->common as $key => $common) {
                $question = Question::where('id', $key)->where('correct_ans', $common)->first();
                if ($question) {
                    $common_marks++;
                }
            }
        }
        $test               = new Test;
        $test->student_id   = Auth::id();
        $test->ans          = $request->major;
        $test->marks        = ceil(($count / $exam->major) * 100);
        $test->common       = $request->common;
        $test->common_marks = ceil(($common_marks / $exam->common) * 100);
        $test->save();

        $student = Student::find(Auth::id());
        $mark = 0;
        foreach ($student->departments as $key => $department) {
            $majorSubjects[] = $department->subject_id;
        }
        $filter = array_filter($majorSubjects);

        $sub = $add = 0;

        if (count($filter) > 1) {
            $uniqueSubjects = array_unique($filter);
            $div = ceil($exam->major / count($uniqueSubjects));
            $mul = $div * count($uniqueSubjects);

            if ($mul > $exam->major)
                $sub = $mul - $exam->major;

            else
                $add = $exam->major - $mul;
        }
        else
            $div = $exam->major;

        foreach ($student->departments as $key => $department) {
            if ($request->major) {
                foreach ($request->major as $key => $value) {
                    $correct = Question::where('id', $key)->where('correct_ans', $value)->first();
                    if ($correct && $correct->subject_id == $department->subject_id) {
                        $mark++;
                    }
                }
            }
            $rank               = new Rank;
            $rank->subject_id   = $department->subject_id;
            $rank->test_id      = $test->id;
            $rank->marks        = ($mark * 100) /($add == 0 ? $div - $sub : $div + $add);
            $rank->save();
            $mark               = 0;
            $add                = 0;
            $sub                = 0;
        }

        $greater = $less = $correct_ans = 0;
        $commons = Common::all();
        if (count($commons) > 1) {
            $divide         = ceil($exam->common / count($commons));
            $multiple       = $divide * count($commons);

            if ($multiple > $exam->common)
                $less       = $multiple - $exam->common;
            else
                $greater    = $exam->common - $multiple;
        } else
            $divide = $exam->common;
        if ($request->common) {
            foreach ($commons as $key => $common) {
                    foreach ($request->common as $key => $value) {
                        $correct = Question::where('id', $key)->where('correct_ans', $value)->first();
                        if ($correct && $correct->subject_id == $common->subject_id) {
                            $correct_ans++;
                        }
                    }
                $rank = new Rank;
                $rank->subject_id = $common->subject_id;
                $rank->test_id = $test->id;
                $rank->marks = (100 * $correct_ans) / ($greater == 0 ? $divide - $less : $divide + $greater);
                $rank->save();
                $correct_ans = 0;
                $greater = 0;
                $less = 0;
            }
        }

        Toastr::success('Your answer was succesfully submitted', 'Success!');
        return redirect("advise/$test->id");
    }

    public function show(Test $test)
    {
        $title ="Asessments";

        $questions =$common_questions= [];

        $answers  = $test->answer;
        $commons  = $test->common;

        if ($answers) {
            foreach ($answers as $key => $answer) {
                $question = Question::where('id',  $key)->first();

                if ($question) {
                    if ($answer == 'a') {
                        $questions[$key]['question_id'] = $question->id;
                        $questions[$key]['subject_id'] = $question->subject_id;
                        $questions[$key]['question'] = $question->question;
                        $questions[$key]['correct_answer'] = $question->correct_ans == 'a' ? $question->option1 : ($question->correct_ans == 'b' ? $question->option2 :
                            ($question->correct_ans == 'c' ? $question->option3 : ($question->correct_ans == 'd' ? $question->option4 : "") )) ;
                        $questions[$key]['answer'] = $question->option1;
                    } else if ($answer == 'b') {
                        $questions[$key]['question_id'] = $question->id;
                        $questions[$key]['subject_id'] = $question->subject_id;
                        $questions[$key]['question'] = $question->question;
                        $questions[$key]['correct_answer'] = $question->correct_ans == 'a' ? $question->option1 : ($question->correct_ans == 'b' ? $question->option2 :
                            ($question->correct_ans == 'c' ? $question->option3 : ($question->correct_ans == 'd' ? $question->option4 : "") )) ;
                        $questions[$key]['answer'] = $question->option2;
                    }else if ($answer == 'c') {
                        $questions[$key]['question_id'] = $question->id;
                        $questions[$key]['subject_id'] = $question->subject_id;

                        $questions[$key]['question'] = $question->question;
                        $questions[$key]['correct_answer'] =$question->correct_ans == 'a' ? $question->option1 : ($question->correct_ans == 'b' ? $question->option2 :
                            ($question->correct_ans == 'c' ? $question->option3 : ($question->correct_ans == 'd' ? $question->option4 : "") )) ;
                        $questions[$key]['answer'] = $question->option3;
                    }else if ($answer == 'd') {
                        $questions[$key]['question_id'] = $question->id;
                        $questions[$key]['subject_id'] = $question->subject_id;

                        $questions[$key]['question'] = $question->question;
                        $questions[$key]['correct_answer'] = $question->correct_ans == 'a' ? $question->option1 : ($question->correct_ans == 'b' ? $question->option2 :
                            ($question->correct_ans == 'c' ? $question->option3 : ($question->correct_ans == 'd' ? $question->option4 : "") )) ;
                        $questions[$key]['answer'] = $question->option4;
                    } else {
                        $questions[$key]['question_id'] = $question->id;
                        $questions[$key]['subject_id'] = $question->subject_id;

                        $questions[$key]['question'] = $question->question;
                        $questions[$key]['correct_answer'] = $question->correct_ans == 'a' ? $question->option1 : ($question->correct_ans == 'b' ? $question->option2 :
                            ($question->correct_ans == 'c' ? $question->option3 : ($question->correct_ans == 'd' ? $question->option4 : "") )) ;
                        $questions[$key]['answer'] = '';
                    }
                }
            }
        }

        if ($commons) {
            foreach ($commons as $key => $common) {
                $question = Question::where('id',  $key)->first();
                if ($question) {
                    if ($common == 'a') {
                        $common_questions[$key]['question_id'] = $question->id;
                        $common_questions[$key]['subject_id'] = $question->subject_id;
                        $common_questions[$key]['question'] = $question->question;
                        $common_questions[$key]['correct_answer'] = $question->correct_ans == 'a' ? $question->option1 : ($question->correct_ans == 'b' ? $question->option2 :
                            ($question->correct_ans == 'c' ? $question->option3 : ($question->correct_ans == 'd' ? $question->option4 : "") )) ;
                        $common_questions[$key]['answer'] = $question->option1;
                    } else if ($common == 'b') {
                        $common_questions[$key]['question_id'] = $question->id;
                        $common_questions[$key]['subject_id'] = $question->subject_id;
                        $common_questions[$key]['question'] = $question->question;
                        $common_questions[$key]['correct_answer'] = $question->correct_ans == 'a' ? $question->option1 : ($question->correct_ans == 'b' ? $question->option2 :
                            ($question->correct_ans == 'c' ? $question->option3 : ($question->correct_ans == 'd' ? $question->option4 : "") )) ;
                        $common_questions[$key]['answer'] = $question->option2;
                    }else if ($common == 'c') {
                        $common_questions[$key]['question_id'] = $question->id;
                        $common_questions[$key]['subject_id'] = $question->subject_id;

                        $common_questions[$key]['question'] = $question->question;
                        $common_questions[$key]['correct_answer'] =$question->correct_ans == 'a' ? $question->option1 : ($question->correct_ans == 'b' ? $question->option2 :
                            ($question->correct_ans == 'c' ? $question->option3 : ($question->correct_ans == 'd' ? $question->option4 : "") )) ;
                        $common_questions[$key]['answer'] = $question->option3;
                    }else if ($common == 'd') {
                        $common_questions[$key]['question_id'] = $question->id;
                        $common_questions[$key]['subject_id'] = $question->subject_id;

                        $common_questions[$key]['question'] = $question->question;
                        $common_questions[$key]['correct_answer'] = $question->correct_ans == 'a' ? $question->option1 : ($question->correct_ans == 'b' ? $question->option2 :
                            ($question->correct_ans == 'c' ? $question->option3 : ($question->correct_ans == 'd' ? $question->option4 : "") )) ;
                        $common_questions[$key]['answer'] = $question->option4;
                    } else {
                        $common_questions[$key]['question_id'] = $question->id;
                        $common_questions[$key]['subject_id'] = $question->subject_id;

                        $common_questions[$key]['question'] = $question->question;
                        $common_questions[$key]['correct_answer'] = $question->correct_ans == 'a' ? $question->option1 : ($question->correct_ans == 'b' ? $question->option2 :
                            ($question->correct_ans == 'c' ? $question->option3 : ($question->correct_ans == 'd' ? $question->option4 : "") )) ;
                        $common_questions[$key]['answer'] = '';
                    }
                }
            }
        }
        $questions = collect($questions);
        $common_questions = collect($common_questions);
        return view('tests.show',compact('test','questions','title','common_questions'));
    }

    public function advise($id)
    {
        $title = "Advise";
        $test = Test::find($id);
        $highest = $test->ranks->max('marks');
        $advise = $test->ranks->where('marks',$highest);
        $advise_department = Department::where('subject_id',$advise->first()->subject_id)->first();
        return view('tests.advise',compact('test','title','advise_department'));
    }
}
