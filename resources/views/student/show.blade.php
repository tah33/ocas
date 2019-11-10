@extends('layouts.master')
@section('content')
<div class="col-md-6">
        <div class="box box-primary" style="float: right">
                <caption>User Profile</caption>
<center>

        <div class="card" style="width: 30rem;">
            @if($student->image =='')
                <img class="card-img-top" width="100%" src="{{asset('images/avatar.png')}}" class="img-circle">
            @else
                <img class="card-img-top" width="100%" src="{{asset('images/'.$student->image)}}" class="img-circle">
            @endif
            <div class="card-body">
                <h5 class="card-title">{{$student->name}} Profile</h5>
            </div>
            <ul class="list-group list-group-flush ul">
                <li class="list-group-item">Name : {{$student->name}}</li>
                <li class="list-group-item">Email : {{$student->email}}</li>
                <li class="list-group-item">UserName : {{$student->username}}</li>
                <li class="list-group-item">Phone : {{$student->phone}}</li>
                <li class="list-group-item">gender : {{$student->gender}}</li><li class="list-group-item">addrees : {{$student->addrees}}</li>
                </li>
            </ul>
                <div class="card-body">
                    <a href="{{url('profiles/'.$student->id.'/edit')}}" class="btn btn-primary">Edit Profile</a>
                </div>
            </div>
</center>

    </div>
<div class="box box-success" style="float: right">
                <caption>Interested Department</caption>
            <div class="box-body">
                 <div class="card" style="width: 30rem;">
            <ul class="list-group list-group-flush ul">
                @foreach($student->departments as $department)
                <li class="list-group-item">{{$department->name}}</li>
                   @endforeach     
            </ul>
                 
            </div>
        </div>
</div>
@stop
