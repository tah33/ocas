@extends('layouts.master')
@section('backend.title', $title)

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
            <div class="center" style="margin-left: 400px">
                <a href="{{url('students')}}" class="btn btn-success btn-sm">Students</a>
                <div class="input-group margin" style="margin: -30px 0 0 80px">
                    <div class="input-group-btn">
                        <button type="button" class="btn btn-primary btn-sm dropdown-toggle" data-toggle="dropdown">PDF
                            <span class="fa fa-caret-down"></span></button>
                        <ul class="dropdown-menu">
                            <li><a href="{{url('block-view')}}" target="_blank">View</a></li>
                            <li class="divider"></li>
                            <li><a href="{{url('block-download')}}">Download</a></li>
                        </ul>
                    </div>
                </div>

            </div>
            <table id="search" class="table table-hover table-bordered">
                <caption>Blocked Users List</caption>
                <thead>
                <tr>
                    <th style="text-align: center">No.</th>
                    <th style="text-align: center">Name</th>
                    <th style="text-align: center">Username</th>
                    <th style="text-align: center">Email</th>
                    <th style="text-align: center">Phone</th>
                    <th style="text-align: center">Gender</th>
                    <th style="text-align: center">Action</th>
                </tr>
                </thead>
                <tbody align="center">
                @foreach ($students as $key => $student)
                    <tr>
                        <td style="text-align: center">{{ $key+1 }}</td>
                        <td style="text-align: center">{{ $student->name }}</td>
                        <td style="text-align: center">{{ $student->username }}</td>
                        <td style="text-align: center">{{ $student->email }}</td>
                        <td style="text-align: center">{{ $student->phone }}</td>
                        <td style="text-align: center">{{ $student->gendername }}</td>
                        <td style="text-align: center">
                            <a href="{{url('unblock',$student->id)}}" class="btn btn-success btn-sm"
                               onclick="return confirm('Are you sure you want to unblock This Student?');"><i
                                    class="fa fa-check"></i></a>
                    </tr>
                @endforeach
                </tbody>
            </table>

        </div>
    </div>
@stop
