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
                <div class="input-group margin" style="margin: 0 0 0 260px">
                    <div class="input-group-btn">
                        <button type="button" class="btn btn-danger btn-sm dropdown-toggle" data-toggle="dropdown">Excel
                            <span class="fa fa-caret-down"></span></button>
                        <ul class="dropdown-menu">
                            <li><a href="{{url('test-export')}}">Export</a></li>
                            <li class="divider"></li>
                            <li><a href="#" data-toggle="modal" data-target="#test-modal">Import</a></li>
                        </ul>
                    </div>
                </div>
                <div class="input-group margin" style="margin: -30px 0 0 180px">
                    <div class="input-group-btn">
                        <button type="button" class="btn btn-primary btn-sm dropdown-toggle" data-toggle="dropdown">PDF
                            <span class="fa fa-caret-down"></span></button>
                        <ul class="dropdown-menu">
                            <li><a href="{{url('tests-view')}}" target="_blank">View</a></li>
                            <li class="divider"></li>
                            <li><a href="{{url('tests-download')}}">Download</a></li>
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
                    <th style="text-align: left">Total Marks</th>
                    <th style="text-align: center;">Action</th>
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
                        <td style="text-align: left">{{ $test->marks + $test->common_marks }}</td>
                        <td style="text-align: center">
                            <a href="{{url('tests',$test->id)}}" class="btn btn-success btn-sm"><i class="fa fa-eye"></i></a>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
    @include('excel.test-modal')
@stop
