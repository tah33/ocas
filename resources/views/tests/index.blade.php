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
        <form method="post" action="{{url('particular-test')}}">@csrf
            <div class="form-group row">
                                <div class="col-md-4">
                                <strong>From:</strong>
                                    <div class="input-group">
                                        <div class="input-group-addon">
                                            <i class="fa fa-calendar"></i>
                                        </div>
                                        <input id="name" type="date"
                                               class="form-control{{ $errors->has('start_date') ? ' is-invalid' : '' }}"
                                               name="start_date" value="{{ old('start_date') }}"
                                               placeholder="Enter Department Name">
                                    </div>
                                    @error('start_date')
                                        <span style="color: red" class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                        @enderror
                                </div>
                                <div class="col-md-4">
                                <strong>To:</strong>

                                    <div class="input-group">
                                        <div class="input-group-addon">
                                            <i class="fa fa-calendar"></i>
                                        </div>
                                        <input id="end_date" type="date"
                                               class="form-control{{ $errors->has('end_date') ? ' is-invalid' : '' }}"
                                               name="end_date" value="{{ old('end_date') }}" placeholder="Enter Short Name">
                                    </div>
                                    @error('end_date')
                                        <span style="color: red" class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                        @enderror
                                </div>
                            </div>
       <input  name="" type="submit" value="Get Reports" target="_blank" class="btn btn-danger btn-sm btn-flat" style="margin-top:10px">
        </form>    
        </div>
    </div>
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
            </div>
            <table id="search" class="table table-hover">
                <caption>Departments List</caption>
                <thead>
                <tr>
                    <th style="text-align: left">No.</th>
                    <th style="text-align: left">Student Name</th>
                    <th style="text-align: left">Total Percentage</th>
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
                        <td style="text-align: left">{{ $test->marks + $test->common_marks }}%</td>
                        <td style="text-align: center">
                            <a href="{{url('tests',$test->id)}}" class="btn btn-primary btn-sm btn-flat"><i class="fa fa-eye"> View</i></a>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
    @include('excel.test-modal')
@stop
