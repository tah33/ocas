@extends('layouts.master')
@section('content')
<div class="col-md-6">
        <div class="box box-primary">
                <caption>User Profile</caption>
<center>

        <div class="card" style="width: 30rem;">
            @if($user->image =='')
                <img class="card-img-top" width="50%" src="{{asset('images/avatar.png')}}" class="img-circle">
            @else
                <img class="card-img-top" width="50%" src="{{asset('images/'.$user->image)}}" class="img-circle">
            @endif
            <div class="card-body">
                <h5 class="card-title">{{$user->name}} Profile</h5>
            </div>
            <ul class="list-group list-group-flush ul">
                <li class="list-group-item">Name : {{$user->name}}</li>
                <li class="list-group-item">Email : {{$user->email}}</li>
                <li class="list-group-item">UserName : {{$user->username}}</li>
                @if($user->phone)<li class="list-group-item">Phone : {{$user->phone}}</li>@endif
                @if($user->gender)<li class="list-group-item">gender : {{$user->gender}}</li>@endif
                @if($user->address)<li class="list-group-item">addrees : {{$user->addrees}}</li>@endif
                </li>
            </ul>
                <div class="card-body">
                    <a href="{{url('profiles/'.$user->id.'/edit')}}" class="btn btn-primary">Edit Profile</a>
                </div>
            </div>
</center>

    </div>
        @if(Auth::guard('student')->check())
<div class="box box-success">
                <caption>Interested Department</caption>
            <div class="box-body">
                 <div class="card" style="width: 30rem;">
                <div class="card-body">
                <h5 class="card-title">Interested Department</h5>
                </div>
            <ul class="list-group list-group-flush ul">
                @foreach($user->departments as $department)
                <li class="list-group-item">{{$department->name}}</li>
                   @endforeach     
            </ul>
                 
            </div>
        </div>
        @endif
</div>
@stop
