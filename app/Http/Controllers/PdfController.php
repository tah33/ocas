<?php

namespace App\Http\Controllers;

use App\Activity;
use App\Department;
use App\Exam;
use App\Http\Controllers\Controller;
use App\Question;
use App\Student;
use App\Subject;
use App\Test;
use Carbon\Carbon;
use PDF;
use Illuminate\Http\Request;

class PdfController extends Controller
{

    public function viewStudents()
    {
        $customPaper = array(0, 0, 792.00, 1300.00);
        $students = Student::all();
        $date = date('Y-M-d');
        $pdf = PDF::loadView('pdf.students', compact('students'))->setPaper($customPaper, 'landscape');
        return $pdf->stream("students-{$date}.pdf");
    }

    public function downloadStudents()
    {
        $customPaper = array(0, 0, 792.00, 1300.00);
        $students = Student::all();
        $date = date('Y-M-d');
        $pdf = PDF::loadView('pdf.students', compact('students'))->setPaper($customPaper, 'landscape');
        return $pdf->download("students-{$date}.pdf");
    }

    public function viewBlockedStudents()
    {
        $customPaper = array(0, 0, 792.00, 1300.00);
        $students = Student::onlyTrashed()->get();
        $date = date('Y-M-d');
        $pdf = PDF::loadView('pdf.students', compact('students'))->setPaper($customPaper, 'landscape');
        return $pdf->stream("students-{$date}.pdf");
    }

    public function downloadBlockedStudents()
    {
        $customPaper = array(0, 0, 792.00, 1300.00);
        $students = Student::onlyTrashed()->get();
        $date = date('Y-M-d');
        $pdf = PDF::loadView('pdf.students', compact('students'))->setPaper($customPaper, 'landscape');
        return $pdf->download("students-{$date}.pdf");
    }

    public function viewdepartment()
    {
        $departments = Department::all();
        $date = date('Y-M-d');
        $pdf = PDF::loadView('pdf.department', compact('departments'));
        return $pdf->stream("departments-{$date}.pdf");
    }

    public function downloaddepartment()
    {
        $departments = Department::all();
        $date = date('Y-M-d');
        $pdf = PDF::loadView('pdf.department', compact('departments'));
        return $pdf->download("departments-{$date}.pdf");
    }

    public function viewSubject()
    {
        $customPaper = array(0, 0, 792.00, 1300.00);
        $subjects = Subject::all();
        $date = date('Y-M-d');
        $pdf = PDF::loadView('pdf.subject', compact('subjects'));
        return $pdf->stream("subjects-{$date}.pdf");
    }

    public function downloadSubject()
    {
        $subjects = Subject::all();
        $date = date('Y-M-d');
        $pdf = PDF::loadView('pdf.subject', compact('subjects'));
        return $pdf->download("subjects-{$date}.pdf");
    }

    public function viewQuestion($id)
    {
        $customPaper = array(0, 0, 792.00, 1300.00);
        $subject = Subject::find($id);
        $date = date('Y-M-d');
        $pdf = PDF::loadView('pdf.question', compact('subject'))->setPaper($customPaper, 'landscape');
        return $pdf->stream("{$subject->name}-questions-{$date}.pdf");
    }

    public function downloadQuestion($id)
    {
        $customPaper = array(0, 0, 792.00, 1300.00);
        $subject = Subject::find($id);
        $date = date('Y-M-d');
        $pdf = PDF::loadView('pdf.question', compact('subject'))->setPaper($customPaper, 'landscape');
        return $pdf->download("{$subject->name}-questions-{$date}.pdf");
    }

    public function viewTest()
    {
        $customPaper = array(0, 0, 792.00, 1300.00);
        $tests = Test::all();
        $exam = Exam::first();
        $date = date('Y-M-d');
        $pdf = PDF::loadView('pdf.tests', compact('tests','exam'));
        return $pdf->stream("tests-{$date}.pdf");
    }

    public function particularTest(Request $request)
    {
        $request->validate([
            'start_date' => 'required',
            'end_date' => 'nullable|after:start_date',
        ]);
        $end_date = $request->end_date; 
        if (! $end_date)
            $tests = Test::whereDate('created_at',$request->start_date)->get();
        else
            $tests = Test::whereDate('created_at','>=', $request->start_date)->whereDate('created_at','<=',$request->end_date)->get();
        $exam = Exam::first();
        $date = date('Y-M-d');
        $pdf = PDF::loadView('pdf.particular-tests', compact('tests','exam','end_date'));
        return $pdf->stream("tests-{$date}.pdf");
    }

