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
            <div class="center">
                <a href="{{url('blocked-students')}}" style="margin: -12px 0 0 110px" class="btn btn-danger btn-sm">Get Excel</a>
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

            <table id="search" class="table table-hover">
                <caption>Admins List</caption>
                <thead>
                <tr>
                    <th style="text-align: center">No.</th>
                    <th style="text-align: center">Name</th>
                    <th style="text-align: center">Username</th>
                    <th style="text-align: center">Email</th>
                    <th style="text-align: center">Action</th>
                </tr>
                </thead>
                <tbody align="center">
                @foreach ($admins as $key => $admin)
                    <tr>
                        <td style="text-align: center">{{ $key+1 }}</td>
                        <td style="text-align: center">{{ $admin->name }}</td>
                        <td style="text-align: center">{{ $admin->username }}</td>
                        <td style="text-align: center">{{ $admin->email }}</td>
                        <td style="text-align: center">
                            <a href="{{url('admins',$admin->id)}}" class="btn btn-primary btn-sm"><i class="fa fa-eye"></i></a>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
    @include('excel.students-import')
@stop


