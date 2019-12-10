<?php

namespace App\Http\Controllers;

use App\Subject;
use Illuminate\Http\Request;
use Toastr;
class SubjectController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin,student');
    }

    public function index()
    {
        $subjects = Subject::all();
        return view('subjects.index',compact('subjects'));
    }

    public function create()
    {
        $this->authorize('update',Subject::class);

        return view('subjects.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|alpha|unique:subjects'
        ]);
        Subject::create($request->all());
        Toastr::success('Subject Added Successfully','Success!');
        return back();
    }

    public function show(Subject $subject)
    {
        //
    }

    public function edit(Subject $subject)
    {
        $this->authorize('update',Subject::class);

        return view('subjects.edit',compact('subject'));
    }

    public function update(Request $request, Subject $subject)
    {
        $request->validate([
            'name' => 'required|alpha|unique:subjects,name,'.$subject->id
        ]);
        $subject->name = $request->name ;
        $subject->slug = $request->slug ;
        $subject->save();
        Toastr::success('Info Updated Succesfully','Success!');
        return redirect('subjects');
    }

    public function destroy(Subject $subject)
    {
        $subject->delete();
        Toastr::success('Subject Deleted Succesfully','Success!');
        return back();
    }
}
