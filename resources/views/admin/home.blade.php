@extends('layouts.master')
@section('backend.title', $page_title)
@section('master.content')


    <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="row">
            <div class="col-lg-3 col-6">
                <!-- Card for Students -->
                <div class="small-box bg-primary">
                    <div class="inner">
                        <h3>{{count($students)}}</h3>
                        <p>Total Students</p>
                    </div>
                    <div class="icon">
                        <img src="{{asset('icons/group.png')}}" width="70px" height="70px">
                    </div>
                    <a href="{{url('students')}}" class="small-box-footer">More info <i
                            class="glyphicon glyphicon-chevron-right"></i></a>
                </div>
            </div>
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
            @if(count($activities) > 0)

        </div>
        <div class="box  box-primary">
            <div class="box-body">
                <table class="table table-hover">
                    <caption>Students Login & Logout Time</caption>
                    <thead>
                    <tr>
                        <th style="text-align: center">No.</th>
                        <th style="text-align: center">Name</th>
                        <th style="text-align: center">UserName</th>
                        <th style="text-align: center">Email</th>
                        <th style="text-align: center">Login Time</th>
                        <th style="text-align: center">Logout Time</th>
                        <th style="text-align: center">Date</th>
                        <th style="text-align: center">Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach ($activities as $key => $activity)
                        <tr>
                            <td style="text-align: center">{{ $key+1 }}</td>
                            <td style="text-align: center">{{ $activity->student->name }}</td>
                            <td style="text-align: center">{{ $activity->student->username }}</td>
                            <td style="text-align: center">{{ $activity->student->email }}</td>
                            <td style="text-align: center">{{ $activity->login_time }}</td>
                            <td style="text-align: center">{{ $activity->logout_time ? $activity->logout_time : "Active" }}</td>
                            <td style="text-align: center">{{Carbon\Carbon::parse($activity->created_at)->format('M d, Y')  }}</td>
                            <td style="text-align: center">
                                <a href="{{url('students',$activity->student->id)}}" class="btn btn-primary btn-sm"><i class="fa fa-eye"></i></a>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
                <hr>
                <center><a href="{{url('activities')}}">See all Activity Items <i class="fa  fa-arrow-right"></i></a></center>
            </div>
        </div>
        @endif
    </div>
@stop
