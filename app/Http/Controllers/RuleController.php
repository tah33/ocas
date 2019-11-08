<?php

namespace App\Http\Controllers;

use App\rule;
use App\Department;
use App\Subject;
use Illuminate\Http\Request;
use App\Http\Requests\RuleRequest;
use Toastr;
class RuleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $rules=Rule::all();
        return view('rules.index',compact('rules'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $departments = Department::all();
        $subjects = Subject::all();
        return view('rules.create',compact('departments','subjects'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(RuleRequest $request)
    {
        $rule=new Rule;
        $rule->subject_id=$request->subject_id;        
        $rule->department_id=$request->department_id;        
        $rule->range=$request->range;        
        $rule->save();
        Toastr::success('Minimum Range is Set For this Subject to acquire this Department');
        return redirect('rules');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\rule  $rule
     * @return \Illuminate\Http\Response
     */
    public function show(rule $rule)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\rule  $rule
     * @return \Illuminate\Http\Response
     */
    public function edit(rule $rule)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\rule  $rule
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, rule $rule)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\rule  $rule
     * @return \Illuminate\Http\Response
     */
    public function destroy(rule $rule)
    {
        //
    }
}
