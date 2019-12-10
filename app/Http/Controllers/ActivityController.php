<?php

namespace App\Http\Controllers;

use App\Activity;
use Illuminate\Http\Request;

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
        return view('activities.show',compact('activity'));
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
