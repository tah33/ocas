@extends('layouts.master')

@section('master.content')
<div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="row">
          <div class="col-lg-3 col-6">
            <!-- Card for Students -->
            <div class="small-box bg-info">
              <div class="inner">
                <h3>{{count($students)}}</h3>
                <p>Total Students</p>
              </div>
              <div class="icon">
                <img src="{{asset('icons/group.png')}}" width="70px" height="70px">
              </div>
              <a href="{{url('students')}}" class="small-box-footer">More info <i class="glyphicon glyphicon-chevron-right"></i></a>
            </div>
          </div>
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
              <a href="{{url('departments')}}" class="small-box-footer">More info <i class="glyphicon glyphicon-chevron-right"></i></a>
            </div>
          </div>

        </div>
      </div>
@stop
