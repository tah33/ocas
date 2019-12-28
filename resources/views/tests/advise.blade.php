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
    @php
        $departments =  [];
        $subjects    =  [];
        $highestMarks = [];
        $highest = 0;
        $name = "";
        $tests =[];
        $highest = $test->ranks->max('marks');
    @endphp
    <div class="box box-primary">
        <div class="box-body">
            <table class="table table-hover">
                <caption>Advise</caption>
                <thead>
                <tr>
                    <th style="text-align: center"> Acheived Percentage </th>
                    <th style="text-align: left">Department</th>
                    <th style="text-align: center">Total Percentage Required</th>
                    <th style="text-align: left">Subject</th>
                    <th style="text-align: center">Required Percentage</th>
                    <th style="text-align: center">Achieved Percentage</th>
                </tr>
                </thead>
                <tbody>
                @foreach (Auth::guard('student')->user()->departments as $key => $department)
                    <tr>
                        @if(!in_array($test->id,$tests))
                            @php
                                $tests[]=$test->id;
                            @endphp
                        <td style="text-align: center;vertical-align: middle" rowspan="{{count($test->ranks)}}">{{ $test->marks + $test->common_marks}}%</td>
                        @endif
                        <td style="text-align: left">{{ $department->name }}</td>
                        <td style="text-align: center">{{ $department->minimum }}%</td>
                        <td style="text-align: left">{{ $department->subject->name }}</td>
                        <td style="text-align: center">{{ $department->marks }}%</td>
                        @foreach($test->ranks as $rank)
                            @php
                            if ($rank->marks >= $department->marks && $test->marks + $test->common_marks >= $department->minimum && $department->subject->name == $rank->subject->name)
                                {
                                    $departments[] = $department->name;
                                    $subjects[] = $department->subject->name;
                                }
                                 $highestMarks[] = $rank->marks;

                                $highest = max($highestMarks);
                            @endphp
                            @if($department->subject->name == $rank->subject->name)
                                <td style="text-align: center">{{ $rank->marks }}%</td>

                            @endif
                        @endforeach


                    </tr>
                @endforeach

                </tbody>
            </table>
        </div>
        <div class="panel panel-primary">
            <div class="panel-body">
                @if($advise_department)
                <p class="text-justify"> Dear Student,
                Thank you for your spending your valuable time and effort in attending the test.
                 By utilizing your test , we found you are good in

                 @foreach($subjects as $key => $subject)
                        <strong>{{ $subject }}@if ( ! $loop->last) , @else ($loop->last) .@endif</strong>
                @endforeach
                Based on your performance, you can go with
                @foreach($departments as $department)

                    <strong>{{ $department }} @if ( ! $loop->last) , @else ($loop->last) .@endif </strong>
                    @endforeach
                But we recommend you to go with <strong>{{$advise_department->name}}</strong>, Because you hit the top score in
                    <strong>{{$advise_department->subject->name}}</strong>. By choosing this department, <strong>{{$advise_department->scope}}</strong>.
                </p>
                    @endif
            </div>
        </div>
    </div>
@stop
