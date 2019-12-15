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
    @endphp
    <div class="box box-primary">
        <div class="box-body">
            <table class="table table-hover">
                <caption>Advise</caption>
                <thead>
                <tr>
                    <th style="text-align: center">No.</th>
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
                        <td style="text-align: center">{{ $key+1 }}</td>
                        <td style="text-align: left">{{ $department->name }}</td>
                        <td style="text-align: center">{{ $department->minimum }}%</td>
                        <td style="text-align: left">{{ $department->subject->name }}</td>
                        <td style="text-align: center">{{ $department->marks }}%</td>
                        @foreach($test->ranks as $rank)
                            @php
                            if ($rank->marks > $department->marks && $department->subject->name == $rank->subject->name)
                                {
                                    $departments[] = $department->name;
                                    $subjects[] = $department->subject->name;
                                }
                                 $highestMarks[] = $rank->marks;

                                $highest = max($highestMarks);
                                if( $rank->marks == $highest && $department->subject->name == $rank->subject->name)
                                    $name = $department->name;

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
                Dear Student,
                Thank you for your spending your valuable time and effort in attending the test.
                 By utilizing your test , we found you are good in

                 @foreach($subjects as $subject)
                        <strong>{{$subject}}, </strong>
                @endforeach
                Based on your performance, we can go with

                @foreach($departments as $department)

                    <strong>{{ $department }}, </strong>
                    @endforeach
                departments. But our recomendation is to choose <strong>{{ $name }} </strong>

            </div>
        </div>
    </div>
@stop
