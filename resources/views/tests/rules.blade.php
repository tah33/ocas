@extends('layouts.master')
@section('backend.title', $title)

@section('master.content')
    <style>
        .table {
            border-collapse: collapse;
            width: 70%;
            font-size: 15px;
        }

        table tr:nth-child(odd) {
            background: rgba(77, 77, 77, 0.13);
        }
    </style>
    <div class="row">
        <div class="col-md-8">
            <div class="box box-primary">
                <div class="box-header">
                    <h3 class="box-title">Create Department</h3>
                </div>
                <div class="box-body">
                    <div class=" panel panel-primary">
                        <div class="panel panel-heading">Rules & Regulations</div>
                        <div class="panel panel-body">
                            <div class="row" style="margin: 0px 5px">
                                    <strong width="40%" style="float: left">Total Time: {{$exam->time}} Minute</strong>
                                    <strong width="60%" style="float: right">Total Questions: {{  $exam->major + $exam->common }} ({{$exam->major}} for Major
                                        & {{$exam->common}} for Common Subject)</strong>
                            </div>

                            @php
                            $subjects=[];
                            @endphp
                            <table style="width: 70%; margin-left: 15%" class="table table-striped">
                                <caption style="border-bottom: 1px solid #2b2b2b">Question will appear from</caption>
                                @foreach(Auth::guard('student')->user()->departments as $department)
                                    <tr>
                                        @php
                                            $subjects[]=$department->subject->name;
                                        @endphp
                                        <td>{{$department->subject->name}} </td>
                                    </tr>
                                @endforeach
                                @foreach($commons as $common)
                                    <tr>
                                        <td>{{$common->subject->name}} </td>
                                    </tr>
                                @endforeach
                            </table>
                        </div>
                    </div>
                    <a href="{{url('tests/create')}}" class="btn btn-primary btn-flat btn-sm"><i
                            class="fa fa-caret-square-o-right"> Agree & Start Test</i></a>
                    <a href="{{url('home')}}" class="btn btn-warning btn-flat btn-sm"><i class="fa fa-home"> Cancel & Go
                            Home</i></a>

                </div>
            </div>
        </div>
    </div>
@endsection

