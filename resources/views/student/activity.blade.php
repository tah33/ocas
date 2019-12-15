@extends('layouts.master')
@section('master.content')
    <style>
        div.dataTables_wrapper div.dataTables_filter input {
            width: 200px;
        }
    </style>
    <div class="row">
        <div class="col-md-6">
            <div class="nav-tabs-custom">
                <ul class="nav nav-tabs">
                    <li class="active"><a href="#activity" data-toggle="tab">Activity</a></li>
                    <li><a href="#test" data-toggle="tab">Tests</a></li>
                </ul>
                <div class="tab-content">
                    <div class="active tab-pane" id="activity">
                            <div class="input-group margin pull-right">
                                <div class="input-group-btn">
                                    <button type="button" class="btn btn-primary btn-sm dropdown-toggle"
                                            data-toggle="dropdown">PDF
                                        <span class="fa fa-caret-down"></span></button>
                                    <ul class="dropdown-menu">
                                        <li><a href="{{url('activity-view',$activities->first()->created_at.'/'.$activities->first()->student_id)}}" target="_blank">View</a></li>
                                        <li class="divider"></li>
                                        <li><a href="{{url('activity-download',$activities->first()->created_at.'/'.$activities->first()->student_id)}}">Download</a></li>
                                    </ul>
                                </div>
                            </div>

                        <table class="table table-hover">
                            <thead>
                            <tr class="bg-gray">
                                <th rowspan="2" class="text-center">SL</th>
                                <th rowspan="2" class="text-center">Student Name</th>
                                <th rowspan="2" class="text-center">Login Time</th>
                                <th rowspan="2" class="text-center">LogOut Time</th>
                                <th rowspan="2" class="text-center">Date</th>
                            </tr>
                            </thead>
                            @php $ids=[]; @endphp
                            <tbody align="center">
                            @foreach ($activities as $key => $activity)
                                <tr>
                                    <td class="text-center">{{ $key+1 }}</td>
                                    @if(!in_array($activity->student_id,$ids))
                                        @php $ids[]=$activity->student_id; @endphp
                                        <td rowspan="{{count($activities)}}" class="text-center">{{ $activity->student->name }}</td>
                                    @endif
                                    <td class="text-center">{{ $activity->login_time }}</td>
                                    <td class="text-center">{{ $activity->logout_time ? $activity->logout_time : 'Active'}}</td>
                                    <td class="text-center">{{\Carbon\Carbon::createFromFormat('Y-m-d H:i:s',$activity->created_at)->format('Y-m-d')  }}</td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                    <!-- /.tab-pane -->
                    <div class="tab-pane" id="test">
                        <div class="center">
                            <div class="input-group margin">
                                <div class="input-group-btn">
                                    <button type="button" class="btn btn-primary btn-sm dropdown-toggle"
                                            data-toggle="dropdown">PDF
                                        <span class="fa fa-caret-down"></span></button>
                                    <ul class="dropdown-menu">
                                        <li><a href="{{url('activity-view',$activities->first()->created_at.'/'.$activities->first()->student_id)}}" target="_blank">View</a></li>
                                        <li class="divider"></li>
                                        <li><a href="{{url('activity-download',$activities->first()->created_at.'/'.$activities->first()->student_id)}}">Download</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <table class="table table-hover">
                            <thead>
                            <tr class="bg-gray">
                                <th rowspan="2" class="text-center">SL</th>
                                <th rowspan="2" class="text-center">Total Percentage</th>
                                <th rowspan="2" class="text-center">Date</th>
                                <th rowspan="2" class="text-center">Action</th>
                            </tr>
                            </thead>
                            <tbody align="center">
                            @foreach ($activity->student->tests as $key => $test)
                                <tr>
                                    <td class="text-center">{{ $key+1 }}</td>
                                    <td class="text-center">{{$test->marks + $test->common_marks }}% out of {{$exam->major + $exam->common}}%</td>
                                    <td class="text-center">{{\Carbon\Carbon::createFromFormat('Y-m-d H:i:s',$test->created_at)->format('Y-m-d')  }}</td>
                                    <td class="text-center"><a href="{{url('tests/'.$test->id)}}" class="btn btn-primary btn-sm"><i class="fa fa-eye"></i></a></td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                    <!-- /.tab-pane -->
                </div>
                <!-- /.tab-content -->
            </div>
            <!-- /.nav-tabs-custom -->
        </div>
    </div>

    @include('excel.students-import')
@stop