    public function downloadTest()
    {
        $customPaper = array(0, 0, 792.00, 1300.00);
        $tests = Test::all();
        $date = date('Y-M-d');
        $exam = Exam::first();
        $pdf = PDF::loadView('pdf.tests', compact('tests','exam'));
        return $pdf->download("tests-{$date}.pdf");
    }

    public function viewRank($id)
    {
        $customPaper = array(0, 0, 792.00, 1300.00);

        $questions =$answers=$questions = [];
        $test = Test::find($id);
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
        $date = date('Y-M-d');
        $pdf = PDF::loadView('pdf.tests', compact('test','questions','common_questions'))->setPaper($customPaper, 'landscape');
        return $pdf->stream("test-{$date}.pdf");
    }

    public function downloadRank($id)
    {
        $customPaper = array(0, 0, 792.00, 1300.00);

        $questions =$answers=$questions = [];
        $test = Test::find($id);
        $answers  = $test->answer;

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

        $questions = collect($questions);
        $date = date('Y-M-d');
        $pdf = PDF::loadView('pdf.tests', compact('test','questions'))->setPaper($customPaper, 'landscape');
        return $pdf->download("test-{$date}.pdf");
    }

    public function viewActivity($created_at,$student_id)
    {
        $customPaper = array(0, 0, 792.00, 1300.00);
        $activities = Activity::where('student_id',$student_id)->whereDate('created_at',Carbon::parse($created_at))->get();
        $tests = Test::where('student_id',$student_id)->get();
        $exam = Exam::first();
        $date = date('Y-M-d');
        $pdf = PDF::loadView('pdf.activities', compact('activities','tests','exam'));
        return $pdf->stream("activities-{$activities->first()->student->username}.pdf");
    }

    public function downloadActivity($created_at,$student_id)
    {
        $activities = Activity::whereDate('created_at',Carbon::parse($created_at))->where('student_id',$student_id)->get();
        $tests = Test::where('student_id',$student_id)->whereDate('created_at',Carbon::parse($created_at))->get();
        $exam = Exam::first();
        $date = date('Y-M-d');
        $pdf = PDF::loadView('pdf.activities', compact('activities','tests','exam'));
        return $pdf->download("activities-{$activities->first()->student->username}.pdf");
    }

    public function viewActivities($student_id)
    {
        $customPaper = array(0, 0, 792.00, 1300.00);
        $activities = Activity::where('student_id',$student_id)->get();
        $tests = Test::where('student_id',$student_id)->get();
        $exam = Exam::first();
        $date = date('Y-M-d');
        $pdf = PDF::loadView('pdf.activities', compact('activities','tests','exam'));
        return $pdf->stream("activities-{$activities->first()->student->username}.pdf");
    }

    public function downloadActivities($student_id)
    {
        $activities = Activity::where('student_id',$student_id)->get();
        $tests = Test::where('student_id',$student_id)->get();
        $exam = Exam::first();
        $date = date('Y-M-d');
        $pdf = PDF::loadView('pdf.activities', compact('activities','tests','exam'));
        return $pdf->download("activities-{$activities->first()->student->username}.pdf");
    }

    public function particularActivity(Request $request)
    {
                $request->validate([
            'start_date' => 'required',
            'end_date' => 'nullable|after:start_date',
        ]);
        $end_date = $request->end_date; 
        if (! $end_date)
            $activities = Activity::whereDate('created_at',$request->start_date)->get();
        else
            $activities = Activity::whereDate('created_at','>=', $request->start_date)->whereDate('created_at','<=',$request->end_date)->get();
        if (! $end_date)
            $tests = Test::whereDate('created_at',$request->start_date)->get();
        else
            $tests = Test::whereDate('created_at','>=', $request->start_date)->whereDate('created_at','<=',$request->end_date)->get();
        $exam = Exam::first();
        $date = date('Y-M-d');
        $pdf = PDF::loadView('pdf.all-activities', compact('activities','tests','exam','end_date'));
        return $pdf->stream("activities-{$activities->first()->student->username}.pdf");
    }
}
