@extends('layouts.master')
@section('backend.title', $page_title)
@section('master.content')
{{--@push('backend.css')--}}
{{--    @if($usersChart)--}}
{{--        {!! $usersChart->script() !!}--}}
{{--    @endif--}}
{{--@endpush--}}
    <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="row">

            <div class="col-lg-3 col-6">
                <!-- Card for Departments -->
                <div class="small-box bg-info">
                    <div class="inner">
                        <h3>{{count($departments)}}</h3>

                        <p>Total Departments</p>
                    </div>
                    <div class="icon">
                        <img src="{{asset('icons/dept.svg')}}" width="70px" height="70px">
                    </div>
                    <a href="{{url('departments')}}" class="small-box-footer">More info <i
                            class="glyphicon glyphicon-chevron-right"></i></a>
                </div>
            </div>

            <div class="col-lg-3 col-6">
                <!-- Card for Departments -->
                <div class="small-box bg-danger">
                    <div class="inner">
                        <h3>{{count($subjects)}}</h3>

                        <p>Total Subjects</p>
                    </div>
                    <div class="icon">
                        <img src="{{asset('icons/sub.svg')}}" width="70px" height="70px">
                    </div>
                    <a href="{{url('subjects')}}" class="small-box-footer">More info <i
                            class="glyphicon glyphicon-chevron-right"></i></a>
                </div>
            </div>
            <div class="col-lg-3 col-6">
                <!-- Card for Departments -->
                <div class="small-box bg-purple-gradient">
                    <div class="inner">
                        <h3>{{count($tests)}}</h3>

                        <p>Total Given Exams</p>
                    </div>
                    <div class="icon">
                        <img src="{{asset('icons/exam.svg')}}" width="70px" height="70px">
                    </div>
                    <a href="{{url('test/'.Auth::guard('student')->id())}}" class="small-box-footer">More info <i
                            class="glyphicon glyphicon-chevron-right"></i></a>
                </div>
            </div>

            <div class="col-lg-3 col-6">
                <!-- Card for Departments -->
                <div class="small-box bg-primary">
                    <div class="inner">
                        <h3>{{count($activities)}}</h3>

                        <p>Activities</p>
                    </div>
                    <div class="icon">
                        <img src="{{asset('icons/activity.png')}}" width="70px" height="70px">
                    </div>
                    <a href="{{url('activity/'.Auth::guard('student')->id())}}" class="small-box-footer">More info <i
                            class="glyphicon glyphicon-chevron-right"></i></a>
                </div>
            </div>
        </div>
        <center>
        <div style="width: 100%">
{!! $chart->container() !!}
        </div></center>
{{--        <!-- @if(count($todays_activities) > 0)--}}
{{--            <div class="box  box-primary">--}}
{{--                <div class="box-body">--}}
{{--                    <table class="table table-hover">--}}
{{--                        <caption>Today's Login & Logout Time</caption>--}}
{{--                        <thead>--}}
{{--                        <tr>--}}
{{--                            <th style="text-align: center">No.</th>--}}
{{--                            <th style="text-align: center">Login Time</th>--}}
{{--                            <th style="text-align: center">Logout Time</th>--}}
{{--                            <th style="text-align: center">Action</th>--}}
{{--                        </tr>--}}
{{--                        </thead>--}}
{{--                        <tbody>--}}
{{--                        @foreach ($todays_activities as $key => $activity)--}}
{{--                            <tr>--}}
{{--                                <td style="text-align: center">{{ $key+1 }}</td>--}}
{{--                                <td style="text-align: center">{{ $activity->login_time }}</td>--}}
{{--                                <td style="text-align: center">{{ $activity->logout_time ? $activity->logout_time : "Active" }}</td>--}}
{{--                            </tr>--}}
{{--                        @endforeach--}}
{{--                        </tbody>--}}
{{--                    </table>--}}
{{--                    {{$todays_activities->links()}}--}}
{{--                    <hr>--}}
{{--                    <center><a href="{{url('activity',$activity->student_id)}}">See all of Your Activities <i class="fa  fa-arrow-right"></i></a></center>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        @endif -->--}}
    </div>

@stop

@push('backend.js')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.1/Chart.min.js" charset="utf-8"></script>

    {!! $chart->script() !!}
    @endpush
