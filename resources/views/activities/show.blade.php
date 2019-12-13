@extends('layouts.master')
@section('master.content')
    <style>
        div.dataTables_wrapper div.dataTables_filter input {
            width: 200px;
        }

        .center {
            margin: auto;
            width: 50%;
            padding: 10px;
        }
    </style>

    <div class="box box-primary">
        <div class="box-body">
            <div class="center">
                <a href="{{url('blocked-students')}}" class="btn btn-success btn-sm">Blocked Students</a>
                <div class="input-group margin"  style="margin: -30px 0 0 120px">
                    <div class="input-group-btn">
                        <button type="button" class="btn btn-danger btn-sm dropdown-toggle" data-toggle="dropdown">Excel
                            <span class="fa fa-caret-down"></span></button>
                        <ul class="dropdown-menu">
                            <li><a href="{{url('students-export')}}">Export</a></li>
                            <li class="divider"></li>
                            <li><a href="#" data-toggle='modal' data-target="#student-modal">Import</a></li>
                        </ul>
                    </div>
                </div>

                <div class="input-group margin" style="margin: -30px 0 0 190px">
                    <div class="input-group-btn">
                        <button type="button" class="btn btn-primary btn-sm dropdown-toggle" data-toggle="dropdown">PDF
                            <span class="fa fa-caret-down"></span></button>
                        <ul class="dropdown-menu">
                            <li><a href="{{url('students-view')}}" target="_blank">View</a></li>
                            <li class="divider"></li>
                            <li><a href="{{url('students-download')}}">Download</a></li>
                        </ul>
                    </div>
                </div>
            </div>

            <table class="table table-hover">
                 <thead>
                            <tr class="bg-gray">
                                <th rowspan="2" class="text-center">SL</th>
                                <th rowspan="2" class="text-center">Student Name</th>
                                <th rowspan="2" class="text-center">Login Time</th>
                                <th rowspan="2" class="text-center">LogOut Time</th>
                                <th colspan="2" class="text-center">Tests</th>
                            </tr>
                            <tr class="bg-gray">
                                <th>Serial</th>
                                <th>Marks</th>
                            </tr>
                        </thead>
                <tbody align="center">
                	@php 
$userElections = [];
$ids = [];
$user_elections = [];
$user = 1;
@endphp
                @foreach ($activities as $key => $activity)
                    <tr>
                        <td style="text-align: center">{{ $key+1 }}</td>
                        <td style="text-align: left">{{ $activity->student->name }}</td>
                        <td style="text-align: left;">{{ $activity->login_time }}</td>
                        <td style="text-align: left;">{{ $activity->logout_time }}</td>
                    </tr>   
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
    @include('excel.students-import')
@stop


