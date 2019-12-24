@extends('layouts.master')
@section('backend.title', $title)
@section('master.content')
    <div class="row">
        <!-- /.col -->
        <div class="col-md-12">
            <div class="nav-tabs-custom">
                <ul class="nav nav-tabs">
                    @foreach($test->ranks as $key => $rank)
                        <li class="{{$key == 0 ? 'active' : ''}}"><a href="#subject{{$key}}"
                                                                     data-toggle="tab">{{$rank->subject->name}}</a></li>
                    @endforeach
                    <div class="input-group margin pull-right">
                        <div class="input-group-btn">
                            <button type="button" class="btn btn-primary btn-sm dropdown-toggle" data-toggle="dropdown">
                                PDF
                                <span class="fa fa-caret-down"></span></button>
                            <ul class="dropdown-menu">
                                <li><a href="{{url('ranks-view',$test->id)}}" target="_blank">View</a></li>
                                <li class="divider"></li>
                                <li><a href="{{url('ranks-download',$test->id)}}">Download</a></li>
                            </ul>
                        </div>
                    </div>
                </ul>
                <div class="tab-content">
                    <!-- /.tab-pane -->
                    @foreach($test->ranks as $key => $rank)
                        <div class="tab-pane {{$key == 0 ? 'active' : ''}}" id="subject{{$key}}">
                            <table class="table table-hover">
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
                                @php
                                    $count = 0;
                                    $serial = 1;
                                @endphp
                                @foreach ($questions as $key => $question)
                                    @php  $ques = App\Question::where('id',$key)->first();@endphp
                                    @if($ques->subject_id == $rank->subject_id)
                                        <tr>
                                            <td style="text-align: center">{{ $serial++ }}</td>
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
                                    @endif
                                @endforeach
                                <tr class="bg-gray">
                                    <th colspan="4">Correct
                                    </th>
                                    <td width="25%"><b>{{$count}}</b></td>
                                </tr>
                                <tr class="bg-gray">
                                    <th colspan="4">Total
                                    </th>
                                    <td width="25%"><b>{{$rank->marks}}%</b></td>
                                </tr>
                                </tbody>
                            </table>

                        </div>
                @endforeach
                <!-- /.tab-pane -->
                </div>
                <!-- /.tab-content -->
            </div>
            <!-- /.nav-tabs-custom -->
        </div>
        <!-- /.col -->
    </div>

@stop
