@extends('layouts.master')
@section('master.content')
 <div id="ams-class">
        <div class="row">
            <div class="col-md-5">

                <!-- Profile Image -->
                <div class="box box-primary">
                    <div class="box-body box-profile">
                        <img class="profile-user-img img-responsive img-circle" src="{{url('images/'.'tanvir.jpg')}}" alt="Department Logo">
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
                            
                        </ul>
                        <a href="{{$department->id.'/edit'}}" class="btn btn-primary btn-block"><b>Edit details</b></a>
                    </div>
                    <!-- /.box-body -->
                </div>
                <!-- /.box -->
            </div>
            <!-- /.col -->
           <div class="col-md-4">
                <div class="nav-tabs-custom">
                    <ul class="nav nav-tabs">

                        <li><a href="#timeline" data-toggle="tab">Major</a></li>
                        <li class="active"><a href="#settings" data-toggle="tab">Subjects</a></li>
                    </ul>
                    <div class="tab-content">

                        <!-- /.tab-pane -->
                        <div class="tab-pane" id="timeline">
                            <!-- The timeline -->
                             <ul class="list-group list-group-unbordered">
                                @if($department->subject_id)
                            <li class="list-group-item">
                                <b>Subject</b> <a class="pull-right">{{$department->subject->name}}</a>
                            </li>
                            <li>
                                <b>Marks</b> <a class="pull-right">{{$department->range}}</a>
                            </li>@endif
                        </ul>
                        </div>
                        <!-- /.tab-pane -->

                        <div class="tab-pane active" id="settings">
                            <div class="container">
                                <div class="row justify-content-center">
                                    <div class="col-md-3">
                                        <div class="card">

                                            <ul class="list-group list-group-unbordered">
                                                @if($department->subjects)
                                                @foreach($subjects as $key => $subject)
                            <li class="list-group-item">
                                <b>{{$key+1}}</b> <a class="pull-right">{{$subject->name}}</a>
                            </li>
                            @endforeach
                            <li class="list-group-item">
                                <b>Total Required</b> <a class="pull-right">{{$department->total}}</a>
                            </li>@endif
                        </ul>
                                            </div>
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