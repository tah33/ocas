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
                        <a href="{{$department->id.'/edit'}}" class="btn btn-primary btn-block"><b>Edit details</b></a>
                    </div>
                    <!-- /.box-body -->
                </div>
                <!-- /.box -->
            </div>
            <!-- /.col -->
                                </div>
                            </div>


@stop
