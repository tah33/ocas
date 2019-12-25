<?php

namespace App\Http\Controllers;

use App\Department;
use App\Exam;
use App\Http\Requests\Register;
use App\Student;
use App\Activity;
use App\Test;
use Illuminate\Http\Request;
use Toastr;

class StudentController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin,student')->except('create', 'store');
    }

    public function index()
    {
        $this->authorize('viewAny', Student::class);
        $title ="Students List";

        $students = Student::all();
        return view('student.index', compact('students','title'));
    }

    public function create()
    {
        $departments = Department::all();
        return view('student.create', compact('departments'));
    }

    public function store(Register $request)
    {
        //Registering Students
        $student            = new Student;
        $student->name      = $request->name;
        $student->username  = $request->username;
        $student->email     = $request->email;
        $student->password  = bcrypt($request->password);
        $student->gender    = $request->gender;
        $student->phone     = $request->phone;
        $student->address   = $request->address;
        $student->dob       = $request->dob;
        $student->save();
        //Saving Departments to Students
        $student->departments()->attach($request->id);

        Toastr::success('Registration Successfull, You can now Login', 'Succes!');
        return redirect('/login');
    }

    public function show(Student $student)
    {
        $activities =Activity::selectRaw('*, Date(created_at) as date')
                    ->where('student_id',$student->id)->groupBy('date')->get();
        $title =$student->name."'s Info";
        return view('student.show', compact('student','activities','title'));
    }

    public function update(Request $request, Student $student)
    {
        //
    }

    public function destroy(Student $student)
    {
        $student->delete();

        Toastr::success('Students blocked Succesfully', 'Success!');
        return back();
    }

    public function blockedUsers()
    {
        $this->authorize('block', Student::class);
        $title ="Blocked Students";

        $students = Student::onlyTrashed()->get();
        return view('student.blockedusers', compact('students','title'));
    }

    public function unblock($id)
    {
        $this->authorize('unblock', Student::class);

        $student = Student::withTrashed()->where('id', $id)->first();
        $student->restore();

        Toastr::success('Students Unblocked Succesfully', 'Success!');
        return redirect('students');
    }

    public function test($id)
    {
        $title = "Students Tests";
        $tests = Test::where('student_id',$id)->get();
        return view('student.test',compact('tests','title'));
    }

    public function activity($id)
    {
        $title = "Students Activities";
        $exam = Exam::first();
        $activities = Activity::where('student_id',$id)->get();
        return view('student.activity',compact('activities','title','exam'));
    }

    public function chart()
    {
        
    }
}
