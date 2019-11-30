<?php

namespace App\Http\Controllers;

use App\Common;
use App\Subject;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Toastr;
class CommonController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $commons = Common::all();
        $subjects = Subject::all();
        return view('commons.index',compact('commons','subjects'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $subjects = Subject::all();
        return view('commons.create',compact('subjects'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate( [
            'subject_id' => 'required',
        ],
            ['subject_id.required' => "Select at least one Subject"],
    );

        foreach ($request->subject_id as $key => $subject) {
            $common = new Common;
            $common->subject_id = $subject;
            $common->save();
        }
        Toastr::success('Subjects are selected as Common Subjects');
        return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Common  $common
     * @return \Illuminate\Http\Response
     */
    public function show(Common $common)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Common  $common
     * @return \Illuminate\Http\Response
     */
    public function edit(Common $common)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Common  $common
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Common $common)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Common  $common
     * @return \Illuminate\Http\Response
     */
    public function destroy(Common $common)
    {
        $common->delete();
        Toastr::success('Subject was removed');
        return back();
    }
}
