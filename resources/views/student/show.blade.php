@extends('layouts.master')
@section('master.content')
           <div id="ams-class">

        <div class="row">
            <div class="col-md-3">

                <!-- Profile Image -->
                <div class="box box-primary">
                    <div class="box-body box-profile">
                        <img class="profile-user-img img-responsive img-circle" src="{{url('images/'.$student->image)}}" alt="User profile picture">

                        <h3 class="profile-username text-center">{{ $student->name }}</h3>

                        <p class="text-muted text-center">{{ $student->email }}</p>

                        <ul class="list-group list-group-unbordered">
                            <li class="list-group-item">
                                <b>Username</b> <a class="pull-right">{{ $student->username }}</a>
                            </li>
                            <li class="list-group-item">
                                <b>Phone</b> <a class="pull-right">{{ $student->phone }}</a>
                            </li>
                            <li class="list-group-item">
                                <b>Date of Birth</b> <a class="pull-right">{{ $student->dob }}</a>
                            </li>
                            <li class="list-group-item">
                                <b>Age</b> <a class="pull-right">{{ Carbon\Carbon::createFromDate( $student->dob)->diff(Carbon\Carbon::now())->format('%y years %m months %d days') }}</a>
                            </li>
                            <li class="list-group-item">
                                <b>Gender</b> <a class="pull-right">{{ $student->gender }}</a>
                            </li>
                            <li class="list-group-item">
                                <b>Address</b> <a class="pull-right">{{ $student->address }}</a>
                            </li>
                        </ul>
                        @if(Auth::id() == $student->id)
                        <a href="{{'students/'.$student->id.'/edit'}}" class="btn btn-primary btn-block"><b>Edit Profile</b></a>
                        @endif
                    </div>
                    <!-- /.box-body -->
                </div>
                <!-- /.box -->
            </div>
            <!-- /.col -->
            <div class="col-md-6">
                <div class="nav-tabs-custom">
                    <ul class="nav nav-tabs">
                        <li class="active"><a href="#settings" data-toggle="tab">Interested Departments</a></li>
                    </ul>
                    <div class="tab-content">

                        <!-- /.tab-pane -->

                        <div class="tab-pane active" id="settings">
                            <div class="container">
                                <div class="row justify-content-center">
                                    <div class="col-md-5">
                                        <div class="card">
                                            <ul class="list-group list-group-unbordered">
                                                @foreach($student->departments as $key => $department)
                            <li class="list-group-item">
                                <b>{{$key+1}}</b> <a class="pull-right">{{$department->name}} ({{$department->slug}})</a>
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
