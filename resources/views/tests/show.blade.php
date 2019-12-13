@extends('layouts.master')
@section('master.content')
           <div id="ams-class">

        <div class="row">
            <div class="col-md-3">

                <!-- Profile Image -->
                <div class="box box-primary">
                    <div class="box-body box-profile">
                        <img class="profile-user-img img-responsive img-circle" src="{{url('images/'.$test->student->image)}}" alt="User profile picture">

                        <h3 class="profile-username text-center">{{ $test->student->name }}</h3>

                        <p class="text-muted text-center">{{ $test->student->email }}</p>

                        <ul class="list-group list-group-unbordered">
                            <li class="list-group-item">
                                <b>Username</b> <a class="pull-right">{{ $test->student->username }}</a>
                            </li>
                            <li class="list-group-item">
                                <b>Phone</b> <a class="pull-right">{{ $test->student->phone }}</a>
                            </li>
                            <li class="list-group-item">
                                <b>Age</b> <a class="pull-right">{{ Carbon\Carbon::createFromDate( $test->student->dob)->diff(Carbon\Carbon::now())->format('%y years') }}</a>
                            </li>
                            <li class="list-group-item">
                                <b>Gender</b> <a class="pull-right">{{ $test->student->gender }}</a>
                            </li>
                            <li class="list-group-item">
                                <b>Address</b> <a class="pull-right">{{ $test->student->address }}</a>
                            </li>
                             
                        </ul>
                    <a href="{{url('students',$test->student->id)}}" class="btn btn-primary btn-block"><b>View
                                                Profile</b></a>
                    </div>
                    <!-- /.box-body -->
                </div>
                <!-- /.box -->
            </div>
            <!-- /.col -->
            <div class="col-md-6">
                <div class="nav-tabs-custom">
                    <ul class="nav nav-tabs">
                        <li class="active"><a href="#settings" data-toggle="tab">Subjects</a></li>
                    </ul>
                    <div class="tab-content">

                        <!-- /.tab-pane -->

                        <div class="tab-pane active" id="settings">
                            <div class="container">
                                <div class="row justify-content-center">
                                    <div class="col-md-5">
                                        <div class="card">
                                            <ul class="list-group list-group-unbordered">
                                                @foreach($test->ranks as $key => $rank)
                            <li class="list-group-item">
                                <a href="{{url('tests/'.$rank->subject_id.'/edit')}}"><b>{{$rank->subject->name}}</b></a> <a class="pull-right">{{$rank->marks}}</a>
                            </li>
                            @endforeach
                        </ul>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /.tab-pane -->
                    </div>
                    <!-- /.tab-content -->
                </div>
                <!-- /.nav-tabs-custom -->
            </div>
            <!-- /.col -->
        </div>

    </div>
@stop
