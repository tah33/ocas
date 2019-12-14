@extends('layouts.master')
@section('backend.title', $title)

@section('master.content')
           <div class="row">
        <div class="col-md-4">
          <!-- Profile Image -->
          <div class="box box-primary">
            <div class="box-body box-profile">
              <img class="profile-user-img img-responsive img-circle" src="{{url('images/'.$student->image)}}" alt="User profile picture">
              <h3 class="profile-username text-center">{{$student->name}}</h3>
              <p class="text-muted text-center">Student</p>
              <ul class="list-group list-group-unbordered">
                <li class="list-group-item">
                  <b>Username</b> <a class="pull-right">{{$student->username}}</a>
                </li>
                <li class="list-group-item">
                  <b>Email</b> <a class="pull-right">{{$student->email}}</a>
                </li>
                <li class="list-group-item">
                  <b>Phone</b> <a class="pull-right">{{$student->phone}}</a>
                </li>
              </ul>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->

          <!-- About Me Box -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">About {{$student->name}}</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <strong><i class="fa fa-map-marker margin-r-5"></i> Location</strong>
              <p class="text-muted">{{$student->address}}</p>
              <hr>
              <strong><i class="fa fa-calendar margin-r-5"></i>Date of Birth</strong>

              <p class="text-muted">{{$student->dob}}</p>

              <hr>
              <strong><i class="fa fa-birthday-cake margin-r-5"></i>Age</strong>

              <p class="text-muted">{{Carbon\Carbon::createFromDate($student->dob)->diff(Carbon\Carbon::now())->format('%y year')}}</p>
              <hr>
              <strong><i class="fa fa-transgender margin-r-5"></i>Gender</strong>

              <p class="text-muted">{{$student->gendername}}</p>

              <hr>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
        <div class="col-md-6">
          <div class="nav-tabs-custom">
            <ul class="nav nav-tabs">
              <li class="active"><a href="#activity" data-toggle="tab">Activity</a></li>
              <li><a href="#timeline" data-toggle="tab">Interested Department</a></li>
            </ul>
            <div class="tab-content">
              <div class="active tab-pane" id="activity">
                @foreach($activities as $key => $activity)
              <li class="list-group-item">
                  <b>{{$key+1}}</b> <a href="{{url('activities',$activity->id)}}" class="btn btn-primary btn-xs pull-right">{{$activity->date}} <i class="fa fa-arrow-right"></i></a>
                </li>
                @endforeach
              </div>
              <!-- /.tab-pane -->
              <div class="tab-pane" id="timeline">
                  @foreach($student->departments as $key => $department)
                      <li class="list-group-item">
                          <b>{{$key+1}}</b><a href="{{url('departments',$department->id)}}" class="pull-right">{{$department->name}}</a>
                      </li>
                      @endforeach
              </div>
              <!-- /.tab-pane -->
            </div>
            <!-- /.tab-content -->
          </div>
          <!-- /.nav-tabs-custom -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
@stop
