<?php

namespace App\Http\Controllers;

use App\Student;
use App\Department;
use Illuminate\Http\Request;
use App\Http\Requests\Register;
use App\verifyStudent;
use App\Mail\VerifyMail;
class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $students = Student::paginate(10);
        return view('student.index', compact('students'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $departments=Department::all();
        return view('student.create',compact('departments'));
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
        $student=new Student;
        $student->name = $request->name;
        $student->username = $request->username;
        $student->email = $request->email;
        $student->password = bcrypt($request->password);
        $student->gender = $request->gender;
        $student->phone = $request->phone;
        $student->address = $request->address;
        if ($request->image) {
            $file=$request->File('image');
            $ext=$student->username. "." .$file->clientExtension();
            $path = public_path(). '/images/';
            // $file->storeAs('images/',$ext);
            $file->storeAs('images/',$ext);
            $student->image = $ext;
        }
        $student->save();

        //Saving Departments to Students
        $student->departments()->attach($request->id);

        //Generating a Token for Student
        $verifyUser = VerifyStudent::create([
        'student_id' => $student->id,
        'token' => sha1(time())
            ]);
        //Sending Mail to Student
        \Mail::to($student->email)->send(new VerifyMail($student));
        return redirect('/login')->with('info', "Email Verification Link was Sent, Please Verfiy Your mail Before Login.");
    }
 

    /**
     * Display the specified resource.
     *
     * @param  \App\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function show(Student $student)
    {
        return view('student.show',compact('student'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function edit(Student $student)
    {
        //
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
        return back();
    }

    public function blockedUsers()
    {
        $students = Student::onlyTrashed()->paginate(10);
        return view('student.blockedusers',compact('students'));
    }
    public function unblock($id)
    {
        $student = Student::withTrashed()
        ->where('id', $id)->first();
        $student->restore();
        return redirect('students');
    }
}
