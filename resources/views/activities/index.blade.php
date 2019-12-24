@extends('layouts.master')
@section('master.content')
    <style>
        div.dataTables_wrapper div.dataTables_filter input{
            width: 200px;
        }
        .center {
            margin: auto;
            width: 50%;
            padding: 10px;
        }
    </style>
    <div class="row">
        <div class="box">
            <div class="box-body">
                <table id="search" class="table table-hover">
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
            </div>
        </div>
    </div>
@stop
