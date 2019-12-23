@extends('layouts.master')
@section('backend.title', $title)

@section('master.content')
 <div id="ams-class">
        <div class="row">
            <div class="col-md-5">

                <!-- Profile Image -->
                <div class="box box-primary">
                    <div class="box-body box-profile">
                        <img class="profile-user-img img-responsive img-circle" src="{{url('images/department',$department->logo)}}" alt="Department Logo">
                        <br><br>
                        <ul class="list-group list-group-unbordered">
                            <li class="list-group-item">
                                <b>Department</b> <a class="pull-right">{{ $department->name }}</a>
                            </li>
                            <li class="list-group-item">
                                <b>Short Name</b> <a class="pull-right">{{ $department->slug }}</a>
                            </li>
                            <li class="list-group-item">
                                <b>Minimum Marks Required</b> <a class="pull-right">{{ $department->minimum }}</a>
                            </li>
                            @if($department->subject()->exists())
                            <li class="list-group-item">
                                <b>Major Subject</b> <a class="pull-right">{{ $department->subject->name }}</a>
                            </li>
                            <li class="list-group-item">
                                <b>Range</b> <a class="pull-right">{{ $department->marks }}</a>
                            </li>
                            @endif
                        </ul>
                        @if(Auth::guard('admin')->check())
                        <a href="{{$department->id.'/edit'}}" class="btn btn-primary btn-block"><b>Edit details</b></a>
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
                            <li class="active"><a href="#settings" data-toggle="tab">Future Scope</a></li>
                        </ul>
                            <div class="tab-content">
                            <!-- /.tab-pane -->
                                <div class="tab-pane active" id="settings">
                                    <div class="container">
                                        <div class="row justify-content-center">
                                            <div class="col-md-5">
                                                <div class="card">
                                                            <p>{{$department->scope}}</p>
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
                                </div>
                            </div>


@stop
