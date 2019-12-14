@extends('layouts.master')
@section('backend.title', $page_title)
@section('master.content')
    <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="row">

            <div class="col-lg-3 col-6">
                <!-- Card for Departments -->
                <div class="small-box bg-info">
                    <div class="inner">
                        <h3>{{count($departments)}}</h3>

                        <p>Total Departments</p>
                    </div>
                    <div class="icon">
                        <img src="{{asset('icons/dept.svg')}}" width="70px" height="70px">
                    </div>
                    <a href="{{url('departments')}}" class="small-box-footer">More info <i
                            class="glyphicon glyphicon-chevron-right"></i></a>
                </div>
            </div>

            <div class="col-lg-3 col-6">
                <!-- Card for Departments -->
                <div class="small-box bg-danger">
                    <div class="inner">
                        <h3>{{count($subjects)}}</h3>

                        <p>Total Subjects</p>
                    </div>
                    <div class="icon">
                        <img src="{{asset('icons/sub.svg')}}" width="70px" height="70px">
                    </div>
                    <a href="{{url('subjects')}}" class="small-box-footer">More info <i
                            class="glyphicon glyphicon-chevron-right"></i></a>
                </div>
            </div>
            <div class="col-lg-3 col-6">
                <!-- Card for Departments -->
                <div class="small-box bg-purple-gradient">
                    <div class="inner">
                        <h3>{{count($tests)}}</h3>

                        <p>Total Given Exams</p>
                    </div>
                    <div class="icon">
                        <img src="{{asset('icons/exam.svg')}}" width="70px" height="70px">
                    </div>
                    <a href="{{url('test/'.Auth::guard('student')->id())}}" class="small-box-footer">More info <i
                            class="glyphicon glyphicon-chevron-right"></i></a>
                </div>
            </div>

            <div class="col-lg-3 col-6">
                <!-- Card for Departments -->
                <div class="small-box bg-primary">
                    <div class="inner">
                        <h3>{{count($activities)}}</h3>

                        <p>Activities</p>
                    </div>
                    <div class="icon">
                        <img src="{{asset('icons/activity.png')}}" width="70px" height="70px">
                    </div>
                    <a href="{{url('tests/'.Auth::guard('student')->id())}}" class="small-box-footer">More info <i
                            class="glyphicon glyphicon-chevron-right"></i></a>
                </div>
            </div>

        </div>
    </div>
@stop
