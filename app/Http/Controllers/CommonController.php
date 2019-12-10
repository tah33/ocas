<?php

namespace App\Http\Controllers;

use App\Common;
use App\Subject;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Toastr;
class CommonController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin,student');
    }

    public function index()
    {
        $commons    = Common::all();
        $subjects   = Subject::all();
        return view('commons.index',compact('commons','subjects'));
    }

    public function create()
    {
        $this->authorize('create',Common::class);

        $subjects = Subject::all();
        return view('commons.create',compact('subjects'));
    }

    public function store(Request $request)
    {
        $request->validate( [
            'subject_id' => 'required|uniques:commons,subject_id',
        ],
            ['subject_id.required' => "Select at least one Subject"]
    );

        foreach ($request->subject_id as $key => $subject) {
            $common                 = new Common;
            $common->subject_id     = $subject;
            $common->save();
        }
        Toastr::success('Subjects are selected as Common Subjects');
        return back();
    }

    public function show(Common $common)
    {
        //
    }

    public function edit(Common $common)
    {
        //
    }

    public function update(Request $request, Common $common)
    {
        //
    }

    public function destroy(Common $common)
    {
        $common->delete();
        Toastr::success('Subject was removed');
        return back();
    }
}
