<?php

namespace App\Http\Controllers;

use App\Activity;
use App\Test;
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
        $activities = Activity::all();
        return view('activities.index',compact('activities'));
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
        return view('activities.show',compact('activities','tests'));
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
