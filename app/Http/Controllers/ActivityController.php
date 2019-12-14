<?php

namespace App\Http\Controllers;

use App\Activity;
use App\Test;
use App\Exam;
use Illuminate\Http\Request;
use DB;
class ActivityController extends Controller
{
    public function __construct()
    {
        $this->middleware(['can:before,App\Activity','auth:admin,student']);
    }

    public function index()
    {
        $title = "Activities List";
        $activities = Activity::all();
        return view('activities.index',compact('activities','title'));
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        //
    }

    public function show(Activity $activity)
    {
        $activities = Activity::whereDate('created_at',$activity->created_at)->get();
        $tests = Test::whereDate('created_at',$activity->created_at)
                    ->where('student_id',$activity->student_id)->get();
        $exam = Exam::first();
        return view('activities.show',compact('activities','tests','exam'));
    }

    public function edit(Activity $activity)
    {
        //
    }

    public function update(Request $request, Activity $activity)
    {
        //
    }

    public function destroy(Activity $activity)
    {
        //
    }
}
