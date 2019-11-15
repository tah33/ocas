@extends('layouts.master')
@section('master.content')
        <div class="row">
            <div class="col-md-3">
                <!-- Profile Image -->
                <div class="box box-primary">
                    <caption>{{$student->name}} Profile</caption>
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
                                <b>Gender</b> <a class="pull-right">{{ $student->gendername }}</a>
                            </li>
                            <li class="list-group-item">
                                <b>Address</b> <a class="pull-right">{{ $student->address }}</a>
                            </li>
                            <li class="list-group-item">
                                <b>Date of Birth</b> <a class="pull-right">{{ $student->dob }}</a>
                            </li>
                            <li class="list-group-item">
                                <b>Age</b> <a class="pull-right">{{ Carbon\Carbon::createFromDate($student->dob)->diff(Carbon\Carbon::now())->format('%y years, %m months and %d days') }}</a>
                            </li>
                        </ul>
                    </div>
                    <!-- /.box-body -->
                </div>
                <!-- /.box -->
                            </div>
            <!-- /.col -->
            <div class="col-md-4">
                <div class="box box-primary">
                    <caption>Interested Department</caption>

                    <div class="box-body box-profile">
                <ul class="list-group list-group-unbordered">
                    @foreach($student->departments as $key => $department)
                    <li class="list-group-item">
                                <b>{{$key+1}}</b> <a class="pull-right">{{ $department->name }}</a>
                            </li>
                    @endforeach
                </div>
                </div>
            </div>
                       
@stop
