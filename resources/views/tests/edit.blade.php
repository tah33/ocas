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
                <a href="{{url('students-export')}}" class="btn btn-danger btn-sm">Get Excel</a>

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
                <caption>{{$subject->name}}'s History</caption>
                <thead>
                <tr>
                    <th style="text-align: center">No.</th>
                    <th style="text-align: center">Question</th>
                    <th style="text-align: left">Correct Answers</th>
                    <th style="text-align: left">Given Answers</th>
                    <th style="text-align: center">Action</th>
                </tr>
                </thead>
                <tbody align="center">
                @foreach ($questions as $key => $question)
                    <tr>
                        <td style="text-align: center">{{ $key+1 }}</td>
                        <td style="text-align: left">{{ $question->question }}</td>
                        <td style="text-align: left;">{{ $question->correct_ans == 'a' ? $question->option1 : ($question->correct_ans == 'b' ? $question->option2 : ($question->correct_ans == 'c' ? $question->option3 : ($question->correct_ans == 'd' ? $question->option4 : "") ))  }}</td>
                        @foreach($answers as $answer)
                        <td>a</td>
                        @endforeach
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
@stop


