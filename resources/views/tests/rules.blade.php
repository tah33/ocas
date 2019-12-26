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
                            <table class="table">
                                <tr>
                                    <td>Total Time</td>
                                    <td>{{$exam->time}} Minute</td>
                                </tr>
                                <tr>
                                    <td>Total Questions</td>
                                    <td>{{  $exam->major + $exam->common }} ({{$exam->major}} for Major
                                        & {{$exam->common}} for Common Subject)
                                    </td>
                                </tr>
                            </table>
                            @php
                            $subjects=[];
                            @endphp
                            <table style="width: 70%; font-size: 15px">
                                <caption>Question will appear from</caption>
                                @foreach(Auth::guard('student')->user()->departments as $department)
                                    <tr>
                                        @php
                                            $subjects[]=$department->subject->name;
                                        @endphp
                                        <td>{{$department->subject->name}} </td>
                                    </tr>
                                @endforeach
                                @foreach($commons as $common)
                                    @if(!in_array($common->subject->name,$subjects))
                                    <tr>
                                        <td>{{$common->subject->name}} </td>
                                    </tr>
                                    @endif
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

