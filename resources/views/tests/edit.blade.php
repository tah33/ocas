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
                <div class="input-group margin" style="margin: 0 0 0 190px">
                    <div class="input-group-btn">
                        <button type="button" class="btn btn-primary btn-sm dropdown-toggle" data-toggle="dropdown">PDF
                            <span class="fa fa-caret-down"></span></button>
                        <ul class="dropdown-menu">
                            <li><a href="{{url('ranks-view')}}" target="_blank">View</a></li>
                            <li class="divider"></li>
                            <li><a href="{{url('ranks-download')}}">Download</a></li>
                        </ul>
                    </div>
                </div>
            </div>

            <table class="table table-hover">
                <caption>{{$subject->name}}'s History</caption>
                 <thead>
                            <tr class="bg-gray">
                                <th rowspan="2" class="text-center">SL</th>
                                <th rowspan="2" class="text-center">Question</th>
                                <th colspan="2" class="text-center">Answers</th>
                                <th rowspan="2" class="text-center">Remarks</th>
                            </tr>
                            <tr class="bg-gray">
                                <th class="text-center">Coorect</th>
                                <th class="text-center">Given</th>
                            </tr>
                        </thead>
                <tbody align="center">
                @php  $count = 0;@endphp
                @foreach ($questions as $key => $question)
                    <tr>
                        <td style="text-align: center">{{ $key+1 }}</td>
                        <td style="text-align: left">{{ $question['question'] }}</td>
                        <td style="text-align: left;">{{ $question['correct_answer'] }}</td>
                        <td>{{ $question['answer'] }}</td>
                        <td>
                            @if( $question['correct_answer'] == $question['answer'])
                                @php  $count++;@endphp
                            <span class="label label-success"><i class="fa fa-check"></i></span>
                            @else
                                <span class="label label-danger"><i class="fa  fa-times"></i></span>
                                @endif
                        </td>
                    </tr>
                @endforeach
                <tr class="bg-gray">
                    <th colspan="4">Total
                    </th>
                    <td width="25%"><b>{{$count}} out of {{count($questions)}}</b></td>
                </tr>

                </tbody>
            </table>
        </div>
    </div>

@stop


