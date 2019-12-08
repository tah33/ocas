@extends('layouts.master')
@section('master.content')
    @if(Auth::guard('admin')->check())
        <div class="col-md-6">
            <div class="box box-primary">
                <caption>User Profile</caption>
                <center>

                    <div class="card" style="width: 30rem;">
                        <img class="card-img-top" width="50%" src="{{asset('images/avatar.png')}}" class="img-circle">
                        <div class="card-body">
                            <h5 class="card-title">{{Auth::guard('admin')->user()->name}} Profile</h5>
                        </div>
                        <ul class="list-group list-group-flush ul">
                            <li class="list-group-item">Name : {{Auth::guard('admin')->user()->name}}</li>
                            <li class="list-group-item">Email : {{Auth::guard('admin')->user()->email}}</li>
                            <li class="list-group-item">UserName : {{Auth::guard('admin')->user()->username}}</li>
                            </li>
                        </ul>
                        <div class="card-body">
                            <a href="{{url('profiles/'.$user->id.'/edit')}}" class="btn btn-primary btn-sm">Edit
                                Profile</a>
                        </div>
                    </div>
                </center>
                @else
                    <div id="ams-class">

                        <div class="row">
                            <div class="col-md-3">

                                <!-- Profile Image -->
                                <div class="box box-primary">
                                    <div class="box-body box-profile">
                                        <img class="profile-user-img img-responsive img-circle"
                                             src="{{url('images/'.Auth::guard('student')->user()->image)}}"
                                             alt="User profile picture">

                                        <h3 class="profile-username text-center">{{ Auth::guard('student')->user()->name }}</h3>

                                        <p class="text-muted text-center">{{ Auth::guard('student')->user()->email }}</p>

                                        <ul class="list-group list-group-unbordered">
                                            <li class="list-group-item">
                                                <b>Username</b> <a
                                                    class="pull-right">{{ Auth::guard('student')->user()->username }}</a>
                                            </li>
                                            <li class="list-group-item">
                                                <b>Phone</b> <a
                                                    class="pull-right">{{ Auth::guard('student')->user()->phone }}</a>
                                            </li>
                                            <li class="list-group-item">
                                                <b>Date of Birth</b> <a
                                                    class="pull-right">{{ Auth::guard('student')->user()->dob }}</a>
                                            </li>
                                            <li class="list-group-item">
                                                <b>Age</b> <a
                                                    class="pull-right">{{ Carbon\Carbon::createFromDate( Auth::guard('student')->user()->dob)->diff(Carbon\Carbon::now())->format('%y years %m months %d days') }}</a>
                                            </li>
                                            <li class="list-group-item">
                                                <b>Gender</b> <a
                                                    class="pull-right">{{ Auth::guard('student')->user()->gender }}</a>
                                            </li>
                                            <li class="list-group-item">
                                                <b>Address</b> <a
                                                    class="pull-right">{{ Auth::guard('student')->user()->address }}</a>
                                            </li>
                                        </ul>
                                        <a href="{{$user->id.'/edit'}}" class="btn btn-primary btn-block"><b>Edit
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
                                        <li class="active"><a href="#settings" data-toggle="tab">Interested
                                                Departments</a></li>
                                    </ul>
                                    <div class="tab-content">

                                        <!-- /.tab-pane -->

                                        <div class="tab-pane active" id="settings">
                                            <div class="container">
                                                <div class="row justify-content-center">
                                                    <div class="col-md-5">
                                                        <div class="card">
                                                            <ul class="list-group list-group-unbordered">
                                                                @foreach(Auth::guard('student')->user()->departments as $key => $department)
                                                                    <li class="list-group-item">
                                                                        <b>{{$key+1}}</b> <a
                                                                            class="pull-right">{{$department->name}}
                                                                            ({{$department->slug}})</a>
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
                    </div>
        </div>
    @endif
@stop
