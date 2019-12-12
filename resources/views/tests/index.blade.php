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
                @if(Auth::guard('admin')->check())
                    <a href="{{url('departments/create')}}" class="btn btn-success btn-sm">Add Department</a>
                @endif
                <a href="{{url('departments-export')}}" class="btn btn-danger btn-sm">Get Excel</a>
                <div class="input-group margin"  @if(Auth::guard('admin')->check()) style="margin: -30px 0 0 180px" @else
                style="margin: -30px 0 0 80px" @endif>
                    <div class="input-group-btn">
                        <button type="button" class="btn btn-primary btn-sm dropdown-toggle" data-toggle="dropdown">PDF
                            <span class="fa fa-caret-down"></span></button>
                        <ul class="dropdown-menu">
                            <li><a href="{{url('department-view')}}" target="_blank">View</a></li>
                            <li class="divider"></li>
                            <li><a href="{{url('department-download')}}">Download</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <table id="search" class="table table-hover">
                <caption>Departments List</caption>
                <thead>
                <tr>
                    <th style="text-align: left">No.</th>
                    <th style="text-align: left">Student Name</th>
                    <th style="text-align: left">Marks (Major)</th>
                    <th style="text-align: left">Marks (Common)</th>
                    <th style="text-align: left;">Action</th>
                </tr>
                </thead>
                @php $names = []; @endphp
                <tbody>
                @foreach ($tests as $key => $test)
                    <tr>
                        <td style="text-align: left">{{ $key+1 }}</td>
                        @if(!in_array($test->student->name,$names))
                            @php
                            $names[] = $test->student->name;
                            @endphp
                        <td rowspan="{{count($test->student->tests)}}" style="text-align: left">{{ $test->student->name }}</td>
                        @endif
                        <td style="text-align: left">{{ $test->marks }}</td>
                        <td style="text-align: left">{{ $test->common_marks }}</td>
                        <td style="text-align: left">
                            <a href="{{url('tests',$test->id)}}" class="btn btn-success btn-sm"><i
                                    class="fa fa-eye"></i></a>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
@stop
