<?php

namespace App\Http\Controllers;

use App\Department;
use App\Http\Requests\Register;
use App\Mail\VerifyMail;
use App\Student;
use App\verifyStudent;
use Illuminate\Http\Request;
use Toastr;
class StudentController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin,student')->except('create','store');
    }
    
    public function index()
    {
        $students = Student::all();
        return view('student.index', compact('students'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $departments = Department::all();
        return view('student.create', compact('departments'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Register $request)
    {
        //Registering Students
        $student           = new Student;
        $student->name     = $request->name;
        $student->username = $request->username;
        $student->email    = $request->email;
        $student->password = bcrypt($request->password);
        $student->gender   = $request->gender;
        $student->phone    = $request->phone;
        $student->address  = $request->address;
        $student->dob      = $request->dob;
        $student->save();
        //Saving Departments to Students
        $student->departments()->attach($request->id);
        // //Generating a Token for Student
        // $verifyUser = VerifyStudent::create([
        //     'student_id' => $student->id,
        //     'token'      => sha1(time()),
        // ]);
        // //Sending Mail to Student
        // \Mail::to($student->email)->send(new VerifyMail($student));
        Toastr::success('Registration Succesfull, You can now Login','Succes!');
        return redirect('/login');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function show(Student $student)
    {
        return view('student.show', compact('student'));
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Student $student)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function destroy(Student $student)
    {
        $student->delete();
        Toastr::succees('Students deleted Succesfully','Success!');
        return back();
    }

    public function blockedUsers()
    {
        $students = Student::onlyTrashed()->all();
        return view('student.blockedusers', compact('students'));
    }
    public function unblock($id)
    {
        $student = Student::withTrashed()
            ->where('id', $id)->first();
        $student->restore();
        Toastr::succees('Students Unblocked Succesfully','Success!');
        return redirect('students');
    }
}
