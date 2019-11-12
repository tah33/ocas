@extends('layouts.master')
@section('master.content')
<div id="ams-class">
        <div class="row">
            <div class="col-md-3">
                <!-- Profile Image -->
                <div class="box box-primary">
                    <div class="box-body box-profile">
                        @if(!empty($student->image))
                        <img class="profile-user-img img-responsive img-circle" src="{{asset('images/'.$student->image)}}">
                        @else
                        <img class="profile-user-img img-responsive img-circle" src="{{asset('images/avatar.png')}}">
                        @endif
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
                                <b>Gender</b> <a class="pull-right">{{ $student->gender }}</a>
                            </li>
                            <li class="list-group-item">
                                <b>Address</b> <a class="pull-right">{{ $student->address }}</a>
                            </li>
                        </ul>
                    </div>
                    <!-- /.box-body -->
                </div>
                <!-- /.box -->
                            </div>
            <!-- /.col -->
            <div class="col-md-6">
                <div class="nav-tabs-custom">
                    <ul class="nav nav-tabs">
                        <li class="active"><a href="#settings" data-toggle="tab">Interested Department</a></li>
                    </ul>

                            <div class="container">
                                <div class="row justify-content-center">
                                    <div class="col-md-4">
                                        <div class="card">

                                            <div class="card-body">
                                              <ul class="list-group list-group-unbordered">
                                                @foreach($student->departments as $key => $department)
                                                <li class="list-group-item">
                                <b>{{$key+1}}</b> <a class="pull-right">{{ $department->name }}</a>
                            </li>
                            @endforeach
                        </ul>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                    </div>
                </div>
            </div>
        </div>
                       
@stop
