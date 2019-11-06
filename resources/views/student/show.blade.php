@extends('layouts.master')
@section('content')
<center>
        <div class="card" style="width: 18rem;">
            @if($student->image == '')
                <img class="card-img-top" width="100%" src="{{asset('images/avatar.png')}}" class="img-circle">
            @else
                <img class="card-img-top" width="100%" src="{{asset('images/'.$student->image)}}" class="img-circle">
            @endif
            <div class="card-body">
                <h5 class="card-title">{{$student->name}} Profile</h5>
            </div>
            <style>
                .ul{
                    width: 300px;
                    margin-left: -60px;
                }
            </style>
            <ul class="list-group list-group-flush ul">
                <li class="list-group-item">Name : {{$student->name}}</li>
                <li class="list-group-item">Email : {{$student->email}}</li>
                <li class="list-group-item">UserName : {{$student->username}}</li>
                <li class="list-group-item">Phone : {{$student->phone}}</li>
                <li class="list-group-item">Gender : {{$student->gendername}}</li>
                <li class="list-group-item">Address : {{$student->address}}</li>
            </ul>
            @if($student->id == Auth::id())
            <div class="card-body">
                <a href="{{url('edit-profile',$student->id)}}" class="btn btn-primary">Edit Profile</a>
            </div>
            @endif
        </div>
    </center>
    @stop